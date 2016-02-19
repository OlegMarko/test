<form action="" method="post">
    <input type="hidden" name="lang" value="ua" />
    <input type="submit" name="change_lang" value="UA" <?php if($_SESSION['lang'] == 'ua') echo "class='lang-active'"; ?> />
</form>
<form action="" method="post">
    <input type="hidden" name="lang" value="en" />
    <input type="submit" name="change_lang" value="EN" <?php if($_SESSION['lang'] == 'en') echo "class='lang-active'"; ?> />
</form>