<?php
/**
 * @package WordPress
 * @subpackage Scroggins
 * @since 1.0
 * @version 1.0
 */
?>

<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="format-detection" content="telephone-no">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <link rel="shortcut icon" href="favicon.ico"/>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/assets/styles/main.css">
    <?php wp_head(); ?>
  </head>

  <body>
    <?php get_template_part( 'partials/header' ); ?>
