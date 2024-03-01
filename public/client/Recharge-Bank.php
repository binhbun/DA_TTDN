<?php
    require_once("../../config/config.php");
    require_once("../../config/function.php");
    $title = 'NẠP ATM/MOMO TỰ ĐỘNG| '.$CMSNT->site('tenweb');
    require_once("../../public/client/Header.php");
    require_once("../../public/client/Nav.php");
?>
<div class="w-full max-w-6xl mx-auto pt-6 md:pt-8 pb-8">
    <div class="grid grid-cols-8 gap-4">
        <div class="col-span-8 sm:col-span-5 md:col-span-6 lg:col-span-6 xl:col-span-6 px-2 md:px-0">
            <div class="w-full mb-10">
                <h2
                    class="v-title uppercase border-l-4 border-gray-800 px-3 select-none text-gray-800 text-xl md:text-2xl font-bold">
                    Nạp tiền qua ATM/MOMO
                </h2>
                <div class="mt-4 text-gray-900">
                    <div class="p-2 border border-gray-300 mb-4">
                        <div class="flex justify-between items-center cursor-pointer">
                            <div class="flex select-none"><img src="<?=BASE_URL('assets/img/');?>bank.png"
                                    class="h-10 w-10 rounded">
                                <div class="ml-2 text-left">
                                    <h2 class="font-bold text-base">
                                        Chuyển khoản qua Ngân hàng & Ví điện tử
                                    </h2>
                                    <p class="text-xs">Chuyển khoản ngân hàng online.</p>
                                </div>
                            </div> <button
                                class="select-none focus:outline-none bg-pink-600 text-white text-xs inline-block h-5 flex items-center justify-center font-semibold px-2 rounded">
                                Auto
                            </button>
                        </div>
                        <div>
                            <div><br>
                                <a class="mt-2 py-1 rounded border border-gray-400 bg-white text-blue-800 text-xl flex items-center justify-center relative" ><br><p style="margin: 5px;">
                                <font color="#EF4444"><b>Sau khi bấm vào "NẠP TIỀN" chuyển khoản đúng theo như mẫu 100% nhé.</b></font></p></a>
                                <form
                                        style="display: flex; justify-content: center; flex-direction: column; padding: 10px; max-width: 500px; margin: auto;"
                                        action="/nap-tien-qua-qr-pay/"
                                        method="post"
                                >
                                    <div style="justify-content: center; margin: 20px 2px;">
                                        <div id="donvitien"  style="text-align: center;"></div>
                                        <input id="payosmoney" type="number" pattern="[0-9]+" inputmode="numeric" placeholder="Nhập số tiền cần nạp" required class="border border-gray-500 rounded bg-white text-gray-800 appearance-none w-full py-2 px-3 leading-tight focus:outline-none" name="money">
                                    </div>
                                    <button type="submit" class="homepayin uppercase flex font-semibold items-center justify-center h-10 w-full ff-lalezar pt-1 text-2xl text-white text-xl rounded focus:outline-none px-4 text-center bg-red-500 hover:bg-red-600">Nạp tiền</button>
                                </form>

                             <a class="mt-2 py-1 rounded border border-gray-400 bg-white text-blue-800 text-xl flex items-center justify-center relative" ><br><p style="margin: 5px;">
                                <b>Hỗ trợ tất cả<font color="#EF4444"> app ngân hàng, momo, zalopay,... </font>có quét QR hoặc chuyển khoản ngân hàng thì đều thanh toán được nhé.</b></p></a>
                            </div>
                            <div class="ml-2 text-left">
                                <hr>
                                
                                    <h2 class="font-bold text-base"><br>
                                        Nếu cần hỗ trợ liên hệ với ADMIN: <a href="https://m.me/192498543927268" target="_bank" id="return-page-btn1">Nhấn vào đây để liên hệ admin</a>
                                    </h2>
                            </div>
                            <div class="border-t border-gray-200 mt-2 p-2 select-text">
                                <br>
                                <div class="v-bg w-full mb-2 px-2"><h2
                                        class="v-title  border-gray-800 px-3 select-none text-gray-800 text-xl md:text-2xl font-bold">
                                        VIDEO HƯỚNG DẪN THANH TOÁN ATM/MOMO TỰ ĐỘNG
                                    </h2>
                                    <div style="display: flex; justify-content: center; align-items: center;">
                                      <iframe width="560" height="315" src="https://www.youtube.com/embed/yhz4fFtWJwg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen="allowfullscreen" data-v-a1b911ec></iframe>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="border-t border-gray-200 mt-2 p-2 select-text">
                                <br>
                                <div class="v-bg w-full mb-2 px-2"><h2
                                        class="v-title border-gray-800 px-3 select-none text-gray-800 text-xl md:text-2xl font-bold">
                                        LỊCH SỬ NẠP ATM/MOMO
                                    </h2>
                                    <div class="v-table-content select-text">
                                        <div class="py-2 overflow-x-auto scrolling-touch max-w-400">
                                            <table id="datatable" class="table-auto w-full scrolling-touch min-w-850">
                                                <thead>
                                                    <tr class="v-border-hr select-none border-b-2 border-gray-300">
                                                        <th class="v-table-title py-2 text-sm font-bold text-gray-800 text-left px-1">
                                                            STT
                                                        </th>
                                                        <th class="v-table-title py-2 text-sm font-bold text-gray-800 text-left px-1">
                                                            SỐ TIỀN
                                                        </th>
                                                        <th class="v-table-title py-2 text-sm font-bold text-gray-800 text-left px-1">
                                                            TRẠNG THÁI
                                                        </th>
                                                        <th class="v-table-title py-2 text-sm font-bold text-gray-800 text-left px-1">
                                                            NẠP LÚC
                                                        </th>
                                                    </tr>
                                                </thead>
                                               <tbody class="text-sm font-semibold">
                                                <?php 
                                                $i = 0; 
                                                $transactionsList = $CMSNT->get_list("SELECT * FROM `transactions` WHERE `user_id` = '".$getUser['id']."' ORDER BY `id` DESC");
                                            
                                                foreach ($transactionsList as $transactions) { 
                                                ?>
                                                    <tr>
                                                        <td class="text-sm text-gray-800 text-left px-1 py-1 border-b"><?= $i++; ?></td>
                                                        <td class="text-sm text-gray-800 text-left px-1 py-1 border-b"><?= format_cash($transactions['amount']); ?></td>
                                                        <td class="text-sm text-gray-800 text-left px-1 py-1 border-b" style="color: <?= ($transactions['status'] == 2) ? 'green' : 'red'; ?>;">
                                                            <?= ($transactions['status'] == 2) ? 'Thành công' : 'Thất bại'; ?>
                                                        </td>
                                                        <td class="text-sm text-gray-800 text-left px-1 py-1 border-b"><?= $transactions['created_at']; ?></td>
                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                            </table>
                                        </div>
                                        <div class="v-table-note mt-1 py-1 font-semibold text-gray-800 text-sm">
                                            Dùng điện thoại <i class="bx bxs-mobile"></i>, hãy vuốt bảng từ phải qua trái (<i
                                                class="bx bxs-arrow-from-right"></i>) để xem đầy đủ thông tin!
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div><?php require_once('Sidebar.php');?>
    </div>
    
        
</div>
</div>
<style>
        
    #return-page-btn1 {
        display: inline-block;
        padding: 10px 20px;
        background-color: #3498db;
        color: #fff;
        border-radius: 5px;
        transition: background-color 0.3s ease;
    }
    
    #return-page-btn1:hover {
        background-color: #EF4444;
    }

</style>
<script>
const node = document.getElementById("payosmoney");
      node.addEventListener("input", function(event) {
            var n = parseFloat(this.value.replace(/[^\d.-]/g, ''));
        
            const formatCash = (n) => {
                if (isNaN(n)) return "Nhập số tiền hợp lệ!";
                const formatter = new Intl.NumberFormat("vi-VN", {
                    style: "currency",
                    currency: "VND",
                    minimumFractionDigits: 0,
                    maximumFractionDigits: 0,
                });
                return formatter.format(n);
            };
    document.getElementById("donvitien").innerHTML = '<b style="font-size:18px;color:#ff4444;margin:10px 0px; display:block">' + formatCash(n) + '</b>';
});
</script>

<?php
    require_once("../../public/client/Footer.php");
?>
