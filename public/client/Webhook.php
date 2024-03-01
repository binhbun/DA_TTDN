<?php
require_once("../../config/config.php");
require_once("../../config/function.php");
require_once("../../utils/SignatureUtils.php");
try {
    $currentMethod = $_SERVER['REQUEST_METHOD'];
    if ($currentMethod !== "POST") {
        throw new Exception("not working");
    }
    $json_data = file_get_contents("php://input");

    // Decode the JSON data into an associative array
    $dataReq = json_decode($json_data, true);
    if (empty($dataReq['data'])) {
        $CMSNT->insert('transaction_details', ['reason' => "empty data", 'order_code' => $data['orderCode'], "json" => json_encode(['webhook' => json_encode($dataReq)])]);
        throw new Exception("empty data");
    }

    $data = $dataReq['data'];
    $PAYOS_CHECKSUM_KEY = env('PAYOS_CHECKSUM_KEY');
    $webhookDataSignature = SignatureUtils::createSignatureFromObj($PAYOS_CHECKSUM_KEY, $data);
    if ($webhookDataSignature != $dataReq["signature"]) {
        $CMSNT->insert('transaction_details', ['reason' => "Signature not match", 'order_code' => $data['orderCode'], "json" => json_encode(['webhook' => json_encode($dataReq)])]);
        throw new Exception("Signature not match");

    }
    $isSuccess = $data['code'] == "00";
    $transaction = $CMSNT->get_row(" SELECT * FROM `transactions` WHERE `order_code` = '{$data['orderCode']}'");

    if (empty($transaction)) {
        throw new Exception("empty transaction");
    }

    $user = $CMSNT->get_row(" SELECT * FROM `users` WHERE `id` = '{$transaction['user_id']}'");
    if (empty($user)) {
        throw new Exception("empty user");
    }
    $CMSNT->update("transactions", array(
        'status'    => $isSuccess ? 2 : 3,
    ), " `order_code` = '".$data['orderCode']."' ");

    if ($isSuccess) {
        $CMSNT->update("users", array(
            'money'         => $user['money'] + ($data['amount'] ?? 0),
        ), " `id` = '".$user['id']."' ");
        
        $CMSNT->update("users", array(
            'total_money'         => $user['total_money'] + ($data['amount'] ?? 0),
        ), " `id` = '".$user['id']."' ");
        
        $CMSNT->insert("dongtien", array(
            'sotientruoc' => $user['money'] + ($data['amount'] ?? 0),
            'sotienthaydoi' => ($data['amount'] ?? 0),
            'sotiensau' => $user['money'],
            'thoigian' => gettime(),
            'noidung' => 'Nạp tiền tự động ATM/MOMO',
            'username' => $user['username']
        ));
    }

    $CMSNT->insert('transaction_details', ['order_code' => $data['orderCode'], "json" => json_encode(['webhook' => json_encode($dataReq)])]);
    http_response_code(200);
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($data);
    exit();
} catch (Throwable $ex) {
    http_response_code(200);
    echo $ex->getMessage();
    die();
}
