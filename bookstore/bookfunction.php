<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="description">
  <meta content="" name="keywords">
  
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="/bookstore/assets/css/style.css">

  <!-- Template Main CSS File -->
  
  <style>
  
  table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: center;
  padding: 16px;
}

th, td {
  text-align: center;
  padding: 16px;
}

tr:nth-child(even) {
  background-color: #f2f2f2;
}

</style>
</head>
<body>
  
<!-- Links (sit on top) -->
<div class="w3-top">
  <div class="w3-row w3-padding w3-black">
    <div class="w3-col s3">
      <a href="index.html" class="w3-button w3-block w3-black">HOME</a>
    </div>

    <div class="w3-col s3">
      <a href="listofbooks.php" class="w3-button w3-block w3-black">List of books</a>
    </div>

    <div class="w3-col s3">
      <div class="dropdown">
      <button class="dropbtn">My core functionalities 
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
        <a href="searchbytitle.php">Search by title</a>
        <a href="bookcategory.php">Search by book category</a>
        <a href="searchbypubyear.php">Search by publication year</a>
        <a href="searchbyauthor.php">Search by author</a>
        <a href="searchbycategoryandauthor.php">Search by category and author</a>
        <a href="searchbypubyearandauthor.php">Search by author and publication year</a>
      </div>
      </div>
    </div>

    <div class="w3-col s3">
      <div class="dropdown">
      <button class="dropbtn">My additional functionalities 
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
        <a href="create.php"> Add books here</a>
        <a href="additionfunctionality.php">Delete books here</a>
      </div>
      </div>
    </div>

  </div>
</div>


<br>
<br>
<br> 
  <?php
	include("db.php");//connection to database
	if(!empty($_GET['ar']) && !empty ($_GET['yr'])){ //check if both textbox author & year is not empty
	 $book6 =getAY($_GET['ar'] , $_GET['yr']);
	 //GET the data from the textbox  as it is stored in the variable ar and yr  then parse through the array to look for the   author and year thus store in variable $book6
	 if(empty($book6)){
	 delive_response('400', 'No book Found', null);  //call function delive_response if no book found
	 }else{
	 deliver_response('200', 'book found', $book6);  //call function deliver_response if book found

	 }
	}
	 else
	 if(!empty($_GET['author']) && !empty ($_GET['catego'])){ //check if both textbox author and category is not empty
	 $book5 = getAC($_GET['author'] , $_GET['catego']);
	 	 //GET the data from the textbox  as it is stored in the variable author and catego  then parse through the array to look for the   author and category thus store in variable $book5
	 if(empty($book5)){
	 delive_response('400', 'No book Found', null); //call function delive_response if no book found
	 }else{
	 deliver_response('200', 'book found', $book5); //call function  deliver_response if book found
	  }
	 }
	   
	else if(!empty($_GET['authors'])){//check if textbox author is not empty
	 $book2=getauthors($_GET['authors']); 
	//GET the data from the textbox  as it is stored in the variable authors  and parse through the array to look for the  author and store in variable $book2


	 if(empty($book2)){
	 delive_response('400', 'No book Found', null);//call function delive_response if no book found
	 }else{
	 deliver_response('200', 'book found', $book2);//call function deliver_response if   book found
	 }
	}
	else
	 if(!empty($_GET['categor'])){//check if textbox title is not empty
	 $book3=getcategor($_GET['categor']); 
	//GET the data from the textbox  as it is stored in the variable categor  and parse through the array to look for the  category and store in variable $book3

	 if(empty($book3)){
	 delive_response('400', 'No book Found', null);//call function delive_response if no book found
	 }else{
	 deliver_response('200', 'book found', $book3);//call function deliver_response if book found
	 }
	}

	else
	 if(!empty($_GET['yea'])){//check if textbox year is not empty
	 $book4=getyea($_GET['yea']); 
	//GET the data from the textbox  as it is stored in the variable $yea  and parse through the array to look for the  year and store in variable $book4

	 if(empty($book4)){
	 delive_response('400', 'No book Found', null);//call function delive_response if no book found
	 }else{
	 deliver_response('200', 'book found', $book4);//call function deliver_response if  book found
	 }
	}
	 
	 
	 else 
		 if(!empty($_GET['title'])){//check if textbox title is not empty
	 $book1=getAllDetails($_GET['title']); 
	 	//GET the data from the textbox  as it is stored in the variable $title  and parse through the array to look for the title and store in variable $book1
		 if(empty($book1)){
		 delive_response(200, 'No book Found', null);//call function delive_response if no book found
		 }else{
		 deliver_response(200, 'book found', $book1);//call function deliver_response if book found
		 }
		}
		
