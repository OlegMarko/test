<?php
    sleep(2);

    $number = $_POST['number'];
    $out = $_POST['demension'];
    $in = $_POST['demension_in'];

    if (($number != 0) && ($out != 0) && ($in != 0)) {
        if ($in != $out) {
            include 'convert.php';
            
            $result = "$number " . get_relationsID($out) . " = " . convert($number, $out, $in) . " " . get_relationsID($in);

            $f = fopen('log.txt', 'a+');
            fwrite($f, $result ."  " . " Date this convert " . date("l dS of F Y h:I:s A") . "\n");
            fclose($f);
            
            echo $result;
        } else {
            echo "Ви вибрали одинакові велечини для конвертації";
        }
        return;
    } else {
        echo "Заповніть всі поля";
    }
    
?>
    

