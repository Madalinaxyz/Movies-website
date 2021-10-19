<!DOCTYPE html>
<html lang ="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

<title>Bajenaru Madalina</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<link rel="stylesheet" href="styles.css">


<?php

require_once('functions.php');

$current_page_name = basename($_SERVER['PHP_SELF'] , '.php');
$pages_not_load_movies=array('contact');

if(!in_array($current_page_name,$pages_not_load_movies)){
$movies = array(
1=>array(
              'title' => 'A rainy day in New York',
               'desc'=>'The story of two young people whose plans for a romantic weekend together in New York City are dashed as quickly as the sunlight turns into showers.',
               'poster' =>'arainyday.jpg',
               'link' =>'movie-1.php',
               'year'=>'2019'
            ),
2=>array(
  'title' => 'God help the girl',
  'desc'=>'The film is about a girl called Eve who is in the hospital dealing with some emotional problems and starts writing songs as a way of getting better.',
  'poster' =>'godhelpthegirl.jpg',
 'link' =>'movie-2.php',
 'year'=>'2014'

),
array(
  'title' => 'Insidious',
               'desc'=>'The story centers on a couple whose son inexplicably enters a comatose state and becomes a vessel for a variety of entities in an astral dimension known as The Further who want to inhabit his body',
               'poster' =>'insidious.jpg',
               'link' =>'movie-3.php',
               'year' =>'2010'
),
            );
        }

        $nav_elements= array (
          array(
            'name'=>'Home',
            'link'=>'index.php'
          ),
          array(
            'name'=>'Movies',
            'link'=>'movies.php'
          ),
          array(
            'name'=>'Contact',
            'link'=>'contact.php'
          ),
        );
        
            ?> 
            </head>
<body>

 <?php define('INITIALELE','MB') ?>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#" ><?php echo INITIALELE; ?></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <?php if($nav_elements && count($nav_elements)>0){ ?>

      <ul class="navbar-nav mr-auto">
      <?php foreach($nav_elements as $nav_element){?>

        <li class="nav-item <?php if($current_page_name.'php'===$nav_element['link']){echo 'active';}  ?>">
          <a class="nav-link" href="<?php echo $nav_element['link']; ?>"><?php echo $nav_element['name']; ?> <span class="sr-only">(current)</span></a>
        </li>
      <?php } ?>
      </ul>
      <?php } ?>

      <?php require_once('search-form.php'); ?>
    </div>
  </nav>
    <div class="container">