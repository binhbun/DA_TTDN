<?php
    require_once("../../config/config.php");
    require_once("../../config/function.php");
    $title = 'DANH MỤC | '.$CMSNT->site('tenweb');
    require_once("../../public/client/Header.php");
    require_once("../../public/client/Nav.php");
?>
<?php
/* BẢN QUYỀN THUỘC VỀ CMSNT.CO | NTTHANH LEADER NT TEAM */
if(isset($_GET['id']))
{
    $row = $CMSNT->get_row(" SELECT * FROM `category` WHERE `id` = '".check_string($_GET['id'])."'  ");
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

<div class="v-theme">
    <div class="pb-10">
        <div class="v-card w-full max-w-6xl mx-auto">
            <div class="md:mx-0">
                <div class="py-2">
                    <div class="mb-16">
                        <div class="mb-6 block">
                            <div class="fade-in text-center uppercase py-1 text-gray-700 text-3xl font-extrabold my-2">
                                Danh Mục <?=$row['title'];?>
                            </div>
                            <div class="mb-2"><span class="mx-auto block w-40 border-2 border-red-500"></span></div>
                        </div>
                        <div class="fade-in grid grid-cols-8 gap-2 px-2 md:px-0">
                            <?php foreach($CMSNT->get_list("SELECT * FROM `groups` WHERE `display` = 'SHOW' AND `category` = '".check_string($_GET['id'])."'  ") as $group) { ?>
                            <div class="hover:shadow-lg col-span-4 sm:col-span-4 md:col-span-2 lg:col-span-2 xl:col-span-2 relative rounded border border-gray-300"
                                style="padding: 1px; padding: 1px;border: 3px solid #00afdb;">
                                <!---->
                                <a href="<?=BASE_URL('Accounts/'.$group['id']);?>">
                                    <img data-src="<?=$group['img'];?>"
                                        class="rounded-t h-28 md:h-48 w-full object-fill object-center lazyLoad" />
                                    <div class="py-1">
                                        <div class="py-1 font-bold text-md px-1 truncate text-center uppercase"
                                            style="color: rgb(247, 176, 60);">
                                            <?=$group['title'];?>
                                        </div>
                                        <ul
                                            class="px-2 flex items-center justify-center font-medium rounded-sm w-full font-medium text-gray-700">
                                            <span>
                                                Số tài khoản:
                                                <b><?=format_cash($CMSNT->num_rows("SELECT * FROM `accounts` WHERE `groups` = '".$group['id']."' AND `username` IS NULL "));?>
                                                </b>
                                            </span>
                                            <!---->
                                        </ul>
                                        <div class="flex px-2 mt-2 justify-center">
                                            <!---->
                                            <!---->
                                        </div>
                                        <div class="mt-2 mb-2 px-2 py-1 flex items-center justify-center mt-9">
                                            <a class="focus:outline-none acc-lien-minh-tu-chon-bb2716012b"
                                                href="<?=BASE_URL('Accounts/'.$group['id']);?>">
                                                <div>
                                                    <style scoped="">
                                                    .acc-lien-minh-tu-chon-bb2716012b:hover {
                                                        filter: brightness(130%);
                                                    }
                                                    </style>
                                                </div> <img
                                                    src="https://cdns.diongame.com/static/image-60bf62c0-1d16-4c36-8c1e-a29003fec9c1.png"
                                                    class="lazyLoad isLoaded">
                                            </a>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <?php }?>
                            <!--LIÊN QUÂN-->
                        </div>
                    </div>
                </div>
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
                                <?=$CMSNT->site('luuy_naptien');?>
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
    function hidetb(){
    
    document.getElementById("indexModal").style.display = 'none';

    
    }
    </script>

<?php 
    require_once("../../public/client/Footer.php");
?>