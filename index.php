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
    <script src = "scripts/HomePageEffects.js"></script>
    <script src = "scripts/whiteNavBar.js"></script>
    <script src = "scripts/jquery.color-2.1.2.js"></script>
    <script src = "scripts/mobileEffectsWhite.js"></script>
    <script src = "scripts/fadeInHandler.js"></script>
    <script src = "scripts/indexFadeIn.js"></script>
</head>
<?php
    include "restricted/bootlegSQL.php"
?>
<body>
    <div id = "navBar">
        <a href = "index"><img id = ASMElogo href = "index"></a>
        <a class = "navButton" href = "events">Events</a>
        <a class = "navButton" href = "team">Team</a>
        <a class = "navButton" href = "contact">Contact</a>
        <a class = "navButton" href = "alumni">Alumni</a>
        <a class = "joinButton" href = "https://docs.google.com/forms/d/e/1FAIpQLSdTSWMfHugloMAjSWTWdbS20Ah_gtTusIjEhGgezn8zR-cxaw/viewform?vc=0&c=0&w=1&flr=0" style = "margin-right: 50px; 
        background-color: white; color:#236DE2; padding-left:35px; padding-right:35px;
        padding-top:10px; padding-bottom:10px; border-radius: 15px;">Join</a>
    </div>
    <!--MOBILE HAMBURGER MENU-->
    <img id = "whiteHamburger">
    <div id = "blurFilter">
    </div>
    <div id = "mobileMenu2">
        <a class = "mobileNav2" href = "index">Home</a>
        <a class = "mobileNav2" href = "eventsMobile">Events</a>
        <a class = "mobileNav2" href = "team">Team</a>
        <a class = "mobileNav2" href = "contact">Contact</a>
        <a class = "mobileNav2" href = "alumni">Alumni</a>
        <a class = "mobileNav2" href = "https://docs.google.com/forms/d/e/1FAIpQLSdTSWMfHugloMAjSWTWdbS20Ah_gtTusIjEhGgezn8zR-cxaw/viewform?vc=0&c=0&w=1&flr=0">Join</a>
    </div>
    <!--END MOBILE HAMBURGER MENU-->
    <div id = "aboveFold">
        <div id = "openingPage"></div>
        <div id = "darkBlueStripe"></div>
        <img id = "phone">
        <a id = "BeAPart">Be A Part of What's Next.</a>
        <img id = "SBUlogo">
    </div>
    <div id = "secondHalf">
        <!--Slanted Geometric--><div style = "position: absolute;width: 2285px;height: 414px;left: -115px;top: -218.13px;
        background: linear-gradient(85.15deg, #519EE9 9.95%, #2985ED 91.88%);transform: rotate(-5.37deg);"></div>
        <div id = "container">
            <img src = "images/icon1.png" id = "missionIcon1">
            <div id = "section1">
                <a class = "sectionheader">OUR MISSION</a><br>
                <a class = "description">Long story short, we want to make sure that you (even if you're not a mechanical engineering major) grow socially and professionally. 
                    We've already fostered a community of like minded individuals, and all you have to do is show up and meet 
                    them! Engineering is a pretty tight knit community at Stony Brook University, with many of your 
                    classes being with the same group of people. Meeting them beforehand makes sure you always have someone 
                    to turn to in class, and of course, who doesn't like new friends? We also host resume workshops, 
                    internship panels, and alumni visits to make sure your professional life will be as strong as your 
                    social one. Add competitions (with prizes), projects, volunteer work, and all sorts of other hands-on engineering 
                    experience, and you've got ASME.</a>
            </div>
        </div>
        <div id = "container">
            <img id = "missionIcon2" src = "images/icon2.png">
            <div id = "section2">
                <a class = "sectionheader">WHAT WE'VE DONE SO FAR</a><br>
                <a class = "description">For over seven years, we've been hosting workshops and club collaborations to make sure 
                    that you have every opportunity you need to be successful. More than that, we use the engineering expertise of 
                    our club members to give back to the community. Take one of our most recent projects, Go Baby Go, where we modify 
                    ride-on toys for kids with cerebral palsy. We'll take you through the design process, teach you how to wire 
                    components, and at the end of the day you'll get to put a smile on the faces of children in spite of some dire 
                    circumstances. And that's only one of the many projects we have.</a>
            </div>
        </div>
        <div id = "container">
            <img src = "images/icon3.png" id = "missionIcon3">
            <div id = "section3">
                <a class = "sectionheader">HOW WE CAN HELP YOU</a><br>
                <a class = "description">It's simple: social and professional growth. All we need is a steady base of people to show up to our 
                    events and pay attention to what we do. In return, you'll get hands-on engineering experience and a large new group of 
                    friends. You'll learn everything from how we plan out large projects to the intricacies of writing code. And of course, 
                    ASME looks great on a resume.</a>
            </div>
        </div>
        <div id = "action1">
            <a style = "position: relative; font-family: 'Roboto Condensed'; font-size: 35px; color: #125EB1;">
            HAVE YOU BEEN CONVINCED? <a id = "readytoJoin" href = "https://docs.google.com/forms/d/e/1FAIpQLSdTSWMfHugloMAjSWTWdbS20Ah_gtTusIjEhGgezn8zR-cxaw/viewform?vc=0&c=0&w=1&flr=0">
                YES, I'M READY TO JOIN</a> 
            </a>
        </div>
        <div id = "container" style = "text-align:center; margin-top: 100px;">
            <a style = "position: relative; font-family: 'Roboto Condensed'; font-size: 30px; color: #125EB1;">
            CHECK US OUT ON SOCIAL MEDIA!</a>
            <br><br>
            <a href = "https://www.instagram.com/sbuasme/"><img src = "images/instaLogo.png" class = "socialLinks"></a>
            <a href = "https://twitter.com/asme_sbu"><img src = "images/twitterLogo.png" class = "socialLinks"></a>
            <a href = "https://discord.com/invite/tZVmEwy6"><img src = "images/discLogo.png" class = "socialLinks"></a>
            <a href = "https://www.facebook.com/SBUASME/"><img src = "images/faceBookLogo.png" class = "socialLinks"></a>
            <a href = "https://stonybrook.campuslabs.com/engage/organization/asme"><img src = "images/sbEngagedLogo.png" class = "socialLinks"></a>
        </div>
        <div id = "miniEvents">
            <a style = "font-size: 40px; color: #125EB1;">UPCOMING EVENTS</a>
            <div class = "eventElement" id = "event1">
                <img src = <?php echo getEventImage(1);?> class = "miniEventIcon">
                <div class = "infoBox">
                    <a class = "eventTitle"><?php echo getEventTitle(1);?></a><br>
                    <a class = "eventDetails"><?php echo getEventDay(1);?>, <?php echo getEventDate(1);?> | <?php echo getStartTime(1);?> - <?php echo getEndTime(1);?> | <?php echo getEventLocation(1);?></a><br>
                    <a class = "eventDescription"><?php echo getEventDescription(1);?></a>
                </div>
            </div>
            <div class = "eventElement" id = "event2">
                <img src = <?php echo getEventImage(2);?> class = "miniEventIcon">
                <div class = "infoBox">
                    <a class = "eventTitle"><?php echo getEventTitle(2);?></a><br>
                    <a class = "eventDetails"><?php echo getEventDay(2);?>, <?php echo getEventDate(2);?> | <?php echo getStartTime(2);?> - <?php echo getEndTime(2);?> | <?php echo getEventLocation(2);?></a><br>
                    <a class = "eventDescription"><?php echo getEventDescription(2);?></a>
                </div>
            </div>
            <div class = "eventElement" id = "event3">
                <img src = <?php echo getEventImage(3);?> class = "miniEventIcon">
                <div class = "infoBox">
                    <a class = "eventTitle"><?php echo getEventTitle(3);?></a><br>
                    <a class = "eventDetails"><?php echo getEventDay(3);?>, <?php echo getEventDate(3);?> | <?php echo getStartTime(3);?> - <?php echo getEndTime(3);?> | <?php echo getEventLocation(3);?></a><br>
                    <a class = "eventDescription"><?php echo getEventDescription(3);?></a>
                </div>
            </div>
            <div id = "container2">
                <a id = "visitEvents"
                href = "events">VISIT EVENTS PAGE</a> 
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
    </div>

</body>