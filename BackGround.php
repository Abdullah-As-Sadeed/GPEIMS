<?php
/* By Abdullah As-Sadeed */
session_start();
function convert_image($input_file, $output_file) {
$image_type = exif_imagetype($input_file);
if($image_type == IMAGETYPE_GIF) {
$image_file = imagecreatefromgif($input_file);
} elseif($image_type == IMAGETYPE_JPEG) {
$image_file = imagecreatefromjpeg($input_file);
} elseif($image_type == IMAGETYPE_PNG) {
$image_file = imagecreatefrompng($input_file);
} elseif($image_type == IMAGETYPE_GIF) {
$image_file = imagecreatefromgif($input_file);
} elseif($image_type == IMAGETYPE_BMP) {
$image_file = imagecreatefrombmp($input_file);
} elseif($image_type == IMAGETYPE_WBMP) {
$image_file = imagecreatefromwbmp($input_file);
} elseif($image_type == IMAGETYPE_XBM) {
$image_file = imagecreatefromxbm($input_file);
} elseif($image_type == IMAGETYPE_WEBP) {
$image_file = imagecreatefromwebp($input_file);
};
imagewebp($image_file, $output_file);
imagedestroy($image_file);
};
if($_POST["confidential"]) {
$_SESSION["Institution_Confidential"] = $_POST["confidential"];
};
if($_SESSION["Institution_Confidential"]) {
require_once "Include/DataBase_Connection.php";
$query_institution = mysqli_query($connection, "SELECT `Content` FROM `Institution` WHERE `Type` = 'Confidential';");
while($data_institution = mysqli_fetch_assoc($query_institution)) {
$institution_confidential = $data_institution["Content"];
};
if($institution_confidential == $_SESSION["Institution_Confidential"]) {
if($_SERVER["REQUEST_METHOD"] == "POST" && $_POST["type"]) {
$type = $_POST["type"];
if($type == "Student_Entry" || $type == "Edit_Student") {
$student_name_english = strip_tags(mysqli_real_escape_string($connection, $_POST["student_name_english"]));
$student_name_bangla = strip_tags(mysqli_real_escape_string($connection, $_POST["student_name_bangla"]));
$father_name_english = strip_tags(mysqli_real_escape_string($connection, $_POST["father_name_english"]));
$father_name_bangla = strip_tags(mysqli_real_escape_string($connection, $_POST["father_name_bangla"]));
$mother_name_english = strip_tags(mysqli_real_escape_string($connection, $_POST["mother_name_english"]));
$mother_name_bangla = strip_tags(mysqli_real_escape_string($connection, $_POST["mother_name_bangla"]));
$father_occupation = strip_tags(mysqli_real_escape_string($connection, $_POST["father_occupation"]));
$mother_occupation = strip_tags(mysqli_real_escape_string($connection, $_POST["mother_occupation"]));
$father_income = strip_tags(mysqli_real_escape_string($connection, $_POST["father_income"]));
$father_phone = strip_tags(mysqli_real_escape_string($connection, $_POST["father_phone"]));
$mother_phone = strip_tags(mysqli_real_escape_string($connection, $_POST["mother_phone"]));
$email_address = strip_tags(mysqli_real_escape_string($connection, $_POST["email_address"]));
$permanent_address = strip_tags(mysqli_real_escape_string($connection, $_POST["permanent_address"]));
$present_address = strip_tags(mysqli_real_escape_string($connection, $_POST["present_address"]));
$date_of_birth = strip_tags(mysqli_real_escape_string($connection, $_POST["date_of_birth"]));
$blood_group = strip_tags(mysqli_real_escape_string($connection, $_POST["blood_group"]));
$gender = strip_tags(mysqli_real_escape_string($connection, $_POST["gender"]));
$religion = strip_tags(mysqli_real_escape_string($connection, $_POST["religion"]));
$nationality = strip_tags(mysqli_real_escape_string($connection, $_POST["nationality"]));
$guardian_name = strip_tags(mysqli_real_escape_string($connection, $_POST["guardian_name"]));
$guardian_phone = strip_tags(mysqli_real_escape_string($connection, $_POST["guardian_phone"]));
$guardian_relation = strip_tags(mysqli_real_escape_string($connection, $_POST["guardian_relation"]));
$class_number = strip_tags(mysqli_real_escape_string($connection, $_POST["class_number"]));
$section = strip_tags(mysqli_real_escape_string($connection, $_POST["section"]));
$group_name = strip_tags(mysqli_real_escape_string($connection, $_POST["group_name"]));
$roll_number = strip_tags(mysqli_real_escape_string($connection, $_POST["roll_number"]));
$date_of_admission = strip_tags(mysqli_real_escape_string($connection, $_POST["date_of_admission"]));
$previous_institution = strip_tags(mysqli_real_escape_string($connection, $_POST["previous_institution"]));
$previous_class = strip_tags(mysqli_real_escape_string($connection, $_POST["previous_class"]));
if($type == "Student_Entry") {
mysqli_query($connection, "INSERT INTO `Students`(`Student_Name_English`, `Student_Name_Bangla`, `Father_Name_English`, `Father_Name_Bangla`, `Mother_Name_English`, `Mother_Name_Bangla`, `Father_Occupation`, `Mother_Occupation`, `Father_Income`, `Father_Phone`, `Mother_Phone`, `Email_Address`, `Permanent_Address`, `Present_Address`, `Date_of_Birth`, `Blood_Group`, `Gender`, `Religion`, `Nationality`, `Guardian_Name`, `Guardian_Phone`, `Guardian_Relation`, `Class_Number`, `Section`, `Group_Name`, `Roll_Number`, `Date_of_Admission`, `Previous_Institution`, `Previous_Class`) VALUES ('$student_name_english', '$student_name_bangla', '$father_name_english', '$father_name_bangla', '$mother_name_english', '$mother_name_bangla', '$father_occupation', '$mother_occupation', '$father_income', '$father_phone', '$mother_phone', '$email_address', '$permanent_address', '$present_address', '$date_of_birth', '$blood_group', '$gender', '$religion', '$nationality', '$guardian_name', '$guardian_phone', '$guardian_relation', '$class_number', '$section', '$group_name', '$roll_number', '$date_of_admission', '$previous_institution', '$previous_class');");
$id_number = mysqli_insert_id($connection);
} elseif($type == "Edit_Student") {
$id_number = strip_tags(mysqli_real_escape_string($connection, $_POST["id_number"]));
mysqli_query($connection, "UPDATE `Students` SET `Student_Name_English` = '$student_name_english', `Student_Name_Bangla` = '$student_name_bangla', `Father_Name_English` = '$father_name_english', `Father_Name_Bangla` = '$father_name_bangla', `Mother_Name_English` = '$mother_name_english', `Mother_Name_Bangla` = '$mother_name_bangla', `Father_Occupation` = '$father_occupation', `Mother_Occupation` = '$mother_occupation', `Father_Income` = '$father_income', `Father_Phone` = '$father_phone', `Mother_Phone` = '$mother_phone', `Email_Address` = '$email_address', `Permanent_Address` = '$permanent_address', `Present_Address` = '$present_address', `Date_of_Birth` = '$date_of_birth', `Blood_Group` = '$blood_group', `Gender` = '$gender', `Religion` = '$religion', `Nationality` = '$nationality', `Guardian_Name` = '$guardian_name', `Guardian_Phone` = '$guardian_phone', `Guardian_Relation` = '$guardian_relation', `Class_Number` = '$class_number', `Section` = '$section', `Group_Name` = '$group_name', `Roll_Number` = '$roll_number', `Date_of_Admission` = '$date_of_admission', `Previous_Institution` = '$previous_institution', `Previous_Class` = '$previous_class' WHERE `ID_Number` = '$id_number';");
};
if(is_uploaded_file($_FILES["student_snap"]["tmp_name"])) {
$student_snap = $_FILES["student_snap"]["tmp_name"];
if(getimagesize($student_snap)) {
convert_image($student_snap, "Faces/Student_" . $id_number . ".webp");
};
};
if(is_uploaded_file($_FILES["father_snap"]["tmp_name"])) {
$father_snap = $_FILES["father_snap"]["tmp_name"];
if(getimagesize($father_snap)) {
convert_image($father_snap, "Faces/Father_" . $id_number . ".webp");
};
};
if(is_uploaded_file($_FILES["mother_snap"]["tmp_name"])) {
$mother_snap = $_FILES["mother_snap"]["tmp_name"];
if(getimagesize($mother_snap)) {
convert_image($mother_snap, "Faces/Mother_" . $id_number . ".webp");
};
};
if(is_uploaded_file($_FILES["guardian_snap"]["tmp_name"])) {
$guardian_snap = $_FILES["guardian_snap"]["tmp_name"];
if(getimagesize($guardian_snap)) {
convert_image($guardian_snap, "Faces/Guardian_" . $id_number . ".webp");
};
};
echo $id_number;
} elseif($type == "View_Students" || $type == "Students_Query") {
if($type == "View_Students") {
$query_students = mysqli_query($connection, "SELECT * FROM `Students` WHERE NOT `Status` = 'Deleted' ORDER BY `ID_Number` ASC;");
$students_count_string = "Total ";
} elseif($type == "Students_Query") {
$class_number = strip_tags(mysqli_real_escape_string($connection, $_POST["class_number"]));
$section = strip_tags(mysqli_real_escape_string($connection, $_POST["section"]));
$group_name = strip_tags(mysqli_real_escape_string($connection, $_POST["group_name"]));
$roll_number = strip_tags(mysqli_real_escape_string($connection, $_POST["roll_number"]));
$blood_group = strip_tags(mysqli_real_escape_string($connection, $_POST["blood_group"]));
$gender = strip_tags(mysqli_real_escape_string($connection, $_POST["gender"]));
$religion = strip_tags(mysqli_real_escape_string($connection, $_POST["religion"]));
$nationality = strip_tags(mysqli_real_escape_string($connection, $_POST["nationality"]));
$student_name_english = strip_tags(mysqli_real_escape_string($connection, $_POST["student_name_english"]));
$father_name_english = strip_tags(mysqli_real_escape_string($connection, $_POST["father_name_english"]));
$mother_name_english = strip_tags(mysqli_real_escape_string($connection, $_POST["mother_name_english"]));
$permanent_address = strip_tags(mysqli_real_escape_string($connection, $_POST["permanent_address"]));
$present_address = strip_tags(mysqli_real_escape_string($connection, $_POST["present_address"]));
$conditions =  "";
if($class_number != "") {
$conditions .= " AND `Class_Number` = '$class_number' ";
};
if($section != "") {
$conditions .= " AND `Section` = '$section' ";
};
if($group_name != "") {
$conditions .= " AND `Group_Name` = '$group_name' ";
};
if($roll_number != "") {
$conditions .= " AND `Roll_Number` = '$roll_number' ";
};
if($blood_group != "") {
$conditions .= " AND `Blood_Group` = '$blood_group' ";
};
if($gender != "") {
$conditions .= " AND `Gender` = '$gender' ";
};
if($religion != "") {
$conditions .= " AND `Religion` = '$religion' ";
};
if($nationality != "") {
$conditions .= " AND `Nationality` = '$nationality' ";
};
if($student_name_english != "") {
$conditions .= " AND `Student_Name_English` LIKE '%$student_name_english%' ";
};
if($father_name_english != "") {
$conditions .= " AND `Father_Name_English` LIKE '%$father_name_english%' ";
};
if($mother_name_english != "") {
$conditions .= " AND `Mother_Name_English` LIKE '%$mother_name_english%' ";
};
if($permanent_address != "") {
$conditions .= " AND `Permanent_Address` LIKE '%$permanent_address%' ";
};
if($present_address != "") {
$conditions .= " AND `Present_Address` LIKE '%$present_address%' ";
};
$query_students = mysqli_query($connection, "SELECT * FROM `Students` WHERE NOT `Status` = 'Deleted' $conditions ORDER BY `ID_Number` ASC;");
$students_count_string = "Queried ";
};
$students_count = mysqli_num_rows($query_students);
if($students_count > 1) {
$students_count_string = $students_count_string . $students_count . " students";
} else {
$students_count_string = $students_count_string . $students_count . " student";
};
echo '<div id="hidden_students_count" class="hidden_count">' . $students_count_string . "</div>";
echo <<<SADEED
<table id="students" class="records_table">
<tbody>
<tr>
<th>ID Number</th>
<th>Name</th>
<th>নাম</th>
<th>Father's Name</th>
<th>পিতার নাম</th>
<th>Mother's Name</th>
<th>মাতার নাম</th>
<th>Father's Occupation</th>
<th>Mother's Occupation</th>
<th>Father's Annual Income</th>
<th>Father's Phone Number</th>
<th>Mother's Phone Number</th>
<th>Email Address</th>
<th>Permanent Address</th>
<th>Present Address</th>
<th>Date of Birth</th>
<th>Blood Group</th>
<th>Gender</th>
<th>Religion</th>
<th>Nationality</th>
<th>Student's snap</th>
<th>Father's snap</th>
<th>Mother's snap</th>
<th>Guardian's Name</th>
<th>Guardian's Phone Number</th>
<th>Relationship with guardian</th>
<th>Guardian's snap</th>
<th>Class</th>
<th>Section</th>
<th>Group</th>
<th>Roll Number</th>
<th>Date of Admission</th>
<th>Previous Institution</th>
<th>Previous Class</th>
<th colspan="2"></th>
SADEED;
while($data_students = mysqli_fetch_assoc($query_students)) {
$id_number = $data_students["ID_Number"];
echo '<tr class="record" id="student_' . $id_number . '">
<td class="id_number">' . $id_number . '</td>
<td id="student_name_english_' . $id_number . '">' . $data_students["Student_Name_English"] . '</td>
<td id="student_name_bangla_' . $id_number . '">' . $data_students["Student_Name_Bangla"] . '</td>
<td id="student_father_name_english_' . $id_number . '">' . $data_students["Father_Name_English"] . '</td>
<td id="student_father_name_bangla_' . $id_number . '">' . $data_students["Father_Name_Bangla"] . '</td>
<td id="student_mother_name_english_' . $id_number . '">' . $data_students["Mother_Name_English"] . '</td>
<td id="student_mother_name_bangla_' . $id_number . '">' . $data_students["Mother_Name_Bangla"] . '</td>
<td id="student_father_occupation_' . $id_number . '">' . $data_students["Father_Occupation"] . '</td>
<td id="student_mother_occupation_' . $id_number . '">' . $data_students["Mother_Occupation"] . '</td>
<td id="student_father_income_' . $id_number . '">' . $data_students["Father_Income"] . '</td>
<td id="student_father_phone_' . $id_number . '">' . $data_students["Father_Phone"] . '</td>
<td id="student_mother_phone_' . $id_number . '">' . $data_students["Mother_Phone"] . '</td>
<td id="student_email_address_' . $id_number . '">' . $data_students["Email_Address"] . '</td>
<td id="student_permanent_address_' . $id_number . '">' . $data_students["Permanent_Address"] . '</td>
<td id="student_present_address_' . $id_number . '">' . $data_students["Present_Address"] . '</td>
<td id="student_date_of_birth_' . $id_number . '">' . $data_students["Date_of_Birth"] . '</td>
<td id="student_blood_group_' . $id_number . '">' . $data_students["Blood_Group"] . '</td>
<td id="student_gender_' . $id_number . '">' . $data_students["Gender"] . '</td>
<td id="student_religion_' . $id_number . '">' . $data_students["Religion"] . '</td>
<td id="student_nationality_' . $id_number . '">' . $data_students["Nationality"] . '</td>
<td>
<a target="new" title="Click to view larger" href="Faces/Student_' . $id_number . '.webp">
<img src="Faces/Student_' . $id_number . '.webp" loading="lazy"/>
</a>
</td>
<td>
<a target="new" title="Click to view larger" href="Faces/Father_' . $id_number . '.webp">
<img src="Faces/Father_' . $id_number . '.webp" loading="lazy"/>
</a>
</td>
<td>
<a target="new" title="Click to view larger" href="Faces/Mother_' . $id_number . '.webp">
<img src="Faces/Mother_' . $id_number . '.webp" loading="lazy"/>
</a>
</td>
<td id="student_guardian_name_' . $id_number . '">' . $data_students["Guardian_Name"] . '</td>
<td id="student_guardian_phone_' . $id_number . '">' . $data_students["Guardian_Phone"] . '</td>
<td id="student_guardian_relation_' . $id_number . '">' . $data_students["Guardian_Relation"] . '</td>
<td>
<a target="new" title="Click to view larger" href="Faces/Guardian_' . $id_number . '.webp">
<img src="Faces/Guardian_' . $id_number . '.webp" loading="lazy"/>
</a>
</td>';
$class_number = $data_students["Class_Number"];
if($class_number > 8) {
$group_name = $data_students["Group_Name"];
} else {
$group_name = " - ";
};
echo '<td id="student_class_number_' . $id_number . '">' . $class_number . '</td>
<td id="student_section_' . $id_number . '">' . $data_students["Section"] . '</td>
<td id="student_group_name_' . $id_number . '">' . $group_name . '</td>
<td id="student_roll_number_' . $id_number . '">' . $data_students["Roll_Number"] . '</td>
<td id="student_date_of_admission_' . $id_number . '">' . $data_students["Date_of_Admission"] . '</td>
<td id="student_previous_institution_' . $id_number . '">' . $data_students["Previous_Institution"] . '</td>
<td id="student_previous_class_' . $id_number . '">' . $data_students["Previous_Class"] . '</td>
<td class="edit_on_table" onclick="edit_student(' . $id_number . ')" title="Click to edit the student bearing ID number ' . $id_number . '">Edit</td>
<td class="delete_button" onclick="delete_student(' . $id_number . ')" title="Click to delete the student bearing ID number ' . $id_number . '">Delete</td>
</tr>';
};
echo "</tbody>
</table>";
} elseif($type == "View_Teachers" || $type == "Teachers_Query") {
if($type == "View_Teachers") {
$query_teachers = mysqli_query($connection, "SELECT * FROM `Teachers` WHERE NOT `Status` = 'Deleted' ORDER BY `ID_Number` ASC;");
$teachers_count_string = "Total ";
} elseif($type == "Teachers_Query") {

$department = strip_tags(mysqli_real_escape_string($connection, $_POST["department"]));
$title = strip_tags(mysqli_real_escape_string($connection, $_POST["title"]));
$blood_group = strip_tags(mysqli_real_escape_string($connection, $_POST["blood_group"]));
$gender = strip_tags(mysqli_real_escape_string($connection, $_POST["gender"]));
$nationality = strip_tags(mysqli_real_escape_string($connection, $_POST["nationality"]));
$religion = strip_tags(mysqli_real_escape_string($connection, $_POST["religion"]));
$teacher_name = strip_tags(mysqli_real_escape_string($connection, $_POST["teacher_name"]));
$conditions = "";
if($department != "") {
$conditions .= " AND `Department` = '$department' ";
};
if($title != "") {
$conditions .= " AND `Title` = '$title' ";
};
if($blood_group != "") {
$conditions .= " AND `Blood_Group` = '$blood_group' ";
};
if($gender != "") {
$conditions .= " AND `Gender` = '$gender' ";
};
if($nationality != "") {
$conditions .= " AND `Nationality` = '$nationality' ";
};
if($religion != "") {
$conditions .= " AND `Religion` = '$religion' ";
};
if($teacher_name != "") {
$conditions .= " AND `Teacher_Name` LIKE '%$teacher_name%' ";
};
$query_teachers = mysqli_query($connection, "SELECT * FROM `Teachers` WHERE NOT `Status` = 'Deleted' $conditions ORDER BY `ID_Number` ASC;");
$teachers_count_string = "Queried ";
};
$teachers_count = mysqli_num_rows($query_teachers);
if($teachers_count > 1) {
$teachers_count_string = $teachers_count_string . $teachers_count . " teachers";
} else {
$teachers_count_string = $teachers_count_string . $teachers_count . " teacher";
};
echo '<div id="hidden_teachers_count" class="hidden_count">' . $teachers_count_string . "</div>";
echo <<<SADEED
<table id="teachers" class="records_table">
<tbody>
<tr>
<th>ID Number</th>
<th>Name</th>
<th>নাম</th>
<th>Father's Name</th>
<th>Mother's Name</th>
<th>Mobile Number</th>
<th>Email Address</th>
<th>Permanent Address</th>
<th>Present Address</th>
<th>Date of Birth</th>
<th>Blood Group</th>
<th>Gender</th>
<th>Religion</th>
<th>Nationality</th>
<th>NID Number</th>
<th>Snap</th>
<th>Date of Joining</th>
<th>Department</th>
<th>Title</th>
<th>Previous Institution</th>
<th colspan="2"></th>
SADEED;
while($data_teachers = mysqli_fetch_assoc($query_teachers)) {
$id_number = $data_teachers["ID_Number"];
echo '<tr class="record" id="teacher_' . $id_number . '">
<td class="id_number">' . $id_number . '</td>
<td id="teacher_name_english_' . $id_number . '">' . $data_teachers["Teacher_Name_English"] . '</td>
<td id="teacher_name_bangla_' . $id_number . '">' . $data_teachers["Teacher_Name_Bangla"] . '</td>
<td id="teacher_father_name_' . $id_number . '">' . $data_teachers["Father_Name"] . '</td>
<td id="teacher_mother_name_' . $id_number . '">' . $data_teachers["Mother_Name"] . '</td>
<td id="teacher_mobile_number_' . $id_number . '">' . $data_teachers["Mobile_Number"] . '</td>
<td id="teacher_email_address_' . $id_number . '">' . $data_teachers["Email_Address"] . '</td>
<td id="teacher_permanent_address_' . $id_number . '">' . $data_teachers["Permanent_Address"] . '</td>
<td id="teacher_present_address_' . $id_number . '">' . $data_teachers["Present_Address"] . '</td>
<td id="teacher_date_of_birth_' . $id_number . '">' . $data_teachers["Date_of_Birth"] . '</td>
<td id="teacher_blood_group_' . $id_number . '">' . $data_teachers["Blood_Group"] . '</td>
<td id="teacher_gender_' . $id_number . '">' . $data_teachers["Gender"] . '</td>
<td id="teacher_religion_' . $id_number . '">' . $data_teachers["Religion"] . '</td>
<td id="teacher_nationality_' . $id_number . '">' . $data_teachers["Nationality"] . '</td>
<td id="teacher_nid_number_' . $id_number . '">' . $data_teachers["NID_Number"] . '</td>
<td>
<a target="new" title="Click to view larger" href="Faces/Teacher_' . $id_number . '.webp">
<img src="Faces/Teacher_' . $id_number . '.webp" loading="lazy"/>
</a>
</td>
<td id="teacher_date_of_joining_' . $id_number . '">' . $data_teachers["Date_of_Joining"] . '</td>
<td id="teacher_department_' . $id_number . '">' . $data_teachers["Department"] . '</td>
<td id="teacher_title_' . $id_number . '">' . $data_teachers["Title"] . '</td>
<td id="teacher_previous_institution_' . $id_number . '">' . $data_teachers["Previous_Institution"] . '</td>
<td class="edit_on_table" onclick="edit_teacher(' . $id_number . ')" title="Click to edit the teacher bearing ID number ' . $id_number . '">Edit</td>
<td class="delete_button" onclick="delete_teacher(' . $id_number . ')" title="Click to delete the teacher bearing ID number ' . $id_number . '">Delete</td>
</tr>';
};
echo "</tbody>
</table>";
} elseif($type == "Teacher_Entry" || $type == "Edit_Teacher") {
$teacher_name_english = strip_tags(mysqli_real_escape_string($connection, $_POST["teacher_name_english"]));
$teacher_name_bangla = strip_tags(mysqli_real_escape_string($connection, $_POST["teacher_name_bangla"]));
$father_name = strip_tags(mysqli_real_escape_string($connection, $_POST["father_name"]));
$mother_name = strip_tags(mysqli_real_escape_string($connection, $_POST["mother_name"]));
$mobile_number = strip_tags(mysqli_real_escape_string($connection, $_POST["mobile_number"]));
$email_address = strip_tags(mysqli_real_escape_string($connection, $_POST["email_address"]));
$permanent_address = strip_tags(mysqli_real_escape_string($connection, $_POST["permanent_address"]));
$present_address = strip_tags(mysqli_real_escape_string($connection, $_POST["present_address"]));
$date_of_birth = strip_tags(mysqli_real_escape_string($connection, $_POST["date_of_birth"]));
$blood_group = strip_tags(mysqli_real_escape_string($connection, $_POST["blood_group"]));
$gender = strip_tags(mysqli_real_escape_string($connection, $_POST["gender"]));
$religion = strip_tags(mysqli_real_escape_string($connection, $_POST["religion"]));
$nationality = strip_tags(mysqli_real_escape_string($connection, $_POST["nationality"]));
$nid_number = strip_tags(mysqli_real_escape_string($connection, $_POST["nid_number"]));
$date_of_joining = strip_tags(mysqli_real_escape_string($connection, $_POST["date_of_joining"]));
$department = strip_tags(mysqli_real_escape_string($connection, $_POST["department"]));
$title = strip_tags(mysqli_real_escape_string($connection, $_POST["title"]));
$previous_institution = strip_tags(mysqli_real_escape_string($connection, $_POST["previous_institution"]));
if($type == "Teacher_Entry") {
mysqli_query($connection, "INSERT INTO `Teachers`(`Teacher_Name_English`, `Teacher_Name_Bangla`, `Father_Name`, `Mother_Name`, `Mobile_Number`, `Email_Address`, `Permanent_Address`, `Present_Address`, `Date_of_Birth`, `Blood_Group`, `Gender`, `Religion`, `Nationality`, `NID_Number`, `Date_of_Joining`, `Department`, `Title`, `Previous_Institution`) VALUES ('$teacher_name_english', '$teacher_name_bangla', '$father_name', '$mother_name', '$mobile_number', '$email_address', '$permanent_address', '$present_address', '$date_of_birth', '$blood_group', '$gender', '$religion', '$nationality', '$nid_number', '$date_of_joining', '$department', '$title', '$previous_institution');");
$id_number = mysqli_insert_id($connection);
} elseif($type == "Edit_Teacher") {
$id_number = strip_tags(mysqli_real_escape_string($connection, $_POST["id_number"]));
mysqli_query($connection, "UPDATE `Teachers` SET `Teacher_Name_English` = '$teacher_name_english', `Teacher_Name_Bangla` = '$teacher_name_bangla', `Father_Name` = '$father_name', `Mother_Name` = '$mother_name', `Mobile_Number` = '$mobile_number', `Email_Address` = '$email_address', `Permanent_Address` = '$permanent_address', `Present_Address` = '$present_address', `Date_of_Birth` = '$date_of_birth', `Blood_Group` = '$blood_group', `Gender` = '$gender', `Religion` = '$religion', `Nationality` = '$nationality', `NID_Number` = '$nid_number', `Date_of_Joining` = '$date_of_joining', `Department` = '$department', `Title` = '$title', `Previous_Institution` = '$previous_institution' WHERE `ID_Number` = '$id_number';");
};
if(is_uploaded_file($_FILES["teacher_snap"]["tmp_name"])) {
$teacher_snap = $_FILES["teacher_snap"]["tmp_name"];
if(getimagesize($teacher_snap)) {
convert_image($teacher_snap, "Faces/Teacher_" . $id_number . ".webp");
};
};
echo $id_number;
} elseif($type == "Teacher_Deletion" && $_POST["id_number"]) {
$id_number = mysqli_real_escape_string($connection, $_POST["id_number"]);
mysqli_query($connection, "UPDATE `Teachers` SET `Status` = 'Deleted' WHERE `ID_Number` = '$id_number';");
} elseif($type == "Student_Deletion" && $_POST["id_number"]) {
$id_number = mysqli_real_escape_string($connection, $_POST["id_number"]);
mysqli_query($connection, "UPDATE `Students` SET `Status` = 'Deleted' WHERE `ID_Number` = '$id_number';");
};
} else {
echo "Allowed";
};
} else {
echo "Denied";
session_destroy();
};
mysqli_close($connection);
} else {
echo "Empty";
session_destroy();
};
exit();
?>
