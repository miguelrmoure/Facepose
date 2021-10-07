<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
function dd($var, $exit=1)
{
    echo "<div style='text-align: left'>";
    echo "<pre>";
    print_r($var);
    echo "</pre>";
    echo "</div>";


    if ($exit) {
        exit;
    }

}
$arquivo = $_POST['arquivo'];
$ip_servidor = $_POST['ip_servidor'];
$array_arquivo = explode(",",$arquivo);


//enviar arquivo
$payload=[
    'file'=>$array_arquivo[1]
];

$json=json_encode($payload);

$curl=curl_init($ip_servidor);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json; charset=utf-8'));
curl_setopt($curl, CURLOPT_POSTFIELDS, $json);
$result=curl_exec($curl);
dd($result);
$json_retorno=$result;
