<?php
/* By Abdullah As-Sadeed */
require_once "Include/DataBase_Connection.php";
$blood_group_list = '<select name="blood_group">
<option selected disabled>Blood Group</option>
<option value="A+">A+</option>
<option value="A-">A-</option>
<option value="B+">B+</option>
<option value="B-">B-</option>
<option value="AB+">AB+</option>
<option value="AB-">AB-</option>
<option value="O+">O+</option>
<option value="O-">O-</option>
</select>';
$gender_list = '<select name="gender">
<option selected disabled>Gender</option>
<option value="Male">Male</option>
<option value="Female">Female</option>
<option value="Other">Other</option>
</select>';
$religion_list = '<select name="religion">
<option selected disabled>Religion</option>
<option value="African Traditional">African Traditional</option>
<option value="Agnostic">Agnostic</option>
<option value="Atheist">Atheist</option>
<option value="Baha\'i">Baha\'i</option>
<option value="Buddhism">Buddhism</option>
<option value="Cao Dai">Cao Dai</option>
<option value="Chinese Traditional">Chinese Traditional</option>
<option value="Christianity">Christianity</option>
<option value="Hinduism">Hinduism</option>
<option value="Islam">Islam</option>
<option value="Jainism">Jainism</option>
<option value="Juche">Juche</option>
<option value="Judaism">Judaism</option>
<option value="Neo-Paganism">Neo-Paganism</option>
<option value="Nonreligious">Nonreligious</option>
<option value="Rastafarianism">Rastafarianism</option>
<option value="Secular">Secular</option>
<option value="Shinto">Shinto</option>
<option value="Sikhism">Sikhism</option>
<option value="Spiritism">Spiritism</option>
<option value="Tenrikyo">Tenrikyo</option>
<option value="Unitarian-Universalism">Unitarian-Universalism</option>
<option value="Zoroastrianism">Zoroastrianism</option>
<option value="Primal-Indigenous">Primal-Indigenous</option>
<option value="Other">Other</option>
</select>';
$nationality_list = '<select name="nationality">
<option selected disabled>Nationality</option>
<option value="Afghan">Afghan</option>
<option value="Albanian">Albanian</option>
<option value="Algerian">Algerian</option>
<option value="American">American</option>
<option value="Andorran">Andorran</option>
<option value="Angolan">Angolan</option>
<option value="Antiguans">Antiguans</option>
<option value="Argentinean">Argentinean</option>
<option value="Armenian">Armenian</option>
<option value="Australian">Australian</option>
<option value="Austrian">Austrian</option>
<option value="Azerbaijani">Azerbaijani</option>
<option value="Bahamian">Bahamian</option>
<option value="Bahraini">Bahraini</option>
<option value="Bangladeshi">Bangladeshi</option>
<option value="Barbadian">Barbadian</option>
<option value="Barbudans">Barbudans</option>
<option value="Batswana">Batswana</option>
<option value="Belarusian">Belarusian</option>
<option value="Belgian">Belgian</option>
<option value="Belizean">Belizean</option>
<option value="Beninese">Beninese</option>
<option value="Bhutanese">Bhutanese</option>
<option value="Bolivian">Bolivian</option>
<option value="Bosnian">Bosnian</option>
<option value="Brazilian">Brazilian</option>
<option value="British">British</option>
<option value="Bruneian">Bruneian</option>
<option value="Bulgarian">Bulgarian</option>
<option value="Burkinabe">Burkinabe</option>
<option value="Burmese">Burmese</option>
<option value="Burundian">Burundian</option>
<option value="Cambodian">Cambodian</option>
<option value="Cameroonian">Cameroonian</option>
<option value="Canadian">Canadian</option>
<option value="Cape verdean">Cape Verdean</option>
<option value="Central african">Central African</option>
<option value="Chadian">Chadian</option>
<option value="Chilean">Chilean</option>
<option value="Chinese">Chinese</option>
<option value="Colombian">Colombian</option>
<option value="Comoran">Comoran</option>
<option value="Congolese">Congolese</option>
<option value="Costa rican">Costa Rican</option>
<option value="Croatian">Croatian</option>
<option value="Cuban">Cuban</option>
<option value="Cypriot">Cypriot</option>
<option value="Czech">Czech</option>
<option value="Danish">Danish</option>
<option value="Djibouti">Djibouti</option>
<option value="Dominican">Dominican</option>
<option value="Dutch">Dutch</option>
<option value="East timorese">East Timorese</option>
<option value="Ecuadorean">Ecuadorean</option>
<option value="Egyptian">Egyptian</option>
<option value="Emirian">Emirian</option>
<option value="Equatorial guinean">Equatorial Guinean</option>
<option value="Eritrean">Eritrean</option>
<option value="Estonian">Estonian</option>
<option value="Ethiopian">Ethiopian</option>
<option value="Fijian">Fijian</option>
<option value="Filipino">Filipino</option>
<option value="Finnish">Finnish</option>
<option value="French">French</option>
<option value="Gabonese">Gabonese</option>
<option value="Gambian">Gambian</option>
<option value="Georgian">Georgian</option>
<option value="German">German</option>
<option value="Ghanaian">Ghanaian</option>
<option value="Greek">Greek</option>
<option value="Grenadian">Grenadian</option>
<option value="Guatemalan">Guatemalan</option>
<option value="Guinea-bissauan">Guinea-Bissauan</option>
<option value="Guinean">Guinean</option>
<option value="Guyanese">Guyanese</option>
<option value="Haitian">Haitian</option>
<option value="Herzegovinian">Herzegovinian</option>
<option value="Honduran">Honduran</option>
<option value="Hungarian">Hungarian</option>
<option value="Icelander">Icelander</option>
<option value="Indian">Indian</option>
<option value="Indonesian">Indonesian</option>
<option value="Iranian">Iranian</option>
<option value="Iraqi">Iraqi</option>
<option value="Irish">Irish</option>
<option value="Israeli">Israeli</option>
<option value="Italian">Italian</option>
<option value="Ivorian">Ivorian</option>
<option value="Jamaican">Jamaican</option>
<option value="Japanese">Japanese</option>
<option value="Jordanian">Jordanian</option>
<option value="Kazakhstani">Kazakhstani</option>
<option value="Kenyan">Kenyan</option>
<option value="Kittian and nevisian">Kittian and Nevisian</option>
<option value="Kuwaiti">Kuwaiti</option>
<option value="Kyrgyz">Kyrgyz</option>
<option value="Laotian">Laotian</option>
<option value="Latvian">Latvian</option>
<option value="Lebanese">Lebanese</option>
<option value="Liberian">Liberian</option>
<option value="Libyan">Libyan</option>
<option value="Liechtensteiner">Liechtensteiner</option>
<option value="Lithuanian">Lithuanian</option>
<option value="Luxembourger">Luxembourger</option>
<option value="Macedonian">Macedonian</option>
<option value="Malagasy">Malagasy</option>
<option value="Malawian">Malawian</option>
<option value="Malaysian">Malaysian</option>
<option value="Maldivan">Maldivan</option>
<option value="Malian">Malian</option>
<option value="Maltese">Maltese</option>
<option value="Marshallese">Marshallese</option>
<option value="Mauritanian">Mauritanian</option>
<option value="Mauritian">Mauritian</option>
<option value="Mexican">Mexican</option>
<option value="Micronesian">Micronesian</option>
<option value="Moldovan">Moldovan</option>
<option value="Monacan">Monacan</option>
<option value="Mongolian">Mongolian</option>
<option value="Moroccan">Moroccan</option>
<option value="Mosotho">Mosotho</option>
<option value="Motswana">Motswana</option>
<option value="Mozambican">Mozambican</option>
<option value="Namibian">Namibian</option>
<option value="Nauruan">Nauruan</option>
<option value="Nepalese">Nepalese</option>
<option value="New zealander">New Zealander</option>
<option value="Ni-vanuatu">Ni-Vanuatu</option>
<option value="Nicaraguan">Nicaraguan</option>
<option value="Nigerien">Nigerien</option>
<option value="North korean">North Korean</option>
<option value="Northern irish">Northern Irish</option>
<option value="Norwegian">Norwegian</option>
<option value="Omani">Omani</option>
<option value="Pakistani">Pakistani</option>
<option value="Palauan">Palauan</option>
<option value="Panamanian">Panamanian</option>
<option value="Papua new guinean">Papua New Guinean</option>
<option value="Paraguayan">Paraguayan</option>
<option value="Peruvian">Peruvian</option>
<option value="Polish">Polish</option>
<option value="Portuguese">Portuguese</option>
<option value="Qatari">Qatari</option>
<option value="Romanian">Romanian</option>
<option value="Russian">Russian</option>
<option value="Rwandan">Rwandan</option>
<option value="Saint lucian">Saint Lucian</option>
<option value="Salvadoran">Salvadoran</option>
<option value="Samoan">Samoan</option>
<option value="San marinese">San Marinese</option>
<option value="Sao tomean">Sao Tomean</option>
<option value="Saudi">Saudi</option>
<option value="Scottish">Scottish</option>
<option value="Senegalese">Senegalese</option>
<option value="Serbian">Serbian</option>
<option value="Seychellois">Seychellois</option>
<option value="Sierra leonean">Sierra Leonean</option>
<option value="Singaporean">Singaporean</option>
<option value="Slovakian">Slovakian</option>
<option value="Slovenian">Slovenian</option>
<option value="Solomon islander">Solomon Islander</option>
<option value="Somali">Somali</option>
<option value="South african">South African</option>
<option value="South korean">South Korean</option>
<option value="Spanish">Spanish</option>
<option value="Sri lankan">Sri Lankan</option>
<option value="Sudanese">Sudanese</option>
<option value="Surinamer">Surinamer</option>
<option value="Swazi">Swazi</option>
<option value="Swedish">Swedish</option>
<option value="Swiss">Swiss</option>
<option value="Syrian">Syrian</option>
<option value="Taiwanese">Taiwanese</option>
<option value="Tajik">Tajik</option>
<option value="Tanzanian">Tanzanian</option>
<option value="Thai">Thai</option>
<option value="Togolese">Togolese</option>
<option value="Tongan">Tongan</option>
<option value="Trinidadian or Tobagonian">Trinidadian or Tobagonian</option>
<option value="Tunisian">Tunisian</option>
<option value="Turkish">Turkish</option>
<option value="Tuvaluan">Tuvaluan</option>
<option value="Ugandan">Ugandan</option>
<option value="Ukrainian">Ukrainian</option>
<option value="Uruguayan">Uruguayan</option>
<option value="Uzbekistani">Uzbekistani</option>
<option value="Venezuelan">Venezuelan</option>
<option value="Vietnamese">Vietnamese</option>
<option value="Welsh">Welsh</option>
<option value="Yemenite">Yemenite</option>
<option value="Zambian">Zambian</option>
<option value="Zimbabwean">Zimbabwean</option>
<option value="Other">Other</option>
</select>';
$department_list = '<select name="department">
<option selected disabled>Department</option>
<optgroup label="Religious Education">
<option value="Buddha">Buddha</option>
<option value="Christian">Christian</option>
<option value="Hindu">Hindu</option>
<option value="Islamic Studies">Islamic Studies</option>
</optgroup>
<optgroup label="Science">
<option value="Biology">Biology</option>
<option value="Chemistry">Chemistry</option>
<option value="Information and Communication Technology (ICT)">Information and Communication Technology (ICT)</option>
<option value="Mathematics">Mathematics</option>
<option value="Physics">Physics</option>
<option value="Statistics">Statistics</option>
</optgroup>
<optgroup label="Commerce">
<option value="Accounting">Accounting</option>
<option value="Business Organization and Management (BOM)">Business Organization and Management (BOM)</option>
<option value="Economics">Economics</option>
<option value="Finance, Banking & Insurance (FBI)">Finance, Banking & Insurance (FBI)</option>
<option value="Production Management & Marketing (PMM)">Production Management & Marketing (PMM)</option>
</optgroup>
<optgroup label="Arts">
<option value="Geography">Geography</option>
<option value="Islamic History and Culture">Islamic History and Culture</option>
<option value="Psychology">Psychology</option>
<option value="Philosophy">Philosophy</option>
<option value="Politics and Governance">Politics and Governance</option>
<option value="Social Works (SW)">Social Works (SW)</option>
</optgroup>
</select>';
$title_list = '<select name="title">
<option selected disabled>Title</option>
<optgroup label="Permanent">
<option value="Professor">Professor</option>
<option value="Associate Professor">Associate Professor</option>
<option value="Assistant Professor">Assistant Professor</option>
<option value="Lecturer">Lecturer</option>
</optgroup>
<optgroup label="Adjunct">
<option value="Adjunct Professor">Adjunct Professor</option>
<option value="Adjunct Associate Professor">Adjunct Associate Professor</option>
<option value="Adjunct Assistant Professor">Adjunct Assistant Professor</option>
<option value="Adjunct Lecturer">Adjunct Lecturer</option>
</optgroup>
</select>';
$group_list = '<select name="group_name">
<option selected disabled>Group</option>
<option value="Science">Science</option>
<option value="Commerce">Commerce</option>
<option value="Humanities">Humanities</option>
</select>';
$class_list = '<select name="class_number">
<option selected disabled>Class</option>
<option value="Play_Group">Play Group</option>
<option value="Nursery">Nursery</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="9">10</option>
<option value="9">11</option>
<option value="9">12</option>
</select>';
$section_list = '<select name="section">
<option selected disabled>Section</option>
<option value="A">A</option>
<option value="B">B</option>
<option value="C">C</option>
<option value="D">D</option>
</select>';
?>
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
<title>GhashPhul Educational Institution Management System</title>
<link rel="icon" type="image/webp" href="Icon.webp"/>
<meta name="description" content="An educational institution management system (by Abdullah As-Sadeed)"/>
<meta name="keywords" content="GhashPhul, Education, Institution, Management, System, DataBase, Abdullah, As-Sadeed, Sadeed"/>
<style>
<?php include_once "Include/Common.css"; ?>
html {
scroll-behavior: smooth;
}
@keyframes fade_in {
from {
opacity: 0;
}
to {
opacity: 1;
}
}
@keyframes errors {
50% {
color: red;
}
}
#container {
height: 100vh;
width: 100vw;
display: flex;
flex-flow: column;
}
#offline {
display: none;
width: 100%;
background-color: yellow;
padding: 5px;
text-align: center;
animation: fade_in 0.6s;
will-change: opacity;
}
.windows {
display: none;
}
hr {
height: 1px;
border: 0;
background-color: silver;
color: silver;
margin: 10px 0 10px 0;
}
form {
width: 100%;
text-align: center;
animation: fade_in 0.6s;
will-change: opacity;
}
.form_heading {
padding: 20px 0 10px 0;
font-size: 20px;
color: rgb(95, 95, 95);
font-weight: bold;
}
.field_set_heading {
padding: 0 0 10px 0;
font-size: 18px;
color: rgb(95, 95, 95);
font-weight: bold;
}
.field {
display: inline-block;
text-align: left;
margin: 15px;
vertical-align: middle;
}
.field_heading {
display: block;
font-size: small;
font-weight: bold;
letter-spacing: 1px;
margin: 0 0 1px 0;
}
input[type="text"], input[type="tel"], input[type="email"], input[type="password"], textarea {
user-select: text;
}
::selection {
background-color: rgb(182, 222, 183);
}
::-moz-selection {
background-color: rgb(182, 222, 183);
}
input[type="text"], input[type="tel"], input[type="email"], input[type="password"] {
width: 300px;
border-top: none;
border-right: none;
border-bottom: 2px solid silver;
border-left: none;
padding: 10px;
transition: border-bottom 0.6s;
}
input[type="password"] {
margin: 200px 0 0 0;
}
textarea {
min-height: 125px;
width: 300px;
border: none;
padding: 10px;
resize: vertical;
}
input[type="password"]:hover, input[type="password"]:focus, input[type="text"]:hover, input[type="text"]:focus, input[type="tel"]:hover, input[type="tel"]:focus, input[type="email"]:hover, input[type="email"]:focus {
border-bottom: 2px solid rgb(61, 140, 64);
}
input[type="text"]::-moz-placeholder {
font-size: 15px;
font-family: "Roboto", sans-serif;
}
input[type="text"]::-webkit-input-placeholder {
font-size: 15px;
font-family: "Roboto", sans-serif;
}
input[type="text"]::-o-input-placeholder {
font-size: 15px;
font-family: "Roboto", sans-serif;
}
input[type="tel"]::-moz-input-placeholder {
font-size: 15px;
font-family: "Roboto", sans-serif;
}
input[type="tel"]::-webkit-input-placeholder {
font-size: 15px;
font-family: "Roboto", sans-serif;
}
input[type="tel"]::-o-input-placeholder {
font-size: 15px;
font-family: "Roboto", sans-serif;
}
input[type="email"]::-moz-input-placeholder {
font-size: 15px;
font-family: "Roboto", sans-serif;
}
input[type="email"]::-webkit-input-placeholder {
font-size: 15px;
font-family: "Roboto", sans-serif;
}
input[type="email"]::-o-input-placeholder {
font-size: 15px;
font-family: "Roboto", sans-serif;
}
input[type="password"]::-moz-placeholder {
font-size: 15px;
font-family: "Roboto", sans-serif;
}
input[type="password"]::-webkit-input-placeholder {
font-size: 15px;
font-family: "Roboto", sans-serif;
}
input[type="password"]::-o-input-placeholder {
font-size: 15px;
font-family: "Roboto", sans-serif;
}
textarea::-moz-placeholder {
font-size: 14px;
font-family: "Roboto", sans-serif;
}
textarea::-webkit-input-placeholder {
font-size: 14px;
font-family: "Roboto", sans-serif;
}
textarea::-o-input-placeholder {
font-size: 14px;
font-family: "Roboto", sans-serif;
}
select {
max-width: 150px;
padding: 5px 10px 5px 10px;
font-size: 14px;
line-height: 1.6;
}
input[type="file"] {
display: none;
}
label {
width: 150px;
height: 150px;
border: 1px dashed grey;
background-color: white;
padding: 10px;
text-align: center;
color: rgb(95, 95, 95);
display: inline-block;
cursor: pointer;
transition: border 0.6s, color 0.6s;
}
label img {
max-width: 100%;
max-height: 100%;
}
label:hover, label:focus {
border: 1px dashed blue;
color: blue;
}
.form_error {
padding: 0 10px 0 10px;
color: rgb(95, 95, 95);
margin: 10px 0 0 0;
animation: errors 1.2s infinite;
will-change: color;
}
input[type="submit"] {
border: none;
border-radius: 25px;
background: rgb(76, 175, 80);
padding: 5px 15px 5px 15px;
font-size: 17px;
font-family: "Roboto", sans-serif;
color: white;
font-weight: bold;
margin: 10px 0 0 0;
transition: background 0.6s;
cursor: pointer;
}
input[type="submit"]:hover {
background: #3D8C40 radial-gradient(circle, transparent 1%, #3D8C40 1%) center/15000%;
}
input[type="submit"]:active {
background-color: rgb(197, 229, 197);
background-size: 100%;
transition: background 0s;
}
form[name="institution_log_in"] {
display: none;
}
#sadeed {
display: block;
width: 100%;
font-size: 15px;
letter-spacing: 1px;
color: rgb(95, 95, 95);
text-decoration: none;
margin: 100px 0 20px 0;
transition: color 0.6s;
position: fixed;
bottom: 10px;
left: 0;
}
#sadeed:hover, #sadeed:focus {
color: blue;
}
table {
border-collapse: collapse;
text-align: center;
}
#main_menu {
width: 100%;
display: none;
}
#main_menu th {
width: 20%;
border-bottom: 2px solid transparent;
background-color: rgb(76, 175, 80);
padding: 5px;
color: white;
transition: border-bottom 0.6s, background-color 0.6s, color 0.6s;
cursor: pointer;
}
#main_menu th:hover, #main_menu th:focus {
border-bottom: 2px solid rgb(76, 175, 80);
background-color: white;
color: rgb(76, 175, 80);
}
.active_tab {
border-bottom: 2px solid rgb(76, 175, 80) !important;
background-color: white !important;
color: rgb(76, 175, 80) !important;
}
.actions_container {
width: 100%;
padding: 15px;
}
.visible_count {
color: rgb(95, 95, 95);
font-weight: bold;
display: inline-block;
vertical-align: middle;
animation: fade_in 0.6s;
will-change: opacity;
padding: 7px 0 0 0;
}
.action {
border-top: 2px solid rgb(229, 229, 229);
border-right: 2px solid rgb(229, 229, 229);
border-bottom: 2px solid rgb(76, 175, 80);
border-left: 2px solid rgb(229, 229, 229);
border-radius: 5px;
background-color: white;
padding: 5px 10px 5px 10px;
color: rgb(61, 140, 64);
cursor: pointer;
display: inline-block;
vertical-align: middle;
float: right;
margin: 0 0 0 15px;
}
.action:hover, .action:focus {
animation: action_border 0.9s;
will-change: border-top, border-right, border-bottom, border-left;
}
@keyframes action_border {
33% {
border-right: 2px solid rgb(76, 175, 80);
}
66% {
border-top: 2px solid rgb(76, 175, 80);
}
100% {
border-left: 2px solid rgb(76, 175, 80);
}
}
.updates {
max-width: 100%;
overflow: scroll;
flex: 1;
animation: fade_in 0.6s;
will-change: opacity;
}
::-webkit-scrollbar {
width: 10px;
}
::-webkit-scrollbar-track {
background: white;
}
::-webkit-scrollbar-thumb {
border-radius: 5px;
background-color: orange;
}
::-webkit-scrollbar-thumb:hover {
background-color: magenta; 
}
.hidden_count {
display: none;
}
.records_table {
border: 1px solid silver;
color: black;
}
.records_table th, .records_table td {
border: 1px solid silver;
white-space: nowrap;
}
.records_table th {
background-color: rgb(95, 95, 95);
padding: 5px;
color: white;
font-size: 14px;
position: sticky;
-webkit-position: sticky;
top: 0;
z-index: 1;
}
.record {
transition: background-color 0.6s;
}
.record:hover, .record:focus {
background-color: white;
}
.records_table td {
padding: 1px 7px 1px 7px;
font-size: 13px;
}
.id_number {
color: rgb(95, 95, 95);
font-weight: bold;
}
.records_table img {
max-height: 20px;
max-width: 20px;
display: inline-block;
vertical-align: middle;
}
.edit_on_table, .delete_button {
font-weight: bold;
padding-right: 20px !important;
padding-left: 20px !important;
cursor: pointer;
}
.edit_on_table:hover, .edit_on_table:focus, .delete_button:hover, .delete_button:focus {
font-style: italic;
}
.edit_on_table {
color: rgb(61, 140, 64);
}
.delete_button {
color: red;
}
.query_form {
width: 100%;
background-color: rgb(164, 214, 165);
}
option[value="Bangladeshi"] {
background-color: lime;
font-weight: bold;
}
.query_form select {
display: inline-block;
vertical-align: middle;
margin: 10px 5px 10px 5px;
}
.query_form input[type="text"], .query_form input[type="tel"] {
width: 150px !important;
padding: 5px !important;
display: inline-block;
vertical-align: middle;
margin: 10px 5px 10px 5px;
}
form[name="student_entry"] {
padding-bottom: 50px;
}
#group_container {
animation: fade_in 0.6s;
will-change: opacity;
}
#loading_overlap {
height: 100%;
width: 100%;
padding-top: 200px;
text-align: center;
position: fixed;
top: 0;
left: 0;
z-index: 1;
cursor: wait;
}
</style>
</head>
<body lang="en-US">
<div id="container">
<noscript>Your web browser is forbidding GPEIMS to run JavaScript!</noscript>
<div id="h1_offline_container">
<h1>GPEIMS for<?php
$query_institution = mysqli_query($connection, "SELECT `Content` FROM `Institution` WHERE `Type` = 'Name';");
while($data_institution = mysqli_fetch_assoc($query_institution)) {
echo " " . $data_institution["Content"];
};
?></h1>
<table id="main_menu">
<tbody>
<tr>
<th>Teachers</th>
<th>Students</th>
<th>Staffs</th>
<th>Attendances</th>
<th>Examinations</th>
</tr>
</tbody>
</table>
<div id="offline">You are offline now!</div>
</div>
<form action="BackGround.php" name="institution_log_in" method="post">
<input type="password" name="confidential" autocomplete="off" placeholder="Institution's Confidential Code" title="Enter Institution's Confidential Code here"/>
<div id="institution_log_in_error" class="form_error"></div>
<input type="submit" value="Log In" title="Click to log in"/>
<a id="sadeed" title="The creator and owner of GPEIMS" target="_self" href="https://telechirkut.xyz/owner">&copy; Abdullah As-Sadeed</a>
</form>
<div class="actions_container windows teachers_windows" id="teachers_actions">
<span id="visible_teachers_count" class="visible_count"></span>
<span class="action" onclick='print_updates("teachers")'>Print</span>
<span id="teacher_entry_button" class="action">New Teacher</span>
<span id="reset_teachers_query" class="action">Fresh</span>
</div>
<div id="teachers_updates" class="updates windows teachers_windows"></div>
<form action="BackGround.php" name="teachers_query" method="post" class="query_form windows teachers_windows">
<input type="hidden" name="type" value="Teachers_Query"/>
<?php echo $department_list . $title_list . $blood_group_list . $gender_list . $nationality_list . $religion_list; ?>
<input type="text" autocomplete="off" class="english_name_query" name="teacher_name_english" placeholder="Teacher's Name" title="Enter teacher's name in English"/>
</form>
<form action="BackGround.php" name="teacher_entry" class="entry_form windows teachers_windows" method="post" enctype="multipart/form-data">
<div id="teacher_entry_form_heading" class="form_heading"></div>
<input type="hidden" name="type" value="Teacher_Entry"/>
<input type="hidden" name="id_number" value="ID_Number"/>
<hr/>
<span class="field">
<span class="field_heading">Teacher's Full Name</span>
<input type="text" autocomplete="off" class="english_name" name="teacher_name_english" placeholder="Teacher's Full Name" title="Enter teacher's full name in English"/>
</span>
<span class="field">
<span class="field_heading">শিক্ষকের পুরো নাম</span>
<input type="text" autocomplete="off" name="teacher_name_bangla" placeholder="শিক্ষকের পুরো নাম" title="Enter teacher's full name in Bangla"/>
</span>
<br/>
<span class="field">
<span class="field_heading">Father's Full Name</span>
<input type="text" autocomplete="off" class="english_name" name="father_name" placeholder="Father's Full Name" title="Enter father's full name"/>
</span>
<br/>
<span class="field">
<span class="field_heading">Mother's Full Name</span>
<input type="text" autocomplete="off" class="english_name" name="mother_name" placeholder="Mother's Full Name" title="Enter mother's full name"/>
</span>
<hr/>
<span class="field">
<span class="field_heading">Mobile Phone Number</span>
<input type="tel" autocomplete="off" name="mobile_number" placeholder="Mobile Phone Number" title="Enter mobile phone number"/>
</span>
<span class="field">
<span class="field_heading">Email Address</span>
<input type="email" autocomplete="off" name="email_address" placeholder="Email Address" title="Enter email address"/>
</span>
<br/>
<span class="field">
<span class="field_heading">Permanent Address</span>
<textarea autocomplete="off" name="permanent_address" placeholder="Permanent Address" title="Enter permanent address"></textarea>
</span>
<span class="field">
<span class="field_heading">Present Address</span>
<textarea autocomplete="off" name="present_address" placeholder="Present Address" title="Enter present address"></textarea>
</span>
<hr/>
<span class="field">
<span class="field_heading">Date of Birth</span>
<input type="date" name="date_of_birth"/>
</span>
<span class="field">
<span class="field_heading">Blood Group</span>
<?php echo $blood_group_list; ?>
</span>
<span class="field">
<span class="field_heading">Gender</span>
<?php echo $gender_list; ?>
</span>
<span class="field">
<span class="field_heading">Religion</span>
<?php echo $religion_list; ?>
</span>
<span class="field">
<span class="field_heading">Nationality</span>
<?php echo $nationality_list; ?>
</span>
<br/>
<span class="field">
<span class="field_heading">National Identity (NID) Card's Number</span>
<input type="tel" autocomplete="off" name="nid_number" placeholder="NID Card Number" title="Enter National Identity Card's Number"/>
</span>
<hr/>
<span class="field">
<span class="field_heading">Teacher's Snap</span>
<label for="teacher_snap_selector">
<img alt="Upload Snap of Teacher" src="" id="teacher_snap_preview"/>
</label>
<input type="file" accept="image/*" name="teacher_snap" id="teacher_snap_selector"/>
</span>
<hr/>
<span class="field">
<span class="field_heading">Date of Joining</span>
<input type="date" name="date_of_joining"/>
</span>
<span class="field">
<span class="field_heading">Department</span>
<?php echo $department_list; ?>
</span>
<span class="field">
<span class="field_heading">Title</span>
<?php echo $title_list; ?>
</span>
<hr/>
<span class="field">
<span class="field_heading">Previous Institution's Name</span>
<input type="text" autocomplete="off" name="previous_institution" placeholder="Previous Institution's Name" title="Enter previous institution's name"/>
</span>
<hr/>
<div id="teacher_entry_error" class="form_error"></div>
<input type="submit" value="" id="teacher_submit_button" title=""/>
</form>
<div class="actions_container students_windows windows" id="students_actions">
<span id="visible_students_count" class="visible_count"></span>
<span class="action" onclick='print_updates("students")'>Print</span>
<span id="student_entry_button" class="action">New Student</span>
<span id="reset_students_query" class="action">Fresh</span>
</div>
<div id="students_updates" class="updates students_windows windows"></div>
<form action="BackGround.php" name="students_query" method="post" class="query_form students_windows windows">
<input type="hidden" name="type" value="Students_Query"/>
<?php echo $class_list . $section_list . $group_list . $blood_group_list . $gender_list . $nationality_list . $religion_list; ?>
<br/>
<input type="text" autocomplete="off" class="english_name_query" name="student_name_english" placeholder="Student's Name" title="Enter student's name in English"/>
<input type="text" autocomplete="off" class="english_name_query" name="father_name_english" placeholder="Father's Name" title="Enter father's name in English"/>
<input type="text" autocomplete="off" class="english_name_query" name="mother_name_english" placeholder="Mother's Name" title="Enter mother's name in English"/>
<input type="text" autocomplete="off" name="permanent_address" placeholder="Permanent Address" title="Enter permanent address"/>
<input type="text" autocomplete="off" name="present_address" placeholder="Present Address" title="Enter present address"/>
<input type="tel" autocomplete="off" name="roll_number" placeholder="Class Roll Number" title="Enter class roll number"/>
</form>
<form action="BackGround.php" name="student_entry" class="entry_form windows students_windows" method="post" enctype="multipart/form-data">
<div id="student_entry_form_heading" class="form_heading"></div>
<input type="hidden" name="type" value=""/>
<input type="hidden" name="id_number" value="ID_Number"/>
<hr/>
<span class="field">
<span class="field_heading">Student's Full Name</span>
<input type="text" autocomplete="off" class="english_name" name="student_name_english" placeholder="Student's Full Name" title="Enter student's full name in English"/>
</span>
<span class="field">
<span class="field_heading">শিক্ষার্থীর পুরো নাম</span>
<input type="text" autocomplete="off" name="student_name_bangla" placeholder="শিক্ষার্থীর পুরো নাম" title="Enter students's full name in Bangla"/>
</span>
<br/>
<span class="field">
<span class="field_heading">Father's Full Name</span>
<input type="text" autocomplete="off" class="english_name" name="father_name_english" placeholder="Father's Full Name" title="Enter father's full name in English"/>
</span>
<span class="field">
<span class="field_heading">পিতার পুরো নাম</span>
<input type="text" autocomplete="off" name="father_name_bangla" placeholder="পিতার পুরো নাম" title="Enter father's full name in Bangla"/>
</span>
<br/>
<span class="field">
<span class="field_heading">Mother's Full Name</span>
<input type="text" autocomplete="off" class="english_name" name="mother_name_english" placeholder="Mother's Full Name" title="Enter mother's full name in English"/>
</span>
<span class="field">
<span class="field_heading">মাতার পুরো নাম</span>
<input type="text" autocomplete="off" name="mother_name_bangla" placeholder="মাতার পুরো নাম" title="Enter mother's full name in Bangla"/>
</span>
<hr/>
<span class="field">
<span class="field_heading">Father's Occupation</span>
<select name="father_occupation">
<option selected disabled>Father's Occupation</option>
<option value="Accountant">Accountant</option>
<option value="Artist or Actor or Singer">Artist or Actor or Singer</option>
<option value="Author">Author</option>
<option value="Blacksmith">Blacksmith</option>
<option value="Boatman">Boatman</option>
<option value="Businessman">Businessman</option>
<option value="Butcher">Butcher</option>
<option value="Caretaker or Doorman">Caretaker or Doorman</option>
<option value="Cashier">Cashier</option>
<option value="Chef or Cook">Chef or Cook</option>
<option value="Clerk">Clerk</option>
<option value="Cobbler">Cobbler</option>
<option value="Doctor or Dentist">Doctor or Dentist</option>
<option value="Engineer">Engineer</option>
<option value="Farmer">Farmer</option>
<option value="Fisherman">Fisherman</option>
<option value="Garbage Man">Garbage Man</option>
<option value="Graphics Designer or Animator">Graphics Designer or Animator</option>
<option value="Hawker">Hawker</option>
<option value="Imam of Mosque">Imam of Mosque</option>
<option value="Jeweler">Jeweler</option>
<option value="Journalist">Journalist</option>
<option value="Justice or Judge">Justice or Judge</option>
<option value="Labourer">Labourer</option>
<option value="Lawyer">Lawyer</option>
<option value="Maker">Maker</option>
<option value="Pilot">Pilot</option>
<option value="Pion">Pion</option>
<option value="Policeman">Policeman</option>
<option value="Politician">Politician</option>
<option value="Potter">Potter</option>
<option value="Scientist">Scientist</option>
<option value="Soldier">Soldier</option>
<option value="Shop Assistant or Waiter">Shop Assistant or Waiter</option>
<option value="Tailor">Tailor</option>
<option value="Teacher">Teacher</option>
<option value="Weaver">Weaver</option>
<option value="Service Holder">(Other) Service Holder</option>
<option value="Other">Other</option>
</select>
</span>
<span class="field">
<span class="field_heading">Mother's Occupation</span>
<select name="mother_occupation">
<option selected disabled>Mother's Occupation</option>
<option value="Accountant">Accountant</option>
<option value="Artist or Actor or Singer">Artist or Actor or Singer</option>
<option value="Author">Author</option>
<option value="Blacksmith">Blacksmith</option>
<option value="Boatman">Boatman</option>
<option value="Businessman">Businessman</option>
<option value="Butcher">Butcher</option>
<option value="Caretaker or Doorman">Caretaker or Doorman</option>
<option value="Cashier">Cashier</option>
<option value="Chef or Cook">Chef or Cook</option>
<option value="Clerk">Clerk</option>
<option value="Cobbler">Cobbler</option>
<option value="Doctor or Dentist">Doctor or Dentist</option>
<option value="Engineer">Engineer</option>
<option value="Farmer">Farmer</option>
<option value="Fisherman">Fisherman</option>
<option value="Garbage Man">Garbage Man</option>
<option value="Graphics Designer or Animator">Graphics Designer or Animator</option>
<option value="Hawker">Hawker</option>
<option value="Housewife">Housewife</option>
<option value="Jeweler">Jeweler</option>
<option value="Journalist">Journalist</option>
<option value="Justice or Judge">Justice or Judge</option>
<option value="Labourer">Labourer</option>
<option value="Lawyer">Lawyer</option>
<option value="Maker">Maker</option>
<option value="Pilot">Pilot</option>
<option value="Pion">Pion</option>
<option value="Policeman">Policeman</option>
<option value="Politician">Politician</option>
<option value="Potter">Potter</option>
<option value="Scientist">Scientist</option>
<option value="Soldier">Soldier</option>
<option value="Shop Assistant or Waiter">Shop Assistant or Waiter</option>
<option value="Tailor">Tailor</option>
<option value="Teacher">Teacher</option>
<option value="Weaver">Weaver</option>
<option value="Service Holder">(Other) Service Holder</option>
<option value="Other">Other</option>
</select>
</span>
<br/>
<span class="field">
<span class="field_heading">Father's Annual Income (BDT)</span>
<input type="tel" autocomplete="off" name="father_income" placeholder="Father's Annual Income (BDT)" title="Enter father's annual income in Bangladeshi Taka"/>
</span>
<hr/>
<span class="field">
<span class="field_heading">Father's Mobile Phone Number</span>
<input type="tel" autocomplete="off" name="father_phone" placeholder="Father's Mobile Phone Number" title="Enter father's mobile phone number"/>
</span>
<span class="field">
<span class="field_heading">Mother's Mobile Phone Number</span>
<input type="tel" autocomplete="off" name="mother_phone" placeholder="Mother's Mobile Phone Number" title="Enter mother's mobile phone number"/>
</span>
<br/>
<span class="field">
<span class="field_heading">Email Address</span>
<input type="email" autocomplete="off" name="email_address" placeholder="Email Address" title="Enter email address"/>
</span>
<br/>
<span class="field">
<span class="field_heading">Permanent Address</span>
<textarea autocomplete="off" name="permanent_address" placeholder="Permanent Address" title="Enter permanent address"></textarea>
</span>
<span class="field">
<span class="field_heading">Present Address</span>
<textarea autocomplete="off" name="present_address" placeholder="Present Address" title="Enter present address"></textarea>
</span>
<hr/>
<span class="field">
<span class="field_heading">Date of Birth</span>
<input type="date" name="date_of_birth"/>
</span>
<span class="field">
<span class="field_heading">Gender</span>
<?php echo $gender_list; ?>
</span>
<span class="field">
<span class="field_heading">Blood Group</span>
<?php echo $blood_group_list; ?>
</span>
<span class="field">
<span class="field_heading">Nationality</span>
<?php echo $nationality_list; ?>
</span>
<span class="field">
<span class="field_heading">Religion</span>
<?php echo $religion_list; ?>
</span>
<hr/>
<span class="field">
<span class="field_heading">Student's snap</span>
<label for="student_snap_selector">
<img alt="Upload Snap of Student" src="" id="student_snap_preview"/>
</label>
<input type="file" accept="image/*" name="student_snap" id="student_snap_selector"/>
</span>
<span class="field">
<span class="field_heading">Father's snap</span>
<label for="father_snap_selector">
<img alt="Upload Snap of Father" src="" id="father_snap_preview"/>
</label>
<input type="file" accept="image/*" name="father_snap" id="father_snap_selector"/>
</span>
<span class="field">
<span class="field_heading">Mother's snap</span>
<label for="mother_snap_selector">
<img alt="Upload Snap of Mother" src="" id="mother_snap_preview"/>
</label>
<input type="file" accept="image/*" name="mother_snap" id="mother_snap_selector"/>
</span>
<hr/>
<div class="field_set_heading">Guardian in absence of parents</div>
<span class="field">
<span class="field_heading">Guardian's Full Name</span>
<input type="text" autocomplete="off" class="english_name" name="guardian_name" placeholder="Guardian's Full Name" title="Enter guardian's full name"/>
</span>
<span class="field">
<span class="field_heading">Guardian's Mobile Phone Number</span>
<input type="tel" autocomplete="off" name="guardian_phone" placeholder="Guardian's Mobile Phone Number" title="Enter guardian's mobile phone number"/>
</span>
<span class="field">
<span class="field_heading">Relationship with guardian</span>
<input type="text" autocomplete="off" name="guardian_relation" placeholder="Relationship with Guardian" title="Enter relationship between student and guardian"/>
</span>
<br/>
<span class="field">
<span class="field_heading">Guardian's snap</span>
<label for="guardian_snap_selector">
<img alt="Upload Snap of Guardian" src="" id="guardian_snap_preview"/>
</label>
<input type="file" accept="image/*" name="guardian_snap" id="guardian_snap_selector"/>
</span>
<hr/>
<span class="field">
<span class="field_heading">Class</span>
<?php echo $class_list; ?>
</span>
<span class="field">
<span class="field_heading">Section</span>
<?php echo $section_list; ?>
</span>
<span class="field" id="group_container">
<span class="field_heading">Group</span>
<?php echo $group_list; ?>
</span>
<span class="field">
<span class="field_heading">Class Roll Number</span>
<input type="tel" autocomplete="off" name="roll_number" placeholder="Class Roll Number" title="Enter class roll number"/>
</span>
<span class="field">
<span class="field_heading">Date of Admission</span>
<input type="date" name="date_of_admission"/>
</span>
<hr/>
<div class="field_set_heading">Previous Institution</div>
<span class="field">
<span class="field_heading">Previous Institution's Name</span>
<input type="text" autocomplete="off" name="previous_institution" placeholder="Previous Institution's Name" title="Enter previous institution's name"/>
</span>
<span class="field">
<span class="field_heading">Previous Class</span>
<select name="previous_class">
<option selected disabled>Previous Class</option>
<option value="Play_Group">Play Group</option>
<option value="Nursery">Nursery</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
</select>
</span>
<hr/>
<div id="student_entry_error"></div>
<input type="submit" value="" id="student_submit_button" title=""/>
</form>
<div id="loading_overlap">
<img src="Loading.svg" alt="Loading..."/>
</div>
</div>
<form action="BackGround.php" name="teachers_view_requester" method="post">
<input type="hidden" value="View_Teachers" name="type"/>
</form>
<form id="teacher_deletion" action="BackGround.php" method="post">
<input type="hidden" value="Teacher_Deletion" name="type"/>
<input type="hidden" value="ID_Number" name="id_number"/>
</form>
<form action="BackGround.php" name="students_view_requester" method="post">
<input type="hidden" value="View_Students" name="type"/>
</form>
<form id="student_deletion" action="BackGround.php" method="post">
<input type="hidden" value="Student_Deletion" name="type"/>
<input type="hidden" value="ID_Number" name="id_number"/>
</form>
<div id="printing_alert">Printing any portion of GPEIMS is forbidden!</div>
<script>
<?php
include_once "Include/Common.js";
include_once "Include/Connectivity_Status.js";
?>
var loading_overlap = document.getElementById("loading_overlap").style;
var institution_log_in_form = document.institution_log_in;
var confidential_field = institution_log_in_form.confidential;
var institution_log_in_error = document.getElementById("institution_log_in_error");
var main_menu = document.getElementById("main_menu").style;
var teachers_actions = document.getElementById("teachers_actions");
var teachers_updates = document.getElementById("teachers_updates");
var teachers_query_form = document.teachers_query;
var teacher_entry_form = document.teacher_entry;
var teacher_entry_form_heading = document.getElementById("teacher_entry_form_heading");
var entered_teacher = 0;
var teacher_submit_button = document.getElementById("teacher_submit_button");
var teacher_deletion_form = document.getElementById("teacher_deletion");
var students_actions = document.getElementById("students_actions");
var students_updates = document.getElementById("students_updates");
var students_query_form = document.students_query;
var student_entry_form = document.student_entry;
var student_entry_form_heading = document.getElementById("student_entry_form_heading");
var entered_student = 0;
var student_snap_selector = student_entry_form.student_snap;
var father_snap_selector = student_entry_form.father_snap;
var mother_snap_selector = student_entry_form.mother_snap;
var guardian_snap_selector = student_entry_form.guardian_snap;
var class_selector = student_entry_form.class_number;
var group_container = document.getElementById("group_container").style;
var group_selector = student_entry_form.group_name;
var student_submit_button = document.getElementById("student_submit_button");
var student_deletion_form = document.getElementById("student_deletion");
window.onload = function() {
var xhr = new XMLHttpRequest();
xhr.open("GET", "BackGround.php");
xhr.send();
xhr.onload = function() {
var xhr_response = xhr.responseText;
if(xhr_response == "Empty") {
institution_log_in_form.style.display = "block";
confidential_field.focus();
} else if(xhr_response == "Allowed") {
main_menu.display = "table";
};
loading_overlap.display = "none";
};
};
Array.prototype.forEach.call(document.querySelectorAll("#main_menu th"), function(clicked_tab) {
clicked_tab.onclick = function() {
Array.prototype.forEach.call(document.querySelectorAll("#main_menu th"), function(tabs) {
tabs.classList.remove("active_tab");
});
Array.prototype.forEach.call(document.querySelectorAll(".windows"), function(windows) {
windows.style.display = "none";
});
clicked_tab.classList.add("active_tab");
var active_windows = "." + clicked_tab.innerHTML.toLowerCase() + "_windows";
Array.prototype.forEach.call(document.querySelectorAll(active_windows), function(windows) {
windows.style.display = "block";
});
Array.prototype.forEach.call(document.querySelectorAll(".entry_form"), function(entry_forms) {
entry_forms.style.display = "none";
});
if(active_windows == ".students_windows") {
students_query_form.reset();
entered_student = 0;
request_view_students();
} else if(active_windows == ".teachers_windows") {
teachers_query_form.reset();
entered_teacher = 0;
request_view_teachers();
};
};
});
function requesting_submission(form, callback) {
var data = new FormData(form);
var xhr = new XMLHttpRequest();
loading_overlap.display = "block";
xhr.open(form.method, form.action);
xhr.send(data);
xhr.onload = function() {
callback(this);
loading_overlap.display = "none";
if(form != teachers_query_form && form != students_query_form) {
form.reset();
};
};
};
institution_log_in_form.onsubmit = function(submission) {
submission.preventDefault();
if(confidential_field.value != "") {
institution_log_in_error.innerHTML = "";
requesting_submission(institution_log_in_form, function(xhr) {
var xhr_response = xhr.responseText;
if(xhr_response == "Denied") {
institution_log_in_error.innerHTML = "Your entered Institution's Confidential Code was invalid!";
} else if(xhr_response == "Allowed") {
institution_log_in_error.innerHTML = "";
institution_log_in_form.style.display = "none";
main_menu.display = "table";
};
});
} else {
institution_log_in_error.innerHTML = "Enter Institution's Confidential Code!";
return false;
};
};
document.getElementById("reset_teachers_query").onclick = function() {
teachers_query_form.reset();
entered_teacher = 0;
request_view_teachers();
};
document.getElementById("reset_students_query").onclick = function() {
students_query_form.reset();
entered_student = 0;
request_view_students();
};
function query_teachers() {
requesting_submission(document.teachers_query, view_teachers);
};
function query_students() {
requesting_submission(document.students_query, view_students);
};
Array.prototype.forEach.call(document.querySelectorAll('form[name="teachers_query"] select'), function(teachers_query_selections) {
teachers_query_selections.onchange = function() {
query_teachers();
};
});
Array.prototype.forEach.call(document.querySelectorAll('form[name="students_query"] select'), function(students_query_selections) {
students_query_selections.onchange = function() {
query_students();
};
});
Array.prototype.forEach.call(document.querySelectorAll('form[name="teachers_query"] input[type="text"]'), function(teachers_query_texts) {
teachers_query_texts.onkeyup = function() {
if(teachers_query_texts.classList.contains("english_name_query")) {
teachers_query_texts.value = teachers_query_texts.value.toUpperCase();
};
query_teachers();
};
});
Array.prototype.forEach.call(document.querySelectorAll('form[name="students_query"] input[type="text"]'), function(students_query_texts) {
students_query_texts.onkeyup = function() {
if(students_query_texts.classList.contains("english_name_query")) {
students_query_texts.value = students_query_texts.value.toUpperCase();
};
query_students();
};
});
Array.prototype.forEach.call(document.querySelectorAll('form[name="students_query"] input[type="tel"]'), function(students_query_numbers) {
students_query_numbers.onkeyup = function() {
query_students();
};
});
function view_teachers(xhr) {
teachers_actions.style.display = "block";
teachers_updates.style.display = "block";
teachers_query_form.style.display = "block";
teachers_updates.innerHTML = xhr.responseText;
document.getElementById("visible_teachers_count").innerHTML = document.getElementById("hidden_teachers_count").innerHTML;
if(entered_teacher != 0) {
entered_teacher = document.getElementById("teacher_" + entered_teacher);
entered_teacher.style.backgroundColor = "yellow";
entered_teacher.scrollIntoView();
};
};
function view_students(xhr) {
students_actions.style.display = "block";
students_updates.style.display = "block";
students_query_form.style.display = "block";
students_updates.innerHTML = xhr.responseText;
document.getElementById("visible_students_count").innerHTML = document.getElementById("hidden_students_count").innerHTML;
if(entered_student != 0) {
entered_student = document.getElementById("student_" + entered_student);
entered_student.style.backgroundColor = "yellow";
entered_student.scrollIntoView();
};
};
function request_view_teachers() {
teacher_entry_form.style.display = "none";
requesting_submission(document.teachers_view_requester, view_teachers);
};
function request_view_students() {
student_entry_form.style.display = "none";
requesting_submission(document.students_view_requester, view_students);
};
function view_teacher_entry_form() {
teachers_actions.style.display = "none";
teachers_updates.style.display = "none";
teachers_query_form.style.display = "none";
teacher_entry_form.style.display = "block";
};
function view_student_entry_form() {
students_actions.style.display = "none";
students_updates.style.display = "none";
students_query_form.style.display = "none";
student_entry_form.style.display = "block";
};
document.getElementById("teacher_entry_button").onclick = function() {
teacher_entry_form.reset();
view_teacher_entry_form();
teacher_entry_form_heading.innerHTML = "New Teacher";
teacher_entry_form.type.value = "Teacher_Entry";
teacher_entry_form.id_number.disabled = true;
teacher_submit_button.value = "Entry Teacher";
teacher_submit_button.title = "Click to entry this teacher";
};
document.getElementById("student_entry_button").onclick = function() {
student_entry_form.reset();
view_student_entry_form();
student_entry_form_heading.innerHTML = "New Student";
student_entry_form.type.value = "Student_Entry";
student_entry_form.id_number.disabled = true;
student_submit_button.value = "Entry Student";
student_submit_button.title = "Click to entry this student";
};
Array.prototype.forEach.call(document.querySelectorAll(".english_name"), function(english_name) {
english_name.onkeyup = function() {
english_name.value = english_name.value.toUpperCase();
};
});
function preview_image(input, output) {
var previewer = new FileReader();
previewer.onload = function(selection) {
document.getElementById(output).src = selection.target.result;
};
previewer.readAsDataURL(input.files[0]);
};
teacher_snap_selector.onchange = function() {
preview_image(this, "teacher_snap_preview");
};
student_snap_selector.onchange = function() {
preview_image(this, "student_snap_preview");
};
father_snap_selector.onchange = function() {
preview_image(this, "father_snap_preview");
};
mother_snap_selector.onchange = function() {
preview_image(this, "mother_snap_preview");
};
guardian_snap_selector.onchange = function() {
preview_image(this, "guardian_snap_preview");
};
class_selector.onchange = function() {
if(class_selector.value > 8) {
group_selector.disabled = false;
group_container.display = "inline-block";
} else {
group_selector.disabled = true;
group_container.display = "none";
};
};
teacher_entry_form.onsubmit = function(submission) {
submission.preventDefault();
requesting_submission(teacher_entry_form, function(xhr) {
Array.prototype.forEach.call(document.querySelectorAll("label img"), function(previewed_image) {
previewed_image.src = "";
});
entered_teacher = xhr.responseText;
request_view_teachers();
});
};
student_entry_form.onsubmit = function(submission) {
submission.preventDefault();
requesting_submission(student_entry_form, function(xhr) {
Array.prototype.forEach.call(document.querySelectorAll("label img"), function(previewed_image) {
previewed_image.src = "";
});
entered_student = xhr.responseText;
request_view_students();
});
};
function edit_teacher(id_number) {
view_teacher_entry_form();
teacher_entry_form_heading.innerHTML = "Edit Teacher";
teacher_entry_form.type.value = "Edit_Teacher";
teacher_entry_form.id_number.disabled = false;
teacher_entry_form.id_number.value = id_number;
teacher_entry_form.teacher_name_english.value = document.getElementById("teacher_name_english_" + id_number).innerHTML;
teacher_entry_form.teacher_name_bangla.value = document.getElementById("teacher_name_bangla_" + id_number).innerHTML;
teacher_entry_form.father_name.value = document.getElementById("teacher_father_name_" + id_number).innerHTML;
teacher_entry_form.mother_name.value = document.getElementById("teacher_mother_name_" + id_number).innerHTML;
teacher_entry_form.mobile_number.value = document.getElementById("teacher_mobile_number_" + id_number).innerHTML;
teacher_entry_form.email_address.value = document.getElementById("teacher_email_address_" + id_number).innerHTML;
teacher_entry_form.permanent_address.value = document.getElementById("teacher_permanent_address_" + id_number).innerHTML;
teacher_entry_form.present_address.value = document.getElementById("teacher_present_address_" + id_number).innerHTML;
teacher_entry_form.date_of_birth.value = document.getElementById("teacher_date_of_birth_" + id_number).innerHTML;
teacher_entry_form.blood_group.value = document.getElementById("teacher_blood_group_" + id_number).innerHTML;
teacher_entry_form.gender.value = document.getElementById("teacher_gender_" + id_number).innerHTML;
teacher_entry_form.religion.value = document.getElementById("teacher_religion_" + id_number).innerHTML;
teacher_entry_form.nationality.value = document.getElementById("teacher_nationality_" + id_number).innerHTML;
teacher_entry_form.nid_number.value = document.getElementById("teacher_nid_number_" + id_number).innerHTML;
teacher_entry_form.date_of_joining.value = document.getElementById("teacher_date_of_joining_" + id_number).innerHTML;
teacher_entry_form.department.value = document.getElementById("teacher_department_" + id_number).innerHTML;
teacher_entry_form.title.value = document.getElementById("teacher_title_" + id_number).innerHTML;
teacher_entry_form.previous_institution.value = document.getElementById("teacher_previous_institution_" + id_number).innerHTML;
teacher_submit_button.value = "Edit Teacher";
teacher_submit_button.title = "Click to edit this teacher";
};
function edit_student(id_number) {
view_student_entry_form();
student_entry_form_heading.innerHTML = "Edit Student";
student_entry_form.type.value = "Edit_Student";
student_entry_form.id_number.disabled = false;
student_entry_form.id_number.value = id_number;
student_entry_form.student_name_english.value = document.getElementById("student_name_english_" + id_number).innerHTML;
student_entry_form.student_name_bangla.value = document.getElementById("student_name_bangla_" + id_number).innerHTML;
student_entry_form.father_name_english.value = document.getElementById("student_father_name_english_" + id_number).innerHTML;
student_entry_form.father_name_bangla.value = document.getElementById("student_father_name_bangla_" + id_number).innerHTML;
student_entry_form.mother_name_english.value = document.getElementById("student_mother_name_english_" + id_number).innerHTML;
student_entry_form.mother_name_bangla.value = document.getElementById("student_mother_name_bangla_" + id_number).innerHTML;
student_entry_form.father_occupation.value = document.getElementById("student_father_occupation_" + id_number).innerHTML;
student_entry_form.mother_occupation.value = document.getElementById("student_mother_occupation_" + id_number).innerHTML;
student_entry_form.father_income.value = document.getElementById("student_father_income_" + id_number).innerHTML;
student_entry_form.father_phone.value = document.getElementById("student_father_phone_" + id_number).innerHTML;
student_entry_form.mother_phone.value = document.getElementById("student_mother_phone_" + id_number).innerHTML;
student_entry_form.email_address.value = document.getElementById("student_email_address_" + id_number).innerHTML;
student_entry_form.permanent_address.value = document.getElementById("student_permanent_address_" + id_number).innerHTML;
student_entry_form.present_address.value = document.getElementById("student_present_address_" + id_number).innerHTML;
student_entry_form.date_of_birth.value = document.getElementById("student_date_of_birth_" + id_number).innerHTML;
student_entry_form.gender.value = document.getElementById("student_gender_" + id_number).innerHTML;
student_entry_form.religion.value = document.getElementById("student_religion_" + id_number).innerHTML;
student_entry_form.blood_group.value = document.getElementById("student_blood_group_" + id_number).innerHTML;
student_entry_form.nationality.value = document.getElementById("student_nationality_" + id_number).innerHTML;
student_entry_form.guardian_name.value = document.getElementById("student_guardian_name_" + id_number).innerHTML;
student_entry_form.guardian_phone.value = document.getElementById("student_guardian_phone_" + id_number).innerHTML;
student_entry_form.guardian_relation.value = document.getElementById("student_guardian_relation_" + id_number).innerHTML;
student_entry_form.class_number.value = document.getElementById("student_class_number_" + id_number).innerHTML;
student_entry_form.section.value = document.getElementById("student_section_" + id_number).innerHTML;
student_entry_form.group_name.value = document.getElementById("student_group_name_" + id_number).innerHTML;
student_entry_form.roll_number.value = document.getElementById("student_roll_number_" + id_number).innerHTML;
student_entry_form.date_of_admission.value = document.getElementById("student_date_of_admission_" + id_number).innerHTML;
student_entry_form.previous_institution.value = document.getElementById("student_previous_institution_" + id_number).innerHTML;
student_entry_form.previous_class.value = document.getElementById("student_previous_class_" + id_number).innerHTML;
student_submit_button.value = "Edit Student";
student_submit_button.title = "Click to edit this student";
};
function delete_teacher(id_number) {
if(confirm("Are you sure to delete the teacher bearing ID number " + id_number + "?") == true) {
teacher_deletion_form.id_number.value = id_number;
requesting_submission(teacher_deletion_form, function() {
alert("Successful Deletion");
entered_teacher = 0;
request_view_teachers();
});
};
};
function delete_student(id_number) {
if(confirm("Are you sure to delete the student bearing ID number " + id_number + "?") == true) {
student_deletion_form.id_number.value = id_number;
requesting_submission(student_deletion_form, function() {
alert("Successful Deletion");
entered_student = 0;
request_view_students();
});
};
};
function print_updates(active_updates) {
var printing_window = window.open("", "", "width=900, height=650");
printing_window.document.write('<html><head><title>GPEIMS Print</title><link rel="stylesheet" href="Print_Updates.css" type="text/css"/></head><body>');
printing_window.document.write(document.getElementById(active_updates + "_updates").innerHTML);
printing_window.document.write("</body></html>");
setTimeout(function() {
printing_window.document.close();
printing_window.focus();
printing_window.print();
printing_window.close();
}, 3000);
};
</script>
</body>
</html>
<?php
mysqli_close($connection);
exit();
?>
