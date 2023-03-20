<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<!-- font google -->
		<link rel="preconnect" href="https://fonts.googleapis.com" />
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
		<link
			href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;700;800;900;1000&display=swap"
			rel="stylesheet"
		/>
		<!-- font awesome cdn -->
		<link
			rel="stylesheet"
			href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
			integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
			crossorigin="anonymous"
			referrerpolicy="no-referrer"
		/>
		<!-- my css -->
		<link rel="stylesheet" href="css/style.css" />

		<!-- daisyui -->  
		<link href="https://cdn.jsdelivr.net/npm/daisyui@2.51.3/dist/full.css" rel="stylesheet" type="text/css" />
    	<!-- tailwind -->
    	<script src="https://cdn.tailwindcss.com"></script>

		<title>FOUR<?= $title?>  </title>
	</head>
	<body>
		<!-- header -->
		<header class="container bg-[#333A7B] text-white text-3xl flex space-x-96 pl-24 pt-8 h-24 max-w-full place-content-between">
			<!-- div logo -->
			<div class="text-4xl font-black uppercase">
				<a href="index.php" class="logo">Logo</a>
			</div>
			<!-- end div logo -->
			<!-- navigation -->
			<?php
			$navItems = [
				[
					"name"=> "Recettes Sucrés",
					"url"=>"sucres.php",
				],
				[
					"name"=> "Recettes Salées",
					"url"=>"sales.php",
				],
				[
					"name"=> "Ajouter une Recette",
					"url"=>"add-recette.php",
				],
			]
			 ?>
			 <nav class="space-x-5">
			<?php
			foreach ($navItems as $navItem)	{ ?>
			<a href="<?= $navItem['url']?>" class="hover:text-[#B4FFD8] hover:underline"><?= $navItem['name'] ?></a>
			<?php } ?>	
		</nav>
			<!-- end navigation -->
		</header>
		<!-- end header -->