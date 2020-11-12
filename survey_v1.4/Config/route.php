<?php
function route($controller, $action) 
{
    require_once('Web/Controller/' . $controller . '_controller.php');
     
    switch ($controller) 
    {
        case 'survey':
            $controller = new survey_controller();
            break;
        default : //this is to force the website to go back to the survey home page 
            $controller = new survey_controller();
            break;
    }
//session_start();
    $controller->{ $action }();
}
// we're adding an entry for the new controller and its actions
$controllers = array('survey'=>array('home','survey','report'));
if (array_key_exists($controller, $controllers)) 
{
    if (in_array($action, $controllers[$controller])) 
    {
        route($controller, $action);
    } 
    else 
        {
        route('survey', 'home'); // inner home page ie logged user home page
        }
} 
else 
    {
    route('survey', 'home'); // outter home page ie welcome page to the website
    }
?>