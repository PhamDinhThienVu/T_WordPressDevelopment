
This is our amazing custom theme
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My PHP Page</title>
    <!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
</head>
<body>
    <?php
        $myName = array('Brad', 'John', 'Hayato', 'Sakura', 'Haha');

        
    ?>

    <!-- Using $myname arrays to display the list -->
    <ul>
        <?php 
            $count = 0;
            while($count < count($myName)){
                echo "<li>$myName[$count]</li>";
                $count++;
            }
        ?>
    </ul>
    
</body>
</html>
