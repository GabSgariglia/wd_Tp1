<?php get_header() ?>



<h2>Résultat de recherche</h2>

<?php if(have_posts(  )): ?>


<div class="conteneur_article">
<?php while(have_posts(  )) : the_post(  );?>

    
        <article  class="article" >

            <div class="image-article">

                <?php if(has_post_thumbnail( )) : ?>

                        <?php the_post_thumbnail('small', ['class' => 'fluide'] );?>

                <?php endif ?>

            </div>

            <div class="texte-article ">

                <h3><?php the_title();?></h3>
                    
                <p> <?php the_excerpt(  );?></p><a class="btn_plus" href="<?php the_permalink(  )?>">En savoir plus...</a>

            </div>

        </article>

    

    <?php endwhile; ?>

</div>

    <?php else :?>



        <p>aucun résultat pour cette requête...</p>

<?php endif;?>





<?php get_footer( ) ?>