<?php /* By Abdullah As-Sadeed */ ?>
<!DOCTYPE html>
<!-- By Abdullah As-Sadeed -->
<html lang="en-US">
<head>
<meta charset="UTF-8"/>
<meta name="author" content="Abdullah As-Sadeed"/>
<link rel="manifest" href="GPEIMS.webmanifest"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<meta name="theme-color" content="black"/>
<link rel="apple-touch-icon" href="Icon.png"/>
<title>Offline - SGHT</title>
<link rel="icon" type="image/webp" href="Icon.webp"/>
<meta name="description" content="You are offline now!"/>
<style>
<?php
include_once "Include/Common.css";
include_once "Include/Error_Page.css";
?>
#loading {
height: 100%;
width: 100%;
padding-top: 200px;
text-align: center;
position: fixed;
top: 0;
left: 0;
z-index: 1;
display: none;
cursor: wait;
}
</style>
</head>
<body lang="en-US">
<div id="container">
<h1>GhashPhul Educational Institution Management System</h1>
<div id="information">
<h2>You are offline now</h2>
<div id="error">Do not leave this page; your requested URL will be reloaded automatically when you will become online.</div>
<div id="loading">
<img src="Loading.svg" alt="Loading..."/>
</div>
</div>
<div id="printing_alert">Printing any portion of GPEIMS is forbidden!</div>
<script>
/* By Abdullah As-Sadeed */
<?php include_once "Include/Common.js"; ?>
window.ononline = function() {
document.getElementById("loading").style.display = "block";
location.reload();
};
</script>
</body>
</html>
<?php exit(); ?>
