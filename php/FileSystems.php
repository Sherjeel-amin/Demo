<?php

// mkdir("php/hello"); //  it is used to create a folder // -- //

// rmdir("php/hello"); // used to remove a folder  //

$file = "readme.txt";  

if(file_exists($file)){
    echo readfile($file); // echo readfile("readme.txt");  // To read a file in the server
    // copy("$file", "newFile.txt"); // Copies data from $file to a new file called newFile.txt
}else{
    echo "File does not exists"; // Handing error if the file is not in the directory
}
// rename("php/newFile.txt", "php/FileFile.txt"); // Renames the file to a new file name

// unlink("php/newFile.txt");  // Used to remove files from the dir //

// echo filesize($file); // file size
// echo filetype($file); // returns the file type
// echo realpath($file); // gives the actual file path

$info = pathinfo("$file"); // we get information about the path of the file in an array form thats why we use print_r
print_r($info);  // we can either assign it to the variable or we can directly print it using print_r 


 ?>