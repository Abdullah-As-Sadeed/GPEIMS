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
<title>Error 403 - GPEIMS</title>
<link rel="icon" type="image/webp" href="Icon.webp"/>
<meta name="description" content="You are not permitted to request this URL!"/>
<style>
<?php
include_once "Include/Common.css";
include_once "Include/Error_Page.css";
?>
</style>
</head>
<body lang="en-US">
<div id="container">
<h1>GhashPhul Educational Institution Management System</h1>
<div id="offline">You are offline now!</div>
<div id="information">
<h2>Error 403</h2>
<div id="error">You are not permitted to request this URL!</div>
</div>
<div id="printing_alert">Printing any portion of GPEIMS is forbidden!</div>
<script>
<?php
include_once "Include/Common.js";
include_once "Include/Connectivity_Status.js";
?>
</script>
</body>
</html>
<?php exit(); ?>
