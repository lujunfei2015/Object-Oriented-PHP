<!-- We're demoing three useful built-in methods: 
1) is_a(), which we use to find out if a particular object is an instance of a given class; 
2) property_exists(), to see if an object has a given property; 
3) method_exists(), to see if an object has a given method.
Note that the first argument is the object we're checking, and the second is the class, property, or method name as a "string". -->
<html>
  <head>
    <title>Class and Object Methods</title>
  </head>
  <body>
    <p>
      <?php
        class Person {
          public $isAlive = true;
          
          function __construct($name) {
              $this->name = $name;
          }
          
          public function dance() {
            return "I'm dancing!";
          }
        }
        
        $me = new Person("Shane");
        if (is_a($me, "Person")) {
          echo "I'm a person, ";
        }
        if (property_exists($me, "name")) {
          echo "I have a name, ";
        }
        if (method_exists($me, "dance")) {
          echo "and I know how to dance!";
        }
      ?>
    </p>
  </body>
</html>