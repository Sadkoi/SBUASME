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
    <script src = "scripts/whiteNavBar.js"></script>
    <script src = "scripts/jquery.color-2.1.2.js"></script>
    <script src = "scripts/alumniEffects.js"></script>
    <script src = "scripts/mobileEffectsWhite.js"></script>
</head>
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
        <img id = "wolfie">
        <a id = "LargeFoldFont">Want to Talk?</a>
        <a id = "miniFoldFont2">
            We're ready to listen. Reach out to us at sbuasme@gmail.com, or by filling out the form below.
        </a>
    </div>
    <div id = "secondHalf" style = "padding-top:300px;min-height: 0px;">
        <!--Slanted Geometric--><div style = "position: absolute;width: 2285px;height: 414px;left: -115px;top: -218.13px;
        background: linear-gradient(85.15deg, #519EE9 9.95%, #2985ED 91.88%);transform: rotate(-5.37deg);">
    </div>
    <div style = "display: flex; margin-bottom: 30px;">
        <form class = "formHolder" action = "ContactFormHandler.php" method = "get">
            <div style = "width: 50%;height: 100px;text-align: center;">
                <input type = "text" name = "fname" class = "HalfInputs" placeholder="First Name">
            </div>
            <div style = "width: 50%;height: 100px;text-align: center;">
                <input type = "text" name = "lname" class = "HalfInputs" placeholder="Last Name">
            </div>
            <div style = "width: 100%; height: 100px;text-align: center;">
                <input type = "text" name = "email" class = "FullInputs" placeholder="Email Address">
            </div>
            <div style = "width: 100%; height: 100px;text-align: center;">
                <textarea type = "text" name = "mess" class = "Message" 
                placeholder="Ask a question, leave a comment, or just say hi!"></textarea>
            </div>
            <div style = "width: 100%; height: 100px;text-align: right;">
                <input class = "SubmitButton" href = "index" style = "top: 620px;" type = "submit" value = "SUBMIT"></input>
            </div>
        </form>
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