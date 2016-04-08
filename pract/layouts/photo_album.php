<div class="album">
    <h2>Завантаження фото</h2>
    <form action="" method="post" enctype="multipart/form-data">
        <br />
        <input type="file" name="image[]" />
        <br />
        <input type="file" name="image[]" />
        <br />
        <input type="file" name="image[]" />
        <br />
        <br />
        <input type="submit" name="add_image" value="Завантажити" />
        <div class="error">
            <?=$info;?>
        </div>
    </form>
</div>

<div class="album">
    <ul>
        <?php
            foreach($image as $item): 
        ?>
            <li>
                <img src="data/<?=$item['name'];?>" alt="" />
            </li>
        <?php
            endforeach;
        ?> 
    </ul>
</div>

<div class="clear"></div>

<div class="album">
    <form action="" method="post">
        <h2>Реєстрація:</h2>
        <table>
            <tr>
                <td width="120px">
                    <?=lang('name');?>:
                </td>
                <td>
                    <input type="text" name="name" placeholder="<?=lang('name');?>" pattern="[A-Za-zА-Яа-я]+" required />
                </td>
            </tr>
            <tr>
                <td>
                    <?=lang('login');?>:
                </td>
                <td>
                    <input type="text" name="login" placeholder="<?=lang('login');?>" pattern="[A-Za-zА-Яа-я0-9]+" required />
                </td>
            </tr>
            <tr>
                <td>
                     <?=lang('password');?>:
                </td>
                <td>
                    <input type="password" name="password" placeholder="<?=lang('password');?>" pattern="[A-Za-zА-Яа-я0-9-_]+" required />
                </td>
            </tr>
            <tr>
                <td>
                    Captcha:
                </td>
                <td>
                    <input type="image" readonly="readonly" name="captcha" value="<?=captcha();?>" size="4" class="captcha" />
                </td>
            </tr>
            <tr>
                <td>
                    Код з картинки:
                </td>
                <td>
                    <input type="text" name="captcha2" size="5" maxlength="5" pattern="[0-9]+" required /><br />
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" name="add_user" value="Реєстрація" />
                </td>
            </tr>
        </table>
        <div class="error">
            <?=$info;?>
        </div>
    </form>
</div>

<div class="album">
    <p><b>Якщо ви вже зареєстрованi </b></p>
    <form action="" method="post">
        <h2>Вхід:</h2>
        <table>
            <tr>
                <td>
                    <?=lang('login');?>:
                </td>
                <td>
                    <input type="text" name="login" placeholder="<?=lang('login');?>" pattern="[A-Za-zА-Яа-я0-9]+" required />
                </td>
            </tr>
            <tr>
                <td>
                    <?=lang('password');?>:
                </td>
                <td>
                    <input type="password" name="password" placeholder="<?=lang('password');?>" pattern="[A-Za-zА-Яа-я0-9-_]+" required />
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" name="out" value="Реєстрація" />
                </td>
            </tr>
        </table>
        <div class="error">
            <?=$info;?>
        </div>
    </form>
</div>