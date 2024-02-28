<?php
 // Php does not support multiple inhertance

 // Traits cannot be instantiated

 class Phone{
    public function battery(){
        echo "It has a battery of 4000mAh";
    }

 }

 trait Projector {
    public function projector(){
        echo "It has a projector"; // cannot instantiate just be used 
    }
    public function power(){
        echo "It has 20w of projection power"; // cannot instantiate just be used 
    }


 }
 trait Zoom {
    public function zoomCamera(){
        echo "This phone has a 100x zoom Camera";
    }
    public function power(){
        echo "It has a powerful camera zoom"; // cannot instantiate just be used 
    }
 }

 class Samsung extends Phone{
    use Projector, Zoom // We need to type "use" to use any trait in the current class
    {
        Projector::power insteadof Zoom; 
        Projector::power as Ppower; // We can rename the methods to call --> incase we have same named methods in traits.
        Zoom::power as Zpower; // We can use this technique to omit confusion between the methods.
    }
 }


 $galaxy = new Samsung();
 $galaxy->projector();
 echo "<br>";
 $galaxy->battery();
 echo "<br>";
 $galaxy->zoomCamera();
 echo "<br>";
 $galaxy->Zpower();
 echo "<br>";
 $galaxy->Ppower();


?>