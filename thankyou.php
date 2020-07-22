<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width,minimum-scale=1,initial-scale=1" name="viewport">
    <meta content="index,follow,all" name="robots">
    <meta content="vi" http-equiv="content-language">
    <title>Thank you</title>
    <style>.thankyou{font-family:arial;font-size:24px!important;border-radius:4px;background-color:#87cefa;color:#fff;padding:50px 30px;margin:100px auto;text-align:center;line-height:1.8em}.thankyou a{color:#5d5de6;text-decoration:none}.thankyou a:hover{text-decoration:none}.check{font-size:2.4em;color:#0e8ee4}</style>
    <!-- Google Tag Manager -->
    <script>!function(e,t,a,n,g){e[n]=e[n]||[],e[n].push({"gtm.start":(new Date).getTime(),event:"gtm.js"});var m=t.getElementsByTagName(a)[0],r=t.createElement(a);r.async=!0,r.src="https://www.googletagmanager.com/gtm.js?id=GTM-N7WXPN8",m.parentNode.insertBefore(r,m)}(window,document,"script","dataLayer");</script>
    <!-- End Google Tag Manager -->
</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N7WXPN8" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    <section class="section zero">
    </section>
    <section class="section intro">
        <div class="container">
            <div class="row">
                <div class="col-md-12  text-center ">
                    <div class="thankyou">
                        <div class="check">✔</div>
                        <p style="font-family: Pinyon Script;font-size: 2em;line-height: 1.4em; margin: 0; font-style: italic;">Thank you</p>
                        <p>Bạn đã đặt hàng thành công. Chúng tôi sẽ sớm liên hệ lại trong thời gian sớm nhất.<br/>Bạn vui lòng để ý điện thoại nhé!</p>
                        <a onclick="goBack()" style="cursor: pointer; font-size: 20px;">< Quay lại ></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
<script>function goBack() {window.history.back();}</script>

<?php
$fbPixel = htmlspecialchars(@$_GET['fb_pixel_id'], ENT_QUOTES, 'utf-8');
if (isset($fbPixel) && $fbPixel !== '') {
    ?>

    <script src="./assets/js/jquery-1.12.4.min.js"></script>
    <script type="text/javascript" src="./assets/js/fbp.js"></script>
    <script>
        $(function () {
            var fbPixelId = '<?php echo str_replace(' ','',$fbPixel)?>';
            var fbPixelIdArr = fbPixelId.split(',');
            new Mfb
            ({
                fbi: fbPixelIdArr,
                purchase: document.URL.search("thankyou.php") !== -1 ? true : false,
            }).run;
        });
    </script>
    <?php
}
?>
</body>
</html>