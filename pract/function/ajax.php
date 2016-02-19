<?php
    # include data base
    include 'db_func.php';

    switch ($_POST['action']){

        case "showRegionForInsert":
            echo '<select size="1" name="region">';
            $rows = get_category();
            foreach ($rows as $row) {
                    echo '<option value="'.$row['id'].'">'.$row['category'].'</option>';
            };
            echo '</select>';
        break;
    };
 
?>