else 
	if(isset($_POST['submit']))
{	 
	 $title = $_POST['title'];
	 $author = $_POST['author'];
	 $year = $_POST['year'];
	 $description = $_POST['description'];
     $language = $_POST['language'];
	 $ISBN = $_POST['ISBN'];
	 $reviews = $_POST['reviews'];
	 $best_seller = $_POST['best_seller'];
	 $category = $_POST['category'];
//the code aboce get value from the text box and assign to each respective variable
     if(!empty($title) && !empty($author) && !empty($year) && !empty($description) && !empty($language) && !empty($ISBN) && !empty($reviews) && !empty($best_seller) && !empty($category)){//check if textboxes is not empty
        $bookpost = insertBook($title,$author,$year,$description ,$language,$ISBN,$reviews,$best_seller,$category);
        Eresponse('200',' Added',$bookpost);//call function Eresponse if details is successfully added
     }else{
        error_added('200','No Book Added',null);//call function error_added if detail is not added properly
     }
}	 
	else{
	error_response('500','Bad Request',null);//if any of the textboxe search is empty thus the inside if statement will not executed and therefore  function error_response is called
	}
	 //the function below is called when a book is added successfully
	function  Eresponse($status, $statusMessage, $data){
  header("HTTP/1.1 $status $statusMessage");
  $response['status']=$status;
  $response['status_message']=$statusMessage;
  $response['data']=$data;

  $json_response=json_encode($response, JSON_UNESCAPED_SLASHES);
 $create = json_decode($json_response, true);//response is decoded and stored in $create
	$b=$create["data"] ; //$b is used to store the value retrive in data
	echo $b;//$b is echo on screen to display the message 
}
//the function below is called when a book is not added properly.
function  error_added($status, $statusMessage, $data){
  header("HTTP/1.1 $status $statusMessage");
  $response['status']=$status;
  $response['status_message']=$statusMessage;
  $response['data']=$data;

  $json_response=json_encode($response, JSON_UNESCAPED_SLASHES);
 $erroradded = json_decode($json_response, true);//response is decoded and stored in $erroradded
	$c=$erroradded["status_message"] ; //$c is used to store the value retrive in status_message
	echo $c;//$b is echo on screen to display the message 
}	
	//The function below is called if  textboxes is empty.
	function error_response($status, $statusMessage, $data){
  header("HTTP/1.1 $status $statusMessage");
  $response['status']=$status;
  $response['status_message']=$statusMessage;
  $response['data']=$data;
  $json_response=json_encode($response, JSON_UNESCAPED_SLASHES);
     $error = json_decode($json_response, true);
	$b=$error["status_message"] ; 
    function_error("$b");//function_error will called to display a bad request alert
	echo "<script> location.href='index.html'; </script>";//the user is redirect to the homepage.
        exit;
	 }
function function_error($b) {
 echo "<script>alert('$b');</script>";
}
//the function below is called when no infortiom is retieve
	function delive_response($status, $statusMessage, $data){
  header("HTTP/1.1 $status $statusMessage");
  $response['status']=$status;
  $response['status_message']=$statusMessage;
  $response['data']=$data;
  $json_response=json_encode($response, JSON_UNESCAPED_SLASHES);
    $error = json_decode($json_response, true);//The json $json_response is decoded and stored in the variable $error
	$a=$error["status_message"] ; //information found in the ["statues_message"] is fetch and stored in variable a$
    function_alert("$a");//the alert will display information found in $a
	echo "<script> location.href='index.html'; </script>";//user is redirect to homepage
        exit;
	 }

function function_alert($a) {
 echo "<script>alert('$a');</script>";
}
//the function below is called when there is an information retireve
	function deliver_response($status, $statusMessage, $data){	 
	  $response['status']=$status;
	  $response['status_message']=$statusMessage;
	  $response['data']=$data;
	  $json_response=json_encode($response, JSON_UNESCAPED_SLASHES);//the respoce is being encode and store in the variable $json_response
	  echo "</br>";
 
	  $json = json_decode($json_response, true); //the json_response is being decode and the content is stored in the variable $json
	  ?>

  <div class="w3-content" style="max-width:1000px">
    <h5 class="w3-center w3-padding-64"><span class="w3-tag w3-wide">Your list of books</span></h5>
	 <table  >    
	    <thead>
	    <tr style="background-color:#669999">
	       <th style="text-align:center">title</th>
	       <th style="text-align:center">best_seller</th>
		   <th style="text-align:center cellspacing:150px">authors</th>
		   <th style="text-align:center">pub_year</th>
		   <th style="text-align:center">description</th>
		   <th style="text-align:center">language</th>
		   <th style="text-align:center">ISBN</th>
		   <th style="text-align:center">Reviews</th>
		   <th style="text-align:center"> category</th>
		</tr>
		</thead>
	     <tbody>
	   <?php					      
											$des = $json['data']['title'];//retrieve title in the data array which  found in the $json and assign it to variable $des
											$lon = $json['data']['best_seller'];//retrieve best_seller in the  array found in the $json and assign it to variable $lon
											$lat = $json['data']['authors'];//retrieve authors in the  data array  found in the $json  and assign it to variable $lat
											$de = $json['data']['pub_year'];//retrieve pub_year in the data array  found in the $json  and assign it to variable $de
											$mag = $json['data']['description'];//retrieve description in the  array data found in the $json   and assign it to variable $mag
											$lan = $json['data']['language'];//retrieve language in the data array  found in the $json and assign it to variable $lan
											$is = $json['data']['ISBN'];//retrieve ISBN in the dataarray   found in the $json   and assign it to variable $is
											$re = $json['data']['reviews'];//retrieve reviews in the data array   found in the $json and assign it to variable $re
											$ca = $json['data']['category'];//retrieve category in the data array   found in the $json and assign it to variable $ca							  
			 ?>
		 <tr>
		<td><?php echo $des;?></td>
		   <td><?php echo $lon;?></td>
		  <td><?php echo $lat;?></td>
		   <td><?php echo $de;?></td>
		 <td><?php echo $mag;?></td>
		 <td><?php echo $lan;?></td>
		 <td><?php echo $is;?></td>
		 <td><?php echo $re;?></td>
		 <td><?php echo $ca;?></td>
	 <!--the code above is used to output information found in respective variable in respective table row-->
	 </tr>
					  <?php  } ?>
			 </tbody>
			 </table>
	</div>
			</div>
		</div>
	</div>
	</section>
 

</body>

</html>