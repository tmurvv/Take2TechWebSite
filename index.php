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
        <h4 class="sectionProjects--subText">All sites are
            <a href="#mobileFriendly" class="js--openGlossary">mobile friendly</a> using current
            <a href="#seo" class="js--openGlossary">search engine optimization</a> and
            <a href="#performance" class="js--openGlossary">performance optimization</a> techniques.</h4>

        <div class="cardWrapper">
            <div class="card">
                <div class="card__side card__side--front js--popup1">

                    <p>Grad Survey Form</p>
                    <div class="card__side--front-imgContainer1">
                        <img class="card__side--front-img" alt="Grad Survey Landing Page" src="img/GradSurveyScreenShot.png">
                    </div>

                    <div>
                        <button class="o-linkStyle-light js--cardFrontTechnical1">Technical Details</button>
                        <p>
                            <a href="TTT/InnoGradSurvey/index.php" class="o-linkStyle-light" target="_blank">Visit Site</a>
                        </p>
                    </div>

                </div>

                <div class="card__side card__side--back" id="popup1">
                    Grad Survey Form
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
                            <a href="#seo" class="js--openGlossary">&#10003;&nbsp;&nbsp;search engine optimization</a>
                        </li>
                        <li>
                            <a href="#performance" class="js--openGlossary">&#10003;&nbsp;&nbsp;performance optimization</a>
                        </li>
                    </ul>
                    <div class="card__side--back-btnContainer">
                        <button type="button" class="o-linkStyle-light card__side--back-btn js--popBack1">Back</button><br>
                        <a href="TTT/InnoGradSurvey/index.php" target="_blank" class="o-linkStyle-light card__side--back-btn">Visit Site</a>
                    </div>

                </div>
            </div>
            
            <div class="card">
                <div class="card__side card__side--front js--popup2">

                    <p>Innovation College JobBoard</p>
                    <div class="card__side--front-imgContainer3">
                        <img class="card__side--front-img" alt="JobBoard Landing Page" src="img/JobBoardScreenShot.png">
                    </div>

                    <div>
                        <button class="o-linkStyle-light js--cardFrontTechnical2">Technical Details</button>
                        <p>
                            <a href="http://www.take2tech.ca/TTT/JobBoard/" target="_blank" class="o-linkStyle-light">Visit Site</a>
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
                        <a href="http://www.take2tech.ca/TTT/JobBoard/" target="_blank" class="o-linkStyle-light card__side--back-btn">Visit Site</a>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card__side card__side--front js--popup3">

                    <p>Virutal Piggy Bank/<br>Allowance Tracker</p>
                    <div class="card__side--front-imgContainer2">
                        <img class="card__side--front-img" alt="take2tech.ca Landing Page" src="img/allowanceTrackerScreenShot.png">
                    </div>

                    <div>
                        <button class="o-linkStyle-light js--cardFrontTechnical3">Technical Details</button>
                        <p>
                            <a href="TTT/AllowanceTracker/index.php" target="_blank" class="o-linkStyle-light">Visit Site</a>
                        </p>
                    </div>

                </div>

                <div class="card__side card__side--back popup" id="popup3">
                    Virtual Piggy Bank
                    <br> Technical Specs
                    <ul class="o-list">
                        <li>
                            <a href="#mobileFriendly" class="js--openGlossary">&#10003;&nbsp;&nbsp;mobile friendly</a>
                        </li>
                        <li>
                            <a href="#responsiveImages" class="js--openGlossary">&#10003;&nbsp;&nbsp;responsive images</a>
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
                            <a href="#node" class="js--openGlossary">&#10003;&nbsp;&nbsp;Member Login System</a>
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

                    <p>Feedback Survey Form</p>
                    <div class="card__side--front-imgContainer2">
                        <img class="card__side--front-img" alt="take2tech.ca Landing Page" src="img/FeedbackSurveyScreenShot.png">
                    </div>

                    <div>
                        <button class="o-linkStyle-light js--cardFrontTechnical4">Technical Details</button>
                        <p>
                            <a href="TTT/FeedbackSurvey/index.php" target="_blank" class="o-linkStyle-light">Visit Site</a>
                        </p>
                    </div>

                </div>

                <div class="card__side card__side--back popup" id="popup4">
                    Feedback Survey Form
                    <br> Technical Specs
                    <ul class="o-list">
                        <li>
                            <a href="#mobileFriendly" class="js--openGlossary">&#10003;&nbsp;&nbsp;mobile friendly</a>
                        </li>
                        <li>
                            <a href="#responsiveImages" class="js--openGlossary">&#10003;&nbsp;&nbsp;responsive images</a>
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
                            <a href="#node" class="js--openGlossary">&#10003;&nbsp;&nbsp;Node build process</a>
                        </li>
                    </ul>
                    
                    <div class="card__side--back-btnContainer">
                        <button type="button" class="o-linkStyle-light card__side--back-btn js--popBack4">Back</button><br>
                        <a href="TTT/FeedbackSurvey/index.php" target="_blank" class="o-linkStyle-light card__side--back-btn">Visit Site</a>
                    </div>

                </div>
            </div>
            <div class="card">
                <div class="card__side card__side--front js--popup5">

                    <p>Harp Lesson Website</p>
                    <div class="card__side--front-imgContainer2">
                        <img class="card__side--front-img" alt="take2tech.ca Landing Page" src="img/harpLessonsScreenShot.png">
                    </div>

                    <div>
                        <button class="o-linkStyle-light js--cardFrontTechnical5">Technical Details</button>
                        <p>
                            <a href="https://www.harptisha.com" target="_blank" class="o-linkStyle-light">Visit Site</a>
                        </p>
                    </div>

                </div>

                <div class="card__side card__side--back popup" id="popup5">
                    Harp Lesson Website
                    <br> Technical Specs
                    <ul class="o-list">
                        <li>
                            <a href="#mobileFriendly" class="js--openGlossary">&#10003;&nbsp;&nbsp;mobile friendly</a>
                        </li>
                        <li>
                            <a href="#responsiveImages" class="js--openGlossary">&#10003;&nbsp;&nbsp;responsive images</a>
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
                            <a href="#node" class="js--openGlossary">&#10003;&nbsp;&nbsp;Node build process</a>
                        </li>
                    </ul>
                    
                    <div class="card__side--back-btnContainer">
                        <button type="button" class="o-linkStyle-light card__side--back-btn js--popBack5">Back</button><br>
                        <a href="TTT/FeedbackSurvey/index.php" target="_blank" class="o-linkStyle-light card__side--back-btn">Visit Site</a>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section class="sectionPricing" id="pricing">
        <div class="o-centerHeading">
            <h2 class="o-headingSecondary">Pricing</h2>
        </div>
        <div class="pricing">
            <div class="pricing__package">
                <div class="pricing__package--item pricing__package--item-line1">
                    <h4>
                        Standard Package
                    </h4>
                </div>
                <div class="pricing__package--item">Up to 4 "pages" or "sections"</div>
                <div class="pricing__package--item">Landing page/footer</div>
                <div class="pricing__package--item">One contact form</div>
                <div class="pricing__package--item">Something else? Let's talk!</div>
                <div class="pricing__package--price">$200USD</div>
            </div>
            <div class="pricing__package">
                <div class="pricing__package--item pricing__package--item-line1">
                    <h4>Update Your Current Site</h4>
                </div>
                <div class="pricing__package--item">Make it mobile friendly</div>
                <div class="pricing__package--item">Increase your
                    <a href="#conversion">conversion rate</a>
                </div>
                <div class="pricing__package--item">Update content</div>
                <div class="pricing__package--item">Change design</div>
                <div class="pricing__package--price">$20/hour</div>
            </div>
            <div class="pricing__package">
                <div class="pricing__package--item pricing__package--item-line1">
                    <h4>Custom Package</h4>
                </div>
                <div class="pricing__package--item">Tell me what you need</div>
                <div class="pricing__package--item">Custom Forms</div>
                <div class="pricing__package--item">Blog</div>
                <div class="pricing__package--item">Map to your business</div>
                <div class="pricing__package--price">Let's talk!</div>
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
    <section class="sectionGlossary">
        <div class="o-centerHeading">
            <h2 class="o-headingSecondary">Glossary of Technical Terms</h2>
        </div>
        <div class="sectionGlossary__viewBtnCont">
            <button type="button" class="o-btn sectionGlossary__viewBtnCont--viewBtn js--sectionGlossary__viewBtnCont--viewBtn" id="mobileFriendly">Show/Hide Glossary</button>
        </div>
        <div class="glossary">
            <div class="glossary__item glossary__item-firstRow">
                <div class="glossary__item--term">
                    <span class="u-underline">Specification</span>
                </div>
                <div class="glossary__item--helps">
                    <span class="u-underline">How</span>&nbsp;
                    <span class="u-underline">does</span>&nbsp;
                    <span class="u-underline">it</span>&nbsp;
                    <span class="u-underline">help</span>&nbsp;
                    <span class="u-underline">me?</span>
                </div>
                <div class="glossary__item--meaning">
                    <span class="u-underline">What</span>&nbsp;
                    <span class="u-underline">is</span>&nbsp;
                    <span class="u-underline">it?</span>
                </div>
            </div>
            <div class="glossary__item glossary__item-firstRow glossary__sticky">
                <div class="glossary__item--term">
                    Specification
                </div>
                <div class="glossary__item--helps">
                    How does it help me?
                </div>
                <div class="glossary__item--meaning">
                    What is it?
                </div>
            </div>

            <div class="glossary__item js--showSticky js--checkVisible" id="seo">
                <div class="glossary__item--term">mobile friendly</div>
                <div class="glossary__item--helps">Creates better usability for your website visitor.</div>
                <div class="glossary__item--meaning">A Mobile Friendly website looks great on any size screen from phone to computer. Also known as "responsive
                    design."
                </div>

            </div>

            <div class="glossary__item" id="performance">
                <div class="glossary__item--term">Search Engine Optimization</div>
                <div class="glossary__item--helps">Creates better visibility for your website.</div>
                <div class="glossary__item--meaning">Search Engine Optimization (SEO) makes your site more receptive to search engines crawlers and therefore
                    raises your position in searches on sites such as Google or Bing.</div>

            </div>
            <div class="glossary__item" id="responsiveImages">
                <div class="glossary__item--term">Performance Optimization</div>
                <div class="glossary__item--helps">Creates a better user experience for your website.</div>
                <div class="glossary__item--meaning">Performance optimization reduces web page download time and increases the speed at which web pages are rendered.</div>

            </div>
            <div class="glossary__item" id="git">
                <div class="glossary__item--term">responsive images</div>
                <div class="glossary__item--helps">Saves website visitors time and possibly money by reducing bandwidth usage.</div>
                <div class="glossary__item--meaning">Only downloads the size of photo that is needed for a particular screen size and resolution.</div>
            </div>

            <div class="glossary__item" id="bem">
                <div class="glossary__item--term">Git version control</div>
                <div class="glossary__item--helps">Your safety net! Reduces downtime.</div>
                <div class="glossary__item--meaning">Version control is offsite storage of website files in all stages of production. In case of catastrophic
                    failure, there is always a working version of your website to fall back on.
                </div>
            </div>

            <div class="glossary__item" id="advcss">
                <div class="glossary__item--term">BEM naming</div>
                <div class="glossary__item--helps">Saves you time and money when a new developer is updating the website.</div>
                <div class="glossary__item--meaning">Block, Element, Modifier (BEM) is a strategy for naming items that fosters clarity. With BEM the developer
                    can quickly find the place to implement a bug-fix or feature upgrade.</div>
            </div>

            <div class="glossary__item" id="architechture">
                <div class="glossary__item--term">Advanced CSS</div>
                <div class="glossary__item--helps">Improves
                    <a href="#conversion">conversion rates</a> and user interaction by moving screen elements to create emphasis.</div>
                <div class="glossary__item--meaning">CSS or Cascading Style Sheets is a language used to define visual appearance and formatting of websites.
                    Advanced CSS introduces moving elements and additional effects to increase
                    <a href="#conversion">conversion rates</a>.</div>
            </div>

            <div class="glossary__item" id="conversion">
                <div class="glossary__item--term">7-1 Architechture</div>
                <div class="glossary__item--helps">Saves the developer and the client time and money during initial development, upkeep, and future updates.
                </div>
                <div class="glossary__item--meaning">7-1 architechture is a standardized way to organize larger projects by splitting the code into seven "categories"
                    that can be easily navigated at scale.</div>
            </div>

            <div class="glossary__item" id="js">
                <div class="glossary__item--term">conversion rate</div>
                <div class="glossary__item--helps">Grow your business.
                </div>
                <div class="glossary__item--meaning">The conversion rate is the percentage of users who take a desired action, such as purchasing an item or filling
                    out a "contact me" form.</div>
            </div>

            <div class="glossary__item" id="php">
                <div class="glossary__item--term">Javascript computer language</div>
                <div class="glossary__item--helps">Gives you more options for responses and information from your customers.
                </div>
                <div class="glossary__item--meaning">Alongside HTML and CSS, JavaScript is one of the three core technologies of the World Wide Web. It enables
                    the website to respond to user inputs such as button clicks, scrolls, and submissions. The vast majority
                    of websites use it, and all major web browsers have a dedicated JavaScript "engine" to execute it
                    <sub>wiki</sub>.</div>
            </div>

            <div class="glossary__item" id="sass">
                <div class="glossary__item--term">PHP computer language</div>
                <div class="glossary__item--helps">Used to interact with emailing, member logins, forum posts, and databases.</div>
                <div class="glossary__item--meaning">PHP is a server-side scripting language designed for web development
                    <sub>wiki</sub>.</div>
            </div>

            <div class="glossary__item" id="node">
                <div class="glossary__item--term">Sass preprocessor</div>
                <div class="glossary__item--helps">Saves you time and money by reducing repetitive entries from the developer.</div>
                <div class="glossary__item--meaning">Sass is one of a class of tools called CSS preprocessors. Preprocessors help us code more efficiently by
                    adding special features into normal CSS, such as variables, nested rules, code groupings (mixins), and
                    more
                    <sub>www.learnhowtoprogram.com</sub>.</div>
            </div>

            <div class="glossary__item" id="">
                <div class="glossary__item--term">Node Build Process</div>
                <div class="glossary__item--helps">Reduces downtime by automating the final stage of website programming.</div>
                <div class="glossary__item--meaning">Build tools are programs that automate the creation of executable applications from source code. Building
                    incorporates compiling, linking, and packaging the code into a usable or executable form
                    <sub>techopedia.com</sub>.</div>
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