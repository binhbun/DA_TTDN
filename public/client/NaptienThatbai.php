<?php
    require_once("../../config/config.php");
    require_once("../../config/function.php");
    $title = 'NẠP ATM/MOMO TỰ ĐỘNG| '.$CMSNT->site('tenweb');
    require_once("../../public/client/Header.php");
    require_once("../../public/client/Nav.php");
    CheckLogin();
?>
    <style>
    
    .main-box {
        max-width: 600px;
        margin: 50px auto;
        padding: 20px;
        background-color: #fff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        text-align: center;
    }
    
    .payment-titlte {
        color: #e74c3c;
        font-size: 24px;
    }
    
    .main-box > p {
        color: #333;
        font-size: 16px;
        margin: 20px 0;
    }
    
    .main-box > a, h4 {
        text-decoration: none;
        color: #3498db;
        font-weight: bold;
    }
    
    a:hover {
        text-decoration: underline;
    }
    
    #return-page-btn {
        display: inline-block;
        padding: 10px 20px;
        background-color: #3498db;
        color: #fff;
        border-radius: 5px;
        transition: background-color 0.3s ease;
    }
    
    #return-page-btn:hover {
        background-color: #2980b9;
    }
    
    #return-page-btn1 {
        display: inline-block;
        padding: 10px 20px;
        background-color: #EF4444;
        color: #fff;
        border-radius: 5px;
        transition: background-color 0.3s ease;
    }
    
    #return-page-btn1:hover {
        background-color: #FF6666;
    }

    </style>
    
    <div class="w-full max-w-6xl mx-auto pt-6 md:pt-8 pb-8">
    <div class="grid grid-cols-8 gap-4">
        <?php require_once('Sidebar.php');?>
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
                                    <p class="text-xs">Chuyển khoản ngân hàng/momo online.</p>
                                </div>
                            </div> <button
                                class="select-none focus:outline-none bg-pink-600 text-white text-xs inline-block h-5 flex items-center justify-center font-semibold px-2 rounded">
                                Auto
                            </button>
                        </div>
                        <div class="border-t border-gray-200 mt-2 p-2 select-text">
                            <div class="main-box">
                            <h4 class="payment-titlte">Bạn đã hủy thanh toán!</h4>
                            <p>Nếu có bất kỳ câu hỏi nào, hãy liên hệ với admin</p>
                            <a href="/nap-tien-qua-ngan-hang/" id="return-page-btn">Quay về trang thanh toán</a> <a href="https://m.me/192498543927268" target="_bank" id="return-page-btn1">Nhấn vào đây để liên hệ admin</a>
                        </div>
                            </div>
                        
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
</div>



<?php
    require_once("../../public/client/Footer.php");
?>
