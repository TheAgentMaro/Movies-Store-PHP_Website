<ul class="nav-ul">
    <?PHP  
    
    if ( isset($authentication) && $authentication->CheckLogin() && !$authentication->AdminValidation()){
        //Connecter en tant que utilisateur
       echo "<li class='line' style='float:right'><a href='LogOut.php'><div>(".$authentication->GetUsername().")</div>Log Out</a></li>".
                    //afficher icon pour accéder vers la liste d'achat  
            "<li class='line' style='float:right'><a href='Checkout.php' style='padding: 22.5px'><img src='../assets/cart.png' style='width: 30px;'/><div class='bootstrap-iso' style='display: inherit;'><span style='background: #3D2683;' class='badge badge-pill badge-danger cartNotification'>".$CartShop->Notification()."</span></div></a></li>";
    }
    
    elseif (( isset($authentication) && $authentication->CheckLogin() && $authentication->AdminValidation())) {
        
        //connecter en tant que admin
        
        echo "<li class='line' style='float:right'><a href='LogOut.php'><div>(".$authentication->GetUsername().")</div>Log Out</a></li>".
            "<li class='line' style='float:right'><a href='Admin.php' style='padding: 31px'><img src='../assets/dashboard.png' style='width: 30px;'/></a></li>";
    }
    
    else {
        //créer un compte 
        echo " <li class='line' style='float:right'><a href='Registration.php'>Sign up now!</a></li>".
             "<li class='line' style='float:right'><a href='SignIn.php'>Sign in</a></li>";   
    }
    ?>
    <!-- liste des films -->
    <li class='line' style="float:right"><a href="Index.php">Movies</a></li>
</ul>