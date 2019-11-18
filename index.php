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
    <link rel="stylesheet" type="text/css" href="css/style.css?v=.085">
    <script src="https://kit.fontawesome.com/0f908e0835.js"></script>
    <script type="text/javascript" src="js\script.js?v=1.051"></script>
    <title>Tisha Murvihill, Web Developer</title>
</head>
<body>
    <header class="header">
        <div class="header__topLineWrapper">
            <a href='https://take2tech.ca' class="header__logoBox">
                <img src="img/logoLightYellow.gif" alt="TechSchool Logo" class="header__logoBox--logo">
            </a>
            <div class="nav">
                <ul class="nav__mainNav js--main-nav" id='js--main-nav'>
                    <li class="nav__mainNav--Item">
                            <a href="https://take2tech.ca">Home</a>
                    </li>
                    <li class="nav__mainNav--Item">
                        <span>
                            <a href="#projects">View portfolio</a>
                        </span>
                    </li>
                    <li class="nav__mainNav--Item">
                        <a href="#about">About</a>
                    </li>
                    <li class="nav__mainNav--Item">
                        <a href="resume.php">Resume</a>
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
                    React<br>
                    HTML/CSS<br>
                    Node.js<br>        
                </p>
            </div>
            <div class="marquee-wrap">          
                <div class="marquee">
                    <p>NodeJS<br>
                        Express<br>
                        MongoDB<br>
                        Mongoose<br>
                        React-Hooks<br>
                        React-Classes<br>
                        React-Router<br>
                        React-Material-ui<br>
                        Fully Responsive<br>                    
                        Git version control<br>
                        SEO<br>
                        JSS<br>
                        NPM<br>
                        SQL<br>
                        SSR<br>
                        PUG<br>
                        jQuery<br>
                        Cloudinary CDN<br> 
                        Intersection Observer<br>
                        React useContext<br>
                        React useState<br>
                        React useEffects<br>
                        and more...<br>                                                         
                    </p>
                </div>
            </div>
        </div>
            </header>
    <section class="sectionProjects" id="projects">
        <div class="o-centerHeading">
            <h2 class="o-headingSecondary">Portfolio</h2>
        </div>
        <h4 class="o-headingSubSection">Please note my speciality is implementation, not design, I am open to new technologies/processes, and I love to learn!!</h4>
        <div class="cardWrapper" id="js--cardWrapper">
            <!-- portfolio cards inserted by js -->
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
                <a href="resume.php" class="footer__menuContainer--menu-item">Resume</a>
                <a href="#about" class="footer__menuContainer--menu-item">About</a>
                <a href="contact.php" class="footer__menuContainer--menu-item">Contact</a>
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
            //Create Portfolio Items (cards)
            createPortCards();

            //add event listeners -- navigation
            window.addEventListener('resize', setMenuState);
            const hamburgerIcon = document.querySelector('#js--hamburgerIcon');
            hamburgerIcon.addEventListener('click', toggleMobileMenu);
            const menuCloseIcon = document.querySelector('#js--menuCloseIcon');
            menuCloseIcon.addEventListener('click', toggleMobileMenu);
            
            const fetchItems = (callback, ...params) => {
                callback(params);
            }
    
            //fetchItems ((res) => console.log(res), 'foo', 1);

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