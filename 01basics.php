<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php in one video </title>
</head>
<body>
    <div class="container">

<!-- *******************************************
topic no 1 : php syntax and echo function in php
******************************************* -->


    <!-- this is my first php website -->
     <?php                  // yeh hamara syntax huta he jisme hum php likhte he aur yeh hamara backend he yeh hume show nh huge agar hum view page source se jakar dekhenge

// echo"hello word this is printed using php ";    // yeh echo aik asa function he jo hume lotadeta hu jo bhe chez mtln wo screen me print krata he hamari chz

// *******************************************
// topic no 2 : variables in php
// *******************************************

// $variable1 = 23;
// $variable2 = 54;
// echo "<br>";
// $name  = "ayan";
// echo "<br>";
// echo $variable1;
// echo "<br>";
// echo $variable2;
// echo "<br>";
// echo "the value of variable1 and variable 2 is" ;
// echo $variable1 + $variable2 ;
// echo "<br>";
// echo $name



// *******************************************
// topic no 3 : operators in php
// *******************************************
// 1 airthmatic Operators
// 2 assigment Operator
// 3 comparison Operator
// 4 increment/decrement Operator
// 5 logical Operator

// *******************************************
// number 1 : airthmatic operators in php
// *******************************************
// $variable1 = 23;
// $variable2 = 54;

// echo "the value of variable1 + variable2 is " ;

// echo $variable1 + $variable2;
// echo "<br>" ;
// echo "the value of variable1 - variable2 is " ;

// echo $variable1 - $variable2;
// echo "<br>" ;
// echo "the value of variable1 * variable2 is " ;

// echo $variable1 * $variable2;
// echo "<br>" ;
// echo "the value of variable1 / variable2 is " ;

// echo $variable1 / $variable2;

// *******************************************
// number 2 : assignment  operators in php
// *******************************************
// $variable1 = 23;
// $variable2 = 54;

// = operator in assigment operator

// $newvar = $variable2;


// echo "the value of new variable is " ;

// echo $newvar;

// $variable2 = $variable1;


// echo "the value of new variable is " ;

// echo $variable2;  



// += operator in assigment operator

// $newvar = $variable2;

// $newvar += 23;

// echo $newvar;

// -= operator in assigment operator

// $newvar = $variable2;

// $newvar -= 23;

// echo $newvar;

// isi trha blkl hum multilpy aur devide kelye kam krnegey
 
// *******************************************
// number 3 : comparison  operators in php
// *******************************************

// echo "<h3> comparison operator in php </h3> ";

// echo "the value of 1 == 4 is ";  

// echo var_dump(1 == 4);  // ab yaha var_dumb aik basically function he jo ase comparison value apne andar store krta he
// echo "<br>" ;
// echo "the value of 1 > 4 is ";  

// echo var_dump(1 > 4); 
// echo "<br>" ;
// echo "the value of 1 < 4 is ";  

// echo var_dump(1 < 4); 
// echo "<br>" ;
// echo "the value of 4 >= 4 is ";  

// echo var_dump(4 >= 4); 
// echo "<br>" ;
// echo "the value of 4 != 4 is ";  

// echo var_dump(4 != 4); 
// echo "<br>" ;

// *******************************************
// number 4 : increment/decrement  operators in php
// *******************************************

// echo "<h3> increment/decrement operator in php </h3> ";

// incrment operator

// $variable1 = 222;
// $variable1++;
// echo $variable1;
// echo "<br>" ;
// decrement operator

// $variable1 = 222;
// $variable1--;
// echo $variable1;

// *******************************************
// number 5 : logical  operators in php
// *******************************************

// echo "<h3> logical operator in php </h3> ";

// 1 and (&&) Operators
// 2 or (||) Operator
// 3 xor Operator
// 4 not (!!) Operator

// *******************************************
// number 1 : and (&&)  operators in php
// *******************************************
 
// $myvar = (true and true);   // and ke operator ko agey chlne kelye run krnkelye dunu condition true huna zrori he to he chlega
// echo var_dump($myvar);
// echo "<br>" ;

// $myvar = (false and true);   // jse ke ap yaha dekhskte he ke aik true conditionhe aik false he to yeh true nh huga qk and operator kheta he ke bhai apki dunu conditions true hun
// echo var_dump($myvar);
// echo "<br>" ;

