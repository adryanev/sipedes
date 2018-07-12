<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "penilaian_wilayah_kelurahan".
 *
 * @property int $id
 * @property int $id_penilaian_kelurahan
 * @property int $sub_total_wilayah
 *
 * @property PenilaianKelurahanA1[] $penilaianKelurahanA1s
 * @property PenilaianKelurahanA2[] $penilaianKelurahanA2s
 * @property PenilaianKelurahanA3[] $penilaianKelurahanA3s
 * @property PenilaianKelurahanA4[] $penilaianKelurahanA4s
 * @property PenilaianKelurahanA5[] $penilaianKelurahanA5s
 * @property PenilaianKelurahan $penilaianKelurahan
 */
class PenilaianWilayahKelurahan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'penilaian_wilayah_kelurahan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_penilaian_kelurahan', 'sub_total_wilayah'], 'integer'],
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
            'sub_total_wilayah' => 'Sub Total Wilayah',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianKelurahanA1s()
    {
        return $this->hasMany(PenilaianKelurahanA1::className(), ['id_penilaian_wilayah_kelurahan' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianKelurahanA2s()
    {
        return $this->hasMany(PenilaianKelurahanA2::className(), ['id_penilaian_wilayah_kelurahan' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianKelurahanA3s()
    {
        return $this->hasMany(PenilaianKelurahanA3::className(), ['id_penilaian_wilayah_kelurahan' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianKelurahanA4s()
    {
        return $this->hasMany(PenilaianKelurahanA4::className(), ['id_penilaian_wilayah_kelurahan' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianKelurahanA5s()
    {
        return $this->hasMany(PenilaianKelurahanA5::className(), ['id_penilaian_wilayah_kelurahan' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianKelurahan()
    {
        return $this->hasOne(PenilaianKelurahan::className(), ['id' => 'id_penilaian_kelurahan']);
    }

    public function subTotalWilayah(){
        $this->sub_total_wilayah =
            $this->getPenilaianKelurahanA3s()->one()['sub_total_kelurahan_a3']
            +$this->getPenilaianKelurahanA4s()->one()['sub_total_kelurahan_a4']
            +$this->getPenilaianKelurahanA5s()->one()['sub_total_kelurahan_a5'];

        return $this->sub_total_wilayah;
    }
}
