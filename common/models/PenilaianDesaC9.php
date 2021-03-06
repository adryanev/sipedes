<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "penilaian_desa_c9".
 *
 * @property int $id
 * @property int $id_penilaian_kemasyarakatan_desa
 * @property int $_1
 * @property int $_2
 * @property int $_3
 * @property int $sub_total_desa_c9
 *
 * @property PenilaianMasyarakatDesa $penilaianKemasyarakatanDesa
 */
class PenilaianDesaC9 extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'penilaian_desa_c9';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_penilaian_kemasyarakatan_desa', '_1', '_2', '_3', 'sub_total_desa_c9'], 'integer'],
            [['_1', '_2', '_3'], 'required'],
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
            'sub_total_desa_c9' => 'Sub Total Desa C9',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianKemasyarakatanDesa()
    {
        return $this->hasOne(PenilaianMasyarakatDesa::className(), ['id' => 'id_penilaian_kemasyarakatan_desa']);
    }

    public function sumC9(){
        $sumC9 = $this->_1 + $this->_2 + $this->_3;
        $this->sub_total_desa_c9 = $sumC9;
        return $sumC9;
    }
}
