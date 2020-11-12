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
                height: 40px;
                position: fixed;
                bottom: 0;
                left: 0;
                background: linear-gradient(to right, #ff3300 0%, #ff9900 100%);
                overflow-x: hidden;
                text-align: center;
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

              width: 1260px;
              background: linear-gradient(to right, #ff3300 0%);
              color: black;
              border: 1px solid silver;
              height: 40px;
              margin: 30px 0px 0px -1px;
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
            .personal-info
            {
                /*width: calc(100%-20px);*/
                width: 1260px;
                left: -70;
                background: #ffffff;
                border-radius: 3px;
            }
            .favourite
            {
                float: right;
                width: 250px;
                /*margin: 10px 80px 10px 10px;*/
                background: #ffffff;
                border-radius: 3px;  
                font-size: large;
                margin-right: 35px;
                margin-top: 15px;
            }
            .preference
            {
                width: 900px;
                height: 200px;
                margin-top: 15px;
                left: 10;
                background: #ffffff;
                border-radius: 3px;  
                font-size: large;
            }
            .textbox
            {
              border: none;
              border-bottom: 1px solid silver; 
              width: 60%;
              height: 50px;
              font-size: large;

            }
            /*table,th,td 
            {
                width: 80%;
                display: table;
                border-collapse: collapse;
                border-spacing: 2px;
                border: 2px solid #E3E5E5;
                margin: 2px;
                padding: 10px
            }
            */
            .field-wrap
            {
              border: none;
              border-bottom: 0px solid silver; 
              width: 250px;
              height: 30px;
              font-size: large;    
           }
           .pref_table{
              width: 250px;
              height: 30px;
              font-size: large;
           }
           .pref_fieldset{
              width: 100%;
              height: 100%;
              font-size: large;
           }

        </style>
        <title>Survey Form</title>
    </head>
    <body>
        <div class="body" style="width: 1260px; height: 800px;">
            <div class="home-tab">
            <img src="/Web/Lib/tshim.png" alt="Tshimologong" height="60" width="100" style="border-radius: 20px;">
            </div>
            <div class="top-row" style="background: gainsboro; height: 100px">
                <header>
                    <h1><strong>Survey</strong></h1>
                </header>
            </div>
            <form action="" method="post">
                <div class="personal-info">
                    <fieldset>
                        <legend>Personal details</legend>
                        <input type="text"required autocomplete="off" placeholder="Surname" class="textbox" name="txt_surname"/>
                        <input type="text"required autocomplete="off" placeholder="Fullnames" class="textbox" name="txt_fullnames"/>
                        <input type="text"required autocomplete="off" placeholder="Contact no." class="textbox" name="txt_contact"/>
                        <input type="date" required class="textbox" placeholder="Date" autocomplete="off"  name="survey_date" min="2020-11-01" max="2021-01-30" />
                        <input type="number"required  min="5" max="120" autocomplete="off" placeholder="Age" class="textbox" name="num_age"/>
                    </fieldset>
                </div>
                <div class="favourite">
                    <fieldset>
                        <legend>What is you favourite food ?</legend>
                        <div class="field-wrap">
                            <input type="checkbox" id="piz" name="chck_fav_food[]" value="1"/>
                            <label for="piz">Pizza</label>
                        </div>
                        <div class="field-wrap">
                            <input type="checkbox" id="pas" name="chck_fav_food[]" value="2"/>
                            <label for="pas">Pasta</label>
                        </div>
                        <div class="field-wrap">
                            <input type="checkbox" id="paw" name="chck_fav_food[]" value="3"/>
                            <label for="paw">Pap and wors</label>
                        </div>
                        <div class="field-wrap">
                            <input type="checkbox" id="csf" name="chck_fav_food[]" value="4"/>
                            <label for="csf">Chicken stir fry</label>
                        </div>
                        <div class="field-wrap">
                            <input type="checkbox" id="bsf" name="chck_fav_food[]" value="5"/>
                            <label for="bsf">Beef stir fry</label>
                        </div>
                        <div class="field-wrap">
                            <input type="checkbox" id="oth" name="chck_fav_food[]" value="6"/>
                            <label for="oth">Other</label>
                        </div>
                    </fieldset>
                </div>
                <div class="preference">
                    <fieldset class="pref_fieldset">
                        <legend>Scale your preference</legend
                        
                        <table hidden="true"><tr><td></td></tr></table>
                        
                        <table style="width: 100%;">
                            <tr style="width: 100%">
                                <td style="width: 300px;">
                                    
                                </td>
                              <td>
                                    Strongly Agree(1)
                              </td>
                              <td>
                                  Agree(2)
                              </td>
                              <td>
                                  Neutral(3)
                              </td>
                              <td>
                                  Disagree(4)
                              </td>
                              <td>
                                  Strongly disagree(5)
                              </td>
                            </tr>
                            <tr>
                                <td>
                                    I like to eat out
                                </td>
                                <td>
                                    <input type="radio" id="rsa1" name="rd_eat_out" value="SA"/>
                                </td>
                                <td>
                                    <input type="radio" id="ra1" name="rd_eat_out" value="A"/>
                                </td>
                                <td>
                                    <input type="radio" id="rn1" name="rd_eat_out" value="N"/>
                                </td>
                                <td>
                                    <input type="radio" id="rd1" name="rd_eat_out" value="D"/>
                                </td>
                                <td>
                                    <input type="radio" id="rsd1" name="rd_eat_out" value="SD"/>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                        I like to watch movies
                                </td>
                                <td>
                                    <input type="radio" id="rsa2" name="rd_watch_movies" value="SA"/>
                                </td>
                                <td>
                                    <input type="radio" id="ra2" name="rd_watch_movies" value="A"/>
                                </td>
                                <td>
                                    <input type="radio" id="rn2" name="rd_watch_movies" value="N"/>
                                </td>
                                <td>
                                    <input type="radio" id="rd2" name="rd_watch_movies" value="D"/>
                                </td>
                                <td>
                                    <input type="radio" id="rsd2" name="rd_watch_movies" value="SD"/>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    I like to watch TV
                                </td>
                                <td>
                                    <input type="radio" id="rsa3" name="rd_watch_tv" value="SA"/>
                                </td>
                                <td>
                                    <input type="radio" id="ra3" name="rd_watch_tv" value="A"/>
                                </td>
                                <td>
                                     <input type="radio" id="rn3" name="rd_watch_tv" value="N"/>
                                </td>
                                <td>
                                    <input type="radio" id="rd3" name="rd_watch_tv" value="D"/>
                                </td>
                                <td>
                                    <input type="radio" id="rsd3" name="rd_watch_tv" value="SD"/>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    I like to listen to the radio
                                </td>
                                <td>
                                    <input type="radio" id="rsa4" name="rd_listen_r" value="SA"/>
                                </td>
                                <td>
                                    <input type="radio" id="ra4" name="rd_listen_r" value="A"/>
                                </td>
                                <td>
                                    <input type="radio" id="rn4" name="rd_listen_r" value="N"/>
                                </td>
                                <td>
                                    <input type="radio" id="rd4" name="rd_listen_r" value="D"/>
                                </td>
                                <td>
                                    <input type="radio" id="rsd4" name="rd_listen_r" value="SD"/>
                                </td>
                            </tr>
                        </table> 
                    </fieldset>
                </div>
                <button type="submit"  name="btn_submit" class="button"/>Submit</button>
            </form>
        </div>
        <div class="footer">
            <br><strong>version 1.0, 2020 Edition</strong>
        </div>
    </body>
    
</html> 