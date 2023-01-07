<?php
  require_once("Authentication.php");
  require("CartShop.php");
  $authentication = new Authentication();
  $CartShop = new CartShop();

  if (!( isset($authentication) && $authentication->CheckLogin())){
    $CartShop->EmptyCart();
  }

  if(isset($_POST["add_to_cart"])){
    $CartShop->AddToCart();  
  }  
?>

<!DOCTYPE html>
<html>
<head>
    <title>Supinfo MovieStore</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="styles.css"">
    <script src="js/javascript.js""></script>
    <link rel="icon" href="../assets/faviconx.ico" type="image/icon">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/bootstrap-iso.css">
</head>
<body>
    <div class="flex">
      <!--Header--><!--Navigator-->
      <header>
          <?php include 'Navbar.php'; ?>
      </header>
      <!--loader-->
        <div id="loader-wrapper">
          <div id="loader"></div>
       
          <div class="loader-section section-left"></div>
          <div class="loader-section section-right"></div>
       
        </div>
        <!--Loader's Header-->
        <div class="entry-header">
          <h1 class="entry-title">Supinfo MovieStore <img class="loaderImg" src="../assets/home.png"></h1>
        </div>
      <!--Movies Logo-->
      <div class="bigLogo">
          <a href="Index.php"><img src="../assets/home.png" width="70%" height="70%" /></a>
      </div>

      <!--Main Body-->
      <section class="fonts">
          <div class="max-grid">
              <table width="830px" align="center" class="mainTable">
                  <tr>
                      <td><div class="content_area">
                              <table>
                                 <tr> 
                                     <th class="line">
                                         <?php
                                             require 'MoviesController.php';
                                             $moviesController = new MoviesController();
                                             echo $moviesController->CreateCategoryUIList();
                                          ?>  
                                     </th>   
                                     <td>
                                         <?php
                                             
                                             echo $moviesController->GetMoviesByCategory($_GET['category_id']);
                                         ?>  
                                     </td>
                                 </tr>
                              </table>
                          </div>
                      </td>
                  </tr>
              </table>
          </div>
      </section><br /><br /><br />
  
      <!--Pop-up-->
      <div id="popupdiv" class="popupdiv">
          <table>
              <tr>
                  <td>
                      <img id="popupimg" src="">
                  </td>
                  <td>
                      <span id="popupdescr"></span> 

                  </td>

              </tr>
          </table>
        </div>  
    </div>
    <!--Footer-->
    <footer>
        <?php include 'Footer.php'; ?>
    </footer>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
  <script src="js/main.js"></script> 
    
</body>
</html>