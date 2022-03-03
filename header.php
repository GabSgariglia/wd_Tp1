<!DOCTYPE html>
<html <?php language_attributes( )?>>
<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head()?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body <?php body_class(  ) ?>>
    
<?php wp_body_open(  )?>
    <header>

        <div >
            <section>
                <h1><a href="<?php echo esc_url(home_url('/'))?>"><?php bloginfo('title')?></a></h1>
                <div><?php bloginfo( 'description' )?></div>
            </section>
            
                
        </div>

    </header>
    <nav>
        <div class="nav_section">
            <?php 
                
                    $args = array(
                        'theme_location' =>'main-menu'
                    );

                    wp_nav_menu( $args );
                
                ?>
        </div>
        <div class="nav_section_Search">
            <form role="search" id="searchform" class="searchform" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
            <input type="text" class="search-field" name="s" id="s" placeholder="Rechercher" value="<?php echo get_search_query(); ?>">
            <button id="searchsubmit" class="btn_search" type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
                
                
    </nav>
    <main class="conteneur">
