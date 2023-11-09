<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Starry Public Library</title>
  <meta name="description" content="Serving sandy planet vibes for the last 44 years">
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
<h2>Welcome to the Starry Public Library Online</h2>

  <img src="images/librarystacks.jpg" width="600" height="401" alt="Photo by Ryunosuke Kikuno of library book stacks" class="stacks">
  <p class="caption">Photo by <a href="https://unsplash.com/@ryunosuke_kikuno?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Ryunosuke Kikuno</a> on <a href="https://unsplash.com/s/photos/library?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Unsplash</a></p>

<p>Hello, and welcome to my fake library website!</p>
<p>I took inspiration (and in cases of this library's events page, content) from other libraries to help generate content for this website. I also pulled in elements from Star Wars, because that's my latest obsession. The library's logo is a little thing I pulled together on <a href="https://www.canva.com" target="_blank">Canva</a> to give the feeling of the binary suns as seen on <a href="https://starwars.fandom.com/wiki/Tatooine" target="_blank">Tatooine</a>.</p>

</main>

<aside class="sidebar">
<h3>Library Address</h3>
<p>1977 Lucas Rd<br>
South Palo, CA 94303</p>

<h3>Library Hours</h3>
<table class="hours">
  <thead>
   <tr>
      <th>Date</th>
      <th>Hours</th>
   </tr>
 </thead>
   <tbody>
     <tr>
        <td>Mondays</td>
        <td>10:00am&ndash;6:00pm</td>
     </tr>
     <tr>
        <td>Tuesdays</td>
        <td>12:00pm&ndash;8:00pm</td>
     </tr>
     <tr>
        <td>Wednesdays</td>
        <td>10:00am&ndash;6:00pm</td>
     </tr>
     <tr>
        <td>Thursdays</td>
        <td>12:00pm&ndash;8:00pm</td>
     </tr>
     <tr>
        <td>Fridays</td>
        <td>10:00am&ndash;6:00pm</td>
     </tr>
     <tr>
        <td>Saturdays</td>
        <td>8:00am&ndash;4:00pm</td>
     </tr>
     <tr>
        <td>Sundays</td>
        <td>Closed</td>
     </tr>
   </tbody>
   <tfoot>
   <tr>
      <td colspan="2">Summer Hours; effective May 15 - August 21</a></td>
   </tr>
</tfoot>
</table>

</aside>

<footer class="footer">

<?php include('includes/footer.php');?>

</footer>
</div><!-- end of content wrapper !-->

</body>
</html>
