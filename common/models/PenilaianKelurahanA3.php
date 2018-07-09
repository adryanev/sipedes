<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "penilaian_kelurahan_a3".
 *
 * @property int $id
 * @property int $id_penilaian_wilayah_kelurahan
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
 * @property int $_15
 * @property int $_16
 * @property int $_17
 * @property int $_18
 * @property int $_19
 * @property int $_20
 * @property int $_21
 * @property int $_22
 * @property int $_23
 * @property int $_24
 * @property int $_25
 * @property int $_26
 * @property int $_27
 * @property int $_28
 * @property int $_29
 * @property int $_30
 * @property int $sub_total_kelurahan_a3
 *
 * @property PenilaianWilayahKelurahan $penilaianWilayahKelurahan
 */
class PenilaianKelurahanA3 extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'penilaian_kelurahan_a3';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_penilaian_wilayah_kelurahan', '_1', '_2', '_3', '_4', '_5', '_6', '_7', '_8', '_9', '_10', '_11', '_12', '_13', '_14', '_15', '_16', '_17', '_18', '_19', '_20', '_21', '_22', '_23', '_24', '_25', '_26', '_27', '_28', '_29', '_30', 'sub_total_kelurahan_a3'], 'integer'],
            [['_1', '_2', '_3', '_4', '_5', '_6', '_7', '_8', '_9', '_10', '_11', '_12', '_13', '_14', '_15', '_16', '_17', '_18', '_19', '_20', '_21', '_22', '_23', '_24', '_25', '_26', '_27', '_28', '_29', '_30'], 'required'],
            [['id_penilaian_wilayah_kelurahan'], 'exist', 'skipOnError' => true, 'targetClass' => PenilaianWilayahKelurahan::className(), 'targetAttribute' => ['id_penilaian_wilayah_kelurahan' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_penilaian_wilayah_kelurahan' => 'Id Penilaian Wilayah Kelurahan',
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
            '_15' => '15',
            '_16' => '16',
            '_17' => '17',
            '_18' => '18',
            '_19' => '19',
            '_20' => '20',
            '_21' => '21',
            '_22' => '22',
            '_23' => '23',
            '_24' => '24',
            '_25' => '25',
            '_26' => '26',
            '_27' => '27',
            '_28' => '28',
            '_29' => '29',
            '_30' => '30',
            'sub_total_kelurahan_a3' => 'Sub Total Kelurahan A3',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianWilayahKelurahan()
    {
        return $this->hasOne(PenilaianWilayahKelurahan::className(), ['id' => 'id_penilaian_wilayah_kelurahan']);
    }
}
