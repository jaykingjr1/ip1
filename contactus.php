<!DOCTYPE html>
<html lang="en">
<head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-62B5T1CGLJ"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-62B5T1CGLJ');
</script>
<link rel="stylesheet" type="text/css" href="css/styleAC.css">
<link rel="icon" href="images/favicon.png" type="image/png">
<meta charset="utf-8">
<meta name=viewport content="width=device-width, initial-scale=1.0">
<title>Contact Us Response</title>
</head>
<body>
<header class="header">
<img alt="header2" src="images/header2.png">
</header>

<?php
// define variables and set to empty values
$nemr = $uLName = $uFName = $uEmail = $uComment = "";
// function to clean data
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  return $data;
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  echo "<br>";
  $uLName = test_input($_POST["uLName"]);
  $uFName = test_input($_POST["uFName"]);
  $uEmail = test_input($_POST["uEmail"]);
  $uComment = test_input($_POST["uComment"]); 
  if (empty($_POST["nemr"])) {
    $nemr = "N";
  } else {
    $nemr = "Y";
  }

}
?>
<nav>
<a class="btn1" href="index.html">Home</a>
</nav>
<main>
<h2>Sent Successfully</h2>
<p>
Thank you for your email. Have a nice day.
</p>
<br>
<div style="text-align: center;">
  <img src="images/users.png" style="display: inline-block; width: 44%;">
  <img src="images/choice.png" style="display: inline-block; width: 49%;">
</div>
<br>
</main>
<footer>
<h6>&#169; DomainTrusts.com 2026</h6>
</footer>
</body>
</html>
<?php
	$emailMsg=$uComment;
	$mEmail="jaykingjr@domaintrusts.com";
	$emailHdr = "From: ".$mEmail."\r\n  Reply-To: ".$mEmail."\r\n";
	$emailSubj = "Thank you for Contacting";
	mail($uEmail, $emailSubj, $emailMsg, $emailHdr);
?>
