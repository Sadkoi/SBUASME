<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>American Society Of Mechanical Engineers | Stony Brook University</title>
    <meta name ="viewport" content="width=device-width">
    <link rel = "icon" href = "images/titleIcon.png">
    <link rel= "stylesheet" href = "styleMobile.css">
    <!--Google Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&family=Roboto:wght@300&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="scripts/mobileEffects.js"></script>
    <!--<script src = "scripts/EventsPageEffects.js"></script>-->
</head>
<script>
    $(document).ready(function(){
        var href = window.location.href.split("/")
        var html_location = href[href.length-1]

        if (window.innerWidth >= 900 && html_location !== "events") {
            window.location = "events";
        }

        if (window.innerWidth < 900 && html_location !== "eventsMobile") {
            window.location = "eventsMobile";
        }

        window.onresize = responsiveDisp;
        function responsiveDisp(){
            if (window.innerWidth <= 900 && html_location !== "eventsMobile") {
                window.location = "eventsMobile";
            }else{
                if(window.innerWidth > 900 && html_location !== "events")
                window.location = "events";
            }
        }
    });
</script>
<?php include "restricted/bootlegSQL.php" ?>
<body>
    <div id = "navBar">
        <a href = "index.php"><img id = ASMElogo style = "content: url(images/ASMENoGlobeBlue.png);"></a>
    </div>
    
    <div style = "margin-bottom: 30px;">
        <img src = "images/eventsSlide.png" style = "width: 100vw;">
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
    <div id = "miniEvents">
        <a style = "font-size: 35px; color: #125EB1;">UPCOMING EVENTS</a>
        <div class = "eventElement">
            <img src = <?php echo getEventImage(1);?> class = "miniEventIcon">
            <div class = "infoBox">
                <a class = "eventTitle"><?php echo getEventTitle(1);?></a><br>
                <a class = "eventDetails"><?php echo getEventDay(1);?>, <?php echo getEventDate(1);?> <br> <?php echo getStartTime(1);?> - <?php echo getEndTime(1);?> <br> <?php echo getEventLocation(1);?></a><br>
                <a class = "eventDescription"><?php echo getEventDescription(1);?></a>
            </div>
        </div>
        <div class = "eventElement">
            <img src = <?php echo getEventImage(2);?> class = "miniEventIcon">
            <div class = "infoBox">
                <a class = "eventTitle"><?php echo getEventTitle(2);?></a><br>
                <a class = "eventDetails"><?php echo getEventDay(2);?>, <?php echo getEventDate(2);?> <br> <?php echo getStartTime(2);?> - <?php echo getEndTime(2);?> <br> <?php echo getEventLocation(2);?></a><br>
                <a class = "eventDescription"><?php echo getEventDescription(2);?></a>
            </div>
        </div>
        <div class = "eventElement">
            <img src = <?php echo getEventImage(3);?> class = "miniEventIcon">
            <div class = "infoBox">
                <a class = "eventTitle"><?php echo getEventTitle(3);?></a><br>
                <a class = "eventDetails"><?php echo getEventDay(3);?>, <?php echo getEventDate(3);?> <br> <?php echo getStartTime(3);?> - <?php echo getEndTime(3);?> <br> <?php echo getEventLocation(3);?></a><br>
                <a class = "eventDescription"><?php echo getEventDescription(3);?></a>
            </div>
        </div>
    </div>
    <div id = "explanation">
        <a style = "font-size: 30px; color: #125EB1;">CAN'T FIND WHAT YOU'RE LOOKING FOR?</a>
        <a style = "position: relative; font-family: 'Roboto Condensed'; font-size: 18px; color: 
        #125EB1;line-height: 28px;display: block;margin-top:20px;">
            ASME hosts events year round, so even if the events above don't pique your interest, 
            we're bound to have something you'll find enjoyable.
            Scroll down to see the types of events we host and attend.
        </a>
    </div>
    <div id = "possibleEvents">
        <div class = "eventSlot">
            <div class = "eventCircle">
                <img src = "images/EventIcons/boat.png" class = "eventIcon">
            </div>
            <a class = "potentialTitle">Roth Regatta</a>
            <a class = "potentialCaption">Once a year, a bunch of teams try to cross Roth 
                Pond in a custom built boat. They usually fail.</a>
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
    <div id = "possibleEvents">
        <a style = "font-size: 35px; color: #125EB1;">FOUND SOMETHING YOU LIKE?</a>
        <a style = "position: relative; font-family: 'Roboto Condensed'; font-size: 30px; color: #F9FCFF;
        padding-left:30px; padding-right: 30px; padding-top: 10px; padding-bottom: 10px; margin-left: 10px;
        background-image:linear-gradient(85.15deg, #11DBE8 9.95%, #2EADF4 91.88%); margin-bottom: 30px; 
        margin-top: 20px; border-radius: 20px; text-decoration: none;display:inline-block"
        href = "https://docs.google.com/forms/d/e/1FAIpQLSdTSWMfHugloMAjSWTWdbS20Ah_gtTusIjEhGgezn8zR-cxaw/viewform?vc=0&c=0&w=1&flr=0">JOIN OUR MAILING LIST</a> 
    </div>
    
</body>