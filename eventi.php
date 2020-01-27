<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it" lang="it">
<head>

  <?php 
        include_once 'functions.php'; 
      getHead("Eventi");
     ?>   
          
  </head>

<?php getMenu("Eventi");?>

<?php getBreadcumbs("Eventi");?>

<div class="home-pt1 eventi-pt1">
        
       <div id="contenitore-bottoni-citta" class="lista-citta citta-eventi">     
        <div class="eventi-sx">

            <div>
              <button class="box-pulsante box-width-11 attivo selezione" onclick="filterSelectionCitta('Tutti')" tabindex="9"> Tutti </button>
          
              <button class="box-pulsante box-width-11 selezione" onclick="filterSelectionCitta('Padova')" tabindex="10"> PADOVA </button>
                    
              <button class="box-pulsante box-width-11 selezione" onclick="filterSelectionCitta('Verona')" tabindex="11">VERONA</button>
                     
              <button class="box-pulsante box-width-11 selezione" onclick="filterSelectionCitta('Vicenza')" tabindex="12">VICENZA</button>
            </div>
            <div>
                      
              <button class="box-pulsante box-width-11 selezione" onclick="filterSelectionCitta('Venezia')" tabindex="13">VENEZIA</button>
          
              <button class="box-pulsante box-width-11 selezione" onclick="filterSelectionCitta('Treviso')" tabindex="14">TREVISO</button>
                     
              <button class="box-pulsante box-width-11 selezione" onclick="filterSelectionCitta('Belluno')" tabindex="15">BELLUNO</button>
                      
              <button class="box-pulsante box-width-11 selezione" onclick="filterSelectionCitta('Rovigo')" tabindex="16">ROVIGO</button>
         
            </div>
                  
        </div>
        <div class="end-eventi"></div>
      </div>
      
    </div>

  <div class="home-pt3">

<?php
            require_once('functions.php');
            $output=getEventiTutti();
            $outCat="";
            $tab=17;
            if($_SESSION['eventi']===true){
            foreach ($output as $elem) {
                if($elem){
                    $outCat.=   "
                                
            
                                    <div class='filterDiv ".$elem['Citta']." box-evento ".$elem['Categoria']."'>
                                        <div class='box-img'>
                                            <img class='img-evento' src='".getImg($elem['ID'])."' alt='immagine evento'>
                                        </div>
                                        <div class='box-titolo'>
                                            <div class='box-icona'></div>
                                                <p class='scritte-evento'>".$elem['Titolo']."</p>
                                        </div>
                                        <div class='box-categoria '>
                                            <div class='box-icona'></div>
                                            <p class='scritte-evento'>".$elem['Categoria']."</p>
                                        </div>
                                        <div class='box-data'>
                                            <div class='box-icona'>
                                                <div id= 'calendario'></div>
                                            </div>
                                            <div class='box-data-evento'>
                                                <p class='scritte-evento'>".$elem['Data']."</p>
                                            </div>
                                        </div>
                                        <div class='box-descr'>
                                            <div class='box-icona'></div>
                                            <p class='scritte-evento'> ".$elem['Descrizione']."</p>
                                        </div>
                                        <div class='box-luogo'>
                                            <div class='box-icona'>
                                                <div id='local'></div>
                                            </div>
                                            <div class='box-luogo-evento'>
                                                <p class='scritte-evento'>".$elem['Luogo']."</p>
                                            </div>
                                        </div>
                                        <div class='box-dettagli'>
                                        <div class='box-icona'>
                                                
                                            </div>
                                            <div >
                                                
                                                
                                                <a href='dettagli_evento.php?id=".$elem['ID']."' class='scritte-dettagli selezione link' tabindex='".tabIndex($tab)."'>DETTAGLI</a>



                                            </div> 
                                             
                                        </div>
                                    </div>
                                    ";
                    }
                    $tab=$tab+1;
            }}


            else{$outCat.= "<p> <h3>Non sono ancora stati inseriti eventi.<h3></p>";}
            echo $outCat; 
            unset($outCat);
        ?>


                
                
              
</div>


</body>


<script> 
filterSelectionCitta("Tutti")
function filterSelectionCitta(c) {
  var x, i;
  x = document.getElementsByClassName("filterDiv");
  if (c == "Tutti") c = "";
  // Add the "show" class (display:block) to the filtered elements, and remove the "show" class from the elements that are not selected
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

// Show filtered elements
function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {
      element.className += " " + arr2[i];
    }
  }
}

// Hide elements that are not selected
function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);
    }
  }
  element.className = arr1.join(" ");
}

// Add active class to the current control button (highlight it)
var btnContainer = document.getElementById("contenitore-bottoni-citta");
var btns = btnContainer.getElementsByClassName("selezione");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName(" attivo");
    current[0].className = current[0].className.replace(" attivo", "");
    this.className += " attivo ";
  });
}

</script>

<?php getFooter() ?>    