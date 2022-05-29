<!-- <?php
  // Credit to my Patron Joseph White, for providing me these lesson files after all my files got deleted from my Patreon! Made it a lot easier to re-create this lesson :)
  // To make sure we don't need to create the header section of the website on multiple pages, we instead create the header HTML markup in a separate file which we then attach to the top of every HTML page on our website. In this way if we need to make a small change to our header we just need to do it in one place. This is a VERY cool feature in PHP!
  // require "header.php";
?> -->

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <link rel="stylesheet" href="style.css">
  <body>

    <header>
      <nav>
        <a href="index.php" class="header-brand">Cocowa Booru</a>
        <ul>
          <li><a href="#">Portfolio</a></li>
          <li><a href="#">About me</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
      </nav>
  <!--     <a href="cases.php" class="header-cases">Cases</a> -->
    </header>


<main>
  <section class="cases-links">
    <div class="wrapper">
      <h2>Gallery</h2>
      <div class="gallery-container">
		<a href="#">
			  <div></div>
			  <h3>This is a title.</h3>
			  <p> This is a paragraph. </p>
		</a>
		<a href="#">
			  <div></div>
			  <h3>This is a title.</h3>
			  <p> This is a paragraph. </p>
		  </a>
		<a href="#">
			  <div></div>
			  <h3>This is a title.</h3>
			  <p> This is a paragraph. </p>
		  </a>
		<a href="#">
			  <div></div>
			  <h3>This is a title.</h3>
			  <p> This is a paragraph. </p>
		  </a>
		<a href="#">
			  <div></div>
			  <h3>This is a title.</h3>
			  <p> This is a paragraph. </p>
		  </a>
		
      </div>
	  
	<?php
	if (isset($_SESSION['username'])) {
		echo '<div class="gallery-upload"> 
			<form action="includes/gallery-upload.inc.php" method="post" enctype="multipart/form-data">
				<input type="text" name="filename" placeholder="Filename">
				<input type="text" name="filetitle" placeholder="Image title">
				<input type="text" name="filedesc" placeholder="Image description">
				<input type="file" name="file">
				<button type="submit" name="submit">Upload</button>
			</form>
					</div>';
	}
	?>		
				
    </div>
  </section>
</main>



</body>
</html>

<!-- <?php
  // And just like we include the header from a separate file, we do the same with the footer.
  // require "footer.php";
?>
 -->