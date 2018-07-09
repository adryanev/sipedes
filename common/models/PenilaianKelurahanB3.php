<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "penilaian_kelurahan_b3".
 *
 * @property int $id
 * @property int $id_penilaian_pemerintahan_kelurahan
 * @property int $_1
 * @property int $_2
 * @property int $_3
 * @property int $_4
 * @property int $_5
 * @property int $_6
 * @property int $sub_total_kelurahan_b3
 *
 * @property PenilaianPemerintahanKelurahan $penilaianPemerintahanKelurahan
 */
class PenilaianKelurahanB3 extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'penilaian_kelurahan_b3';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_penilaian_pemerintahan_kelurahan', '_1', '_2', '_3', '_4', '_5', '_6', 'sub_total_kelurahan_b3'], 'integer'],
            [['_1', '_2', '_3', '_4', '_5', '_6'], 'required'],
            [['id_penilaian_pemerintahan_kelurahan'], 'exist', 'skipOnError' => true, 'targetClass' => PenilaianPemerintahanKelurahan::className(), 'targetAttribute' => ['id_penilaian_pemerintahan_kelurahan' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_penilaian_pemerintahan_kelurahan' => 'Id Penilaian Pemerintahan Kelurahan',
            '_1' => '1',
            '_2' => '2',
            '_3' => '3',
            '_4' => '4',
            '_5' => '5',
            '_6' => '6',
            'sub_total_kelurahan_b3' => 'Sub Total Kelurahan B3',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianPemerintahanKelurahan()
    {
        return $this->hasOne(PenilaianPemerintahanKelurahan::className(), ['id' => 'id_penilaian_pemerintahan_kelurahan']);
    }
}
