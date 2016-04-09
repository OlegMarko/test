<?php

    include 'db_func.php';

    function get_relationsID($id) {
        /* Вибірка відношень з бази даних */
        
        $connection = db_connect();
        
        $query = " SELECT * FROM convert_relations WHERE id = $id ";
        
        $res = mysqli_query($connection, $query);
        $res = db_result_to_array($res);
        
        foreach($res as $item):
            $result = $item['name'];
        endforeach;
        
        return $result;
    }
    
    function get_number_CI($data) {
        /* отриманя значення Сі */
        
        $connection = db_connect();
        
        $query = " SELECT * FROM convert_relations WHERE convert_relations.id = $data ";
        
        $result = mysqli_query($connection, $query);
        $result = db_result_to_array($result);
        
        foreach($result as $item): 
            $result = $item['Ci'];
        endforeach;
        
        return $result;
    }

    function convert($number, $out, $in) {
        /* Правило конвертації */
        
        $out = get_number_CI($out);
        $in = get_number_CI($in);
        
        $result= $number * $out / $in;
        return $result;
    }
    
    function convertV($number, $out, $in) {
        /* Правило конвертації температури */
        
        $out = get_number_CI($out);
        $in = get_number_CI($in);
        
        $result= $number * $out / $in;
        return $result;
    }


?>