                                                                                                                                                                                                                                                                                                                                                
<?php
require_once(__DIR__ . "/controller/login-varify.php");
require_once(__DIR__ . "/view/header.php");
if(authenticateuser()) {
require_once(__DIR__ . "/view/navigation.php");
}
require_once(__DIR__ . "/controller/create-db.php");
require_once(__DIR__ . "/view/footer.php");
require_once(__DIR__ . "/controller/read-posts.php");
?>

