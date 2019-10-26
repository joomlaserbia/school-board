<?php
	header("Access-Control-Allow-Origin: *");
	header("Content-Type: application/json; charset=UTF-8");
	header("Access-Control-Allow-Methods: POST");
	header("Access-Control-Max-Age: 3600");
	header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
	
	require __DIR__ . '/vendor/autoload.php';
	include_once 'api/config/database.php';
	include_once 'api/objects/student.php';
	
	$database = new Database();
	$db = $database->getConnection();
	
	$student_id = filter_input(INPUT_GET, 'student', FILTER_SANITIZE_URL);
	
	$student_data = new Student($db);
	
	$get_grades = $student_data->GetStudentGrades($student_id);

?>