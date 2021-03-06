<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\db\Expression;

/**
 * This is the model class for table "penilaian_kelurahan".
 *
 * @property int $id
 * @property string $id_kelurahan
 * @property string $tahun_penilaian
 * @property int $penilai
 * @property string $created_at
 * @property string $updated_at
 *
 * @property Kelurahan $kelurahan
 * @property User $penilai0
 * @property PenilaianMasyarakatKelurahan[] $penilaianMasyarakatKelurahans
 * @property PenilaianPemerintahanKelurahan[] $penilaianPemerintahanKelurahans
 * @property PenilaianWilayahKelurahan[] $penilaianWilayahKelurahans
 */
class PenilaianKelurahan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'penilaian_kelurahan';
    }

    public function behaviors()
    {
        return [
            'timestamp' => [
                'class' => TimestampBehavior::className(),
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['created_at', 'updated_at'],
                    ActiveRecord::EVENT_BEFORE_UPDATE => 'updated_at',
                ],
                'value' => function($event) {

                    return new Expression('NOW()');
                }
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['penilai'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['id_kelurahan'], 'string', 'max' => 15],
            [['tahun_penilaian'], 'string', 'max' => 4],
            [['id_kelurahan'], 'exist', 'skipOnError' => true, 'targetClass' => Kelurahan::className(), 'targetAttribute' => ['id_kelurahan' => 'id_kelurahan']],
            [['penilai'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['penilai' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_kelurahan' => 'Id Kelurahan',
            'tahun_penilaian' => 'Tahun Penilaian',
            'penilai' => 'Penilai',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKelurahan()
    {
        return $this->hasOne(Kelurahan::className(), ['id_kelurahan' => 'id_kelurahan']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPenilai0()
    {
        return $this->hasOne(User::className(), ['id' => 'penilai']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianMasyarakatKelurahans()
    {
        return $this->hasMany(PenilaianMasyarakatKelurahan::className(), ['id_penilaian_kelurahan' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianPemerintahanKelurahans()
    {
        return $this->hasMany(PenilaianPemerintahanKelurahan::className(), ['id_penilaian_kelurahan' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianWilayahKelurahans()
    {
        return $this->hasMany(PenilaianWilayahKelurahan::className(), ['id_penilaian_kelurahan' => 'id']);
    }


    public function totalNilai(){
        $total = $this->getPenilaianWilayahKelurahans()->one()->sub_total_wilayah+ $this->getPenilaianPemerintahanKelurahans()->one()->sub_total_pemerintahan + $this->getPenilaianMasyarakatKelurahans()->one()->sub_total_masyarakat;

        return $total;
    }

    public function getPerkembangan(){
        $total = $this->totalNilai();
        $text = '';
        if($total === 0){
            $text = 'Belum di Nilai';
        }
        elseif ($total >= 451){
            $text = 'Cepat Berkembang';
        }
        elseif( $total >=301 && $total <=450){
            $text = 'Berkembang';
        }
        elseif( $total <= 300){
            $text = "Kurang Berkembang";
        }
        return $text;
    }

}
