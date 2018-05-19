<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "penilaian_desa_a5".
 *
 * @property int $id
 * @property int $id_penilaian_wilayah_desa
 * @property int $_1
 * @property int $_2
 * @property int $_3
 * @property int $_4
 * @property int $_5
 * @property int $sub_total_desa_a5
 *
 * @property PenilaianWilayahDesa $penilaianWilayahDesa
 */
class PenilaianDesaA5 extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'penilaian_desa_a5';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_penilaian_wilayah_desa', '_1', '_2', '_3', '_4', '_5', 'sub_total_desa_a5'], 'integer'],
            [['_1', '_2', '_3', '_4', '_5'], 'required'],
            [['id_penilaian_wilayah_desa'], 'exist', 'skipOnError' => true, 'targetClass' => PenilaianWilayahDesa::className(), 'targetAttribute' => ['id_penilaian_wilayah_desa' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_penilaian_wilayah_desa' => 'Id Penilaian Wilayah Desa',
            '_1' => '1',
            '_2' => '2',
            '_3' => '3',
            '_4' => '4',
            '_5' => '5',
            'sub_total_desa_a5' => 'Sub Total Desa A5',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianWilayahDesa()
    {
        return $this->hasOne(PenilaianWilayahDesa::className(), ['id' => 'id_penilaian_wilayah_desa']);
    }
}
