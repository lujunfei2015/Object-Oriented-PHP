<!-- We've created two classes, Shape and Square, with Square inheriting from Shape.
We didn't specify that Square has a $hasSides property, but it should inherit it from Shape. 
Complete the if statement on line 18 by using the property_exists() method to check if $square has the "hasSides" property. -->
<html>
<head>
    <title>Inheritance</title>
</head>

<body>
    <p><?php
            class Shape {
            public $hasSides = true;
        }
            class Square extends Shape {
        }
        $square = new Square();
            // Add your code below!
            if (property_exists($square, "hasSides") ) {
            echo "I have sides!";
        }
      ?></p>
</body>
</html>