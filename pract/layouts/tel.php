<div class="tel">
    <form action="" method="post">
        <h2>Новий контакт:</h2>
        <table>
            <tr>
                <td>
                    <?=lang('name');?>
                </td>
                <td>
                    <input type="text" name="name" />
                </td>
            </tr>
            <tr>
                <td>
                    <?=lang('surname');?>
                </td>
                <td>
                    <input type="text" name="surname" />
                </td>
            </tr>
            <tr>
                <td>
                    <?=lang('tel');?>
                </td>
                <td>
                    <input type="tel" name="tel" />
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" name="add_tel" value="Додати новий контакт" />
                </td>
            </tr>
        </table>
    </form>
</div>

<div class="tel">
    <h2>Список контактів</h2>
    <ol>
        <?php
            $contact = get_tel();
            if (get_tel()) { 
        ?>
            <table>
                <tr>
                    <td width="20%">
                        <?=lang('name');?>
                    </td>
                    <td width="30%">
                        <?=lang('surname');?>
                    </td>
                    <td width="250px">
                        <?=lang('tel');?>
                    </td>
                </tr>
            </table>
            <hr />
        <?php
            }
            foreach($contact as $item): 
        ?>

        <li>
            <table>
                <tr>
                    <td width="20%">
                        <?=$item['name'];?>
                    </td>
                    <td width="30%">
                        <?=$item['surname'];?>
                    </td>
                    <td width="250px">
                        <?=$item['tel'];?>
                    </td>
                </tr>
            </table>
        </li>
        <hr />

        <?php
            endforeach;
        ?> 
    </ol>
</div>

<div class="tel">
    <h2>Пошук</h2>
    <form action="" method="post">
        <table>
            <tr>
                <td width="100px">
                    <?=lang('name');?>
                </td>
                <td>
                    <input type="search" name="search" />
                </td>
                <td>
                    <input type="submit" name="search_name" value="Пошук" />
                </td>
            </tr>
        </table>
    </form>
    <form action="" method="post">
        <table>
            <tr>
                <td width="100px">
                    <?=lang('surname');?>
                </td>
                <td>
                    <input type="search" name="search2" />
                </td>
                <td>
                    <input type="submit" name="search_surname" value="Пошук" />
                </td>
            </tr>
        </table>
    </form>
    <form action="" method="post">
        <table>
            <tr>
                <td width="100px">
                    <?=lang('tel');?>
                </td>
                <td>
                    <input type="search" name="search3" />
                </td>
                <td>
                    <input type="submit" name="search_tel" value="Пошук" />
                </td>
            </tr>
        </table>
    </form>
    <?php if (isset($data)) { ?>
        <ul>
            <?php
                $search = get_search($data);
                foreach($search as $item): 
            ?>

            <li>
                <?=$item['name'];?>
                <br />
                <?=$item['surname'];?>
                <br />
                <?=$item['tel'];?>
                </br>
                <hr />
            </li>

            <?php
                endforeach;
            ?> 
        </ul>
    <?php }?>
</div>

<div class="tel">
    <h2>Видалити</h2>
    <form action="" method="post">
        <table>
            <tr>
                <td width="150px">
                    По номеру у списку
                </td>
                <td>
                    <input type="search" name="del" />
                </td>
                <td>
                    <input type="submit" name="del_tel" value="Видалити контакт" />
                </td>
            </tr>
        </table>
    </form>
    <br />
    <br />
    <form action="" method="post">
        <table>
            <tr>
                <td width="150px">
                    По імені та прізвищу
                </td>
                <td width="150px">
                    <input type="search" name="name" />
                    <input type="search" name="surname" />
                </td>
                <td>
                    <input type="submit" name="del_tel_name" value="Видалити контакт" />
                </td>
            </tr>
        </table>
    </form>
</div>


