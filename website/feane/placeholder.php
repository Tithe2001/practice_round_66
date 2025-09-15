<?php 

if(isset($_GET["page"])){
    $pageName= $_GET["page"];

if($pageName== "home"){
    include("pages/home.php");
}
elseif($pageName== "menu"){
    include("pages/menu.php");
}
elseif($pageName== "book"){
    include("pages/book.php");
}
elseif($pageName== "about"){
    include("pages/about.php");
}
else{
    include("pages/404.php");
}


}else{
     include("pages/home.php");
}







?>