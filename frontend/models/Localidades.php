<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "localidades".
 *
 * @property int $localidad_id
 * @property string $localidad
 * @property int $departamento_id
 */
class Localidades extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'localidades';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['localidad', 'departamento_id'], 'required'],
            [['departamento_id'], 'integer'],
            [['localidad'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'localidad_id' => 'Localidad ID',
            'localidad' => 'Localidad',
            'departamento_id' => 'Departamento ID',
        ];
    }
}
