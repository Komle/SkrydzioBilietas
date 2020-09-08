<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <title>LEKTUVO BILIETAS</title>
</head>
<body>
    <div class="row">
    <div id="head" class="bilietas col-12">
        <h3>LEKTUVO BILIETAS</h3>
    </div>
    </div>
        <div class="duomenys">
        <div class="paveiksliukas">
            <div class="row">
            <div class="col-4">
            <div class="top">
                <h4>Data: <?=$date?></h4>
            </div>
            <div class="skrydzio-info">
                <p>Skrydis</p>
                <p><?=$_POST['iskrenda']?>
                    <i class="fas fa-arrow-right"></i>
                <?=$_POST['skrenda']?></p>
            </div>
            </div>
                <div class="info col-4">
                    <p>Vardas : <?=$_POST['vardas']?></p>
                    <p>Pavarde : <?=$_POST['pavarde']?></p>
                    <p>Asmens Kodas : <?=$_POST['asmenskodas']?></p>
            </div>
                <div id="apmokejimas" class="apmokejimas col-4">
            <h3>Receipt</h3>
            <p>Skrydzio Numeris <?=$_POST['skrydis']?></p>
            <p>Keliones kaina <?=$kaina?> $</p>
            <p>Bagazo kaina <?=$_POST['price']>20?$daugiau:0?> $</p>
            <hr>
            <p>Bendrai moketa <?=$_POST['price']?$kaina+$daugiau:$kaina?> $</p>
                </div>
                </div>
        </div>
    </div>
    <footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</footer>
</body>
</html>