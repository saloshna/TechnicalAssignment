<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="description">
  <meta content="" name="keywords">
  
  
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>
  <!-- Links (sit on top) -->
<div class="w3-top">
  <div class="w3-row w3-padding w3-black">
    <div class="w3-col s3">
      <a href="index.html" class="w3-button w3-block w3-black">HOME</a>
    </div>
    <div class="w3-col s3">
      <a href="core.php" class="w3-button w3-block w3-black">Core Functionalities</a>
    </div>
    <div class="w3-col s3">
      <a href="create.php" class="w3-button w3-block w3-black">Add books</a>
    </div>
    <div class="w3-col s3">
      <a href="additionfunctionality.php" class="w3-button w3-block w3-black">Delete books</a>
    </div>
  </div>
</div>

<!-- About Container -->
<div class="w3-container" id="about">
  <div class="w3-content" style="max-width:1000px">
    <h5 class="w3-center w3-padding-64"><span class="w3-tag w3-wide">Search books here...</span></h5>
			  <form action="bookfunction.php"  style="text-align:left" >  
			 
     <label><b>Search by book title</b></label><br> 
	 <input type="text" name="title"  placeholder="Enter title"/><br><!--text box to search for title-->
	    <label ><b>Search by book category</b></label><br>	  
	 <input type="text" name="categor"   placeholder="Enter category"/><br><!--text box to search for category-->
	    <label  ><b>Search by publication year</b></label><br> 
	 <input type="text" name="yea"  placeholder="Enter year"/><br><!--text box to search for year-->
	    <label ><b>Search by book author</b></label><br>
	 <input type="text" name="authors"   placeholder="Enter author"/> <!--text box to search for author-->
   <br>
	    <label  ><b>Search by book category & author</b></label><br><!--text box to search for category and author-->
	 <input type="text" name="catego"   placeholder="Enter category"/>
	  <input type="text" name="author"   placeholder="Enter author"/>   
	   <br>
	    <label ><b>Search by book author & publication year</b></label><br><!--text box to search for author and year-->
	 <input type="text" name="ar"   placeholder="Enter author"/>
	 <input type="text" name="yr"   placeholder="Enter year"/>
	   <br>	
	<input type="submit" name="submit" id="booksubmit" class="btn b
	tn-info" value="Submit" /> 
	 </form>	
	 </div>
</div>
</div>
  <!-- Footer -->
<footer class="w3-center w3-light-grey w3-padding-48 w3-large">
  <p>Powered by Saloshna</p>
</footer>
 
 
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
</body>
</html>