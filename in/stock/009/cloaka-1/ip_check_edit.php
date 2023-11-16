<?php
session_start();

//验证密码
$password = "88888888";

require('ip_check_config.php');
if(!empty($_REQUEST['password']))
{
	$_SESSION['password'] = $_REQUEST['password'];
	$_SESSION["myaction"] = $_REQUEST['myaction'];
	//echo $_SESSION['password'];
}
if(!empty($_REQUEST["action"]) && $_REQUEST["action"] == "logout")
{
	unset($_SESSION['password']);
	echo("<script language=javascript> window.location='index.php'; </script>");
	exit();
}
?>
<?php
if(!empty($_REQUEST["action"]) && $_REQUEST["action"] == "submit")
{

    $methods = trim($_REQUEST["methods"]);
	$redirect_method = trim($_REQUEST["redirect_method"]);
	$ip_for_fp = trim($_REQUEST["ip_for_fp"]);
	$country = trim($_REQUEST["country"]);
    $DB_fp = trim($_REQUEST["DB_fp"]);
	$Browser_cn = trim($_REQUEST["Browser_cn"]);
	$mobile = trim($_REQUEST["mobile"]);
    $output = trim($_REQUEST["output"]);
    $auth_key = trim($_REQUEST["auth_key"]);
    $ad_id = trim($_REQUEST["ad_id"]);
    $query_on = trim($_REQUEST["query_on"]);
    $app_in = trim($_REQUEST["app_in"]);
  
  $methods_1 = trim($_REQUEST["methods_1"]);
  $redirect_method_1 = trim($_REQUEST["redirect_method_1"]);
  $methods_2 = trim($_REQUEST["methods_2"]);
  $redirect_method_2 = trim($_REQUEST["redirect_method_2"]);
  $methods_3 = trim($_REQUEST["methods_3"]);
  $redirect_method_3 = trim($_REQUEST["redirect_method_3"]);
  $methods_4 = trim($_REQUEST["methods_4"]);
  $redirect_method_4 = trim($_REQUEST["redirect_method_4"]);
  $methods_5 = trim($_REQUEST["methods_5"]);
  $redirect_method_5 = trim($_REQUEST["redirect_method_5"]);
  $methods_6 = trim($_REQUEST["methods_6"]);
  $redirect_method_6 = trim($_REQUEST["redirect_method_6"]);
  $methods_7 = trim($_REQUEST["methods_7"]);
  $redirect_method_7 = trim($_REQUEST["redirect_method_7"]);
  $methods_8 = trim($_REQUEST["methods_8"]);
  $redirect_method_8 = trim($_REQUEST["redirect_method_8"]);
  $methods_9 = trim($_REQUEST["methods_9"]);
  $redirect_method_9 = trim($_REQUEST["redirect_method_9"]);
  $methods_10 = trim($_REQUEST["methods_10"]);
  $redirect_method_10 = trim($_REQUEST["redirect_method_10"]);
  $methods_11 = trim($_REQUEST["methods_11"]);
  $redirect_method_11 = trim($_REQUEST["redirect_method_11"]);
  $methods_12 = trim($_REQUEST["methods_12"]);
  $redirect_method_12 = trim($_REQUEST["redirect_method_12"]);
  $methods_13 = trim($_REQUEST["methods_13"]);
  $redirect_method_13 = trim($_REQUEST["redirect_method_13"]);
  $methods_14 = trim($_REQUEST["methods_14"]);
  $redirect_method_14 = trim($_REQUEST["redirect_method_14"]);
  $methods_15 = trim($_REQUEST["methods_15"]);
  $redirect_method_15 = trim($_REQUEST["redirect_method_15"]);
  $methods_16 = trim($_REQUEST["methods_16"]);
  $redirect_method_16 = trim($_REQUEST["redirect_method_16"]);
  $methods_17 = trim($_REQUEST["methods_17"]);
  $redirect_method_17 = trim($_REQUEST["redirect_method_17"]);
  $methods_18 = trim($_REQUEST["methods_18"]);
  $redirect_method_18 = trim($_REQUEST["redirect_method_18"]);
  $methods_19 = trim($_REQUEST["methods_19"]);
  $redirect_method_19 = trim($_REQUEST["redirect_method_19"]);
  $methods_20 = trim($_REQUEST["methods_20"]);
  $redirect_method_20 = trim($_REQUEST["redirect_method_20"]);
  $methods_21 = trim($_REQUEST["methods_21"]);
  $redirect_method_21 = trim($_REQUEST["redirect_method_21"]);
  $methods_22 = trim($_REQUEST["methods_22"]);
  $redirect_method_22 = trim($_REQUEST["redirect_method_22"]);
  $methods_23 = trim($_REQUEST["methods_23"]);
  $redirect_method_23 = trim($_REQUEST["redirect_method_23"]);
  $methods_24 = trim($_REQUEST["methods_24"]);
  $redirect_method_24 = trim($_REQUEST["redirect_method_24"]);
  $methods_25 = trim($_REQUEST["methods_25"]);
  $redirect_method_25 = trim($_REQUEST["redirect_method_25"]);
  $methods_26 = trim($_REQUEST["methods_26"]);
  $redirect_method_26 = trim($_REQUEST["redirect_method_26"]);
  $methods_27 = trim($_REQUEST["methods_27"]);
  $redirect_method_27 = trim($_REQUEST["redirect_method_27"]);
  $methods_28 = trim($_REQUEST["methods_28"]);
  $redirect_method_28 = trim($_REQUEST["redirect_method_28"]);
  $methods_29 = trim($_REQUEST["methods_29"]);
  $redirect_method_29 = trim($_REQUEST["redirect_method_29"]);
  $methods_30 = trim($_REQUEST["methods_30"]);
  $redirect_method_30 = trim($_REQUEST["redirect_method_30"]);
	
  $DB_fp_1 = trim($_REQUEST["DB_fp_1"]);
  $DB_fp_2 = trim($_REQUEST["DB_fp_2"]);
  $DB_fp_3 = trim($_REQUEST["DB_fp_3"]);
  $DB_fp_4 = trim($_REQUEST["DB_fp_4"]);
  $DB_fp_5 = trim($_REQUEST["DB_fp_5"]);
  $DB_fp_6 = trim($_REQUEST["DB_fp_6"]);
  $DB_fp_7 = trim($_REQUEST["DB_fp_7"]);
  $DB_fp_8 = trim($_REQUEST["DB_fp_8"]);
  $DB_fp_9 = trim($_REQUEST["DB_fp_9"]);
  $DB_fp_10 = trim($_REQUEST["DB_fp_10"]);
  $DB_fp_11 = trim($_REQUEST["DB_fp_11"]);
  $DB_fp_12 = trim($_REQUEST["DB_fp_12"]);
  $DB_fp_13 = trim($_REQUEST["DB_fp_13"]);
  $DB_fp_14 = trim($_REQUEST["DB_fp_14"]);
  $DB_fp_15 = trim($_REQUEST["DB_fp_15"]);
  $DB_fp_16 = trim($_REQUEST["DB_fp_16"]);
  $DB_fp_17 = trim($_REQUEST["DB_fp_17"]);
  $DB_fp_18 = trim($_REQUEST["DB_fp_18"]);
  $DB_fp_19 = trim($_REQUEST["DB_fp_19"]);
  $DB_fp_20 = trim($_REQUEST["DB_fp_20"]);
  $DB_fp_21 = trim($_REQUEST["DB_fp_21"]);
  $DB_fp_22 = trim($_REQUEST["DB_fp_22"]);
  $DB_fp_23 = trim($_REQUEST["DB_fp_23"]);
  $DB_fp_24 = trim($_REQUEST["DB_fp_24"]);
  $DB_fp_25 = trim($_REQUEST["DB_fp_25"]);
  $DB_fp_26 = trim($_REQUEST["DB_fp_26"]);
  $DB_fp_27 = trim($_REQUEST["DB_fp_27"]);
  $DB_fp_28 = trim($_REQUEST["DB_fp_28"]);
  $DB_fp_29 = trim($_REQUEST["DB_fp_29"]);
  $DB_fp_30 = trim($_REQUEST["DB_fp_30"]);
  
  $DB_zp_1 = trim($_REQUEST["DB_zp_1"]);
  $DB_zp_2 = trim($_REQUEST["DB_zp_2"]);
  $DB_zp_3 = trim($_REQUEST["DB_zp_3"]);
  $DB_zp_4 = trim($_REQUEST["DB_zp_4"]);
  $DB_zp_5 = trim($_REQUEST["DB_zp_5"]);
  $DB_zp_6 = trim($_REQUEST["DB_zp_6"]);
  $DB_zp_7 = trim($_REQUEST["DB_zp_7"]);
  $DB_zp_8 = trim($_REQUEST["DB_zp_8"]);
  $DB_zp_9 = trim($_REQUEST["DB_zp_9"]);
  $DB_zp_10 = trim($_REQUEST["DB_zp_10"]);
  $DB_zp_11 = trim($_REQUEST["DB_zp_11"]);
  $DB_zp_12 = trim($_REQUEST["DB_zp_12"]);
  $DB_zp_13 = trim($_REQUEST["DB_zp_13"]);
  $DB_zp_14 = trim($_REQUEST["DB_zp_14"]);
  $DB_zp_15 = trim($_REQUEST["DB_zp_15"]);
  $DB_zp_16 = trim($_REQUEST["DB_zp_16"]);
  $DB_zp_17 = trim($_REQUEST["DB_zp_17"]);
  $DB_zp_18 = trim($_REQUEST["DB_zp_18"]);
  $DB_zp_19 = trim($_REQUEST["DB_zp_19"]);
  $DB_zp_20 = trim($_REQUEST["DB_zp_20"]);
  $DB_zp_21 = trim($_REQUEST["DB_zp_21"]);
  $DB_zp_22 = trim($_REQUEST["DB_zp_22"]);
  $DB_zp_23 = trim($_REQUEST["DB_zp_23"]);
  $DB_zp_24 = trim($_REQUEST["DB_zp_24"]);
  $DB_zp_25 = trim($_REQUEST["DB_zp_25"]);
  $DB_zp_26 = trim($_REQUEST["DB_zp_26"]);
  $DB_zp_27 = trim($_REQUEST["DB_zp_27"]);
  $DB_zp_28 = trim($_REQUEST["DB_zp_28"]);
  $DB_zp_29 = trim($_REQUEST["DB_zp_29"]);
  $DB_zp_30 = trim($_REQUEST["DB_zp_30"]);
  
  $methods = trim($_REQUEST["methods"]);
  $redirect_method = trim($_REQUEST["redirect_method"]);

	if(!empty($methods))
	{
		$str = "<?php
        define('SHOW_SITE_MODE_SWITCH', '".$methods."');
		define('CLOAK_REDIRECT_METHOD', '".$redirect_method."');
		define('SHOW_SITE_IP', '".$ip_for_fp."');
		define('SHOW_SITE_COUNTRY', '".$country."');
    define('APP_IN', '".$app_in."');
		define('DB_FP', '".$DB_fp."');
		define('SHOW_SITE_CN', ".$Browser_cn.");
		define('SHOW_SITE_MOBILE', ".$mobile.");
        define('SHOW_SITE_OUTPUT', ".$output.");
		define('CLOAK_API_URL', 'www.tiktokba.com/cloak/byApi');
        define('CLOAK_AUTH_KEY', '".$auth_key."');
        define('CLOAK_AD_ID', '".$ad_id."');
        define('CLOAK_QUERY_ON', '".$query_on."');
    
    define('DB_FP_1', '".$DB_fp_1."');
    define('DB_FP_2', '".$DB_fp_2."');
    define('DB_FP_3', '".$DB_fp_3."');
    define('DB_FP_4', '".$DB_fp_4."');
    define('DB_FP_5', '".$DB_fp_5."');
    define('DB_FP_6', '".$DB_fp_6."');
    define('DB_FP_7', '".$DB_fp_7."');
    define('DB_FP_8', '".$DB_fp_8."');
    define('DB_FP_9', '".$DB_fp_9."');
    define('DB_FP_10', '".$DB_fp_10."');
    define('DB_FP_11', '".$DB_fp_11."');
    define('DB_FP_12', '".$DB_fp_12."');
    define('DB_FP_13', '".$DB_fp_13."');
    define('DB_FP_14', '".$DB_fp_14."');
    define('DB_FP_15', '".$DB_fp_15."');
    define('DB_FP_16', '".$DB_fp_16."');
    define('DB_FP_17', '".$DB_fp_17."');
    define('DB_FP_18', '".$DB_fp_18."');
    define('DB_FP_19', '".$DB_fp_19."');
    define('DB_FP_20', '".$DB_fp_20."');
    define('DB_FP_21', '".$DB_fp_21."');
    define('DB_FP_22', '".$DB_fp_22."');
    define('DB_FP_23', '".$DB_fp_23."');
    define('DB_FP_24', '".$DB_fp_24."');
    define('DB_FP_25', '".$DB_fp_25."');
    define('DB_FP_26', '".$DB_fp_26."');
    define('DB_FP_27', '".$DB_fp_27."');
    define('DB_FP_28', '".$DB_fp_28."');
    define('DB_FP_29', '".$DB_fp_29."');
    define('DB_FP_30', '".$DB_fp_30."');
    
    define('DB_ZP_1', '".$DB_zp_1."');
    define('DB_ZP_2', '".$DB_zp_2."');
    define('DB_ZP_3', '".$DB_zp_3."');
    define('DB_ZP_4', '".$DB_zp_4."');
    define('DB_ZP_5', '".$DB_zp_5."');
    define('DB_ZP_6', '".$DB_zp_6."');
    define('DB_ZP_7', '".$DB_zp_7."');
    define('DB_ZP_8', '".$DB_zp_8."');
    define('DB_ZP_9', '".$DB_zp_9."');
    define('DB_ZP_10', '".$DB_zp_10."');
    define('DB_ZP_11', '".$DB_zp_11."');
    define('DB_ZP_12', '".$DB_zp_12."');
    define('DB_ZP_13', '".$DB_zp_13."');
    define('DB_ZP_14', '".$DB_zp_14."');
    define('DB_ZP_15', '".$DB_zp_15."');
    define('DB_ZP_16', '".$DB_zp_16."');
    define('DB_ZP_17', '".$DB_zp_17."');
    define('DB_ZP_18', '".$DB_zp_18."');
    define('DB_ZP_19', '".$DB_zp_19."');
    define('DB_ZP_20', '".$DB_zp_20."');
    define('DB_ZP_21', '".$DB_zp_21."');
    define('DB_ZP_22', '".$DB_zp_22."');
    define('DB_ZP_23', '".$DB_zp_23."');
    define('DB_ZP_24', '".$DB_zp_24."');
    define('DB_ZP_25', '".$DB_zp_25."');
    define('DB_ZP_26', '".$DB_zp_26."');
    define('DB_ZP_27', '".$DB_zp_27."');
    define('DB_ZP_28', '".$DB_zp_28."');
    define('DB_ZP_29', '".$DB_zp_29."');
    define('DB_ZP_30', '".$DB_zp_30."');
    
    define('SHOW_SITE_MODE_SWITCH_1', '".$methods_1."');
	define('CLOAK_REDIRECT_METHOD_1', '".$redirect_method_1."');
	define('SHOW_SITE_MODE_SWITCH_2', '".$methods_2."');
	define('CLOAK_REDIRECT_METHOD_2', '".$redirect_method_2."');
	define('SHOW_SITE_MODE_SWITCH_3', '".$methods_3."');
	define('CLOAK_REDIRECT_METHOD_3', '".$redirect_method_3."');
	define('SHOW_SITE_MODE_SWITCH_4', '".$methods_4."');
	define('CLOAK_REDIRECT_METHOD_4', '".$redirect_method_4."');
	define('SHOW_SITE_MODE_SWITCH_5', '".$methods_5."');
	define('CLOAK_REDIRECT_METHOD_5', '".$redirect_method_5."');
	define('SHOW_SITE_MODE_SWITCH_6', '".$methods_6."');
	define('CLOAK_REDIRECT_METHOD_6', '".$redirect_method_6."');
	define('SHOW_SITE_MODE_SWITCH_7', '".$methods_7."');
	define('CLOAK_REDIRECT_METHOD_7', '".$redirect_method_7."');
	define('SHOW_SITE_MODE_SWITCH_8', '".$methods_8."');
	define('CLOAK_REDIRECT_METHOD_8', '".$redirect_method_8."');
    define('SHOW_SITE_MODE_SWITCH_9', '".$methods_9."');
	define('CLOAK_REDIRECT_METHOD_9', '".$redirect_method_9."');
	define('SHOW_SITE_MODE_SWITCH_10', '".$methods_10."');
	define('CLOAK_REDIRECT_METHOD_10', '".$redirect_method_10."');
	define('SHOW_SITE_MODE_SWITCH_11', '".$methods_11."');
	define('CLOAK_REDIRECT_METHOD_11', '".$redirect_method_11."');
	define('SHOW_SITE_MODE_SWITCH_12', '".$methods_12."');
	define('CLOAK_REDIRECT_METHOD_12', '".$redirect_method_12."');
	define('SHOW_SITE_MODE_SWITCH_13', '".$methods_13."');
	define('CLOAK_REDIRECT_METHOD_13', '".$redirect_method_13."');
	define('SHOW_SITE_MODE_SWITCH_14', '".$methods_14."');
	define('CLOAK_REDIRECT_METHOD_14', '".$redirect_method_14."');
	define('SHOW_SITE_MODE_SWITCH_15', '".$methods_15."');
	define('CLOAK_REDIRECT_METHOD_15', '".$redirect_method_15."');
	define('SHOW_SITE_MODE_SWITCH_16', '".$methods_16."');
	define('CLOAK_REDIRECT_METHOD_16', '".$redirect_method_16."');
	define('SHOW_SITE_MODE_SWITCH_17', '".$methods_17."');
	define('CLOAK_REDIRECT_METHOD_17', '".$redirect_method_17."');
	define('SHOW_SITE_MODE_SWITCH_18', '".$methods_18."');
	define('CLOAK_REDIRECT_METHOD_18', '".$redirect_method_18."');
    define('SHOW_SITE_MODE_SWITCH_19', '".$methods_19."');
	define('CLOAK_REDIRECT_METHOD_19', '".$redirect_method_19."');
	define('SHOW_SITE_MODE_SWITCH_20', '".$methods_20."');
	define('CLOAK_REDIRECT_METHOD_20', '".$redirect_method_20."');
	define('SHOW_SITE_MODE_SWITCH_21', '".$methods_21."');
	define('CLOAK_REDIRECT_METHOD_21', '".$redirect_method_21."');
	define('SHOW_SITE_MODE_SWITCH_22', '".$methods_22."');
	define('CLOAK_REDIRECT_METHOD_22', '".$redirect_method_22."');
	define('SHOW_SITE_MODE_SWITCH_23', '".$methods_23."');
	define('CLOAK_REDIRECT_METHOD_23', '".$redirect_method_23."');
	define('SHOW_SITE_MODE_SWITCH_24', '".$methods_24."');
	define('CLOAK_REDIRECT_METHOD_24', '".$redirect_method_24."');
	define('SHOW_SITE_MODE_SWITCH_25', '".$methods_25."');
	define('CLOAK_REDIRECT_METHOD_25', '".$redirect_method_25."');
	define('SHOW_SITE_MODE_SWITCH_26', '".$methods_26."');
	define('CLOAK_REDIRECT_METHOD_26', '".$redirect_method_26."');
	define('SHOW_SITE_MODE_SWITCH_27', '".$methods_27."');
	define('CLOAK_REDIRECT_METHOD_27', '".$redirect_method_27."');
	define('SHOW_SITE_MODE_SWITCH_28', '".$methods_28."');
	define('CLOAK_REDIRECT_METHOD_28', '".$redirect_method_28."');
    define('SHOW_SITE_MODE_SWITCH_29', '".$methods_29."');
	define('CLOAK_REDIRECT_METHOD_29', '".$redirect_method_29."');
	define('SHOW_SITE_MODE_SWITCH_30', '".$methods_30."');
	define('CLOAK_REDIRECT_METHOD_30', '".$redirect_method_30."');
	
		?>";
		
	
		 $f=fopen("ip_check_config.php","w");
		 rewind($f);
		 fwrite($f,$str);
		 fclose($f);
		 echo("<script language=javascript>alert('保存成功!');window.location='ip_check_edit.php'; </script>");
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body onLoad="init()">
<!-- header //-->

  <?php
if(empty($_SESSION['password'])){
?>
<form name="myform" method="post" action="ip_check_edit.php">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="11%">验证密码: </td>
      <td width="89%"><input name="password" type="password" id="password" size="15">
         </td>
    </tr>
    <tr>
      <td><input name="myaction" type="hidden" id="myaction" value="dolist"></td>
      <td><input type="submit" name="Submit" value=" 进 入 "></td>
    </tr>
  </table>
  </form>
  <?php
exit();
}

if(empty($_SESSION['password']) || $_SESSION['password'] != $password) {
	unset($_SESSION['password']);
	echo("<script language=javascript>alert('密码错误!');window.location='ip_check_edit.php'; </script>");

	//die("输入的密码不正确，请重新输入。");
}
if(!empty($_SESSION['password']) && $_SESSION['password'] == $password && $_SESSION["myaction"]=="dolist") {

$my_url = $_SERVER['PHP_SELF'];
$my_file_name= substr($my_url ,strrpos($my_url ,'/')+1 );
?>

<table width="90%" border="0" align="center">
<tr>
<td>
<br>
<strong>屏蔽设置</strong>
<form action="<?php echo $my_file_name; ?>?action=submit" method="post">
<table width="90%" border="1" align="center" style="line-height:30px;">
  <tr>
    <td width="27%">屏蔽模式</td>
    <td width="73%"> <!--<?php echo SHOW_SITE_MODE_SWITCH; ?>-->
					<input type="radio" name="methods" value="ip_check" <?php if(SHOW_SITE_MODE_SWITCH == "ip_check") { echo ' checked="checked" '; } ?>>屏蔽&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="radio" name="methods" value="fp" <?php if(SHOW_SITE_MODE_SWITCH == "fp") { echo ' checked="checked" ';  } ?>>仿品&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		    		<input type="radio" name="methods" value="zp" <?php if(SHOW_SITE_MODE_SWITCH == "zp") { echo ' checked="checked" '; }  ?>>正品&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<!--<input type="text" name="method_1" value="<?php echo SHOW_SITE_MODE_SWITCH; ?>" size="20" />--></td>
  </tr>
  <tr>
    <td width="27%">是否匹配查询参数</td>
    <td width="73%">
        <input type="radio" name="query_on" value="ON" <?php if(CLOAK_QUERY_ON == "ON") { echo ' checked="checked" ';  } ?>>是&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="radio" name="query_on" value="OFF" <?php if(CLOAK_QUERY_ON == "OFF") { echo ' checked="checked" '; } ?>>否&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
  </tr>
  <tr>
    <td width="27%">客户端白名单（可以填写的客户端包含facebook, messenger, twitter, line, wechat, puffin, miui, instagram, chrome, safari, ie, firefox。多个请用英文逗号隔开）</td>
    <td width="73%">
        <input type="text" name="app_in" value="<?php echo APP_IN; ?>" size="40" />
  </tr>
  <tr>
    <td>ipcloakapi API TOKEN（在用户中心->个人设置<或者登录后台打开此链接<a href="https://www.ipcloakapi.com/index/user/profile.html" target="_blank">https://www.ipcloakapi.com/index/user/profile.html</a>>）</td>
    <td><input type="text" name="auth_key" value="<?php echo CLOAK_AUTH_KEY; ?>" size="40" />
    </td>
  </tr>
  <tr>
    <td>ipcloakapi 广告活动ID (在广告策略复制ID<或者登录后台打开此链接<a href="https://www.ipcloakapi.com/manage/campaigns/index.html>" target="_blank">https://www.ipcloakapi.com/manage/campaigns/index.html</a>)</td>
    <td><input type="text" name="ad_id" value="<?php echo CLOAK_AD_ID; ?>" size="40" />
    </td>
  </tr>
  <tr>
    <td>指定国家访问仿品（用英文逗号隔开）</td>
    <td><input type="text" name="country" value="<?php echo SHOW_SITE_COUNTRY; ?>" size="50" /></td>
  </tr>
  <tr>
    <td>允许打开仿品的ip（用英文逗号隔开）</td>
    <td><input type="text" name="ip_for_fp" value="<?php echo SHOW_SITE_IP; ?>" size="50" /></td>
  </tr>
  
  <tr>
    <td>默认跳转地址</td>
    <td><input type="text" name="DB_fp" value="<?php echo DB_FP; ?>" size="40" />
	</td>
  </tr>
 
  <tr>
    <td>选择页面切换方式</td>
    <td>
        <select name="redirect_method">
            <option value="db" <?php if(CLOAK_REDIRECT_METHOD == 'db') { ?>selected="selected"<?php } ?>>切换数据库 <链接不改变，直接更改数据库。></option>
            <option value="curl" <?php if(CLOAK_REDIRECT_METHOD == 'curl') { ?>selected="selected"<?php } ?>>抓取页面显示 <链接不改变，但有可能会导致抓取显示出来的页面样式错乱。></option>
            <option value="302" <?php if(CLOAK_REDIRECT_METHOD == '302'){ ?>selected="selected"<?php } ?>>302跳转 <切换域名会改变></option>
            <option value="js" <?php if(CLOAK_REDIRECT_METHOD == 'js') { ?>selected="selected"<?php } ?>>JS跳转 <使用JS做跳转方法></option>
        </select>
    </td>
  </tr>
  
  </tr>
  <input type="hidden" name="output" value="1" />
  <input type="hidden" name="Browser_cn" value="0" />
  <input type="hidden" name="mobile" value="0" />
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" value="保存" /></td>
  </tr>
  
  <tr>
    <td colspan=2>更多跳转地址</td>
  </tr>
  
  <tr>
    <td>1.<input type="text" name="DB_zp_1" value="<?php echo DB_ZP_1; ?>" size="40" placeholder="最终广告落地页链接，不能包含跳转。" />
    </td>
    <td><input type="text" name="DB_fp_1" value="<?php echo DB_FP_1; ?>" size="40" placeholder="跳转地址" />
    	
    <select name="methods_1">
        <option value="ip_check" <?php if(SHOW_SITE_MODE_SWITCH_1 == 'ip_check') { ?>selected="selected"<?php } ?>>屏蔽</option>
        <option value="fp" <?php if(SHOW_SITE_MODE_SWITCH_1 == 'fp'){ ?>selected="selected"<?php } ?>>仿品</option>
        <option value="zp" <?php if(SHOW_SITE_MODE_SWITCH_1 == 'zp') { ?>selected="selected"<?php } ?>>正品</option>
    </select>
        
    <select name="redirect_method_1">
        <option value="curl" <?php if(CLOAK_REDIRECT_METHOD_1 == 'curl') { ?>selected="selected"<?php } ?>>抓取页面显示</option>
        <option value="302" <?php if(CLOAK_REDIRECT_METHOD_1 == '302'){ ?>selected="selected"<?php } ?>>302跳转</option>
        <option value="js" <?php if(CLOAK_REDIRECT_METHOD_1 == 'js') { ?>selected="selected"<?php } ?>>JS跳转</option>
    </select>
	</td>
  </tr>
  <tr>
    <td>2.<input type="text" name="DB_zp_2" value="<?php echo DB_ZP_2; ?>" size="40" placeholder="最终广告落地页链接，不能包含跳转。" />
    </td>
    <td><input type="text" name="DB_fp_2" value="<?php echo DB_FP_2; ?>" size="40" placeholder="跳转地址" />
    
    <select name="methods_2">
        <option value="ip_check" <?php if(SHOW_SITE_MODE_SWITCH_2 == 'ip_check') { ?>selected="selected"<?php } ?>>屏蔽</option>
        <option value="fp" <?php if(SHOW_SITE_MODE_SWITCH_2 == 'fp'){ ?>selected="selected"<?php } ?>>仿品</option>
        <option value="zp" <?php if(SHOW_SITE_MODE_SWITCH_2 == 'zp') { ?>selected="selected"<?php } ?>>正品</option>
    </select>
        
    <select name="redirect_method_2">
        <option value="curl" <?php if(CLOAK_REDIRECT_METHOD_2 == 'curl') { ?>selected="selected"<?php } ?>>抓取页面显示</option>
        <option value="302" <?php if(CLOAK_REDIRECT_METHOD_2 == '302'){ ?>selected="selected"<?php } ?>>302跳转</option>
        <option value="js" <?php if(CLOAK_REDIRECT_METHOD_2 == 'js') { ?>selected="selected"<?php } ?>>JS跳转</option>
    </select>
	</td>
  </tr>
  <tr>
    <td>3.<input type="text" name="DB_zp_3" value="<?php echo DB_ZP_3; ?>" size="40" placeholder="最终广告落地页链接，不能包含跳转。" />
    </td>
    <td><input type="text" name="DB_fp_3" value="<?php echo DB_FP_3; ?>" size="40" placeholder="跳转地址" />
    
     <select name="methods_3">
        <option value="ip_check" <?php if(SHOW_SITE_MODE_SWITCH_3 == 'ip_check') { ?>selected="selected"<?php } ?>>屏蔽</option>
        <option value="fp" <?php if(SHOW_SITE_MODE_SWITCH_3 == 'fp'){ ?>selected="selected"<?php } ?>>仿品</option>
        <option value="zp" <?php if(SHOW_SITE_MODE_SWITCH_3 == 'zp') { ?>selected="selected"<?php } ?>>正品</option>
    </select>
        
    <select name="redirect_method_3">
        <option value="curl" <?php if(CLOAK_REDIRECT_METHOD_3 == 'curl') { ?>selected="selected"<?php } ?>>抓取页面显示</option>
        <option value="302" <?php if(CLOAK_REDIRECT_METHOD_3 == '302'){ ?>selected="selected"<?php } ?>>302跳转</option>
        <option value="js" <?php if(CLOAK_REDIRECT_METHOD_3 == 'js') { ?>selected="selected"<?php } ?>>JS跳转</option>
    </select>
	</td>
  </tr>
  <tr>
    <td>4.<input type="text" name="DB_zp_4" value="<?php echo DB_ZP_4; ?>" size="40" placeholder="最终广告落地页链接，不能包含跳转。" />
    </td>
    <td><input type="text" name="DB_fp_4" value="<?php echo DB_FP_4; ?>" size="40" placeholder="跳转地址" />
    
    <select name="methods_4">
        <option value="ip_check" <?php if(SHOW_SITE_MODE_SWITCH_4 == 'ip_check') { ?>selected="selected"<?php } ?>>屏蔽</option>
        <option value="fp" <?php if(SHOW_SITE_MODE_SWITCH_4 == 'fp'){ ?>selected="selected"<?php } ?>>仿品</option>
        <option value="zp" <?php if(SHOW_SITE_MODE_SWITCH_4 == 'zp') { ?>selected="selected"<?php } ?>>正品</option>
    </select>
        
    <select name="redirect_method_4">
        <option value="curl" <?php if(CLOAK_REDIRECT_METHOD_4 == 'curl') { ?>selected="selected"<?php } ?>>抓取页面显示</option>
        <option value="302" <?php if(CLOAK_REDIRECT_METHOD_4 == '302'){ ?>selected="selected"<?php } ?>>302跳转</option>
        <option value="js" <?php if(CLOAK_REDIRECT_METHOD_4 == 'js') { ?>selected="selected"<?php } ?>>JS跳转</option>
    </select>
	</td>
  </tr>
  <tr>
    <td>5.<input type="text" name="DB_zp_5" value="<?php echo DB_ZP_5; ?>" size="40" placeholder="最终广告落地页链接，不能包含跳转。" />
    </td>
    <td><input type="text" name="DB_fp_5" value="<?php echo DB_FP_5; ?>" size="40" placeholder="跳转地址" />
    
    <select name="methods_5">
        <option value="ip_check" <?php if(SHOW_SITE_MODE_SWITCH_5 == 'ip_check') { ?>selected="selected"<?php } ?>>屏蔽</option>
        <option value="fp" <?php if(SHOW_SITE_MODE_SWITCH_5 == 'fp'){ ?>selected="selected"<?php } ?>>仿品</option>
        <option value="zp" <?php if(SHOW_SITE_MODE_SWITCH_5 == 'zp') { ?>selected="selected"<?php } ?>>正品</option>
    </select>
        
    <select name="redirect_method_5">
        <option value="curl" <?php if(CLOAK_REDIRECT_METHOD_5 == 'curl') { ?>selected="selected"<?php } ?>>抓取页面显示</option>
        <option value="302" <?php if(CLOAK_REDIRECT_METHOD_5 == '302'){ ?>selected="selected"<?php } ?>>302跳转</option>
        <option value="js" <?php if(CLOAK_REDIRECT_METHOD_5 == 'js') { ?>selected="selected"<?php } ?>>JS跳转</option>
    </select>
    
	</td>
  </tr>
  <tr>
    <td>6.<input type="text" name="DB_zp_6" value="<?php echo DB_ZP_6; ?>" size="40" placeholder="最终广告落地页链接，不能包含跳转。" />
    </td>
    <td><input type="text" name="DB_fp_6" value="<?php echo DB_FP_6; ?>" size="40" placeholder="跳转地址" />
    
    <select name="methods_6">
        <option value="ip_check" <?php if(SHOW_SITE_MODE_SWITCH_6 == 'ip_check') { ?>selected="selected"<?php } ?>>屏蔽</option>
        <option value="fp" <?php if(SHOW_SITE_MODE_SWITCH_6 == 'fp'){ ?>selected="selected"<?php } ?>>仿品</option>
        <option value="zp" <?php if(SHOW_SITE_MODE_SWITCH_6 == 'zp') { ?>selected="selected"<?php } ?>>正品</option>
    </select>
        
    <select name="redirect_method_6">
        <option value="curl" <?php if(CLOAK_REDIRECT_METHOD_6 == 'curl') { ?>selected="selected"<?php } ?>>抓取页面显示</option>
        <option value="302" <?php if(CLOAK_REDIRECT_METHOD_6 == '302'){ ?>selected="selected"<?php } ?>>302跳转</option>
        <option value="js" <?php if(CLOAK_REDIRECT_METHOD_6 == 'js') { ?>selected="selected"<?php } ?>>JS跳转</option>
    </select>
	</td>
  </tr>
  <tr>
    <td>7.<input type="text" name="DB_zp_7" value="<?php echo DB_ZP_7; ?>" size="40" placeholder="最终广告落地页链接，不能包含跳转。" />
    </td>
    <td><input type="text" name="DB_fp_7" value="<?php echo DB_FP_7; ?>" size="40" placeholder="跳转地址" />
    
    <select name="methods_7">
        <option value="ip_check" <?php if(SHOW_SITE_MODE_SWITCH_7 == 'ip_check') { ?>selected="selected"<?php } ?>>屏蔽</option>
        <option value="fp" <?php if(SHOW_SITE_MODE_SWITCH_7 == 'fp'){ ?>selected="selected"<?php } ?>>仿品</option>
        <option value="zp" <?php if(SHOW_SITE_MODE_SWITCH_7 == 'zp') { ?>selected="selected"<?php } ?>>正品</option>
    </select>
        
    <select name="redirect_method_7">
        <option value="curl" <?php if(CLOAK_REDIRECT_METHOD_7 == 'curl') { ?>selected="selected"<?php } ?>>抓取页面显示</option>
        <option value="302" <?php if(CLOAK_REDIRECT_METHOD_7 == '302'){ ?>selected="selected"<?php } ?>>302跳转</option>
        <option value="js" <?php if(CLOAK_REDIRECT_METHOD_7 == 'js') { ?>selected="selected"<?php } ?>>JS跳转</option>
    </select>
	</td>
  </tr>
  <tr>
    <td>8.<input type="text" name="DB_zp_8" value="<?php echo DB_ZP_8; ?>" size="40" placeholder="最终广告落地页链接，不能包含跳转。" />
    </td>
    <td><input type="text" name="DB_fp_8" value="<?php echo DB_FP_8; ?>" size="40" placeholder="跳转地址" />
    
    <select name="methods_8">
        <option value="ip_check" <?php if(SHOW_SITE_MODE_SWITCH_8 == 'ip_check') { ?>selected="selected"<?php } ?>>屏蔽</option>
        <option value="fp" <?php if(SHOW_SITE_MODE_SWITCH_8 == 'fp'){ ?>selected="selected"<?php } ?>>仿品</option>
        <option value="zp" <?php if(SHOW_SITE_MODE_SWITCH_8 == 'zp') { ?>selected="selected"<?php } ?>>正品</option>
    </select>
        
    <select name="redirect_method_8">
        <option value="curl" <?php if(CLOAK_REDIRECT_METHOD_8 == 'curl') { ?>selected="selected"<?php } ?>>抓取页面显示</option>
        <option value="302" <?php if(CLOAK_REDIRECT_METHOD_8 == '302'){ ?>selected="selected"<?php } ?>>302跳转</option>
        <option value="js" <?php if(CLOAK_REDIRECT_METHOD_8 == 'js') { ?>selected="selected"<?php } ?>>JS跳转</option>
    </select>
	</td>
  </tr>
  <tr>
    <td>9.<input type="text" name="DB_zp_9" value="<?php echo DB_ZP_9; ?>" size="40" placeholder="最终广告落地页链接，不能包含跳转。" />
    </td>
    <td><input type="text" name="DB_fp_9" value="<?php echo DB_FP_9; ?>" size="40" placeholder="跳转地址" />
    
    <select name="methods_9">
        <option value="ip_check" <?php if(SHOW_SITE_MODE_SWITCH_9 == 'ip_check') { ?>selected="selected"<?php } ?>>屏蔽</option>
        <option value="fp" <?php if(SHOW_SITE_MODE_SWITCH_9 == 'fp'){ ?>selected="selected"<?php } ?>>仿品</option>
        <option value="zp" <?php if(SHOW_SITE_MODE_SWITCH_9 == 'zp') { ?>selected="selected"<?php } ?>>正品</option>
    </select>
        
    <select name="redirect_method_9">
        <option value="curl" <?php if(CLOAK_REDIRECT_METHOD_9 == 'curl') { ?>selected="selected"<?php } ?>>抓取页面显示</option>
        <option value="302" <?php if(CLOAK_REDIRECT_METHOD_9 == '302'){ ?>selected="selected"<?php } ?>>302跳转</option>
        <option value="js" <?php if(CLOAK_REDIRECT_METHOD_9 == 'js') { ?>selected="selected"<?php } ?>>JS跳转</option>
    </select>
	</td>
  </tr>
  <tr>
    <td>10.<input type="text" name="DB_zp_10" value="<?php echo DB_ZP_10; ?>" size="40" placeholder="最终广告落地页链接，不能包含跳转。" />
    </td>
    <td><input type="text" name="DB_fp_10" value="<?php echo DB_FP_10; ?>" size="40" placeholder="跳转地址" />
    <select name="methods_10">
        <option value="ip_check" <?php if(SHOW_SITE_MODE_SWITCH_10 == 'ip_check') { ?>selected="selected"<?php } ?>>屏蔽</option>
        <option value="fp" <?php if(SHOW_SITE_MODE_SWITCH_10 == 'fp'){ ?>selected="selected"<?php } ?>>仿品</option>
        <option value="zp" <?php if(SHOW_SITE_MODE_SWITCH_10 == 'zp') { ?>selected="selected"<?php } ?>>正品</option>
    </select>
        
    <select name="redirect_method_10">
        <option value="curl" <?php if(CLOAK_REDIRECT_METHOD_10 == 'curl') { ?>selected="selected"<?php } ?>>抓取页面显示</option>
        <option value="302" <?php if(CLOAK_REDIRECT_METHOD_10 == '302'){ ?>selected="selected"<?php } ?>>302跳转</option>
        <option value="js" <?php if(CLOAK_REDIRECT_METHOD_10 == 'js') { ?>selected="selected"<?php } ?>>JS跳转</option>
    </select>
	</td>
  </tr>
  <tr>
    <td>11.<input type="text" name="DB_zp_11" value="<?php echo DB_ZP_11; ?>" size="40" placeholder="最终广告落地页链接，不能包含跳转。" />
    </td>
    <td><input type="text" name="DB_fp_11" value="<?php echo DB_FP_11; ?>" size="40" placeholder="跳转地址" />
    <select name="methods_11">
        <option value="ip_check" <?php if(SHOW_SITE_MODE_SWITCH_11 == 'ip_check') { ?>selected="selected"<?php } ?>>屏蔽</option>
        <option value="fp" <?php if(SHOW_SITE_MODE_SWITCH_11 == 'fp'){ ?>selected="selected"<?php } ?>>仿品</option>
        <option value="zp" <?php if(SHOW_SITE_MODE_SWITCH_11 == 'zp') { ?>selected="selected"<?php } ?>>正品</option>
    </select>
        
    <select name="redirect_method_11">
        <option value="curl" <?php if(CLOAK_REDIRECT_METHOD_11 == 'curl') { ?>selected="selected"<?php } ?>>抓取页面显示</option>
        <option value="302" <?php if(CLOAK_REDIRECT_METHOD_11 == '302'){ ?>selected="selected"<?php } ?>>302跳转</option>
        <option value="js" <?php if(CLOAK_REDIRECT_METHOD_11 == 'js') { ?>selected="selected"<?php } ?>>JS跳转</option>
    </select>
	</td>
  </tr>
  <tr>
    <td>12.<input type="text" name="DB_zp_12" value="<?php echo DB_ZP_12; ?>" size="40" placeholder="最终广告落地页链接，不能包含跳转。" />
    </td>
    <td><input type="text" name="DB_fp_12" value="<?php echo DB_FP_12; ?>" size="40" placeholder="跳转地址" />
    <select name="methods_12">
        <option value="ip_check" <?php if(SHOW_SITE_MODE_SWITCH_12 == 'ip_check') { ?>selected="selected"<?php } ?>>屏蔽</option>
        <option value="fp" <?php if(SHOW_SITE_MODE_SWITCH_12 == 'fp'){ ?>selected="selected"<?php } ?>>仿品</option>
        <option value="zp" <?php if(SHOW_SITE_MODE_SWITCH_12 == 'zp') { ?>selected="selected"<?php } ?>>正品</option>
    </select>
        
    <select name="redirect_method_12">
        <option value="curl" <?php if(CLOAK_REDIRECT_METHOD_12 == 'curl') { ?>selected="selected"<?php } ?>>抓取页面显示</option>
        <option value="302" <?php if(CLOAK_REDIRECT_METHOD_12 == '302'){ ?>selected="selected"<?php } ?>>302跳转</option>
        <option value="js" <?php if(CLOAK_REDIRECT_METHOD_12 == 'js') { ?>selected="selected"<?php } ?>>JS跳转</option>
    </select>
	</td>
  </tr>
  <tr>
    <td>13.<input type="text" name="DB_zp_13" value="<?php echo DB_ZP_13; ?>" size="40" placeholder="最终广告落地页链接，不能包含跳转。" />
    </td>
    <td><input type="text" name="DB_fp_13" value="<?php echo DB_FP_13; ?>" size="40" placeholder="跳转地址" />
    <select name="methods_13">
        <option value="ip_check" <?php if(SHOW_SITE_MODE_SWITCH_13 == 'ip_check') { ?>selected="selected"<?php } ?>>屏蔽</option>
        <option value="fp" <?php if(SHOW_SITE_MODE_SWITCH_13 == 'fp'){ ?>selected="selected"<?php } ?>>仿品</option>
        <option value="zp" <?php if(SHOW_SITE_MODE_SWITCH_13 == 'zp') { ?>selected="selected"<?php } ?>>正品</option>
    </select>
        
    <select name="redirect_method_13">
        <option value="curl" <?php if(CLOAK_REDIRECT_METHOD_13 == 'curl') { ?>selected="selected"<?php } ?>>抓取页面显示</option>
        <option value="302" <?php if(CLOAK_REDIRECT_METHOD_13 == '302'){ ?>selected="selected"<?php } ?>>302跳转</option>
        <option value="js" <?php if(CLOAK_REDIRECT_METHOD_13 == 'js') { ?>selected="selected"<?php } ?>>JS跳转</option>
    </select>
	</td>
  </tr>
  <tr>
    <td>14.<input type="text" name="DB_zp_14" value="<?php echo DB_ZP_14; ?>" size="40" placeholder="最终广告落地页链接，不能包含跳转。" />
    </td>
    <td><input type="text" name="DB_fp_14" value="<?php echo DB_FP_14; ?>" size="40" placeholder="跳转地址" />
    <select name="methods_14">
        <option value="ip_check" <?php if(SHOW_SITE_MODE_SWITCH_14 == 'ip_check') { ?>selected="selected"<?php } ?>>屏蔽</option>
        <option value="fp" <?php if(SHOW_SITE_MODE_SWITCH_14 == 'fp'){ ?>selected="selected"<?php } ?>>仿品</option>
        <option value="zp" <?php if(SHOW_SITE_MODE_SWITCH_14 == 'zp') { ?>selected="selected"<?php } ?>>正品</option>
    </select>
        
    <select name="redirect_method_14">
        <option value="curl" <?php if(CLOAK_REDIRECT_METHOD_14 == 'curl') { ?>selected="selected"<?php } ?>>抓取页面显示</option>
        <option value="302" <?php if(CLOAK_REDIRECT_METHOD_14 == '302'){ ?>selected="selected"<?php } ?>>302跳转</option>
        <option value="js" <?php if(CLOAK_REDIRECT_METHOD_14 == 'js') { ?>selected="selected"<?php } ?>>JS跳转</option>
    </select>
	</td>
  </tr>
  <tr>
    <td>15.<input type="text" name="DB_zp_15" value="<?php echo DB_ZP_15; ?>" size="40" placeholder="最终广告落地页链接，不能包含跳转。" />
    </td>
    <td><input type="text" name="DB_fp_15" value="<?php echo DB_FP_15; ?>" size="40" placeholder="跳转地址" />
    <select name="methods_15">
        <option value="ip_check" <?php if(SHOW_SITE_MODE_SWITCH_15 == 'ip_check') { ?>selected="selected"<?php } ?>>屏蔽</option>
        <option value="fp" <?php if(SHOW_SITE_MODE_SWITCH_15 == 'fp'){ ?>selected="selected"<?php } ?>>仿品</option>
        <option value="zp" <?php if(SHOW_SITE_MODE_SWITCH_15 == 'zp') { ?>selected="selected"<?php } ?>>正品</option>
    </select>
        
    <select name="redirect_method_15">
        <option value="curl" <?php if(CLOAK_REDIRECT_METHOD_15 == 'curl') { ?>selected="selected"<?php } ?>>抓取页面显示</option>
        <option value="302" <?php if(CLOAK_REDIRECT_METHOD_15 == '302'){ ?>selected="selected"<?php } ?>>302跳转</option>
        <option value="js" <?php if(CLOAK_REDIRECT_METHOD_15 == 'js') { ?>selected="selected"<?php } ?>>JS跳转</option>
    </select>
	</td>
  </tr>
  <tr>
    <td>16.<input type="text" name="DB_zp_16" value="<?php echo DB_ZP_16; ?>" size="40" placeholder="最终广告落地页链接，不能包含跳转。" />
    </td>
    <td><input type="text" name="DB_fp_16" value="<?php echo DB_FP_16; ?>" size="40" placeholder="跳转地址" />
    <select name="methods_16">
        <option value="ip_check" <?php if(SHOW_SITE_MODE_SWITCH_16 == 'ip_check') { ?>selected="selected"<?php } ?>>屏蔽</option>
        <option value="fp" <?php if(SHOW_SITE_MODE_SWITCH_16 == 'fp'){ ?>selected="selected"<?php } ?>>仿品</option>
        <option value="zp" <?php if(SHOW_SITE_MODE_SWITCH_16 == 'zp') { ?>selected="selected"<?php } ?>>正品</option>
    </select>
        
    <select name="redirect_method_16">
        <option value="curl" <?php if(CLOAK_REDIRECT_METHOD_16 == 'curl') { ?>selected="selected"<?php } ?>>抓取页面显示</option>
        <option value="302" <?php if(CLOAK_REDIRECT_METHOD_16 == '302'){ ?>selected="selected"<?php } ?>>302跳转</option>
        <option value="js" <?php if(CLOAK_REDIRECT_METHOD_16 == 'js') { ?>selected="selected"<?php } ?>>JS跳转</option>
    </select>
	</td>
  </tr>
  <tr>
    <td>17.<input type="text" name="DB_zp_17" value="<?php echo DB_ZP_17; ?>" size="40" placeholder="最终广告落地页链接，不能包含跳转。" />
    </td>
    <td><input type="text" name="DB_fp_17" value="<?php echo DB_FP_17; ?>" size="40" placeholder="跳转地址" />
    <select name="methods_17">
        <option value="ip_check" <?php if(SHOW_SITE_MODE_SWITCH_17 == 'ip_check') { ?>selected="selected"<?php } ?>>屏蔽</option>
        <option value="fp" <?php if(SHOW_SITE_MODE_SWITCH_17 == 'fp'){ ?>selected="selected"<?php } ?>>仿品</option>
        <option value="zp" <?php if(SHOW_SITE_MODE_SWITCH_17 == 'zp') { ?>selected="selected"<?php } ?>>正品</option>
    </select>
    <select name="redirect_method_17">
        <option value="curl" <?php if(CLOAK_REDIRECT_METHOD_17 == 'curl') { ?>selected="selected"<?php } ?>>抓取页面显示</option>
        <option value="302" <?php if(CLOAK_REDIRECT_METHOD_17 == '302'){ ?>selected="selected"<?php } ?>>302跳转</option>
        <option value="js" <?php if(CLOAK_REDIRECT_METHOD_17 == 'js') { ?>selected="selected"<?php } ?>>JS跳转</option>
    </select>
	</td>
  </tr>
  <tr>
    <td>18.<input type="text" name="DB_zp_18" value="<?php echo DB_ZP_18; ?>" size="40" placeholder="最终广告落地页链接，不能包含跳转。" />
    </td>
    <td><input type="text" name="DB_fp_18" value="<?php echo DB_FP_18; ?>" size="40" placeholder="跳转地址" />
    <select name="methods_18">
        <option value="ip_check" <?php if(SHOW_SITE_MODE_SWITCH_18 == 'ip_check') { ?>selected="selected"<?php } ?>>屏蔽</option>
        <option value="fp" <?php if(SHOW_SITE_MODE_SWITCH_18 == 'fp'){ ?>selected="selected"<?php } ?>>仿品</option>
        <option value="zp" <?php if(SHOW_SITE_MODE_SWITCH_18 == 'zp') { ?>selected="selected"<?php } ?>>正品</option>
    </select>
        
    <select name="redirect_method_18">
        <option value="curl" <?php if(CLOAK_REDIRECT_METHOD_18 == 'curl') { ?>selected="selected"<?php } ?>>抓取页面显示</option>
        <option value="302" <?php if(CLOAK_REDIRECT_METHOD_18 == '302'){ ?>selected="selected"<?php } ?>>302跳转</option>
        <option value="js" <?php if(CLOAK_REDIRECT_METHOD_18 == 'js') { ?>selected="selected"<?php } ?>>JS跳转</option>
    </select>
	</td>
  </tr>
  <tr>
    <td>19.<input type="text" name="DB_zp_19" value="<?php echo DB_ZP_19; ?>" size="40" placeholder="最终广告落地页链接，不能包含跳转。" />
    </td>
    <td><input type="text" name="DB_fp_19" value="<?php echo DB_FP_19; ?>" size="40" placeholder="跳转地址" />
    <select name="methods_19">
        <option value="ip_check" <?php if(SHOW_SITE_MODE_SWITCH_19 == 'ip_check') { ?>selected="selected"<?php } ?>>屏蔽</option>
        <option value="fp" <?php if(SHOW_SITE_MODE_SWITCH_19 == 'fp'){ ?>selected="selected"<?php } ?>>仿品</option>
        <option value="zp" <?php if(SHOW_SITE_MODE_SWITCH_19 == 'zp') { ?>selected="selected"<?php } ?>>正品</option>
    </select>
        
    <select name="redirect_method_19">
        <option value="curl" <?php if(CLOAK_REDIRECT_METHOD_19 == 'curl') { ?>selected="selected"<?php } ?>>抓取页面显示</option>
        <option value="302" <?php if(CLOAK_REDIRECT_METHOD_19 == '302'){ ?>selected="selected"<?php } ?>>302跳转</option>
        <option value="js" <?php if(CLOAK_REDIRECT_METHOD_19 == 'js') { ?>selected="selected"<?php } ?>>JS跳转</option>
    </select>
	</td>
  </tr>
  <tr>
    <td>20.<input type="text" name="DB_zp_20" value="<?php echo DB_ZP_20; ?>" size="40" placeholder="最终广告落地页链接，不能包含跳转。" />
    </td>
    <td><input type="text" name="DB_fp_20" value="<?php echo DB_FP_20; ?>" size="40" placeholder="跳转地址" />
    <select name="methods_20">
        <option value="ip_check" <?php if(SHOW_SITE_MODE_SWITCH_20 == 'ip_check') { ?>selected="selected"<?php } ?>>屏蔽</option>
        <option value="fp" <?php if(SHOW_SITE_MODE_SWITCH_20 == 'fp'){ ?>selected="selected"<?php } ?>>仿品</option>
        <option value="zp" <?php if(SHOW_SITE_MODE_SWITCH_20 == 'zp') { ?>selected="selected"<?php } ?>>正品</option>
    </select>
        
    <select name="redirect_method_20">
        <option value="curl" <?php if(CLOAK_REDIRECT_METHOD_20 == 'curl') { ?>selected="selected"<?php } ?>>抓取页面显示</option>
        <option value="302" <?php if(CLOAK_REDIRECT_METHOD_20 == '302'){ ?>selected="selected"<?php } ?>>302跳转</option>
        <option value="js" <?php if(CLOAK_REDIRECT_METHOD_20 == 'js') { ?>selected="selected"<?php } ?>>JS跳转</option>
    </select>
	</td>
  </tr>
  <tr>
    <td>21.<input type="text" name="DB_zp_21" value="<?php echo DB_ZP_21; ?>" size="40" placeholder="最终广告落地页链接，不能包含跳转。" />
    </td>
    <td><input type="text" name="DB_fp_21" value="<?php echo DB_FP_21; ?>" size="40" placeholder="跳转地址" />
    <select name="methods_21">
        <option value="ip_check" <?php if(SHOW_SITE_MODE_SWITCH_21 == 'ip_check') { ?>selected="selected"<?php } ?>>屏蔽</option>
        <option value="fp" <?php if(SHOW_SITE_MODE_SWITCH_21 == 'fp'){ ?>selected="selected"<?php } ?>>仿品</option>
        <option value="zp" <?php if(SHOW_SITE_MODE_SWITCH_21 == 'zp') { ?>selected="selected"<?php } ?>>正品</option>
    </select>
        
    <select name="redirect_method_21">
        <option value="curl" <?php if(CLOAK_REDIRECT_METHOD_21 == 'curl') { ?>selected="selected"<?php } ?>>抓取页面显示</option>
        <option value="302" <?php if(CLOAK_REDIRECT_METHOD_21 == '302'){ ?>selected="selected"<?php } ?>>302跳转</option>
        <option value="js" <?php if(CLOAK_REDIRECT_METHOD_21 == 'js') { ?>selected="selected"<?php } ?>>JS跳转</option>
    </select>
	</td>
  </tr>
  <tr>
    <td>22.<input type="text" name="DB_zp_22" value="<?php echo DB_ZP_22; ?>" size="40" placeholder="最终广告落地页链接，不能包含跳转。" />
    </td>
    <td><input type="text" name="DB_fp_22" value="<?php echo DB_FP_22; ?>" size="40" placeholder="跳转地址" />
    
    <select name="methods_22">
        <option value="ip_check" <?php if(SHOW_SITE_MODE_SWITCH_22 == 'ip_check') { ?>selected="selected"<?php } ?>>屏蔽</option>
        <option value="fp" <?php if(SHOW_SITE_MODE_SWITCH_22 == 'fp'){ ?>selected="selected"<?php } ?>>仿品</option>
        <option value="zp" <?php if(SHOW_SITE_MODE_SWITCH_22 == 'zp') { ?>selected="selected"<?php } ?>>正品</option>
    </select>
        
    <select name="redirect_method_22">
        <option value="curl" <?php if(CLOAK_REDIRECT_METHOD_22 == 'curl') { ?>selected="selected"<?php } ?>>抓取页面显示</option>
        <option value="302" <?php if(CLOAK_REDIRECT_METHOD_22 == '302'){ ?>selected="selected"<?php } ?>>302跳转</option>
        <option value="js" <?php if(CLOAK_REDIRECT_METHOD_22 == 'js') { ?>selected="selected"<?php } ?>>JS跳转</option>
    </select>
	</td>
  </tr>
  <tr>
    <td>23.<input type="text" name="DB_zp_23" value="<?php echo DB_ZP_23; ?>" size="40" placeholder="最终广告落地页链接，不能包含跳转。" />
    </td>
    <td><input type="text" name="DB_fp_23" value="<?php echo DB_FP_23; ?>" size="40" placeholder="跳转地址" />
    
    <select name="methods_23">
        <option value="ip_check" <?php if(SHOW_SITE_MODE_SWITCH_23 == 'ip_check') { ?>selected="selected"<?php } ?>>屏蔽</option>
        <option value="fp" <?php if(SHOW_SITE_MODE_SWITCH_23 == 'fp'){ ?>selected="selected"<?php } ?>>仿品</option>
        <option value="zp" <?php if(SHOW_SITE_MODE_SWITCH_23 == 'zp') { ?>selected="selected"<?php } ?>>正品</option>
    </select>
        
    <select name="redirect_method_23">
        <option value="curl" <?php if(CLOAK_REDIRECT_METHOD_23 == 'curl') { ?>selected="selected"<?php } ?>>抓取页面显示</option>
        <option value="302" <?php if(CLOAK_REDIRECT_METHOD_23 == '302'){ ?>selected="selected"<?php } ?>>302跳转</option>
        <option value="js" <?php if(CLOAK_REDIRECT_METHOD_23 == 'js') { ?>selected="selected"<?php } ?>>JS跳转</option>
    </select>
	</td>
  </tr>
  <tr>
    <td>24.<input type="text" name="DB_zp_24" value="<?php echo DB_ZP_24; ?>" size="40" placeholder="最终广告落地页链接，不能包含跳转。" />
    </td>
    <td><input type="text" name="DB_fp_24" value="<?php echo DB_FP_24; ?>" size="40" placeholder="跳转地址" />
    
    <select name="methods_24">
        <option value="ip_check" <?php if(SHOW_SITE_MODE_SWITCH_24 == 'ip_check') { ?>selected="selected"<?php } ?>>屏蔽</option>
        <option value="fp" <?php if(SHOW_SITE_MODE_SWITCH_24 == 'fp'){ ?>selected="selected"<?php } ?>>仿品</option>
        <option value="zp" <?php if(SHOW_SITE_MODE_SWITCH_24 == 'zp') { ?>selected="selected"<?php } ?>>正品</option>
    </select>
        
    <select name="redirect_method_24">
        <option value="curl" <?php if(CLOAK_REDIRECT_METHOD_24 == 'curl') { ?>selected="selected"<?php } ?>>抓取页面显示</option>
        <option value="302" <?php if(CLOAK_REDIRECT_METHOD_24 == '302'){ ?>selected="selected"<?php } ?>>302跳转</option>
        <option value="js" <?php if(CLOAK_REDIRECT_METHOD_24 == 'js') { ?>selected="selected"<?php } ?>>JS跳转</option>
    </select>
    
	</td>
  </tr>
  <tr>
    <td>25.<input type="text" name="DB_zp_25" value="<?php echo DB_ZP_25; ?>" size="40" placeholder="最终广告落地页链接，不能包含跳转。" />
    </td>
    <td><input type="text" name="DB_fp_25" value="<?php echo DB_FP_25; ?>" size="40" placeholder="跳转地址" />
    
    <select name="methods_25">
        <option value="ip_check" <?php if(SHOW_SITE_MODE_SWITCH_25 == 'ip_check') { ?>selected="selected"<?php } ?>>屏蔽</option>
        <option value="fp" <?php if(SHOW_SITE_MODE_SWITCH_25 == 'fp'){ ?>selected="selected"<?php } ?>>仿品</option>
        <option value="zp" <?php if(SHOW_SITE_MODE_SWITCH_25 == 'zp') { ?>selected="selected"<?php } ?>>正品</option>
    </select>
        
    <select name="redirect_method_25">
        <option value="curl" <?php if(CLOAK_REDIRECT_METHOD_25 == 'curl') { ?>selected="selected"<?php } ?>>抓取页面显示</option>
        <option value="302" <?php if(CLOAK_REDIRECT_METHOD_25 == '302'){ ?>selected="selected"<?php } ?>>302跳转</option>
        <option value="js" <?php if(CLOAK_REDIRECT_METHOD_25 == 'js') { ?>selected="selected"<?php } ?>>JS跳转</option>
    </select>
	</td>
  </tr>
  <tr>
    <td>26.<input type="text" name="DB_zp_26" value="<?php echo DB_ZP_26; ?>" size="40" placeholder="最终广告落地页链接，不能包含跳转。" />
    </td>
    <td><input type="text" name="DB_fp_26" value="<?php echo DB_FP_26; ?>" size="40" placeholder="跳转地址" />
    
    <select name="methods_26">
        <option value="ip_check" <?php if(SHOW_SITE_MODE_SWITCH_26 == 'ip_check') { ?>selected="selected"<?php } ?>>屏蔽</option>
        <option value="fp" <?php if(SHOW_SITE_MODE_SWITCH_26 == 'fp'){ ?>selected="selected"<?php } ?>>仿品</option>
        <option value="zp" <?php if(SHOW_SITE_MODE_SWITCH_26 == 'zp') { ?>selected="selected"<?php } ?>>正品</option>
    </select>
        
    <select name="redirect_method_26">
        <option value="curl" <?php if(CLOAK_REDIRECT_METHOD_26 == 'curl') { ?>selected="selected"<?php } ?>>抓取页面显示</option>
        <option value="302" <?php if(CLOAK_REDIRECT_METHOD_26 == '302'){ ?>selected="selected"<?php } ?>>302跳转</option>
        <option value="js" <?php if(CLOAK_REDIRECT_METHOD_26 == 'js') { ?>selected="selected"<?php } ?>>JS跳转</option>
    </select>
	</td>
  </tr>
  <tr>
    <td>27.<input type="text" name="DB_zp_27" value="<?php echo DB_ZP_27; ?>" size="40" placeholder="最终广告落地页链接，不能包含跳转。" />
    </td>
    <td><input type="text" name="DB_fp_27" value="<?php echo DB_FP_27; ?>" size="40" placeholder="跳转地址" />
    
    <select name="methods_27">
        <option value="ip_check" <?php if(SHOW_SITE_MODE_SWITCH_27 == 'ip_check') { ?>selected="selected"<?php } ?>>屏蔽</option>
        <option value="fp" <?php if(SHOW_SITE_MODE_SWITCH_27 == 'fp'){ ?>selected="selected"<?php } ?>>仿品</option>
        <option value="zp" <?php if(SHOW_SITE_MODE_SWITCH_27 == 'zp') { ?>selected="selected"<?php } ?>>正品</option>
    </select>
        
    <select name="redirect_method_27">
        <option value="curl" <?php if(CLOAK_REDIRECT_METHOD_27 == 'curl') { ?>selected="selected"<?php } ?>>抓取页面显示</option>
        <option value="302" <?php if(CLOAK_REDIRECT_METHOD_27 == '302'){ ?>selected="selected"<?php } ?>>302跳转</option>
        <option value="js" <?php if(CLOAK_REDIRECT_METHOD_27 == 'js') { ?>selected="selected"<?php } ?>>JS跳转</option>
    </select>
	</td>
  </tr>
  <tr>
    <td>28.<input type="text" name="DB_zp_28" value="<?php echo DB_ZP_28; ?>" size="40" placeholder="最终广告落地页链接，不能包含跳转。" />
    </td>
    <td><input type="text" name="DB_fp_28" value="<?php echo DB_FP_28; ?>" size="40" placeholder="跳转地址" />
    
    <select name="methods_28">
        <option value="ip_check" <?php if(SHOW_SITE_MODE_SWITCH_28 == 'ip_check') { ?>selected="selected"<?php } ?>>屏蔽</option>
        <option value="fp" <?php if(SHOW_SITE_MODE_SWITCH_28 == 'fp'){ ?>selected="selected"<?php } ?>>仿品</option>
        <option value="zp" <?php if(SHOW_SITE_MODE_SWITCH_28 == 'zp') { ?>selected="selected"<?php } ?>>正品</option>
    </select>
        
    <select name="redirect_method_28">
        <option value="curl" <?php if(CLOAK_REDIRECT_METHOD_28 == 'curl') { ?>selected="selected"<?php } ?>>抓取页面显示</option>
        <option value="302" <?php if(CLOAK_REDIRECT_METHOD_28 == '302'){ ?>selected="selected"<?php } ?>>302跳转</option>
        <option value="js" <?php if(CLOAK_REDIRECT_METHOD_28 == 'js') { ?>selected="selected"<?php } ?>>JS跳转</option>
    </select>
	</td>
  </tr>
  <tr>
    <td>29.<input type="text" name="DB_zp_29" value="<?php echo DB_ZP_29; ?>" size="40" placeholder="最终广告落地页链接，不能包含跳转。" />
    </td>
    <td><input type="text" name="DB_fp_29" value="<?php echo DB_FP_29; ?>" size="40" placeholder="跳转地址" />
    <select name="methods_29">
        <option value="ip_check" <?php if(SHOW_SITE_MODE_SWITCH_29 == 'ip_check') { ?>selected="selected"<?php } ?>>屏蔽</option>
        <option value="fp" <?php if(SHOW_SITE_MODE_SWITCH_29 == 'fp'){ ?>selected="selected"<?php } ?>>仿品</option>
        <option value="zp" <?php if(SHOW_SITE_MODE_SWITCH_29 == 'zp') { ?>selected="selected"<?php } ?>>正品</option>
    </select>
        
    <select name="redirect_method_29">
        <option value="curl" <?php if(CLOAK_REDIRECT_METHOD_29 == 'curl') { ?>selected="selected"<?php } ?>>抓取页面显示</option>
        <option value="302" <?php if(CLOAK_REDIRECT_METHOD_29 == '302'){ ?>selected="selected"<?php } ?>>302跳转</option>
        <option value="js" <?php if(CLOAK_REDIRECT_METHOD_29 == 'js') { ?>selected="selected"<?php } ?>>JS跳转</option>
    </select>
	</td>
  </tr>
  <tr>
    <td>30.<input type="text" name="DB_zp_30" value="<?php echo DB_ZP_30; ?>" size="40" placeholder="最终广告落地页链接，不能包含跳转。" />
    </td>
    <td><input type="text" name="DB_fp_30" value="<?php echo DB_FP_30; ?>" size="40" placeholder="跳转地址" />
    <select name="methods_30">
        <option value="ip_check" <?php if(SHOW_SITE_MODE_SWITCH_30 == 'ip_check') { ?>selected="selected"<?php } ?>>屏蔽</option>
        <option value="fp" <?php if(SHOW_SITE_MODE_SWITCH_30 == 'fp'){ ?>selected="selected"<?php } ?>>仿品</option>
        <option value="zp" <?php if(SHOW_SITE_MODE_SWITCH_30 == 'zp') { ?>selected="selected"<?php } ?>>正品</option>
    </select>
        
    <select name="redirect_method_30">
        <option value="curl" <?php if(CLOAK_REDIRECT_METHOD_30 == 'curl') { ?>selected="selected"<?php } ?>>抓取页面显示</option>
        <option value="302" <?php if(CLOAK_REDIRECT_METHOD_30 == '302'){ ?>selected="selected"<?php } ?>>302跳转</option>
        <option value="js" <?php if(CLOAK_REDIRECT_METHOD_30 == 'js') { ?>selected="selected"<?php } ?>>JS跳转</option>
    </select>
	</td>
  </tr>
</table>
</form>
</td>
</tr>
</table>
<br>
<br>
<a href="<?php echo $my_file_name; ?>?action=logout">退出</a>
<?php
}
?>
</body>
</html>

