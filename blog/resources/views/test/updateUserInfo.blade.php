<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>


<!-- for qq weibo webapp 验证 -->
<meta property="qc:admins" content="22343077776611337636" />
<meta property="wb:webmaster" content="7d3e25852da2f717" />


<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="凡科 商务平台 登录 自助建站 一站式企业服务">
<meta name="description" content="凡科提供企业邮箱、自助建站系统等多样化服务，努力打造成为最全面的服务平台。电脑网站、手机网站和微信网站三合一，助力企业营销，促进企业发展。">
<meta name="author" content="凡科互联网科技股份有限公司">
<meta name="copyright" content="凡科互联网科技股份有限公司版权所有">
<title>凡科登录</title>
<link href="http://ps.faisys.com/css/index.min.css?v=201511231736" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="http://ps.faisys.com/js/comm/jquery/jquery-core.min.js?v=201410271757"></script>

<!---->
<script type="text/javascript" src="http://ps.faisys.com/js/comm/fai.min.js?v=201511231736"></script>
<script type="text/javascript" src="http://ps.faisys.com/js/util.min.js?v=201508121741"></script>
</head>

<body>
<form method="post" action="/test/updateUserInfo">
	<input type="hidden" name="uid" value="<?= empty($uid) ? '' : $uid?>"/>
    <input type="text" name="username" value="<?= empty($username) ? '' : $username?>"/>
    <input type="password" name="password" value="<?= empty($password) ? '' : $password?>" />
    <input type="radio" name="sex" value="1" <?=$sex == 1 ? "checked='checked'" : "" ?> />男
    <input type="radio" name="sex" value="2" <?=$sex == 2 ? "checked='checked'" : "" ?> />女 
    <br />
    <textarea name="description">
    	<?=$description?>
    </textarea>
    <input type="submit" value="提交" />
</form>
</body>
</html> 

