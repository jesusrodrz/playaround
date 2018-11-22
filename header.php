<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
      
    <title>
      <?php 
        if(is_front_page() || is_home()){
            echo get_bloginfo('name');
        } else if (is_tax()){
          $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );

          echo $term->name;

        }else{
          echo wp_title(' ');
        }
      ?>
    </title>
  </head>
  <body>
    <header class="main-header">
      <p>this is the header :)</p>
    </header>
    <main class="main-content">