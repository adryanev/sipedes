<?php

namespace common\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "kabupaten".
 *
 * @property string $id_kabupaten
 * @property string $nama_kabupaten
 * @property string $id_provinsi
 * @property string $status
 *
 * @property Provinsi $provinsi
 * @property Kecamatan[] $kecamatans
 */
class Kabupaten extends \yii\db\ActiveRecord
{
    const STATUS_ACTIVE = 'AKTIF';
    const STATUS_DELETED = 'TIDAK AKTIF';
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'kabupaten';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_kabupaten'], 'required'],
            [['id_kabupaten', 'id_provinsi'], 'string', 'max' => 15],
            [['nama_kabupaten'], 'string', 'max' => 255],
            [['id_kabupaten'], 'unique'],
            [['status'], 'safe'],
            ['status', 'default', 'value' => self::STATUS_ACTIVE],
            ['status', 'in', 'range' => [self::STATUS_ACTIVE, self::STATUS_DELETED]],
            [['id_provinsi'], 'exist', 'skipOnError' => true, 'targetClass' => Provinsi::className(), 'targetAttribute' => ['id_provinsi' => 'id_provinsi']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_kabupaten' => 'Id Kabupaten',
            'nama_kabupaten' => 'Nama Kabupaten',
            'id_provinsi' => 'Id Provinsi',
            'status'=>'Status'
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProvinsi()
    {
        return $this->hasOne(Provinsi::className(), ['id_provinsi' => 'id_provinsi']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKecamatans()
    {
        return $this->hasMany(Kecamatan::className(), ['id_kabupaten' => 'id_kabupaten']);
    }

    public static function getKabupatenAsMap(){

        $kabupaten = Kabupaten::find()->where(['status'=>'AKTIF'])->all();
        $kabupatenMap = ArrayHelper::map($kabupaten,'id_kabupaten','nama_kabupaten');

        return $kabupatenMap;
    }
}
