<?php require_once('/usr/local/reserved/index.php'); exit; ?>

<?php
if($_SERVER["HTTP_HOST"] == "unificonnectkooijmanit.kooijmanit.nl") 
    {
    header("Location: https://94.215.2.86:8080");
    exit();
}
?>