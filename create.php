<?php
/**
 * Created by PhpStorm.
 * User: rdx
 * Date: 27/12/17
 * Time: 11:11 PM
 */
$name = $_GET['n'];
$img_arr = array('2.png', '3.png', '4.png', '6.png', '55.png', '77.png');
shuffle($img_arr)
?>

<html>
<script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
<script>
    var OneSignal = window.OneSignal || [];
    OneSignal.push(function() {
        OneSignal.init({
            appId: "2997e277-a05a-4d99-a943-4a6f022fbd42",
        });
    });
</script>

<head>

    <link type="text/css" rel="stylesheet" href="css/hopeing.css" media="screen,projection"/>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
    <link rel="canonical" href="http://wishyou.co.in/newyear/?n=<?=$name?>"/>
    <link href='images/icon.png' rel='icon' type='image/x-icon'/>
    <link rel="publisher" href="#"/>
    <title><?=$name?> Sent You A Special Greeting</title>
    <meta name="description" content="<?=$name?> Happy new year"/>
    <meta name="twitter:title" content="<?=$name?> Sent You A Special Greeting">
    <meta name="twitter:description" content=" <?=$name?> Happy new year ">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="#">
    <meta name="twitter:creator" content="#">
    <meta name="twitter:image" content="http://wishyou.co.in/newyear/images/new_year.gif">

    <meta property="og:title" content="<?=$name?> Sent You A Special New Year Greeting"/>
    <meta property="og:site_name" content="<?=$name?> Sent You A Special    New Year Greeting"/>
    <meta property="og:url" content="http://wishyou.co.in/newyear/?n=<?=$name?>"/>

    <meta property="og:description" content="Send Customized Greentings to your Loved one."/>
    <meta property="og:type" content="article"/>
    <meta property="og:image" content="http://wishyou.co.in/newyear/images/wa.jpg"/>
    <meta itemprop="name" content="Send Customized Greentings to your Loved one.">
    <meta itemprop="description" content=" <?=$name?> Send you Special  New Year Greeting ">
    <meta itemprop="image" content="http://wishyou.co.in/newyear/images/new_year.gif">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-58559212-4"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-58559212-4');
    </script>

    <style>
        @import url(//fonts.googleapis.com/css?family=Concert+One);

        h1 {
            animation:glow 10s ease-in-out infinite;



            /* For less laggy effect, uncomment this:

              animation:none;
              -webkit-text-stroke:1px #fff;

            =========== */

        }



        * { box-sizing:border-box; }

        body {
            background:#0a0a0a;
            overflow:hidden;
            text-align:center;
        }

        figure {
            animation:wobble 5s ease-in-out infinite;
            transform-origin:center center;
            transform-style:preserve-3d;
            font-size: 4px;
            margin: -5em 0;
            margin-bottom: 59px;
        }

        @keyframes wobble {
            0%,100%{ transform:rotate3d(1,1,0,40deg); }
            25%{ transform:rotate3d(-1,1,0,40deg); }
            50%{ transform:rotate3d(-1,-1,0,40deg); }
            75%{ transform:rotate3d(1,-1,0,40deg); }
        }

        h1 {
            display:block;
            width:100%;
            line-height:1.5;
            font:900 9em 'Concert One', sans-serif;
            text-transform:uppercase;
            position:absolute;
            color:#fff;
        }

        @keyframes glow {
            0%,100%{ text-shadow:0 0 30px red; }
            25%{ text-shadow:0 0 30px orange; }
            50%{ text-shadow:0 0 30px forestgreen; }
            75%{ text-shadow:0 0 30px cyan; }
        }

        h1:nth-child(2){ transform:translateZ(5px); }
        h1:nth-child(3){ transform:translateZ(10px);}
        h1:nth-child(4){ transform:translateZ(15px); }
        h1:nth-child(5){ transform:translateZ(20px); }
        h1:nth-child(6){ transform:translateZ(25px); }
        h1:nth-child(7){ transform:translateZ(30px); }
        h1:nth-child(8){ transform:translateZ(35px); }
        h1:nth-child(9){ transform:translateZ(40px); }
        h1:nth-child(10){ transform:translateZ(45px); }
        .card-content.white-text {
            background: #FC466B;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #3F5EFB, #667db6);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #3F5EFB, #667db6); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            background-image: url(http://wishyou.co.in/newyear/images/galax_1_compressed_1.jpg)!important;
            background-size: cover !important;
        }
        p.card-title.center-align.comic.wishesed {
        // font-family: serif;
        //font-size: 37px !important;
        }
        @media screen and (min-width: 482px){
            .mymsgr {
                display: none;
            }
        }
        @media screen and (max-width: 480px){
            .float-share a {
                width: 32% !important;
            }
        }
        @media screen and (max-width: 366px){
            img#whatsappicon {
                margin-left: 0px !important;
            }
        }
        @media screen and (max-width: 334px){
            img#whatsappicon {
                margin-left: -21px !important;
            }
            .myshareicc{
                font-size: 15px !important;
            }
        }

        .figures {
            z-index: 0 !important;
        }
    </style>
    <script language="javascript" type="text/javascript" src="js/fireworks.js"></script>
    <script>
        // Set the date we're counting down to
        var countDownDate = new Date("Jan 1, 2018 00:00:00").getTime();

        // Update the count down every 1 second
        var x = setInterval(function() {

            // Get todays date and time
            var now = new Date().getTime();

            // Find the distance between now an the count down date
            var distance = countDownDate - now;

            // Time calculations for days, hours, minutes and seconds
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Output the result in an element with id="demo"
            document.getElementById("demoo").innerHTML = days + "Days " + hours + "hr "
                + minutes + "min " + seconds + "sec ";

            // If the count down is over, write some text
            if (distance < 0) {
                clearInterval(x);
                document.getElementById("demoo").innerHTML = "";
            }
        }, 1000);
    </script>
