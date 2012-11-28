<?php

require_once 'letNumManipulation.php';
require_once 'redirect.php';

class getInput extends LetterToNumber
{
    protected $cleanedInput;
    protected $cleanInput; 
    protected $fullName;
	public $birthDate;
    public $nameLetterArray;
    public $birthdateNumbers;
    public $lifepathNum;

    function destiny($name)
    {

        $dirtyName = trim(strtolower($name));

        if(!empty($dirtyName))
        {
	        preg_match_all('/([A-Za-z])/', $dirtyName, $nameMatches);
            $this -> nameLetterArray = $nameMatches[0];
			return parent::convertLetToNum($this -> nameLetterArray);
        }
        else
        {
	        echo 'You are Really Trying to break it arn\'t you. 1';
	        exit;
        }
	} 

    function lifePath($birthdate)
    {
        if(empty($birthdate))
        {
            echo '<html><head><META http-equiv="refresh" content="5;URL=index.php" /></head><body><h2>You did not fill anything in, You will be redirected in 5 seconds.</h2></body></html>';
        }
        else
        {
            preg_match_all('/([0-9])/', $birthdate, $matches);
            $this -> birthdateNumbers = $matches[0];
        }
        parent::getStartNumber($this -> birthdateNumbers);


    }
}

?>