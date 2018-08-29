<?php

namespace common\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "kelurahan".
 *
 * @property string $id_kelurahan
 * @property string $nama_kelurahan
 * @property string $id_kecamatan
 * @property string $status
 *
 * @property Kecamatan $kecamatan
 */
class Kelurahan extends \yii\db\ActiveRecord
{
    const STATUS_ACTIVE = 'AKTIF';
    const STATUS_DELETED = 'TIDAK AKTIF';
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
            [['status'], 'safe'],
            ['status', 'default', 'value' => self::STATUS_ACTIVE],
            ['status', 'in', 'range' => [self::STATUS_ACTIVE, self::STATUS_DELETED]],
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
            'status'=>'Status'
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKecamatan()
    {
        return $this->hasOne(Kecamatan::className(), ['id_kecamatan' => 'id_kecamatan']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianKelurahans()
    {
        return $this->hasMany(PenilaianKelurahan::className(), ['id_kelurahan' => 'id_kelurahan']);
    }

    public static function getKelurahanAsMap(){
        $kelurahan = Kelurahan::find()->where(['status'=>'AKTIF'])->all();
        $kelurahanMap = ArrayHelper::map($kelurahan,'id_kelurahan','nama_kelurahan');
        return $kelurahanMap;
    }
}
