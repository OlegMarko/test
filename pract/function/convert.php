<?php
    
    function convert($number, $out, $in) {
        /* Правило конвертації */
        
        $out = get_number_CI($out);
        $in = get_number_CI($in);
        
        $result= $number * $out / $in;
        return $result;
    }
    
    function convertT($number, $out, $in) {
        /* Правило конвертації температури */
        
        $out = get_number_CI($out);
        $in = get_number_CI($in);
        
        $result= $number * $out / $in;
        return $result;
    }


?>