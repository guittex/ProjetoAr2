<!DOCTYPE html>
<html lang="pt-br">
<?php
include_once("header.php");

?>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<body>
        <?php
        include_once("menu.php");
        ?>

        <div class="row">
                <h1 class="titulo-contato">Nome: Guilherme Felipe</h1></br>
                <h1 class="titulo-contato">Whats-App: (11)9999-66352</h1></br>
                <h1 class="titulo-contato">E-mail: ilherme@gmail.com</h1></br>
                <h1 class="titulo-contato">Disponibilidade: A consultar</h1></br>
        </div>



            <?php
                include_once("footer.php");
            ?>

			<script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
        	<script>
            	$(".btn-menu").click(function(){
                	$(".menu").show();
            	});

            	$(".btn-close").click(function(){
                	$(".menu").hide();
            	});
            </script>
</body>
</html>