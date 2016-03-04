<?php

    include 'function/db_func.php';
    include 'function/convert.php';
    
    session_start();
    
    if (!empty($_POST['category']) && !isset($_POST['get_result'])) {
        $res = get_deminsion_ID();
        exit($res);
    }
    
    if (empty($_GET['page'])) {
        $page = 'index';
    } else {
        $page = $_GET['page'];
    }   
    
    if (!isset($_SESSION['lang'])) {
        $lang = 'ua';
        $_SESSION['lang'] = $lang;
    } else {
        $lang = $_SESSION['lang'];
    }
    
    if (isset($_POST['change_lang'])) {
        change_lang($_POST['lang']);
        header('Location: index.php?view='.$view);
    }
    
    include('function/lang/' . $lang . '.php'); 
    
    if (isset($_POST['change_lang'])) {
        change_lang($_POST['lang']);
        header('Location: index.php?page='. $page);
    }
    
    
    $page_data = page_data($page, $lang);
    
    $info = "";
    
    if (empty($_SESSION['username'])) {
        $_SESSION['username'] = "";
    }
    
    switch ($page) { 
        case "index": 
            
        break;
        
        case "convert":
            
            if(isset($_POST['add_category'])  && !empty($_POST['category'])) {
                $data['category'] = "'" . $_POST['category'] . "'";
                $data = implode(',', $data);
                add_category($data);
                header('Location: index.php?page=' . $page);
            } else {
                $info = "Не всі поля заповнені! Заповніт всі поля!!!";
            }
            
            if(isset($_POST['add_dimension'])  && !empty($_POST['select_category']) && !empty($_POST['dimension']) && !empty($_POST['size'])) {
                $data['dimension'] = "'" . $_POST['dimension'] . "'";
                $data['select_category'] = "'" . $_POST['select_category'] . "'";
                $data['size'] = "'" . $_POST['size'] . "'";
                $data = implode(',', $data);
                add_relation($data);
                header('Location: index.php?page=' . $page);
            } else {
                $info = "Не всі поля заповнені! Заповніт всі поля!!!";
            }
            
            if(isset($_POST['update_category'])  && !empty($_POST['select_category']) && !empty($_POST['category']) ) {
                $id = $_POST['select_category'];
                $data = $_POST['category'];
                update_category($id, $data);
                header('Location: index.php?page=' . $page);
            } else {
                $info = "Не всі поля заповнені! Заповніт всі поля!!!";
            }
            
            if(isset($_POST['update_dimension'])  && !empty($_POST['size']) && !empty($_POST['demension_insert']) ) {
                $id = $_POST['demension_insert'];
                $data = $_POST['size'];
                update_deminsion($id, $data);
                header('Location: index.php?page=' . $page);
            } else {
                $info = "Не всі поля заповнені! Заповніт всі поля!!!";
            }
            
            if(isset($_POST['get_result'])  && !empty($_POST['number']) && !empty($_POST['demension']) && !empty($_POST['demension_in'])) {
                $number = $_POST['number'];
                $out = $_POST['demension'];
                $in = $_POST['demension_in'];
                if ($out != $in) {
                    $result = "$number " . get_relationsID($out) . " = " . convert($number, $out, $in) . " " . get_relationsID($in);
                    $info = "";
                } else {
                    $info = "";
                }
            } else {
                $result = "";
                $info = "";
            }
            
        break;
        
        case "tel":
            if (isset($_POST['add_tel'])  && !empty($_POST['name']) && !empty($_POST['surname']) && !empty($_POST['tel'])) {
                $data['name'] = "'" . $_POST['name'] . "'";
                $data['surname'] = "'" . $_POST['surname'] . "'";
                $data['tel'] = "'" . $_POST['tel'] . "'";
                $data = implode(',', $data);
                add_tel($data);
                header('Location: index.php?page=' . $page);
            }
            
            if (isset($_POST['search_name']) && !empty($_POST['search'])) {
                $data= "'" . $_POST['search'] . "'";
            }
            if (isset($_POST['search_surname']) && !empty($_POST['search2'])) {
                $data= "'" . $_POST['search2'] . "'";
            }
            if (isset($_POST['search_tel']) && !empty($_POST['search3'])) {
                $data= "'" . $_POST['search3'] . "'";
            }
            
            if (isset($_POST['del_tel']) && !empty($_POST['del'])) {
                $data = $_POST['del'];
                del_tel($data);
                header('Location: index.php?page=' . $page);
            } else {
                $info = "Не всі поля заповнені! Заповніт всі поля!!!";
            }
            
            if (isset($_POST['del_tel_name']) && !empty($_POST['name']) && !empty($_POST['surname'])) {
                $name = "'" . $_POST['name'] . "'";
                $surname = "'" . $_POST['surname'] . "'";
                del_tel_name($name, $surname);
                header('Location: index.php?page=' . $page);
            } 
            if (isset($_POST['del_tel_name']) && ( !empty($_POST['name']) || !empty($_POST['surname'])) ) {
                $info = "Не всі поля заповнені! Заповніт всі поля!!!";
            }
        break;
        
        case "photo_album":
            if (isset($_POST['add_image'])) {
                foreach ($_FILES["image"]["error"] as $key => $error) {
                    if ($error == UPLOAD_ERR_OK) {
                        $tmp_name = $_FILES["image"]["tmp_name"][$key];
                        $name = $_FILES["image"]["name"][$key];
                        move_uploaded_file($tmp_name, "data/$name");
                        $name = "'" . $name . "'";
                        $tmp = "'" . $tmp_name . "'";
                        add_photo($name, $tmp);
                        header('Location: index.php?page=' . $page);
                    }
                }
            }
            
            if (isset($_POST['add_user']) && !empty($_POST['login']) && !empty($_POST['password']) && !empty($_POST['name']) && !empty($_POST['captcha2'])) {
                $name = "'" . $_POST['name'] . "'";
                $login = "'" . $_POST['login'] . "'";
                $password = "'" . sha1(md5($_POST['password'])) . "'";
                add_user($name, $login, $password);
                header('Location: index.php?page=' . $page);
            } 
            if (isset($_POST['add_user']) && ( empty($_POST['login']) || empty($_POST['password']) || !empty($_POST['name']) || !empty($_POST['captcha2'])))  {
                $info = "Не всі поля заповнені! Заповніт всі поля!!!";
            }
            
            if (isset($_POST['out']) && !empty($_POST['login']) && !empty($_POST['password'])) {
                $login = $_POST['login'];
                $password = sha1(md5($_POST['password']));
                if (auth_user($login ,$password)) {
                    $_SESSION['username'] = $login;
                }                
                header('Location: index.php?page=' . $page);
            }
            if (isset($_POST['out']) && ( !empty($_POST['login']) || empty($_POST['password']))) {
                $info = "Не всі поля заповнені! Заповніт всі поля!!!";
            }
            
            $image = get_photo();
        break;
    }
    
    
    include($_SERVER['DOCUMENT_ROOT'].'/pract/layouts/site.php');
?>