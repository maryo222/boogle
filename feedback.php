<?php
include 'partials/header.php'; 
?>

<h1>
  <a href="index.php">
    <img class="logo" src="img/logo.png"/>
  </a>
</h1>

<div class="container">
<form action="thanks.php" method="POST"> 
	Name: <input type="text" name="name" placeholder="name">
		<br><br>
	Email: <input type="text" name="email" placeholder="email">
		<br><br>
	Feedback <textarea name="feedback" rows="5" cols="40"></textarea>
		<br><br>
<input type="submit">
</form>
</div>

<?php include 'partials/footer.php'; ?>