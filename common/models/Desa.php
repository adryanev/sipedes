<?php

namespace common\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "desa".
 *
 * @property string $id_desa
 * @property string $nama_desa
 * @property string $id_kecamatan
 * @property string $status
 *
 * @property Kecamatan $kecamatan
 * @property PenilaianDesa[] $penilaianDesas
 */
class Desa extends \yii\db\ActiveRecord
{
    const STATUS_ACTIVE = 'AKTIF';
    const STATUS_DELETED = 'TIDAK AKTIF';

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'desa';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_desa'], 'required'],
            [['id_desa', 'id_kecamatan'], 'string', 'max' => 15],
            [['nama_desa'], 'string', 'max' => 255],
            [['id_desa'], 'unique'],
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
            'id_desa' => 'Id Desa',
            'nama_desa' => 'Nama Desa',
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
    public function getPenilaianDesas()
    {
        return $this->hasMany(PenilaianDesa::className(), ['id_desa' => 'id_desa']);
    }

    public static function getDesaAsMap(){
        $desa = Desa::find()->where(['status'=>'AKTIF'])->all();
        $desaMap = ArrayHelper::map($desa,'id_desa','nama_desa');
        return $desaMap;
    }
}
