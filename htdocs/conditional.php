<?php
include "lib/Template.class.php";
$template = new Template();
$template->assign('isHeads', rand(1,10) > 5 ? true : false);
$template->display('templates/conditional.phtml');
