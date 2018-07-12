<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "penilaian_desa_c8".
 *
 * @property int $id
 * @property int $id_penilaian_kemasyarakatan_desa
 * @property int $_1
 * @property int $_2
 * @property int $sub_total_desa_c8
 *
 * @property PenilaianMasyarakatDesa $penilaianKemasyarakatanDesa
 */
class PenilaianDesaC8 extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'penilaian_desa_c8';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_penilaian_kemasyarakatan_desa', '_1', '_2', 'sub_total_desa_c8'], 'integer'],
            [['_1', '_2'], 'required'],
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
            'sub_total_desa_c8' => 'Sub Total Desa C8',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianKemasyarakatanDesa()
    {
        return $this->hasOne(PenilaianMasyarakatDesa::className(), ['id' => 'id_penilaian_kemasyarakatan_desa']);
    }

    public function sumC8(){
        $sumC8 = $this->_1+$this->_2;
        $this->sub_total_desa_c8 = $sumC8;
        return $sumC8;

    }
}
