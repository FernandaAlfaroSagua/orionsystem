<?php

require "modules/head.php";
require "modules/header.php";

 
require_once "./controllers/ViewsController.php";

$vc = new ViewsController();
$viewsR=$vc->get_views_controller();


if($viewsR=="home" || $viewsR=="index" ){
    require_once "./views/contents/home.php";
}
else{
    require_once $viewsR; 
}

require "modules/footer.php";

?>