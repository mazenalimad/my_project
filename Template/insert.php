<?php
//ملف استقبال البيانات من ملف 
//post.js
//والتحقق من البيانات وادخالها في قاعدة البيانات

//include'Template/con_DB.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Boom baby we a POST method
    include 'con_DB.php';

    $result = $con->query("SELECT * FROM BookData");
    if ($result->num_rows < 0 || $result->num_rows > 4) {
        die("You can add 5 books only...");
        exit;
    }else{
        echo 'hi' . $result->num_rows;
    }
    
    if (
        isset($_POST['bookname']) &&
        isset($_POST['edition']) &&
        isset($_POST['author']) &&
        isset($_POST['bookno']) &&
        isset($_POST['year'])   &&
        isset($_FILES["file"]["name"])
    ) {

        $name   = $_POST['bookname'];
        $edit   = $_POST['edition'];
        $author = $_POST['author'];
        $bookno = $_POST['bookno'];
        $year   = $_POST['year'];
        // Get file info
        $fileName = basename($_FILES["file"]["name"]);
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION);
        // Allow certain file formats
        $allowTypes = array('jpg', 'png', 'jpeg');
        if (in_array($fileType, $allowTypes)) {
            $image = $_FILES['file']['tmp_name'];
            $imgContent = addslashes(file_get_contents($image));
            // Insert image content into database
            $con->query("INSERT INTO BookData (BookName, Edition, Author, BookNo, Year, img) 
                VALUES ('$name','$edit','$author','$bookno','$year','$imgContent')");
        } else {
            die('Sorry, only JPG, JPEG, PNG... files are allowed to upload.');
        }
    } else {
        echo "full all input plz";
    }
    exit;
}

?>

<div class ="scrool_menu">
    <form method="post" action="" enctype="multipart/form-data" id="myform">
        <label><i class="fas fa-book icon "></i></label>
        <input id="bookname" name="BookName" type="text" placeholder="Book Name"><br>

        <label><i class="fas fa-box-open icon icon_1"></i></label>
        <input id="edition" name="Edition" type="text" placeholder="Edition"><br>

        <label><i class="fas fa-user icon"></i></label>
        <input id="author" name="Author" type="text" placeholder="Author"><br>

        <label><i class="fas fa-0 icon icon_2"></i></label>
        <input id="bookno" name="BookNo" type="text" placeholder="Book NO."><br>

        <label><i class="fas fa-calendar-days icon"></i></label>
        <input id="year" name="Year" type="text" placeholder="Year"> <br>
        
        <input id="file" name="image" type="file"> <br>

        <input id="submit" type="button" class="btn-submit" value="Submit" />
    </form>

    <span id="data"></span>
</div>
calendar-days
<script src="resources/js/post.js"></script>