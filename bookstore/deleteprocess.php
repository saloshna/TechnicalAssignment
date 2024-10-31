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

<br>
<br>
<br>
<br>
<!-- About Container -->
<div class="w3-container" id="about">
  <div class="w3-content" style="max-width:1000px">
<?php
include_once 'db.php';
$sql = "DELETE FROM book WHERE id='" . $_GET["Id"] . "'";
if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>

</div>
</div>

</body>
</html>