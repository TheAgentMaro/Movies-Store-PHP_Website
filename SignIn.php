<?PHP
require_once("Authentication.php");
$authentication = new Authentication();

if(isset($_POST['submitted']))
{
   if($authentication->SignIn())
   {
        $authentication->RedirectToURL("Index.php");
   }
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

            <!--Registration Form-->
            <div class="max-grid">
                <form id='login' method='post' accept-charset='UTF-8'>
                    <input type='hidden' name='submitted' id='submitted' value='1'/>
                    <table width="30%" height="370px" bgcolor="#3D2683" align="center" class="mainTable" style="max-width: 500px;">
                        <tr>
                            <td align="center"><font size="6" class="textShad"><b>Sign in</b></font><br /></td>
                        </tr>
                        <tr>
                            <td>
                                <!--2x Input Fields-->
                                <table align="center" width="100%" height="100%" bgcolor="#e8e8e8" id="regTable">
                                    <tr>
                                        <td rowspan="3" align="center">
                                            <input type="text" name="username" id="username" autofocus required placeholder="Username">
                                            <input type="password" name="password" id="password" required placeholder="Password">
                                        </td>
                                    <?PHP if ( strlen($authentication->error_message) >0){
                                        echo "<tr> <td> ". $authentication->error_message .
                                             "</td> </tr> ";
                                    } ?>
                                    <tr>
                                        <!--Register Button-->
                                        <td align="center" colspan="3">
                                            <button class="forwardButton" style="vertical-align:middle"><span>Sing in</span></button>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </section>
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