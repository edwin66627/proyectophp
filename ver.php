<html>
	<head>
		<title>CRUD</title>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
		<script src="js/jquery.min.js"></script>
                <script>
                function mostrar(id){
                    if(id === "Natural"){
                        $("#Natural").show();
                        $("#Jurìdica").hide();
                    }
                
                 if(id === "Jurìdica"){
                        $("#Natural").hide();
                        $("#Jurìdica").show();
                    }
                }                
                </script>
	</head>
	<body>
	<?php include "php/navbar.php"; ?>
<div class="container">
<div class="row">
<div class="col-md-12">
		<h2>CONSULTAR REGISTROS</h2>
</div>  
</div>
</div>
<?php include "php/tabla.php"; ?>
</div>
</div>
</div>
<script src="bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>