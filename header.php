<!DOCTYPE html>
<html>

<head>
    <title><?php bloginfo('name'); ?></title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.remixicon.com/releases/v2.1.0/remixicon.css" rel="stylesheet">
    <?php wp_head() ?>
</head>

<body>
    <!-- Header -->
    <div class="header">
        <h1><?php bloginfo('name'); ?></h1>
        <p><?php bloginfo('description'); ?></p>
    </div>
    <nav class="navigation-menu navbar">
        <?php $args = ['theme_location' => 'primary']; ?>
        <?php wp_nav_menu($args) ?>
    </nav>