<!DOCTYPE html>
<html>
    <head>
        <title>PHP Task</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
        <style>
        .underline {
            text-decoration: underline green 2px;
        }
    </style>
    </head>
<body>

<div class="container mt-3">
<h3 class="mb-3">1. What is a session in PHP? </h3>
<p class="mb-4 fs-6">Session is a way to store information like (variables) to be used across multiple pages that is Stored on the server. 
It helps keep track of user data as they navigate a website like when you log in to a website, a session stores your user information so you stay logged in as you browse , Can store larger amounts of data , Data is going between the client and server with each request and it more secure data that stored in server side.</p>

<h3 class="mb-3">2. What are traits ?</h3>
<p class="mb-4 fs-6">Traits are a way to reuse code in multiple classes as  
    they can be used in different classes not like classes  
    which can inherit from only one parent class . as traits can be used in multiple classes independently by using keyword (use) and this
is very useful to add and share common functionality to different classes without using inheritance.</p>


<h3 class="mb-3">3. How many TRIGGERS are allowed in a MySQL table?</h3>
<p class=" mb-4 fs-6">In MySQL there are six triggers for each table.<br>
1. BEFORE INSERT<br>
2. AFTER INSERT<br>
3. BEFORE UPDATE<br>
4. AFTER UPDATE<br>
5. BEFORE DELETE<br>
6. AFTER DELETE</p>


<h3 class="mb-3">4. What is an artisan?</h3>
<p class=" mb-4 fs-6">Artisan is the command-line that is included with Laravel (PHP framework) and
     it provides various commands to help developers perform common tasks like creating and managing migrations of data base, generating boilerplate code and running tests.
    <br>
    Examples:<br>
  1. php artisan serve<br>
  2. php artisan make:controller UserController
  3. php artisan make:migration create_products_table
    </p>


    <h3 class="mb-3">5. Explain MVC Architecture?</h3>
<p class=" mb-4 fs-6">MVC is a design pattern used in web development.<br>

1. M refer to Model : Model represents the database table, it also manage and store data and its related business logic, it interacts with the database and processes the data
and it is responsible for the response to the request between view and controller.<br>
2. V refer to View : View is a user interface that displays data of the madel to the user and enable him to modify it.<br>
3. C refer to controller : controller it is responsible to handle the inputs and interacts of user with the Model to process data and the View to display it.
</p>


<h2  class=" mb-4">Choose the correct answer </h2>

<h4>1.Which method sends input to a script via a URL? </h4>
<p  class=" mb-4">
<span class="underline">GET </span><br>
POST <br>
Both <br>
None 
</p>


<h4>2.PHP is an example of _______ scripting language.  </h4>
<p>
Browser-side <br>
Client-side <br>
<span class="underline">Server-side  </span><br>
In-side 
</p>


<h4>3.Can PHP send and receive cookies?  </h4>
<p>
<span class="underline">True </span><br>
False <br>
PHP new version can not send and receive cookies but the old version can. <br>
PHP older version can not send and receive cookies but the new version can. 
</p>

<h4>4.PHP runs on which platform?  </h4>
<p>
Linux <br>
Mac OS X <br>
Windows <br>
<span class="underline">All of the above </span>
</p>


<h4>5.Does PHP support multiple inheritances? </h4>
<p>
Yes <br>
<span class="underline">No </span><br>
Single and multiple inheritances are supported. <br>
Single and multilevel inheritance is supported.  </p>


<h4>6. The practice of creating objects based on predefined classes is often referred to as </h4>
<p>
class creation <br>
 object creation <br>
 <span class="underline"> object instantiation  </span><br>
 class instantiation 
</p>


<h4>7. Which one of the following property scopes is not supported by PHP? </h4>
<p>
<span class="underline"> friendly  </span><br>
  final <br>
  public  <br>
 None 
</p>


<h4>8. which command is used to clear the cache in laravel?  </h4>
<p> 
<span class="underline"> php artisan cache:clear  </span><br>
 php artisan cache:clearall <br>
 php artisan clear:cache <br>
 None of these
</p>



</div>
<?php

//1. Write a PHP program to print alphabet pattern 'R'. 
echo "1. Write a PHP program to print alphabet pattern 'R'."."<br>"."<br>";

