"use strict";

/*******************
*Menu State helper functions
********************/
function setMenuState() {
    const windowSize = window.innerWidth;
    const mainNav = document.querySelector("#js--main-nav");
    const hamburger = document.querySelector("#js--hamburgerIcon");
    const close = document.querySelector("#js--menuCloseIcon");
    if (windowSize >= 900) {
        mainNav.style.display='block'; 
        hamburger.style.display = 'none';
        close.style.display='none';              
        
    } else {
        mainNav.style.display='none'; 
        hamburger.style.display = 'block';
        close.style.display='none'; 
    }
}
function toggleMobileMenu() {
    const windowSize = window.innerWidth;
    const mainNav = document.querySelector("#js--main-nav");
    const hamburger = document.querySelector("#js--hamburgerIcon");
    const close = document.querySelector("#js--menuCloseIcon");    
    //if window width >= 900, show menu and return
    if (windowSize >= 900) {
        mainNav.style.display='block'; 
        hamburger.style.display = 'none';
        close.style.display='none';              
        return;
    }
    //if closed icon showing, close menu
    if (close.style.display === 'block') {
        mainNav.style.display='none'; 
        hamburger.style.display = 'block';
        close.style.display='none';
    //if no close icon, show menu
    } else {
        mainNav.style.display='block'; 
        hamburger.style.display = 'none';
        close.style.display='block'; 
    }
}
/*******************
* portfolio flip cards helper functions
*******************/
//flip to back side of portfolio card
function cardClick(e) {
    const card = e.target.id;
    const popup = document.querySelector(`#js--popup${card}`);
    const backCard = document.querySelector(`#js--back${card}`);
    popup.style.transform = 'rotatey(-180deg)';
    backCard.style.tranform = 'rotatey(0)';
    backCard.style.opacity = 1;
    backCard.style.visibility = 1;              
}
//flip to front side of portfolio card
function popCardBack(e) {
    const card = e.target.id;
    const popup = document.querySelector(`#js--popup${card}`);
    const backCard = document.querySelector(`#js--back${card}`);
    popup.style.transform = 'rotatey(0)';
    backCard.style.tranform = 'rotatey(-180deg)';
    backCard.style.opacity = 0;
    backCard.style.visibility = 0;        
}

/****************
 * create portfolio cards
 ****************/
