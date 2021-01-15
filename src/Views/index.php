<?php
ob_start();
?>
<div class=""></div>
<?php
$content = ob_get_clean();
require VIEW . "/template.php";