<?php

    function db_connect() {
        /* Підключення до бази даних */
        
        include 'function/config.php';
        
        $connection = new mysqli($host, $user, $password, $database);
        $connection->query(" SET NAMES 'utf8' ");
        
        if(!$connection || !mysqli_select_db($connection, $database)) {
            return false;
        }
        return $connection;
    }
    
    function db_result_to_array($result) {
        /* Перетворення вибірки з бази даних у масив */
        
        $res_array = array();
        $count = 0;
        
        while($row = mysqli_fetch_array($result)) {
            $res_array[$count] = $row;
            $count++;
        }
        return $res_array;
    }
    
    function add_category($data) {
        /* Додавання нової категорії */
        
        $connection = db_connect();
                
        $query = " INSERT INTO convert_category (category) VALUES ($data) ";
        $query = mysqli_query($connection, $query);
    }
    
    function get_category() {
        /* Вибірка категорій з бази даних */
        
        $connection = db_connect();
        
        $query = " SELECT * FROM convert_category ORDER BY convert_category.id DESC ";
        
        $result = mysqli_query($connection, $query);
        $result = db_result_to_array($result);
        
        return $result;
    }
    
    function get_category_where($where) {
        /* Вибірка категорій з бази даних */
        
        $connection = db_connect();
        
        $query = " SELECT * FROM convert_category WHERE id = $where ORDER BY convert_category.id DESC ";
        
        $result = mysqli_query($connection, $query);
        $result = db_result_to_array($result);
        
        return $result;
    }
    
    function add_relation($data) {
        /* Додавання нового відношення */
        
        $connection = db_connect();
                
        $query = " INSERT INTO convert_relations (name, category, Ci) VALUES ($data) ";
        $query = mysqli_query($connection, $query); 
    }
    
    function get_relations() {
        /* Вибірка відношень з бази даних */
        
        $connection = db_connect();
        
        $query = " SELECT * FROM convert_relations ORDER BY convert_relations.name ";
        
        $result = mysqli_query($connection, $query);
        $result = db_result_to_array($result);
        
        return $result;
    }
    
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
    
    function get_relations_category($category) {
        /* Вибірка відношень однієї категорії з бази даних */
        
        $connection = db_connect();
        
        $query = " SELECT * FROM convert_relations WHERE convert_relations.category = $category ORDER BY convert_relations.name ";
        
        $result = mysqli_query($connection, $query);
        $result = db_result_to_array($result);
        
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
    
    function update_category($id, $category) {
        
        $connection = db_connect();
                
        $query = "UPDATE `db_pract`.`convert_category` SET `category` = $category WHERE `convert_category`.`id` = $id;";
        $query = mysqli_query($connection, $query); 
    }
    
    function update_demension($id, $number) {
        
        $connection = db_connect();
                
        $query = "UPDATE `db_pract`.`convert_relations` SET `Ci` = $number WHERE `convert_relations`.`id` = $id;";
        $query = mysqli_query($connection, $query); 
    }
        
    function add_tel($data) {
        /* Додавання нового контакту */
        
        $connection = db_connect();
                
        $query = " INSERT INTO tel_table (name, surname, tel) VALUES ($data) ";
        $query = mysqli_query($connection, $query); 
    }
    
    function get_tel() {
        /* Вибірка всіх контактів з бази даних */
        
        $connection = db_connect();
        
        $query = " SELECT * FROM tel_table ORDER BY tel_table.name ";
        
        $result = mysqli_query($connection, $query);
        $result = db_result_to_array($result);
        
        return $result;
    }
    
    function get_search($name) {
        /* Пошук контактів в БД па імені */
        
        $connection = db_connect();
        
        $query = " SELECT * FROM tel_table WHERE tel_table.name=$name OR tel_table.surname=$name OR tel_table.tel=$name ";
        
        $result = mysqli_query($connection, $query);
        $result = db_result_to_array($result);
        
        return $result;
    }
    
    function del_tel($number) {
        /* Видалення контакту по номеру у списку */
        
        $connection = db_connect();
        
        $id = " (SELECT * FROM tel_table ORDER BY id LIMIT $number) ";
        $id = mysqli_query($connection, $id);
        $id = db_result_to_array($id);
        
        foreach ($id as $item):
            $number = $item['id'];
        endforeach;
        
        $query = " DELETE FROM tel_table WHERE id=$number ";
        
        $result = mysqli_query($connection, $query);
        return $result;
    }
    
    function del_tel_name($name, $surname) {
        /* Видалення контакту по імені та прізвищу */
        
        $connection = db_connect();
        
        $query = " DELETE FROM tel_table WHERE name = $name AND surname = $surname ";
        
        $result = mysqli_query($connection, $query);
        return $result;
    }
    
    function add_photo($name, $tmp) {
        /* завантаження фото на сервер */
        
        $connection = db_connect();
                
        $query = " INSERT INTO photo (name, tmp) VALUES ($name, $tmp) ";
        $query = mysqli_query($connection, $query); 
    }
    
    function get_photo() {
        /* Вибірка з бази даних всіх фото */
        
        $connection = db_connect();
        
        $query = " SELECT * FROM photo ORDER BY id DESC ";
        
        $result = mysqli_query($connection, $query);
        $result = db_result_to_array($result);
        
        return $result;
    }
    
    function add_user($name, $login, $password) {
        /* Додавання нового користувача */
        
        $connection = db_connect();
        
        $query = " INSERT INTO photo_auth (name, login, password) VALUES ($name, $login, $password) ";
        $query = mysqli_query($connection, $query); 
        
    }
    
    function auth_user($login ,$password) {
        $connection = db_connect();
        
        $query = sprintf("SELECT * FROM photo_auth WHERE photo_auth.login = '%s' AND photo_auth.password = '%s'",
                        mysqli_real_escape_string($connection, $login),
                        mysqli_real_escape_string($connection, $password));
        
        $result = mysqli_query($connection, $query);
        
        if (mysqli_num_rows($result) == 1) {
            return true;
        } else {
            return false;
        }
    }
    
    function page_data($title, $lang) {
        /* вибірка з бази даних мета-даних description, keywords 
        (інформація про сторінку) */
        
        $connection = db_connect();
        
        $query = sprintf(" SELECT * FROM pages WHERE pages.title_url = '%s' AND  pages.lang = '%s' ", 
                        mysqli_real_escape_string($connection, $title),
                        mysqli_real_escape_string($connection, $lang));
        
        $result = mysqli_query($connection, $query);
        
        $row = mysqli_fetch_array($result);
        
        return $row;
    }
    
    function change_lang($lang) {
        /*Зміна мови сайту */
        
        $_SESSION['lang'] = $lang;
        return $_SESSION['lang'];
    }
    
    function get_menu($lang) {
        /*вибірка пунктів меню з бази даних */
        
        $connection = db_connect();
        
        $query = sprintf(" SELECT * FROM pages WHERE pages.lang = '%s' ",
                        mysqli_real_escape_string($connection, $lang));
        
        $result = mysqli_query($connection, $query);
        $result = db_result_to_array($result);
        
        return $result;
    }
    
    function captcha() {
        /*генерація капчі */
        $captcha = rand(10000, 99999);
        return $captcha;
    }

    function get_deminsion_ID() {
        $connection = db_connect();
        
        $category = (int)$_POST['category'];
        $query = "SELECT * FROM convert_relations WHERE category = $category";
        $res = mysqli_query($connection, $query);
        
        $return = "<option value='0'>Виберіть розмірність</option>";
        while ($row = mysqli_fetch_assoc($res)) {
            $return .= "<option value='{$row['id']}'>{$row['name']}</option>";
        }
        
        return $return;
    }
    
    function get_res() {
        $connection = db_connect();
        
        $res = convert($_POST['number'], $_POST['demension'], $_POST['demension_in']);
        $ret = "$res";
        return $ret;
    }

?>