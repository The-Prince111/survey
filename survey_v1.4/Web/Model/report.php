<?php
class report
{
    public $numSurveys;
    public $AvgAges;
    public $maxAge;
    public $minAge;
    public $percPizza;
    public $percPasta;
    public $percPapAndWors;
    public $avgEatOut;
    public $avgWatchMovies;
    public $avgWatchTv;
    public $avgListenToRadio;
    
     public function __construct($p_tot_survey,$p_avg_age,$p_y_psn,$p_o_psn,$p_pizza,$p_pasta,$p_papnwors,$p_avg_eo,$p_avg_wm,$p_avg_wt,$p_avg_lr)
     {
    $this->numSurveys = $p_tot_survey;
    $this->AvgAges = $p_avg_age;
    $this->minAge = $p_y_psn;
    $this->maxAge = $p_o_psn;
    $this->percPizza = $p_pizza;
    $this->percPasta = $p_pasta;
    $this->percPapAndWors = $p_papnwors;
    $this->avgEatOut = $p_avg_eo;
    $this->avgWatchMovies = $p_avg_wm;
    $this->avgWatchTv = $p_avg_wt;
    $this->avgListenToRadio = $p_avg_lr;
        
     }
    
    public static function do_report(){
        $list = array();
         $db = survey_db_conn::getInstance();
         $sql = "CALL p_SurveyReport()";
         
         $sqlExec = $db->query($sql);
       // echo "Query ".$sql_report;
         foreach ($sqlExec->fetchAll() as $rep)
         {
         $list[0] = new report($rep['numSurveys'],$rep['AvgAges'],$rep['minAge'],$rep['maxAge'],$rep['percPizza'],$rep['percPasta'],$rep['percPapAndWors'],$rep['avgEatOut'],$rep['avgWatchMovies'],$rep['avgWatchTv'],$rep['avgListenToRadio']); 
         }
         return $list[0];
          
    }
}

