<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>American Society Of Mechanical Engineers | Stony Brook University</title>
    <meta name ="viewport" content="width=device-width">
    <meta name = "author" content = "Moinak Das">
    <meta name = "keywords" content = "Stony Brook University, American Society Of Mechanical Engineers, ASME">
    <meta name = "description" content = "Welcome to the American Society of Mechanical Engineers, a mechanical engineering club at Stony Brook University!">
    <link rel = "icon" href = "images/titleIcon.png">
    <link rel= "stylesheet" href = "style.css">
    <!--Google Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&family=Roboto:wght@300&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="scripts/teamPageEffects.js"></script> 
    <script src = "scripts/jquery.color-2.1.2.js"></script>
    <script src="scripts/mobileEffects.js"></script>
</head>
<style>
    .navButton:after{
        content: '';
        position: absolute;
        width: 100%;
        transform: scaleX(0);
        height: 2px;
        bottom: 0;
        left: 0;
        background-color: #236DE2;
        transform-origin: bottom left;
        transition: transform 0.25s ease-out;
    }
</style>
<body>
    <div id = "navBar" style =>
        <a href = "index"><img id = ASMElogo style = "content: url(images/ASMENoGlobeBlue.png);"></a>
        <a class = "navButton" href = "events" style = "color: #236DE2;">Events</a>
        <a class = "navButton" href = "team" style = "color: #236DE2;">Team</a>
        <a class = "navButton" href = "contact" style = "color: #236DE2;">Contact</a>
        <a class = "navButton" href = "alumni" style = "color: #236DE2;">Alumni</a>
        <a class = "joinButton" href = "https://docs.google.com/forms/d/e/1FAIpQLSdTSWMfHugloMAjSWTWdbS20Ah_gtTusIjEhGgezn8zR-cxaw/viewform?vc=0&c=0&w=1&flr=0" style = "margin-right: 50px; 
        background-color: #236DE2; color:white; padding-left:35px; padding-right:35px;
        padding-top:10px; padding-bottom:10px; border-radius: 15px;border: 2px solid #236DE2;">Join</a>
    </div>
    <!--MOBILE HAMBURGER MENU-->
    <img id = "blueHamburger">
    <div id = "blurFilter">
    </div>
    <div id = "mobileMenu">
        <a class = "mobileNav" href = "index">Home</a>
        <a class = "mobileNav" href = "eventsMobile">Events</a>
        <a class = "mobileNav" href = "team">Team</a>
        <a class = "mobileNav" href = "contact">Contact</a>
        <a class = "mobileNav" href = "alumni">Alumni</a>
        <a class = "mobileNav" href = "https://docs.google.com/forms/d/e/1FAIpQLSdTSWMfHugloMAjSWTWdbS20Ah_gtTusIjEhGgezn8zR-cxaw/viewform?vc=0&c=0&w=1&flr=0">Join</a>
    </div>
    <!--END MOBILE HAMBURGER MENU-->
    <div style = "margin-bottom: 30px; margin-top: 40px;">
        <img src = "images/teamSlideCopy.png" style = "width: 100vw;">
    </div>
    <div id = "teamHolder">
        <div class = "teamSlot" id = "team1">
            <div class = "eventCircle" style = "margin-top: 40px; text-align: center;background-color: #F9FCFF;">
                <img src = "images/profilePictures/Moinak.jpg" class = "profilePic">
            </div>
            <div class = "bioHolder">
                <div class = "eventTitle">Moinak Das</div>
                <div class = "eventDetails">President</div>
                <div class = "eventDescription" style = "margin-top: 20px;">I'm a sohpomore mechanical engineering major at Stony Brook University, 
                    and a software developer based in New York City, NY. Over the course of four years, I've 
                    helped numerous organizations improve online presence, conduct regular website maintenence, 
                    and implement software solutions to streamline workflow. I hope to apply this experience 
                    to ASME by introducing software to automate some of the day-to-day tasks and adding more 
                    computer-science focused workshops. In the future, I want to pursue a PhD in Mechanical 
                    Engineering and become a professor. Outside of work and school, I enjoy playing guitar. </div>
                <div class = "container" style = "text-align:center; margin-top: 30px;">
                    <a href = "https://www.linkedin.com/in/moinak-das-1708031b4"><img class = "bioLink" src = "images/LinkedIn.png" style = "height: 30px;margin-left: 15px; margin-right:15px;"></a>
                    <a href = "mailto:Moinak.Das@stonybrook.edu"><img class = "bioLink" src = "images/Gmail.png" style = "height: 30px;margin-left: 15px; margin-right:15px;"></a>
                    <a href = "https://app.joinhandshake.com/stu/users/33523214"><img class = "bioLink" src = "images/HandShake.png" style = "height: 30px;margin-left: 15px; margin-right:15px;"></a>
                </div>
            </div>
        </div>
        <div class = "teamSlot" id = "team2">
            <div class = "eventCircle" style = "margin-top: 40px; text-align: center;background-color: #F9FCFF;">
                <img src = "images/profilePictures/Hailee.jpeg" class = "profilePic">
            </div>
            <div class = "bioHolder">
                <div class = "eventTitle">Hailee Shehu</div>
                <div class = "eventDetails">Vice President</div>
                <div class = "eventDescription" style = "margin-top: 20px;">
                    I am a sophomore majoring in mechanical engineering. In addition to being a part of ASME, 
                    I am a first year mentor in the WISE honors program. In my free time I enjoy reading, 
                    listening to music, and working on computer aided design. I have experience with SOLIDWORKS, 
                    AutoCAD, and Fusion 360 that I hope to share with everyone through CAD workshops this year. 
                    In addition, I love going to amusement parks and riding various roller coasters, which inspired 
                    my choice of mechanical engineering in the first place. I hope to use my degree to become a roller 
                    coaster engineer in the future. I am thrilled to be the vice president of ASME this year and have 
                    the opportunity to help the club expand and improve. Some of my goals as vice president include 
                    increasing our membership, hosting exciting and useful events and collaborations, and providing our 
                    members with the opportunity to network and grow professionally. One of my favorite events that ASME 
                    hosts is Go Baby Go, where we modify toy ride-on vehicles so that children with cerebral palsy can use 
                    them. I look forward to a fun and productive year with ASME!
                </div>
                <div class = "container" style = "text-align:center; margin-top: 30px;">
                    <a href = "https://www.linkedin.com/in/hailee-shehu/"><img class = "bioLink" src = "images/LinkedIn.png" style = "height: 30px;margin-left: 15px; margin-right:15px;"></a>
                    <a href = "mailto:Hailee.Shehu@stonybrook.edu"><img class = "bioLink" src = "images/Gmail.png" style = "height: 30px;margin-left: 15px; margin-right:15px;"></a>
                    <a href = ""><img class = "bioLink" src = "images/HandShake.png" style = "height: 30px;margin-left: 15px; margin-right:15px;"></a>
                </div>
            </div>
        </div>
        <div class = "teamSlot" id = "team3">
            <div class = "eventCircle" style = "margin-top: 40px; text-align: center;background-color: #F9FCFF;">
                <img src = "images/profilePictures/Brooke.jpeg" class = "profilePic">
            </div>
            <div class = "bioHolder">
                <div class = "eventTitle">Brooke Demeo</div>
                <div class = "eventDetails">Treasurer</div>
                <div class = "eventDescription" style = "margin-top: 20px;">I am a sophomore studying Mechanical Engineering here at 
                    Stony Brook. I got involved in ASME my freshman year and have enjoyed the many different events that we have had. 
                    Some events that I have enjoyed are our CAD software events as well as our fun games and activities like brain 
                    teaser meetings. I hope to continue these events this year as well and hope to inspire others the same way the 
                    past leaders of this club have inspired me. In my future I have hopes of being a ride design engineer. This 
                    involves hard work and dedication to the major and my school work which I am excited to be doing here at Stony 
                    Brook. I am excited to be a part of this club because I believe it a great way to learn about Mechanical 
                    Engineering in the real world while also making connections with others in the engineering field. I am hopeful 
                    for this year as a part of ASME and I look forward to creating connections with others.
                </div>
                <div class = "container" style = "text-align:center; margin-top: 30px;">
                    <a href = "https://www.linkedin.com/in/brooke-demeo-2813b4231/"><img class = "bioLink" src = "images/LinkedIn.png" style = "height: 30px;margin-left: 15px; margin-right:15px;"></a>
                    <a href = "mailto:Brooke.Demeo@stonybrook.edu"><img class = "bioLink" src = "images/Gmail.png" style = "height: 30px;margin-left: 15px; margin-right:15px;"></a>
                    <a href = "https://app.joinhandshake.com/stu/users/33523214"><img class = "bioLink" src = "images/HandShake.png" style = "height: 30px;margin-left: 15px; margin-right:15px;"></a>
                </div>
            </div>
        </div>
        <div class = "teamSlot" id = "team4">
            <div class = "eventCircle" style = "margin-top: 40px; text-align: center;background-color: #F9FCFF;">
                <img src = "images/profilePictures/Alena.jpeg" class = "profilePic">
            </div>
            <div class = "bioHolder">
                <div class = "eventTitle">Alena Moriera</div>
                <div class = "eventDetails">Secretary</div>
                <div class = "eventDescription" style = "margin-top: 20px;">
                    Alena Moreira is a sophomore studying Mechanical Engineering with an interest in product design, 
                    having been involved in ASME since her freshman year. She is also member of WISE (Women In Science 
                    and Engineering), where she serves on their Student Leadership Council as their Head of Decorations. 
                    Outside of academics, Alena works as an Undergraduate Admissions Tour Guide and enjoys artistic 
                    activities. As a member of ASME's Eboard, she hopes to include more educational opportunities as 
                    well as creative events to members.
                </div>
                <div class = "container" style = "text-align:center; margin-top: 30px;">
                    <a href = "https://www.linkedin.com/in/alena-moreira-184715233/"><img class = "bioLink" src = "images/LinkedIn.png" style = "height: 30px;margin-left: 15px; margin-right:15px;"></a>
                    <a href = "mailto:Alena.Moreira@stonybrook.edu"><img class = "bioLink" src = "images/Gmail.png" style = "height: 30px;margin-left: 15px; margin-right:15px;"></a>
                    <a href = ""><img class = "bioLink" src = "images/HandShake.png" style = "height: 30px;margin-left: 15px; margin-right:15px;"></a>
                </div>
            </div>
        </div>
    </div>
    <div id = "footer">
        <div class = "listOfLinks">
            <a class = "footerLink" href = "contact">Contact Us</a><br>
            <a class = "footerLink" href = "events">Events</a><br>
            <a class = "footerLink" href = "alumni">Alumni</a><br>
            <a class = "footerLink" href = "team">About Us</a><br>
            <a class = "footerLink" href = "https://docs.google.com/forms/d/e/1FAIpQLSdTSWMfHugloMAjSWTWdbS20Ah_gtTusIjEhGgezn8zR-cxaw/viewform?vc=0&c=0&w=1&flr=0">Join Us</a><br>
        </div>
        <div class = "listOfLinks">
            <a class = "footerLink" href = "https://twitter.com/asme_sbu">Facebook</a><br>
            <a class = "footerLink" href = "https://www.instagram.com/sbuasme/">Instagram</a><br>
            <a class = "footerLink" href = "https://discord.com/invite/tZVmEwy6">Discord</a><br>
            <a class = "footerLink" href = "https://www.facebook.com/SBUASME/">Twitter</a><br>
            <a class = "footerLink" href = "https://stonybrook.campuslabs.com/engage/organization/asme">SB Engaged</a><br>
            <a class = "footerLink" href = "https://www.stonybrook.edu/commcms/ceas-undergrad/student_organization/asme">Stony Brook University</a><br>
        </div>
        <img src = "images/ASMENoGlobe.png" style = "height: 40px;margin-left: calc(100% - 730px);">
        <img src = "images/SBULogoWhite.png" style = "height: 50px;margin-left: calc(100% - 400px); margin-top: 60px;
        display: block; position: absolute;">
        <a style = "width:100%; position: absolute; text-align: center; font-family: 'Roboto'; font-weight: 300;
        font-size: 15px; color: #F9FCFF; margin-top: 350px">© 2022 American Society of Mechanical Engineers Stony Brook Chapter | All Rights Reserved
        </a>
    </div>
</body>