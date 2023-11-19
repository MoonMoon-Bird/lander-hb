<?php

class ApiRequester
{
    private $baseUrl;
    private $returnMsg;
    private $filename;

    public function __construct($baseUrl)
    {
        $this->baseUrl = $baseUrl;
        $this->returnMsg = ['code' => 1, 'msg' => '', 'data' => ''];
        $this->filename = "cache.txt";
    }

    /**
     * 请求
     * @param $endpoint string 接口url
     * @param array $data 数据
     * @param string $method 请求方式
     * @return array
     */
    public function makeApiRequest($endpoint, $data = array(), $method = 'GET')
    {
        // 如果有缓存，直接返回
        $this->getFromFileCache($data['url']);
        if (!empty($this->returnMsg['data'])) {
            // get直接跳转
            $this->goLocation($this->returnMsg['data']);
            return $this->returnMsg;
        }

        $url = $this->baseUrl . $endpoint;

        $ch = curl_init($url);

        // 如果是 POST 请求，设置 POST 数据
        if ($method === 'POST') {
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
        }

        // 设置响应输出
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch);

        if ($response === false) {
            // 读取缓存文件内容
            $cacheData = json_decode(file_get_contents($this->filename), true);
            // 检查键是否存在
            if (isset($cacheData[$data['url']])) {
                $values = $cacheData[$data['url']]['value'];
                $this->returnMsg['data'] = $values[array_rand($values)];
                return $this->returnMsg;
            }
            $this->returnMsg['code'] = 0;
            $this->returnMsg['msg'] = '请求失败: ' . curl_error($ch);

            return $this->returnMsg;
        }

        curl_close($ch);

        $result = json_decode($response, true);

        if(empty($result['data']) || $result['code'] == 0){
			// 读取缓存文件内容
            $cacheData = json_decode(file_get_contents($this->filename), true);
            // 检查键是否存在
            if (isset($cacheData[$data['url']])) {
                $values = $cacheData[$data['url']]['value'];
                $this->returnMsg['data'] = $values[array_rand($values)];
                return $this->returnMsg;
            }
            $this->returnMsg['code'] = 0;
            $this->returnMsg['msg'] = '链接不存在';
            return $this->returnMsg;
        }
        // 缓存
        $this->storeInFileCache($data['url'], $result['data'], 60);

        $randData = $result['data'][array_rand($result['data'])];
        // 是否get请求
        $this->goLocation($randData);

        $this->returnMsg['data'] = $randData;

        return $this->returnMsg;
    }

    /**
     * 设置缓存
     * @param $key 键
     * @param $value 值
     * @param $ttl 失效时间
     */
    private function storeInFileCache($key, $value, $ttl)
    {
        // 如果缓存文件不存在，创建一个空的缓存数组
        if (!file_exists($this->filename)) {
            $cacheData = [];
        } else {
            // 否则，读取缓存文件内容
            $cacheData = json_decode(file_get_contents($this->filename), true) ?: [];
        }

        // 设置键值对和过期时间
        $expirationTime = time() + $ttl;
        $cacheData[$key] = [
            'value' => $value,
            'expirationTime' => $expirationTime,
        ];

        // 写入缓存数据到文件
        file_put_contents($this->filename, json_encode($cacheData));
    }

    /**
     * 获取缓存
     * @param $key
     * @return null
     */
    private function getFromFileCache($key)
    {
        // 如果缓存文件不存在
        if (!file_exists($this->filename)) {
            touch($this->filename);
        }

        // 读取缓存文件内容
        $cacheData = json_decode(file_get_contents($this->filename), true);

        // 检查键是否存在且未过期
        if (isset($cacheData[$key]) && $cacheData[$key]['expirationTime'] >= time()) {
            $values = $cacheData[$key]['value'];
            $this->returnMsg['data'] = $values[array_rand($values)];
        } else {
            return null;
        }
    }

    /**
     * 当时get请求 直接跳转
     * @param $location
     */
    private function goLocation($location)
    {
        // 直接跳转
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            header("Location:" . $location);
            exit;
        }
    }
}

$apiRequester = new ApiRequester('https://code.kfdhaks.top/index.php'); // 记得替换地址

$response = $apiRequester->makeApiRequest('/adv/getLinks', ['url' => $_SERVER['HTTP_HOST']], 'POST');

// 如果是get请求并且请求上游错误，直接返回空白
if($_SERVER['REQUEST_METHOD'] == 'GET' && $response['code'] == 0){
    echo "";
    exit();
}

echo json_encode($response, JSON_UNESCAPED_UNICODE);

