<?php

namespace app\frontend\models;

use Yii;

/**
 * This is the model class for table "cursos".
 *
 * @property integer $id
 * @property string $nombre
 * @property string $profe
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 */
class Cursos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cursos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre', 'profe', 'created_at', 'updated_at'], 'required'],
            [['status', 'created_at', 'updated_at'], 'integer'],
            [['nombre', 'profe'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nombre' => 'Nombre',
            'profe' => 'Profe',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
