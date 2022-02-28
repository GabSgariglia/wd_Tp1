<?php
/* 

    Template Name: Gabarit accueil

*/
?>
<?php get_header( );?>

<?php 

    /*$args = array(

        'category_name'=> 'Techno',

        'post_type' => 'post'

    );*/

    $args = array(

        'Category__not_in' => 1

    );

    $query = new WP_Query($args)

?>

<div class="flex">

</div>





<?php get_footer( );?>



