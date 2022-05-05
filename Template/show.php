<?php
// ملف استيراج البيانات من 
// post.js
// واستيراد البيانات من قاعدة البيانات وعرضها 
if (isset($_POST['search'])) {
    include 'con_DB.php';

    $search = $_POST['search'];
    $search = "%$search%";

    if (strlen($search) > 1) {
        $result = $con->query("SELECT * FROM BookData WHERE author LIKE '$search'");

        if ($result->num_rows !== 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<div class='orderMenu'>";
                    echo "<div class ='divinfo'>";
                        echo " <p class='name'> <strong> {$row['BookName']} </strong> ";
                        echo " <sup class='edit'> {$row['Edition']} </sup> </p>";
                        echo " <p class='author'> {$row['Author']} </p>";
                        echo " <p class='no'>IBN: {$row['BookNo']} </p>";
                        echo " <p class='yeat'> {$row['Year']} </p>";
                    echo "</div>";
                    echo "<div class='divimage'>";
                        echo '<img class="img" src="data:image/;base64,' . base64_encode($row['img']) . '">';
                    echo "</div>";
                echo "</div>";
            }
        }
    }
    exit;
}
?>


<div class ="scrool_menu">
    <form method="post" action="" enctype="multipart/form_data" id="myform_2">
        <label><i class="fas fa-search icon"></i></label>
        <input type="text" id="search" autocomplete="off" placeholder="Search by author name">
    </form>

    <span id="data_show"></span>
</div>

<script src="resources/js/post.js"></script>