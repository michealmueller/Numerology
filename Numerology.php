<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Micheal
 * Date: 8/9/12
 * Time: 2:50 AM
 * To change this template use File | Settings | File Templates.
 */


require_once 'getInput.php';
require_once 'results.php';
require_once 'letNumManipulation.php';

$numerology = new getInput;
$results = new getInfo();
$letmanip = new LetterToNumber();


	//input error checking
	if(!empty($_POST['fullname']) && empty($_POST['birthdate']))
	{
		$numerology -> destiny($_POST['fullname']);
        $destinyNum = $numerology->destinyNum;
        //$letmanip -> vowelConstCount();
        //$vowel = $letmanip -> VowelConst['vowel'];
        //$const = $letmanip -> VowelConst['constants'];
        $results -> Display($destinyNum,0,0,0);
	}
	elseif(empty($_POST['fullname']) && !empty($_POST['birthdate']))
	{
		$numerology -> lifepath($_POST['birthdate']);
        $lifePathNum = $numerology->lifePathNum;
        $results -> Display(0, $lifePathNum, 0, 0);
	}
	elseif(!empty($_POST['fullname']) && !empty($_POST['birthdate']))
	{
		$numerology -> destiny($_POST['fullname']);
        $destinyNum = $numerology -> destinyNum;
		$numerology -> lifePath($_POST['birthdate']);
        $lifePathNum = $numerology -> lifePathNum;
        $results -> Display($destinyNum, $lifePathNum, 0, 0);
	}
	else
	{
		echo '<html><head><META http-equiv="refresh" content="5;URL=index.php" /></head><body><h2>You did not fill anything in, You will be redirected in 5 seconds.</h2></body></html>';
		exit;
	}


?>