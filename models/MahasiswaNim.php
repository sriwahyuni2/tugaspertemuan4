<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mahasiswa_nim".
 *
 * @property int $id
 * @property string $nim
 * @property string $nama
 * @property string $kelas
 * @property string $jurusan
 */
class MahasiswaNim extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mahasiswa_nim';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nim', 'nama', 'kelas', 'jurusan'], 'required'],
            [['nim'], 'string', 'max' => 20],
            [['nama'], 'string', 'max' => 255],
            [['kelas'], 'string', 'max' => 1],
            [['jurusan'], 'string', 'max' => 225],
            [['nim'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nim' => 'Nim',
            'nama' => 'Nama Mahasiswa',
            'kelas' => 'Kelas',
            'jurusan' => 'Jurusan',
        ];
    }

    public function getProfilnim()
    {
        //same as above
        return $this->hasOne(ProfilNim::class, ['id_mahasiswa' => 'id']);
    }
}
