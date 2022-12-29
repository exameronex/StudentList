<?php
require 'bootstrap.php';
	$formReg = true;

	if (isset($_COOKIE['form'])) {
		$formReg = false;
		$studById = $studentService->getStudentById($_COOKIE['id']);
	}

	require __DIR__ . '/view/form.php';
?>