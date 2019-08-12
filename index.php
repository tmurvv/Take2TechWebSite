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
    <script src="https://kit.fontawesome.com/0f908e0835.js"></script>
    <script type="text/javascript" src="js\script.js?v=1.051"></script>
    <title>Tisha Murvihill, Web Developer</title>
</head>
<body>
    <header class="header">
        <div class="header__topLineWrapper">
            <div class="header__logoBox">
                <img src="img/logoLightYellow.gif" alt="TechSchool Logo" class="header__logoBox--logo">
            </div>
            <div class="nav">
                <ul class="nav__mainNav js--main-nav" id='js--main-nav'>
                    <li class="nav__mainNav--Item">
                        <span>
                            <a href="#projects">View portfolio</a>
                        </span>
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
                        <i class="fas fa-bars nav__mobileNav--icon-hamburger" id="js--hamburgerIcon"></i>
                    </a>
                    <a class="nav__mobileNav--icon js--nav__mobileNav--icon">
                    <i class="fas fa-window-close nav__mobileNav--icon-close" id="js--menuCloseIcon"></i>
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
                <h2 class="header__heroBox--subText">"Back of the Front End"</h2>
            </div>
        </div>
        <div class="o-flex-col">
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
                        React-Hooks<br>
                        React-Router<br>
                        React-Material-ui<br>
                        JSS<br>
                        NPM<br>
                        SQL<br>
                        BEM<br>
                        jQuery<br>
                        Cloudinary CDN<br> 
                        Intersection Observer<br>                                                         
                    </p>
                </div>
            </div>
        </div>
            </header>
    <section class="sectionProjects" id="projects">
        <div class="o-centerHeading">
            <h2 class="o-headingSecondary">Portfolio</h2>
        </div>
        <h4 class="o-headingSubSection">Please note my speciality is functionality, not design,<br>I am open to new technologies/processes, and I love to learn!!</h4>
        <div class="cardWrapper">
            <div class="card">
                <div class="card__side card__side--front" id="js--popupcard1">
                    <p>'Frecent' Shopping List</p>
                    <p class='card__side--front-subText'>Public-facing Subscription WebApp</p>
                    <div class="card__side--front-imgContainer1">
                        <img class="card__side--front-img" alt="Frecent List WebApp Landing Page" src="img/frecentListScreenShot.jpg">
                    </div>

                    <div>
                        <button class="o-linkStyle-light js--cardFrontTechnical1 js--cardTechnical" id='card1'> Technical Details</button><br>
                        <a href="https://bitbucket.org/tmurvvvv/frecentlistmaker/src/master/" target="_blank" class="o-linkStyle-light">View Code (GitHub)</a><br>
                        <a href="https://frecentlist.com" target="_blank" class="o-linkStyle-light">Visit Site</a>                    
                    </div>
                </div>
                <div class="card__side card__side--back" id="js--backcard1">
                    'Frecent' Shopping List
                    <br> Public-facing Subscription WebApp
                    <ul class="o-list">
                        <li>
                            &#10003;&nbsp;&nbsp;membership login
                        </li>
                        <li>
                            &#10003;&nbsp;&nbsp;subscriptions thru PayPal
                        </li>
                        <li>
                            &#10003;&nbsp;&nbsp;fully responsive
                        </li>                       
                        <li>
                            &#10003;&nbsp;&nbsp;vanilla javascript
                        </li>                   
                        <li>
                            &#10003;&nbsp;&nbsp;PHP/SQL
                        </li>
                    </ul>
                    <div class="card__side--back-btnContainer">
                        <a href="https://bitbucket.org/tmurvvvv/frecentlistmaker/src/master/" target="_blank" class="o-linkStyle-light card__side--back-btn">Visit Site</a><br>
                        <a href="https://frecentlist.com" target="_blank" class="o-linkStyle-light card__side--back-btn">View Code (GitHub)</a>                 
                    </div>
                    <i class="fas fa-chevron-left o-linkStyle-light card__side--back-btn js--popCardBack" id="card1"></i>
                </div>
            </div>
            
            <div class="card">
                <div class="card__side card__side--front js--popupcard2" id="js--popupcard2">

                    <p>Innovation College JobBoard</p>
                    <p class='card__side--front-subText'>Custom Client Backend</p>
                    <div class="card__side--front-imgContainer3">
                        <img class="card__side--front-img" alt="JobBoard Landing Page" src="img/JobBoardScreenShot.png">
                    </div>

                    <div>
                        <button class="o-linkStyle-light js--cardFrontTechnical2 js--cardTechnical" id='card2'>Technical Details</button><br>
                        <a href="https://github.com/tmurvv/TTTJobBoard" target="_blank" class="o-linkStyle-light">View Code (GitHub)</a><br>
                        <a href="https://www.take2tech.ca/TTT/JobBoard/" target="_blank" class="o-linkStyle-light">Visit Site</a>                    
                    </div>

                </div>
                <div class="card__side card__side--back popup" id="js--backcard2">
                    <p>JobBoard
                        <br>Custom Client Backend</p>
                    <ul class="o-list">
                        <li>
                            &#10003;&nbsp;&nbsp;PHP/PDO
                        </li>
                        <li>
                            &#10003;&nbsp;&nbsp;Git versioning</a>
                        </li>
                        <li>
                            &#10003;&nbsp;&nbsp;Search Function</a>
                        </li>
                        <li>
                            &#10003;&nbsp;&nbsp;SASS</a>
                        </li>
                        <li>
                            &#10003;&nbsp;&nbsp;NPM</a>
                        </li>
                        <li>
                            &#10003;&nbsp;&nbsp;BEM</a>
                        </li>
                    </ul>
                    <div class="card__side--back-btnContainer">
                        <a href="https://www.take2tech.ca/TTT/JobBoard/" target="_blank" class="o-linkStyle-light card__side--back-btn">Visit Site</a><br>
                        <a href="https://github.com/tmurvv/TTTJobBoard" target="_blank" class="o-linkStyle-light card__side--back-btn">View Code (GitHub)</a>                 
                    </div>
                    <i class="fas fa-chevron-left o-linkStyle-light card__side--back-btn js--popCardBack" id="card2"></i>
                </div>
            </div>
            <div class="card">
                <div class="card__side card__side--front js--popup3" id="js--popupcard3">
                    <p>Tiffany Hansen, harpist</p>
                    <p class="card__side--front-subText">Static Brochure Website</p>
                    <div class="card__side--front-imgContainer2">
                        <img class="card__side--front-img" alt="take2tech.ca Landing Page" src="img/albertaHarpistScreenShot.jpg">
                    </div>
                    <div>
                        <button class="o-linkStyle-light js--cardTechnical" id='card3'>Technical Details</button><br>
                        <a href="https://bitbucket.org/tmurvvvv/tiffhansen/src/master/" target="_blank" class="o-linkStyle-light">View Code (GitHub)</a><br>
                        <a href="https://albertaharpist.com" target="_blank" class="o-linkStyle-light">Visit Site</a>                    
                    </div>
                </div>
                <div class="card__side card__side--back popup" id="js--backcard3">
                    Tiffany Hansen, harpist
                    <br> Static Brochure Website
                    <ul class="o-list">
                        <li>
                            &#10003;&nbsp;&nbsp;Adv CSS
                        </li>
                        <li>
                            &#10003;&nbsp;&nbsp;Intersection Observer
                        </li>
                        <li>
                            &#10003;&nbsp;&nbsp;SASS
                        </li>
                        <li>
                            &#10003;&nbsp;&nbsp;PHP Contact Form
                        </li>
                        <li>
                            &#10003;&nbsp;&nbsp;Git versioning
                        </li>
                        <li>
                            &#10003;&nbsp;&nbsp;Cloudinary CDN
                        </li>
                    </ul>      
                    <div class="card__side--back-btnContainer">
                        <a href="https://albertaharpist.com/" target="_blank" class="o-linkStyle-light card__side--back-btn">Visit Site</a><br>
                        <a href="https://bitbucket.org/tmurvvvv/tiffhansen/src/master/" target="_blank" class="o-linkStyle-light card__side--back-btn">View Code (GitHub)</a>                 
                    </div>
                    <i class="fas fa-chevron-left o-linkStyle-light card__side--back-btn js--popCardBack" id="card3"></i>
                </div>
            </div>
            <div class="card">
                <div class="card__side card__side--front js--popup4" id="js--popupcard4">

                    <p>Fun Facts Train Game</p>
                    <p class="card__side--front-subText">React App</p>
                    <div class="card__side--front-imgContainer2">
                        <img class="card__side--front-img" alt="Fun Facts Train Game Screen Shot" src="img/funFactsTrainsScreenShot.jpg">
                    </div>

                    <div>
                        <button class="o-linkStyle-light js--cardTechnical" id='card4'>Technical Details</button><br>
                        <a href="https://bitbucket.org/tmurvvvv/funfacttraingame/src/master/" target="_blank" class="o-linkStyle-light">View Code (GitHub)</a><br>
                        <a href="http://funfactstrains.take2tech.ca" target="_blank" class="o-linkStyle-light">Visit Site</a>                    
                    </div>

                </div>
                <div class="card__side card__side--back popup" id="js--backcard4">
                    Fun Facts Train Game
                    <br> React App
                    <ul class="o-list">
                        <li>
                            &#10003;&nbsp;&nbsp;React Router
                        </li>
                        <li>
                            &#10003;&nbsp;&nbsp;JSS
                        </li>
                        <li>
                            &#10003;&nbsp;&nbsp;Material-ui
                        </li>                       
                        <li>
                            &#10003;&nbsp;&nbsp;Create-React-App
                        </li>
                        <li>
                            &#10003;&nbsp;&nbsp;javascript/ES6
                        </li>
                        <li>
                            &#10003;&nbsp;&nbsp;Git versioning
                        </li>
                    </ul>                    
                    <div class="card__side--back-btnContainer">
                        <a href="http://funfactstrains.take2tech.ca" target="_blank" class="o-linkStyle-light card__side--back-btn">Visit Site</a><br>
                        <a href="https://bitbucket.org/tmurvvvv/funfacttraingame/src/master/" target="_blank" class="o-linkStyle-light card__side--back-btn">View Code (GitHub)</a>                 
                    </div>
                    <i class="fas fa-chevron-left o-linkStyle-light card__side--back-btn js--popCardBack" id="card4"></i>
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
            
            <figure class="sectionAbout__container--imgCont">
                
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
                <a href="#projects" class="footer__menuContainer--menu-item">Portfolio</a>
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
            <p>&copy; 2019 by take2tech.ca. All rights reserved. ver 8.08-m</p>

        </div>
    </footer>
    <script>       
        // set state onload
        (function() {
            //Set initial menu state
            setMenuState();

            //add event listeners -- navigation
            window.addEventListener('resize', setMenuState);
            const hamburgerIcon = document.querySelector('#js--hamburgerIcon');
            hamburgerIcon.addEventListener('click', toggleMobileMenu);
            const menuCloseIcon = document.querySelector('#js--menuCloseIcon');
            menuCloseIcon.addEventListener('click', toggleMobileMenu);
            
            //add event listeners -- flip portfolio cards
            const cardTechnicalArray = Array.from(document.querySelectorAll('.js--cardTechnical'));
            cardTechnicalArray.map(card => {
                card.addEventListener('click', cardClick);
            });
            const popCardBackArray = Array.from(document.querySelectorAll('.js--popCardBack'));
            popCardBackArray.map(card => {
                card.addEventListener('click', popCardBack);
            });
        })();
    </script>
</body>
</html>