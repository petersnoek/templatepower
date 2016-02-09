<?php
    // load the template power engine
    require 'inc/class.TemplatePower.inc.php';


    //create a new TemplatePower object using a file
    $tpl = new TemplatePower( "tpl/template.tpl" );
    $tpl->prepare();
    $tpl->assign( "name", "Snek");
    $tpl->printToScreen();

?>
