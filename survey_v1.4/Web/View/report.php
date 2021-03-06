<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: "Lato", sans-serif;
  text-align: center;
  padding: 2%;
  color: #ff3300;
}
.footer
{
    width: 100%;
    height: 130px;
    position: fixed;
    bottom: 0;
    left: 0;
	background: linear-gradient(to right, #ff3300 0%, #ff9900 100%);
    overflow-x: hidden;
    text-align: center;
    padding-top: 10px;
	color: white;
}
.top-row
{
    width: 100%;
    height: auto;
    left: 0;
    background: transparent;
    text-align: center;
    padding-top: 10px;
        
}
.image-row
{
    width: 100%;
    height: auto;
    left: 0;
    background: transparent;
    text-align: center;
    padding-top: 10px;
}
.bottom-row
{
    width: 100%;
    height: auto;
    left: 0;
    background: transparent;
    text-align: center;
    padding: 10px 0;
}
.line
{
    background-color: silver;
	background: linear-gradient(to left,white, #ff3300, white);
    height: 2px;
    width: 40%;
    margin: 0 auto;
    text-align: center;
}
.tab {
  list-style: none;
  background-color: #484A4D;
  background: linear-gradient(to bottom,gray, silver);
  width: 10%;
  height: 50px;
  font-weight: 300;
  font-size: x-large;
  display: block;
  position: fixed;
  border-radius: 20px;
  box-shadow: 0 4px 10px 4px rgba(19, 35, 47, 0.3);
}
.left-tab{
    background: transparent;
    width: 20%;
    height: 100%;
    float: left;
}
.right-tab{
    background: transparent;
    width: 80%;
    height: 100%;
    float: right;
}

.tab-group:after {
  content: "";
  display: table;
  clear: both;
  height: 50px;
}
.tab li a {
  display: block;
  text-decoration: none;
  padding: 15px;
  background: transparent;
  color: #000;
  font-size: 20px;
  float: left;
  width: 50%;
  text-align: center;
  cursor: pointer;
  transition: .5s ease;
  height: 50px;
}
.tab li a:hover {
  background: #484A4D;
  color: #fff;
  background: linear-gradient(to bottom, silver , #E3E5E5);
  border-radius: 20px;
}
.tab .active a {
  background: transparent;
  color: #000;
}

.tab-content > div:last-child {
  display: none;
}
.button
{
    
  width: 90%;
  background: linear-gradient(to right, #ff3300 0%);
  color: black;
  border: 1px solid silver;
  height: 40px;
  border-radius: 3px;
  font-weight: 300;
  font-size: x-large;
  position: relative;
  left: -1;
}
.button:hover
{
  background: none;
  background-image: none;
   background-color: #ff9900;
   background: linear-gradient(to right, #ff3300 0%, #ff9900 100%);
   color: whitesmoke;
   border: none;
   font-weight: 600;
}
.home-tab
{
  list-style: none;
  padding: 0;
  margin: 0 0 10px 0;
  background-color: silver;
  width: 3%;
  height: 40px;
  font-weight: 300;
  font-size: x-small;
  display: block;
  position: fixed;
  z-index: 3;
  top: -5;
  right: 10;
  border-radius: 10px;
  box-shadow: 0 4px 10px 4px rgba(19, 35, 47, 0.3);
}

.report
{
    text-align: center;
    width: calc(100% - 20px);
    margin: 0 auto;
    max-width: 50%;
    margin: -70px auto 40px auto;
    padding: 10px 40px;
    background: #ffffff;
    border-radius: 3px;
}
.textbox
{
  border: none;
  border-bottom: 1px solid silver; 
  width: 60%;
  height: 50px;
  font-size: large;
  
}

</style>
<title>Survery Report</title>
</head>
<body>

<div class="body">
       <div class="home-tab">
		       <img src="/Web/Lib/tshim.png" alt="Tshimologong" height="60" width="100" style="border-radius: 20px;"><strong></strong>
      </div>
     <div class="top-row">
	 
        <header ><h1><strong>Report<br></h1></header ></strong>
     </div>
    <div class="line"></div> <br><br>
    <?php
       // require_once 'Web/Controller/survey_controller.php';
        $sum =  report::do_report(); 
        
	echo "	<form action='' method='post'>
          
           <div class='report'>
                        <fieldset>
                            <legend>summary</legend>
                            
                            <table id='rep_tab'><br>
                ";
        //foreach($summarydata as $sum){
            echo "    <tr>
                <th></th>
                <td></td>
            </tr>
                        <tr> 
                <th>Total number of survey : </th>
                <td>$sum->numSurveys</td>
            </tr>
            <tr>
                <th>Avarage Age : </th>
                <td>$sum->AvgAges</td>
            </tr>
            <tr>
                <th>Oldest person participated in the survey : </th>
                <td>$sum->maxAge</td>
            </tr>
            <tr>
                <th>Youngest person participated in the survey : </th>
                <td>$sum->minAge</td>
            </tr>
	<tr>
                <th>---</th>
                <td>---</td>
            </tr>
                                    </tr>
            	<tr>
                <th>----</th>
                <td> ----</td>
            </tr>
            	<tr>
                <th>Percentage of people who like Pizza : </th>
                <td> $sum->percPizza</td>
            </tr>
                        </tr>
            	<tr>
                <th>Percentage of people who like Pasta : </th>
                <td> $sum->percPasta</td>
            </tr>
                        </tr>
            	<tr>
                <th>Percentage of people who like Pap and Wors : </th>
                <td> $sum->percPapAndWors</td>
            </tr>
            
                        </tr>
            	<tr>
                <th>----</th>
                <td> ----</td>
            </tr>
                                    </tr>
            	<tr>
                <th>----</th>
                <td> ----</td>
            </tr>
            	<tr>
                <th>People who like to eat out : </th>
                <td> $sum->avgEatOut</td>
            </tr>
                        </tr>
            	<tr>
                <th>People who like to watch movies : </th>
                <td> $sum->avgWatchMovies</td>
            </tr>
                        </tr>
            	<tr>
                <th>People who like to watch TV : </th>
                <td> $sum->avgWatchTv</td>
            </tr>
                        </tr>
            	<tr>
                <th>People who like to listen to the radio : </th>
                <td> $sum->avgListenToRadio</td>
            </tr> ";
        //}
        echo "    <br><br>
			</table><br>
                        
                        </fieldset>
                        
                    </div>
                    
                    
                    <br>
                    
           <button type='submit' class='button' name='btn_ok'/>Ok</button>
          
			</form> ";
	?>		


</div>
    <div class="footer">
    <br><strong>version 1.0, 2020 Edition</strong>
</div>
   
</body>
</html> 