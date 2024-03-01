<?php

require_once("../../config/config.php");
require_once("../../config/function.php");
$title = 'NẠP ATM/MOMO TỰ ĐỘNG | ' . $CMSNT->site('tenweb');
require_once("../../public/client/Header.php");
require_once("../../public/client/Nav.php");
require_once("../../utils/SignatureUtils.php");
if(empty($_SESSION['username']))
{
    msg_error("Vui lòng đăng nhập ", BASE_URL('Auth/Login'), 2000);
}
?>
<?php
try {
    $currentMethod = $_SERVER['REQUEST_METHOD'];
    if ($currentMethod !== "POST" || empty($getUser)) {
        throw new Exception("not working");
    }
    $money = intval($_POST["money"]);
    if (!is_numeric($money) || 0 >= $money || $money >= 1000000000) {
        throw new Exception("not match");
    }
    $baseUrl = $base_url ?? "";
    $data = getDataReq($money, $baseUrl, $getUser);
    $response = doCreateRequest($data, $getUser);

    redirect(handleResponse($response));

} catch (Throwable $ex) {
    die($ex->getMessage());
//    redirect();
}

function handleResponse($response)
{
    $response = json_decode($response, true);
    return $response["data"]["checkoutUrl"];
}

function getDataReq($money, $baseUrl, $getUser): array
{
    $data = [
        "orderCode" => intval(substr(strval(microtime(true) * 10000), -6)),
        "amount" => $money,
        "description" => $getUser['username'],
        "returnUrl" => $baseUrl.env('PAYOS_REDIRECT_SUCCESS'),
        "cancelUrl" => $baseUrl.env('PAYOS_REDIRECT_CANCEL'),
    ];

    $data["signature"] = SignatureUtils::createSignaturePaymentRequest(env('PAYOS_CHECKSUM_KEY'), $data);
    return $data;
}

/**
 * @throws Exception
 */
function doCreateRequest($data, $user)
{
    $CMSNT = new CMSNT;

    $clientId = env('PAYOS_CLIENT_ID');
    $apiKey = env('PAYOS_API_KEY');

    $header = array(
        "Content-Type: application/json",
        "x-client-id: $clientId",
        "x-api-key: $apiKey",
    );

    $paymentRequest = curl_init();
    curl_setopt($paymentRequest, CURLOPT_URL, env('PAYOS_URL'));
    curl_setopt($paymentRequest, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($paymentRequest, CURLOPT_HTTPHEADER, $header);
    curl_setopt($paymentRequest, CURLOPT_POST, 1);
    curl_setopt($paymentRequest, CURLOPT_POSTFIELDS, json_encode($data));
    $response = curl_exec($paymentRequest);
    $CMSNT->insert('transactions', dataInsertTransaction($data, $user));
    $CMSNT->insert('transaction_details', ['order_code' => $data['orderCode'], "json" => json_encode(['request' => json_encode($data), 'res' => $response])]);

    $responseCode = curl_getinfo($paymentRequest, CURLINFO_HTTP_CODE);
    if (curl_errno($paymentRequest)) {
        throw new Exception(curl_error($paymentRequest));
    }

    if ($responseCode < 200 || $responseCode > 226) {
        throw new Exception(curl_error($paymentRequest)." $responseCode");
    }
    #Ensure to close curl
    curl_close($paymentRequest);

    return $response;
}




