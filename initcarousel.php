<?php
//PHP SCRIPT: make a dynamic carousel
// Made by GTR
 
//This function gets the file names of all images in the current directory
function CreateCarouselItems($dirname="images/pub") {
    $pattern="*.jpg"; //valid image extensions
    $files = array();
    $curimage=0;
    if($handle = opendir($dirname)) {
        while(false !== ($file = readdir($handle))){
            if(fnmatch($pattern, $file)){ //if this file is a valid image
               
                $path = '/'.$dirname.'/'.$file.'';
                echo '<div class="slider-item" style="background-image: url(\''.$path.'\');">';
                echo '<div class="overlay"></div>';
                echo '</div>';
                $curimage++;
            }
        }
 
        closedir($handle);
    }
    return($files);
}

CreateCarouselItems() //Feed carousel
?>