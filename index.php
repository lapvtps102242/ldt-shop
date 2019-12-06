<?php
 session_start();
include "model/pdo.php";
include "model/catalog.php";
include "model/news.php"
;
$dscat = loadcatalog();
$dssphome = loadProductHome();
$showall = loadproducts();
$ctsp = loadproducts();
// $dstt = loadblog();
include "view/header.php";
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($_GET['act']) {
        case 'about':
            include "view/about.php";
            break;
        case 'blog':
            include "view/blog.php";
            break;
        case 'addcart':
           
                include "view/addtocart.php";
                break;
        case 'contact':
            include "view/contact.php";
            break;
            case 'cart':
                include "view/cart.php";
                break;
        case 'shop':
                // if (isset($_POST['search']) && $_POST['search']) {
                //     $kyw = $_POST['kyw'];
                // } else {
                //     $kyw = "";
                // }
                if (isset($_GET['idcat'])) {
                    $id_loai = $_GET['idcat'];
                } else {
                    $id_loai=0;
                }
                $showall=loadproducts($id_loai);
                include("view/shop.php");
        break;
        case 'testimonials':
            include "view/testimonials.php";
        break;

        case 'ctsp':
                if(isset($_GET['idsp'])) {
                    $id_sp = $_GET['idsp'];
                } else {
                    $id_sp=0;
                }
                    $showct = loadctsp($id_sp);
                include ("view/ctsp.php");
                break;
        default:
            include "view/home.php";
            break;
    }
} else {
    include "view/home.php";
}
include "view/footer.php";


