<!--  header -->
<?php 
     $title = "Les Recettes sucrées";
    include('partials/_header.php')
    ?>
		<!-- body/content -->
<body class="">
    <form id="myForm">
        <label for="name">Nom de la recette :</label>
        <input type="text" id="name" name="name"><br><br>
        
        <label for="time">Durée de la recette :</label>
        <input type="text" id="time" name="time"><br><br>

        <label for="dificult">Dificultée de la recette :</label>
        <input type="text" id="dificult" name="dificult"><br><br>

        <label for="description">Description de la recette :</label>
        <textarea id="description" name="description"></textarea><br><br>
        
        <input type="submit" value="Envoyer">
     </form>
</body> 
      <!-- footer -->
		<?php
		
		include('partials/_footer.php')
		?>