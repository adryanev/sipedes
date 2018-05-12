<?php

namespace common\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "provinsi".
 *
 * @property string $id_provinsi
 * @property string $nama_provinsi
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

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_provinsi'], 'required'],
            [['id_provinsi'], 'string', 'max' => 15],
            [['nama_provinsi'], 'string', 'max' => 255],
            [['id_provinsi'], 'unique'],
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
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKabupatens()
    {
        return $this->hasMany(Kabupaten::className(), ['id_provinsi' => 'id_provinsi']);
    }

    public static function getProvinsiAsMap(){

        $provinsi = Provinsi::find()->all();
        $provinsiMap = ArrayHelper::map($provinsi,'id_provinsi','nama_provinsi');
        return $provinsiMap;
    }

}
