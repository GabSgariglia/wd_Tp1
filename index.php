<?php get_header( )?>
        
        <?php if(is_archive(  )) : ?>
            <h2><?php echo esc_html( get_the_category()[0]->name )?></h2>
        <?php else : ?>
            <h2>Accueil</h2>
        <?php endif;?>
        <div class="categorie_conteneur">
    <select class="categorie" name="event-dropdown" onchange='document.location.href=this.options[this.selectedIndex].value;'> 
    <option value=""><?php echo esc_attr(__('Réchercher par catégorie')); ?></option> 

    <?php 
        $option = '<option value="' . get_option('home') . '/contenue/">Toute les catégorie</option>'; // change category to your custom page slug
        $categories = get_categories(); 
        foreach ($categories as $category) {
            $option .= '<option value="'.get_option('home').'/category/'.$category->slug.'">';
            $option .= $category->cat_name;
            $option .= ' ('.$category->category_count.')';
            $option .= '</option>';
        }
        echo $option;
    ?>
    </select>
</div>
        <div class="flex">
        <section class="conteneur_article">
            <?php if(have_posts(  )): ?>
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

            <?php endif;?>

            </section>

        </div>
        <?php get_sidebar(  )?>
<?php get_footer()?>