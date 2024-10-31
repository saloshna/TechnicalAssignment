<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="description">
  <meta content="" name="keywords">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <!-- Template Main CSS File -->
  <link rel="stylesheet" href="/bookstore/assets/css/style.css">
  

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

<!-- About Container -->
<div class="w3-container" id="about">
  <div class="w3-content" style="max-width:1000px">
    <h5 class="w3-center w3-padding-64"><span class="w3-tag w3-wide">Search your books by title</span></h5>
			  <form action="bookfunction.php"  style="text-align:left" >  
			 
     <label><b>Search by book title</b></label><br> 
	 <input type="text" name="title"  placeholder="Enter title"/><br><!--text box to search for title-->
	    
	<input type="submit" name="submit" id="booksubmit" class="btn b
	tn-info" value="Submit" /> 
	 </form>	
	 </div>
</div>
</div>
 
</body>
</html>