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
            'id_provinsi'=>$this->string(15),
            'nama_provinsi'=>$this->string(),
            'status'=>$this->string(12)

        ],$tableOptions);
        $this->addPrimaryKey('provinsi_pk','provinsi','id_provinsi');
        $this->createTable('{{%kabupaten}}',[
            'id_kabupaten'=>$this->string(15),
            'nama_kabupaten'=>$this->string(),
            'id_provinsi'=>$this->string(15),
            'status'=>$this->string(12)

        ],$tableOptions);
        $this->addPrimaryKey('kabupaten_pk','kabupaten','id_kabupaten');
        $this->createTable('{{%kecamatan}}',[
            'id_kecamatan'=>$this->string(15),
            'nama_kecamatan'=>$this->string(),
            'id_kabupaten'=>$this->string(15),
            'status'=>$this->string(12)

        ],$tableOptions);
        $this->addPrimaryKey('kecamatan_pk','kecamatan','id_kecamatan');
        $this->createTable('{{%kelurahan}}',[

            'id_kelurahan'=>$this->string(15),
            'nama_kelurahan'=>$this->string(),
            'id_kecamatan'=>$this->string(15),
            'status'=>$this->string(12)

        ],$tableOptions);
        $this->addPrimaryKey('kelurahan_pk','kelurahan','id_kelurahan');

        $this->createTable('{{%desa}}',[
            'id_desa'=>$this->string(15),
            'nama_desa'=>$this->string(),
            'id_kecamatan'=>$this->string(15),
            'status'=>$this->string(12)

        ],$tableOptions);

        $this->addPrimaryKey('desa_pk','desa','id_desa');

        /*
         * ================================================== INDEX ==============================================
         */

        $this->createIndex('idx-nama-provinsi','{{%provinsi}}','nama_provinsi');
        $this->createIndex('idx-nama-kabupaten','{{%kabupaten}}','nama_kabupaten');
        $this->createIndex('idx-nama-kecamatan','{{%kecamatan}}','nama_kecamatan');
        $this->createIndex('idx-nama-desa','{{%desa}}','nama_desa');
        $this->createIndex('idx-nama-kelurahan','{{%kelurahan}}','nama_kelurahan');




        /*
         * =================================================== FOREIGN KEY ============================================
         */

        $this->addForeignKey('fk_provinsi_kabupaten',
            'kabupaten',
            'id_provinsi',
            'provinsi',
            'id_provinsi',
            'RESTRICT',
            'CASCADE');
        $this->addForeignKey('fk_kabupaten_kecamatan',
            'kecamatan',
            'id_kabupaten',
            'kabupaten',
            'id_kabupaten',
            'RESTRICT',
            'CASCADE');
        $this->addForeignKey('fk_kecamatan_desa',
            'desa',
            'id_kecamatan',
            'kecamatan',
            'id_kecamatan',
            'RESTRICT',
            'CASCADE');
        $this->addForeignKey('fk_kecamatan_kelurahan',
            'kelurahan',
            'id_kecamatan',
            'kecamatan',
            'id_kecamatan',
            'RESTRICT',
            'CASCADE');


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