</head>
<style type="text/css">
    <style>
        /* customizable snowflake styling */
    .snowflake {
        color: #fff;
        font-size: 1em;
        font-family: Arial;
        text-shadow: 0 0 1px #000;
    }

    @-webkit-keyframes snowflakes-fall{0%{top:-10%}100%{top:100%}}@-webkit-keyframes snowflakes-shake{0%{-webkit-transform:translateX(0px);transform:translateX(0px)}50%{-webkit-transform:translateX(80px);transform:translateX(80px)}100%{-webkit-transform:translateX(0px);transform:translateX(0px)}}@keyframes snowflakes-fall{0%{top:-10%}100%{top:100%}}@keyframes snowflakes-shake{0%{transform:translateX(0px)}50%{transform:translateX(80px)}100%{transform:translateX(0px)}}.snowflake{position:fixed;top:-10%;z-index:9999;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;cursor:default;-webkit-animation-name:snowflakes-fall,snowflakes-shake;-webkit-animation-duration:10s,3s;-webkit-animation-timing-function:linear,ease-in-out;-webkit-animation-iteration-count:infinite,infinite;-webkit-animation-play-state:running,running;animation-name:snowflakes-fall,snowflakes-shake;animation-duration:10s,3s;animation-timing-function:linear,ease-in-out;animation-iteration-count:infinite,infinite;animation-play-state:running,running}.snowflake:nth-of-type(0){left:1%;-webkit-animation-delay:0s,0s;animation-delay:0s,0s}.snowflake:nth-of-type(1){left:10%;-webkit-animation-delay:1s,1s;animation-delay:1s,1s}.snowflake:nth-of-type(2){left:20%;-webkit-animation-delay:6s,.5s;animation-delay:6s,.5s}.snowflake:nth-of-type(3){left:30%;-webkit-animation-delay:4s,2s;animation-delay:4s,2s}.snowflake:nth-of-type(4){left:40%;-webkit-animation-delay:2s,2s;animation-delay:2s,2s}.snowflake:nth-of-type(5){left:50%;-webkit-animation-delay:8s,3s;animation-delay:8s,3s}.snowflake:nth-of-type(6){left:60%;-webkit-animation-delay:6s,2s;animation-delay:6s,2s}.snowflake:nth-of-type(7){left:70%;-webkit-animation-delay:2.5s,1s;animation-delay:2.5s,1s}.snowflake:nth-of-type(8){left:80%;-webkit-animation-delay:1s,0s;animation-delay:1s,0s}.snowflake:nth-of-type(9){left:90%;-webkit-animation-delay:3s,1.5s;animation-delay:3s,1.5s}
    main {
        margin-top: 30px;
    }
</style>
<!--div class="snowflakes" aria-hidden="true">
  <div class="snowflake">
 <img src="images/star1.svg" alt="autumn leaf" style="top: 60px;">


  </div>
  <div class="snowflake">
 <img src="../img/star2.svg" alt="autumn leaf" style="top: 45px; left: 300px; animation-delay: 2s;">
  </div>
  <div class="snowflake">
 <img src="../img/star3.svg" alt="autumn leaf" style="width: 28%; top: -122px; left: 110px; animation-delay: 3.2s;">

  </div>
  <div class="snowflake">
 <img src="../img/star4.svg" alt="autumn leaf" style="width: 35%; top: -55px; left: 198px; animation-delay: 4.4s;">

  </div>
  <div class="snowflake">
  <img src="../img/star5.svg" alt="autumn leaf" style="width: 38%; top: -18px; left: 560px; animation-delay: 2.25s;">

  </div>
  <div class="snowflake">
  <img src="../img/star6.svg" alt="autumn leaf" style="width: 33%; top: 0px; left: 401px; animation-delay: 3.8s;">

  </div>
    <div class="snowflake">
 <img src="../img/star1.svg" alt="autumn leaf" style="top: -60px;">


  </div>
  <div class="snowflake">
 <img src="../img/star2.svg" alt="autumn leaf" style="top: -45px; left: 210px; animation-delay: 1.4s;">
  </div>
  <div class="snowflake">
 <img src="../img/star3.svg" alt="autumn leaf" style="width: 28%; top: 202px; left: 110px; animation-delay: 4.0s;">

  </div>
  <div class="snowflake">
 <img src="../img/star4.svg" alt="autumn leaf" style="width: 35%; top: 55px; left: 198px; animation-delay: 3.8s;">

  </div>
  <div class="snowflake">
  <img src="../img/star5.svg" alt="autumn leaf" style="width: 38%; top: -18px; left: 560px; animation-delay: 2.47s;">

  </div>
  <div class="snowflake">
  <img src="../img/star6.svg" alt="autumn leaf" style="width: 33%; top: 0px; left: 401px; animation-delay: 3.5s;">

  </div>
