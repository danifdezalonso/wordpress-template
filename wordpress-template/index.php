<?php 
    get_header();
?>
		<article class="content px-3 py-5 p-md-5">
    <?php
        if(have_posts(  )){
            while(have_posts()){
                the_post();
                get_template_part( 'template-parts/content', 'page'); //esto hace q pille cualquier carpeta dnetro esa con el nombre content-"lo q sea" en ste caso article
            }
        }
    ?>
	    </article>
	    
     
<?php 
    get_footer();
?>