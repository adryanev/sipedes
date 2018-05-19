<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "penilaian_desa".
 *
 * @property int $id
 * @property string $id_desa
 * @property string $tahun_penilaian
 * @property int $penilai
 * @property string $created_at
 * @property string $updated_at
 *
 * @property Desa $desa
 * @property PenilaianMasyarakatDesa[] $penilaianMasyarakatDesas
 * @property PenilaianPemerintahanDesa[] $penilaianPemerintahanDesas
 * @property PenilaianWilayahDesa[] $penilaianWilayahDesas
 */
class PenilaianDesa extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'penilaian_desa';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['penilai'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['id_desa'], 'string', 'max' => 15],
            [['tahun_penilaian'], 'string', 'max' => 4],
            [['id_desa'], 'exist', 'skipOnError' => true, 'targetClass' => Desa::className(), 'targetAttribute' => ['id_desa' => 'id_desa']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_desa' => 'Id Desa',
            'tahun_penilaian' => 'Tahun Penilaian',
            'penilai' => 'Penilai',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDesa()
    {
        return $this->hasOne(Desa::className(), ['id_desa' => 'id_desa']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianMasyarakatDesas()
    {
        return $this->hasMany(PenilaianMasyarakatDesa::className(), ['id_penilaian_desa' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianPemerintahanDesas()
    {
        return $this->hasMany(PenilaianPemerintahanDesa::className(), ['id_penilaian_desa' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianWilayahDesas()
    {
        return $this->hasMany(PenilaianWilayahDesa::className(), ['id_penilaian_desa' => 'id']);
    }
}
