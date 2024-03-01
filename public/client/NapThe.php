<?php
    require_once("../../config/config.php");
    require_once("../../config/function.php");
    $title = 'NẠP THẺ CÀO | '.$CMSNT->site('tenweb');
    require_once("../../public/client/Header.php");
    require_once("../../public/client/Nav.php");
    if(empty($_SESSION['username']))
    {
        msg_error("Vui lòng đăng nhập ", BASE_URL(''), 2000);
    }
?>
<div class="w-full max-w-6xl mx-auto pt-6 md:pt-8 pb-8">
    <div class="grid grid-cols-8 gap-4">
        <?php require_once('Sidebar.php');?>
        <div class="col-span-8 sm:col-span-5 md:col-span-6 lg:col-span-6 xl:col-span-6 px-2 md:px-0">
            <div class="w-full mb-2">
                <div class="rounded w-full">
                    <span>
                        <form method="POST" class="w-full">
                            <center>
                                <h2
                                class="v-title border-l-4 border-gray-800 px-3 select-none text-gray-800 text-xl md:text-2xl font-bold">
                                NẠP THẺ AUTO
                            </h2>
                            <p style="text-align: center;"><span class="text-big" style="color: rgb(153, 77, 230);"><span style="font-weight: bolder;">Khuyến khích Nạp ATM/Momo!</span></span></p><p style="text-align: center;"><font color="#e64d4d"><span style="font-weight: bolder;">+ Hỗ trợ gặp lỗi khi nạp tiền 1-1</span></font></p><h3 style="text-align: center; " source="" sans="" pro",="" -apple-system,="" blinkmacsystemfont,="" "segoe="" ui",="" roboto,="" "helvetica="" neue",="" arial,="" sans-serif,="" "apple="" color="" emoji",="" ui="" symbol";="" color:="" rgb(0,="" 0,="" 0);="" text-align:="" center;"=""><span style="font-weight: bolder;"><font color="#ff0000"><a href="https://shop.binhbun.com/nap-tien-qua-ngan-hang/">Nạp bằng ATM/Momo =&gt;&gt;&gt;&nbsp;</a></font></span><span style="font-weight: bolder;"><font color="#ff0000"><a href="<?=BASE_URL('nap-tien-qua-ngan-hang/');?>"><span class="text-big" style="background-color: rgb(255, 255, 0);">Tại Đây!</span></a></font></span></h3><p style="text-align: center; "><b style="color: rgb(51, 51, 51); font-family: roboto, Arial, Tahoma, sans-serif, arial, Helvetica; font-size: 14px;">Hệ thống xử lý 5s 1 thẻ.</b></p><p style="text-align: center; "><b style="color: rgb(51, 51, 51); font-family: roboto, Arial, Tahoma, sans-serif, arial, Helvetica; font-size: 14px;">Vui lòng gửi đúng mệnh giá, sai mệnh giá mất thẻ.</b></p></center>
                            <div class="py-3 px-5">
                                <span class="mb-2 block">
                                    <div class="flex items-center relative">
                                        <select id="loaithe"
                                            class="border border-gray-500 rounded bg-white text-gray-800 appearance-none w-full py-2 px-3 leading-tight focus:outline-none">
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
                                    <div class="flex items-center relative">
                                        <select id="menhgia"
                                            class="border border-gray-500 rounded bg-white text-gray-800 appearance-none w-full py-2 px-3 leading-tight focus:outline-none">

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
                                    <div class="flex items-center relative"><input type="number" id="pin"
                                            placeholder="Mã số thẻ"
                                            class="border border-gray-500 rounded bg-white text-gray-800 appearance-none w-full py-2 px-3 leading-tight focus:outline-none" />
                                    </div>
                                </span>
                                <span class="mb-2 block">
                                    <div class="flex items-center relative"><input type="number" id="seri"
                                            placeholder="Số serial"
                                            class="border border-gray-500 rounded bg-white text-gray-800 appearance-none w-full py-2 px-3 leading-tight focus:outline-none" />
                                    </div>
                                </span>
                                <div class="mt-4 text-center">
                                    <button type="button" id="NapThe"
                                        class="uppercase flex w-40 font-semibold rounded items-center justify-center h-10 text-white text-xl rounded-none focus:outline-none px-4 text-center bg-red-500 hover:bg-red-600">
                                        Nạp Thẻ
                                    </button>
                                </div>
                                <div class="mt-2 text-red-500 font-semibold text-sm">
                                </div>
                            </div>
                        </form>
                    </span>
                    <!---->
                </div>
            </div>
            <div class="v-bg w-full mb-2 px-2">
                <center><h2
                    class="v-title border-l-4 border-gray-800 px-3 select-none text-gray-800 text-xl md:text-2xl font-bold">
                    LỊCH SỬ NẠP THẺ
                </h2></center>
                <div class="v-table-content select-text">
                    <div class="py-2 overflow-x-auto scrolling-touch max-w-400">
                        <table id="datatable" class="table-auto w-full scrolling-touch min-w-850">
                            <thead>
                                <tr class="v-border-hr select-none border-b-2 border-gray-300">
                                    <th class="v-table-title py-2 text-sm font-bold text-gray-800 text-left px-1">
                                        STT
                                    </th>
                                    <th class="v-table-title py-2 text-sm font-bold text-gray-800 text-left px-1">
                                        NHÀ MẠNG
                                    </th>
                                    <th class="v-table-title py-2 text-sm font-bold text-gray-800 text-left px-1">
                                        M.GIÁ/T.NHẬN
                                    </th>
                                    <th class="v-table-title py-2 text-sm font-bold text-gray-800 text-left px-1">
                                        SERIAL THẺ
                                    </th>
                                    <th class="v-table-title py-2 text-sm font-bold text-gray-800 text-left px-1">
                                        MÃ THẺ
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
                            <?php $i = 0; foreach($CMSNT->get_list("SELECT * FROM `cards` WHERE `username` = '".$getUser['username']."'  ORDER BY `id` DESC ") as $cards) { ?>
                                <tr>
                                    <td class="text-sm text-gray-800 text-left px-1 py-1 border-b"><?=$i++;?></td>
                                    <td class="text-sm text-gray-800 text-left px-1 py-1 border-b"><?=$cards['loaithe'];?></td>
                                    <td class="text-sm text-gray-800 text-left px-1 py-1 border-b"><?=format_cash($cards['menhgia']);?> VNĐ</td>
                                    <td class="text-sm text-gray-800 text-left px-1 py-1 border-b"><?=$cards['seri'];?></td>
                                    <td class="text-sm text-gray-800 text-left px-1 py-1 border-b"><?=$cards['pin'];?></td>
                                    <td class="text-sm text-gray-800 text-left px-1 py-1 border-b">
                                    <?=status($cards['status']);?>
                                    </td>
                                    <td class="text-sm text-gray-800 text-left px-1 py-1 border-b"><?=$cards['createdate'];?></td>
                                </tr>
                            <?php }?>
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

<script type="text/javascript">
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
                    'Nạp Thẻ')
                .prop('disabled', false);
        }
    });
});
</script>

<script type="text/javascript">
$(document).ready(function() {
    $('#datatable').DataTable();
});

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
</script>
<?php 
    require_once("../../public/client/Footer.php");
?>