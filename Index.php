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
  
//unset($_SESSION["shopping_cart"]);

//echo '<pre style="color: white; font-size: 20px;">';
//var_dump($_SESSION);
//echo '</pre>';
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
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bungee+Inline&family=Roboto&family=Shojumaru&display=swap" rel="stylesheet">
</head>
<body>
    <div>
      <div class="flex max-grid">
        <!--Header--><!--Navigator-->
        <header >
            <?php include 'Navbar.php'; ?>
        </header>
        <!--<!--loader-->
        <!--Loader's Header-->
        <div class="entry-header">
          <h1 class="entry-title">Supinfo MovieStore <img class="loaderImg" src="../assets/home.png"></h1>
        </div>
        <!--Movies Logo-->
        <div class="bigLogo">
            <a href="Index.php"><img src="../assets/home.png" width="70%" height="70%"/></a>
        </div>

        <!--Main Body-->
        <section class="fonts">
            <table width="830px" align="center" class="mainTable">
                <tr >
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
                                    <p style="color:white;text-align:center;font-size:30px;;">Welcome everyone to our movie store <br> choose you're movie here and enjoy !</p>
                                    <img src="../assets/arrow.png" width="20%" height="20%"   style="margin-left: auto; margin-right: auto;width: 20%; position: relative; left:42%; bottom:50px;"/></img>
                                       <?php
                                           echo $moviesController->ViewMoviesList();
                                       ?>  
                                   </td>
                               </tr>
                            </table>
                        </div>
                    </td>
                </tr>
            </table>          
        </section> 
      </div>
        
      <!--Pop-up-->
      <div id="popupdiv" class="popupdiv">
          <table>
              <tr>
                  <td>
                      <img id="popupimg" src="">
                  </td>
                  <td>
                      <div id="popupdescr"></div>                   
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