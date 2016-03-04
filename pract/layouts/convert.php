
<div class="category">
    <h2><?=lang('new_category');?></h2>
    <form action="" method="post">
        <table>
            <tr>
                <td width="250px">
                    <?=lang('category');?>: 
                </td>
                <td>
                    <input type="text" name="category" />
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" name="add_category" value="<?=lang('add_new_category');?>" />
                </td>
            </tr>
        </table>
    </form>
 </div>
 
 <div class="category">
    <h2><?=lang('new_dimension');?></h2>
    <form action="" method="post">
        <table>
            <tr>
                <td width="250px">
                    <?=lang('category');?>:
                </td>
                <td>
                    <select name="select_category">
                        <option disabled selected ><?=lang('select_category');?></option>
                        <?php
                            $category = get_category();
                            foreach($category as $item): 
                        ?>

                        <option value="<?=$item['id'];?>"><?=$item['category'];?></option>

                        <?php
                            endforeach;
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <?=lang('dimension');?>:
                </td>
                <td>
                    <input type="text" name="dimension" />
                </td>
            </tr>
            <tr>
                <td>
                    Відношення даної величини до СІ (міжнародної системи вимірювання фізичних величин):
                </td>
                <td>
                    <input type="number" name="size" />
                </td>
            </tr>
        </table>
        <br />
        <input type="submit" name="add_dimension" value="<?=lang('add');?>" />
    </form>
    
    <br />
    <div class="error">
        
    </div>
    <br />

    <br />
    <br />
    <br />
</div>

 <div class="category">
    <h2><?=lang('insert_dimension');?></h2>
    <form action="" method="post">
        <table>
            <tr>
                <td width="250px">
                    <?=lang('dimension');?>:
                </td>
                <td>
                    <form action="" method="post">
                        <div>
                            <select name="category" id="category_insert">
                                <option value="0">Виберіть категорію</option>
                                <?php
                                    $category = get_category();
                                    foreach($category as $item): 
                                ?>

                                <option value="<?=$item['id'];?>"><?=$item['category'];?></option>

                                <?php
                                    endforeach;
                                ?>
                            </select>
                        </div>
                        <div id="divdemension_insert">
                            <select disabled="" name="demension_insert" id="demension_insert"></select>
                        </div>
                    </form>
                </td>
            </tr>
            <tr>
                <td>
                    Відношення даної величини до СІ (міжнародної системи вимірювання фізичних величин):
                </td>
                <td>
                    <input type="number" name="size" />
                </td>
            </tr>
        </table>
        <br />
        <input type="submit" name="update_dimension" value="<?=lang('insert');?>" />
    </form>
    
    <br />
    <div class="error">
        
    </div>
    <br />

    <br />
    <br />
    <br />
</div>

<div class="category">
    <h2><?=lang('insert_relations');?></h2>
    <form action="" method="post">
        <table>
            <tr>
                <td width="250px">
                    <?=lang('dimension');?>:
                </td>
                <td>
                    <select name="select_category">
                        <option disabled selected ><?=lang('select_category');?></option>
                        <?php
                            $category = get_category();
                            foreach($category as $item): 
                        ?>

                        <option value="<?=$item['id'];?>"><?=$item['category'];?></option>

                        <?php
                            endforeach;
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    Нова назва:
                </td>
                <td>
                    <input type="text" name="category" />
                </td>
            </tr>
        </table>
        <br />
        <input type="submit" name="update_category" value="<?=lang('insert');?>" />
    </form>
    
    <br />
    <div class="error">
        
    </div>
    <br />

    <br />
    <br />
    <br />
</div>

<div class="category">
    <h2><?=lang('convert');?></h2>
    <form action="" method="post">
        <?=lang('number');?>
        <input type="number" name="number" />
        <div>
            <select name="category" id="category">
                <option value="0">Виберіть категорію</option>
                <?php
                    $category = get_category();
                    foreach($category as $item): 
                ?>

                <option value="<?=$item['id'];?>"><?=$item['category'];?></option>

                <?php
                    endforeach;
                ?>
            </select>
        </div>
        <div id="divdemension">
            <select disabled="" name="demension" id="demension"></select>
        </div>
        <?=lang('convert_in');?>
        <div id="divdemension_in">
            <select disabled="" name="demension_in" id="demension_in"></select>
        </div>
        <input type="submit" value="<?=lang('get_result');?>" name="get_result" />
    </form>
    <?php 
        echo $result;
    ?>
</div>