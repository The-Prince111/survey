<?php
class nevigator
{
    public function nevigate($script)
    {
    //SURVEY DIRECTORY
        if($script == 'home')
        {
           require_once 'Web/View/home.php';
        }
        else if($script == 'survey')
        {
            require_once 'Web/View/survey.php';
        }
        else if($script == 'report')
        {
            require_once 'Web/View/report.php';
        }
        //DEFAULT DIRECTORY becomes ERROR PAGE 404 (page not found)
        else
        {
        require_once 'Web/View/error.php';
        }

    }
}
?>