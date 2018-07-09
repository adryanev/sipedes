<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "penilaian_kelurahan_c7".
 *
 * @property int $id
 * @property int $id_penilaian_kemasyarakatan_kelurahan
 * @property int $_1
 * @property string $_2
 * @property int $_3
 * @property int $_4
 * @property int $_5
 * @property int $sub_total_kelurahan_c7
 *
 * @property PenilaianMasyarakatKelurahan $penilaianKemasyarakatanKelurahan
 */
class PenilaianKelurahanC7 extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'penilaian_kelurahan_c7';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_penilaian_kemasyarakatan_kelurahan', '_1', '_3', '_4', '_5', 'sub_total_kelurahan_c7'], 'integer'],
            [['_1', '_2', '_3', '_4', '_5'], 'required'],
            [['_2'], 'string', 'max' => 10],
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
            'sub_total_kelurahan_c7' => 'Sub Total Kelurahan C7',
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
