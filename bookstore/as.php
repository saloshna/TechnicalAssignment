<?php 
	 

require_once 'db.php';

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: DELETE");

if ($_SERVER['REQUEST_METHOD'] === 'DELETE' && isset($_GET['Id'])) {
	$sql = "DELETE FROM book WHERE Id = " . mysqli_real_escape_string($conn, $_GET['Id']);
	dbQuery($sql);
}
 
$request=$_SERVER['REQUEST_METHOD'];
$data=array();
switch ($request){

	case 'GET';
	deresponse(getData());
	break;
 
}

function getData(){
global $conn;
$query=mysqli_query($conn,"select * from book");
while($row=mysqli_fetch_assoc($query)){
 
 extract($row);

	$data[]=array
	("id"=>$row['Id'],"title"=>$row['title'],"authors"=>$row['authors'],"pub_year"=>$row['pub_year'],"description"=>$row['description'],"language"=>$row['language'],"ISBN"=>$row['ISBN'],"reviews"=>$row['reviews'],"best_seller"=>$row['best_seller'],"category"=>$row['category']);
}
return $data;
}
function deresponse($data){
	echo json_encode($data);
  
 
}
?>