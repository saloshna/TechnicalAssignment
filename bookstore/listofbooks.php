<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="description">
  <meta content="" name="keywords">
  <!-- Google Fonts -->
  
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

  <div class="w3-content" style="max-width:1000px">
    <h5 class="w3-center w3-padding-64"><span class="w3-tag w3-wide">List of books</span></h5>
<?php
include_once 'db.php';
$result = mysqli_query($conn,"SELECT * FROM book");
?>

<div style="overflow-x:auto;">
<table>
	<tr style="background-color:#669999">
	<th >Id</th>
			<th>Title</th>
			<th>Authors</th>
			<th>Year</th>
			<th>Description</th>
			<th>ISBN</th> 
			<th>Language</th>
			<th>Reviews</th>
			<th>Best Seller</th>
			<th>Category</th>
	
	</tr>
	<?php
	$i=0;
	while($row = mysqli_fetch_array($result)) {
	?>
	<tr class="<?php if(isset($id)) echo $id;?>">
	<td><?php echo $row["Id"]; ?></td>
  <td><?php echo $row["title"]; ?></td>
	<td><?php echo $row["authors"]; ?></td>
	<td><?php echo $row["pub_year"]; ?></td>
	<td><?php echo $row["description"]; ?></td>
	<td><?php echo $row["ISBN"]; ?></td>
  <td><?php echo $row["language"]; ?></td>
  <td><?php echo $row["reviews"]; ?></td>
  <td><?php echo $row["best_seller"]; ?></td>
  <td><?php echo $row["category"]; ?></td>
	</tr>
	<?php
	$i++;
  }
	?>
</table>
</div>
</div>
<br>
<br>
<!-- Footer -->
<footer class="w3-center w3-light-grey w3-padding-48 w3-large">
  <p>Powered by Saloshna</p>
</footer>
</body>
</html>