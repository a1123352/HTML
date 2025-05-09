<!-- filepath: d:\PHP\HTML-1\mail.php -->
<form action="sendmail.php" method="post">
    to:<input type="text" name="to"><br>
    subject:<input type="text" name="subject"><br>
    content:<textarea name="content" id="" cols="30" rows="10"></textarea><br>

    <!-- Cloudflare Turnstile -->
    <div class="cf-turnstile" data-sitekey="0x4AAAAAABYh8FH6VNeF6ml8"></div>

    <input type="submit">
</form>

<!-- 引入 Cloudflare Turnstile 的 JavaScript -->
<script src="https://challenges.cloudflare.com/turnstile/v0/api.js" defer></script>