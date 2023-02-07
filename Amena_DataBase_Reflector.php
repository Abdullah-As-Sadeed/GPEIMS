<?php 
/* By Abdullah As-Sadeed */
require_once "Include/DataBase_Connection.php";
?>
<!DOCTYPE html>
<!-- By Abdullah As-Sadeed -->
<html lang="en-US">
<head>
<meta charset="UTF-8"/>
<title>Amena DataBase Reflector</title>
<meta name="author" content="Abdullah As-Sadeed"/>
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<meta name="theme-color" content="black"/>
<meta name="description" content="Database Management Tool"/>
<meta name="keywords" content="Database, MySQL, MariaDB, DB, DBMS, RDBMS, SQL, Query"/>
<style>
@font-face {
font-family: "Dancing Script";
src: url("DancingScript.woff");
}
@font-face {
font-family: "Roboto";
font-weight: normal;
src: url("Roboto_Regular.woff");
}
@font-face {
font-family: "Roboto";
font-weight: bold;
src: url("Roboto_Bold.woff");
}
body {
background-color: rgb(229, 229, 229);
font-family: "Roboto", sans-serif;
color: rgb(32, 33, 34);
margin: 0;
}
* {
box-sizing: border-box;
user-select: none;
}
*:focus {
outline: none;
}
::selection {
background-color: rgb(182, 222, 183);
}
::-moz-selection {
background-color: rgb(182, 222, 183);
}
#header {
width: 100%;
background-color: rgb(95, 95, 95);
padding: 5px 0 20px 0;
text-align: center;
margin: 0 0 10px 0;
}
h1 {
font-size: 35px;
font-family: "Dancing Script", cursive;
color: white;
margin-bottom: 10px;
}
a {
text-decoration: none;
}
#sadeed {
color: blue;
margin-top: 10px;
display: inline-block;
animation: sadeed_in 0.6s;
will-change: transform;
}
@keyframes sadeed_in {
from {
transform: rotateY(90deg);
}
to {
transform: rotateY(0deg);
}
}
ul a {
font-size: 20px;
}
table {
border: 1px solid black;
border-radius: 4px;
box-shadow: 0.1em 0.1em 0.1em 0.1em rgba(0,0,0,0.1);
background-color: white;
margin-top: 10px;
margin-right: auto;
margin-left: auto;
}
tr {
transition: 0.6s;
will-change: background-color;
}
tr:hover, tr:focus {
background-color: #f5f5f5;
}
th {
border: 1px solid black;
padding: 3px;
}
td {
border: 1px solid black;
padding: 3px;
text-align: center;
}
#footer {
height: auto;
width: 100%;
border-top: 3px solid silver;
padding-top: 5px;
padding-bottom: 20px;
text-align: center;
float: left;
margin-top: 20px;
}
#footer a {
border-radius: 5px;
background-color: rgb(0,100,255);
padding: 3px;
text-align: center;
font-size: 11px;
color: white;
font-weight: bold;
margin-right: 1px;
transition: 0.6s;
cursor: pointer;
will-change: background-color;
}
#footer a:hover, #footer a:focus {
background-color: rgb(0,70,255);
}
#scroll {
height: 2px;
width: 0%;
background-color: red;
position: fixed;
z-index: 1;
bottom: 0px;
left: 0px;
will-change: width;
}
</style>
</head>
<body lang="en-US">
<div id="header">
<h1>Amena DataBase Reflector</h1>
<span id="sadeed"><a href="https://telechirkut.xyz/owner.php" target="new" title="Click to explore the TeleChirkut profile">By Abdullah As-Sadeed</a></span>
</div>
<ul type="disc">
<?php
$tables_query = mysqli_query($connection, "SHOW TABLE STATUS;");
while($table = mysqli_fetch_row($tables_query)) {
echo '<li><a href="' . $_SERVER["PHP_SELF"];
echo '/?table=' . $table[0] . '">';
echo $table[0] . "</a></li>";
};
echo "</ul>";
if($_GET["table"]) {
$table = $_GET["table"];
echo "<table><tbody><caption>";
echo $table . "</caption><tr>";
$data_query = mysqli_query($connection, "SELECT * FROM `$table`;");
while ($field = mysqli_fetch_field($data_query)) {
printf("<th>%s</th>", $field -> name);
};
echo "</tr>";
while($data = mysqli_fetch_row($data_query)) {
echo "<tr>";
$counter = 0;
while($counter < mysqli_field_count($connection)) {
if (is_null($data)) {
echo "<td><small><i>NULL</i></small></td>";
} else {
printf("<td>%s</td>", $data[$counter]);
};
$counter++;
};
echo "</tr>";
};
echo "<tr><td colspan='";
echo mysqli_field_count($connection) . "'>Total entry: ";
echo mysqli_num_rows($data_query) . "</td></tr>";
echo "</tbody></table>";
};
?>
<div id="footer">&copy; Abdullah As-Sadeed</div>
<div id="scroll"></div>
<script>
/* By Abdullah As-Sadeed */
document.oncontextmenu = function(menu) {
menu.preventDefault();
alert("Context Menues are not allowed by SGHT");
return false;
};
window.ononline = function() {
alert("You are online again");
};
window.onoffline = function() {
alert("You are now offline");
};
window.onscroll = function() {
document.getElementById("scroll").style.width = ((document.body.scrollTop || document.documentElement.scrollTop) / (document.documentElement.scrollHeight - document.documentElement.clientHeight)) * 100 + "%";
};
</script>
</body>
</html>
<?php
mysqli_close($connection);
exit();
?>
