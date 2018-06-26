<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "penilaian_pemerintahan_desa".
 *
 * @property int $id
 * @property int $id_penilaian_desa
 * @property int $sub_total_pemerintahan
 *
 * @property PenilaianDesaB1[] $penilaianDesaB1s
 * @property PenilaianDesaB2[] $penilaianDesaB2s
 * @property PenilaianDesaB3[] $penilaianDesaB3s
 * @property PenilaianDesaB4[] $penilaianDesaB4s
 * @property PenilaianDesaB5[] $penilaianDesaB5s
 * @property PenilaianDesa $penilaianDesa
 */
class PenilaianPemerintahanDesa extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'penilaian_pemerintahan_desa';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_penilaian_desa', 'sub_total_pemerintahan'], 'integer'],
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
            'sub_total_pemerintahan' => 'Sub Total Pemerintahan',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianDesaB1s()
    {
        return $this->hasOne(PenilaianDesaB1::className(), ['id_penilaian_pemerintahan_desa' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianDesaB2s()
    {
        return $this->hasOne(PenilaianDesaB2::className(), ['id_penilaian_pemerintahan_desa' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianDesaB3s()
    {
        return $this->hasOne(PenilaianDesaB3::className(), ['id_penilaian_pemerintahan_desa' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianDesaB4s()
    {
        return $this->hasOne(PenilaianDesaB4::className(), ['id_penilaian_pemerintahan_desa' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianDesaB5s()
    {
        return $this->hasOne(PenilaianDesaB5::className(), ['id_penilaian_pemerintahan_desa' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianDesa()
    {
        return $this->hasOne(PenilaianDesa::className(), ['id' => 'id_penilaian_desa']);
    }

    public function subTotalPemerintahanDesa(){
        $this->sub_total_pemerintahan = $this->getPenilaianDesaB1s()->one()['sub_total_desa_b1'] + $this->getPenilaianDesaB2s()->one()['sub_total_desa_b2']
            + $this->getPenilaianDesaB3s()->one()['sub_total_desa_b3'] + $this->getPenilaianDesaB4s()->one()['sub_total_desa_b4']+ $this->getPenilaianDesaB5s()->one()['sub_total_desa_b5'];
        return $this->sub_total_pemerintahan;
    }
}
