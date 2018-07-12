<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "penilaian_kelurahan_a1".
 *
 * @property int $id
 * @property int $id_penilaian_wilayah_kelurahan
 * @property string $nama
 * @property string $kode
 * @property string $topologi
 * @property string $orbitasi
 * @property string $kondisi_1
 * @property string $kondisi_2
 *
 * @property PenilaianWilayahKelurahan $penilaianWilayahKelurahan
 */
class PenilaianKelurahanA1 extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'penilaian_kelurahan_a1';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_penilaian_wilayah_kelurahan'], 'integer'],
            [['nama', 'kode', 'topologi', 'orbitasi', 'kondisi_1', 'kondisi_2'], 'required'],
            [['nama', 'kode', 'topologi', 'orbitasi', 'kondisi_1', 'kondisi_2'], 'string', 'max' => 255],
            [['id_penilaian_wilayah_kelurahan'], 'exist', 'skipOnError' => true, 'targetClass' => PenilaianWilayahKelurahan::className(), 'targetAttribute' => ['id_penilaian_wilayah_kelurahan' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_penilaian_wilayah_kelurahan' => 'Id Penilaian Wilayah Kelurahan',
            'nama' => 'Nama',
            'kode' => 'Kode',
            'topologi' => 'Topologi',
            'orbitasi' => 'Orbitasi',
            'kondisi_1' => 'Kondisi 1',
            'kondisi_2' => 'Kondisi 2',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianWilayahKelurahan()
    {
        return $this->hasOne(PenilaianWilayahKelurahan::className(), ['id' => 'id_penilaian_wilayah_kelurahan']);
    }
}
