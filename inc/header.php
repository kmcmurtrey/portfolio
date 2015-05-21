<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Korey McMurtrey | Web Developer</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
    <!-- <link href='http://fonts.googleapis.com/css?family=Changa+One|Open+Sans:400italic,700italic,400,700,800' rel='stylesheet' type='text/css'> -->
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/responsive.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include_once("analyticstracking.php") ?>
</head>

<body>
<header>
    <a href="index.php" id="logo">
        <h1>KOREY MCMURTREY</h1>
        <h2>WEB DEVELOPER</h2>
    </a>
    <nav>
        <ul>
            <li><a href="index.php" class="<?php if ($section == "projects") {echo "selected";} ?>">PROJECTS</a></li>
            <li><a href="about.php" class="<?php if ($section == "about") {echo "selected";} ?>">ABOUT</a></li>
            <li><a href="contact.php" class="<?php if ($section == "contact") {echo "selected";} ?>">CONTACT</a></li>
        </ul>
    </nav>
</header>

<div id="wrapper">