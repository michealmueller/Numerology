
<?php

require_once 'results.php';

class LetterToNumber extends getInfo
{
    public $originalNumber;
    public $destinyNum;
	public $lifePathNum;
	protected $vowel;
	protected $constant;
    public $soul;
    protected $nameNumberArray;
    protected $soulNumber;

    function convertLetToNum()
    {
	    //print_r($this ->nameLetterArray);
        $this -> nameNumberArray = $this -> nameLetterArray;

        foreach ($this -> nameNumberArray as &$value)
        {
            switch ($value)
        	{
        		case 'a';
        			$value = '1';
        			break;
        		case 'b';
        			$value = '2';
        			break;
        		case 'c';
        			$value = '3';
        			break;
        		case 'd';
        			$value = '4';
        			break;
        		case 'e';
        			$value = '5';
        			break;
        		case 'f';
        			$value = '6';
        			break;
        		case 'g';
        			$value = '7';
        			break;
        		case 'h';
        			$value = '8';
        			break;
        		case 'i';
        			$value = '9';
        			break;
        		case 'j';
        			$value = '1';
        			break;
        		case 'k';
        			$value = '2';
        			break;
        		case 'l';
        			$value = '3';
        			break;
        		case 'm';
        			$value = '4';
        			break;
        		case 'n';
        			$value = '5';
        			break;
        		case 'o';
        			$value = '6';
        			break;
        		case 'p';
        			$value = '7';
        			break;
        		case 'q';
        			$value = '8';
        			break;
        		case 'r';
        			$value = '9';
        			break;
        		case 's';
        			$value = '1';
        			break;
        		case 't';
        			$value = '2';
        			break;
        		case 'u';
        			$value = '3';
        			break;
        		case 'v';
        			$value = '4';
        			break;
        		case 'w';
        			$value = '5';
        			break;
        		case 'x';
        			$value = '6';
        			break;
        		case 'y';
        			$value = '7';
        			break;
        		case 'z';
        			$value = '8';
        			break;
        	}
        }

        return $this -> destinyNum = self::getStartNumber($this -> nameNumberArray);
        //self::vowelConstCount();


    }

    function getStartNumber($inputarray)
    {
        $prevValue = 0;

        foreach($inputarray as $value)
        {
            $prevValue = $value + $prevValue;
        }
        $this -> originalNumber = $prevValue;

        //check whether destiny or lifepath is being ran, or both
        $callingFunc = self::debugPrintCallingFunction();

        //echo $callingFunc;

        if ($callingFunc === 'lifePath')
        {

            $this -> lifePathNum = self::checkNumber($this -> originalNumber);

            //parent::Display($this -> destinyNum, $this -> lifePathNum, $this -> VowelConst);
        }
        elseif($callingFunc === 'convertLetToNum')
        {
            return self::checkNumber($this -> originalNumber);
        }
        else
        {
            echo 'something is wrong!!!!!!';
        }
    }

    function checkNumber($number)
    {
        switch ($number)
        {
            case $number == 10;
                return 1;
                break;
	        case $number == 100;
		        return 1;
		        break;
	        case $number < 10;
                return $number;
                break;
            case $number > 10;
                return self::simplifyNumber($number);
                break;
        }
        return $number;
    }

    function simplifyNumber($number)
    {
        $number = str_split($number);
        $prevValue = 0;

        //add the number to add together.
        foreach($number as $value)
        {
            $prevValue = $value + $prevValue;
        }
        $number = $prevValue;
        return self::checkNumber($number);

    }

    function soul()
    {
        $this-> soulNumber = $this -> nameNumberArray;
        foreach ($this->soulNumber as $value)
        {
            switch ($value) {
                case 'a';
                    ++$this ->vowel;
                    break;
                case 'e';
                    ++$this->vowel;
                    break;
               case 'i';
                    ++$this->vowel;
                    break;
                case 'o';
                    ++$this->vowel;
                    break;
                case 'u';
                    ++$this->vowel;
                    break;
                case 'y';
                    ++$this->constant;
                    break;
            }
        }
	    $this -> VowelConst[vowel] = $this -> vowel;
	    $this -> VowelConst[constants] = $this -> constant;

    }

    function readyForDisplay()
    {
        if (isset($this -> destinyNum) && isset($this -> lifePathNum))
        {
            //parent::Display($this -> destinyNum, $this -> lifePathNum, $this -> VowelConst);
        }
        else
        {
            return false;
        }
        return true;
    }

	function debugPrintCallingFunction()
	{

		$func = 'n/a';

		$debugTrace = debug_backtrace();

		if (isset($debugTrace[2])) $func = $debugTrace[2]['function'] ? $debugTrace[2]['function'] : 'n/a';
		return $func;
	}


}


?>