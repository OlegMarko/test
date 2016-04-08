<?php

    function lang($str) {
        $lang = array(
            'hello' => 'Hello',
            'main_page' => 'Main page',
            'new_category' => 'New category',
            'category' => 'Category',
            'add_new_category' => 'Add New category',
            'new_dimension' => 'New dimension',
            'select_category' => 'Selected category',
            'dimension' => 'Dimension',
            'add' => 'Add',
            'convert' => 'Convert',
            'convert_in' => 'Convert in',
            'get_result' => 'Get result',
            'number' => 'Number',
            'name' => 'Name',
            'login' => 'Login',
            'password' => 'Password',
            'search' => 'Search',
            'surname' => 'Surname',
            'tel' => 'Tel',
            'insert_dimension' => 'Insert deminsion',
            'insert_relations' => 'Insert category',
            'insert' => 'Insert',
            'new_category' => 'Newcategory',
            'new_dimension' => 'New dimension',
            'size' => 'relation',
            'del' => 'Delete',
            'number_list' => 'Number list'
        );

        $str = $lang[$str];

        if(in_array($str, $lang)) {
            return $str;
        } else {
            return false;
        }  
    }

?>

