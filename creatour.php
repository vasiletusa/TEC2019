<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it" lang="it">

<?php include('./parti/head.php') ?>
	<section>
	  <div class="container">
  <form method="post" action="tuor.php">
    <div class="row">
      <div class="col-25">
        <label for="dData">Data</label>
      </div>
      <div class="col-75">
        <input type="text" id="dData" name="data" placeholder="Data del tour..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="org">Organizzatore</label>
      </div>
      <div class="col-75">
        <input type="text" id="org" name="organizzatore" placeholder="Organizzatore del tour..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="ccitta">Citta</label>
      </div>
      <div class="col-75">
        <form>
	<fieldset>
	<select name="citta" >
	<option value="padova" selected="selected">Padova</option>
	<option value="verona">Verona</option>
	<option value="trviso">Treviso</option>
	<option value="venezia">Venezia</option>
	<option value="vicenza">Vicenza</option>
	<option value="belluno">Belluno</option>
	</select>
	</fieldset>
	</form>
      </div>
    </div>  
    <div class="row">
      <div class="col-25">
        <label for="gguida">Guida</label>
      </div>
      <div class="col-75">
        <input type="text" id="gguida" name="guida" placeholder="Guida responsabile del tour...">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="descr">Descrizione</label>
      </div>
      <div class="col-75">
        <input type="text" id="descr" name="descrizione"placeholder="Descrizione del tour...">
      </div>
    </div>
    <div class="row">
      <input type="submit" value="Sign">
    </div>
  </form>
</div> 
	</section>

<?php include('./parti/footer.php') ?>

