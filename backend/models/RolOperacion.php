<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "rol_operacion".
 *
 * @property int $rol_id
 * @property int $operacion_id
 */
class RolOperacion extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'rol_operacion';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['rol_id', 'operacion_id'], 'required'],
            [['rol_id', 'operacion_id'], 'integer'],
            [['rol_id', 'operacion_id'], 'unique', 'targetAttribute' => ['rol_id', 'operacion_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'rol_id' => 'Rol ID',
            'operacion_id' => 'Operacion ID',
        ];
    }
}
