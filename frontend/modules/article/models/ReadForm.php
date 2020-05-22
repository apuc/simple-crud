<?php


namespace frontend\modules\article\models;


use yii\base\Model;

class ReadForm extends Model
{
    public $csv;

    public function rules()
    {
        return [
            [['csv'], 'safe'],
            [['csv'], 'required'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'csv' => '',
        ];
    }

    public function upload()
    {
        if ($this->validate()) {
            print_r($this->csv); die();
//            $this->csv[0]->saveAs("articles/{$this->csv[0]->name}");

            return true;
        } else
            return false;
    }
}