<!doctype html>
<html>
<head>
<?php
$id = 28;
include_once("includes/headers.inc.php");
include_once("includes/functions.inc.php");
?>
</head><body>
<?php
include("includes/nav.inc.php");
?>
<main id="content">
<h2>Our contributors</h2>
<p>  We wouldn't be nearly as far as we are with out them. Our contributors are the people that sat in front of a keyboard for sometimes hours on end to forge this site and make it what it is today. Of course, there are those who only contributed once, or for a short amount of time and they're just as important. So, we've grouped them all together into one page. Once again <strong>THANK YOU!</strong></p>
<h3>List of contributors</h3>
<?php
echo create_contributor_list();
?>
</main>
</body></html>