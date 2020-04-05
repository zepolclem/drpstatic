<?php
//PHP SCRIPT: make a dynamic carousel
echo 'HELL0 W0RLD!';
 
//This function gets the file names of all images in the current directory
//and ouputs them as a JavaScript array
function returnimages($dirname="./images/pub/") {
    $pattern="(\.jpg$)|(\.png$)|(\.jpeg$)|(\.gif$)"; //valid image extensions
    $files = array();
    $curimage=0;
    if($handle = opendir($dirname)) {
        while(false !== ($file = readdir($handle))){
            if(eregi($pattern, $file)){ //if this file is a valid image
                //Output it as a JavaScript array element
                // echo 'galleryarray['.$curimage.']="'.$file .'";';
                echo '<div class="carousel-item">';
                echo '<img class="d-block w-100" src="'.$file.'" alt="pub_'.$curimage.'">';
                echo '</div>';
                $curimage++;
            }
        }
 
        closedir($handle);
    }
    return($files);
}
 
// echo 'var galleryarray=new Array();'; //Define array in JavaScript
returnimages() //Output the array elements containing the image file names
?>