<?php
/*
./app/vues/template/index.php
TEMPLATE PRINCIPALE
*/
 ?>
 <!DOCTYPE html>
 <html lang="en">
   <head>
     <?php include '../app/vues/template/partials/_head.php'; ?>
   </head>
   <body>

 	  <?php include '../app/vues/template/partials/_nav.php'; ?>
    
     <!-- END nav -->

     <?php include '../app/vues/template/partials/_hero.php'; ?>

     <?php include '../app/vues/template/partials/_main.php'; ?>

     <!-- .section -->

     <?php include '../app/vues/template/partials/_footer.php'; ?>

   <!-- loader -->
   <?php include '../app/vues/template/partials/_loader.php'; ?>

   <?php include '../app/vues/template/partials/_script.php'; ?>

   </body>
 </html>
