<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "penilaian_masyarakat_kelurahan".
 *
 * @property int $id
 * @property int $id_penilaian_kelurahan
 * @property int $sub_total_masyarakat
 *
 * @property PenilaianKelurahanC1[] $penilaianKelurahanC1s
 * @property PenilaianKelurahanC2[] $penilaianKelurahanC2s
 * @property PenilaianKelurahanC3[] $penilaianKelurahanC3s
 * @property PenilaianKelurahanC4[] $penilaianKelurahanC4s
 * @property PenilaianKelurahanC5[] $penilaianKelurahanC5s
 * @property PenilaianKelurahanC6[] $penilaianKelurahanC6s
 * @property PenilaianKelurahanC7[] $penilaianKelurahanC7s
 * @property PenilaianKelurahanC8[] $penilaianKelurahanC8s
 * @property PenilaianKelurahanC9[] $penilaianKelurahanC9s
 * @property PenilaianKelurahan $penilaianKelurahan
 */
class PenilaianMasyarakatKelurahan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'penilaian_masyarakat_kelurahan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_penilaian_kelurahan', 'sub_total_masyarakat'], 'integer'],
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
            'sub_total_masyarakat' => 'Sub Total Masyarakat',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianKelurahanC1s()
    {
        return $this->hasMany(PenilaianKelurahanC1::className(), ['id_penilaian_kemasyarakatan_kelurahan' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianKelurahanC2s()
    {
        return $this->hasMany(PenilaianKelurahanC2::className(), ['id_penilaian_kemasyarakatan_kelurahan' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianKelurahanC3s()
    {
        return $this->hasMany(PenilaianKelurahanC3::className(), ['id_penilaian_kemasyarakatan_kelurahan' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianKelurahanC4s()
    {
        return $this->hasMany(PenilaianKelurahanC4::className(), ['id_penilaian_kemasyarakatan_kelurahan' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianKelurahanC5s()
    {
        return $this->hasMany(PenilaianKelurahanC5::className(), ['id_penilaian_kemasyarakatan_kelurahan' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianKelurahanC6s()
    {
        return $this->hasMany(PenilaianKelurahanC6::className(), ['id_penilaian_kemasyarakatan_kelurahan' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianKelurahanC7s()
    {
        return $this->hasMany(PenilaianKelurahanC7::className(), ['id_penilaian_kemasyarakatan_kelurahan' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianKelurahanC8s()
    {
        return $this->hasMany(PenilaianKelurahanC8::className(), ['id_penilaian_kemasyarakatan_kelurahan' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianKelurahanC9s()
    {
        return $this->hasMany(PenilaianKelurahanC9::className(), ['id_penilaian_kemasyarakatan_kelurahan' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianKelurahan()
    {
        return $this->hasOne(PenilaianKelurahan::className(), ['id' => 'id_penilaian_kelurahan']);
    }

    public function subTotalMasyarakatKelurahan(){
        $this->sub_total_masyarakat =
            $this->getPenilaianKelurahanC1s()->one()['sub_total_kelurahan_c1']
            +$this->getPenilaianKelurahanC2s()->one()['sub_total_kelurahan_c2']
            +$this->getPenilaianKelurahanC3s()->one()['sub_total_kelurahan_c3']
            +$this->getPenilaianKelurahanC4s()->one()['sub_total_kelurahan_c4']
            +$this->getPenilaianKelurahanC5s()->one()['sub_total_kelurahan_c5']
            +$this->getPenilaianKelurahanC6s()->one()['sub_total_kelurahan_c6']
            +$this->getPenilaianKelurahanC7s()->one()['sub_total_kelurahan_c7']
            +$this->getPenilaianKelurahanC8s()->one()['sub_total_kelurahan_c8']
            +$this->getPenilaianKelurahanC9s()->one()['sub_total_kelurahan_c9'];

        return $this->sub_total_masyarakat;
    }
}
