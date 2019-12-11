<?php

include "conexion.php";

$user_id=null;
$sql1= "select * from personas where nombre like '%$_GET[s]%'or identificacion like '%$_GET[s]%' or apellido like '%$_GET[s]%' or direccion like '%$_GET[s]%' or email like '%$_GET[s]%' or telefono like '%$_GET[s]%'";
$query = $con->query($sql1);
?>

<?php if($query->num_rows>0):?>
<table class="table table-bordered table-hover">
<thead>
	<th>Id</th>
        <th>Nombre</th>
	<th>Apellido</th>
      <th>Identificacion</th>
        <th>Tipo de Persona</th>
	<th>Email</th>
	<th>Direccion</th>
	<th>Telefono</th>
	<th>Opciones</th>
</thead>
<?php while ($r=$query->fetch_array()):?>

<?php endwhile;?>
</table>
<?php else:?>
	<p class="alert alert-warning">No hay resultados</p>
<?php endif;?>
