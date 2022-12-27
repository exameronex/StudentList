<?php
	$formReg = true;
	
	//echo 
	if (isset($_COOKIE['form'])) {
		$formReg = false;	

	}

	require __DIR__ . '/view/form.php';
?>