<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "penilaian_desa_b4".
 *
 * @property int $id
 * @property int $id_penilaian_pemerintahan_desa
 * @property int $_1
 * @property int $_2
 * @property int $_3
 * @property int $_4
 * @property int $_5
 * @property int $_6
 * @property int $_7
 * @property int $_8
 * @property int $_9
 * @property int $_10
 * @property int $_11
 * @property int $_12
 * @property int $_13
 * @property int $_14
 * @property int $sub_total_desa_b4
 *
 * @property PenilaianPemerintahanDesa $penilaianPemerintahanDesa
 */
class PenilaianDesaB4 extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'penilaian_desa_b4';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_penilaian_pemerintahan_desa', '_1', '_2', '_3', '_4', '_5', '_6', '_7', '_8', '_9', '_10', '_11', '_12', '_13', '_14', 'sub_total_desa_b4'], 'integer'],
            [['_1', '_2', '_3', '_4', '_5', '_6', '_7', '_8', '_9', '_10', '_11', '_12', '_13', '_14'], 'required'],
            [['id_penilaian_pemerintahan_desa'], 'exist', 'skipOnError' => true, 'targetClass' => PenilaianPemerintahanDesa::className(), 'targetAttribute' => ['id_penilaian_pemerintahan_desa' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_penilaian_pemerintahan_desa' => 'Id Penilaian Pemerintahan Desa',
            '_1' => '1',
            '_2' => '2',
            '_3' => '3',
            '_4' => '4',
            '_5' => '5',
            '_6' => '6',
            '_7' => '7',
            '_8' => '8',
            '_9' => '9',
            '_10' => '10',
            '_11' => '11',
            '_12' => '12',
            '_13' => '13',
            '_14' => '14',
            'sub_total_desa_b4' => 'Sub Total Desa B4',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianPemerintahanDesa()
    {
        return $this->hasOne(PenilaianPemerintahanDesa::className(), ['id' => 'id_penilaian_pemerintahan_desa']);
    }
}
