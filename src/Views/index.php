<?php
ob_start();
?>
<h1 class="text-2xl">Index Page</h1>
<?php
$content = ob_get_clean();
require VIEW . "/template.php";