</div-->
</style>

<body class="bg" style=" background-image : url('http://wishyou.co.in/newyear/images/bg.gif')";>
<main>
<div class="">
    <div class="container">
      <div class="col s12">
          <div class="row">
                          <center style="margin-top: 10px;">
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- New Year Top -->
<ins class="adsbygoogle"
style="display:inline-block;width:300px;height:50px"
data-ad-client="ca-pub-9668325697566540"
data-ad-slot="7535377348"></ins>
                            <script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</center>
           <div class="col s12 l6 offset-l3">
                                            <div class="card blue-grey darken-1 hoverable">
                                                                                          <div class="card-content white-text pyro">

                                                                                                                                   <div class="before"></div>
<!--p id="animated-example" class="animated pulse card-title center-align name head"><?=$name?></p-->
                                                                                              <figure>
                                                                                              <h1><?=$name?></h1>
                                                                                                           <h1><?=$name?></h1>
                                                                                                                        <h1><?=$name?></h1>
                                                                                                                                     <h1><?=$name?></h1>
                                                                                                                                                  </figure>
                                                                                                                                                    <br>
                                                                                                                                                    <p class="card-title center-align comic wishesed center animated pulse">
                                                                                                                                                                                                                           <span class="orange-text text-lighten-1">W</span>
                                                                                                                                                                                                                                                                       <span class="green-text text-accent-4">i</span>
                                                                                                                                                                                                                                                                                                                 <span class="yellow-accent-text text-lighten-1">s</span>
                                                                                                                                                                                                                                                                                                                                                                    <span class=" teal-text text-accent-3">h</span>
                                                                                                                                                                                                                                                                                                                                                                                                              <span class="red-text text-accent-3">i</span>
                                                                                                                                                                                                                                                                                                                                                                                                                                                      <span class="lime-text">n</span>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 <span class="orange-text text-accent-3">g &nbsp;</span>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   <span class="lime-text">Y</span>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              <span class="orange-text text-lighten-1">o</span>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          <span class="lime-text text-accent-3">u</span>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   </p>

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     <p class="center">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      <p class="center">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       <div class="figures">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           <ul>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           <img  src="http://wishyou.co.in/newyear/images/cc.png" class="center swing3" width="250px" height="" alt="santa" style="margin-left: 0px; margin-top: 10px;">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               </ul>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 </div>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   <p id="demoo" class="center animated pulse" style="font-size: 20px; font-weight: bold;"></p>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             <p class="center">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              <img src="images/<?=$img_arr[0]?>" alt="snowman" style="width: 120%; margin-left: -28px; margin-bottom: 20px;" class="center swing1">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 </p>

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   </br> <link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet"> <p id="customsg" style="margin-top: -30px;">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     It's another year. May your dreams become true and may God pour love and care for you.</br>
Happy new year 2018!!!
</p></p>
      <p class="name bdaywish right">- <?=$name?></p>
                                                </br>

                                                  <div class="after"></div>

                                                                       </div>
                                                                         </div>
                                                                           </div>
                                                                             </div>
                                                                               </div>
                                                                                 </div>
                                                                                   </div>
                                                                                     </div>
                                                                                       <style>
                                                                                       footer {
                                                                                           padding: 0;
                                                                                           margin-bottom: 36px;
                                                                                       }
p.card-title.center-align.comic.wishesed {
// font-family: serif;
//font-size: 37px !important;
}

</style>

<center style="margin-top: 10px;"><script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <!-- New Year Top -->
    <ins class="adsbygoogle"
         style="display:inline-block;width:300px;height:50px"
         data-ad-client="ca-pub-9668325697566540"
         data-ad-slot="7535377348"></ins>
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
    </script></center>
<!--<div class="card-panel teal lighten-2">This is a card panel with a teal lighten-2 class</div> -->
<section id="subscribe" class="section hierarchical-timig fp-section fp-table  active" data-anchor="subscribePage" data-delay="500">
    <div class="row">
        <div class="col s12 l6 offset-l3">
            <div class="card purple darken-2 hoverable">
                <div class="card-content white-text">
                    <div class="row cretewishes">
                        <div class="col s12">
                            <div class="check-inview fadeup inview">
                                <header>
                                    <h2 class="text-center ctewish">Create Your Wishes</h2>
                                </header>
                            </div>
                        </div>
                        <div class="col m8 offset-m2 center">
                            <article class="check-inview fadeup inview">
                                <p>
                                    ENTER YOUR NAME TO WISH YOUR FRIENDS AND FAMILY MEMBERS
                                </p>
                            </article>
                        </div>
                    </div>
                    <form method="GET" action="http://wishyou.co.in/newyear/create.php">
                        <div class="row no-margin-bottom" >
                            <div class="col s12 center no-pad">
                                <p id="error-display" style="display:none;"></p>
                                <div class="input-field col l8 s8">
                                    <input type="text" required placeholder="Your Name Here" name="n" class="fa-name" id="n" onkeydown="validateAlpha();" style="color: #000000;"  required="true" maxlength="15">

                                </div>
                                <div class="input-field col s4 l4 butndiv" >
                                    <button class="btn waves-effect waves-light wishgo" onclick="create();" type="submit" >Go
                                        <img id="whatsappicon" src="images/smiley.svg" />
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class=" col s12 center bottomadd">

                        </br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>       <div style="margin: 10px;">
    <center>
        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <!-- new year bottom -->
        <ins class="adsbygoogle"
             style="display:block"
             data-ad-client="ca-pub-9668325697566540"
             data-ad-slot="7962752753"
             data-ad-format="auto"></ins>
        <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
        </script></center>
