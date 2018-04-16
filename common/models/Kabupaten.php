<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "kabupaten".
 *
 * @property int $id_kabupaten
 * @property string $nama_kabupaten
 * @property int $id_provinsi
 * @property string $created_at
 * @property string $updated_at
 *
 * @property Provinsi $provinsi
 * @property Kecamatan[] $kecamatans
 */
class Kabupaten extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'kabupaten';
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
            [['id_provinsi'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['nama_kabupaten'], 'string', 'max' => 255],
            [['id_provinsi'], 'exist', 'skipOnError' => true, 'targetClass' => Provinsi::className(), 'targetAttribute' => ['id_provinsi' => 'id_provinsi']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_kabupaten' => 'Id Kabupaten',
            'nama_kabupaten' => 'Nama Kabupaten',
            'id_provinsi' => 'ID Provinsi',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProvinsi()
    {
        return $this->hasOne(Provinsi::className(), ['id_provinsi' => 'id_provinsi']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKecamatans()
    {
        return $this->hasMany(Kecamatan::className(), ['id_kabupaten' => 'id_kabupaten']);
    }

    public static function getAllKabupatenAsKeyValue(){
	    $model = Kabupaten::find()->all();
	    $dataKabupaten = ArrayHelper::map($model,'id_kabupaten','nama_kabupaten');
	    return $dataKabupaten;
    }
}
