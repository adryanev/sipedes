<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "penilaian_desa_c5".
 *
 * @property int $id
 * @property int $id_penilaian_kemasyarakatan_desa
 * @property int $_1
 * @property int $_2
 * @property int $_3
 * @property int $_4
 * @property int $_5
 * @property int $_6
 * @property int $_7
 * @property int $sub_total_desa_c5
 *
 * @property PenilaianMasyarakatDesa $penilaianKemasyarakatanDesa
 */
class PenilaianDesaC5 extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'penilaian_desa_c5';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_penilaian_kemasyarakatan_desa', '_1', '_2', '_3', '_4', '_5', '_6', '_7', 'sub_total_desa_c5'], 'integer'],
            [['_1', '_2', '_3', '_4', '_5', '_6', '_7'], 'required'],
            [['id_penilaian_kemasyarakatan_desa'],'safe'],
            [['id_penilaian_kemasyarakatan_desa'], 'exist', 'skipOnError' => true, 'targetClass' => PenilaianMasyarakatDesa::className(), 'targetAttribute' => ['id_penilaian_kemasyarakatan_desa' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_penilaian_kemasyarakatan_desa' => 'Id Penilaian Kemasyarakatan Desa',
            '_1' => '1',
            '_2' => '2',
            '_3' => '3',
            '_4' => '4',
            '_5' => '5',
            '_6' => '6',
            '_7' => '7',
            'sub_total_desa_c5' => 'Sub Total Desa C5',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianKemasyarakatanDesa()
    {
        return $this->hasOne(PenilaianMasyarakatDesa::className(), ['id' => 'id_penilaian_kemasyarakatan_desa']);
    }

    public function sumC5(){
        $sumC5 = $this->_1
            +$this->_2
            +$this->_3
            +$this->_4
            +$this->_5
            +$this->_6
            +$this->_7;
        $this->sub_total_desa_c5 = $sumC5;
        return $sumC5;
    }
}
