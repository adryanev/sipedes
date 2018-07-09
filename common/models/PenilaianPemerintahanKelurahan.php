<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "penilaian_pemerintahan_kelurahan".
 *
 * @property int $id
 * @property int $id_penilaian_kelurahan
 * @property int $sub_total_pemerintahan
 *
 * @property PenilaianKelurahanB1[] $penilaianKelurahanB1s
 * @property PenilaianKelurahanB2[] $penilaianKelurahanB2s
 * @property PenilaianKelurahanB3[] $penilaianKelurahanB3s
 * @property PenilaianKelurahanB4[] $penilaianKelurahanB4s
 * @property PenilaianKelurahanB5[] $penilaianKelurahanB5s
 * @property PenilaianKelurahan $penilaianKelurahan
 */
class PenilaianPemerintahanKelurahan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'penilaian_pemerintahan_kelurahan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_penilaian_kelurahan', 'sub_total_pemerintahan'], 'integer'],
            [['id_penilaian_kelurahan'], 'exist', 'skipOnError' => true, 'targetClass' => PenilaianKelurahan::className(), 'targetAttribute' => ['id_penilaian_kelurahan' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_penilaian_kelurahan' => 'Id Penilaian Kelurahan',
            'sub_total_pemerintahan' => 'Sub Total Pemerintahan',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianKelurahanB1s()
    {
        return $this->hasMany(PenilaianKelurahanB1::className(), ['id_penilaian_pemerintahan_kelurahan' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianKelurahanB2s()
    {
        return $this->hasMany(PenilaianKelurahanB2::className(), ['id_penilaian_pemerintahan_kelurahan' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianKelurahanB3s()
    {
        return $this->hasMany(PenilaianKelurahanB3::className(), ['id_penilaian_pemerintahan_kelurahan' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianKelurahanB4s()
    {
        return $this->hasMany(PenilaianKelurahanB4::className(), ['id_penilaian_pemerintahan_kelurahan' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianKelurahanB5s()
    {
        return $this->hasMany(PenilaianKelurahanB5::className(), ['id_penilaian_pemerintahan_kelurahan' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianKelurahan()
    {
        return $this->hasOne(PenilaianKelurahan::className(), ['id' => 'id_penilaian_kelurahan']);
    }

    public function subTotalPemerintahanKeluarahan(){
        $this->sub_total_pemerintahan =
            $this->getPenilaianKelurahanB1s()->one()['sub_total_kelurahan_b1']
            +$this->getPenilaianKelurahanB2s()->one()['sub_total_kelurahan_b2']
            +$this->getPenilaianKelurahanB3s()->one()['sub_total_kelurahan_b3']
            +$this->getPenilaianKelurahanB4s()->one()['sub_total_kelurahan_b4']
            +$this->getPenilaianKelurahanB5s()->one()['sub_total_kelurahan_b5'];
        return $this->sub_total_pemerintahan;
    }

}
