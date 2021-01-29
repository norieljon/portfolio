<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?=$title?></title>
        <link rel="icon" 
      type="image/png" href="<?=base_url()?>public/img/logo-black.png">
        <?php
            if(!empty($css)) {
                for($i=0;$i<=count($css)-1;$i++) {
                    echo '<link href="'.base_url().'public/css/'.$css[$i].'" rel="stylesheet">';
                }
            }
        ?>
        <link href='https://fonts.googleapis.com/css?family=Encode Sans Expanded' rel='stylesheet'>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    </head>
    
    <body>