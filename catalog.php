<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Starry Public Library - Catalog</title>
  <meta name="description" content="What can you borrow from SPL with a library card? A lot! Access the catalog and an overview of SPL's recent catalog additions available to local residents.">
  <link rel="stylesheet" media="screen" href="css/style.css">
  <link rel="stylesheet" media="print" href="css/print.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Days+One&family=Nunito&display=swap" rel="stylesheet">
</head>

<body>

<div class="wrapper">
  <header class="banner">
  <?php include('includes/header.php');?>
  </header>

<nav class="primary-menu">
<?php include('includes/nav.php');?>
</nav>

<main>
<h2>Catalog</h2>

<a href="https://kstinson.libib.com/"><button>Visit Our Full Catalog</button></a>

<h3>Recent Print Additions</h3>
<?php

    $xml = new DOMDocument;
    $xml->load('xml/bibliography.xml');

    $xsl = new DOMDocument;
    $xsl->load('xml/bibliography.xsl');

    $process = new XSLTProcessor;
    $process->importStyleSheet($xsl);

    echo $process->transformToXML($xml);

?>




</main>

<aside class="sidebar">
<p>"This little droid. I think he's searching for his former master, but I've never seen such devotion in a droid before. Uh, he claims to be the property of an Obi-Wan Kenobi. Is he a relative of yours? Do you know what he's talking about?" &ndash;<cite>Luke Skywalker</cite></p>

</aside>

<footer class="footer">

<?php include('includes/footer.php');?>

</footer>
</div><!-- end of content wrapper !-->

</body>
</html>
