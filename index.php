<?php
session_start();
 require('connect.php');
if (isset($_POST['username']) and isset($_POST['password'])){
$username = $_POST['username'];
$password = md5($_POST['password']);
$query = "SELECT * FROM `users` WHERE username='$username' and password='$password'";
 
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);
if ($count == 1){
$_SESSION['username'] = $username;
}
$fmsg = "Invalid Login Credentials.";
}else{
}
?>
    <!DOCTYPE html>
    <html lang="en_us">

    <head>
        <title>AeronCyber - Don't trust your computer</title>
        <meta name="Date" content="08/03/2017 12:54:33">
        <meta name="Author" content="CristeaM">
        <meta name="Description" content="AeronCyber, we are a small group of people who like to help each other.">
        <meta name="keywords" content="AeronCyber,Cyber,cyber,aeron,aeroncyber,help,programming,web,steal,scam,harm,online,Online,Problems,PC,IT,Tech,tech,technology,Technology,help me,virus,wierd sound,cooldown,computer,cristeam,cristea,marian">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="google-site-verification" content="nVOxriA2ahxxTychuBIUaX3KYSCBAcCkL-ZVTOYXMHg" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://use.fontawesome.com/fc90451f73.js"></script>
        <script src='https://www.google.com/recaptcha/api.js'></script>
        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <link rel="shortcut icon" type="image/png" href="icon.ico" />
        <link rel="alternate" href="http://aeroncyber.co.nf" hreflang="en-us" />
        <link rel="alternate" href="http://www.aeroncyber.co.nf" hreflang="en-us" />
        <style>
        body {background-color:#000000;}
            /* Full-width input fields */
            
            input[type=text],
            input[type=password] {
                width: 100%;
                padding: 12px 20px;
                margin: 8px 0;
                display: inline-block;
                border: 1px solid #ccc;
                box-sizing: border-box;
            }
            /* Set a style for all buttons */
            
            button {
                background-color: #4CAF50;
                color: white;
                padding: 14px 20px;
                margin: 8px 0;
                border: none;
                cursor: pointer;
                width: 100%;
            }
            
            button:hover {
                opacity: 0.8;
            }
            /* Extra styles for the cancel button */
            
            .cancelbtn {
                width: auto;
                padding: 10px 18px;
                background-color: #f44336;
            }
            /* Center the image and position the close button */
            
            .imgcontainer {
                text-align: center;
                margin: 24px 0 12px 0;
                position: relative;
            }
            
            img.avatar {
                width: 40%;
                border-radius: 50%;
            }
            
            .container {
                padding: 16px;
            }
            
            span.psw {
                float: right;
                padding-top: 16px;
            }
            /* The Modal (background) */
            
            .modal {
                display: none;
                /* Hidden by default */
                position: fixed;
                /* Stay in place */
                z-index: 1;
                /* Sit on top */
                left: 0;
                top: 0;
                width: 100%;
                /* Full width */
                height: 100%;
                /* Full height */
                overflow: auto;
                /* Enable scroll if needed */
                background-color: rgb(0, 0, 0);
                /* Fallback color */
                background-color: rgba(0, 0, 0, 0.4);
                /* Black w/ opacity */
                padding-top: 60px;
            }
            /* Modal Content/Box */
            
            .modal-content {
                background-color: #fefefe;
                margin: 5% auto 15% auto;
                /* 5% from the top, 15% from the bottom and centered */
                border: 1px solid #888;
                width: 80%;
                /* Could be more or less, depending on screen size */
            }
            /* The Close Button (x) */
            
            .close {
                position: absolute;
                right: 25px;
                top: 0;
                color: #000;
                font-size: 35px;
                font-weight: bold;
            }
            
            .close:hover,
            .close:focus {
                color: red;
                cursor: pointer;
            }
            /* Add Zoom Animation */
            
            .animate {
                -webkit-animation: animatezoom 0.6s;
                animation: animatezoom 0.6s
            }
            
            @-webkit-keyframes animatezoom {
                from {
                    -webkit-transform: scale(0)
                }
                to {
                    -webkit-transform: scale(1)
                }
            }
            
            @keyframes animatezoom {
                from {
                    transform: scale(0)
                }
                to {
                    transform: scale(1)
                }
            }
            /* Change styles for span and cancel button on extra small screens */
            
            @media screen and (max-width: 300px) {
                span.psw {
                    display: block;
                    float: none;
                }
                .cancelbtn {
                    width: 100%;
                }
            }
            
            body {
                position: relative;
            }
            
            #section1 {
                padding-top: 55px;
                height: 650px;
                color: #fff;
                background-image: url(pic2.jpg);
            }
            
            #section2 {
                padding-top: 50px;
                height: 500px;
                color: black;
                background-color: green;
            }
            
            #section3 {
                padding-top: 50px;
                height: 500px;
                color: green;
                background-color: black;
            }
            
            #section41 {
                padding-top: 50px;
                height: 500px;
                color: black;
                background-color: green;
            }
            
            #section42 {
                padding-top: 15px;
                height: 150px;
                color: green;
                background-color: black;
            }
        </style>
    </head>

    <body data-spy="scroll" data-target=".navbar" data-offset="50">

        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
               <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
      </button>
                    <a class="navbar-brand" href="#">AeronCyber HQ</a>
                </div>
                <div>
                    <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav">
                            <li><a href="#section1"><i class="fa fa-home" aria-hidden="true"></i><strong> Home</strong></a></li>
                            <li><a href="#section2"><i class="fa fa-newspaper-o" aria-hidden="true"></i><strong> News</strong></a></li>
                            <li><a href="#section3"><i class="fa fa-briefcase" aria-hidden="true"></i><strong> Job Request</strong></a></li>
                           <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;"> <i class="fa fa-sign-in" aria-hidden="true"></i><strong> Login</strong></button>
                            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-compress" aria-hidden="true"></i><strong> About/Copyright</strong><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#section41">About/Contact</a></li>
                                    <li><a href="#section42">Copyright</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <script>
            // Get the modal
            var modal = document.getElementById('id01');

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
        </script>
        <div id="id01" class="modal">

            <form class="modal-content animate" method="POST">
                <div class="container">
                    <label><b>Username :</b></label>
                    <input type="text" placeholder="Enter Username" name="username" required>
                    <label><b>Password :</b></label>
                    <input type="password" placeholder="Enter Password" name="password" required>
                    <div class="g-recaptcha" data-sitekey="6LfbLRkUAAAAAGKVWs04O88IvWLQ-p5nUHNjDCM9"></div>
                    <button type="submit">Login</button>
                    <input type="checkbox" checked="checked"> Remember me
                </div>
                <div class="container" style="background-color:#f1f1f1">
                    <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                    <span class="psw">Not<a href="register.php">Member?</a></span>
                </div>
            </form>
        </div>
        <div id="section1" class="container-fluid">
            <h1><strong>AeronCyber Website </strong></h1>
            <h3><strong>~ Don't trust your <i class="fa fa-desktop" aria-hidden="true"></i> ~</strong></h3>
            <?PHP
            if (isset($_SESSION['username'])){
            $username = $_SESSION['username'];
            echo "Welcome Back : " . $username . "
            ";
            echo "<a href='logout.php'>Logout</a>";
            }
            ?>
        </div>
        <div id="section2" class="container-fluid">
            <h1><i class="fa fa-newspaper-o" aria-hidden="true"></i> News</h1>
            <p><strong>21/03/2017</strong> We just add a Live Chat, you can type anytime what kind of problems you have and we will figure out how to help you, test us.</p>
            <br/>
            <p><strong>21/03/2017</strong> We add some ads, we know they are so annoying but, we need a start. Our help is free but you can help us by clicking on ads.</p>
            <br/>
            <p><strong>21/03/2017</strong> We add .TK domain! Our .co.nf address it still exist but we recomend .TK, free and safe.</p>
            <br/>
            <p><strong>AeronCyber HQ</strong> Recently founded AeronCyber can make your life a bit easier. Find more info in About section.</p>
        </div>
        <div id="section3" class="container-fluid">
            <h1><i class="fa fa-briefcase" aria-hidden="true"></i> Job request</h1>
            <p>We are <strong>AeronCyber</strong><br/>We work with your future, and the future is here.<br/> We work with: Tech, Programming, Web Development or simple casual problems.
                <br/>For contact send us an E-Mail<strong> Free </strong>and we will help you.</p>
                <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-9402322677210067",
    enable_page_level_ads: true
  });
