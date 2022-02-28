<!DOCTYPE html>
<html <?php language_attributes( )?>>
<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head()?>
</head>
<body <?php body_class(  ) ?>>
    
<?php wp_body_open(  )?>
    <header>

        <div>
            <section>
                <h1><a href="<?php echo esc_url(home_url('/'))?>"><?php bloginfo('title')?></a></h1>
                <div><?php bloginfo( 'description' )?></div>
            </section>
            <nav>
                <?php 
                
                    $args = array(
                        'theme_location' =>'main-menu'
                    );

                    wp_nav_menu( $args );
                
                ?>
            </nav>
        </div>

    </header>