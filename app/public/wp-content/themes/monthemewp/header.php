<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header>
        <h1>
            <a href="<?php bloginfo('url'); ?>">
            <?php bloginfo('name'); ?>
            </a>
        </h1>
        <p><?php bloginfo('description'); ?></p>
    </header>