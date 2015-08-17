<?php
include("doc.php");
include("elements.php");
include("head.php");

$doc = new Doc();
$doc -> start();
$head = new Head("Chris");
$head -> close();
$doc -> body();
$ele = new Element();

$ele -> addText("h1", "chris");

$ele -> addTextLink("p", "chris", "https://www.e-shop.gr/print_order.phtml", false);

$doc -> bodyClose();
$doc -> close();

 ?>
