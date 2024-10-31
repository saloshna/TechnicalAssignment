<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="description">
  <meta content="" name="keywords">
 
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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
 
  <br>
  <div class="w3-container" id="about">
  <div class="w3-content" style="max-width:1000px">
    <h5 class="w3-center w3-padding-64"><span class="w3-tag w3-wide">Add books</span></h5>
    <div class="container">
        <form  method="post" action="bookfunction.php">
            <label><b>Book Title</b> </label>
            <input type="text" name="title" id="bookTitle" placeholder="Book Title"/><!--textbox to insert title-->
            <label><b> Book Author</b></label>
            <input type="text" name="author" id="BookAuthor" placeholder="Book Author" /><!--textbox to insert author-->
            <label><b>Year Of Publication</b></label>
            <input type="text" name="year" id="year_of_publication" placeholder="Year Of Publication" /><!--texbox to insert publication year-->
            <label><b>Book Description</b></label>
            <input type="text" name="description" id="Bookdescription" placeholder="Description" /><!--textbox to insert description-->
            <label><b>Language</b></label>
            <input type="text" name="language" id="bookLanguage" placeholder="Language" /><!--textbox to insert language-->
            <label><b>ISBN Number</b></label>
            <input type="text" name="ISBN" id="bookIsbn" placeholder="ISBN" /><!--textbox to insert ISBN-->
			 <label><b>REVIEWS</b></label>
            <input type="text" name="reviews" id="bookreview" placeholder="Reviews" /><!--textbox to reviews -->
			 <label><b>best seller</b></label>
            <input type="text" name="best_seller" id="bookseller" placeholder="Best Seller" /><!--textbox to insert best_seller-->
            <label><b>Book Category</b></label>
            <input type="text" name="category" id="bookCategory" placeholder="Category" /><!--textbox to insert category-->
            <input type="submit" name="submit" id="submitBook" value="submit" />    
    </form>
	      </div>
</div>
</div>


<!-- Footer -->
<footer class="w3-center w3-light-grey w3-padding-48 w3-large">
  <p>Powered by Saloshna</p>
</footer>

</body>
</html> 
  
  
  
  
  
  
  