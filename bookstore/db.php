		<?php 
		DEFINE ('DB_USER', 'root');
		DEFINE ('DB_PASSWORD', '');
		DEFINE ('DB_HOST', 'localhost');
		DEFINE ('DB_NAME', 'bookstore');
		 $conn = mysqli_connect (DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) OR die ('Could not connect to MySQL: ' . mysqli_connect_error());
 //$ conn is for open and hold connection to the database  named bookstore using the define constant in line 1-4

		function dbQuery($sql) {
			global $conn;
			$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
			return $result;
		}

	 
 
		function getAllDetails($title){  
		
		    $conn = mysqli_connect (DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) OR die ('Could not connect to MySQL: ' . mysqli_connect_error());
			//$ conn is for opening the connection and hold connection to database  named bookstore using the define constant in line 1-4

    $title = strtolower($title);//convert title to lower case
    $query = "select * from book where title='".$title."'";//select all information of the book where title is match and store in the variable $query
    $result = mysqli_query($conn, $query);
    $book_details = null;//assign $book_details to null
	
	
		 if($result){
 //The while  loop through the result set. If there is result. It loop through it row by row and  extract the result set and return $book_details,If there is no result set, then the null value is returned. Because the book_details is empty as it been assign null first
		 while($row=mysqli_fetch_array($result)){
		 $book_details['title']=$row['title'];
		 $book_details['best_seller']=$row['best_seller'];
		 $book_details['authors']=$row['authors'];
		 $book_details['pub_year']=$row['pub_year'];
		 $book_details['description']=$row['description'];
		 $book_details['language']=$row['language'];
		 $book_details['ISBN']=$row['ISBN'];
		 $book_details['reviews']=$row['reviews'];
		 $book_details['category']=$row['category'];//
		  
		 }
		 return $book_details;
		 }
		}

		function getauthors($authors){  
		
		    $conn = mysqli_connect (DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) OR die ('Could not connect to MySQL: ' . mysqli_connect_error());
//$ conn is for opening the connection and hold connection to database  named bookstore using the define constant in line 1-4
   
   $authors = strtolower($authors);//convert author to lower case
    $query = "select * from book where authors='".$authors."'";//select all information of the book where author is match and store in the variable $query
    $result = mysqli_query($conn, $query);
    $book_details = null;//assign $book_details to null
	
		 if($result){
		 //The while  loop through the result set. If there is result. It loop through it row by row and  extract the result set and return $book_details,If there is no result set, then the null value is returned. Because the book_details is empty as it been assign null first
	
		 while($row=mysqli_fetch_array($result)){
		 $book_details['title']=$row['title'];
		 $book_details['best_seller']=$row['best_seller'];
		 $book_details['authors']=$row['authors'];
		 $book_details['pub_year']=$row['pub_year'];
		 $book_details['description']=$row['description'];
		 $book_details['language']=$row['language'];
		 $book_details['ISBN']=$row['ISBN'];
		 $book_details['reviews']=$row['reviews'];
		
		 $book_details['category']=$row['category'];//
		 
		 }
		 return $book_details;
		 }
		}
		
		
		function getcategor($categor){  
		
		    $conn = mysqli_connect (DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) OR die ('Could not connect to MySQL: ' . mysqli_connect_error());
    //$ conn is for opening the connection and hold connection to database  named bookstore using the define constant in line 1-4

	$categor = strtolower($categor);//convert category to lower case
    $query = "select * from book where category='".$categor."'";//select all information of the book where category is match and store in the variable $query
    $result = mysqli_query($conn, $query);
    $book_details = null;//assign $book_details to null
	//The while  loop through the result set. If there is result. It loop through it row by row and  extract the result set and return $book_details,If there is no result set, then the null value is returned. Because the book_details is empty as it been assign null first
	
		 if($result){
		 //header("Content-Type:applicategoryion/JSON");
		 while($row=mysqli_fetch_array($result)){
		 $book_details['title']=$row['title'];
		 $book_details['best_seller']=$row['best_seller'];
		 $book_details['authors']=$row['authors'];
		 $book_details['pub_year']=$row['pub_year'];
		 $book_details['description']=$row['description'];
		 $book_details['language']=$row['language'];
		 $book_details['ISBN']=$row['ISBN'];
		 $book_details['reviews']=$row['reviews'];
		
		 $book_details['category']=$row['category'];//
		 
		 }
		 return $book_details;
		 }
		}
		
		function getyea($yea){  
		
		    $conn = mysqli_connect (DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) OR die ('Could not connect to MySQL: ' . mysqli_connect_error());
    //$ conn is for opening the connection and hold connection to database  named bookstore using the define constant in line 1-4

	$yea = strtolower($yea);//convert year to lower case
    $query = "select * from book where pub_year='".$yea."'";//select all information of the book where year is match and store in the variable $query
    $result = mysqli_query($conn, $query);
    $book_details = null;//assign $book_details to null
	
	
		 if($result){
		 //The while  loop through the result set. If there is result. It loop through it row by row and  extract the result set and return $book_details,If there is no result set, then the null value is returned. Because the book_details is empty as it been assign null first
		 while($row=mysqli_fetch_array($result)){
		 $book_details['title']=$row['title'];
		 $book_details['best_seller']=$row['best_seller'];
		 $book_details['authors']=$row['authors'];
		 $book_details['pub_year']=$row['pub_year'];
		 $book_details['description']=$row['description'];
		 $book_details['language']=$row['language'];
		 $book_details['ISBN']=$row['ISBN'];
		 $book_details['reviews']=$row['reviews'];
		
		 $book_details['category']=$row['category'];//
		 
		 }
		 return $book_details;
		 }
		}
		
		function getAC($author,$catego){  
		
		    $conn = mysqli_connect (DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) OR die ('Could not connect to MySQL: ' . mysqli_connect_error());
		 //$ conn is for opening the connection and hold connection to database  named bookstore using the define constant in line 1-4

		   $query="select * from book where authors= '$author' and category = '$catego'";//select all information of the book where author and category is match and store in the variable $query
           $result = mysqli_query($conn, $query);
           $book_details = null;//assign $book_details to null
	
	
		 if($result){
 //The while  loop through the result set. If there is result. It loop through it row by row and  extract the result set and return $book_details,If there is no result set, then the null value is returned. Because the book_details is empty as it been assign null first
		 while($row=mysqli_fetch_array($result)){
		 $book_details['title']=$row['title'];
		 $book_details['best_seller']=$row['best_seller'];
		 $book_details['authors']=$row['authors'];
		 $book_details['pub_year']=$row['pub_year'];
		 $book_details['description']=$row['description'];
		 $book_details['language']=$row['language'];
		 $book_details['ISBN']=$row['ISBN'];
		 $book_details['reviews']=$row['reviews'];
		
		 $book_details['category']=$row['category'];//
		 
		 }
		 return $book_details;
		 }
		}		
		
		
		function getAY($ar,$yr){
  //$ conn is for opening the connection and hold connection to database  named bookstore using the define constant in line 1-4

  $conn = mysqli_connect (DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) OR die ('Could not connect to MySQL: ' . mysqli_connect_error());
  

 $query="select * from book where authors='$ar' and pub_year='$yr'";//select all information of the book where author and year is match and store in the variable $query
 $result= mysqli_query($conn,$query);
 $book_details=null;//assign $book_details to null
 		 if($result){
		//The while  loop through the result set. If there is result. It loop through it row by row and  extract the result set and return $book_details,If there is no result set, then the null value is returned. Because the book_details is empty as it been assign null first
		 while($row=mysqli_fetch_array($result)){
		 $book_details['title']=$row['title'];
		 $book_details['best_seller']=$row['best_seller'];
		 $book_details['authors']=$row['authors'];
		 $book_details['pub_year']=$row['pub_year'];
		 $book_details['description']=$row['description'];
		 $book_details['language']=$row['language'];
		 $book_details['ISBN']=$row['ISBN'];
		 $book_details['reviews']=$row['reviews'];
		
		 $book_details['category']=$row['category'];//
		 
		 }
		 return $book_details;
 }
}
		 
		 
		 
		 function insertBook($title,$author,$year,$description,$language,$ISBN,$reviews,$best_seller,$category){
		$conn = mysqli_connect (DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) OR die ('Could not connect to MySQL: '.mysqli_connect_error() );
		 //$ conn is for opening the connection and hold connection to database  named bookstore using the define constant in line 1-4

			 
		$sqlquery = "INSERT INTO book (title,authors,pub_year,description,language,ISBN,reviews,best_seller,category)VALUES ('".$title."', '".$author."','".$year."','".$description."','".$language."','".$ISBN."','".$reviews."','".$best_seller."','".$category."')"; 
		 //the code above will take value found in each variable that  was inserted using the form and insert them to each attributes in the table books
		if (mysqli_query($conn, $sqlquery)) {
			$alert = "Book Successfully Added";
			return $alert;
		 } else {
			echo "Error: " . $query2 . "" . mysqli_error($conn);
		 }
		 $conn->close();
		}
		 

		?>
		 