<?php require_once("config.php");

if(isset($_POST['form_submit']))
{
	$firstname = trim($_POST['first_name']);
	$middlename = trim($_POST['middle_name']);
	$lastname = trim($_POST['last_name']);
	$dob_bs = trim($_POST['dob_bs']);
	$dob_ad = trim($_POST['dob_ad']);
	$gender = trim($_POST['gender']);
	$address = trim($_POST['address']);
	$courses = trim($_POST['courses']);
	$last_school = trim($_POST['last_school']);
	$fathername = trim($_POST['father_name']);
	$f_call = trim($_POST['f_call']);
	$femail = trim($_POST['femail']);
	$foccupation = trim($_POST['foccupation']);
	$mothername = trim($_POST['mother_name']);
	$m_call = trim($_POST['m_call']);
	$memail = trim($_POST['memail']);
	$moccupation = trim($_POST['m_occupation']);
	$guardial_name = trim($_POST['guardial_name']);
	$g_relation = trim($_POST['g_relation']);
	$g_call = trim($_POST['g_call']);
	$g_officephone = trim($_POST['g_office_phone']);
	$g_email = trim($_POST['g_email']);
	$g_occupation = trim($_POST['g_occupation']);
	// $disease_desc = trim($_POST['disease_desc']);
	// $allergy_desc = trim($_POST['allergy_desc']);
	
	$pay_status = 'PATD';
	$course_fees = '60000';
	$reg_no = 'TS' .rand(99,10).time();
	$folder = "C:/xampp/htdocs/addmision in data base/uploads/";
	

// //image
$target_dir = "uploads/";
$image_file = $target_dir . basename($_FILES["image"]["name"]);
$file = $_FILES['image']['tmp_name'];
$imageFileType1 = strtolower(pathinfo($image_file,PATHINFO_EXTENSION));

// //sign
// $simage_file = $target_dir . basename($_FILES['simage']['name']);
// $sfile = $_FILES['simage']['tmp_name'];
// $imageFileType2 = strtolower(pathinfo($simage_file,PATHINFO_EXTENSION));

// data insert into databases in join 
$sql = "INSERT INTO registrations(first_name,middle_name,last_name,dob_bs,dob_ad,gender,addres,courses,last_school,
father_name,f_call,femail,foccupation,mother_name,m_call,memail,m_occupation,guardial_name,g_relation,g_call,G_gender,
g_email,g_occupation,pay_status,course_fees,reg_no,imag,sign
) VALUES('$firstname','$middlename','$lastname','$dob_bs','$dob_ad','$gender','$address','$courses','$last_school',
'$fathername','$f_call','$femail','$foccupation','$mothername','$m_call','$memail','$moccupation','$guardial_name',
'$g_relation','$g_call','$g_officephone','$g_email','$g_occupation','$pay_status','$course_fees','$reg_no','$image_file',
'$file')";
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully."; 
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

}

?>