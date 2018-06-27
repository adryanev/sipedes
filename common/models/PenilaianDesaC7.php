<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "penilaian_desa_c7".
 *
 * @property int $id
 * @property int $id_penilaian_kemasyarakatan_desa
 * @property int $_1
 * @property string $_2
 * @property int $_3
 * @property int $_4
 * @property int $_5
 * @property int $sub_total_desa_c7
 *
 * @property PenilaianMasyarakatDesa $penilaianKemasyarakatanDesa
 */
class PenilaianDesaC7 extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'penilaian_desa_c7';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_penilaian_kemasyarakatan_desa', '_1', '_3', '_4','_5', 'sub_total_desa_c7'], 'integer'],
            [['_1', '_2', '_3', '_4','_5',], 'required'],
            [['_2'], 'string', 'max' => 20],
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
            'sub_total_desa_c7' => 'Sub Total Desa C7',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianKemasyarakatanDesa()
    {
        return $this->hasOne(PenilaianMasyarakatDesa::className(), ['id' => 'id_penilaian_kemasyarakatan_desa']);
    }

    public function sumC7(){
        $sumC7 = $this->_1
            +$this->_3
            +$this->_4
            +$this->_5;
        $this->sub_total_desa_c7 = $sumC7;
        return $sumC7;
    }

    public function getPekerjaan(){
        return $this->_2;
    }
}
