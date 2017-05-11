<?php
/**
 * Created by PhpStorm.
 * User: Apron63
 * Date: 11.05.2017
 * Time: 8:58
 */
namespace common\widgets;

use Yii;
class ThemedField
{
    public static function renderField($model, $field)
    {
        $value = $model[$field];
        $label = $model->attributeLabels()[$field];
        $id = $field;

        $fieldSet = '<div class="mdl-textfield mdl-js-textfield">'
                    . self::themedInput($field, $value, $id)
                    . "\n"
                    . self::themedLabel($label, $id)
                    . "\n"
                    . '</div>'
                    . "\n";
        return $fieldSet;
    }

    public static function renderArea($model, $field)
    {
        $value = $model[$field];
        $label = $model->attributeLabels()[$field];
        $id = $field;

        $fieldSet = '<div class="mdl-textfield mdl-js-textfield">'
                    . self::themedArea($field, $value, $id)
                    ."\n"
                    . self::themedLabel($label, $id)
                    . "\n"
                    . '</div>'
                    . "\n";
        return $fieldSet;
    }

    protected static function themedInput($field, $value, $id)
    {
        return '<input class="mdl-textfield__input" type="text" id="' . $id . '"' . ' value="'. $value . '">';
    }

    protected static function themedArea($field, $value, $id)
    {
        return '<textarea class="mdl-textfield__input" type="text" rows= "3" id="'. $id . '" value="' . $value. '"></textarea>';
    }

    protected static function themedLabel($label, $id)
    {
        return '<label class="mdl-textfield__label" for="' .$id. '">' . $label . '</label>';
    }
}