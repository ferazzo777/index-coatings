<?php
// --------------------------------------------------------------------------
//
//   Base layout
//
// --------------------------------------------------------------------------

get_template_part('templates/layout/head'); ?>

<body <?php body_class(); ?>>

<?php get_template_part('templates/layout/header');?>

<?php if (!is_front_page()) get_template_part('templates/layout/page-hero');?>

<?php include roots_template_path(); ?>

<?php get_template_part('templates/layout/partners'); ?>

<?php get_template_part('templates/layout/footer'); ?>

<?php wp_footer(); ?>

</body>
</html>
