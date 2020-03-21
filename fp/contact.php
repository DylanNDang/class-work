<!DOCTYPE html>
<html lang="en">
<head>
  <title>Viewfinder Photography</title>
  <meta name="robots" content="noindex,nofollow" />
  <meta name="viewport" content="width=device-width" />
  <meta charset="utf-8" />
  <link rel="stylesheet" href="css/big.css" />
  <link rel="stylesheet" href="css/nav.css" />
   <!-- jQuery --> 
    <script scr="http://jquery-latest.min.js"></script>  
    <!-- MenuMaker Plugin -->
    <script scr="https://s3.amazonaws.com/menumaker.min.js"></script>  
    <!-- Icon Library -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"/> 
    <script src="jss/script.js"></script>
 </head>
 <body data-gr-c-s-loaded="true">
  <!-- Wrapper -->       
   <main> 
    <header>
        <h1><a href="index.html">Viewfinder Photography</a></h1>
         <!-- Start CSS MenuMaker Navigation --> 
        <nav id="cssmenu">
        <ul>
             <li><a href="index.html"><i class="fa fa-fw fa-home"></i> Home Page</a></li>
            <li><a href="gallery.html"><i class="fa fa-fw fa-camera-retro"></i>Gallery</a></li>
            <li><a href="about.html"><i class="fa fa-fw fa-thumbs-o-up"></i>About</a></li>
            <li><a href="contact.php"><i class="fa fa-fw fa-server"></i> Contact Us</a></li>
          </ul>
        </nav>
        <!-- End CSS MenuMaker Navigation --> 
    </header>
        <section class="fullwidth">
            <h2>Contact Us</h2>
            <!-- php --> 
<?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other!       
         *
         */

        include 'includes/contact_include.php'; #site keys & code here
    
        $toAddress = "dylandang11@gmail.com";  //place your/your client's email address here
        $toName = "Dylan"; //place your client's name here
        $website = "Contact form";  //place NAME of your client's website

        //echo loadContact('simple.php');#demonstrates a simple contact form
        echo loadContact('multiple.php');#demonstrates multiple form elements

	?>
            <!-- php --> 
        </section>

     <footer>
         <br>
      <p><small>© 2020 by <a href="contact.php">Contact Us </a>, All Rights Reserved ~ <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~ <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a></small></p>
    </footer> 
  </main>
      
</body>
</html>