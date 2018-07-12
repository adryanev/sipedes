<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "penilaian_desa_a1".
 *
 * @property int $id
 * @property int $id_penilaian_wilayah_desa
 * @property string $nama
 * @property string $kode
 * @property string $topologi
 * @property string $orbitasi
 * @property string $kondisi_1
 * @property string $kondisi_2
 *
 * @property PenilaianWilayahDesa $penilaianWilayahDesa
 */
class PenilaianDesaA1 extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'penilaian_desa_a1';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_penilaian_wilayah_desa'], 'integer'],
            [['id_penilaian_wilayah_desa'],'safe'],
            [['nama', 'kode', 'topologi', 'orbitasi', 'kondisi_1', 'kondisi_2'], 'required'],
            [['nama', 'kode', 'topologi', 'orbitasi', 'kondisi_1', 'kondisi_2'], 'string', 'max' => 255],
            [['id_penilaian_wilayah_desa'], 'exist', 'skipOnError' => true, 'targetClass' => PenilaianWilayahDesa::className(), 'targetAttribute' => ['id_penilaian_wilayah_desa' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_penilaian_wilayah_desa' => 'Id Penilaian Wilayah Desa',
            'id_desa' => 'Id Desa',
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
    public function getPenilaianWilayahDesa()
    {
        return $this->hasOne(PenilaianWilayahDesa::className(), ['id' => 'id_penilaian_wilayah_desa']);
    }
}
