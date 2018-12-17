<?php
    ob_start();
    session_start();
    include("sendUser.php");
?>
    Inloggad


    <?php
    ob_start();
    session_start();
    include("connect.php");
?>
        <!DOCTYPE html>
        <html>

        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
            <title></title>
            <meta name="description" content="">
            <meta name="viewport" content="width=device-width">
        </head>

        <body>

            <?php
            if(isset($_POST["login"])){
                require_once 'clean.class.php';
                $u = new clean($_POST["username"]);
                $p = $_POST["password"];
                
                $query = mysqli_query($con,"SELECT password,username FROM users WHERE username='$u'");

                $result = mysqli_fetch_array($query);
                
                if(PASSWORD_VERIFY($p,$result["password"])){
                    
                    $_SESSION["user"] = $result["username"];
                    header("location:dashboard.php");
                }else{
                    echo 'nope!';
                }
                
            }
        ?>

                <form method="post">
                    <input type="text" name="username" placeholder="Username"><br />
                    <input type="password" name="password" placeholder="Password"><br />
                    <input type="submit" name="login">
                </form>

        </body>

        </html>


        <!DOCTYPE html>
        <html lang="en-US" prefix="og: http://ogp.me/ns#">

        <head>
            <!-- Global site tag (gtag.js) - Google Analytics -->
            <script async src="https://www.googletagmanager.com/gtag/js?id=UA-126323180-1"></script>
            <script>
                window.dataLayer = window.dataLayer || [];

                function gtag() {
                    dataLayer.push(arguments);
                }
                gtag('js', new Date());

                gtag('config', 'UA-126323180-1');

            </script>


            <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
            <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
            <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
            <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
            <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
            <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
            <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
            <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
            <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
            <link rel="icon" type="image/png" sizes="192x192" href="/android-icon-192x192.png">
            <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
            <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
            <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
            <link rel="manifest" href="/manifest.json">
            <meta name="msapplication-TileColor" content="#ffffff">
            <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
            <meta name="theme-color" content="#ffffff">


            <!-- fiveiconplaceholder -->
            <link rel='mask-icon' href='j12mask.svg' color='red'>
            <meta charset="UTF-8" />
            <meta name="description" content="J12 Ventures is a Stockholm based Venture Capital firm and Angel network investing early in tech companies." />
            <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
            <meta http-equiv="X-UA-Compatible" content="IE=edge">

            <!--
    Social tags taken from Facebook guidelines:
    https://developers.facebook.com/docs/sharing/best-practices
    -->
            <meta property="og:title" content="J12 Ventures" />
            <meta property="og:site_name" content="J12 Ventures" />
            <meta property="og:description" content="J12 Ventures is a Stockholm based Venture Capital firm and Angel network investing early in tech companies." />
            <meta property="og:url" content="http://j12ventures.com/" />



            <script src="https://use.typekit.net/air2wsj.js"></script>
            <script>
                try {
                    Typekit.load({
                        async: true
                    });
                } catch (e) {}

            </script>



            <title>J12 Ventures</title>

            <!-- This site is optimized with the Yoast SEO plugin v4.5 - https://yoast.com/wordpress/plugins/seo/ -->
            <link rel="canonical" href="http://j12ventures.com/" />
            <meta property="og:locale" content="en_US" />
            <meta property="og:type" content="website" />
            <meta property="og:title" content="Home - J12 Ventures" />
            <meta property="og:url" content="http://j12ventures.com/" />
            <meta property="og:site_name" content="J12 Ventures" />
            <meta name="twitter:card" content="summary" />
            <meta name="twitter:title" content="Home - J12 Ventures" />


            <link rel='dns-prefetch' href='//s.w.org' />
            <link rel='stylesheet' id='fuzzco_main-css' href='css/style.min.css' type='text/css' media='all' />
            <!-- <script src="js/modernizr.min.js"></script> -->


            <!--
    <script>
        eval(mod_pagespeed_klICuhY9Zp);
    </script>

    <script>
        eval(mod_pagespeed_Wc_5R6kBlJ);
    </script>
    -->

            <script type='text/javascript' src='js/jquery.min.js'></script>
            <script type='text/javascript' src='js/jquery-migrate.min.js'></script>



        </head>

        <body class="home page-template-default page page-id-18" id="page-home">
            <div class="full-nav">
                <div class="full-nav-container" style="background-color:red;">
                    <ul id="menu-mobile-menu" class="full-nav-list">
                        <li id="menu-item-156" class="menu-item">
                            <a class="customROD active-red-menu" href="index.php">Home</a>
                        </li>
                        <li id="menu-item-151" class="menu-item">
                            <a href="dhsfund.php">DHS Fund</a>
                        </li>
                        <li id="menu-item-156" class="menu-item">
                            <a class="customROD" href="personal-inv.php">Personal Investments</a>
                        </li>


                    </ul>
                </div>
            </div>

            <header id="main-header" style="background-color: #20124dff;">
                <div class="container">
                    <a href="index.php" class="logo"><img src="images/j12logo.png" alt="J12 Ventures"></a>
                    <nav id="main-menu" role="navigation">
                        <ul id="menu-main-menu" class="no-style horizontal-list">
                            <li id="menu-item-151" class="menu-item active" style>
                                <a href="dhsfund.php">DHS Fund</a>
                            </li>
                            <li id="menu-item-151" class="menu-item" style>
                                <a href="personal-inv.php">Personal investments</a>
                            </li>
                            <li><a class="hover-effects nav-toggle" href="#"><span></span></a></li>
                        </ul>
                    </nav>

                </div>

            </header>
            <div class="toggle--mobile-menu">
                <a class="hover-effects nav-toggle" href="#"><span></span></a>
            </div>

            <main>
                <center>
                <table style="">

                    <tr>
                        <td>
                            <iframe width="671" height="402" frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQt3_T0yOet-JZ081oJq1Q6zz0E9x0yTaGLhS2jGPzPUfhx7cyHLZlKNgLpY0FDytwizNUvVO5Sprpb/pubchart?oid=1220092316&amp;format=interactive"></iframe>
                        </td>
                        <td>
                            <iframe width="671" height="402" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQt3_T0yOet-JZ081oJq1Q6zz0E9x0yTaGLhS2jGPzPUfhx7cyHLZlKNgLpY0FDytwizNUvVO5Sprpb/pubchart?oid=446283595&amp;format=interactive"></iframe>
                        </td>
                    </tr>
                    <tr>
                        <td>

                            <iframe width="671" height="402" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQt3_T0yOet-JZ081oJq1Q6zz0E9x0yTaGLhS2jGPzPUfhx7cyHLZlKNgLpY0FDytwizNUvVO5Sprpb/pubchart?oid=922346369&amp;format=interactive"></iframe>
                        </td>
                        <td>
                            <iframe width="671" height="402" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQt3_T0yOet-JZ081oJq1Q6zz0E9x0yTaGLhS2jGPzPUfhx7cyHLZlKNgLpY0FDytwizNUvVO5Sprpb/pubchart?oid=922346369&amp;format=interactive"></iframe>
                        </td>

                    </tr>
                </table>
                </center>

            </main>
            <footer>
                <div class="container">
                    <div class="footer-nav row">

                        <a href="privacypolicy.php">
                            <p class="footerbutton"><strong>Privacy Policy</strong></p>
                        </a>


                        <div class="disclaimertext">
                            <p style="font-size:10px;" class="copyright hide-mobile">&copy;J12 Ventures AB (and affiliated entities), DHS Venture Partners AB and Angel Partners are separate legal persons. Each retain the right to make their own independent investment decisions without any binding legal effects for the other parties or further obligating any of the parties towards any third party entities unless otherwise explicitly agreed upon.</p>
                        </div>
                        <ul class="footer-links">
                            <li class="follow-us-link block-link">Get connected</li>
                            <li>
                                <a href="music.php" class="icon" title="J12's playlists">
                          <img src="images/Spotify-icon-white.png" class="social-icon"
                               onmouseover="this.src='images/Spotify-icon-color.png';"
                               onmouseout="this.src='images/Spotify-icon-white.png';">
                        </a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/company/j12-ventures-ab/" class="icon" target="_blank" title="Find on Linkedin">
                          <img src="images/LinkedIn-icon-white.png" class="social-icon"
                               onmouseover="this.src='images/LinkedIn-icon-color.png';"
                               onmouseout="this.src='images/LinkedIn-icon-white.png';">
                        </a>
                            </li>
                            <li>
                                <a href="https://medium.com/j12ventures" class="icon" target="_blank" title="Follow on Medium">
                          <img src="images/Medium-icon-white.png" class="social-icon"
                               onmouseover="this.src='images/Medium-icon-color.png';"
                               onmouseout="this.src='images/Medium-icon-white.png';">
                        </a>
                            </li>
                        </ul>
                        <p style="font-size:11px;" class="copyright show-mobile">&copy;J12 Ventures AB (and affiliated entities), DHS Venture Partners AB and Angel Partners are separate legal persons. Each retain the right to make their own independent investment decisions without any binding legal effects for the other parties or further obligating any of the parties towards any third party entities unless otherwise explicitly agreed upon.</p>
                    </div>
                </div>
            </footer>




            <script type="text/javascript">


            </script>
            <script type='text/javascript' src='wordpressfile.js'></script>

            <!-- Google Analytics -->
            <!-- End Google Analytics -->
        </body>

        </html>
