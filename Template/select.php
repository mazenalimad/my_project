<?php
//ملف استيراد البيانات من قواعد البيانات وعرضها 
include 'con_DB.php';

$result = $con->query("SELECT * FROM BookData");
?>
<div class ="scrool_menu">
        <?php while ($row = $result->fetch_assoc()) {
            echo "<div class='orderMenu'>";
                echo "<div class ='divinfo'>";
                    echo " <p class='name'> <strong> {$row['BookName']} </strong> ";
                    echo " <sup class='edit'> {$row['Edition']} </sup> </p>";
                    echo " <p class='author'> {$row['Author']} </p>";
                    echo " <p class='no'> <small> IBN: {$row['BookNo']} </small> </p>";
                    echo " <p class='yeat'> {$row['Year']} </p>";
                echo "</div>";
                echo "<div class='divimage'>";
                    echo '<img class="img" src="data:image/;base64,' . base64_encode($row['img']) . '">';
                echo "</div>";
            echo "</div>";
        }
        ?>
    
</div>