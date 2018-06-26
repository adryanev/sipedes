<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "penilaian_desa_a4".
 *
 * @property int $id
 * @property int $id_penilaian_wilayah_desa
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
 * @property int $sub_total_desa_a4
 *
 * @property PenilaianWilayahDesa $penilaianWilayahDesa
 */
class PenilaianDesaA4 extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'penilaian_desa_a4';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_penilaian_wilayah_desa', '_1', '_2', '_3', '_4', '_5', '_6', '_7', '_8', '_9', '_10', '_11', 'sub_total_desa_a4'], 'integer'],
            [['_1', '_2', '_3', '_4', '_5', '_6', '_7', '_8', '_9', '_10', '_11'], 'required'],
            [['id_penilaian_wilayah_desa'],'safe'],
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
            '_6' => '6',
            '_7' => '7',
            '_8' => '8',
            '_9' => '9',
            '_10' => '10',
            '_11' => '11',
            'sub_total_desa_a4' => 'Sub Total Desa A4',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianWilayahDesa()
    {
        return $this->hasOne(PenilaianWilayahDesa::className(), ['id' => 'id_penilaian_wilayah_desa']);
    }
    public function sumA4(){
        $sumA4 = $this->_1
            +$this->_2
            +$this->_3
            +$this->_4
            +$this->_5
            +$this->_6
            +$this->_7
            +$this->_8
            +$this->_9
            +$this->_10
            +$this->_11;
        $this->sub_total_desa_a4 = $sumA4;
        return $sumA4;
    }
}
