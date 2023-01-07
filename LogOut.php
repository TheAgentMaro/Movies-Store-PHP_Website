<?PHP
require_once("Authentication.php");
require("CartShop.php");
$CartShop = new CartShop();
$authentication = new Authentication();
$CartShop->EmptyCart();
$authentication->LogOut();
$authentication->RedirectToURL("Index.php");
?>
