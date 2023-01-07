<div class="footer">
    <table>
        <tr>
            <td class="line">
                <div>
                    <span><div>Movies</div></span><br />
                    <span>We provide with the latest and greatest movies of all time.<br /><br />Our list is constantly updated with the latest products.</span>
                </div>
            </td>
            <td class="line">
                <div>
                    <span><div>Community</div></span><br />
                    <span>Community helps us deliver more accurate results.It's also very friendly.Every member treats each other with mutual respect. <br /><br />

                    <?PHP 
                    require_once("Authentication.php");
                    $authentication = new Authentication();

                    if(!$authentication->CheckLogin())                       
                        echo "Help the community grow by <a href='Registration.php'>Signing up!</a>";
                    ?>
                    </span>
                </div>
            </td>
            <td class="line">
                <div>
                    <span><div>Purpose</div></span><br />
                    <span>We deliver the best possible sum-up for every movie, so clients are aware of our products.<br /><br />This is based on your opinion, so rate and review honestly.Buy and enjoy!</span>
                </div>
            </td>
            <td>
                <div class="follow">
                    <div>Follow Us</div>
                    <a href="Index.php"><img src="../assets/facebook.png"/></a>
                    <a href="Index.php"><img src="../assets/twitter.png"/></a>
                    <a href="Index.php"><img src="../assets/google.png"/></a>         
                    <a href="Index.php"><img src="../assets/pinterest.png"/></a>
                </div>
            </td>
        </tr>    
    </table>
        
    </p>
</div>

