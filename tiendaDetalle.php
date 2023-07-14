<?php
if(isset($_GET["correo"]))
{
    $user = $_GET["correo"];
}
else
{
    $user = "";
}

if(isset($_GET["type"]))
{
    $usuarioTipo = $_GET["type"];
}
else
{
    $usuarioTipo = "";
}
//$id = $_GET['id'];
$id = 40;
require_once('inc/config.inc.php');
require_once("inc/Entities/categorias.class.php");
require_once("inc/Entities/slider.class.php");
require_once('Page.class.php');
require_once('inc/Utilities/CategoriasDAO.class.php');
require_once('inc/Utilities/SliderDAO.class.php');
require_once('inc/Utilities/RestClient.class.php');
$conection = include 'conection.php';
include 'email_solicitudColonia.php';

$query_tienda = "SELECT * FROM tiendas where id = $id";
$result = mysqli_query($conection,$query_tienda);
$tienda = array();
$cont = 0;
while ($row = mysqli_fetch_assoc($result)) {
    $principal_image = $row["imagen1"];
    $logo = $row["logo"];
    $description = $row["descripcion"];
}

/*if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //Assemble grades
    $postData = array(
        "no"=>$_POST["no"],
        "first_name"=>$_POST["first_name"],
        "last_name"=>$_POST["last_name"],
        "percent"=>$_POST["percent"],
        "course"=>$_POST["course"],
    );
    //Add the data 
    RestClient::call("POST", $postData)  ;
}    
*/

//---- FIN llamada a la BD para traer Categorias -------------------------------


//---- FIN llamada a la BD para traer SLider pricipal --------------------------


/*foreach($jSlides as $jSlide){
    $newSlide = new slideClass();
    $newSlide->setID($jSlide->id);
    $newSlide->setImage($jSlide->image);
    $newSlide->setText1($jSlide->text1);
    $newSlide->setText2($jSlide->text2);
    //Add new categoria to customer array
    $slides[] = $newSlide;
}*/

/*$grades = array();

if($jGrades != null)
{
    //Store the fishes objects 
//Iterate through the fishes and convert them back to Fish objects
foreach($jGrades as $jgrade)   {

    $newGrade = new gradesClass();
    $newGrade->setNo($jgrade->no);
    $newGrade->setFirstName($jgrade->first_name);
    $newGrade->setLastName($jgrade->last_name);
    $newGrade->setPercent($jgrade->percent);
    $newGrade->setCourse($jgrade->course);
    //Add new customer to customer array
    $grades[] = $newGrade;
}
}

*/
//Structuracion de la pagina.
//Page::setTitle($title); //Se llama al metodo que setea el titulo
Page::header(); //Se llama al metodo que contiene el header de la pagina
Page::slide_banner_tienda_page($principal_image);
Page::logo_section($logo, $description);
Page::footer($user, $usuarioTipo); // Banner que contiene el pie de la pagina.

?>