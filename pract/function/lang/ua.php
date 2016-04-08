<?php

    function lang($str) {
        $lang = array(
            'hello' => 'Привіт',
            'main_page' => 'Головна сторінка',
            'new_category' => 'Нова категорія',
            'category' => 'Категорія',
            'add_new_category' => 'Додати нову категорію',
            'new_dimension' => 'Нова величина',
            'select_category' => 'Виберіть категорію',
            'dimension' => 'Величина',
            'add' => 'Додати',
            'convert' => 'Конвертація',
            'convert_in' => 'Конвертувати у',
            'get_result' => 'Отримати результат',
            'number' => 'Число',
            'name' => 'Ім\'я',
            'login' => 'Логін',
            'password' => 'Пароль',
            'search' => 'Пошук',
            'surname' => 'Прізвище',
            'tel' => 'Телефон',
            'insert_relations' => 'Редагувати категорію',
            'insert_dimension' => 'Редагувати величину',
            'insert' => 'Змінити',
            'new_category' => 'Нова категорія',
            'new_dimension' => 'Нова величина',
            'size' => 'Відношення',
            'del' => 'Видалити',
            'number_list' => 'Номер списку'
        );

        $str = $lang[$str];

        if(in_array($str, $lang)) {
            return $str;
        } else {
            return false;
        }  
    }

?>
