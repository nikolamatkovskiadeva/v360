<?php
get_header();
?>

<main id="main" class="site-main">

    <section class="taxonomy-posts">
        <div class="container">
            <?php   
                while(have_posts()) : the_post(); 
                    
                endwhile;
            ?>
        </div>
    </section>
        
</main>

<?php
get_footer();
