<?php

include 'Namespaces.php';
include 'importingFunctions.php';


use App\hello\Person;   // We can import a name space using use keyword
use const App\CNF\MAX;  // We can also import constants 
use function App\CNF\sayHi; //  and functions from other files using "use" keyword//
use app\hello\DateTime as MyDateTime; // set an alias name for your defined method


 $p2 = new Person();
 $p2-> name = "Abrar";

var_dump($p2);

echo "<br>";
echo MAX;
echo "<br>";

sayHi();      // We can also import constants or fuctions from other files 

$obj1 = new MyDateTime();
$obj2 = new DateTime;         // calling actual date time inbuilt method

var_dump($obj1,$obj2);

// Note --  inorder to use a global namespace into a self made namespace remember to use a backslash on the global method //





?>