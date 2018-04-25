<?php include "inc/top.php" ?>

<h3 class='contact'>CONTACT</h3>
<form class='contact' method='post' action='contact-form.php'>
	<input  class='contact' type="text" name="name" placeholder="Name...">
	<input  class='contact' type="text" name="address" placeholder="Address...">
	<input  class='contact' type="email" name="email" placeholder="Email...">
	<input  class='contact' type="tel" name="phonenumber" placeholder="Phone Number...">
	<textarea class='contact'  placeholder="Message here..." name="message" ></textarea>
	<button class='contact' name="submit" type="submit" value="Submit">Submit</button>
</form>

<?php include "inc/bottom.php" ?>