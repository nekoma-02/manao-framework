<div>
    <h1 id='form-component'>Form</h1>
    <form <?php
            echo generateProp($result);
            echo generateAttr($result['attr']);
            ?>>
        <?php
        generateInput($result);
        ?>
    </form>
</div>


<?php

function generateInput($array)
{
    foreach ($array['elements'] as $el) {
        if ($el['type'] == 'text' || $el['type'] == 'number' || $el['type'] == 'password' || $el['type'] == 'checkbox' || $el['type'] == 'radio' || $el['type'] == 'email') {
            $input = '<input';
            if (key_exists('multiple', $el) && $el['multiple'] == true) {
                $input .= ' multiple ';
            }
            $input .= generateProp($el);
            if (key_exists('attr', $el)) {
                $input .= generateAttr($el['attr']);
            }
            $input .= '><br>';
            echo $input;
        }
        if ($el['type'] == 'select') {
            $select = '<select';
            if (key_exists('multiple', $el) && $el['multiple'] == true) {
                $select .= ' multiple ';
            }
            $select .= generateProp($el);
            if (key_exists('attr', $el)) {
                $select .= generateAttr($el['attr']);
            }
            $select .= '>';
            echo $select;
            generateOption($el['list']);
            echo '</select><br>';
        }
        if ($el['type'] == 'textarea') {
            $textarea = '<textarea';
            $textarea .= generateProp($el);
            if (key_exists('attr', $el)) {
                $textarea .= generateAttr($el['attr']);
            }
            $textarea .= '>';
            echo $textarea;
            echo '</textarea><br>';
        }
    }
}

function generateProp($prop)
{
    $__prop = '';
    foreach ($prop as $k => $v) {
        if ($k != 'attr' && $k != 'elements' && $k != 'multiple' && $k != 'list' && $k != 'selected') {
            $__prop .= ' ' . $k . '="' . $v . '"';
        }
    }
    return $__prop;
}

function generateAttr($attr)
{
    $__attr = '';
    foreach ($attr as $k => $v) {
        $__attr .= ' ' . $k . '="' . $v . '"';
    }
    return $__attr;
}

function generateOption($list)
{
    foreach ($list as $option) {
        $__option = '<option ';
        $__option .= generateProp($option);
        if (key_exists('selected', $option) && $option['selected'] == true) {
            $__option .= ' selected ';
        }
        if (key_exists('attr', $option)) {
            $__option .= generateAttr($option['attr']);
        }
        $__option .= ' >' . $option['value'] . '</option>';
        echo $__option;
    }
}

?>