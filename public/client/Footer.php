
<div id="thongbao"></div>
<script src="<?=BASE_URL('template/theme/');?>assets/frontend/js/footer.js"></script>
<script src="<?=BASE_URL('live_chat.js');?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.6/clipboard.min.js"></script>
<script>
new ClipboardJS('.copy');
</script>
<div class="flex justify-center py-8 footer-bg" style="border-top: 2px solid rgba(51, 51, 51, 0.25);">
    <div class="container-x w-full text-white flex flex-wrap font-semibold text-gray-300">
        <div class="md:w-1/2 w-full mb-2 px-4 font-bold">
            HỆ THỐNG BÁN ACC TỰ ĐỘNG
            <br>
            ĐẢM BẢO UY TÍN VÀ CHẤT LƯỢNG.
        </div>
        <div class="md:w-1/2 w-full mb-2 px-4">
            CHÚNG TÔI LUÔN LẤY UY TÍN LÀM HÀNG ĐẦU ĐỐI VỚI KHÁCH HÀNG. HI VỌNG SẼ
            ĐƯỢC PHỤC VỤ CÁC BẠN. CẢM ƠN!
        </div>
    </div>
</div>
<!--<button type="button"-->
<!--    class="cd-top h-10 w-10 border-2 border-blue-600 fixed opacity-90 rounded text-2xl text-white bg-blue-500 rounded-full font-bold flex items-center justify-center focus:outline-none"-->
<!--    style="right:2%;bottom:14%;"><i class="bx bx-up-arrow-alt"></i></button>-->
    
    <div id="fb-root"></div>
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
      var chatbox = document.getElementById('fb-customer-chat');
      chatbox.setAttribute("page_id", "192498543927268");
      chatbox.setAttribute("attribution", "biz_inbox");
    </script>
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v18.0'
        });
      };

      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>
</html>