</script>
        </div>
        <div id="section41" class="container-fluid">
            <h1><i class="fa fa-compress" aria-hidden="true"></i> About / Contact</h1>
            <p>We are a small group of people who like to help each other. We are from Romania, a country with a big interest in <strong>technology, books, history, maths and programming.</strong>
                <br/>"Don't trust your computer." is our motto because this new technology can be hacked by "bad people" that try to harm you, scam you, steal your identity or Credit Cards.
                <br/>We will help you with this. Yes, you will not be a target anymore, you can be the hunter.
                <br/>Contact us and make a change <strong>now</strong>.
                <br/>Contact AeronCyber and your problems fly away.
                <br/>
                <br/>E-Mail us: <input type="button" class="btn btn-default" value="E-Mail" onclick="location.href = 'cristea.m@tuta.io';">
                <br/>
                <br/>Or find us on: <input type="button" class="btn btn-default" value="Facebook" onclick="location.href = 'https://www.facebook.com/profile.php?id=100009766338266';">        
            </p>
        </div>
        <div id="section42" class="container-fluid">
            <h1><strong>Copyright 2017-2018 AeronCyber</strong>
            <p><a rel="license" href="http://creativecommons.org/licenses/by-nc-nd/4.0/"><img alt="Creative Commons License" style="border-width:0" src="https://i.creativecommons.org/l/by-nc-nd/4.0/80x15.png" /></a></p>
            <script src="http://coinwidget.com/widget/coin.js"></script>
            </h1>
            <script>
                CoinWidgetCom.go({
                    wallet_address: '19f4oJGjD49MQiSv3hDdd82yqbBohphXJJ',
                    currency: 'bitcoin',
                    counter: 'amount',
                    lbl_button: 'Donate',
                    lbl_count: 'payments',
                    lbl_amount: 'coins',
                    lbl_address: 'Please send bitcoin tips to:',
                    qrcode: false,
                    decimals: 0,
                    onShow: function() {
                        alert('Thank you. We apreciate your decision.');
                    },
                    onHide: function() {
                        alert('Thank you for your time spend on this.');
                    }
                });
            </script>
             <a target="_blank" href="https://hitleap.com/by/mariancristea39"><img alt="Website Traffic Exchange" src="https://hitleap.com/banner.png" width="468" height="60"></a>
        </div>

    </body>
    <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/58d0ce283f21d6257c57f2ff/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
        <footer>
            <script language=javascript1.2>
                function ejs_nodroit() {
                    alert('(C) 2017 - 2018 AeronCyber all rights reserved');
                    return (false);
                }
                document.oncontextmenu = ejs_nodroit;
            </script>
        </footer>
    </html>