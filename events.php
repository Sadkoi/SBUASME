<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>American Society Of Mechanical Engineers | Stony Brook University</title>
    <meta name ="viewport" content="width=device-width">
    <link rel= "stylesheet" href = "style.css">
    <!--Google Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel = "icon" href = "images/titleIcon.png">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&family=Roboto:wght@300&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!--My scripts-->
    <script src = "scripts/jquery.color-2.1.2.js"></script>
    <script src = "scripts/eventsPageEffects.js"></script>
    <script src = "scripts/fadeInHandler.js"></script>
</head>
<script>
    $(document).ready(function(){
        var href = window.location.href.split("/")
        var html_location = href[href.length-1]

        if (window.innerWidth > 950 && html_location !== "events") {
            window.location = "events";
        }

        if (window.innerWidth <= 950 && html_location !== "eventsMobile") {
            window.location = "eventsMobile";
        }

        window.onresize = responsiveDisp;
        function responsiveDisp(){
            if (window.innerWidth < 950 && html_location !== "eventsMobile") {
                window.location = "eventsMobile";
            }else{
                if(window.innerWidth >= 950 && html_location !== "events")
                window.location = "events";
            }
        }
    });
</script>
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
<?php
    include "restricted/bootlegSQL.php"
?>
<body>
    <div id = "navBar">
        <a href = "index"><img id = ASMElogo style = "content: url(images/ASMENoGlobeBlue.png);"></a>
        <a class = "navButton" href = "events" style = "color: #236DE2;">Events</a>
        <a class = "navButton" href = "team" style = "color: #236DE2;">Team</a>
        <a class = "navButton" href = "contact" style = "color: #236DE2;">Contact</a>
        <a class = "navButton" href = "alumni" style = "color: #236DE2;">Alumni</a>
        <a class = "joinButton" href = "https://docs.google.com/forms/d/e/1FAIpQLSdTSWMfHugloMAjSWTWdbS20Ah_gtTusIjEhGgezn8zR-cxaw/viewform?vc=0&c=0&w=1&flr=0" style = "margin-right: 50px; 
        background-color: #236DE2; color:white; padding-left:35px; padding-right:35px;
        padding-top:10px; padding-bottom:10px; border-radius: 15px;border: 2px solid #236DE2;">Join</a>
    </div>
    <!--Beginning Part-->
    <div style = "margin-bottom: 30px;">
        <img src = "images/eventsSlide.png" style = "width: 100vw;">
    </div>
    <div id = "miniEvents" style="padding-left: 100px;">
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
    </div>
    <div id = "container" style = "text-align:center;margin-top: 0px;">
        <a style = "position: relative; font-family: 'Roboto Condensed'; font-size: 35px; color: #125EB1;display: block;">
            CAN'T FIND WHAT YOU'RE LOOKING FOR?
        </a>
        <div style = "height: 15px;width: 100%;"></div>
        <a style = "position: relative; font-family: 'Roboto Condensed'; font-size: 20px; color: #125EB1;line-height: 35px;display: block;">
            ASME hosts events year round, so even if the events above don't pique your interest, we're bound to have something you'll find enjoyable.<br>
            Scroll down to see the types of events we host and attend.
        </a>
    </div>
    <!---->
    <div id = "possibleEvents1">
        <div class = "eventSlot">
            <div class = "eventCircle">
                <img src = "images/EventIcons/boat.png" class = "eventIcon">
            </div>
            <a class = "potentialTitle">Roth Regatta</a>
            <a class = "potentialCaption">Once a year, a bunch of teams try to cross Roth Pond in a custom built boat. They usually fail.</a>
        </div>
        <div class = "eventSlot">
            <div class = "eventCircle">
                <img src = "images/EventIcons/wheel.png" class = "eventIcon">
            </div>
            <a class = "potentialTitle">Go Baby Go</a>
            <a class = "potentialCaption">Who said kids with Cerebral Palsy can't drive? Not us.</a>
        </div>
        <div class = "eventSlot">
            <div class = "eventCircle">
                <img src = "images/EventIcons/openBook.png" class = "eventIcon">
            </div>
            <a class = "potentialTitle">Study Session</a>
            <a class = "potentialCaption">Remember, at Stony Brook University, every week is midterm week.</a>
        </div>
        <div class = "eventSlot">
            <div class = "eventCircle">
                <img src = "images/EventIcons/CAD.png" class = "eventIcon">
            </div>
            <a class = "potentialTitle">CAD Workshop</a>
            <a class = "potentialCaption">Let's make sure you're actually hirable.</a>
        </div>
    </div>
    <div id = "possibleEvents2">
        <div class = "eventSlot">
            <div class = "eventCircle">
                <img src = "images/EventIcons/Terminal.png" class = "eventIcon">
            </div>
            <a class = "potentialTitle">CS Workshop</a>
            <a class = "potentialCaption">Show those pesky CS majors their job isn't <i>that</i> hard.</a>
        </div>
        <div class = "eventSlot">
            <div class = "eventCircle">
                <img src = "images/EventIcons/Dice.png" class = "eventIcon">
            </div>
            <a class = "potentialTitle">Board Game Night</a>
            <a class = "potentialCaption">Take a (short) break.</a>
        </div>
        <div class = "eventSlot">
            <div class = "eventCircle">
                <img src = "images/EventIcons/PowerPlant.png" class = "eventIcon">
            </div>
            <a class = "potentialTitle">Power Plant Tour</a>
            <a class = "potentialCaption">Take a look at why your lights turn on every morning.</a>
        </div>
        <div class = "eventSlot">
            <div class = "eventCircle">
                <img src = "images/EventIcons/Human.png" class = "eventIcon">
            </div>
            <a class = "potentialTitle">Speed Networking</a>
            <a class = "potentialCaption">Go make some friends.</a>
        </div>
    </div>
    <div id = "possibleEvents3" style = "margin-bottom: 100px;">
        <div class = "eventSlot">
            <div class = "eventCircle">
                <img src = "images/EventIcons/Pencil.png" class = "eventIcon">
            </div>
            <a class = "potentialTitle">General Body Meeting</a>
            <a class = "potentialCaption">Get caught up on everything ASME.</a>
        </div>
        <div class = "eventSlot">
            <div class = "eventCircle">
                <img src = "images/EventIcons/Resume.png" class = "eventIcon">
            </div>
            <a class = "potentialTitle">Resume Workshop</a>
            <a class = "potentialCaption">Yours needs work and you know it.</a>
        </div>
        <div class = "eventSlot">
            <div class = "eventCircle">
                <img src = "images/EventIcons/Suitcase.png" class = "eventIcon">
            </div>
            <a class = "potentialTitle">Internship Panel</a>
            <a class = "potentialCaption">If you had one already, you wouldn't be here.</a>
        </div>
        <div class = "eventSlot">
            <div class = "eventCircle">
                <img src = "images/EventIcons/DollarSign.png" class = "eventIcon">
            </div>
            <a class = "potentialTitle">Fundraiser</a>
            <a class = "potentialCaption">Give back to the community.</a>
        </div>
    </div>
    <div id = "container" style = "text-align:center;margin-top: 20px;margin-bottom: 100px;">
        <a style = "position: relative; font-family: 'Roboto Condensed'; font-size: 35px; color: #125EB1;">
        FOUND SOMETHING YOU LIKE? <a id = "joinMailingList"
        href = "https://docs.google.com/forms/d/e/1FAIpQLSdTSWMfHugloMAjSWTWdbS20Ah_gtTusIjEhGgezn8zR-cxaw/viewform?vc=0&c=0&w=1&flr=0">JOIN OUR MAILING LIST</a> 
        </a>
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