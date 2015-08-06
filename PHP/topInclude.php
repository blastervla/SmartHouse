<html>
   <head>

      <title>SmartHOUSE</title>
      <meta charset="utf-8" />
      <!-- <link type="text/css" href="../CSS/layout.css" rel="stylesheet" /> -->

      <!-- Include jQuery.mmenu .css files -->
      <link type="text/css" href="../CSS/jquery.mmenu.all.css" rel="stylesheet" />
      <link rel="stylesheet" href="../CSS/bootstrap.min.css">
      <link rel="stylesheet" href="../CSS/bootstrap-theme.min.css">
      <link rel="stylesheet" href="../CSS/style.css">
      <!-- Include jQuery and the jQuery.mmenu .js files -->
      <script src="../JS/jquery-1.11.3.min"></script>
      <script type="text/javascript" src="../JS/jquery-ui.min.js"></script>
      <script src="../JS/Menu/jquery.mmenu.min.all.js" type="text/javascript"></script>
      <script type="text/javascript" src="../JS/bootstrap.min.js"></script>
      <script type="text/javascript" src="../JS/Buttons/buttonFunc.js"></script>
      <script type="text/javascript" src="../JS/Buttons/register.js"></script>

   </head>
   <body>

      <div class="header" id = "head">
         <a id="navToggle" href="#menu"></a>
         <h1 style="font-size: 175%; padding-top:10px; text-align: center;">SmartenHOUSEN</h1>
         <div align = "right" valign = "top">
            <a class="LogButtons" id="btnSignIn" style "text-decoration: none; ">Sign In</a>
            <a class="LogButtons" id="btnSignUp" style "text-decoration: none; ">Sign Up</a>
         </div>
      </div>

      <!-- The menu -->
      <nav id="menu" class="menuNav">
         <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/ControlModulos">Control de modulos</a>
               <ul>
                  <li><a href="/about/history">History</a></li>
                  <li><a href="/about/team">The team</a></li>
                  <li><a href="/about/address">Our address</a></li>
               </ul>
            </li>
            <li><a href="/about">About</a>
                <ul>
                  <li><a href="/about/history">History</a></li>
                  <li><a href="/about/team">The team</a></li>
                  <li><a href="/about/address">Our address</a></li>
               </ul>
            </li>
            <li><a href="/contact">Contact</a></li>
         </ul>
      </nav>

      <!-- The page -->
      <div class="page">