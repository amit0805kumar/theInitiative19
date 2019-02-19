<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width initial-scale=1">
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Montserrat+Alternates:200,300,400,500,600,700,800,900|Muli:300,400,600,700,800,900|Poiret+One|Righteous|Roboto+Mono:300,400,500,700|Major+Mono+Display|Raleway:200,300,400,500,600,700,800,900|Anton|Buenard:400,700|Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-1.12.3.min.js" integrity="sha256-aaODHAgvwQW1bFOGXMeX+pC4PZIPsvn2h1sArYOhgXQ=" crossorigin="anonymous"></script>
    <link rel="shotcut icon" type="img/png" href="../images/logo.png">
    <script src="js/script.js"></script>
    <title>Team Profile</title>
    <?php
session_start();
include "../registration/constant.php";
$sent=array("mobile"=>$_SESSION['user_details']['mobile_no']);
//echo $_SESSION['user_details']['mobile_no'];
$recieve=apicall("/api/customer/details",$sent);
echo json_encode($recieve);
?>

<body>

    <div class="container">
        <div class="header">
        </div>
        <div class="main">
            <?php
            if($recieve["message"]=="failed")
            {
                ?>

                <div class="main__popup">
              <div class="main__popup__icon">
                           <svg>
                            <use xlink:href="images/sprite.svg#checklist"></use>
                            </svg>
                        
              </div>
              <div class="main__popup__heading">Please register first</div>
          </div>
                <?php
            }
                ?>
           
           
            <div class="nav">
                <div class="nav__link navActive" id="home">
                    <div class="nav__link__icon">
                        <svg class="svgIcons">
                            <use xlink:href="images/sprite.svg#user"></use>
                        </svg>
                    </div>
                    <div class="nav__link__text">Home</div>
                </div>
                <div class="nav__link" id="register">
                    <div class="nav__link__icon">
                        <svg class="svgIcons">
                            <use xlink:href="images/sprite.svg#upload">
                            </use>
                        </svg></div>
                    <div class="nav__link__text">Upload Synopsis</div>
                </div>

                <div class="nav__link" id="task">
                    <div class="nav__link__icon"> <svg class="svgIcons">
                            <use xlink:href="images/sprite.svg#list"></use>
                        </svg></div>
                    <div class="nav__link__text">Optional task</div>
                </div>


                <div class="nav__link" id="coordinators">
                    <div class="nav__link__icon"> <svg class="svgIcons">
                            <use xlink:href="images/sprite.svg#group"></use>
                        </svg></div>
                    <div class="nav__link__text">Coordinators</div>
                </div>
                <div class="nav__link" id="instructions">
                    <div class="nav__link__icon"> <svg class="svgIcons">
                            <use xlink:href="images/sprite.svg#organize"></use>
                        </svg></div>
                    <div class="nav__link__text">Instructions</div>
                </div>
                <a href="logout.php" class="nav__link">
                    <div class="nav__link__icon">
                        <svg class="svgIcons">
                            <use xlink:href="images/sprite.svg#logout"></use>
                        </svg>
                    </div>
                    <div class="nav__link__text">Logout</div>
                </a>
            </div>
            <div class="content">

                <?php
         

        switch ($recieve['topic']) {
        case "1":
        $topic_name="Statue of Politics";
        break;
        case "2":
        $topic_name="Blemish Dejection";
        break;
        case "3":
        $topic_name="NPA";
        break;
        case "4":
        $topic_name="Exorbitant Medication";
        break;
        case "5":
        $topic_name="Futile Strategies";
        break;
        case "6":
        $topic_name="Marine Microplastic";
        break;
}
?>



                <div class="content__box" id="b1">
                    <div class="team__name">
                        <?php echo $recieve['team_name'] ; ?>
                    </div>
                    <div class="topic">
                        <div class="topic__header">
                            <div class="topic__head">Topic Name: <span class="topic__name">
                                    <?php echo $topic_name; ?></span></div>
                        </div>

                        <div class="topic__details">
                            <div class="topic__abstract">Abstract</div>
                            <?php 
                           if($recieve['topic']=="1"){
                            ?>
                            <div class="topic__abstract__text">
                                With more than 3600 monuments and having the world's tallest statue ,an unofficial race of building tallest statues or more number of statues is now reaching to its extremity. Right after the inauguration of World's Tallest Statue: ‘The Statue of Unity’ the Maharashtra Govt. got the environment clearance for building the another tallest statue of the world: Shiva Ji statue . But the game isn't over yet now UP Govt. has released the proposal of building another and taller than Shiva ji statue, ‘Ram Ji Statue’. <br> Previously, there were other Governments too who used the focus of statues for symbolising their work and diverting the political issues. <br>‘Mayawati's Elephant Statues in Ambedkar Memorial Park’ which was made by BSP Govt. In Lucknow and the total cost of whole project was ₹7 Billions approximately.<br>‘Buddha statue on Hussain Sagar Lake’ in Hyderabad was also built by Ibrahim Qutub for depicting his pride. <br>
                                ‘Raja Bhoj Statue on Bhopal Lake’ built by Raja Bhoj.
                                All these examples has one thing in common, all of these statues were made by the politicians as they must have associated the statues with their pride. So, here is the question arises, do we really need these symbols of dignity. Would there be any other way to relate the development of the people and the country. <br>
                                Why statues have become a magnet in politics.
                            </div>
                            <?php

                           }
                           elseif ($recieve['topic']=="2") {
                            ?>

                            <div class="topic__abstract__text">
                                Mental health does not only means that a person is idiot or is mad. If a person is suffering from any type of pressure or in depression and is not able to cope with their fellow mates, it also comes under the category of mental illness.
                                Depression is a major problem in today’s generation. Every person is going through a lot of emotions in their life and is unable to share them with someone. All the tension is piled up in their head and leads to mental illness.People suffering from this disease often gains a feeling of suicide and even try to attempt it. Crying while alone is a basic problem.<br>India has been declared the most depressed country by WHO (World Health Organization) . Around 6.5 percent Indians are suffering from depression. It has been a very common problem since everyone is not able to fulfil their dreams and has to compete in this fast world. <br>
                                Try not to stress so much and be happy.
                            </div>

                            <?php   # code...
                           }
                           elseif ($recieve['topic']=="3") {
                               ?>

                            <div class="topic__abstract__text">
                                The lack in education system is making it impossible to grab good and practical knowledge. Today’s generation is not able to give its best because the type of studies conducted is of memorizing. They are neither implementing the practical nor they are trying to understand. Day by day competition is increasing which makes the race to be the best more difficult.The issue with danger that competition can harm the learning process by turning a project into a race to the finish line, where understanding and internalizing concepts and knowledge becomes unimportant compared to winning.<br>The purpose of the activity moves from the learning goals (i.e., engagement in making sense of the elements of the process and the attempt to interpret and make a quality effort) to efficiency, speed, and the outcome relative to others…we can see this change in focus occurring no matter what the teacher may say either to encourage or discourage it. Our education system would be better when everyone would be content by grabbing that power of gaining knowledge rather than matter what marks and rank they get.
                            </div>
                            <?php
                           }
                           elseif ($recieve['topic']=="4") {
                               ?>

                            <div class="topic__abstract__text">
                                There can be no dispute over the objective, the sincerity of the concerned is not beyond doubt and gives rise to so many natural questions. Affordability of medicines is a major issue determining access to medicines.
                                <br>
                                Prescription drugs are an important part of the health care system and patients rely on medicines to keep them healthy. Unfortunately, prices for prescription drugs have soared in recent years. Not only are drug manufacturers launching products with high prices, they are routinely raising the prices of existing drugs — even decades-old drugs — by double-digit rates.<br>India is said to have one of the most corrupt medical systems in the world. The situation has become so bad that patients today approach the doctor with mixed feelings – of faith and fear, of hope and hostility. Medical profession which was once a respected line of work but today is corrupted at every level, from medical education to medical practice, and in both the private and government sectors. It calls for doctors, the government and the public to act against dishonest doctors, restore the dignity of the profession and work for the benefit of society.
                            </div>

                            <?php
                           }
                           elseif ($recieve['topic']=="5") {
                               ?>
                            <div class="topic__abstract__text">
                                With more than 54% of workforce still dependent on agriculture for their livlihood, agriculture in India has a far-reaching impact on poverty reduction as well as rural development. Thus, it would be more
                                meaningful to view agriculture not as farming alone but as a wholistic value change which includes
                                farming, wholesaling, warehousing, processing and retailing. Also the fact that an average indian spends
                                more than 50% of his monthly expenditure on food establishes the centrality of agriculture in the context
                                of food security concerns.<br>There are numerous problems faced by the farmers in India and they are: <br>
                                1:-Due to lack of availability and affordability to farmers, there is low level of use of agricultural <br>
                                technologies. For e.g.-SMS machines,happy weed machines. <br>
                                2:-There is lack of research and development in this field leading farmers to use ancestral methods and
                                techniques and there is no major progress neither in production nor in development.
                            </div>


                            <?php
                           }
                           elseif ($recieve['topic']=="6") {
                               ?>

                            <div class="topic__abstract__text">
                                Plastic products have become an integral part of our daily life, encouraging its production to cross 150 million tonnes per year globally. Government try to stop problem, so it creating many rules, but it’s not effected in human mentality. Every day, a gigantic amount of plastic leaks into the environment, the seas and oceans. It stays there for a very long time, damaging nature and the ecosystems that support life on Earth. Meanwhile plastic litter continues to accumulate in world oceans. It has been estimated that 8 million tons of plastic waste reaches the ocean each year, and with no action that volume is projected to double by 2030, and double again by 2050.<br>At least 44 sea bird species, 9 cetacean species, 11 pinniped species, 6 turtle species and 31 invertebrate species have been documented to suffer entanglement in larger pieces of plastic debris (NOAA, 2014).
                                Plastic pollution poses an increasing issue for marine life. Physical harm from plastic items, Chemical harm from toxic chemicals associated with plastic (additives, persistent organic pollutants),Biological harm from microorganisms that adhere to plastics. Plastic is just one type of floating substrate in the ocean, but it is unique in a number of ways that make it particularly worrisome.

                            </div>

                            <?php
                           }

                           ?>

                        </div>

                        <a href="#" target="_blank" class="topic__synopsis noselect">Download Sample Synopsis</a>

                    </div>

                    <?php
                        $sent=array("team_id"=>$recieve['team_id']);
                        //echo $recieve[0]['team_id'];
                        $recieve=apicall("/api/customer/memberdetails",$sent);
                        ?>

                    <div class="members">
                        <div class="members__heading">Members</div>

                        <div class="members__grid">
                            <?php
                       // echo json_encode($recieve);
                        foreach ($recieve as $key => $value)
                        {

                      ?>

                            <div class="members__details">
                                <div class="members__head">Member 1</div>
                                <div class="members__name">Name: <span>
                                        <?php echo $value['name']; ?></span></div>
                                <div class="members__mobile">Mobile: <span>
                                        <?php echo $value['mobile']; ?></span></div>
                                <div class="members__name">Roll No: <span>
                                        <?php echo $value['rollno']; ?></span></div>
                                <div class="members__name">Year: <span>
                                        <?php echo $value['year']; ?></span></div>
                            </div>
                            <?php  
                            }
                             ?>

                        </div>

                    </div>

                </div>
                <div class="content__box hide" id="b2">
                
                <a href="#" class="synOut">https://csiakgec.in/theinitiative/index.html</a>


                    <div class="task__heading">Upload Synopsis</div>

                    <form id="upload_synopsis_form" class="synopsis">
                        <input type="text" name="synopsis_link" class="synposis__input">
                        <input type="hidden" name="team_id" id="team_id" value="<?php echo($recieve[0]['team_id']); ?>">
                        <div class="synopsis__btn">
                            <input type="submit" value="">
                            <svg class="uploadIcon">
                                <use xlink:href="images/sprite.svg#upload"></use>
                            </svg>
                        </div>
                    </form>
                    <div class="uploadInst">* You must upload the google docs link.</div>


                </div>


                <div class="content__box hide" id="b3">
                    <div class="task__heading">Task Details</div>
                    <div class="task__box">
                        <div class="task">
                            <div class="task__code">Task Code (IN011)</div>
                            <div class="tast__details">Record opinions of the people about the topic and what they feel about it. Post the recorded video on social media and mention/tag The Initiative page.</div>
                            <div class="task__marks"> - 10marks</div>
                        </div>
                        <div class="task">
                            <div class="task__code">Task Code (IN011)</div>
                            <div class="tast__details">Record opinions of the people about the topic and what they feel about it. Post the recorded video on social media and mention/tag The Initiative page.</div>
                            <div class="task__marks"> - 10marks</div>
                        </div>
                        <div class="task">
                            <div class="task__code">Task Code (IN011)</div>
                            <div class="tast__details">Record opinions of the people about the topic and what they feel about it. Post the recorded video on social media and mention/tag The Initiative page.</div>
                            <div class="task__marks"> - 10marks</div>
                        </div>
                        <div class="task">
                            <div class="task__code">Task Code (IN011)</div>
                            <div class="tast__details">Record opinions of the people about the topic and what they feel about it. Post the recorded video on social media and mention/tag The Initiative page.</div>
                            <div class="task__marks"> - 10marks</div>
                        </div>
                    </div>
                    <div class="task__heading">Upload Tasks</div>
                    <div class="uploader">
                       
                       <a href="#" class="uploadOut">https://www.youtube.com/watch?v=UqyT8IEBkvY</a>
                        <form class="uploader__input" id="task_form">
                          <select name="task_code" id="task_code">
                              <option value="0">Select task code</option>
                              <option value="INI011">INI011</option>
                              <option value="INI012">INI012</option>
                              <option value="INI013">INI013</option>
                              <option value="INI014">INI014</option>
                          </select>
                          <input type="text" name="task_link" id="task_link" placeholder="Upload task Link">
                          <input type="hidden" name="team_id" value="<?php echo($recieve[0]['team_id']); ?>">
                            <div class="uploader__btn">
                               <input type="submit" value="">
                                <svg class="uploadIcon">
                                    <use xlink:href="images/sprite.svg#upload"></use>
                                </svg>
                            </div>
                        </form>

                    </div>

                    <div class="uploadInst">* You can either upload either one or all four of them.</div>

                </div>

                <div class="content__box hide" id="b4">

                    <div class="coordinators">


                        <div class="coordinators__grid">
                            <div class="coordinators__box">
                                <img src="../images/mem/aadi.jpeg" alt="coordinators" class="coordinators__img">
                                <div class="coordinators__details">
                                    <div class="coordinator__name">Aditya Baranwal</div>
                                    <div class="coordinator__num">888888888</div>
                                </div>
                            </div>
                            <div class="coordinators__box">
                                <img src="../images/mem/aanchal.jpeg" alt="coordinators" class="coordinators__img">
                                <div class="coordinators__details">
                                    <div class="coordinator__name">Aanchal Gupta</div>
                                    <div class="coordinator__num">888888888</div>
                                </div>
                            </div>
                            <div class="coordinators__box"> <img src="../images/mem/amit.jpg" alt="coordinators" class="coordinators__img">
                                <div class="coordinators__details">
                                    <div class="coordinator__name">Amit Kumar</div>
                                    <div class="coordinator__num">888888888</div>
                                </div>
                            </div>

                        </div>
                        <div class="coordinators__grid">
                            <div class="coordinators__box"> <img src="../images/mem/alok.jpeg" alt="coordinators" class="coordinators__img">
                                <div class="coordinators__details">
                                    <div class="coordinator__name">Alok Yadav</div>
                                    <div class="coordinator__num">888888888</div>
                                </div>
                            </div>
                            <div class="coordinators__box">
                                <img src="../images/mem/vats.jpeg" alt="coordinators" class="coordinators__img">
                                <div class="coordinators__details">
                                    <div class="coordinator__name">Shashwat Vats</div>
                                    <div class="coordinator__num">888888888</div>
                                </div>
                            </div>
                            <div class="coordinators__box">
                                <img src="../images/mem/shubh.jpeg" alt="coordinators" class="coordinators__img">'
                                <div class="coordinators__details">
                                    <div class="coordinator__name">Shubh Singhal</div>
                                    <div class="coordinator__num">888888888</div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>

                <div class="content__box hide" id="b5">
                    <div class="task__heading">Instructions</div>
                    <div class="instructions">
                        <div class="instruction">
                            <div class="instruction__num">1</div>
                            <div class="instruction__text">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi, sequi, fuga dolore, explicabo amet quia debitis minima accusantium laborum sint earum consectetur iste aliquid sit adipisci accusamus maxime, eaque voluptate?
                            </div>
                        </div>
                        <div class="instruction">
                            <div class="instruction__num">2</div>
                            <div class="instruction__text">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi, sequi, fuga dolore, explicabo amet quia debitis minima accusantium laborum sint earum consectetur iste aliquid sit adipisci accusamus maxime, eaque voluptate?
                            </div>
                        </div>
                        <div class="instruction">
                            <div class="instruction__num">3</div>
                            <div class="instruction__text">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi, sequi, fuga dolore, explicabo amet quia debitis minima accusantium laborum sint earum consectetur iste aliquid sit adipisci accusamus maxime, eaque voluptate?
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
<script type="text/javascript" src="script_ajax.js"></script>
</head>

</html>
