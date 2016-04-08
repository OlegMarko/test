<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="styles/style.css" type="text/css" />
        <link rel="stylesheet" href="styles/lang.css" type="text/css" />
        <link rel="stylesheet" href="styles/convert.css" type="text/css" />
        <link rel="stylesheet" href="styles/menu.css" type="text/css" />
        <link rel="stylesheet" href="styles/index.css" type="text/css" />
        <link rel="stylesheet" href="styles/tel.css" type="text/css" />
        <link rel="stylesheet" href="styles/album.css" type="text/css" />
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <script src="function/select.js"></script>
        <script src="function/res.js"></script>
        
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="keywords" />
        <meta name="description" content="description" />
        
        <title>TITLE</title>
    </head>
    <body>
        
        <div id="page">
            <div id="header">
                <h1>Виробнича практика 2016<h1>
                <p align="left"> <?=lang('hello');?> => <?=$_SESSION['username'];?> </p>
            </div>
            
            <div id="content">
                <?php include($_SERVER['DOCUMENT_ROOT'].'/pract/layouts/' . $page . '.php');?>
            </div>
            
            <div id="footer">
                <p>2016 &copy;MarkO </p>
            </div>
            
            <div id="menu">
                <?php include($_SERVER['DOCUMENT_ROOT'].'/pract/layouts/menu.php');?>
            </div>
            
            <div id="lang">
                <?php include($_SERVER['DOCUMENT_ROOT'].'/pract/layouts/lang.php');?>
            </div>
        </div>
    </body>
</html>