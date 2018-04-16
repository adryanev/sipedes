<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "desa".
 *
 * @property int $id_desa
 * @property string $nama_desa
 * @property int $id_kecamatan
 * @property string $created_at
 * @property string $updated_at
 *
 * @property Kecamatan $kecamatan
 */
class Desa extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'desa';
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
            [['id_kecamatan'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['nama_desa'], 'string', 'max' => 255],
            [['id_kecamatan'], 'exist', 'skipOnError' => true, 'targetClass' => Kecamatan::className(), 'targetAttribute' => ['id_kecamatan' => 'id_kecamatan']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_desa' => 'Id Desa',
            'nama_desa' => 'Nama Desa',
            'id_kecamatan' => 'Id Kecamatan',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKecamatan()
    {
        return $this->hasOne(Kecamatan::className(), ['id_kecamatan' => 'id_kecamatan']);
    }
}
