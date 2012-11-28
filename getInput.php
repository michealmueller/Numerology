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
			parent::convertLetToNum($this -> nameLetterArray);
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
            echo 'You did not enter any information. You will be redirected in 5 seconds.';
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