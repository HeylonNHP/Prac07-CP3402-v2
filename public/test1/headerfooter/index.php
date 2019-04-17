<?php
/**
 * Created by PhpStorm.
 * User: Heylon
 * Date: 16/04/2019
 * Time: 8:05 PM
 */
?>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css" >
</head>
<body>
<?php
require "header.php";
?>
<div id="mainBody">
<h1>Home</h1>
<p>Heylon White is a pretty cool guy. This is why you're taking time out of your busy day to view his eye-sore of a website.</p>
<p>This website demonstrates dynamic content by embedding a common header and footer on every page using PHP require statements. I decided to use require statements instead
 of using include statements as the website would be unusable without the navigation bar included in the header.</p>
</div>
<?php
require "footer.php";
?>
</body>
</html>
