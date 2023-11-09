<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Starry Public Library - Events</title>
  <meta name="description" content="Explore upcoming events at Starry Public Library">
  <link rel="stylesheet" media="screen" href="css/style.css">
  <link rel="stylesheet" media="print" href="css/print.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Days+One&family=Nunito&display=swap" rel="stylesheet">

  <script>
    function makeDark() {
    var aside = document.querySelector('aside');

    aside.style.backgroundColor = '#000';
    document.getElementById("dark").style.color = "#F4795B";
    }

    function makeLight() {
    var aside = document.querySelector('aside');

    aside.style.backgroundColor = '#67AFD2';
    document.getElementById("dark").style.color = "#000";
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
<h2 id="top">Events</h2>
<h3>Jump to:</h3>
<ul>
   <li><a href="#may">May</a></li>
   <li><a href="#june">June</a></li>
   <li><a href="#july">July</a></li>
 </ul>
  <h3 id="may">May</h3>
  <table class="events">
    <thead>
     <tr>
        <th>Date</th>
        <th>Time</th>
        <th>Event</th>
        <th>Description</th>
     </tr>
   </thead>
     <tbody>
       <tr>
          <td>Monday, May 24</td>
          <td>9:00am - 9:30am</td>
          <td>Baby Storytime @ SPL - Virtual</td>
          <td>Join us virtually for Baby Storytime!</td>
       </tr>
       <tr>
          <td>Thursday, May 27</td>
          <td>10:30am - 12:00pm</td>
          <td>Crafters Meet-Up</td>
          <td>Join a lively group of crafters of all interests and skill levels for a time of sharing and assistance with your unfinished projects.</td>
       </tr>
       <tr>
          <td>Saturday, May 29</td>
          <td>11:00am - 11:30am</td>
          <td>Dance and Wellness for Total Health - Virtual</td>
          <td>Join us over Zoom for a session of dancing and laughter. Let physical exercise and virtual connection help you feel better!</td>
       </tr>
       <tr>
          <td>Saturday, May 29</td>
          <td>12:00pm - 1:00pm</td>
          <td>Star Wars Month Wrap Up - Virtual</td>
          <td>Join us over Zoom for a session dedicated to the Star Wars Galaxy to wrap up This is the May. There will be story time and lightsaber training.</td>
      </tr>
     </tbody>
  </table>
<p><a href="#top">Return to Top</a></p>

  <h3 id="june">June</h3>
  <table class="events">
    <thead>
     <tr>
        <th>Date</th>
        <th>Time</th>
        <th>Event</th>
        <th>Description</th>
     </tr>
   </thead>
     <tbody>
       <tr>
          <td>Tuesday, June 1</td>
          <td>12:30pm - 1:30pm</td>
          <td>English Conversation Club - Virtual</td>
          <td>Join us as we practice English conversation in an informal, friendly relaxed setting. New members are always welcome but space is limited.</td>
       </tr>
       <tr>
          <td>Tuesday, June 08</td>
          <td> 6:00pm - 7:00pm</td>
          <td>Hooks 'N Needles - Virtual</td>
          <td>Join us as we have fun knitting & crocheting together. New members welcome!</td>
       </tr>
       <tr>
          <td>Wednesday, June 16</td>
          <td>10:30am - 12:30pm</td>
          <td>How to Apply for Jobs with the County Government</td>
          <td>Find out everything you need to know about applying for jobs with County Government.</td>
       </tr>
     </tbody>
  </table>

<p><a href="#top">Return to Top</a></p>

  <h3 id="july">July</h3>
  <table class="events">
    <thead>
     <tr>
        <th>Date</th>
        <th>Time</th>
        <th>Event</th>
        <th>Description</th>
     </tr>
   </thead>
     <tbody>
       <tr>
          <td>Wednesday, July 07</td>
          <td>3:30pm - 4:00pm</td>
          <td>Use Less and Spend Less on Energy in Your Home (along with Thermal Camera Demo)</td>
          <td>Curious about which household appliances use the most energy and what you can do to reduce energy use? Join us along with Senior Planet Montgomery for this lecture along with a thermal camera demo.</td>
       </tr>
       <tr>
          <td>Monday, July 12</td>
          <td>1:00pm - 3:00pm</td>
          <td>Job Search Strategies (In a Pandemic Job Market)</td>
          <td>Learn about best practices for conducting a job search in the current (pandemic) job market.</td>
       </tr>
       <tr>
          <td>Wednesday, July 21</td>
          <td>3:00pm - 4:00pm</td>
          <td>All About Google Workspace</td>
          <td>Curious about the free tools from Google? Learn about some of Google's most popular productivity tools that are for personal use, as well as work-related ones.</td>
       </tr>
     </tbody>
  </table>
<p><a href="#top">Return to Top</a></p>

<p class="caption">Most of these calendar events were generated from a list of events at <a href="https://mcpl.libnet.info/events?r=today" target="_blank">Montgomery County Public Libraries</a>.</p>
</main>

<aside class="sidebar">
<button class="dark" onclick="makeDark();">Join the Dark Side</button>

<p id="dark">"Don't underestimate the Force." &ndash;<cite>Darth Vader</cite></p>

<button class="light" onclick="makeLight();">Join the Light Side</button>
</aside>

<footer class="footer">

<?php include('includes/footer.php');?>

</footer>
</div><!-- end of content wrapper !-->

</body>
</html>
