<!DOCTYPE html>

<html lang="en">

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-132960985-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-132960985-1');
    </script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,300i,400" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="img/favicon.png">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="js\jquery.waypoints.min.js"></script>
    <script type="text/javascript" src="js\script.js"></script>

    <title>Tisha Murvihill, Developer</title>

</head>

<body>
    <header class="header">

        <div class="header__topLineWrapper">
            <div class="header__logoBox">
                <img src="img/logoLightYellow.gif" alt="TechSchool Logo" class="header__logoBox--logo">
            </div>

            <div class="nav">
                <ul class="nav__mainNav js--main-nav">
                    <li class="nav__mainNav--Item">
                        <span>
                            <a href="#projects">View projects</a>
                        </span>
                    </li>

                    <li class="nav__mainNav--Item">
                        <a href="#pricing">Pricing</a>
                    </li>

                    <li class="nav__mainNav--Item">
                        <a href="#about">About</a>
                    </li>

                    <li class="nav__mainNav--Item">
                        <a href="contact.php">Contact</a>
                    </li>

                </ul>

                <div class="nav__mobileNav" id="js--nav__mobileNav">
                    <a class="nav__mobileNav--icon js--nav__mobileNav--icon">
                        <img src="img/hamburger.png" alt="menu icon" class="nav__mobileNav--icon-hamburger">
                    </a>
                    <a class="nav__mobileNav--icon js--nav__mobileNav--icon">
                        <img src="img/Close.png" alt="menu icon" class="nav__mobileNav--icon-close">
                    </a>
                </div>

            </div>

        </div>

        <div class="header__heroBox">
            <div class="header__heroBox--mainHeading">
                <h1 class="header__heroBox--mainHeading o-headingPrimary">
                    Tisha Murvihill
                    <br/>
                    <span>Web Developer</span>
                </h1>
            </div>

            <div class="header__heroBox--subTitle">
                <h2 class="o-headingSecondary header__heroBox--subText">"Back of the Front End"</h2>
            </div>
        </div>
        <div class="marquee-fixed">
            <p>Javascript/ES6<br>
                HTML/CSS<br>
                PHP<br>                  
                React<br>
            </p>
        </div>
        <div class="marquee-wrap">
            
            <div class="marquee">
                <p>Fully Responsive<br>
                    Git version control<br>
                    SQL<br>
                    React-Hooks<br>
                    React-Router<br>
                    React-Material-ui<br>
                    NPM<br>
                    jQuery<br>
                    Intersection Observer<br>
                    Cloudinary CDN<br>
                    BEM<br>                      
                </p>
            </div>
        </div>


    </header>
    <section class="sectionProjects" id="projects">

        <div class="o-centerHeading">
            <h2 class="o-headingSecondary">Sample Projects</h2>
        </div>
        <!-- <h4 class="sectionProjects--subText">All sites are
            <a href="#mobileFriendly" class="js--openGlossary">mobile friendly</a> using current
            <a href="#seo" class="js--openGlossary">search engine optimization</a> and
            <a href="#performance" class="js--openGlossary">performance optimization</a> techniques.</h4> -->

        <h4>Please note my speciality is functionality, not design.<br>Let me help bring your client's design to reality!!</h4>
        <div class="cardWrapper">
            <div class="card">
                <div class="card__side card__side--front js--popup1">

                    <p>'Frecent' Shopping List</p>
                    <p class='card__side--front-subText'>public facing subscription webapp</p>
                    <div class="card__side--front-imgContainer1">
                        <img class="card__side--front-img" alt="Frecent List WebApp Landing Page" src="img/frecentListScreenShot.jpg">
                    </div>

                    <div>
                        <button class="o-linkStyle-light js--cardFrontTechnical1">Technical Details</button>
                        <p>
                            <a href="https://www.frecentlist.com" class="o-linkStyle-light" target="_blank">Visit Site</a>
                        </p>
                    </div>

                </div>

                <div class="card__side card__side--back" id="popup1">
                    Public facing subscription webapp
                    <br> Technical Specs
                    <ul class="o-list">
                        <li>
                            <a href="#mobileFriendly" class="js--openGlossary">&#10003;&nbsp;&nbsp;mobile friendly</a>
                        </li>
                        <li>
                            <a href="#responsiveImages" class="js--openGlossary">&#10003;&nbsp;&nbsp;responsive images</a>
                        </li>
                        <li>
                            <a href="#js" class="js--openGlossary">&#10003;&nbsp;&nbsp;javascript</a>/
                            <a href="#php" class="js--openGlossary">PHP</a>
                        </li>
                        <li>
                            <a href="#seo" class="js--openGlossary">&#10003;&nbsp;&nbsp;membership login</a>
                        </li>
                        <li>
                            <a href="#performance" class="js--openGlossary">&#10003;&nbsp;&nbsp;premium level subscriptions</a>
                        </li>
                    </ul>
                    <div class="card__side--back-btnContainer">
                        <button type="button" class="o-linkStyle-light card__side--back-btn js--popBack1">Back</button><br>
                        <a href="https://frecentlist.com" target="_blank" class="o-linkStyle-light card__side--back-btn">Visit Site</a>
                    </div>

                </div>
            </div>
            
            <div class="card">
                <div class="card__side card__side--front js--popup2">

                    <p>Innovation College JobBoard</p>
                    <p class='card__side--front-subText'>PHP/SQL backend</p>
                    <div class="card__side--front-imgContainer3">
                        <img class="card__side--front-img" alt="JobBoard Landing Page" src="img/JobBoardScreenShot.png">
                    </div>

                    <div>
                        <button class="o-linkStyle-light js--cardFrontTechnical2">Technical Details</button>
                        <p>
                            <a href="https://www.take2tech.ca/TTT/JobBoard/" target="_blank" class="o-linkStyle-light">Visit Site</a>
                        </p>
                    </div>

                </div>

                <div class="card__side card__side--back popup" id="popup2">
                    <p>JobBoard
                        <br>Technical Specs</p>

                    <ul class="o-list">
                        <li>
                            <a href="#php" class="js--openGlossary">&#10003;&nbsp;&nbsp;php</a>
                        </li>
                        <li>
                            <a href="#git" class="js--openGlossary">&#10003;&nbsp;&nbsp;Git versioning</a>
                        </li>
                        <li>
                            <a href="#bem" class="js--openGlossary">&#10003;&nbsp;&nbsp;BEM naming</a>
                        </li>
                        <li>
                            <a href="#sass" class="js--openGlossary">&#10003;&nbsp;&nbsp;Sass</a>
                        </li>
                        <li>
                            <a href="#node" class="js--openGlossary">&#10003;&nbsp;&nbsp;Node build process</a>
                        </li>
                        <li>
                            <a href="#architechture" class="js--openGlossary">&#10003;&nbsp;&nbsp;7-1 Architechture</a>
                        </li>

                    </ul>
                    <div class="card__side--back-btnContainer">
                        <button type="button" class="o-linkStyle-light card__side--back-btn js--popBack2">Back</button><br>
                        <a href="https://www.take2tech.ca/TTT/JobBoard/" target="_blank" class="o-linkStyle-light card__side--back-btn">Visit Site</a>
                    </div>
                </div>
            </div>
            
            <div class="card">
                <div class="card__side card__side--front js--popup3">

                    <p>Tiffany Hansen, harp</p>
                    <p class="card__side--front-subText">Static Brochure Website</p>
                    <div class="card__side--front-imgContainer2">
                        <img class="card__side--front-img" alt="take2tech.ca Landing Page" src="img/albertaHarpistScreenShot.jpg">
                    </div>

                    <div>
                        <button class="o-linkStyle-light js--cardFrontTechnical3">Technical Details</button>
                        <p>
                            <a href="https://www.albertaharpist.com" target="_blank" class="o-linkStyle-light">Visit Site</a>
                        </p>
                    </div>

                </div>

                <div class="card__side card__side--back popup" id="popup3">
                    Static Brochure Website
                    <br> Technical Specs
                    <ul class="o-list">
                        <li>
                            &#10003;&nbsp;&nbsp;Adv CSS
                        </li>
                        <li>
                            <a href="#responsiveImages" class="js--openGlossary">&#10003;&nbsp;&nbsp;Intersection Observer</a>
                        </li>
                        <li>
                            <a href="#sass" class="js--openGlossary">&#10003;&nbsp;&nbsp;SASS</a>
                        </li>
                        <li>
                            <a href="#php" class="js--openGlossary">&#10003;&nbsp;&nbsp;PHP</a>
                        </li>
                        <li>
                            <a href="#git" class="js--openGlossary">&#10003;&nbsp;&nbsp;Git versioning</a>
                        </li>
                        
                        <li>
                            <a href="#node" class="js--openGlossary">&#10003;&nbsp;&nbsp;images served by Cloudinary</a>
                        </li>
                    </ul>
                    
                    <div class="card__side--back-btnContainer">
                        <button type="button" class="o-linkStyle-light card__side--back-btn js--popBack3">Back</button><br>
                        <a href="TTT/FeedbackSurvey/index.php" target="_blank" class="o-linkStyle-light card__side--back-btn">Visit Site</a>
                    </div>

                </div>
            </div>
            <div class="card">
                <div class="card__side card__side--front js--popup4">

                    <p>Fun Facts Train Game</p>
                    <p class="card__side--front-subText">React App</p>
                    <div class="card__side--front-imgContainer2">
                        <img class="card__side--front-img" alt="Fun Facts Train Game Screen Shot" src="img/funFactsTrainsScreenShot.jpg">
                    </div>

                    <div>
                        <button class="o-linkStyle-light js--cardFrontTechnical4">Technical Details</button>
                        <p>
                            <a href="http://funfactsTrains.take2tech.ca" target="_blank" class="o-linkStyle-light">Visit Site</a>
                        </p>
                    </div>

                </div>

                <div class="card__side card__side--back popup" id="popup4">
                    Fun Facts Train Games
                    <br> Technical Specs
                    <ul class="o-list">
                        <li>
                            <a href="#mobileFriendly" class="js--openGlossary">&#10003;&nbsp;&nbsp;React Router</a>
                        </li>
                        <li>
                            <a href="#responsiveImages" class="js--openGlossary">&#10003;&nbsp;&nbsp;JSS</a>
                        </li>
                        <li>
                            <a href="#sass" class="js--openGlossary">&#10003;&nbsp;&nbsp;Material-ui</a>
                        </li>                       
                        <li>
                            <a href="#node" class="js--openGlossary">&#10003;&nbsp;&nbsp;Create-React-App</a>
                        </li>
                        <li>
                            <a href="#php" class="js--openGlossary">&#10003;&nbsp;&nbsp;ES6 w/arrow functions</a>
                        </li>
                        <li>
                            <a href="#git" class="js--openGlossary">&#10003;&nbsp;&nbsp;Git versioning</a>
                        </li>
                    </ul>
                    
                    <div class="card__side--back-btnContainer">
                        <button type="button" class="o-linkStyle-light card__side--back-btn js--popBack4">Back</button><br>
                        <a href="TTT/FeedbackSurvey/index.php" target="_blank" class="o-linkStyle-light card__side--back-btn">Visit Site</a>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section class="sectionAbout" id="about">
        <div class="o-centerHeading">
            <h2 class="o-headingSecondary">About
                <i class="ion-navicon"></i>
        </div>
        </h2>
        </div>
        <div class="sectionAbout__container">
            <!-- .story-->
            <figure class="sectionAbout__container--imgCont">
                <!-- .story__shape-->
                <img src="img/ITHeadShotMoney.jpg" alt="Tisha Murvihill head shot" class="sectionAbout__content--imgCont-img">
            </figure>
            <div class="sectionAbout__container--content">
                <a href="https://www.linkedin.com/in/tisha-murvihill-tech" target="_blank">Tisha Murvihill</a> is a Canadian developer with a standard of excellence. Her emphasis is on developing
                code that is easily scalable and maintainable. A graduate of
                <a href="https://innotechcollege.com">InnoTech College</a> in Calgary, she is constantly researching the latest techniques in high quality design,
                content, and customer service. She is also fully eligible to work in the United States.
                <br>
                <br>Tisha can be reached at
                <a href="mailto:tech@take2tech.ca">tech@take2tech.ca</a>.
            </div>
        </div>
    </section>
    <footer class="footer" id="footer">

        <div class="footer__menuContainer">
            <div class="footer__menuContainer--menu">
                <a href="#top" class="footer__menuContainer--menu-item">Home</a>
                <a href="#projects" class="footer__menuContainer--menu-item">Websites</a>
                <a href="#pricing" class="footer__menuContainer--menu-item">Pricing</a>
                <a href="#about" class="footer__menuContainer--menu-item">About</a>
            </div>

            <div class="footer__menuContainer--social">
                <a href="https://www.linkedin.com/in/tisha-murvihill-tech" target="_blank" class="footer__menuContainer--social-item">
                    <img src="img/linkedin.jpg" class="footer__menuContainer--social-item-img">

                </a>
                <i class="ion-social-linkedin footer__menuContainer--social-item-icon"></i>
                <a href="mailto:tech@take2tech.ca" class="footer__menuContainer--social-item footer__menuContainer--social-item-web" target="_blank">tech@take2tech.ca</a>
            </div>
        </div>

        <div class="footer__copy">
            <p>Some design ideas courtesy of Jonas Schmedtmann. Used with permission.</p>
            <p>&copy; 2018 by take2tech.ca. All rights reserved. ver 4.27-m</p>

        </div>
    </footer>


</body>

</html>