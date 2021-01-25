<?php
        include_once '../connectToDatabase.php';
?>

<!DOCTYPE html>
<html>

<head>
<!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-160052856-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-160052856-1');
        </script>
        <title>OpenBarriers</title>
        <link rel="shortcut icon" type="image/x-icon" href="../images/OpenBarriers.png" />
        <link rel="stylesheet" type="text/css" href="../style.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Sacramento&display=swap" rel="stylesheet">
</head>

<body>

<!-- Navbar -->

<div class='navbar'>
        <a href='/'>Home</a>
        <a href='../feedback/feedback.php'>Got Feedback?</a>
        <a href='../info/info.php'>Info</a>
</div>

<!-- Logo -->

<?php
        echo '<a href="/"> <p class="lastUpdated"> <img src="../images/newLogo1.png"
        width=750px height=300px align="middle" alt="OpenBarriers Logo"/> </p> </a>';
?>

<!-- Explainer Video -->

<iframe width="700" height="400" src="https://www.youtube.com/embed/_kelAngXyV4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

<br><hr><br>

<!-- Notes for users -->

<span class='help'>👆🏾 Tap on a station to let us know if we have Open Barriers!</span>

<br><hr><br>

<span class='help'>🕵🏻 If you see this man beware! Inspectors may be present.</span>

<br><hr><br>

<span class='help'>💬 Leave improvements and suggestions in the 'Got Feedback?' tab above.</span>

<br><hr><br>

<span class='help'>📱 Share OpenBarriers with your friends! The more people who use the app, the more useful it becomes for you.</span>

<br>
<br>

</body>
</html>
