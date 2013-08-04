<?php
/**
 * Created by JetBrains PhpStorm.
 * User: micheal
 * Date: 11/8/12
 * Time: 2:22 PM
 * To change this template use File | Settings | File Templates.
 */

require_once 'letNumManipulation.php';

class getInfo
{
    function Display($destinyNum, $lifePath, $vowels, $constants)
    {
	    echo '<!DOCTYPE html >
<html >
 <head >
  <meta charset ="UTF-8" >
  <title >You\'re Results </title >
  <LINK href = "css/global.css" rel = "stylesheet" type ="text/css" >
 </head >
 <body >
 <div id = "content" class="shadow" >
     <div id = "header" > Numerology!</div >
     <div id ="results" >
	     <table align="center" border="1">
		     <tr >
			     <td >
					<p>Destiny Number</p>
			     </td>
			     <td>
		            <p>Life Path Number</p>
			     </td>
		         <!---<td>
		            <p>Vowel\'s</p>
		         </td>
		         <td>
		            <p>Constant\'s</p>
		         </td>-->
		     </tr>
	         <tr class="numbers">
	            <td>' . $destinyNum .'</td>
	            <td>' . $lifePath . '</td>
	         </tr>
	     </table>
     </div>
 </div>
 </body>
</html >';
    }
}
?>