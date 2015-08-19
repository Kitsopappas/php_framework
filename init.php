<?php
include("doc.php");
include("elements.php");
include("head.php");

$doc = new Doc();
$doc -> start();
$head = new Head();
$head -> start("Chris");
$head -> addCSS("main.css");
$head -> close();
$doc -> body();
$ele = new Element();

$ele -> addText("h1", "chris");
$ele -> addWrapper("div", "round");
$ele -> addTextLink("p", "chris", "https://www.e-shop.gr/print_order.phtml", false);
$ele -> closeWrapper();
$doc -> bodyClose();
$doc -> close();

 ?>
