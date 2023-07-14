<?php 
$conection = include '../../../conection.php';

$id_categoria=$_POST['id_categoria'];

$sql="SELECT * from subcategoria where categoria ='$id_categoria' order by subcat ASC";
$result=mysqli_query($conection,$sql);

$cadena="<label style=\"font-weight: bold; color: black; margin-top:15%; font-size: 11px;\">
SELECCIONA LA SUBCATEGORÍA DE TU NEGOCIO</label> 
<select name='subcat11' id='subcat11' size='number_of_options' style='margin-top: 6.5%;' required>
<option value=' '>Selecciona la Subcategoría de tu negocio</option>";

while ($ver = mysqli_fetch_row($result)) 
{
	$subCatName = $ver[0];
	$cadena = $cadena.'<option value='.$ver[0].'>'.utf8_encode($ver[1]).'</option>';
}

echo  $cadena."</select>";
	

?>