<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My PHP Page</title>
    <!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
</head>

<body>
    <!-- Let's add some post from admin site first -->
    <?php
        while(have_posts()){
            the_post(); ?>
                <h1> <a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a>   </h1>
                <p> <?php the_content(); ?> </p>
            <?php
        }
    ?>
</body>
</html>
