<! Doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laisse pas trainer ton file</title>
</head>
<body>
<?php

$authorisedExtension = ['png', 'gif', 'jpg'];
$maxSize = 1048576;
$filesArray=[];

if(isset($_POST['submit'])){
    if(count($_FILES['upload']['name']) > 0){

        for($i=0; $i<count($_FILES['upload']['name']); $i++) {
            $extension = pathinfo($_FILES['upload']['name'][$i], PATHINFO_EXTENSION);
            if (in_array($extension, $authorisedExtension)) {
                if($_FILES['upload']['size'][$i] < $maxSize){

                    $tmpFilePath = $_FILES['upload']['tmp_name'][$i];

                    if($tmpFilePath != ""){

                        $shortname = $_FILES['upload']['name'][$i];

                        $filePath = "upload/" .'image'.uniqid(). ".".$extension;

                        if(move_uploaded_file($tmpFilePath, $filePath)) {
                            $filesArray[] = $shortname;

                        }
                    }
                }else{
                    echo "This file must respected the max size authorized (1048576 bit) ";
                }
            }else{
                echo "This file is not authorized";
            }

        }
    }
    //show success message
    echo "<h1>Uploaded:</h1>";
    if(is_array($filesArray)){
        echo "<ul>";
        foreach($filesArray as $filesArray){
            echo "<li>$filesArray</li>";
        }   
        echo "</ul>";
    }
}
$it = new FilesystemIterator('uploaded/');
foreach ($it as $fileinfo) {?>
    <form method="post" action="index.php">
        <img src="../uploaded/<?php  echo $fileinfo->getFilename() ?>" alt="..." class="img-thumbnail"> <br />
        <button type="submit" value="<?php  echo $fileinfo->getFilename() ?>" name="delete">Delete</button>
    </form>

<?php
    echo $fileinfo->getFilename() . "\n";
} ?>
<?php
if (isset($_POST['delete'])){
    $filePath='uploaded/'.$_POST['delete'];
    if(file_exists ( $filePath)){
        unlink($filePath);
    }
}

?>
<h1>Upload your files here :</h1>
<form action="" enctype="multipart/form-data" method="post">

    <div>
        <label for='upload'>Add files:</label>
        <input id='upload' name="upload[]" type="file" multiple="multiple"/>
    </div>

    <p><input type="submit" name="submit" value="Submit"></p>

</form>

</body>

</html>