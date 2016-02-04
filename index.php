<?php
    require 'connect.php';

	if ($_GET['page']=='home'){
		echo 'yes';
	}else{
		echo 'no';
	}

require 'templates/template.php';
?>