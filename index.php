<?php
    require_once(__DIR__."/config/config.php");
    require_once(__DIR__."/config/function.php");
    $title = 'HOME | '.$CMSNT->site('tenweb');
    require_once(__DIR__."/public/client/Header.php");
    require_once(__DIR__."/public/client/Nav.php");
?>
<div style="background-image: url('https://i.imgur.com/BfkHkGo.jpg');">
<div class="v-theme">
    <div class="my-6">
        <div class="w-full border-4 border-trueGray-800 bg-trueGray-800 max-w-6xl mx-auto relative">
            <div class="flex md:flex-row-reverse flex-wrap">
                <div class="w-full md:w-4/6 pb-0">
                    <div class="ml-0 border-2 border-trueGray">
                        <img src="<?=$CMSNT->site('anhbia');?>" frameborder="0" width="100%" height="350" allowfullscreen=""><img>
                    </div>
                    
                </div>
                <div class="w-full md:w-2/6">
                    <div class="bg-trueGray-800 w-full" style="min-height: 338px;">
                        <div class="flex color-grant font-bold">
                            <div class="cursor-pointer bg-trueGray-800 tablinks" onclick="Tab('nap')">
                                <h2 class="py-1 px-2 w-32 text-center title-grant font-extrabold text-xl md:text-2xl">
                                    NẠP THẺ
                                </h2>
                            </div>
                            <div class="cursor-pointer w-full bg-trueGray-900 tablinks" onclick="Tab('bank')">
                                <h2 class="py-1 text-center px-3 title-grant font-extrabold text-xl md:text-2xl">
                                    NẠP ATM/MOMO </h2>
                            </div>
                            <div class="cursor-pointer w-full bg-trueGray-900 tablinks" onclick="Tab('top')">
                                <h2 class="py-1 text-center px-3 title-grant font-extrabold text-xl md:text-2xl">
                                    TOP NẠP </h2>
                            </div>
                        </div>
                        <span class="tabcontent" id="nap" style="display:block;">
                            <form class="w-full form-header">
                                <a href="/nap-tien-qua-ngan-hang/" class="mt-2 py-1 rounded border border-gray-400 bg-white text-blue-800 text-xl flex items-center justify-center relative" ><br><p style="margin: 5px;">
                                    <font color="#EF4444"><b>Uu tiên thanh toán bằng ATM/MOMO</b></font></p></a>
                                <div class="py-3 px-5">
                                    <span class="mb-2 block">
                                        <div class="flex items-center relative">
                                            <select id="loaithe"
                                                class="border-2 rounded block w-full bg-trueGray-900 focus:border-yellow-500 focus:bg-trueGray-900 text-white appearance-none w-full py-2 px-3 leading-tight focus:outline-none border-trueGray-600">
                                            </select>
                                            <div
                                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-trueGray-700">
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
                                        <div class="flex items-center relative">
                                            <select id="menhgia"
                                                class="border-2 rounded block w-full bg-trueGray-900 focus:border-yellow-500 focus:bg-trueGray-900 text-white appearance-none w-full py-2 px-3 leading-tight focus:outline-none border-trueGray-600">
                                            </select>
                                            <div
                                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-trueGray-700">
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
                                        <div class="flex items-center relative">
                                            <input type="text" id="pin" placeholder="Mã số thẻ"
                                                class="border-2 rounded block w-full bg-trueGray-900 focus:border-yellow-500 focus:bg-trueGray-900 text-white appearance-none w-full py-2 px-3 leading-tight focus:outline-none border-trueGray-600" />
                                        </div>
                                    </span>
                                    <span class="mb-2 block">
                                        <div class="flex items-center relative">
                                            <input type="text" id="seri" placeholder="Số serial"
                                                class="border-2 rounded block w-full bg-trueGray-900 focus:border-yellow-500 focus:bg-trueGray-900 text-white appearance-none w-full py-2 px-3 leading-tight focus:outline-none border-trueGray-600" />
                                        </div>
                                    </span>
                                    <div class="mt-4">
                                        <button type="button" id="NapThe"
                                            class="homepayin uppercase flex items-center justify-center h-10 w-full ff-lalezar pt-1 text-2xl rounded focus:outline-none px-4 text-center btn-inner"
                                            style="color: rgb(51, 51, 51);">
                                            Nạp Ngay
                                        </button>
                                    </div>
                                    
                                    <div class="mt-4">
                                        <button type="button" onclick="location.href='/nap-tien-qua-ngan-hang/';"
                                            class="homepayin uppercase flex items-center justify-center h-10 w-full ff-lalezar pt-1 text-2xl rounded focus:outline-none px-4 text-center btn-inner"
                                            style="color: rgb(51, 51, 51);">
                                            Nạp ATM/MOMO
                                        </button>
                                    </div>
                                </div>
                            </form>

                        </span>
                        <div class="tabcontent" id="bank">
                            <div>
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
                                    <button type="submit" class="homepayin uppercase flex items-center justify-center h-10 w-full ff-lalezar pt-1 text-2xl rounded focus:outline-none px-4 text-center btn-inner"
                                            style="color: rgb(51, 51, 51);">Nạp tiền</button>
                                </form>
                                 <a class="mt-2 py-1 rounded border border-gray-400 bg-white text-blue-800 text-xl flex items-center justify-center relative" ><br><p style="margin: 5px;">
                                <b>Hỗ trợ tất cả<font color="#EF4444"> app ngân hàng, momo, zalopay,... </font>có quét QR hoặc chuyển khoản ngân hàng thì đều thanh toán được nhé.</b></p></a>
                            </div>
                        </div>
                        <div class="tabcontent" id="top">
                            <div class="v-list-top-card py-1 mt-2 md:py-2 px-1 md:px-3">

                                <?php $i=0; foreach($CMSNT->get_list("SELECT * FROM `users` ORDER BY `total_money` DESC LIMIT 6 ") as $top) { ?>
                                <div class="flex items-center justify-between px-2 py-1">
                                    <div class="flex items-center">
                                        <div class="v-star relative">
                                            <i class="bx text-3xl text-red-500 bxs-star"></i>
                                            <span class="absolute font-bold text-white" style="top: 4px; left: 11px;">
                                                <?=$i++;?> </span>
                                        </div>
                                        <span class="ml-1 text-white w-full font-bold truncate"
                                            style="max-width: 8rem;">
                                            <?=$top['username'];?>
                                        </span>
                                    </div>
                                    <div class="font-bold text-lg">
                                        <span class="bg-red-600 w-32 text-white rounded-sm text-center inline-block">
                                            <?=format_cash($top['total_money']);?> <span
                                                class="text-xs"><small>VND</small></span>
                                        </span>
                                    </div>
                                </div>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="pb-10">
        <div class="v-card w-full max-w-6xl mx-auto">
            <div class="md:mx-0">
                <div class="py-2">
                    <div class="mb-16">
                        <div class="mb-6 block">
                            <div class="fade-in text-center uppercase py-1 text-gray-700 text-3xl font-extrabold my-2" style="background-color: #FFFFFF;">
                                Danh Mục Các Game
                            </div>
                            <div class="mb-2"><span class="mx-auto block w-40 border-2 border-red-500"></span></div>
                        </div>
                        <div class="fade-in grid grid-cols-8 gap-2 px-2 md:px-0">
                            <?php foreach($CMSNT->get_list("SELECT * FROM `category` WHERE `display` = 'SHOW' ") as $category) { ?>
                            <div class="hover:shadow-lg col-span-4 sm:col-span-4 md:col-span-2 lg:col-span-2 xl:col-span-2 relative rounded border border-gray-300"
                                style="padding: 1px; padding: 1px;border: 3px solid #122d65;">
                                <!---->
                                <a href="<?=BASE_URL('Groups/'.$category['id']);?>">
                                    <img data-src="<?=BASE_URL($category['img']);?>"
                                        class="rounded-t h-28 md:h-48 w-full object-fill object-center lazyLoad" />
                                    <div class="py-1" style="background-color: #FFFFFF;">
                                        <div class="py-1 font-bold text-md px-1 truncate text-center uppercase"
                                            style="color: rgb(247, 176, 60);">
                                            <?=$category['title'];?>
                                        </div>
                                        <ul
                                            class="px-2 flex items-center justify-center font-medium rounded-sm w-full font-medium text-gray-700">
                                            <span>
                                                Số tài khoản:
                                                <b>9999+ </b>
                                            </span>
                                            <!---->
                                        </ul>
                                        <div class="flex px-2 mt-2 justify-center">
                                            <!---->
                                            <!---->
                                        </div>
                                        <div class="mt-2 mb-2 px-2 py-1 flex items-center justify-center mt-9">
                                            <a class="focus:outline-none acc-lien-minh-tu-chon-bb2716012b"
                                                href="<?=BASE_URL('Groups/'.$category['id']);?>">
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

    <div class="pb-10">
        <div class="v-card w-full max-w-6xl mx-auto">
            <div class="md:mx-0">
                <div class="py-2">
                    <div class="mb-16">
                        <div class="mb-6 block" >
                            <div class="fade-in text-center uppercase py-1 text-gray-700 text-3xl font-extrabold my-2" style="background-color: #FFFFFF;">
                                DANH MỤC DỊCH VỤ
                            </div>
                            <div class="mb-2"><span class="mx-auto block w-40 border-2 border-red-500"></span></div>
                        </div>
                        <div class="fade-in grid grid-cols-8 gap-2 px-2 md:px-0">
                            <?php foreach($CMSNT->get_list("SELECT * FROM `category_caythue` WHERE `display` = 'SHOW' ") as $category) { ?>
                            <div class="hover:shadow-lg col-span-4 sm:col-span-4 md:col-span-2 lg:col-span-2 xl:col-span-2 relative rounded border border-gray-300"
                                style="padding: 1px; padding: 1px;border: 3px solid #122d65;">
                                <!---->
                                <a href="<?=BASE_URL('dich-vu/'.$category['id']);?>">
                                    <img data-src="<?=BASE_URL($category['img']);?>"
                                        class="rounded-t h-28 md:h-48 w-full object-fill object-center lazyLoad" />
                                    <div class="py-1" style="background-color: #FFFFFF;">
                                        <div class="py-1 font-bold text-md px-1 truncate text-center uppercase"
                                            style="color: rgb(247, 176, 60);">
                                            <?=$category['title'];?>
                                        </div>
                                        <ul
                                            class="px-2 flex items-center justify-center font-medium rounded-sm w-full font-medium text-gray-700">
                                            <span>
                                                Số dịch vụ:
                                                <b>9999+ </b>
                                            </span>
                                            <!---->
                                        </ul>
                                        <div class="flex px-2 mt-2 justify-center">
                                            <!---->
                                            <!---->
                                        </div>
                                        <div class="mt-2 mb-2 px-2 py-1 flex items-center justify-center mt-9">
                                            <a class="focus:outline-none acc-lien-minh-tu-chon-bb2716012b"
                                                href="<?=BASE_URL('dich-vu/'.$category['id']);?>">
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
                            <?=$CMSNT->site('thongbao');?>
                        </div>
                    </div>
                    <div class="text-right">
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
    
    $("#NapThe").on("click", function() {
        $('#NapThe').html('ĐANG XỬ LÝ').prop('disabled',
            true);
        $.ajax({
            url: "<?=BASE_URL("assets/ajaxs/NapThe.php");?>",
            method: "POST",
            data: {
                loaithe: $("#loaithe").val(),
                menhgia: $("#menhgia").val(),
                seri: $("#seri").val(),
                pin: $("#pin").val()
            },
            success: function(response) {
                $("#thongbao").html(response);
                $('#NapThe').html(
                        'NẠP NGAY')
                    .prop('disabled', false);
            }
        });
    });
    </script>

    <script type="text/javascript">
    $(document).ready(function() {
        setTimeout(e => {
            GetCard24()
        }, 0)
    });

    function GetCard24() {
        $.ajax({
            url: "<?=BASE_URL('api/loaithe.php');?>",
            method: "GET",
            success: function(response) {
                $("#loaithe").html(response);
            }
        });
        $.ajax({
            url: "<?=BASE_URL('api/menhgia.php');?>",
            method: "GET",
            success: function(response) {
                $("#menhgia").html(response);
            }
        });

    }
    
    
    
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
    require_once(__DIR__."/public/client/Footer.php");
?>