<?php

use yii\db\Migration;

/**
 * Class m180315_142758_tambahkan_tabels_daerah
 */
class m180315_142758_tambahkan_tabels_daerah extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%provinsi}}',[
            'id_provinsi'=>$this->primaryKey(),
            'nama_provinsi'=>$this->string(),
            'created_at'=>$this->dateTime(),
            'updated_at'=>$this->dateTime()
        ],$tableOptions);
        $this->createTable('{{%kabupaten}}',[
            'id_kabupaten'=>$this->primaryKey(),
            'nama_kabupaten'=>$this->string(),
            'id_provinsi'=>$this->integer(),
            'created_at'=>$this->dateTime(),
            'updated_at'=>$this->dateTime()
        ],$tableOptions);
        $this->createTable('{{%kecamatan}}',[
            'id_kecamatan'=>$this->primaryKey(),
            'nama_kecamatan'=>$this->string(),
            'id_kabupaten'=>$this->integer(),
            'created_at'=>$this->dateTime(),
            'updated_at'=>$this->dateTime()
        ],$tableOptions);
        $this->createTable('{{%kelurahan}}',[

            'id_kelurahan'=>$this->primaryKey(),
            'nama_kelurahan'=>$this->string(),
            'id_kecamatan'=>$this->integer(),
            'created_at'=>$this->dateTime(),
            'updated_at'=>$this->dateTime()
        ],$tableOptions);
        $this->createTable('{{%desa}}',[
            'id_desa'=>$this->primaryKey(),
            'nama_desa'=>$this->string(),
            'id_kecamatan'=>$this->integer(),
            'created_at'=>$this->dateTime(),
            'updated_at'=>$this->dateTime()
        ],$tableOptions);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m180315_142758_tambahkan_tabels_daerah cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180315_142758_tambahkan_tabels_daerah cannot be reverted.\n";

        return false;
    }
    */
}
