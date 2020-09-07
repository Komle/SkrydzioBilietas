<?php
    if(isset($_POST['rezervuoti'])){
        require 'bilietas.php';
        ?>
       <?php 
    }
    else{
    ?>
<link rel="stylesheet" href="css/styles.css">
<form method="post" name="Forma">
<label for="fname">Skrydzio nr</label><br>
<select name="skrydis" id="skrydzio" require>
            <?php for($i=0; $i<count($skrydzionr); $i++):?>
            <option value=<?=$i?>><?=$skrydzionr[$i]; ?></option>
            <?php endfor ?>
        </select><br><br>
<label for="lname">Asmens kodas</label><br>
<input type="text" id="lname" name="asmenskodas" placeholder="395"><br><br>
<label for="iskrenda">Is kur skrenda</label>
        <select name="iskrenda" id="klase" require>
            <?php for($i=0; $i<count($skrenda); $i++):?>
            <option value=<?=$skrenda[$i];?>><?=$skrenda[$i]; ?></option>
            <?php endfor ?>
        </select><br><br>
        <label for="skrenda">I kur skrenda</label>
        <select name="skrenda" id="skrenda" require>
            <?php for($i=0; $i<count($iskrendra); $i++):?>
            <option value=<?=$iskrendra[$i];?>><?=$iskrendra[$i]; ?></option>
            <?php endfor ?>
        </select><br><br>
<label for="klase">Kaina</label>
<input type="text" id="lname" name="price" placeholder="Eu">
        <select name="class" id="klase" require>
            <?php for($i=0; $i<count($bagazas); $i++):?>
            <option value=<?=$i?>><?=$bagazas[$i]; ?></option>
            <?php endfor ?>
        </select><br><br>
<textarea name="message" style="width:150px; height:100px;" placeholder="Parasyk kazka cia...."></textarea><br>
    <button name="rezervuoti" type="submit">Rezervuoti</button>
</form>
<?php } ?>