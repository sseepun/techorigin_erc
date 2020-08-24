<?php
    foreach(scandir('./') as $file){
        if(strpos($file, '.php')!==false && !in_array($file, ['index.php', 'grids.php'])){
            echo '<a href="'.$file.'">'.$file.'</a><br>';
        }
    }
?>
