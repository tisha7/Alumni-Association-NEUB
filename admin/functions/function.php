<?php
    function get_header(){
        require_once("includes/header.php");
    }
    function get_bread(){
        require_once("includes/breadcrumb.php");
    }
    function get_sidebar(){
        require_once("includes/sidebar.php");
    }
    function get_sidebar1(){
        require_once("includes/sidebar1.php");
    }
    function get_part($addpart){
        require_once("includes/".$addpart);
    }
    function get_footer(){
        require_once("includes/footer.php");
    }
?>