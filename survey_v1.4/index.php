<?php
  require_once('Config/db_conn.php');
  
  if (isset($_GET['controller']) && isset($_GET['action'])) 
    {
    $controller = $_GET['controller'];
    $action     = $_GET['action'];
     } 
     else 
     {
    $controller = 'survey';   //default controller
    $action     = 'home';	//default action
    }
require_once('Config/route.php');
?>