<?php include('includes/process.php');?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Starry Public Library - Contact Us</title>
  <meta name="description" content="Have a question? Send us a message through our contact form.">
  <link rel="stylesheet" media="screen" href="css/style.css">
  <link rel="stylesheet" media="print" href="css/print.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Days+One&family=Nunito&display=swap" rel="stylesheet">

  <script>
  function validateForm() {
    if(document.getElementById('newsletter').value  == 'no') {
      alert('You must sign up for our newsletter. Thanks!');
      return false;
    }
  }

  </script>

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
<h2>Contact Us</h2>
<?php print $formMessage;?>
<form class="starwars-form" method="post" onsubmit="return validateForm();">

<label for="name">Name</label>
<input type="text" id="name" name="name">

<label for="email">Email</label>
<input type="text" id="email" name="email">

<label for="question">Do you have any questions?</label>
<textarea name="question" id="question"></textarea>

<label for="newsletter">Would you like to sign up for our newsletter?</label>
<select name="newsletter" id="newsletter">
        <option value="no">No</option>
        <option value="yes">Yes</option>
</select>

<fieldset>

        <legend>Select the Star Wars movie(s) you've watched:</legend>

        <label>EPISODE I - THE PHANTOM MENACE <input type="checkbox" name="movie[]"  value="phantom"></label>

        <label>EPISODE II - ATTACK OF THE CLONES <input type="checkbox" name="movie[]" value="clones"></label>

        <label>EPISODE III - REVENGE OF THE SITH <input type="checkbox" name="movie[]" value="sith"></label>

        <label>SOLO: A STAR WARS STORY <input type="checkbox" name="movie[]" value="solo"></label>

        <label>ROGUE ONE: A STAR WARS STORY <input type="checkbox" name="movie[]" value="rogue"></label>

        <label>EPISODE IV - A NEW HOPE <input type="checkbox" name="movie[]" value="hope"></label>

        <label>EPISODE V - THE EMPIRE STRIKES BACK <input type="checkbox" name="movie[]" value="empire"></label>

        <label>EPISODE VI - RETURN OF THE JEDI <input type="checkbox" name="movie[]" value="jedi"></label>

        <label>EPISODE VII - THE FORCE AWAKENS <input type="checkbox" name="movie[]" value="force"></label>

        <label>EPISODE VIII - THE LAST JEDI <input type="checkbox" name="movie[]" value="last"></label>

        <label>EPISODE IX - THE RISE OF SKYWALKER <input type="checkbox" name="movie[]" value="rise"></label>

        <label>None of these <input type="checkbox" name="movie[]" value="none"></label>

</fieldset>

<input type="submit" value="submit form">

</form>


</main>

<aside class="sidebar">
<p>"I've been waiting for you, Obi-Wan. We meet again, at last. The circle is now complete. When I left you I was but the learner, but now I am the master. ... Your powers are weak, old man. ... You should not have come back." &ndash;<cite>Darth Vader</cite></p>
</aside>

<footer class="footer">

<?php include('includes/footer.php');?>

</footer>
</div><!-- end of content wrapper !-->

</body>
</html>
