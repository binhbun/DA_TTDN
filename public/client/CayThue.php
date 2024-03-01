<?php
        require_once("../../config/config.php");
        require_once("../../config/function.php");
        $title = 'THANH TOÁN | '.$CMSNT->site('tenweb');
        require_once("../../public/client/Header.php");
        require_once("../../public/client/Nav.php");
?>
<?php
/* BẢN QUYỀN THUỘC VỀ CMSNT.CO | NTTHANH LEADER NT TEAM */
if(isset($_GET['id']))
{
    $row = $CMSNT->get_row(" SELECT * FROM `category_caythue` WHERE `id` = '".check_string($_GET['id'])."'  ");
    if(!$row)
    {
        admin_msg_error("Liên kết không tồn tại", BASE_URL(''), 500);
    }
}
else
{
    admin_msg_error("Liên kết không tồn tại", BASE_URL(''), 0);
}

?>


<div class="mt-12 relative w-full max-w-6xl mx-auto text-gray-800 pb-8 px-2 md:px-0">
    <div class="sticky col-span-12 grid grid-cols-10 gap-2 select-none py-2 px-2 color-grant text-xl font-bold rounded"
        style="background: rgb(37 37 37); top: 60px; index: 98;">
        <div class="col-span-12 md:col-span-12 text-center">
        DỊCH VỤ: <?=$row['title'];?>
        </div>
    </div>
    <div class="mt-4">
                <div style="text-align: center;"><b style=""><font color="#0000ff">🏆<span style="font-weight: bolder;"><font color="#ff0000"><a href="https://shop.binhbun.com/nap-tien-qua-ngan-hang/">Nạp bằng ATM/Momo =&gt;&gt;&gt;&nbsp;</a><span style="background-color: rgb(255, 255, 0);"><a href="https://shop.binhbun.com/nap-tien-qua-ngan-hang/" target="_blank">Bấm Vào Đây!</a></span></font></span></font></b></div>
        <div style="text-align: center;"><b style=""><font color="#0000ff">🔰An Toàn - Ổn Định - Lâu Bền</font></b></div>
        <div style="text-align: center;"><br></div><div style="text-align: center;"><p></p></div>

                        <a href="https://m.me/192498543927268" target="_blank"
                    class="mt-2 py-1 rounded border border-gray-400 bg-white text-blue-800 text-xl flex items-center justify-center relative"><p>
                            <font color="#ff00ff"><b>💬Bấm vào đây để Liên hệ Admin</b></font></p></a> 
                            
                            
        <div class="v-infomations border-t border-b border-gray-700 py-4 mb-10">
                <div class="py-3 px-5">
                    <span class="mb-2 block">
                        <div class="flex items-center relative">
                            <select id="dichvu"
                                class="border border-gray-500 rounded bg-white text-gray-800 appearance-none w-full py-2 px-3 leading-tight focus:outline-none">
                                <option value="">* Chọn dịch vụ cần thuê</option>
                                <?php foreach($CMSNT->get_list("SELECT * FROM `groups_caythue` WHERE `category` = '".$row['id']."' ") as $group) {?>
                                <option value="<?=$group['id'];?>"><?=$group['title'];?>  | Giá: <?=$group['money'];?>đ</option>
                                <?php }?>
                            </select>
                            <div
                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                    class="fill-current h-4 w-4">
                                    <path
                                        d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                    </span>
                    <span class="mb-2 block">
                        <div class="flex items-center relative"><input placeholder="Nhập tk or sđt" id="tk"
                                class="border border-gray-500 rounded bg-white text-gray-800 appearance-none w-full py-2 px-3 leading-tight focus:outline-none">
                        </div>
                    </span>
                    <span class="mb-2 block">
                        <div class="flex items-center relative"><input placeholder="Nhập mật khẩu" id="mk"
                                class="border border-gray-500 rounded bg-white text-gray-800 appearance-none w-full py-2 px-3 leading-tight focus:outline-none">
                        </div>
                    </span>
                    <span class="mb-2 block">
                        <div class="flex items-center relative"><textarea placeholder="Nhập ghi chú nếu có" id="ghichu"
                                class="border border-gray-500 rounded bg-white text-gray-800 appearance-none w-full py-2 px-3 leading-tight focus:outline-none"></textarea>
                        </div>
                    </span>
                    <div class="mt-4 text-center"><button type="button" id="Submit"
                            class="uppercase flex w-40 font-semibold rounded items-center justify-center h-10 text-white text-xl rounded-none focus:outline-none px-4 text-center bg-red-500 hover:bg-red-600">
                            ĐẶT HÀNG
                        </button>
                    </div>
                </div>
            </div>
        </div>
   
   
        <div class="v-account-detail p-2 md:px-0 mt-4">
            <div class="v-account-detail-1" id="taikhoan">
                <div class="mb-10">
                    <img src="<?=BASE_URL($row['img']);?>" data-sizes="auto" class="border border-gray-400 mb-2 w-full lazyLoad lazy" />
                </div>
            </div>
        </div>
    </div>
</div>

    <div class="animated modal fadeIn is-visible fixed z-50 pin bg-smoke-dark flex p-2 md:p-0 top-0 left-0 bottom-0 right-0"
        style="z-index: 999;" id="indexModal">
        <div
            class="animated fadeInDown fixed shadow-inner max-w-md md:max-w-lg relative pin-b pin-x align-top m-auto justify-center bg-white rounded w-full h-auto md:shadow-lg flex flex-col">
            <div class="modal-content">
                <div class="text-red-600 font-bold text-lg text-center mb-3 p-3 uppercase border-b border-gray-300">
                    Thông báo
                </div>
                <div class="overflow-auto p-2 md:px-4" style="max-height: 600px;">
                    <div class="relative px-2 pb-4 text-gray-900">
                        <div class="md:px-4 overflow-auto p-2" style="max-height:400px">
                            <div class="pb-4 px-2 relative text-gray-900">
                                <?=$CMSNT->site('luuy_napbank');?>
                            </div>
                           
                        </div> <div class="text-right">
                    <button class="text-red-600 font-bold mb-1 p-2 float-right border-2 border-yellow-500 rounded-full" name="btnclose" onclick="hidetb()">❌ Đóng</button>
                </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

<script type="text/javascript">
$("#Submit").on("click", function() {

    $('#Submit').html('ĐANG XỬ LÝ').prop('disabled',
        true);
    $.ajax({
        url: "<?=BASE_URL("assets/ajaxs/CayThue.php");?>",
        method: "POST",
        data: {
            type: 'Order',
            tk: $("#tk").val(),
            mk: $("#mk").val(),
            ghichu: $("#ghichu").val(),
            dichvu: $("#dichvu").val()
        },
        success: function(response) {
            $("#thongbao").html(response);
            $('#Submit').html(
                    'ĐẶT HÀNG')
                .prop('disabled', false);
        }
    });
});



    function hidetb(){
    
    document.getElementById("indexModal").style.display = 'none';

    
    }
</script>

<?php 
    require_once("../../public/client/Footer.php");
?>