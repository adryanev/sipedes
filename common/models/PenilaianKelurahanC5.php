<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "penilaian_kelurahan_c5".
 *
 * @property int $id
 * @property int $id_penilaian_kemasyarakatan_kelurahan
 * @property int $_1
 * @property int $_2
 * @property int $_3
 * @property int $_4
 * @property int $_5
 * @property int $_6
 * @property int $_7
 * @property int $sub_total_kelurahan_c5
 *
 * @property PenilaianMasyarakatKelurahan $penilaianKemasyarakatanKelurahan
 */
class PenilaianKelurahanC5 extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'penilaian_kelurahan_c5';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_penilaian_kemasyarakatan_kelurahan', '_1', '_2', '_3', '_4', '_5', '_6', '_7', 'sub_total_kelurahan_c5'], 'integer'],
            [['_1', '_2', '_3', '_4', '_5', '_6', '_7'], 'required'],
            [['id_penilaian_kemasyarakatan_kelurahan'], 'exist', 'skipOnError' => true, 'targetClass' => PenilaianMasyarakatKelurahan::className(), 'targetAttribute' => ['id_penilaian_kemasyarakatan_kelurahan' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_penilaian_kemasyarakatan_kelurahan' => 'Id Penilaian Kemasyarakatan Kelurahan',
            '_1' => '1',
            '_2' => '2',
            '_3' => '3',
            '_4' => '4',
            '_5' => '5',
            '_6' => '6',
            '_7' => '7',
            'sub_total_kelurahan_c5' => 'Sub Total Kelurahan C5',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianKemasyarakatanKelurahan()
    {
        return $this->hasOne(PenilaianMasyarakatKelurahan::className(), ['id' => 'id_penilaian_kemasyarakatan_kelurahan']);
    }
}
