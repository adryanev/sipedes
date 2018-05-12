<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "kelurahan".
 *
 * @property string $id_kelurahan
 * @property string $nama_kelurahan
 * @property string $id_kecamatan
 *
 * @property Kecamatan $kecamatan
 */
class Kelurahan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'kelurahan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_kelurahan'], 'required'],
            [['id_kelurahan', 'id_kecamatan'], 'string', 'max' => 15],
            [['nama_kelurahan'], 'string', 'max' => 255],
            [['id_kelurahan'], 'unique'],
            [['id_kecamatan'], 'exist', 'skipOnError' => true, 'targetClass' => Kecamatan::className(), 'targetAttribute' => ['id_kecamatan' => 'id_kecamatan']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_kelurahan' => 'Id Kelurahan',
            'nama_kelurahan' => 'Nama Kelurahan',
            'id_kecamatan' => 'Id Kecamatan',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKecamatan()
    {
        return $this->hasOne(Kecamatan::className(), ['id_kecamatan' => 'id_kecamatan']);
    }
}
