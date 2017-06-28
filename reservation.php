<?php require_once 'header.php';?>
<div id="subheader">
	<h2>Reservation</h2>
</div>
<article id="content">
	<div id="step">
		<div>
			<div class="one"></div>
			<h3>Basic Information</h3>
		</div>
		<div>
			<div class="two"></div>
			<h3>Select Room</h3>
		</div>
		<div>
			<div class="three"></div>
			<h3>Guest Information</h3>
		</div>
		<div>
			<div class="four"></div>
			<h3>Finish</h3>
		</div>
	</div>
	<div class="basic-info">
		<h2>Basic Information</h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent at nibh varius odio sollicitu-<br>
			din blandit nec eu elit. Suspendisse ac risus nunc, quis elementum lorem. Pellentesque<br>
			 vehicula egestas eros nec commodo.</p>
	</div>
	<form action="">
		<p><label>Check-In:</label></p>
		<input type="date" id="check-in">

		<p><label>Check-Out:</label></p>
		<input type="date" id="check-out"><br><br>

		<h4>Number of rooms:</h4>
		<select>
			<option>1</option>
		</select>
        
        <h4>Adults per room:</h4>
        <select>
        	<option>1</option>
        </select>

        <h4>Children0-5:</h4>
        <select>
        	<option>0</option>
        </select>

        <h4>Children 6-12:</h4>
        <select>
        	<option>0</option>
        </select>
        <input type="submit" name="submit" value="Continue">
	</form>
</article>
<?php require_once 'footer.php';?>