<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "odp".
 *
 * @property int $id
 * @property int $code_ODP
 * @property string $nama_ODP
 * @property string $titik_X
 * @property string $titik_Y
 * @property int $max_user
 */
class Odp extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'odp';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['code_ODP', 'nama_ODP', 'titik_X', 'titik_Y', 'max_user'], 'required'],
            [['code_ODP', 'max_user'], 'integer'],
            [['nama_ODP'], 'string', 'max' => 20],
            [['titik_X', 'titik_Y'], 'string', 'max' => 2],
            [['code_ODP'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'code_ODP' => 'Code Odp',
            'nama_ODP' => 'Nama Odp',
            'titik_X' => 'Titik X',
            'titik_Y' => 'Titik Y',
            'max_user' => 'Max User',
        ];
    }
}
