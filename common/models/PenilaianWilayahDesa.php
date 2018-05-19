<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "penilaian_wilayah_desa".
 *
 * @property int $id
 * @property int $id_penilaian_desa
 * @property int $sub_total_wilayah
 *
 * @property PenilaianDesaA1[] $penilaianDesaA1s
 * @property PenilaianDesaA2[] $penilaianDesaA2s
 * @property PenilaianDesaA3[] $penilaianDesaA3s
 * @property PenilaianDesaA4[] $penilaianDesaA4s
 * @property PenilaianDesaA5[] $penilaianDesaA5s
 * @property PenilaianDesa $penilaianDesa
 */
class PenilaianWilayahDesa extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'penilaian_wilayah_desa';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_penilaian_desa', 'sub_total_wilayah'], 'integer'],
            [['id_penilaian_desa'], 'exist', 'skipOnError' => true, 'targetClass' => PenilaianDesa::className(), 'targetAttribute' => ['id_penilaian_desa' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_penilaian_desa' => 'Id Penilaian Desa',
            'sub_total_wilayah' => 'Sub Total Wilayah',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianDesaA1s()
    {
        return $this->hasMany(PenilaianDesaA1::className(), ['id_penilaian_wilayah_desa' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianDesaA2s()
    {
        return $this->hasMany(PenilaianDesaA2::className(), ['id_penilaian_wilayah_desa' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianDesaA3s()
    {
        return $this->hasMany(PenilaianDesaA3::className(), ['id_penilaian_wilayah_desa' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianDesaA4s()
    {
        return $this->hasMany(PenilaianDesaA4::className(), ['id_penilaian_wilayah_desa' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianDesaA5s()
    {
        return $this->hasMany(PenilaianDesaA5::className(), ['id_penilaian_wilayah_desa' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianDesa()
    {
        return $this->hasOne(PenilaianDesa::className(), ['id' => 'id_penilaian_desa']);
    }
}
