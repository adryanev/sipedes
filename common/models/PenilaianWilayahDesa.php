<?php

namespace common\models;

use Yii;
use yii\helpers\VarDumper;

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
        return $this->hasOne(PenilaianDesaA1::className(), ['id_penilaian_wilayah_desa' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianDesaA2s()
    {
        return $this->hasOne(PenilaianDesaA2::className(), ['id_penilaian_wilayah_desa' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianDesaA3s()
    {
        return $this->hasOne(PenilaianDesaA3::className(), ['id_penilaian_wilayah_desa' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianDesaA4s()
    {
        return $this->hasOne(PenilaianDesaA4::className(), ['id_penilaian_wilayah_desa' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianDesaA5s()
    {
        return $this->hasOne(PenilaianDesaA5::className(), ['id_penilaian_wilayah_desa' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianDesa()
    {
        return $this->hasOne(PenilaianDesa::className(), ['id' => 'id_penilaian_desa']);
    }

    public function subTotalWilayah(){
      $this->sub_total_wilayah =   $this->getPenilaianDesaA3s()->one()['sub_total_desa_a3'] + $this->getPenilaianDesaA4s()->one()['sub_total_desa_a4']
          +$this->getPenilaianDesaA5s()->one()['sub_total_desa_a5'] ;
      return $this->sub_total_wilayah;
    }
}
