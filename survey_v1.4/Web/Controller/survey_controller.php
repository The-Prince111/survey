                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <?php
require_once 'Web/Model/navigator.php';
require_once 'Web/Model/survey.php';
require_once 'Web/Model/report.php';

class survey_controller
{
    public function home() {
       
        
        if(isset($_POST['btn_survey'])){
            nevigator::nevigate('survey');
        }
        else if(isset($_POST['btn_report'])){
            nevigator::nevigate('report');
            $summarydata =  report::do_report(); 
            $this->load->view('report',$summarydata);
           // $this->make_report(); // make the report available after the page load
        }else
        //mark the make survey path 
        if(isset($_POST['btn_submit'])){
            
             $surname = $_POST["txt_surname"];
            $fullname = $_POST["txt_fullnames"];
            $contact = $_POST["txt_contact"];
            $date = $_POST["survey_date"];
            $age = $_POST["num_age"];
             
             $food = "";
             $nfoo = "";
             foreach($_POST["chck_fav_food"] as $selected){
                 $food .= $selected . "";
             }
             $nfoo = strlen($food);
             
            $eatout = $_POST["rd_eat_out"];
            $watchmovies = $_POST["rd_watch_movies"];
            $watchtv = $_POST["rd_watch_tv"];
            $listenradio = $_POST["rd_listen_r"];
            
            
            survey::do_survey($surname, $fullname, $contact, $date, $age, $food, $nfoo, $eatout, $watchmovies, $watchtv, $listenradio);
            
            //delay for seconds so the data can be fully loaded to the DB
            sleep(5);
           // nevigator::nevigate('home'); 
        }else
         //end of make survey path
        
          //mark the view report path
         if(isset($_POST['btn_ok'])){
                 nevigator::nevigate('home'); 
         }
         //end of view survey path
         
        else{
            nevigator::nevigate('home'); 
        }
    }
    
}
?>