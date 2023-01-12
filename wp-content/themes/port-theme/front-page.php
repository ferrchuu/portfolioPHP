<!DOCTYPE html>
<html lang="en"> 
<head> 
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Portfolio">
    <meta name="author" content="Fernando E. Casas">        
    <link rel="shortcut icon" href="images/logo.png"> 
	<?php
    wp_head();
  ?>
</head> 
<?php
		get_header();
	?>
<body>

		<article class="content px-3 py-5 p-md-5">
		<?php
			if (have_posts()){
				while(have_posts()){
					the_post();
					the_content();
				}
			}

		?>

	  </article>
	   
    <?php
		get_footer();
		?>


