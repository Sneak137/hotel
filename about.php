<?php require_once 'header.php'; ?>
<div id="subheader">
	<h2>About Paradise Hotel</h2>
</div>
<article id="content">
	<nav class="sub-nav">
		<ul>
			<li><a href="">Overwiev</a></li>
			<li><a href="">Hotel Location</a></li>
			<li><a href="">Image Gallery</a></li>
			<li><a href="">Hotel Services</a></li>
			<li><a href="">Local Information</a></li>
		</ul>
	</nav>
	<div class="main-content">
		<h2>Our hotel <span>Paradise</span></h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent at nibh varius odio sollicitudin blandit nec eu<br>
		 elit. Suspendisse ac risus nunc, quis elementum lorem. Pellentesque vehicula egestas eros nec commodo.<br>
		  Phasellus adipiscing pretium sem, id congue erat fermentum at. Fusce dapibus felis non ante gravida convallis.<br>
		   Nullam vulputate convallis lectus in ultrices.<br><br>

			Etiam sollicitudin mattis pulvinar. Duis congue dignissim turpis, ut consectetur mauris congue a. Pellentesque<br>
			 habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam hendrerit, arcu a<br> 
			 vehicula bibendum, dolor orci consectetur nisl, a imperdiet ante magna eget neque. Sed ac dolor ante. Etiam in<br> 
			 ipsum neque, et ultricies nibh. Sed vel ultrices nulla. Maecenas nulla ipsum, bibendum sit amet tristique non,<br> 
			 rhoncus a neque. </p>
	</div>

	<div id="divider"></div>

	<div class="sub-content">
		<h3>Class aptent taciti sociosqu</h3>
		<div id="img1" class="img">
		</div>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent at nibh varius odio sollicitu-<br>
			din blandit nec eu elit. Suspendisse ac risus nunc, quis elementum lorem. Pellentesque<br>
			 vehicula egestas eros nec commodo. Phasellus adipiscing pretium sem, id congue erat<br>
			  fermentum at. Fusce dapibus felis non ante gravida convallis. Nullam vulputate convallis<br>
			   lectus in ultrices.</p>

		<div id="img2" class="img">
		</div>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent at nibh varius odio<br> sollicitu
			din blandit nec eu elit. Suspendisse ac risus nunc, quis elementum lorem.<br> Pellentesque
			 vehicula egestas eros nec commodo. Phasellus adipiscing pretium<br> sem, id congue erat
			  fermentum at.
	</div>
</article>
<form>
	<p><label>Search</label></p>
	<input type="search" placeholder="Search..."><br><br>

	<p><label>Reservations</label></p>
	<p>Request a reservation. We will come back to you shortly.</p>
	<select>
		<option>Select a room...</option>
	</select><br>

	<input type="date" id="from">

	<input type="date" id="to"><br>

	<input type="submit" name="submit" value="Book now"><br><br>

	<div id="contact-us">
		<h3>Contact us</h3>
		<p>02/555 333 222</p>
		<div class="icon"></div>

		<p>Live Chat</p>
		<div class="icon"></div>

		<p>info@pixel-fabric.com</p>
		<div class="icon"></div>

	</div>

</form>
<?php require_once 'footer.php'; ?>