</div>
<center> <a href="https://www.facebook.com/" target="_blank"><img src="images/like.png" style="width: 200px;     margin-top: 12px;"></a>  </center>
<div class="fixed-action-btn vertical click-to-toggle" style="bottom: 45px; right: 24px;">
    <a  id="animated-example" >
        <i class="fa fa-share-alt"></i>
    </a>
    <ul>
        <li><a  href="https://plus.google.com/share?url=http://wishyou.co.in/newyear/?n=<?=$name?>" target="_blank" class="btn-floating btn-small red"><i class="fa fa-google-plus"></i></a></li>
        <li><a href="http://twitter.com/share?url=http://wishyou.co.in/newyear/?n=<?=$name?>&text= Sent You A Special Greeting " target="_blank" class="btn-floating btn-small blue darken-1"><i class="fa fa-twitter fa-1x"></i></a></li>
        <li id="animated-example" class="animated pulse"><a href="whatsapp://send?text=http://wishyou.co.in/newyear/?n=<?=$name?>" data-action="share/whatsapp/share" class="btn-floating btn-small green"><i class="fa fa-whatsapp"></i></a></li>
        <li><a href="http://www.facebook.com/sharer/sharer.php?u=http://wishyou.co.in/newyear/?n=<?=$name?>" target="_blank" class="btn-floating btn-small indigo "><i class="fa fa-facebook"></i></a></li>
    </ul>
</div>
<div class="float-share">
    <a class=" btn waves-effect waves-light green" href="whatsapp://send?text=*<?=$name?>* Sent You a Special Surprise Greeting 🎉.%0A1. Touch This Blue Line %0A2. Enter Your Name %0A👉 http://wishyou.co.in/newyear/?n=<?=$name?>" data-action="share/whatsapp/share" style="height: 43px; border-radius: 7px;">
        <div style="font-size: 17px; margin-top: 4px !important; margin-left: 13px;" class="myshareicc">Share</div>
        <img id="whatsappicon" src="images/whatsapp_icon.svg" style="float: left; margin-top: -28px; margin-left: -10px;" />
    </a>
    <a class="btn mymsgr" href="fb-messenger://share?link=http://wishyou.co.in/newyear/?n=<?=$name?>" data-action="share/whatsapp/share" style="height: 43px; border-radius: 7px;     background: #448aff;">
        <div style="font-size: 17px; margin-top: 4px !important; margin-left: 13px;" class="myshareicc">Share</div>
        <img id="whatsappicon" src="images/fbm.png" style="float: left; margin-top: -28px; margin-left: -10px;" />
    </a>
    <a href="http://www.facebook.com/sharer/sharer.php?u=http://wishyou.co.in/newyear/?n=<?=$name?>" target="_blank" class=" btn indigo " style="height: 43px; border-radius: 7px;">
        <div style="font-size: 17px; margin-top: 4px !important; margin-left: 13px;" class="myshareicc">Share</div>
        <img id="whatsappicon" src="images/fb_icon.svg" style="float: left; margin-top: -28px; margin-left: -10px;" />
    </a>
</div>
</main>
<footer class="page-footer blue-grey darken-1" >
    <div class="footer-copyright">
        <div class="container">
            Wanna wish to other?<b><a class="grey-text text-lighten-4" href="http://wishyou.co.in/newyear/" target="_blank" style="color: lightblue !important;"> Click Here</a></b>
            <a class="grey-text text-lighten-4 right" href="#" target="_blank"></a>
        </div>
    </div>
</footer>    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="js/hoped.min.js"></script>
<script>
    jQuery(document).ready(function(e) {
        jQuery('body').wpSuperSnow({
            flakes: ['images/star1.svg','images/star2.svg','images/star3.svg', 'images/star4.svg', 'images/star5.svg', 'images/star6.svg'],
            totalFlakes: '35',
            zIndex: '999999',
            maxSize: '77',
            maxDuration: '40',
            useFlakeTrans: true
        });
    });
</script>

