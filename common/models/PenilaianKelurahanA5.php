<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "penilaian_kelurahan_a5".
 *
 * @property int $id
 * @property int $id_penilaian_wilayah_kelurahan
 * @property int $_1
 * @property int $_2
 * @property int $_3
 * @property int $_4
 * @property int $sub_total_kelurahan_a5
 *
 * @property PenilaianWilayahKelurahan $penilaianWilayahKelurahan
 */
class PenilaianKelurahanA5 extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'penilaian_kelurahan_a5';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_penilaian_wilayah_kelurahan', '_1', '_2', '_3', '_4', 'sub_total_kelurahan_a5'], 'integer'],
            [['_1', '_2', '_3', '_4'], 'required'],
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
            '_1' => '1',
            '_2' => '2',
            '_3' => '3',
            '_4' => '4',
            'sub_total_kelurahan_a5' => 'Sub Total Kelurahan A5',
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
