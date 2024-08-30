<?php
   $pagetitle = 'this is a page title';


   $content = 'this is my content with no search';

   $otherContent = 'this is alternate content';


   $bodyClass = 'dark_mobde';


   $searchString = $_GET['search'] ?? '';
   //is_null($_GET['search']) ? '' : $_GET['search'];

?>

<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $pagetitle ?></title>
    </head>
    <body class="<?php echo $bodyClass ?>" >

        <?php
            if (strlen($searchString) > 0) {
                echo $otherContent;
            } else {
                echo $content;
            }
        ?>


        <?php //echo $content ?>
        <br />

        search : <?php echo $searchString ?>
    </body>
</html>
<h1>My First PHP Site</h1>
<p>This HTML will get delivered as is</p>
<?php echo "<p>But this code is interpreted by PHP and turned into HTML</p>";?>
<?php echo "<ul><li>You can use any HTML tags,</li><li>like this list.</li></ul>";?>
<footer>
    <p>And this code is back in plain HTML</p>
</footer>

<?php
    echo nl2br(
        "I love PHP!
        This sentence is in the same echo as the \"I love PHP!\" but with the use of nl2br(),
        inside the quotations and the string inside it you could do a line break
        Display a sentence with \"quotations\" on words, using a backslash in order to inform a code that a special character is to be presented
        In code each of the echo from 1-3 below hase \\n and it does not work
        "); ?>

<?php 
    echo nl2br(
        "this"."sentence"."is"."concatenated\n"
        );?>


<?php
    echo "1. a thing I have to do";
    echo "\n2. another thing I have to do";
    echo "\n3. Learn to have \"fun\"\n";?>
<?php
$first_variable = "this string is inside the first variable";
$biography = "\nI am coding right now. I am in my bed.";
$favorite_food = "tur"."duck"."en";

echo nl2br("\n" . $first_variable . $biography . "\n" . $favorite_food);?>

<?php 
    $noun = "noun";
    $adjective = "adjective";
    $verb = "verb";
    $movie = "Cars";
    $old_favorite = $movie;
  
    echo nl2br("\nI'm a fickle person, my favorite movie used to be $movie.");
    
    $movie = "Cars 2";
    
    echo nl2br("\nBut now my favorite is $movie.");
    
    echo "\n $old_favorite";

    echo nl2br("\nThe world's most beloved $noun was very $adjective and loved to $verb every single day.");

    echo nl2br("\nI have always been obsessed with ${noun}s. I'm ${adjective}ish. I'm always ${verb}ing.");
//variable reassignment
    $movie = "Cars";
      //assigning a variables value to another variable
      $old_favorite = $movie;
    
      echo nl2br("\nI'm a fickle person, my favorite movie used to be $movie.");
      //reassigned variable movie to another value
      $movie = "Cars 2";
      
      echo nl2br("\nBut now my favorite is $movie.");
      
      echo "\n $old_favorite";

//Concatenating Assignment Operator
    echo "I'm going on a picnic!";

    $sentence = nl2br("\nI'm going on a picnic, and I'm taking apples");

    echo $sentence;

    $sentence .= ", banana";

    echo $sentence;

    $sentence .= ", cherry, and dragon fruit";

    echo $sentence;

//Assign by reference
    $very_bad_unclear_name = "15 chicken wings";
    //referencing a variable to not change its value
    $order =& $very_bad_unclear_name; 
    //adding a value to the reference variable
    $order .= ", 1 cheeseburger";
    
    $order .= ", 3 side salads";
        
    echo "\nYour order is: $very_bad_unclear_name.";?>
<!-- PHP numbers -->
<?php
    //echo numbers, integers and floating numbers
    $number_variable = 23;
    $floating_number = 3.14;
    echo nl2br("\n$number_variable is an integer and $floating_number is pi and is a floating type number.");
    //operations for numbers
    echo nl2br("\n" . 10 + 15 - 13);
    
    //both should equate to 12
    echo nl2br("\n" . 10 + 2);

    //numbers in variables
    $average_gunpla_lifespan = 10;
    $years_gunpla = 6;
    echo nl2br("\nmy gunpla now only have " . $average_gunpla_lifespan - $years_gunpla . " years.");

    //multiplication and division
    // you can use (*) for multiplication and (/) for division
    $num_languages = 4;

	$months = 11;

	$days = $months * 16;

	$days_per_language = $days / $num_languages;
	
	echo nl2br("\n" . $days_per_language . " is the days it takes to learn a language by average.");

    //exponentiation
    //you can use two asterisks (**)
    echo nl2br("\n" . 8 ** 2);

    //modulo
    //gives the remainder of 2 given numbers (%)
    echo nl2br("\n" . 82 % 6);

    //Order of Operations
    // echo 94 - (4.25 - 7 + 23.5 + (23.5 * 0.2) + 5);
    echo 94 - 4.25 + 7 - 23.50 * 1.2 + 20 / 4;

    //Mathematical Assignment Operators
    

 ?> 

<!-- PHP Class and Objects -->
<?php 
    //Classes
    // Beverage - class name
    // public - $variables are properties
    class Beverage {
        public $color, $opacity, $temperature;
        //constructor
        function __construct($temperature, $color) {
            $this->temperature = $temperature;
            $this->color = $color;
          }
        //Methods
        function getInfo() {
            return "This beverage is $this->temperature and $this->color.";
          }
    }
    class Milk extends Beverage {
        function __construct() {
          $this->temperature = "cold";
        }
        function getInfo() {
            // Call the parent's getInfo method
            $parentInfo = parent::getInfo();
            // Add additional information
            return "$parentInfo I like my milk this way.";
        }
        
      }
    //Instantiating
    $milk = new Milk();

    // echo $milk->getInfo();
    // $tea = new Beverage(hot, brown);
    // $tea->temperature = "hot";
    // echo $tea->temperature;
    // $soda = new Beverage(hot, brown);
    // $soda->color = "black";
    // $soda->temperature = "cold";

    
    class AdamsUtils {
    public static $the_answer = 42;
    public static function addTowel($string) {
        return $string . " and a towel.";
    }
}

$items = "I brought apples";
echo AdamsUtils::$the_answer;
echo "\n";
echo AdamsUtils::addTowel($items);
?>

<?php 
echo nl2br("\nECHO");
?>

<?php

function inflateEgo()
{
  echo "a compliment.\n";
}

inflateEgo();

function printStringReturnNumber()
{
  echo "a string\n";
  return 23;
}

$my_num = printStringReturnNumber();

echo $my_num;

function notFound()
{
  echo "ERROR: Page not found!\n";
  return 404;
}

function greetLearner()
{
  echo "Hello, Learner!\n";
  echo "I hope you're (still) enjoying PHP!\n";
  echo "Love, Codecademy\n";
  return "<3";
}

$error = notFound(); 
$heart = greetLearner();

echo "I received a $error, but it's ok because I also received $heart.";

function first()
{
  return "You did it!\n";
}

function second()
{
  return "You're amazing!\n";
}

function third()
{
  return "You're a coding hero!\n";
}

// Write your code below:

echo first() . second() . third();

function createVacuum()
{
  echo "It doesn't actually matter if this function does anything as long as it returns NULL.";
}

// echo createVacuum() * 10;

function increaseEnthusiasm($str_param)
{
  return $str_param . "!";
}

function repeatThreeTimes($str_param)
{
  return $str_param . $str_param . $str_param;
}  

echo increaseEnthusiasm("oh");

echo repeatThreeTimes("wow");

echo increaseEnthusiasm(repeatThreeTimes("hai"));

//multiple parameters

function calculateArea($height, $width)
{
  return $height * $width;
}

function calculateVolume($height, $width, $depth)
{
  return $height * $width * $depth;
}  

echo calculateArea(5, 10);
echo "\n";
echo calculateVolume(4, 11, 7);

//default parameters
function calculateTip($total, $tip = 20)
{
  return $total * (1 + $tip/100);
}

/*
// An Alternate Version:
function calculateTip($total, $tip = 20)
{
  return $total + ($total * $tip/100);
}
*/

echo calculateTip(100, 25);
echo "\n";
echo calculateTip(100); 
echo "\n";
echo calculateTip(65, 15); 

$string_one = "you have teeth";
$string_two = "toads are nice";
$string_three = "brown is my favorite color";

//by reference
function convertToQuestion(&$str)
{
  $str = "Do you think " . $str . "?\n";
}


convertToQuestion($string_one);
convertToQuestion($string_two);
convertToQuestion($string_three);

echo $string_one;
echo $string_two;
echo $string_three;

//Scope

$language = "PHP";
$topic = "scope";

function generateLessonName($concept)
{
  global $language;
  return $language . ": " . $concept;
}

echo generateLessonName($topic);

//Built in Functions

$first = "Welcome to the magical world of built-in functions.";
  
$second = 82137012983; 

echo gettype($first);
//gives  value presenting data type
echo gettype($second);

var_dump($first);
//prints details about the arguement
var_dump($second);

echo strrev(".pu ti peeK .taerg gniod er'uoY");
//prints string in revers
echo strtolower("SOON, tHiS WILL Look NoRmAL.");
//prints string to lower case
echo str_repeat("\nThere's no place like home.\n", 3);
//prints string on repeat (insert the number of times you want it to repeat)

$essay_one = "I really enjoyed the book. I thought the characters were really interesting. The plot of the novel was really 
engaging. I really felt the characters' emotions. They were really well-written. I really wish the ending had been different 
though.";
  
$essay_two = "Obviously this is a really good book. You obviously would not have made us read it if it wasn't. I felt like the 
ending was too obvious though. It was so obvious who did it right away. I think the thing with the light was obviously a 
metaphor for life. It would have been better if the characters were less obvious about their secrets.";  

//substring count
echo substr_count($essay_one, "really");
echo "\n";
echo substr_count($essay_two, "obvious");

function calculateDistance($first, $second)
{
  return abs($first - $second);
}

function calculateTips($total)
{
  return round($total * 1.18);
}

echo calculateDistance(-1, 4); // Prints: 5
echo "\n";
echo calculateDistance(4, -1); // Prints: 5
echo "\n";
echo calculateDistance(3, 7); // Prints: 4
echo "\n";
echo calculateDistance(7, 3); // Prints: 4
echo "\n";
echo calculateTips(100); // Prints 118 
echo "\n";
echo calculateTips(35); // Prints 41
echo "\n";
echo calculateTips(88.77); //Prints 105
echo "\n";

echo getrandmax();
//gives a high random value
echo "\n";
echo rand();
//gives a random value
echo "\n";
echo rand(1, 52);
//in between random value

//Documentation
//str_pad ( string $input , int $pad_length [, string $pad_string = " " [, int $pad_type = STR_PAD_RIGHT ]] ) : string
$a = 29;
$b = "You did it!";
$c = STR_PAD_BOTH;
$d = "*~*";

echo str_pad($b, $a, $d, $c);//Prints *~**~**~*You did it!*~**~**~*

//Finding Functions
function convertToShout($str)
{
  return strtoupper($str) . "!";
}

function tipGenerously($cost)
{
  return ceil($cost * 1.2);
}

function calculateCircleArea($diameter)
{
  return pi() * ($diameter/2)**2;
}

echo convertToShout("woah there, buddy"); // Prints: WOAH THERE, BUDDY!
echo "\n";
echo convertToShout("i just don't know");// Prints: I JUST DON'T KNOW!
echo "\n";
echo tipGenerously(100.00); // Prints: 120
echo "\n";
echo tipGenerously(982.27); // Prints: 1179
echo "\n";
echo calculateCircleArea(6); // Prints: 28.274333882308
echo "\n";
echo calculateCircleArea(29); // Prints 660.51985541725  

// php link https://www.php.net/manual/en/langref.php
// https://www.php.net/manual/en/ref.strings.php
// https://www.php.net/manual/en/ref.math.php

//Ordered Arrays
$first_array = array("hello", 88, "my", -12361.11, "friend");

echo count($first_array);

$with_function = array("PHP", "popcorn", 555.55);

$with_short = ["PHP", "popcorn", 555.55];

$message = ["Oh hey", " You're doing great", " Keep up the good work!\n"];

$favorite_nums = [7, 201, 33, 88, 91];

echo implode("!", $message);

print_r($favorite_nums);

$round_one = ["X", "X", "first winner"];

$round_two = ["second winner", "X", "X", "X"];

$round_three = ["X", "X", "X", "X", "third winner"];

$winners = [$round_one[2], $round_two[0], $round_three[4]];

print_r($winners);

$change_me = [3, 6, 9];

$change_me[] = "woohoo";

$change_me[] = 77;

$change_me[1] = "tadpole";

print_r($change_me);

$stack = ["wild success", "failure", "struggle"];

array_push($stack, "blocker","impediment");

print_r($stack);

array_pop($stack);
array_pop($stack);
array_pop($stack);
array_pop($stack);

print_r($stack);

$record_holders = [];

array_unshift($record_holders, "Tim Montgomery", 
"Maurice Greene", "Donovan Bailey", "Leroy Burrell", "Carl Lewis");

echo implode(", ", $record_holders) . "\n\n";

array_shift($record_holders);

echo implode(", ", $record_holders) . "\n\n";

array_unshift($record_holders, "Justin Gatlin", "Asafa Powell");

echo implode(", ", $record_holders) . "\n\n";

array_shift($record_holders);

echo implode(", ", $record_holders) . "\n\n";

array_unshift($record_holders, "Usain Bolt");

echo implode(", ", $record_holders) . "\n\n";

$treasure_hunt = ["garbage", "cat", 99, ["soda can", 8, ":)", "sludge", 
["stuff", "lint", ["GOLD!"], "cave", "bat", "scorpion"], "rock"], "glitter", "moonlight", 2.11];

echo $treasure_hunt[3][4][2][0];

//Associative Arrays

$php_array = array(
  "language" => "PHP", 
  "creator" => "Rasmus Lerdorf", 
  "year_created" => 1995, 
  "filename_extensions" => [".php", ".phtml", ".php3", ".php4", ".php5", ".php7", ".phps", ".php-s", ".pht", ".phar"]
);

$php_short = [
  "language" => "PHP", 
  "creator" => "Rasmus Lerdorf", 
  "year_created" => 1995, 
  "filename_extensions" => [".php", ".phtml", ".php3", ".php4", ".php5", ".php7", ".phps", ".php-s", ".pht", ".phar"]
];

//Printing Associative Arrays

$september_hits = ["The Sixth Sense" => 22896967,
"Stigmata" => 18309666,
"Blue Streak" => 19208806,
"Double Jeopardy" => 23162542];

echo implode(", ", $september_hits);

print_r($september_hits);

//Adding and Accessing Elements

$assignment_one = ["Alex"=> 87, "Kenny"=> 91, "Natalia"=> 91, "Lily"=> 67, "Dan"=> 81, "Kat"=> 77, "Sara" => 65];

$assignment_two = ["Alex"=> 91, "Kenny"=> 99, "Natalia"=> 100, "Lily"=> 61, "Dan"=> 88, "Kat"=> 90];

$assignment_three = ["Alex"=> 78, "Kenny"=> 92, "Natalia"=> 94, "Lily"=> 79, "Dan"=> 73, "Sara" => 61];

$student_name = "Alex";

$assignment_two["Sara"] = 65;
$assignment_three["Kat"] = 97;

$dans_grades = [$assignment_one["Dan"], $assignment_two["Dan"], $assignment_three["Dan"]];

echo $assignment_two[$student_name];

//Changing and removing elements

$my_car = [
  "oil" => "black and clumpy",
  "brakes" => "new",
  "tires" => "old with worn treads",
  "filth" => "bird droppings", 
  "wiper fluid" => "full", 
  "headlights" => "bright"
];
print_r($my_car);

$my_car["oil"] = "new and premium";

$my_car["tires"] = "new with deep treads";


unset ($my_car["filth"]);

print_r($my_car);

//Numerical Keys

$hybrid_array = ["cat", "dog", 9, 18.2];

$hybrid_array[8] = "five more";

print_r($hybrid_array);

array_push($hybrid_array, rand());

echo $hybrid_array[9];

//Joining Arrays

$giraffe_foods = ["dip"=>"guacamole", "chips"=>"corn", "entree"=>"grilled chicken"];

$impala_foods = ["dessert"=>"cookies", "vegetable"=>"asparagus", "side"=>"mashed potatoes"];

$rat_foods = ["dip"=>"mashed earth worms", "entree"=>"trash pizza", "dessert"=>"sugar cubes", "drink"=>"lemon water"];

$potluck = $giraffe_foods + $impala_foods;

print_r($potluck);

$rat_impala = $rat_foods + $impala_foods;

print_r($rat_impala);

$everybody =  $giraffe_foods + $impala_foods + $rat_foods;

print_r($everybody);

//Assign by Value/Reference

$doge_meme = ["top_text" => "Such Python", "bottom_text" => "Very language. Wow.", "img" => "very-cute-dog.jpg", "description" => "An adorable doge looks confused."];

$bad_meme = ["top_text" => "i don't know", "bottom_text" => "i can't think of anything", "img" => "very-fat-cat.jpg", "description" => "A very fat cat looks happy."];


function createMeme ($meme) 
{
  $meme["top_text"] = "Much PHP";
  $meme["bottom_text"] = "Very programming. Wow.";
  return $meme;
}  

print_r($doge_meme);

$php_doge = createMeme($doge_meme);

print_r($php_doge);

function fixMeme (&$meme) 
{
  $meme["top_text"] = "I can haz";
  $meme["bottom_text"] = "PHP, plz?";
  return $meme;
} 

print_r($bad_meme);

fixMeme ($bad_meme);

print_r($bad_meme);

//While

$count = 1;
while ($count <= 100)
{
  if ($count % 33 === 0) {
    echo $count . " is divisible by 33\n";
  }
  $count += 1;
}

//do while

$plant_height = 22;
do  {
  echo "The plant is $plant_height tall.\n";
  if ($plant_height >= 30) {
    echo "And can produce fruit.\n";
  }
  $plant_height ++;
} while ($plant_height < 31);

//For 

for ($i = 10; $i >= 0; $i--) {
  if ($i === 2) {
    echo "Ready!\n";
  } elseif ($i === 1) {
    echo "Set!\n";
  } elseif ($i === 0) {
    echo "Go!\n";
  } else {
    echo $i . "\n";
  }
}

//For each

$scores = [
  "Alice" => 99,
  "Bob" => 95,
  "Charlie" => 98,
  "Destiny" => 91,
  "Edward" => 88
];

foreach ($scores as $score) {
  echo "Someone received a score of $score.\n";
}

foreach ($scores as $name => $score) {
  echo "$name received a score of $score.\n";
}

//break and continue

for ($i = 10; $i >= 0; $i--) {
  if ($i === 2) {
    echo "Ready!\n";
  } elseif ($i === 1) {
    echo "Set!\n";
    break;
  } elseif ($i === 0) {
    echo "Go!\n";
  } elseif ($i===6) {
    continue;
  } else{
    echo $i . "\n";
  }
}

?>
