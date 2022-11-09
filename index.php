<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <title>Lógica de Programação com PHP - Hipoteticus</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Asap:ital,wght@1,700&family=Nunito:wght@700&family=Yellowtail&display=swap" rel="stylesheet">

 </head>
<header>
    <center><h2>Descrição das estações. </h2><center>
</header>

<body>
<div class="principal">
<h3>Selecione a estação: </h3>
<form id="L" method="post">
   <select name="estacao" onchange="this.form.submit()">
    <option>Estações</option>
    <option value="Primavera é a estação que começa em Setembro e termina em Dezembro.">Primavera</option>
    <option value="Verao é a estação que começa em dezembro e termina em Março.">Verão</option>
    <option value="Outono é a estação que começa em Março e termina em Junho.">Outuno</option>
    <option value="Inverno é a estação que começa em Junho e termina em Setembro.">Inverno</option>
  </select><br><br>

</form>

<?php
$_POST['estacao'] = ( isset($_POST['estacao']) ) ? $_POST['estacao'] : "Escolha uma estação para ver sua descrição.";
echo $_POST['estacao'];

?>
</section>
</div>
 </body>
</html>
