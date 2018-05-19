<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "penilaian_desa_b1".
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
 * @property int $_31
 * @property int $_32
 * @property int $_33
 * @property int $_34
 * @property int $_35
 * @property int $_36
 * @property int $_37
 * @property int $_38
 * @property int $_39
 * @property int $_40
 * @property int $_41
 * @property int $_42
 * @property int $_43
 * @property int $_44
 * @property int $_45
 * @property int $_46
 * @property int $_47
 * @property int $_48
 * @property int $_49
 * @property int $_50
 * @property int $_51
 * @property int $_52
 * @property int $_53
 * @property int $_54
 * @property int $_55
 * @property int $_56
 * @property int $_57
 * @property int $_58
 * @property int $_59
 * @property int $_60
 * @property int $_61
 * @property int $_62
 * @property int $_63
 * @property int $_64
 * @property int $_65
 * @property int $_66
 * @property int $_67
 * @property int $_68
 * @property int $_69
 * @property int $_70
 * @property int $_71
 * @property int $_72
 * @property int $sub_total_desa_b1
 *
 * @property PenilaianPemerintahanDesa $penilaianPemerintahanDesa
 */
class PenilaianDesaB1 extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'penilaian_desa_b1';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_penilaian_pemerintahan_desa', '_1', '_2', '_3', '_4', '_5', '_6', '_7', '_8', '_9', '_10', '_11', '_12', '_13', '_14', '_15', '_16', '_17', '_18', '_19', '_20', '_21', '_22', '_23', '_24', '_25', '_26', '_27', '_28', '_29', '_30', '_31', '_32', '_33', '_34', '_35', '_36', '_37', '_38', '_39', '_40', '_41', '_42', '_43', '_44', '_45', '_46', '_47', '_48', '_49', '_50', '_51', '_52', '_53', '_54', '_55', '_56', '_57', '_58', '_59', '_60', '_61', '_62', '_63', '_64', '_65', '_66', '_67', '_68', '_69', '_70', '_71', '_72', 'sub_total_desa_b1'], 'integer'],
            [['_1', '_2', '_3', '_4', '_5', '_6', '_7', '_8', '_9', '_10', '_11', '_12', '_13', '_14', '_15', '_16', '_17', '_18', '_19', '_20', '_21', '_22', '_23', '_24', '_25', '_26', '_27', '_28', '_29', '_30', '_31', '_32', '_33', '_34', '_35', '_36', '_37', '_38', '_39', '_40', '_41', '_42', '_43', '_44', '_45', '_46', '_47', '_48', '_49', '_50', '_51', '_52', '_53', '_54', '_55', '_56', '_57', '_58', '_59', '_60', '_61', '_62', '_63', '_64', '_65', '_66', '_67', '_68', '_69', '_70', '_71', '_72'], 'required'],
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
            '_31' => '31',
            '_32' => '32',
            '_33' => '33',
            '_34' => '34',
            '_35' => '35',
            '_36' => '36',
            '_37' => '37',
            '_38' => '38',
            '_39' => '39',
            '_40' => '40',
            '_41' => '41',
            '_42' => '42',
            '_43' => '43',
            '_44' => '44',
            '_45' => '45',
            '_46' => '46',
            '_47' => '47',
            '_48' => '48',
            '_49' => '49',
            '_50' => '50',
            '_51' => '51',
            '_52' => '52',
            '_53' => '53',
            '_54' => '54',
            '_55' => '55',
            '_56' => '56',
            '_57' => '57',
            '_58' => '58',
            '_59' => '59',
            '_60' => '60',
            '_61' => '61',
            '_62' => '62',
            '_63' => '63',
            '_64' => '64',
            '_65' => '65',
            '_66' => '66',
            '_67' => '67',
            '_68' => '68',
            '_69' => '69',
            '_70' => '70',
            '_71' => '71',
            '_72' => '72',
            'sub_total_desa_b1' => 'Sub Total Desa B1',
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
