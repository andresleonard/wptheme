<?php

	get_header();

?>


    
	<article class="content px-3 py-5 p-md-5">
	<?php 
		the_content();
		if(have_posts()){

			while( have_posts() ){
				the_post();
				the_content();
			
			}
			//get_template_part( $slug:string, $name:string|null, $args:array )
		}
	?>
	</article>
<?php 

	get_footer();

?>