<!DOCTYPE html>
<html lang="en">
<?php
session_start();
?>
<head>
    <meta name="viewport" content="width=device-width initial-scale=1">
    <meta charset="utf-8">
    <title>Registration</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="../css/animate.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Montserrat+Alternates:200,300,400,500,600,700,800,900|Muli:300,400,600,700,800,900|Poiret+One|Righteous|Roboto+Mono:300,400,500,700|Major+Mono+Display|Raleway:200,300,400,500,600,700,800,900|Anton|Buenard:400,700|Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-1.12.3.min.js" integrity="sha256-aaODHAgvwQW1bFOGXMeX+pC4PZIPsvn2h1sArYOhgXQ=" crossorigin="anonymous"></script>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="validate.js"></script>
</head>

<body>

   

    <div class="header">
        <img src="../images/logo.png" alt="" class="header__logo">
        <div class="header__heading">The Initiative</div>
    </div>
    <div class="section__form">

        <form id="msform" class="form" method="post" action="reg.php">
            <!-- progressbar -->
                        <ul id="progressbar">
                <li class="active"></li>
                <li></li>
                <li></li>
            </ul>
            
            <!-- fieldsets -->
            <fieldset>
                <h2 class="fs-title">Enter Team Leader Details</h2>
                <h3 class="fs-subtitle"></h3>
                
                <input type="text" name="team_name" id="team_name" placeholder="Team Name">
                
                <select name="team_topic" id="team_topic">
                    <option value="default">-Select Topic-</option>
                    <option value="1">Statue of Politics</option>
                    <option value="2">Blemish Dejection</option>
                    <option value="3">NPA</option>
                    <option value="4">Exorbitant Medication</option>
                    <option value="5">Futile Strategies</option>
                    <option value="6">Marine Microplastic</option>
                </select>
                
                <input type="text" name="mem1_name" id=mem1_name placeholder="Leader Name">
                
                <input type="email" name="mem1_email" id="mem1_email" placeholder="Email" />
                
                <input type="number" name="mem1_mobile" id="mem1_mobile" placeholder="Mobile Number" value="<?php echo($_SESSION['user_details']['mobile_no']); ?>" disabled>

                <input type="text" name="mem1_rollno" id="mem1_rollno" placeholder="Roll Number">
                
                <input type="text" name="college" id="college" placeholder="College">
                 
                <select name="mem1_year" id="mem1_year">
                    <option value="default">-Select Year-</option>
                    <option value="1">1st</option>
                    <option value="2">2nd</option>
                    <option value="3">3rd</option>
                    <option value="4">4th</option>
                </select>
                
                <select name="mem1_branch" id="mem1_branch">
                    <option value="default">-Select Branch-</option>
                    <option value="cse">CSE</option>
                    <option value="it">IT</option>
                    <option value="ece">ECE</option>
                    <option value="ce">CE</option>
                    <option value="me">ME</option>
                    <option value="en">EN</option>
                    <option value="mca/mba">MCA/MBA</option>
                </select>
                
                <input type="button" name="next" id="next" value="Next" class="next action-button" />
            
            </fieldset>
            
            
            <fieldset>
                <h2 class="fs-title">Member 2 Details</h2>
                <h3 class="fs-subtitle"></h3>
                
                <input type="text" name="mem2_name" id="mem2_name" placeholder="Member 2 Name">
                
                <input type="email" name="mem2_email" id="mem2_email" placeholder="Email" />
                
                <input type="text" name="mem2_mobile" id="mem2_mobile" placeholder="Mobile">
                
                
                <input type="text" name="mem2_rollno" id="mem2_rollno" placeholder="Roll Number">
                
                   <select name="mem2_year" id="mem2_year">
                    <option value="default">-Select Year-</option>
                    <option value="1">1st</option>
                    <option value="2">2nd</option>
                    <option value="3">3rd</option>
                    <option value="4">4th</option>
                </select>
                
                <select name="mem2_branch" id="mem2_branch">
                   <option value="default">-Select Branch-</option>
                    <option value="cse">CSE</option>
                    <option value="it">IT</option>
                    <option value="ece">ECE</option>
                    <option value="ce">CE</option>
                    <option value="me">ME</option>
                    <option value="en">EN</option>
                    <option value="mca/mba">MCA/MBA</option>
                </select>
                
                  <p style="color:red;font-size: 17px;">*Click on next only if you are registering for 3 members.</p>
                
                <input type="button" name="previous" class="previous action-button" value="Previous" /> 
                
                <input type="submit" name="previous" id="submit2" class="action-button" value="Submit" />
                
                <input type="button" name="next" id="next2"class="next action-button" value="Next" />
            </fieldset>
            
            <fieldset>
                <h2 class="fs-title">Member 3 Details</h2>
                <h3 class="fs-subtitle"></h3>
                
                <input type="text" name="mem3_name" id="mem3_name"placeholder="Member 3 Name">
                
                <input type="text" name="mem3_email" id="mem3_email" placeholder="Email" />
                
                <input type="text" name="mem3_mobile" id="mem3_mobile" placeholder="Mobile">
                
                <input type="text" name="mem3_rollno" id="mem3_rollno" placeholder="Roll Number">
                
                <select name="mem3_year" id="mem3_year">
                    <option value="default">-Select Year-</option>
                    <option value="1">1st</option>
                    <option value="2">2nd</option>
                    <option value="3">3st</option>
                    <option value="4">4th</option>
                </select>
                
                <select name="mem3_branch" id="mem3_branch">
                    <option value="default">-Select Branch-</option>
                    <option value="cse">CSE</option>
                    <option value="it">IT</option>
                    <option value="ece">ECE</option>
                    <option value="ce">CE</option>
                    <option value="me">ME</option>
                    <option value="en">EN</option>
                    <option value="mca/mba">MCA/MBA</option>
                </select>
                
                <input type="button" name="previous" class="previous action-button" value="Previous" />
                
                <input type="submit" name="submit" id="submit" class="action-button" value="Submit" />
            
            </fieldset>
        </form>
    </div>
 <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js'></script>
    <script src="script.js"></script>
    
     <div id="fb-root"></div>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      xfbml            : true,
      version          : 'v3.2'
    });
  };

  (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- Your customer chat code -->
<div class="fb-customerchat"
  attribution=setup_tool
  page_id="2274447382801951">
</div>
</body>

</html>
