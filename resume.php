<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,300i,400" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Tangerine:100,300,300i,400" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:100,300,300i,400" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="https://kit.fontawesome.com/0f908e0835.js"></script>
    <script type="text/javascript" src="js\script.js?v=1.051"></script>
    <title>take2tech.ca-Resume</title>
</head>
<body>
    <header class="header" style="clip-path: none; height: 125px">
        <div class="header__topLineWrapper">
            <a href="https://take2tech.ca" class="header__logoBox">
                <img src="img/logoLightYellow.gif" alt="TechSchool Logo" class="header__logoBox--logo">
            </a>
            <div class="nav">
                <ul class="nav__mainNav js--main-nav" id='js--main-nav'>
                    <li class="nav__mainNav--Item">
                            <a href="https://take2tech.ca">Home</a>
                    </li>
                    <li class="nav__mainNav--Item">
                        <span>
                            <a href="https://take2tech.ca#projects">View portfolio</a>
                        </span>
                    </li>
                    <li class="nav__mainNav--Item">
                        <a href="https://take2tech.ca#about">About</a>
                    </li>
                    <li class="nav__mainNav--Item">
                        <a href="#">Resume</a>
                    </li>
                    <li class="nav__mainNav--Item">
                        <a href="https://take2tech.ca/contact.php">Contact</a>
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
        
    </header>
    <div class="resume">
        <img src="/img/tmurvResumeJan2020-p1.jpg" alt="" width='100%'>
        <img src="/img/tmurvResumeJan2020-p2.jpg" alt="" width='100%'>
    </div>
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
        })();
    </script>
</body>
</html>