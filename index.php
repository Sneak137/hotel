<?php require_once 'header.php';?>
<!--      START   OF    SLIDER          -->
	<div id="slider">
		<div class="disc-inner left">
			<div class="arrow-left">
			</div>
		</div>
		<div class="disc-inner right">
			<div class="arrow-right">
			</div>
		</div>
		<div class="container clearfix">
			<img src="images/hotel-generic.jpg">
			<aside>
				<h1>Pellentesque aliquam nibh at aliquam vehicula</h2>
				<h2>Amazing place to discover</h3>
			</aside>
		</div><!-- END .container -->
	</div><!-- END #slider  -->
	
	<section class="content container">
		<div id="book-room">
			<div id="book-info">
				<h1>Book a room online</h1>
				<p>Lorem Ipsum solor sid<br>ahmed loresin vane.</p>
			</div><!-- END .book-info -->

			<div id="fields" class="clearfix">
				<form>
					<div id="room-type">
						<p>
							<label>Type of room:</label>
						</p>
						<select>
							<option value="">Select a type of room</option>
							<option></option>
							<option></option>
						</select>
					</div> <!-- END #room-type -->

					<div id="check-in">
						<p><label for="check-in">Check-in-date:</label></p>
						<input type="date" name="date" id="check-in" value="DD/MM/YYYY">
					</div> <!-- END #checkin -->

					<div id="check-out">
						<p><label for="check-out">Check-out-date:</label></p>
						<input type="date" name="date" id="check-out" value="DD/MM/YYYY">
					</div> <!-- END #checkout -->

					<div id="adults">
						<p><label for="adults">Adults:</label></p>
						<select>
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
						</select>
					</div> <!-- END #adults -->

					<div id="children">
						<p><label for="children">Children:</label></p>
						<select>
							<option>0</option>
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
						</select>
					</div> <!-- END #children -->

					<div id="booking-btn">
						<input type="submit" name="submit" value="Book now">
					</div> <!-- #booking-btn -->
				</form>
			</div><!-- END #fields -->	
		</div> <!-- END #book-room -->

	<div id="room" class="container clearfix">

		<section class="col" id="one">
			<div class="rooms" id="single-room">
				<img class="responsive-img" src="images/room.jpg">
			</div> <!-- END .rooms #single-room -->

			<article class="img-text">
				<h1>Single room <span>110 €</span></h1>

				<p>Lorem ipsum dolor sit amet, consectetuer<br>
				adipiscing elit, sed diam nonummy nibh<br>
				euismod tincidunt ut laoreet dolore magna<br>
				aliquam erat volutpat. </p>
			</article> <!-- END .img-text -->
		</section> <!-- END .col -->

		<section class="col" id="two">
			<div class="rooms" id="double-room">
				<img class="responsive-img" src="images/room.jpg">
			</div> <!-- END .rooms #double-room -->

			<article class="img-text">
				<h1>Double room <span>180 €</span></h1>

				<p>Lorem ipsum dolor sit amet, consectetuer<br>
				adipiscing elit, sed diam nonummy nibh<br>
				euismod tincidunt ut laoreet dolore magna<br>
				aliquam erat volutpat. </p>
			</article><!-- .img-text -->
		</section> <!-- END .col -->

		<section class="col" id="three">
				<div class="rooms" id="suite-room">
					<img class="responsive-img" src="images/room.jpg">
				</div> <!-- END .rooms #suite-room -->

				<article class="img-text">
					<h1>Suite room <span>210 €</span></h1>

					<p>Lorem ipsum dolor sit amet, consectetuer<br>
					adipiscing elit, sed diam nonummy nibh<br>
					euismod tincidunt ut laoreet dolore magna<br>
					aliquam erat volutpat. </p>
				</article> <!-- .img-text -->
		</section> <!-- END .col -->
	</div> <!-- END #room -->
</section> <!-- END .content -->
<?php require_once 'footer.php';?>