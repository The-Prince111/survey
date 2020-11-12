<?php
class survey
{
    public $p_sname;
    public $p_fname;
    public $p_contact;
    public $s_date;
    public $p_age;
    public $f_food;
    public $num_foo;
    public $eat_out;
    public $w_movies;
    public $w_tv;
    public $l_radio;

    public function __construct($p_sname,$p_fname,$p_cont,$p_date,$p_age,$p_ffood,$p_numfoo,$p_eo,$p_wm,$p_wt,$p_lr)
     {
    $this->p_sname = $p_sname;
    $this->p_fname = $p_fname;
    $this->p_contact = $p_cont;
    $this->s_date = $p_date;
    $this->p_age = $p_age;
    $this->f_food = $p_ffood;
    $this->num_foo = $p_numfoo;
    $this->eat_out = $p_eo;
    $this->w_movies = $p_wm;
    $this->w_tv = $p_wt;
    $this->l_radio = $p_lr;
        
     }
     
     public function do_survey($p_sname,$p_fname,$p_cont,$p_date,$p_age,$p_ffood,$numfoo,$p_eo,$p_wm,$p_wt,$p_lr) {
         
        $sql_survey = "CALL save_survey('$p_sname','$p_fname','$p_cont','$p_date','$p_age','$p_ffood','$numfoo','$p_eo','$p_wm','$p_wt','$p_lr')";
        echo "QUERY ".$sql_survey;
        $db = survey_db_conn::getInstance();
        $db->query($sql_survey);
         
     }
}

