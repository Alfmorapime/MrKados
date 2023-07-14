<?php 
$conection = include '../../../conection.php';

$id_categoria=$_POST['id_categoria'];

$sql="SELECT * from subcategoria where categoria ='$id_categoria' order by subcat ASC";
$result=mysqli_query($conection,$sql);

$cadena="<select name=\"subcat3\" id=\"subcat3\" size=\"number_of_options\" style=\"margin-top: 6.5%; display:none;\" required>
<option value=' '>Selecciona otra Subcategoría</option>";

while ($ver=mysqli_fetch_row($result)) 
{
	$cadena = $cadena.'<option value='.$ver[0].'>'.utf8_encode($ver[1]).'</option>';
}

echo  $cadena."</select>";
	

?>