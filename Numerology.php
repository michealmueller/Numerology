<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Micheal
 * Date: 8/9/12
 * Time: 2:50 AM
 * To change this template use File | Settings | File Templates.
 */


require_once 'getInput.php';

$numerology = new getInput;

	//input error checking
	if(!empty($_POST['fullname']) && empty($_POST['birthdate']))
	{
		$numerology -> destiny($_POST['fullname']);
	}
	elseif(empty($_POST['fullname']) && !empty($_POST['birthdate']))
	{
		$numerology -> lifepath($_POST['birthdate']);
	}
	elseif(!empty($_POST['fullname']) && !empty($_POST['birthdate']))
	{
		$numerology -> destiny($_POST['fullname']);
		$numerology -> lifePath($_POST['birthdate']);
	}
	else
	{
		echo '<html><head><META http-equiv="refresh" content="5;URL=index.php" /></head><body><h2>You did not fill anything in, You will be redirected in 5 seconds.</h2></body></html>';
		exit;
	}


?>