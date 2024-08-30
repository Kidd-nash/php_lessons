<form method="post" action="">
Enter some HTML:
<br>
<input type="text" name="html">
<br>  
<input type="submit" value="Submit">
</form>
<div>
  You entered:
    <!-- Allows html special characters to be printed as a string -->
	<?= htmlspecialchars($_POST["html"]) ?> 
</div>  