echo "<pre>";
for ($row = 0; $row < 11; $row++) {
    for ($col = 0; $col <= 11; $col++) {
        if ($col == 1 or (($row == 0 or $row == 5) and $col > 1 and $col < 9) or
         ($col == 6 and $row != 0 and $row < 6) or
          ($col == $row - 2 and $row > 4)) {
            echo "*";
        } else {
            echo "  ";
        }
    }
    echo "<br>";
}
echo "</pre>";




echo "<br>"."<br>";


//3. Write a function to calculate the factorial of a number (a non-negative integer).
echo "3. Write a function to calculate the factorial of a number (a non-negative integer)."."<br>"."<br>";

function factorial($num) {
    if ($num <= 0) {
        return -1; 
    }
    $result = 1;

    for ($i = 1; $i <= $num; $i++) {
        $result *= $i;
    }
    return $result;
}

$num = 5; 
$result = factorial($num);

if ($result <= 0) {
    echo "Error: your input must be a non-negative integer.";
} else {
    echo "The factorial of $num is " . $result . ".";
}

echo "<br>"."<br>";


// Another solution

echo"Another solution."."<br>"."<br>";

function factorial2($num) 
{ 
    if ($num == 0) 
        return 1; 
    return $num * factorial2($num - 1); 
} 

    $num = 7; 
    echo "The factorial of  $num  is ". factorial2($num); 

    echo "<br>"."<br>";



// 4. Write a PHP script to remove all white spaces in an array. 
    echo "4. Write a PHP script to remove all white spaces in an array. "."<br>"."<br>";

    function remove($array) {

        for ($j = 0; $j < count($array); $j++) {
            $newarr = '';
    
            for ($i = 0; $i < strlen($array[$j]); $i++) {
                if ($array[$j][$i] !== ' ') {
                    $newarr .= $array[$j][$i];
                }
            }
            
            $result[] = $newarr;
        }
        return $result;
    }
    $array1 = ["hello  world", "Hi   I  am  Gehan ", "R  o  u  t  e","1  5"];
    $resultarray = remove($array1);

    echo "Your array: \n";
    print_r($array1);
    
    echo "<br>";

    echo "\nAltered array after removing white spaces: \n";
    print_r($resultarray);
    
    echo "<br>"."<br>";


//5.Write a PHP program to remove duplicate values from an array which contains only strings or only integers. 
echo "5.Write a PHP program to remove duplicate values from an array which contains only strings or only integers."."<br>"."<br>";

function removee($array) {
    $result = array();

    foreach ($array as $arr) {
        $unique = true;

        foreach ($result as $uniqueElement) {
            if ($uniqueElement == $arr) {
                $unique = false;
                break;
            }
        }
        
        if ($unique) {
            $result[] = $arr;
        }
    }
    return $result;
}


$stringarray = ["apple", "orange", "banana","peach", "apple", "pear", "peach"];
$uniquestr = removee($stringarray);

$integerarray = [1, 2, 3, 4, 5,6,6,7,8,1,2,3,4,4,8];
$uniqueint = removee($integerarray);


echo "String Array:\n";
print_r($stringarray);

echo "<br>";

echo "\nArray without Duplicates :\n";
print_r($uniquestr);

echo "<br>";
echo "<br>";

echo "\nInteger Array:\n";
print_r($integerarray);

echo "<br>";

echo "\nArray without Duplicates :\n";
print_r($uniqueint);


echo "<br>";
echo "<br>";

// Another solution

echo"Another solution."."<br>"."<br>";


$string = ["apple", "orange", "banana","peach", "apple", "pear", "peach"];
$integer = [1, 2, 3, 4, 5,6,6,7,8,1,2,3,4,4,8];

$uniqeS = array_keys(array_flip($string)); 
$uniqeI = array_keys(array_flip($integer)); 

echo "String Array:\n";
print_r($string);

echo "<br>";

echo "\nArray without Duplicates :\n";
print_r($uniqeS);

echo "<br>";
echo "<br>";

echo "\nInteger Array:\n";
print_r($integer);

echo "<br>";

echo "\nArray without Duplicates :\n";
print_r($uniqeI);

?>



</body>
</html>

