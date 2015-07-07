<!-- We've created a Vehicle class in the editor. 
Create a child class, Bicycle, that overrides the Vehicle class' honk() method and replaces it with a method that returns "Beep beep!".
Finally, create a $bicycle instance of the Bicycle class and echo the result of calling its honk() method. 
Check the Hint for refreshers if you need them! -->
<html>
<head>
    <title>Override!</title>
</head>

<body>
    <p>
    	<?php
            class Vehicle {
              public function honk() {
                return "HONK HONK!";
              }
            }
            // Add your code below!
            class Bicycle extends Vehicle{
                public function honk(){
                    print "Beep beep!";
                }
            }
            $bicycle=new Bicycle();
        echo    $bicycle->honk();
        ?>
    </p>
</body>
</html>
