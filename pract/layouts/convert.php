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
    <h2><?=lang('convert');?></h2>
    <form action="" method="post">
        <table>
            <tr>
                <td width="250px">
                    <?=lang('number');?>
                </td>
                <td>
                    <input type="number" name="number" />
                </td>
            </tr>
            <tr>
                <td>
                    <?=lang('category');?>:
                </td>
                <td>
                    <select name="select_relations">
                        <option disabled selected ><?=lang('select_category');?></option>
                        <?php
                            $category = get_relations();
                            foreach($category as $item): 
                        ?>

                        <option value="<?=$item['id'];?>"><?=$item['name'];?></option>

                        <?php
                            endforeach;
                        ?> 
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <?=lang('convert_in');?>
                </td>
                <td>
                    <select name="select_relations_convert">
                        <option disabled selected ><?=lang('select_category');?></option>
                        <?php
                            $category = get_relations();
                            foreach($category as $item): 
                        ?>

                        <option value="<?=$item['id'];?>"><?=$item['name'];?></option>

                        <?php
                            endforeach;
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="<?=lang('get_result');?>" name="get_result" />
                </td>
                <?php 
                    if (isset($result)) { 
                ?>
                <td>
                    <?php 
                        echo $result;
                    ?>
                </td>
                <?php } ?>
            </tr>
        </table>
    </form>
    <div class="error">
        <?php
            echo $info;
        ?>
    </div>
    <br />
</div>