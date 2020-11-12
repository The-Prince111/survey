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
  font-size: x-small;
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
  background: linear-gradient(to right, #ff3300 0%);
  color: black;
  border: 1px solid silver;
  height: 50px;
  width: 300px;
  border-radius: 10px;
  font-weight: 600;
  font-size: x-large;
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

</style>
<script type="text/javascript"> 
function display_c(){
var refresh=1000; // Refresh rate in milli seconds
mytime=setTimeout('display_ct()',refresh)
}

function display_ct() {
var today = new Date();
var date = today.getFullYear()+'/'+(today.getMonth()+1)+'/'+today.getDate();
var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
document.getElementById('cdate').innerHTML = date;
document.getElementById('ctime').innerHTML = time;
display_c();
 }
</script>
<title>Tshimologong Survey</title>
</head>
<body onload=display_ct();>

<div class="body">
        <div class="home-tab">
		    <img src="Web/LIB/aura.PNG" alt="Tshimologong" height="60" width="100" style="border-radius: 20px;"><strong></strong>
    <label id="cdate" name="cdate"></label>
    <label id="ctime" name="ctime"></label> 
        </div>
    <div class="top-row">
	
        <header ><h1><strong>Tshimologong<br></h1></header ></strong>
                    <strong><p>Quick Survey<br><p></strong>
    </div>
    <div class="line"></div> <br><br><br><br><br>
      
    <form action="" method="post">
           <button type="submit" class="button" name="btn_survey"/>Fill out survey</button>
           <br><br>
           <button type="submit" class="button" name="btn_report"/>View survey results</button>
      </form>
    <br><br><br><br><br><br>
<label id="clocation">current location</label>
</div>
    <div class="footer">
    <br><strong>version 1.0, 2020 Edition</strong>
</div>
   
</body>
</html> 