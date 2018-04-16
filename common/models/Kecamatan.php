<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "kecamatan".
 *
 * @property int $id_kecamatan
 * @property string $nama_kecamatan
 * @property int $id_kabupaten
 * @property string $created_at
 * @property string $updated_at
 *
 * @property Desa[] $desas
 * @property Kabupaten $kabupaten
 * @property Kelurahan[] $kelurahans
 */
class Kecamatan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'kecamatan';
    }

	public function behaviors() {
		return [
			'timestamp' => [
				'class' => TimestampBehavior::className(),
				'createdAtAttribute' => 'created_at',
				'updatedAtAttribute' => 'updated_at',
				'value' => new \yii\db\Expression('NOW()'),
			],
		];
	}
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_kabupaten'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['nama_kecamatan'], 'string', 'max' => 255],
            [['id_kabupaten'], 'exist', 'skipOnError' => true, 'targetClass' => Kabupaten::className(), 'targetAttribute' => ['id_kabupaten' => 'id_kabupaten']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_kecamatan' => 'Id Kecamatan',
            'nama_kecamatan' => 'Nama Kecamatan',
            'id_kabupaten' => 'Id Kabupaten',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDesas()
    {
        return $this->hasMany(Desa::className(), ['id_kecamatan' => 'id_kecamatan']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKabupaten()
    {
        return $this->hasOne(Kabupaten::className(), ['id_kabupaten' => 'id_kabupaten']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKelurahans()
    {
        return $this->hasMany(Kelurahan::className(), ['id_kecamatan' => 'id_kecamatan']);
    }

    public static function getAllKecamatanAsKeyValue(){

    	$model = Kecamatan::find()->all();
    	$dataKecamatan = ArrayHelper::map($model,'id_kecamatan','nama_kecamatan');
    	return $dataKecamatan;
    }
}
