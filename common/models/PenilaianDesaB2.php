<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "penilaian_desa_b2".
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
 * @property int $sub_total_desa_b2
 *
 * @property PenilaianPemerintahanDesa $penilaianPemerintahanDesa
 */
class PenilaianDesaB2 extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'penilaian_desa_b2';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_penilaian_pemerintahan_desa', '_1', '_2', '_3', '_4', '_5', '_6', '_7', '_8', '_9', 'sub_total_desa_b2'], 'integer'],
            [['_1', '_2', '_3', '_4', '_5', '_6', '_7', '_8', '_9'], 'required'],
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
            '_6' => '6',
            '_7' => '7',
            '_8' => '8',
            '_9' => '9',
            'sub_total_desa_b2' => 'Sub Total Desa B2',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianPemerintahanDesa()
    {
        return $this->hasOne(PenilaianPemerintahanDesa::className(), ['id' => 'id_penilaian_pemerintahan_desa']);
    }

    public function sumB2(){
        $sumB2 = $this->_1
            +$this->_2
            +$this->_3
            +$this->_4
            +$this->_5
            +$this->_6
            +$this->_7
            +$this->_8
            +$this->_9;
        $this->sub_total_desa_b2 = $sumB2;
        return $sumB2;
    }
}
