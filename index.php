<?php
	include '../php/check.php';
?>
<html lang="en">
<head>
<meta charset="UTF-8">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script> 

<script>



function GameDetails( servername, serverurl, mapname, maxplayers, steamid, gamemode )

{

    $("#mapName").text(mapname);

    $("#gameMode").text(gamemode);

}

</script>
<title> LOADING </title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

	<body class="bg">



<div class="texthost"> [DRP] Marglytta Role Play</div>

<div id="myProgress">
	<div id="myBar"></div>
</div>

	<div class="textpidor"> привет, удачи на нашем сервере, люблю тебя! ❤</div>

		<div id="status" class="textkray">Загружаем файлы</div>
					<div class="textdetails"><?php echo 'Карта: '.$infor1["map"]; ?>
		</div>



	</body>
</html>