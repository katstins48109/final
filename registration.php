<?php include('includes/registration.php');?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Starry Public Library - Registration</title>
  <meta name="description" content="Want to borrow something from the library? You need to register first! Complete this simple form to become a member of the library.">
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
<h2>Registration</h2>

<?php print $formMessage;?>
<form class="starwars-form" method="post" onsubmit="return validateForm();">

<label for="first">First Name*</label>
<input type="text" id="first" name="first">

<label for="last">Last Name*</label>
<input type="text" id="last" name="last">

<label for="birthdate">Birthdate</label>
<input type="text" id="birthdate" name="birthdate">

<label for="email">Email*</label>
<input type="text" id="email" name="email">

<label for="address">Address</label>
<input type="text" id="address" name="address">

<label for="city">City</label>
<input type="text" id="city" name="city">

<label for="state">State</label>
<select name="state" id="state">
<option value="al">Alabama</option>
<option value="ak">Alaska</option>
<option value="az">Arizona</option>
<option value="ar">Arkansas</option>
<option value="ca">California</option>
<option value="co">Colorado</option>
<option value="ct">Connecticut</option>
<option value="de">Delaware</option>
<option value="fl">Florida</option>
<option value="ga">Georgia</option>
<option value="hi">Hawaii</option>
<option value="id">Idaho</option>
<option value="il">Illinois</option>
<option value="in">Indiana</option>
<option value="ia">Iowa</option>
<option value="ks">Kansas</option>
<option value="ky">Kentucky</option>
<option value="la">Louisiana</option>
<option value="me">Maine</option>
<option value="md">Maryland</option>
<option value="ma">Massachusetts</option>
<option value="mi">Michigan</option>
<option value="mn">Minnesota</option>
<option value="ms">Mississippi</option>
<option value="mo">Missouri</option>
<option value="mt">Montana</option>
<option value="ne">Nebraska</option>
<option value="nv">Nevada</option>
<option value="nh">New Hampshire</option>
<option value="nj">New Jersey</option>
<option value="nm">New Mexico</option>
<option value="ny">New York</option>
<option value="nc">North Carolina</option>
<option value="nd">North Dakota</option>
<option value="oh">Ohio</option>
<option value="ok">Oklahoma</option>
<option value="or">Oregon</option>
<option value="pa">Pennsylvania</option>
<option value="ri">Rhode Island</option>
<option value="sc">South Carolina</option>
<option value="sd">South Dakota</option>
<option value="tn">Tennessee</option>
<option value="tx">Texas</option>
<option value="ut">Utah</option>
<option value="vt">Vermont</option>
<option value="va">Virginia</option>
<option value="wa">Washington</option>
<option value="wv">West Virginia</option>
<option value="wi">Wisconsin</option>
<option value="wy">Wyoming</option>
</select>

<label for="zip">Zip Code</label>
<input type="text" id="zip" name="zip">

<label for="question">Do you have any questions?</label>
<textarea name="question" id="question"></textarea>

<input type="submit" value="submit form">

</form>


</main>

<aside class="sidebar">
<p> “It’s the ship that made the Kessel run in less than twelve parsecs. I’ve outrun Imperial starships. Not the local bulk cruisers, mind you. I’m talking about the big Corellian ships, now. She’s fast enough for you, old man.”  &ndash;<cite>Han Solo</cite></p>
</aside>

<footer class="footer">

<?php include('includes/footer.php');?>

</footer>
</div><!-- end of content wrapper !-->

</body>
</html>