// $myvar = (false and false);  // ab obvious se bat he jab dunu he flase huge to yeh false he ayega aur false ayega to iska mtlb hum jo code agey humne aik concept bnyawa he uske mutabiq chl nh skhta
// echo var_dump($myvar);
// echo "<br>" ;

// *******************************************
// number 2 : or (||)  operators in php
// *******************************************


// $myvar = (true or true);   // or operaotr me dunu condition me se aik condition true hujaige to wo agey run krdega thatz mean true dedega
// echo var_dump($myvar);
// echo "<br>" ;

// $myvar = (true or false);   //jse ke ap yaha dekhe to yha aik true he aur aik false he lekin isne phr bhe true he deya qk or operator me aik bhe true ajai to wo agey process krta he
// echo var_dump($myvar);
// echo "<br>" ;

// $myvar = (false or false);  // ab obvious se bat he jab dunu he flase huge to yeh false he ayega aur false ayega to iska mtlb hum jo code agey humne aik concept bnyawa he uske mutabiq chl nh skhta
// echo var_dump($myvar);
// echo "<br>" ;

// *******************************************
// number 3 : XOR   operators in php
// *******************************************

// $myvar = (true xor true);   // xor operator ko dunu condition agar true hue thek hue to wo agey nh chlega aur false dedega isiliye yaha false dega
// echo var_dump($myvar);
// echo "<br>" ;

// $myvar = (true xor false);   //ab jse ap dekhen ke aik true he aur aik false he sai he to ab yeh agey process krega qk xor operator ko aik true aur aik false chiye huta he phr wo agey process krta he
// echo var_dump($myvar);
// echo "<br>" ;

// $myvar = (false xor false);  // yaha dunu false to yaha bhe false he dega mtlb same contiiodn rhege dunu me wo agey process nh krega false dega caheh wo dunu same true q na hu chahe wo dunu false same q na hu wo false he dega aur hamara concept agey process nh krega
// echo var_dump($myvar);
// echo "<br>" ;


// *******************************************
// topic no 4 : data types in php
// *******************************************


// echo "<h3> data types in php </h3> ";

// 1 string data types
// 2 integar data types
// 3 float data types
// 4 boolean data types
// 5 array data types
// 6 object data types

// *******************************************
// number 1 : string data type  in php
// *******************************************

// $var = "MY NAME IS AYAN AND I AM PROGRAMMER";
// echo $var;   // ab yaha humne var dumb use nyh kaya to is wjy se yaha pr srf print huwa simple
// echo "<br>";
// $var = "MY NAME IS AYAN AND I AM PROGRAMMER";
// echo var_dump($var);           // ab jse yaha apko aik example mili hu var dumb dfunction ki ke yeh ksi bhe operator data type ko khul kr apke samne rkhdeta he ab jse yaha pore string ke value btade ke kitne use hue he


// *******************************************
// number 2 : int data type  in php
// *******************************************

// echo "<br>";
// $var2 = 54;     // ab yeh int data type he to yeh ase btaiga
// echo $var2;
// echo "<br>";
// $var2 = 54;
// echo var_dump($var2);   // ab var dumb yaha use kya he to yeh is chz ko define krdega

// // *******************************************
// // number 3 : float data type  in php
// // *******************************************


// echo "<br>";
// $var2 = 54.23;    // ab yeh float data type he to yeh ase btaiga
// echo $var2;
// echo "<br>";
// $var2 = 54.23;  // ab var dumb yaha use kya he to yeh is chz ko define krdega

// echo var_dump($var2);

// // *******************************************
// // number 4 : boolean data type  in php
// // *******************************************

// $var3 = true;

// echo  $var3;

// echo var_dump($var3)

// // *******************************************
// // number 5 : constant data type  in php
// // *******************************************


// define("pi",3.14);        // yeh constant function he yeh blovk level huta he isko ap jaha bhe use kruge jaha bhe kruge koi issue nh


// echo pi

// *******************************************
// topic no 5 : conditional statement in php
// *******************************************


// echo "<h3> conditional statement  in php </h3> ";






































?>  


    </div>
</body>
</html>