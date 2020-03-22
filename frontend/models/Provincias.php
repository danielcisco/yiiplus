<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "provincias".
 *
 * @property int $provincia_id
 * @property string|null $provincia
 */
class Provincias extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'provincias';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['provincia'], 'string', 'max' => 55],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'provincia_id' => 'Provincia ID',
            'provincia' => 'Provincia',
        ];
    }
}
