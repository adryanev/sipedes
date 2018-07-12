<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "penilaian_desa_a2".
 *
 * @property int $id
 * @property int $id_penilaian_wilayah_desa
 * @property string $batas
 * @property string $penetapan_batas
 * @property int $umur_kurang_15
 * @property int $umur_lebih_15_kurang_56
 * @property int $umur_lebih_56
 * @property int $jumlah_penduduk_total
 * @property int $jumlah_penduduk_laki
 * @property int $jumlah_penduduk_pr
 * @property int $jumlah_kk
 *
 * @property PenilaianWilayahDesa $penilaianWilayahDesa
 */
class PenilaianDesaA2 extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'penilaian_desa_a2';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_penilaian_wilayah_desa', 'umur_kurang_15', 'umur_lebih_15_kurang_56', 'umur_lebih_56', 'jumlah_penduduk_total', 'jumlah_penduduk_laki', 'jumlah_penduduk_pr', 'jumlah_kk'], 'integer'],
            [['batas', 'penetapan_batas', 'umur_kurang_15', 'umur_lebih_15_kurang_56', 'umur_lebih_56', 'jumlah_penduduk_total', 'jumlah_penduduk_laki', 'jumlah_penduduk_pr', 'jumlah_kk'], 'required'],
            [['id_penilaian_wilayah_desa'],'safe'],
            [['batas', 'penetapan_batas'], 'string', 'max' => 255],
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
            'batas' => 'Batas',
            'penetapan_batas' => 'Penetapan Batas',
            'umur_kurang_15' => 'Umur Kurang 15',
            'umur_lebih_15_kurang_56' => 'Umur Lebih 15 Kurang 56',
            'umur_lebih_56' => 'Umur Lebih 56',
            'jumlah_penduduk_total' => 'Jumlah Penduduk Total',
            'jumlah_penduduk_laki' => 'Jumlah Penduduk Laki',
            'jumlah_penduduk_pr' => 'Jumlah Penduduk Pr',
            'jumlah_kk' => 'Jumlah Kk',
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
