<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "penilaian_masyarakat_desa".
 *
 * @property int $id
 * @property int $id_penilaian_desa
 * @property int $sub_total_masyarakat
 *
 * @property PenilaianDesaC1[] $penilaianDesaC1s
 * @property PenilaianDesaC2[] $penilaianDesaC2s
 * @property PenilaianDesaC3[] $penilaianDesaC3s
 * @property PenilaianDesaC4[] $penilaianDesaC4s
 * @property PenilaianDesaC5[] $penilaianDesaC5s
 * @property PenilaianDesaC6[] $penilaianDesaC6s
 * @property PenilaianDesaC7[] $penilaianDesaC7s
 * @property PenilaianDesaC8[] $penilaianDesaC8s
 * @property PenilaianDesaC9[] $penilaianDesaC9s
 * @property PenilaianDesa $penilaianDesa
 */
class PenilaianMasyarakatDesa extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'penilaian_masyarakat_desa';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_penilaian_desa', 'sub_total_masyarakat'], 'integer'],
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
            'sub_total_masyarakat' => 'Sub Total Masyarakat',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianDesaC1s()
    {
        return $this->hasMany(PenilaianDesaC1::className(), ['id_penilaian_kemasyarakatan_desa' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianDesaC2s()
    {
        return $this->hasMany(PenilaianDesaC2::className(), ['id_penilaian_kemasyarakatan_desa' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianDesaC3s()
    {
        return $this->hasMany(PenilaianDesaC3::className(), ['id_penilaian_kemasyarakatan_desa' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianDesaC4s()
    {
        return $this->hasMany(PenilaianDesaC4::className(), ['id_penilaian_kemasyarakatan_desa' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianDesaC5s()
    {
        return $this->hasMany(PenilaianDesaC5::className(), ['id_penilaian_kemasyarakatan_desa' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianDesaC6s()
    {
        return $this->hasMany(PenilaianDesaC6::className(), ['id_penilaian_kemasyarakatan_desa' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianDesaC7s()
    {
        return $this->hasMany(PenilaianDesaC7::className(), ['id_penilaian_kemasyarakatan_desa' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianDesaC8s()
    {
        return $this->hasMany(PenilaianDesaC8::className(), ['id_penilaian_kemasyarakatan_desa' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianDesaC9s()
    {
        return $this->hasMany(PenilaianDesaC9::className(), ['id_penilaian_kemasyarakatan_desa' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianDesa()
    {
        return $this->hasOne(PenilaianDesa::className(), ['id' => 'id_penilaian_desa']);
    }
}
