<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it" lang="it">

<?php include('./parti/head.php') ?>
	<section>
	  <div class="container">
  <form method="post" action="register.php">
    <div class="row">
      <div class="col-25">
        <label for="fname">First Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="firstname" placeholder="Your name..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Last Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Age</label>
      </div>
      <div class="col-75">
        <input type="text" id="age" name="age" placeholder="Your age">
      </div>
    </div>  
    <div class="row">
      <div class="col-25">
        <label for="email">Email</label>
      </div>
      <div class="col-75">
        <input type="text" id="email" name="email" placeholder="Your email..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="pw">Password</label>
      </div>
      <div class="col-75">
        <input type="text" id="pw" name="pw">
      </div>
    </div>
    <div class="row">
      <input type="submit" value="Sign">
    </div>
  </form>
</div> 
	</section>

<?php include('./parti/footer.php') ?>

</body>
</html>
