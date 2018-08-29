<?php

namespace common\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "kecamatan".
 *
 * @property string $id_kecamatan
 * @property string $nama_kecamatan
 * @property string $id_kabupaten
 * @property string $status
 *
 * @property Desa[] $desas
 * @property Kabupaten $kabupaten
 * @property Kelurahan[] $kelurahans
 */
class Kecamatan extends \yii\db\ActiveRecord
{
    const STATUS_ACTIVE = 'AKTIF';
    const STATUS_DELETED = 'TIDAK AKTIF';
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'kecamatan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_kecamatan'], 'required'],
            [['id_kecamatan', 'id_kabupaten'], 'string', 'max' => 15],
            [['nama_kecamatan'], 'string', 'max' => 255],
            [['id_kecamatan'], 'unique'],
            [['status'], 'safe'],
            ['status', 'default', 'value' => self::STATUS_ACTIVE],
            ['status', 'in', 'range' => [self::STATUS_ACTIVE, self::STATUS_DELETED]],
            [['id_kabupaten'], 'exist', 'skipOnError' => true, 'targetClass' => Kabupaten::className(), 'targetAttribute' => ['id_kabupaten' => 'id_kabupaten']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_kecamatan' => 'Id Kecamatan',
            'nama_kecamatan' => 'Nama Kecamatan',
            'id_kabupaten' => 'Id Kabupaten',
            'status'=>'Status'
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDesas()
    {
        return $this->hasMany(Desa::className(), ['id_kecamatan' => 'id_kecamatan']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKabupaten()
    {
        return $this->hasOne(Kabupaten::className(), ['id_kabupaten' => 'id_kabupaten']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKelurahans()
    {
        return $this->hasMany(Kelurahan::className(), ['id_kecamatan' => 'id_kecamatan']);
    }

    public static function getKecamatanAsMap(){
        $kecamatan = Kecamatan::find()->where(['status'=>'AKTIF'])->all();
        $kecamatanMap  = ArrayHelper::map($kecamatan,'id_kecamatan','nama_kecamatan');
        return $kecamatanMap;
    }
}
