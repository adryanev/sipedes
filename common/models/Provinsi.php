<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "provinsi".
 *
 * @property int $id_provinsi
 * @property string $nama_provinsi
 * @property string $created_at
 * @property string $updated_at
 *
 * @property Kabupaten[] $kabupatens
 */
class Provinsi extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'provinsi';
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
            [['created_at', 'updated_at'], 'safe'],
            [['nama_provinsi'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_provinsi' => 'Id Provinsi',
            'nama_provinsi' => 'Nama Provinsi',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKabupatens()
    {
        return $this->hasMany(Kabupaten::className(), ['id_provinsi' => 'id_provinsi']);
    }

    public static function getAllProvinsiAsKeyValue(){
	    $model = Provinsi::find()->all();
	    $dataKabupaten = ArrayHelper::map($model,'id_provinsi','nama_provinsi');
	    return $dataKabupaten;
    }
}
