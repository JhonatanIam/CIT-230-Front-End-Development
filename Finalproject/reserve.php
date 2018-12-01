<?php include 'header.php'; ?>  

<main>

<div id="content" class="clearfix">
<h1>Reservations</h1>
    
<div class="row">
<div class="left">

<form action="index.php" method="post" enctype="multipart/form-data" name="attend" id="conference">
<fieldset>
<legend>Personal Info</legend>
<label><span>Name</span><input name="name" type="text" placeholder="Full name" pattern="[a-zA-Z -._]{4,99}" required autofocus title="Provide your full name"></label>
<label><span>Address</span><input name="address" type="text" placeholder="123 Your address Dr" pattern="[a-zA-Z0-9. ]{3,99}" required title="Provide your address"></label>
<label><span>City</span><input name="city" type="text" placeholder="City" pattern="[a-zA-Z -._]{4,99}" required title="Provide your City"></label>
<label><span>State</span><input name="state" type="text" placeholder="Sate" pattern="[a-zA-Z -._]{2,50}" required title="Provide your State"></label>
<label><span>Email</span><input name="email" type="email" placeholder="Your@email.com" required title="Provide a valid email address"></label>
<label><span>Phone</span><input name="phone" type="tel" placeholder="1234567890" pattern="[0-9]{10,99}" required title="Provide a valid email address"></label>
<label><span>Credit Card</span><input name="Credit Card" type="tel" placeholder="1234567890" pattern="[0-9]{20-25}" required title="Provide a valid credit card number"></label>
</fieldset>


<fieldset>
<legend><span>Group Info</span></legend>
<label><span>Select a group name</span>
<input type="text" name="Select a group name" list="characters">
<datalist id="characters">
<option value="River Monsters"> </option>
<option value="Aquamen"> </option>
<option value="Lost boys"> </option>
<option value="I'll create a name later"> </option>
</datalist></label>
<label><span>Number of Participants</span><input name="participantCount" type="number" ></label>
<label><span>Arrival date</span><input name="date" type="date" ></label>
</fieldset>

<input type="submit" value="Reserve" class="submitBtn">

<input type="hidden" value="Conference Registration" name="subject" >
<input name="redirect" type="hidden" value="thanks.html">
</form>
		
</div>
</div>
</div>

</main>
    <?php include 'footer.php'; ?>
		