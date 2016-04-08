<ul>
    <?php
        $menu = get_menu($lang);
        foreach($menu as $item): 
    ?>
        <li>
            <a href="index.php?page=<?=$item['title_url'];?>"  <?php if($page == $item['title_url']) echo "class='menu-active'";?> >
                <?=$item['title'];?> 
            </a>
        </li>
    <?php
        endforeach;
    ?>
        
        <li <?php if($page == 'convert'){ echo "class='conv_hover'";} else {echo "class='conv'";}?>>
            <a href="index.php?page=convert#conv">
                Конвертація
            </a>
        </li>
</ul>