<!-- End of StatCounter Code for Default Guide -->
<style>
    * {
        padding:0;
        margin:0;
    }

    #bizzbar{  background:#eb593c;  width:100%;  text-align:center;  color:#fff; overflow:hidden;  height:30px;  z-index:1000;  font-family:Georgia;  font-size:14px;  line-height:30px;  position:fixed;  top:0;  left:0;  border-bottom:3px solid rgb(255,255,255);  box-shadow:0 1px 5px rgba(0,0,0,.7)}

    #bizzbar button{-webkit-box-shadow:rgba(0,0,0,0.278431) 1px 1px 3px; background:#333;  border-bottom-left-radius:4px;  border-bottom-right-radius:4px;  border-top-left-radius:4px;  border-top-right-radius:4px;  border:none;  box-shadow:rgba(0,0,0,0.278431) 1px 1px 3px;  color:white;  cursor:pointer;  font-size:0.854em;  margin:0px 0px 0px 7px;  outline:none;  padding:2px 10px 1px;  position:relative;  text-decoration:initial}

    #bizzbar button:hover{  cursor:pointer;background:#444}

    #bizzbar button:active{  top:1px}

    close{  width:20px;  height:19px;  bottom:6px;  right:20px;  background:url(//hb-assets.s3.amazonaws.com/system/modules/hellobar/lib/sprite-8bit.png) no-repeat 0px -247px;  position:absolute}

    close:hover{  background:url(//hb-assets.s3.amazonaws.com/system/modules/hellobar/lib/sprite-8bit.png) no-repeat 0px -228px;  cursor:pointer;  height:19px}

    open{-webkit-box-shadow:rgba(0,0,0,0.34902) 0px 0px 5px;background-image:url(//hb-assets.s3.amazonaws.com/system/modules/hellobar/lib/sprite-8bit.png);background-position:0px -8px;background-repeat:no-repeat no-repeat;border-bottom-left-radius:5px;border-bottom-right-radius:5px;border:3px solid rgb(255,255,255);box-shadow:rgba(0,0,0,0.34902) 0px 0px 5px;display:block;height:0px;outline:none;overflow:hidden;padding:80px 0px 0px;position:absolute;right:10px;top:-50px;width:35px;z-index:100;background-color:#eb593c;display:none}

    open:hover{ background-color:#ff5a3d; cursor:pointer}
    p.bizztext {
        margin-top: -2px;
    }
    .giftbox{vertical-align:bottom;}.bottomadd{margin-top:5px;}.figures{position:relative;z-index:2;text-align:center;padding-bottom:13px;}.figures ul li{display:inline-block;margin-right:-13px;animation-name:dance;animation-duration:2s;animation-iteration-count:infinite;-webkit-transition-timing-function:cubic-bezier(0.600,0,0.735,0.045);-webkit-transition-timing-function:cubic-bezier(0.600,-0.280,0.735,0.045);-moz-transition-timing-function:cubic-bezier(0.600,-0.280,0.735,0.045);-o-transition-timing-function:cubic-bezier(0.600,-0.280,0.735,0.045);transition-timing-function:cubic-bezier(0.600,-0.280,0.735,0.045);}.figures ul li:first-child{margin-right:-22px;z-index:2;position:relative;}.figures ul li:nth-child(2){position:relative;z-index:1;}.figures ul li img{width:100px;}.figures ul li:first-child img{width:300px;}@keyframes dance{0%{-webkit-transform:rotate(10deg);-ms-transform:rotate(10deg);transform:rotate(10deg);}16.66%, 49.98%{
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           -webkit-transform: rotate(-10deg);
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           -ms-transform: rotate(-10deg);
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           transform: rotate(-10deg);
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       }
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  32.32%{
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      -webkit-transform: rotate(-5deg);
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      -ms-transform: rotate(-5deg);
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      transform: rotate(-5deg);
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  }
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  66.64%, 100%{
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      -webkit-transform: rotate(10deg);
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      -ms-transform: rotate(10deg);
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      transform: rotate(10deg);
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  }
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  83.8%{
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      -webkit-transform: rotate(5deg);
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      -ms-transform: rotate(5deg);
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      transform: rotate(5deg);
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  }
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              }

    -webkit-@keyframes dance {
                0%{
                    -webkit-transform:  rotate(10deg);
                    -ms-transform:  rotate(10deg);
                    transform:  rotate(10deg);
                }
                16.66%, 49.98%{
                    -webkit-transform: rotate(-10deg);
                    -ms-transform: rotate(-10deg);
                    transform: rotate(-10deg);
                }
                32.32%{
                    -webkit-transform: rotate(-5deg);
                    -ms-transform: rotate(-5deg);
                    transform: rotate(-5deg);
                }
                66.64%, 100%{
                    -webkit-transform: rotate(10deg);
                    -ms-transform: rotate(10deg);
                    transform: rotate(10deg);
                }
                83.8%{
                    -webkit-transform: rotate(5deg);
                    -ms-transform: rotate(5deg);
                    transform: rotate(5deg);
                }
            }

    footer {
        padding: 0;
        margin-bottom: 36px;
    }
</style>
<script>
    /*
    Bizz Bar
    */

    $(document).ready(function(){$("open").click(function(){$("#bizzbar").effect("bounce","slow");$("open").slideUp()})});$(document).ready(function(){$("#bizzbar").effect("bounce","slow");$("close").click(function(){$("#bizzbar").slideUp();$("open").slideDown()})});

</script>

<div id='bizzbar'>
    <p class='bizztext'>Create Other Wishes Like This. <a href="/" target="_blank"><button class='bizzbutton center animated pulse' style="font-size: 13px;"><span style="">Click me</span></button></a></p>

</div>
<open></open>

</body>
<style>
    body {
        margin: 0;
        padding: 0;
        background: #000;
        overflow: hidden;
    }
    .card-content.white-text {
        background: #FC466B;
        background: -webkit-linear-gradient(to right, #3F5EFB, #667db6);
        background: linear-gradient(to right, #3F5EFB, #667db6);
    }

    .pyro > .before, .pyro > .after {
        position: absolute;
        width: 5px;
        height: 5px;
        border-radius: 50%;
        box-shadow: 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff;
        -moz-animation: 1s bang ease-out infinite backwards, 1s gravity ease-in infinite backwards, 5s position linear infinite backwards;
        -webkit-animation: 1s bang ease-out infinite backwards, 1s gravity ease-in infinite backwards, 5s position linear infinite backwards;
        -o-animation: 1s bang ease-out infinite backwards, 1s gravity ease-in infinite backwards, 5s position linear infinite backwards;
        -ms-animation: 1s bang ease-out infinite backwards, 1s gravity ease-in infinite backwards, 5s position linear infinite backwards;
        animation: 1s bang ease-out infinite backwards, 1s gravity ease-in infinite backwards, 5s position linear infinite backwards;
    }

    .pyro > .after {
        -moz-animation-delay: 1.25s, 1.25s, 1.25s;
        -webkit-animation-delay: 1.25s, 1.25s, 1.25s;
        -o-animation-delay: 1.25s, 1.25s, 1.25s;
        -ms-animation-delay: 1.25s, 1.25s, 1.25s;
        animation-delay: 1.25s, 1.25s, 1.25s;
        -moz-animation-duration: 1.25s, 1.25s, 6.25s;
        -webkit-animation-duration: 1.25s, 1.25s, 6.25s;
        -o-animation-duration: 1.25s, 1.25s, 6.25s;
        -ms-animation-duration: 1.25s, 1.25s, 6.25s;
        animation-duration: 1.25s, 1.25s, 6.25s;
    }

    @-webkit-keyframes bang {
        to {
            box-shadow: -47px -312.66667px #ffb700, -103px -76.66667px #00ffb3, 104px -121.66667px #d500ff, -69px 28.33333px #ff009d, 0px -314.66667px #00a6ff, 96px -57.66667px #ffb700, -5px -405.66667px #00ff2b, 239px -286.66667px #ff5500, -233px -174.66667px #ff5100, -199px -387.66667px #00ff2b, -43px -404.66667px #ff3300, 10px -297.66667px #ff00fb, -95px -108.66667px #a600ff, 241px 1.33333px #00eaff, -122px -320.66667px #7700ff, -152px -278.66667px #00ff95, -179px -214.66667px #ff003c, -27px -290.66667px #ff00c4, 169px -101.66667px #4400ff, -144px -191.66667px #ff007b, -217px -124.66667px #84ff00, -54px -338.66667px #0062ff, -83px -348.66667px #ffe600, 77px -234.66667px #0051ff, 167px -343.66667px #ff1500, -72px -260.66667px #ee00ff, 49px -137.66667px #0059ff, -40px -4.66667px #4400ff, -77px -354.66667px #00ff51, 78px -154.66667px #0400ff, -241px -200.66667px #4800ff, -16px -340.66667px #c4ff00, -192px -122.66667px #00ff2f, 147px -389.66667px #001aff, -247px -77.66667px #00ff40, 209px 51.33333px red, -130px -209.66667px #005eff, -202px 59.33333px #00ff66, -105px -70.66667px #00ff22, -205px -378.66667px #ffbf00, -45px -262.66667px #00ff2b, -199px -64.66667px #ffe100, -47px -49.66667px #ff7700, -144px 73.33333px #ff001e, 17px -323.66667px #ae00ff, -234px -400.66667px #ff000d, 14px -308.66667px #eaff00, -63px -5.66667px #00ff0d, -61px -292.66667px #eeff00, -224px -393.66667px #002fff, 155px -196.66667px #00ff99;
        }
    }
    @-moz-keyframes bang {
        to {
            box-shadow: -47px -312.66667px #ffb700, -103px -76.66667px #00ffb3, 104px -121.66667px #d500ff, -69px 28.33333px #ff009d, 0px -314.66667px #00a6ff, 96px -57.66667px #ffb700, -5px -405.66667px #00ff2b, 239px -286.66667px #ff5500, -233px -174.66667px #ff5100, -199px -387.66667px #00ff2b, -43px -404.66667px #ff3300, 10px -297.66667px #ff00fb, -95px -108.66667px #a600ff, 241px 1.33333px #00eaff, -122px -320.66667px #7700ff, -152px -278.66667px #00ff95, -179px -214.66667px #ff003c, -27px -290.66667px #ff00c4, 169px -101.66667px #4400ff, -144px -191.66667px #ff007b, -217px -124.66667px #84ff00, -54px -338.66667px #0062ff, -83px -348.66667px #ffe600, 77px -234.66667px #0051ff, 167px -343.66667px #ff1500, -72px -260.66667px #ee00ff, 49px -137.66667px #0059ff, -40px -4.66667px #4400ff, -77px -354.66667px #00ff51, 78px -154.66667px #0400ff, -241px -200.66667px #4800ff, -16px -340.66667px #c4ff00, -192px -122.66667px #00ff2f, 147px -389.66667px #001aff, -247px -77.66667px #00ff40, 209px 51.33333px red, -130px -209.66667px #005eff, -202px 59.33333px #00ff66, -105px -70.66667px #00ff22, -205px -378.66667px #ffbf00, -45px -262.66667px #00ff2b, -199px -64.66667px #ffe100, -47px -49.66667px #ff7700, -144px 73.33333px #ff001e, 17px -323.66667px #ae00ff, -234px -400.66667px #ff000d, 14px -308.66667px #eaff00, -63px -5.66667px #00ff0d, -61px -292.66667px #eeff00, -224px -393.66667px #002fff, 155px -196.66667px #00ff99;
        }
    }
    @-o-keyframes bang {
        to {
            box-shadow: -47px -312.66667px #ffb700, -103px -76.66667px #00ffb3, 104px -121.66667px #d500ff, -69px 28.33333px #ff009d, 0px -314.66667px #00a6ff, 96px -57.66667px #ffb700, -5px -405.66667px #00ff2b, 239px -286.66667px #ff5500, -233px -174.66667px #ff5100, -199px -387.66667px #00ff2b, -43px -404.66667px #ff3300, 10px -297.66667px #ff00fb, -95px -108.66667px #a600ff, 241px 1.33333px #00eaff, -122px -320.66667px #7700ff, -152px -278.66667px #00ff95, -179px -214.66667px #ff003c, -27px -290.66667px #ff00c4, 169px -101.66667px #4400ff, -144px -191.66667px #ff007b, -217px -124.66667px #84ff00, -54px -338.66667px #0062ff, -83px -348.66667px #ffe600, 77px -234.66667px #0051ff, 167px -343.66667px #ff1500, -72px -260.66667px #ee00ff, 49px -137.66667px #0059ff, -40px -4.66667px #4400ff, -77px -354.66667px #00ff51, 78px -154.66667px #0400ff, -241px -200.66667px #4800ff, -16px -340.66667px #c4ff00, -192px -122.66667px #00ff2f, 147px -389.66667px #001aff, -247px -77.66667px #00ff40, 209px 51.33333px red, -130px -209.66667px #005eff, -202px 59.33333px #00ff66, -105px -70.66667px #00ff22, -205px -378.66667px #ffbf00, -45px -262.66667px #00ff2b, -199px -64.66667px #ffe100, -47px -49.66667px #ff7700, -144px 73.33333px #ff001e, 17px -323.66667px #ae00ff, -234px -400.66667px #ff000d, 14px -308.66667px #eaff00, -63px -5.66667px #00ff0d, -61px -292.66667px #eeff00, -224px -393.66667px #002fff, 155px -196.66667px #00ff99;
        }
    }
    @-ms-keyframes bang {
        to {
            box-shadow: -47px -312.66667px #ffb700, -103px -76.66667px #00ffb3, 104px -121.66667px #d500ff, -69px 28.33333px #ff009d, 0px -314.66667px #00a6ff, 96px -57.66667px #ffb700, -5px -405.66667px #00ff2b, 239px -286.66667px #ff5500, -233px -174.66667px #ff5100, -199px -387.66667px #00ff2b, -43px -404.66667px #ff3300, 10px -297.66667px #ff00fb, -95px -108.66667px #a600ff, 241px 1.33333px #00eaff, -122px -320.66667px #7700ff, -152px -278.66667px #00ff95, -179px -214.66667px #ff003c, -27px -290.66667px #ff00c4, 169px -101.66667px #4400ff, -144px -191.66667px #ff007b, -217px -124.66667px #84ff00, -54px -338.66667px #0062ff, -83px -348.66667px #ffe600, 77px -234.66667px #0051ff, 167px -343.66667px #ff1500, -72px -260.66667px #ee00ff, 49px -137.66667px #0059ff, -40px -4.66667px #4400ff, -77px -354.66667px #00ff51, 78px -154.66667px #0400ff, -241px -200.66667px #4800ff, -16px -340.66667px #c4ff00, -192px -122.66667px #00ff2f, 147px -389.66667px #001aff, -247px -77.66667px #00ff40, 209px 51.33333px red, -130px -209.66667px #005eff, -202px 59.33333px #00ff66, -105px -70.66667px #00ff22, -205px -378.66667px #ffbf00, -45px -262.66667px #00ff2b, -199px -64.66667px #ffe100, -47px -49.66667px #ff7700, -144px 73.33333px #ff001e, 17px -323.66667px #ae00ff, -234px -400.66667px #ff000d, 14px -308.66667px #eaff00, -63px -5.66667px #00ff0d, -61px -292.66667px #eeff00, -224px -393.66667px #002fff, 155px -196.66667px #00ff99;
        }
    }
    @keyframes bang {
        to {
            box-shadow: -47px -312.66667px #ffb700, -103px -76.66667px #00ffb3, 104px -121.66667px #d500ff, -69px 28.33333px #ff009d, 0px -314.66667px #00a6ff, 96px -57.66667px #ffb700, -5px -405.66667px #00ff2b, 239px -286.66667px #ff5500, -233px -174.66667px #ff5100, -199px -387.66667px #00ff2b, -43px -404.66667px #ff3300, 10px -297.66667px #ff00fb, -95px -108.66667px #a600ff, 241px 1.33333px #00eaff, -122px -320.66667px #7700ff, -152px -278.66667px #00ff95, -179px -214.66667px #ff003c, -27px -290.66667px #ff00c4, 169px -101.66667px #4400ff, -144px -191.66667px #ff007b, -217px -124.66667px #84ff00, -54px -338.66667px #0062ff, -83px -348.66667px #ffe600, 77px -234.66667px #0051ff, 167px -343.66667px #ff1500, -72px -260.66667px #ee00ff, 49px -137.66667px #0059ff, -40px -4.66667px #4400ff, -77px -354.66667px #00ff51, 78px -154.66667px #0400ff, -241px -200.66667px #4800ff, -16px -340.66667px #c4ff00, -192px -122.66667px #00ff2f, 147px -389.66667px #001aff, -247px -77.66667px #00ff40, 209px 51.33333px red, -130px -209.66667px #005eff, -202px 59.33333px #00ff66, -105px -70.66667px #00ff22, -205px -378.66667px #ffbf00, -45px -262.66667px #00ff2b, -199px -64.66667px #ffe100, -47px -49.66667px #ff7700, -144px 73.33333px #ff001e, 17px -323.66667px #ae00ff, -234px -400.66667px #ff000d, 14px -308.66667px #eaff00, -63px -5.66667px #00ff0d, -61px -292.66667px #eeff00, -224px -393.66667px #002fff, 155px -196.66667px #00ff99;
        }
    }
    @-webkit-keyframes gravity {
        to {
            transform: translateY(200px);
            -moz-transform: translateY(200px);
            -webkit-transform: translateY(200px);
            -o-transform: translateY(200px);
            -ms-transform: translateY(200px);
            opacity: 0;
        }
    }
    @-moz-keyframes gravity {
        to {
            transform: translateY(200px);
            -moz-transform: translateY(200px);
            -webkit-transform: translateY(200px);
            -o-transform: translateY(200px);
            -ms-transform: translateY(200px);
            opacity: 0;
        }
    }
    @-o-keyframes gravity {
        to {
            transform: translateY(200px);
            -moz-transform: translateY(200px);
            -webkit-transform: translateY(200px);
            -o-transform: translateY(200px);
            -ms-transform: translateY(200px);
            opacity: 0;
        }
    }
    @-ms-keyframes gravity {
        to {
            transform: translateY(200px);
            -moz-transform: translateY(200px);
            -webkit-transform: translateY(200px);
            -o-transform: translateY(200px);
            -ms-transform: translateY(200px);
            opacity: 0;
        }
    }
    @keyframes gravity {
        to {
            transform: translateY(200px);
            -moz-transform: translateY(200px);
            -webkit-transform: translateY(200px);
            -o-transform: translateY(200px);
            -ms-transform: translateY(200px);
            opacity: 0;
        }
    }
    @-webkit-keyframes position {
        0%, 19.9% {
            margin-top: 10%;
            margin-left: 40%;
        }
        20%, 39.9% {
            margin-top: 40%;
            margin-left: 30%;
        }
        40%, 59.9% {
            margin-top: 20%;
            margin-left: 70%;
        }
        60%, 79.9% {
            margin-top: 30%;
            margin-left: 20%;
        }
        80%, 99.9% {
            margin-top: 30%;
            margin-left: 80%;
        }
    }
    @-moz-keyframes position {
        0%, 19.9% {
            margin-top: 10%;
            margin-left: 40%;
        }
        20%, 39.9% {
            margin-top: 40%;
            margin-left: 30%;
        }
        40%, 59.9% {
            margin-top: 20%;
            margin-left: 70%;
        }
        60%, 79.9% {
            margin-top: 30%;
            margin-left: 20%;
        }
        80%, 99.9% {
            margin-top: 30%;
            margin-left: 80%;
        }
    }
    @-o-keyframes position {
        0%, 19.9% {
            margin-top: 10%;
            margin-left: 40%;
        }
        20%, 39.9% {
            margin-top: 40%;
            margin-left: 30%;
        }
        40%, 59.9% {
            margin-top: 20%;
            margin-left: 70%;
        }
        60%, 79.9% {
            margin-top: 30%;
            margin-left: 20%;
        }
        80%, 99.9% {
            margin-top: 30%;
            margin-left: 80%;
        }
    }
    @-ms-keyframes position {
        0%, 19.9% {
            margin-top: 10%;
            margin-left: 40%;
        }
        20%, 39.9% {
            margin-top: 40%;
            margin-left: 30%;
        }
        40%, 59.9% {
            margin-top: 20%;
            margin-left: 70%;
        }
        60%, 79.9% {
            margin-top: 30%;
            margin-left: 20%;
        }
        80%, 99.9% {
            margin-top: 30%;
            margin-left: 80%;
        }
    }
    @keyframes position {
        0%, 19.9% {
            margin-top: 10%;
            margin-left: 40%;
        }
        20%, 39.9% {
            margin-top: 40%;
            margin-left: 30%;
        }
        40%, 59.9% {
            margin-top: 20%;
            margin-left: 70%;
        }
        60%, 79.9% {
            margin-top: 30%;
            margin-left: 20%;
        }
        80%, 99.9% {
            margin-top: 30%;
            margin-left: 80%;
        }
    }

</style>
</html>
