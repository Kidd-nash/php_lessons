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
// Write your code below:
  echo "1. a thing I have to do";
  echo "\n2. another thing I have to do";
  echo "\n3. Learn to have \"fun\"";
  



