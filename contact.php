<?php require_once 'header.php';?>
<div id="subheader">
	<h2>Contact Information</h2>
</div>
<article id="content">
	<h1>Our location</h1>
	<div id="map"></div>
</article>
<form>
	<h1>Contact Form</h1>
	<p><label>Name</label></p>
	<input type="text" name="name">

	<p><label>E-mail</label></p>
	<input type="email" name="email">

	<p><label>Subject</label></p>
	<select>
		<option>Select a subject</option>
	</select>
	<br>
	<p><label>Message</label></p>
	<textarea></textarea><br>
	<input type="submit" name="submit" value="Send Message">
</form>
<?php require_once 'footer.php';?>