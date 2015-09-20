

<style type="text/css">
    .content-login .ul-login h4 {

        font-family: Arial, Helvetica, sans-serif;
        font-size: 11px;
        font-weight: normal;
        color: #0183cf;
        margin-top: 10px;

    }
    .content-login .footer-login {
        position: relative;
        top: 230px;
    }

    .content-login .footer-login .login-ver {
        height: 36px;
        width: 66px;
        position: relative;
        left: 20px;
        top: 40px;
    }

    .content-login .footer-login .conlogin .bq {
        font-family: Arial, Helvetica, sans-serif;
        font-size: 11px;
        font-weight: bold;
        color: #666666;
        text-align: justify;
        position: relative;
        left: 250px;
        top: 20px;
    }

    .content-login .footer-login .conlogin .bq1 {
        font-family: Arial, Helvetica, sans-serif;
        font-size: 11px;
        font-weight: normal;
        color: #666666;
        text-align: justify;
        position: relative;
        left: 210px;
        top: 20px;
    }

    .content-login .footer-login .conlogin .bq2 {
        font-family: Arial, Helvetica, sans-serif;
        font-size: 11px;
        font-weight: normal;
        color: #666;
        visibility: inherit;
        float: left;
        width: 400px;
        top: 20px;
        position: relative;
        left: 170px;
    }

</style>
<![endif]-->

<!--[if IE 7]>
<style type="text/css">
    .content-login .ul-login h4 {
        clear: both !important;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 11px;
        font-weight: normal;
        color: #0183cf;
        margin-top: 10px;
        float: left;
    }

    .content-login .footer-login {
        position: relative;
        top: 230px;
    }

    .content-login .footer-login .login-ver {
        height: 36px;
        width: 66px;
        position: relative;
        left: 20px;
        top: 40px;
    }

    .content-login .footer-login .conlogin .bq {
        font-family: Arial, Helvetica, sans-serif;
        font-size: 11px;
        font-weight: bold;
        color: #666666;
        text-align: justify;
        position: relative;
        left: 250px;
        top: 20px;
    }

    .content-login .footer-login .conlogin .bq1 {
        font-family: Arial, Helvetica, sans-serif;
        font-size: 11px;
        font-weight: normal;
        color: #666666;
        text-align: justify;
        position: relative;
        left: 210px;
        top: 20px;
    }

    .content-login .footer-login .conlogin .bq2 {
        font-family: Arial, Helvetica, sans-serif;
        font-size: 11px;
        font-weight: normal;
        color: #666;
        visibility: inherit;
        float: left;
        width: 400px;
        top: 20px;
        position: relative;
        left: 170px;
    }


</style>
<![endif]-->

<!--[if IE 9]>
<style type="text/css">
    .content-login .footer-login .login-ver {
        height: 36px;
        width: 66px;
        position: relative;
        left: 20px;
        top: -90px;
    }

</style>
<![endif]-->

<style type="text/css">
    .img-dn {
        float: left;
        width: 50px;
        margin-top: 110px;

        border-top-style: none;
        border-right-style: none;
        border-bottom-style: none;
        border-left-style: none;
    }
    .container-dn .img-bg .parent {
        float: left;
        width: 900px;
        margin-left:200px;
    }
    .img-dn a img {
        border-top-style: none;
        border-right-style: none;
        border-bottom-style: none;
        border-left-style: none;
    }
    /* MESSAGES --------------------------------- */
    .info, .errors, .success {margin:0px 0; padding:0px 0px 0px 0px; font-size:10px; line-height:1.5;}
    .info {border:1px dotted 008;    background:#eff url(../images/info.gif) no-repeat 20px 18px; color:#008;}
    .errors {border:1px dotted #d21033; background:#fed url(../images/error.gif) no-repeat 0px 1px; color:#d21033; padding-bottom: 0px;}
    .success {border:1px dotted #390; background:#dfa url(../images/confirm.gif) no-repeat 20px 18px; color:#390;}
    #content .errors h2, #content .success h2 {font-family:Georgia,"Times New Roman",Times,serif; font-size:18px; line-height:48px; font-weight:400; margin:0 0px 0 0; padding:0;}
    #content .success h2 {color: #008 !important;}
    #content .errors h2 {color:#b00 !important;}
    #content .success h2 {color:#060 !important;}

</style>

<!-- script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script -->
<!-- script type="text/javascript" src="js/common_rosters.js"></script -->
<!-- link href="vina.css" rel="stylesheet" type="text/css" / -->
<script type="text/javascript">
    function formalizeSubs() {
        var subs = document.getElementById('username').value;
        if (subs.substring(0,1)=='0') document.getElementById('username').value = '84'+subs.substring(1);
    }
    function checkField(){
        var u = document.getElementById('username').value;
        var p = document.getElementById('password').value;
        if(u == "" || p ==  "")
        {
            alert("Mời bạn nhập số thuê bao và mật khẩu!");
            document.getElementById('username').focus();
            return false;
        }else{
            return true;
        }

    }
</script>


<body id="cas" onload="init();">

<div class="content-login">
    <div class="ul-login">

        <form id="fm1" class="fm-v clearfix" action="<?php echo url_for('@sf_guard_signin') ?>" method="post" >
            <?php echo $form->renderHiddenFields() ?>
            <ul>
                <li><span>Tên đăng nhập</span>
                    <?php echo $form['username']->render(array('class' => 'number-login')) ?>
                    <?php if ($form['username']->hasError()): ?>
                        <span class="help-block"><?php echo $form['username']->renderError() ?></span>
                    <?php endif ?>
                </li>
                <li><span>Mật khẩu</span>
                    <?php echo $form['password']->render(array('class' => 'number-login')) ?>
                    <?php if ($form['password']->hasError()): ?>
                        <span class="help-block"><?php echo $form['password']->renderError() ?></span>
                    <?php endif ?>
                </li>
                <li><span>Mã xác thực</span>
                    <?php echo $form['captcha']->render(array('class' => 'number-login')) ?>
                    <?php if ($form['captcha']->hasError()): ?>
                        <span class="help-block"><?php echo $form['captcha']->renderError() ?></span>
                    <?php endif ?>
                </li>
                <!--<li><span>Mã bảo vệ</span><input type="text" name="text" class="number-login1" /><div class="capcha"><h2>a4rt56</h2></div></li>-->
                <li>
                    <input name="_eventId" value="submit" type="hidden">
                    <input name="dnstb" value="Đăng nhập" class="login-vn" onclick="return checkField()" type="submit">

                    <input name="dnstb" value="Hủy" class="login-vn1" type="reset">

                </li></ul>
        </form>
        <br>
        <br>
        <h3>Nếu chưa là thành viên, <a href="http://hoinhabaohatinh.vn/dang-ky">bấm vào đây</a> để đăng ký.</h3>
    </div><!--end .ul-login-->
    <div class="footer-login">

        <div class="conlogin">
            <div class="bq"</div>
            <div class="bq1"></div>
            <div class="bq2"></div>
        </div>
    </div>
</div>

</body></html>