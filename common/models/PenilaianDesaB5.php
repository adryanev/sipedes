<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "penilaian_desa_b5".
 *
 * @property int $id
 * @property int $id_penilaian_pemerintahan_desa
 * @property int $_1
 * @property int $_2
 * @property int $_3
 * @property int $_4
 * @property int $_5
 * @property int $sub_total_desa_b5
 *
 * @property PenilaianPemerintahanDesa $penilaianPemerintahanDesa
 */
class PenilaianDesaB5 extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'penilaian_desa_b5';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_penilaian_pemerintahan_desa', '_1', '_2', '_3', '_4', '_5', 'sub_total_desa_b5'], 'integer'],
            [['_1', '_2', '_3', '_4', '_5'], 'required'],
            [['id_penilaian_pemerintahan_desa'],'safe'],
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
            'sub_total_desa_b5' => 'Sub Total Desa B5',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianPemerintahanDesa()
    {
        return $this->hasOne(PenilaianPemerintahanDesa::className(), ['id' => 'id_penilaian_pemerintahan_desa']);
    }

    public function sumB5(){
        $sumB5 = $this->_1
            +$this->_2
            +$this->_3
            +$this->_4
            +$this->_5;
        $this->sub_total_desa_b5 = $sumB5;
        return $sumB5;
    }
}
