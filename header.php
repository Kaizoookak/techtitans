
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header">
    <a class="logo" href="<?php echo esc_url(home_url('/')); ?>">
        <i class="fas fa-laptop-code"></i>
        Tech <span>Titans</span>
    </a>

    <nav class="nav-menu">
        <a href="#home"><i class="fas fa-home"></i> Home</a>
        <a href="#about"><i class="fas fa-user"></i> About</a>
        <a href="#team"><i class="fas fa-users"></i> Team</a>
        <a href="#projects"><i class="fas fa-code"></i> Projects</a>
        <a href="#contact"><i class="fas fa-envelope"></i> Contact</a>
    </nav>

    <a href="#contact" class="connect-btn">
        <i class="fas fa-paper-plane"></i> Let's Connect
    </a>
</header>
