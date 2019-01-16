<?php
include "view/template/header.php";
?>

<?php echo $message; ?>
<a <?php setHref("virement") ?>>Faire un virement</a>
<a <?php setHref("versement") ?>>Faire un versement</a>
<a <?php setHref("retrait") ?>>Faire un retrait</a>
<?php
include "view/template/footer.php"
?>
