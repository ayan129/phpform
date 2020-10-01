<?php

 $str = "AYAN" ;
echo "THE STRING : ";
echo $str;

echo "<br>";
$lengthofstring = strlen($str);       // strlen basically aik ffunction he jo value pata krke deta he hume humare string ki

echo "THE LENGTH OF STRING IS : " . $lengthofstring ;

// echo $lengthofstring;

echo "The length of this string is ". $lenn . ". Thank you <br>";     // basically yeh jo . he yeh conconatite krata he aur jse humne yaha kaya
    echo "The number of words in this string is ". str_word_count($str) . ". Thank you <br>";      // iske andar str_word_count($str) yeh function jo he yeh basically aik function he jo word count krke deta he jse uper word he 1 to aik shhow kraiga aur humne yaha . ka use bhe kreke dekha ke wo kse containate hurahe 
    echo "The reversed string is ". strrev($str) . ". Thank you <br>";   //  strrev($str) yeh jo function use huwa he basically yeh string ko ulta krdeta he bus
    echo "The search for is in this string is ". strpos($str, "n") . ". Thank you <br>"; // yeh strops($str, "n") aik function he jo aik particular string search krke uska array num batata he aur jo hum uske dusre parenthes me dlege to wo humne uska given string me array num ki position dega thats mean ke agar hum kuxh bhe search kren to wo lazmi he ke usi string me hu aur wuo string hum uske dusre parenthes me dege 
    echo "The replaced string is ". str_replace("AN", "AY", $str) . ". Thank you <br>";  // yeh         aik function he jo replace krneke kuch use huta he aur isme 3 pari meters hute he first me wo jise replace krna he aur 2nd me wo jisssse krna he i mean uski jagah usko lana he 1st parimeter waley ko aur third me us string ko dalna he jisme yeh kam krnahe
    // echo $lenn;

?>