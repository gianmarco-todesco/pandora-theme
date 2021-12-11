<!DOCTYPE html>
<html>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<title><?php bloginfo('name'); ?><?php wp_title( '|', true, 'left' ); ?></title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
<?php wp_head();  ?>	
</head>
<body>
<div id="outer-container">
<header>    

    <span class="home">

        <?php if(is_front_page()) { ?>

            <?php bloginfo( 'name' ); ?>

        <?php } else { ?>

            <a  href="<?php echo home_url( '/' ); ?>" 
                title="<?php echo bloginfo('name'); ?>" 
                rel="home">
            <?php bloginfo( 'name' ); ?>
            </a>
        <?php } ?>
    </span>
    <span class="fill-remaining-space"></span>
    <span><a href="<?php echo site_url('/category/animazioni'); ?>">Indice</a></span>
    <span><a href="<?php echo site_url('/riferimenti'); ?>">Riferimenti</a></span>
    <span><a href="<?php echo site_url('/contatti'); ?>">Contatti</a></span>
    

</header>