const portfolioCards = [
    {
        id: 0,
        title: "'Frecent' Shopping List",
        subTitle: "Public-facing WebApp",
        image: {  
            srcURL: "img/frecentListScreenShot.jpg", 
            altText: "Frecent List WebApp Landing Page"
        },
        siteURL: "https://frecentlist.com",
        codeURL: "https://github.remcom/TMurvihillPortfolio/frecenctlistportfolio",
        tech: ['membership login', 'subscriptions thru PayPal', 'fully responsive', 'vanilla JS', 'PHP/PDO', 'SQL']
    },
    {
        id: 1,
        title: "Innovation College JobBoard",
        subTitle: "Custom Client Backend",
        image: {
            srcURL: "img/JobBoardScreenShot.png", 
            altText: "JobBoard Landing Page"
        },
        siteURL: "https://www.take2tech.ca/TTT/JobBoard/",
        codeURL: "https://github.com/TMurvihillPortfolio/innovationjobboardportfolio",
        tech: ['PHP/PDO', 'Git version control', 'custom client backend', 'SASS', 'NPM', 'SQL']
    },
    {
        id: 2,
        title: "Realtor's Friend",
        subTitle: "React App / Hooks",
        image: {
            srcURL: "img/realtorsFriendScreenShot.png", 
            altText: "Realtors Friend Landing Page"
        },
        siteURL: "https://realtorsfriend.take2tech.ca",
        codeURL: "https://github.com/TMurvihillPortfolio/realtorsfriendportfolio",
        tech: ['React useContext', 'React useState', 'React useEffects', 'JSS', 'Javascript/ES6', 'Git version control']
    },
    {
        id: 3,
        title: "Tiffany Hansen, harpist",
        subTitle: "Static Brochure Website",
        image: {
            srcURL: "img/albertaHarpistScreenShot.jpg", 
            altText: "albertaharpist.ca Landing Page"
        },
        siteURL: "https://albertaharpist.com",
        codeURL: "https://github.com/TMurvihillPortfolio/albertaharpistportfolio",
        tech: ['Adv CSS', 'Intersection Observer', 'SASS', 'PHP Contact Form', 'ReCaptcha v.2/3', 'Cloudinary CDN']
    },
    {
        id: 4,
        title: "Fun Facts Train Game",
        subTitle: "React App / Classes",
        image: {
            srcURL: "img/funFactsTrainsScreenShot.jpg", 
            altText: "Fun Facts Train Game Landing Page"
        },
        siteURL: "https://funfactstrains.take2tech.ca",
        codeURL: "https://github.com/TMurvihillPortfolio/funfactstraingameportfolio",
        tech: ['React Router', 'JSS', 'Material-ui', 'create-react-app', 'Javascript/ES6', 'Git version control']
    }, 
    {
        id: 5,
        title: "Shared Space Scheduler in Development",
        subTitle: "Node.js/MongoDB",
        image: {
            srcURL: "img/schedulerScreenShot.jpg", 
            altText: "Shared Space Scheduler Landing Page"
        },
        siteURL: "#",
        codeURL: "#",
        tech: ['Node.js', 'Express', 'MongoDB', 'Mongoose', 'Server-side rendering', 'PUG']
    }   
];
function createTechList(techList) {
    return techList.map(tech => `<li>&#10003;&nbsp;&nbsp;${tech}</li>`).join('');
}
const cardHtml = `<div class="card"><div class="card__side card__side--front" id="js--popupcard{%id%}">
    <p>{%title%}</p>
    <p class='card__side--front-subText'>{%subTitle%}</p>
    <div class="card__side--front-imgContainer1">
        <img class="card__side--front-img" alt="{%altText%}" src="{%srcURL%}">
    </div>

    <div>
        <button class="o-linkStyle-light js--cardFrontTechnical1 js--cardTechnical" id='card{%id%}'> Technical Details</button><br>
        <a href="{%codeURL%}" target="_blank" class="o-linkStyle-light">View Code (GitHub)</a><br>
        <a href="{%siteURL%}" target="_blank" class="o-linkStyle-light">Visit Site</a>                    
    </div>
</div>
<div class="card__side card__side--back" id="js--backcard{%id%}">
    {%title%}
    <br> {%subTitle%}
    <ul class="o-list">
        {%techList%}
    </ul>
    <div class="card__side--back-btnContainer">
        <a href="{%siteURL%}" target="_blank" class="o-linkStyle-light card__side--back-btn">Visit Site</a><br>
        <a href= "{%codeURL%}" target="_blank" class="o-linkStyle-light card__side--back-btn">View Code (GitHub)</a>                 
    </div>
    <i class="fas fa-chevron-left o-linkStyle-light card__side--back-btn js--popCardBack" id="card{%id%}"></i>
</div></div>`;
const cardHtmlScheduler = `<div class="card"><div class="card__side card__side--front" id="js--popupcard{%id%}">
    <p>{%title%}</p>
    <p class='card__side--front-subText'>{%subTitle%}</p>
    <div class="card__side--front-imgContainer1">
        <img class="card__side--front-img" alt="{%altText%}" src="{%srcURL%}">
    </div>

    <div>
        <button class="o-linkStyle-light js--cardFrontTechnical1 js--cardTechnical" id='card{%id%}'> Technical Details</button><br>                    
    </div>
</div>
<div class="card__side card__side--back" id="js--backcard{%id%}">
    {%title%}
    <br> {%subTitle%}
    <ul class="o-list">
        {%techList%}
    </ul>
    <div class="card__side--back-btnContainer">                 
    </div>
    <i class="fas fa-chevron-left o-linkStyle-light card__side--back-btn js--popCardBack" id="card{%id%}"></i>
</div></div>`;

//create Card Function
function createPortCard(card) {
    let output;
    if (card.id === 5) {
        output = cardHtmlScheduler.replace(/{%title%}/g, card.title);
    } else {
        output = cardHtml.replace(/{%title%}/g, card.title);   
    }
    output = output.replace(/{%subTitle%}/g, card.subTitle);
    output = output.replace(/{%srcURL%}/g, card.image.srcURL);
    output = output.replace(/{%altText%}/g, card.image.altText);    
    output = output.replace(/{%siteURL%}/g, card.siteURL);
    output = output.replace(/{%codeURL%}/g, card.codeURL);
    output = output.replace(/{%id%}/g, card.id);
    output = output.replace(/{%techList%}/g, createTechList(card.tech));
    return output;
}
function createPortCards(cardObj) {
    const cardWrapper = document.querySelector("#js--cardWrapper");
    const output = portfolioCards.map(card => createPortCard(card)).join('');
    cardWrapper.innerHTML=output;
}