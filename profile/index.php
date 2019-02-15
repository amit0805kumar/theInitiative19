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

<body>

    <div class="container">
        <div class="header">
        </div>
        <div class="main">
            <div class="nav">
                <div class="nav__link" id="home">
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
                <div class="nav__link">
                    <div class="nav__link__icon">
                        <svg class="svgIcons">
                            <use xlink:href="images/sprite.svg#logout"></use>
                        </svg>
                    </div>
                    <div class="nav__link__text">Logout</div>
                </div>
            </div>
            <div class="content">




                <div class="content__box" id="b1">
                    <div class="team__name">TEAM CSI</div>
                    <div class="topic">
                        <div class="topic__header">
                            <div class="topic__head">Topic Name: <span class="topic__name">Blemish Dejection</span></div>
                        </div>

                        <div class="topic__details">
                            <div class="topic__abstract">Abstract</div>
                            <div class="topic__abstract__text">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam non quia, rerum voluptatem quidem delectus, voluptas similique, aspernatur maxime deserunt accusamus. Nulla modi, amet, nisi vel eum in non quaerat!.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. In amet at harum, mollitia eos. Eligendi, odit labore modi aperiam perferendis, ipsam quia hic cupiditate possimus voluptatem reprehenderit ea omnis, debitis.
                            </div>
                        </div>

                        <a href="#" target="_blank" class="topic__synopsis noselect">Download Sample Synopsis</a>

                    </div>


                    <div class="members">
                        <div class="members__heading">Members</div>
                        <div class="members__grid">
                            <div class="members__details">
                                <div class="members__head">Member 1</div>
                                <div class="members__name">Name: <span>Amit Kumar</span></div>
                                <div class="members__mobile">Mobile: <span>8802980454</span></div>
                                <div class="members__name">Roll No: <span>1602710016</span></div>
                                <div class="members__name">Year: <span>1</span></div>
                            </div>
                            <div class="members__details">
                              <div class="members__head">Member 2</div>
                                <div class="members__name">Name: <span>Amit Kumar</span></div>
                                <div class="members__mobile">Mobile: <span>8802980454</span></div>
                                <div class="members__name">Roll No: <span>1602710016</span></div>
                                <div class="members__name">Year: <span>1</span></div>
                                </div>
                                <div class="members__details">
                              <div class="members__head">Member 3</div>
                                <div class="members__name">Name: <span>Amit Kumar</span></div>
                                <div class="members__mobile">Mobile: <span>8802980454</span></div>
                                <div class="members__name">Roll No: <span>1602710016</span></div>
                                <div class="members__name">Year: <span>1</span></div>
                                </div>
                        </div>   
                          
                    </div>

                </div>
                <div class="content__box hide" id="b2">


                    <div class="task__heading">Upload Synopsis</div>

                    <form action="#" method="post" class="synopsis">
                        <input type="text" class="synposis__input">
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
                    <div class="task__heading">Tasik Details</div>
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
                        <form class="uploader__input" method="post" action="#">
                            <input type="text" class="uploader__input__link" placeholder="Task Code (IN011)">
                            <div class="uploader__btn">
                                   <input type="submit" value="">
                                <svg class="uploadIcon">
                                    <use xlink:href="images/sprite.svg#upload"></use>
                                </svg>
                            </div>
                        </form>
                        <form class="uploader__input" method="post" action="#">
                            <input type="text" class="uploader__input__link" placeholder="Task Code (IN011)">
                            <div class="uploader__btn">
                               <input type="submit" value="">
                                <svg class="uploadIcon">
                                    <use xlink:href="images/sprite.svg#upload"></use>
                                </svg>
                            </div>
                        </form>
                        <form class="uploader__input" method="post" action="#">
                            <input type="text" class="uploader__input__link" placeholder="Task Code (IN011)">
                            <div class="uploader__btn">
                               <input type="submit" value="">
                                <svg class="uploadIcon">
                                    <use xlink:href="images/sprite.svg#upload"></use>
                                </svg>
                            </div>
                        </form>
                        <form class="uploader__input" method="post" action="#">
                            <input type="text" class="uploader__input__link" placeholder="Task Code (IN011)">
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
</head>

</html>