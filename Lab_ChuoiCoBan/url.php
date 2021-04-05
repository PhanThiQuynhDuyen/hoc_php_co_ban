<?php 
    $url = 'http://210.245.126.171/Music/NhacTre/TinhYeu_LyMaiTrang/wma32/06_BienTham_TinhYeu_LyMaiTrang.wma';
    echo $url;
    $dataURL = parse_url($url);
    $path = $dataURL['path'];
    // echo "<pre>";
    // print_r($dataURL);
    // echo "</pre>";
    // echo $path;
    $result = explode('/', $path);
    // echo "<pre>";
    // print_r($result);
    // echo "</pre>";
    $dataPath = $result[count($result)-1];
    echo $dataPath;
    $arrInfo = explode('_',  $dataPath);
    echo "<pre>";
    print_r($arrInfo);
    echo "</pre>";
    $info = array();
    $info['id'] = $arrInfo[0];
    $info['name'] = $arrInfo[1];
    $info['album'] = $arrInfo[2];
    list($singer, $type) = explode('.', $arrInfo[3]);
    $info['singer'] = $singer;
    $info['type'] = $type;
    function fomat($str){
        //LyMaiTrang
        
    }
?>