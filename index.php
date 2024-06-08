<?php
include "header.php";
include "sidebar.php";
$p = isset($_GET['p']) ? $_GET['p'] : '';
if ($p) {
    include "pages/$p.php";
    // echo "<h1>$p</h1>";
} else {
    // echo "<h1>$p</h1>";
    include "pages/home.php";
}
include "footer.php";
