<?php

use yii\db\Migration;

/**
 * Class m180708_175406_create_tabel_jawaban_kelurahan
 */
class m180708_175406_create_tabel_jawaban_kelurahan extends Migration
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

        //create table penilaian kelurahan
        $this->createTable('{{%penilaian_kelurahan}}',[
            'id'=>$this->primaryKey(),
            'id_kelurahan'=>$this->string(15),
            'tahun_penilaian'=>$this->string(4),
            'penilai'=>$this->integer(),
            'created_at'=>$this->dateTime(),
            'updated_at'=>$this->dateTime()
        ],$tableOptions);


        //create tabel penilaian wilayah
        $this->createTable('{{%penilaian_wilayah_kelurahan}}',[
            'id'=>$this->primaryKey(),
            'id_penilaian_kelurahan'=>$this->integer(),
            'sub_total_wilayah'=>$this->integer()
        ],$tableOptions);

        //create tabel penilaian pemerintahan
        $this->createTable('{{%penilaian_pemerintahan_kelurahan}}',[
            'id'=>$this->primaryKey(),
            'id_penilaian_kelurahan'=>$this->integer(),
            'sub_total_pemerintahan'=>$this->integer()
        ],$tableOptions);

        //create tabel penilaian masyarakat
        $this->createTable('{{%penilaian_masyarakat_kelurahan}}',[
            'id'=>$this->primaryKey(),
            'id_penilaian_kelurahan'=>$this->integer(),
            'sub_total_masyarakat'=>$this->integer()
        ],$tableOptions);

        //create tabel jawaban

        //A1
        $this->createTable('{{%penilaian_kelurahan_a1}}',[
            'id'=>$this->primaryKey(),
            'id_penilaian_wilayah_kelurahan'=>$this->integer(),
            'nama'=>$this->string()->notNull(),
            'kode'=>$this->string()->notNull(),
            'topologi'=>$this->string()->notNull(),
            'orbitasi'=>$this->string()->notNull(),
            'kondisi_1'=>$this->string()->notNull(),
            'kondisi_2'=>$this->string()->notNull(),
        ],$tableOptions);

        //A2
        $this->createTable('{{%penilaian_kelurahan_a2}}',[
            'id'=>$this->primaryKey(),
            'id_penilaian_wilayah_kelurahan'=>$this->integer(),
            'batas'=>$this->string()->notNull(),
            'penetapan_batas'=> $this->string()->notNull(),
            'umur_kurang_15'=>$this->integer()->notNull(),
            'umur_lebih_15_kurang_56'=> $this->integer()->notNull(),
            'umur_lebih_56'=>$this->integer()->notNull(),
            'jumlah_penduduk_total'=>$this->integer()->notNull(),
            'jumlah_penduduk_laki'=>$this->integer()->notNull(),
            'jumlah_penduduk_pr'=>$this->integer()->notNull(),
            'jumlah_kk'=>$this->integer()->notNull(),
        ],$tableOptions);

        //A3
        $this->createTable('{{%penilaian_kelurahan_a3}}',[
            'id'=>$this->primaryKey(),
            'id_penilaian_wilayah_kelurahan'=>$this->integer(),
            '_1'=>$this->integer(1)->notNull(),
            '_2'=>$this->integer(1)->notNull(),
            '_3'=>$this->integer(1)->notNull(),
            '_4'=>$this->integer(1)->notNull(),
            '_5'=>$this->integer(1)->notNull(),
            '_6'=>$this->integer(1)->notNull(),
            '_7'=>$this->integer(1)->notNull(),
            '_8'=>$this->integer(1)->notNull(),
            '_9'=>$this->integer(1)->notNull(),
            '_10'=>$this->integer(1)->notNull(),
            '_11'=>$this->integer(1)->notNull(),
            '_12'=>$this->integer(1)->notNull(),
            '_13'=>$this->integer(1)->notNull(),
            '_14'=>$this->integer(1)->notNull(),
            '_15'=>$this->integer(1)->notNull(),
            '_16'=>$this->integer(1)->notNull(),
            '_17'=>$this->integer(1)->notNull(),
            '_18'=>$this->integer(1)->notNull(),
            '_19'=>$this->integer(1)->notNull(),
            '_20'=>$this->integer(1)->notNull(),
            '_21'=>$this->integer(1)->notNull(),
            '_22'=>$this->integer(1)->notNull(),
            '_23'=>$this->integer(1)->notNull(),
            '_24'=>$this->integer(1)->notNull(),
            '_25'=>$this->integer(1)->notNull(),
            '_26'=>$this->integer(1)->notNull(),
            '_27'=>$this->integer(1)->notNull(),
            '_28'=>$this->integer(1)->notNull(),
            '_29'=>$this->integer(1)->notNull(),
            '_30'=>$this->integer(1)->notNull(),
            'sub_total_kelurahan_a3'=>$this->integer()
        ],$tableOptions);

        //tabel pertanyaan kelurahan a4
        $this->createTable("{{%penilaian_kelurahan_a4}}",[
            'id'=>$this->primaryKey(),
            'id_penilaian_wilayah_kelurahan'=>$this->integer(),
            '_1'=>$this->integer(1)->notNull(),
            '_2'=>$this->integer(1)->notNull(),
            '_3'=>$this->integer(1)->notNull(),
            '_4'=>$this->integer(1)->notNull(),
            '_5'=>$this->integer(1)->notNull(),
            '_6'=>$this->integer(1)->notNull(),
            '_7'=>$this->integer(1)->notNull(),
            '_8'=>$this->integer(1)->notNull(),
            '_9'=>$this->integer(1)->notNull(),
            '_10'=>$this->integer(1)->notNull(),
            '_11'=>$this->integer(1)->notNull(),
            'sub_total_kelurahan_a4'=>$this->integer()
        ],$tableOptions);

        //tabel pertanyaan kelurahan a5
        $this->createTable('{{%penilaian_kelurahan_a5}}',[
            'id'=>$this->primaryKey(),
            'id_penilaian_wilayah_kelurahan'=>$this->integer(),
            '_1'=>$this->integer(1)->notNull(),
            '_2'=>$this->integer(1)->notNull(),
            '_3'=>$this->integer(1)->notNull(),
            '_4'=>$this->integer(1)->notNull(),
            'sub_total_kelurahan_a5'=>$this->integer()
        ],$tableOptions);

        //tabel pertanyaan kelurahan b1
        $this->createTable('{{%penilaian_kelurahan_b1}}',[
            'id'=>$this->primaryKey(),
            'id_penilaian_pemerintahan_kelurahan'=>$this->integer(),
            '_1'=>$this->integer(1)->notNull(),
            '_2'=>$this->integer(1)->notNull(),
            '_3'=>$this->integer(1)->notNull(),
            '_4'=>$this->integer(1)->notNull(),
            '_5'=>$this->integer(1)->notNull(),
            '_6'=>$this->integer(1)->notNull(),
            '_7'=>$this->integer(1)->notNull(),
            '_8'=>$this->integer(1)->notNull(),
            '_9'=>$this->integer(1)->notNull(),
            '_10'=>$this->integer(1)->notNull(),
            '_11'=>$this->integer(1)->notNull(),
            '_12'=>$this->integer(1)->notNull(),
            '_13'=>$this->integer(1)->notNull(),
            '_14'=>$this->integer(1)->notNull(),
            '_15'=>$this->integer(1)->notNull(),
            '_16'=>$this->integer(1)->notNull(),
            '_17'=>$this->integer(1)->notNull(),
            '_18'=>$this->integer(1)->notNull(),
            '_19'=>$this->integer(1)->notNull(),
            '_20'=>$this->integer(1)->notNull(),
            '_21'=>$this->integer(1)->notNull(),
            '_22'=>$this->integer(1)->notNull(),
            '_23'=>$this->integer(1)->notNull(),
            '_24'=>$this->integer(1)->notNull(),
            'sub_total_kelurahan_b1'=>$this->integer()
        ],$tableOptions);

        $this->createTable('{{%penilaian_kelurahan_b2}}',[
            'id'=>$this->primaryKey(),
            'id_penilaian_pemerintahan_kelurahan'=>$this->integer(),
            '_1'=>$this->integer(1)->notNull(),
            '_2'=>$this->integer(1)->notNull(),
            '_3'=>$this->integer(1)->notNull(),
            '_4'=>$this->integer(1)->notNull(),
            '_5'=>$this->integer(1)->notNull(),
            '_6'=>$this->integer(1)->notNull(),
            '_7'=>$this->integer(1)->notNull(),
            'sub_total_kelurahan_b2'=>$this->integer()
        ],$tableOptions);

        $this->createTable('{{%penilaian_kelurahan_b3}}',[
            'id'=>$this->primaryKey(),
            'id_penilaian_pemerintahan_kelurahan'=>$this->integer(),
            '_1'=>$this->integer(1)->notNull(),
            '_2'=>$this->integer(1)->notNull(),
            '_3'=>$this->integer(1)->notNull(),
            '_4'=>$this->integer(1)->notNull(),
            '_5'=>$this->integer(1)->notNull(),
            '_6'=>$this->integer(1)->notNull(),
            'sub_total_kelurahan_b3'=>$this->integer(),
        ],$tableOptions);

        $this->createTable('{{%penilaian_kelurahan_b4}}',[
            'id'=>$this->primaryKey(),
            'id_penilaian_pemerintahan_kelurahan'=>$this->integer(),
            '_1'=>$this->integer(1)->notNull(),
            '_2'=>$this->integer(1)->notNull(),
            '_3'=>$this->integer(1)->notNull(),
            '_4'=>$this->integer(1)->notNull(),
            '_5'=>$this->integer(1)->notNull(),
            '_6'=>$this->integer(1)->notNull(),
            '_7'=>$this->integer(1)->notNull(),
            '_8'=>$this->integer(1)->notNull(),
            '_9'=>$this->integer(1)->notNull(),
            '_10'=>$this->integer(1)->notNull(),
            '_11'=>$this->integer(1)->notNull(),
            '_12'=>$this->integer(1)->notNull(),
            '_13'=>$this->integer(1)->notNull(),
            '_14'=>$this->integer(1)->notNull(),
            'sub_total_kelurahan_b4'=>$this->integer()
        ],$tableOptions);

        $this->createTable('{{%penilaian_kelurahan_b5}}',[
            'id'=>$this->primaryKey(),
            'id_penilaian_pemerintahan_kelurahan'=>$this->integer(),
            '_1'=>$this->integer(1)->notNull(),
            '_2'=>$this->integer(1)->notNull(),
            '_3'=>$this->integer(1)->notNull(),
            '_4'=>$this->integer(1)->notNull(),
            '_5'=>$this->integer(1)->notNull(),
            'sub_total_kelurahan_b5'=>$this->integer()

        ],$tableOptions);

        $this->createTable('{{%penilaian_kelurahan_c1}}',[
            'id'=>$this->primaryKey(),
            'id_penilaian_kemasyarakatan_kelurahan'=>$this->integer(),
            '_1'=>$this->integer(1)->notNull(),
            '_2'=>$this->integer(1)->notNull(),
            '_3'=>$this->integer(1)->notNull(),
            '_4'=>$this->integer(1)->notNull(),
            '_5'=>$this->integer(1)->notNull(),
            'sub_total_kelurahan_c1'=>$this->integer()
        ],$tableOptions);

        $this->createTable('{{%penilaian_kelurahan_c2}}',[
            'id'=>$this->primaryKey(),
            'id_penilaian_kemasyarakatan_kelurahan'=>$this->integer(),
            '_1'=>$this->integer(1)->notNull(),
            '_2'=>$this->integer(1)->notNull(),
            '_3'=>$this->integer(1)->notNull(),
            '_4'=>$this->integer(1)->notNull(),
            '_5'=>$this->integer(1)->notNull(),
            '_6'=>$this->integer(1)->notNull(),
            '_7'=>$this->integer(1)->notNull(),
            '_8'=>$this->integer(1)->notNull(),
            '_9'=>$this->integer(1)->notNull(),
            '_10'=>$this->integer(1)->notNull(),
            'sub_total_kelurahan_c2'=>$this->integer()
        ],$tableOptions);

        $this->createTable('{{%penilaian_kelurahan_c3}}',[
            'id'=>$this->primaryKey(),
            'id_penilaian_kemasyarakatan_kelurahan'=>$this->integer(),
            '_1'=>$this->integer(1)->notNull(),
            '_2'=>$this->integer(1)->notNull(),
            '_3'=>$this->integer(1)->notNull(),
            '_4'=>$this->integer(1)->notNull(),
            'sub_total_kelurahan_c3'=>$this->integer()
        ],$tableOptions);

        $this->createTable('{{%penilaian_kelurahan_c4}}',[
            'id'=>$this->primaryKey(),
            'id_penilaian_kemasyarakatan_kelurahan'=>$this->integer(),
            '_1'=>$this->integer(1)->notNull(),
            '_2'=>$this->integer(1)->notNull(),
            '_3'=>$this->integer(1)->notNull(),
            '_4'=>$this->integer(1)->notNull(),
            '_5'=>$this->integer(1)->notNull(),
            '_6'=>$this->integer(1)->notNull(),
            '_7'=>$this->integer(1)->notNull(),
            '_8'=>$this->integer(1)->notNull(),
            '_9'=>$this->integer(1)->notNull(),
            '_10'=>$this->integer(1)->notNull(),
            '_11'=>$this->integer(1)->notNull(),
            '_12'=>$this->integer(1)->notNull(),
            '_13'=>$this->integer(1)->notNull(),
            '_14'=>$this->integer(1)->notNull(),
            '_15'=>$this->integer(1)->notNull(),
            '_16'=>$this->integer(1)->notNull(),
            '_17'=>$this->integer(1)->notNull(),
            '_18'=>$this->integer(1)->notNull(),
            '_19'=>$this->integer(1)->notNull(),
            '_20'=>$this->integer(1)->notNull(),
            '_21'=>$this->integer(1)->notNull(),
            '_22'=>$this->integer(1)->notNull(),
            '_23'=>$this->integer(1)->notNull(),
            '_24'=>$this->integer(1)->notNull(),
            'sub_total_kelurahan_c4'=>$this->integer(),
        ],$tableOptions);

        $this->createTable('{{%penilaian_kelurahan_c5}}',[
            'id'=>$this->primaryKey(),
            'id_penilaian_kemasyarakatan_kelurahan'=>$this->integer(),
            '_1'=>$this->integer(1)->notNull(),
            '_2'=>$this->integer(1)->notNull(),
            '_3'=>$this->integer(1)->notNull(),
            '_4'=>$this->integer(1)->notNull(),
            '_5'=>$this->integer(1)->notNull(),
            '_6'=>$this->integer(1)->notNull(),
            '_7'=>$this->integer(1)->notNull(),
            'sub_total_kelurahan_c5'=>$this->integer()
        ],$tableOptions);

        $this->createTable('{{%penilaian_kelurahan_c6}}',[
            'id'=>$this->primaryKey(),
            'id_penilaian_kemasyarakatan_kelurahan'=>$this->integer(),
            '_1'=>$this->integer(1)->notNull(),
            '_2'=>$this->integer(1)->notNull(),
            '_3'=>$this->integer(1)->notNull(),
            '_4'=>$this->integer(1)->notNull(),
            '_5'=>$this->integer(1)->notNull(),
            '_6'=>$this->integer(1)->notNull(),
            '_7'=>$this->integer(1)->notNull(),
            '_8'=>$this->integer(1)->notNull(),
            '_9'=>$this->integer(1)->notNull(),
            '_10'=>$this->integer(1)->notNull(),
            '_11'=>$this->integer(1)->notNull(),
            '_12'=>$this->integer(1)->notNull(),
            '_13'=>$this->integer(1)->notNull(),
            '_14'=>$this->integer(1)->notNull(),
            'sub_total_kelurahan_c6'=>$this->integer()
        ],$tableOptions);

        $this->createTable('{{%penilaian_kelurahan_c7}}',[
            'id'=>$this->primaryKey(),
            'id_penilaian_kemasyarakatan_kelurahan'=>$this->integer(),
            '_1'=>$this->integer(1)->notNull(),
            '_2'=>$this->string(10)->notNull(),
            '_3'=>$this->integer(1)->notNull(),
            '_4'=>$this->integer(1)->notNull(),
            '_5'=>$this->integer(1)->notNull(),
            'sub_total_kelurahan_c7'=>$this->integer()
        ],$tableOptions);

        $this->createTable('{{%penilaian_kelurahan_c8}}',[
            'id'=>$this->primaryKey(),
            'id_penilaian_kemasyarakatan_kelurahan'=>$this->integer(),
            '_1'=>$this->integer(1)->notNull(),
            '_2'=>$this->integer(1)->notNull(),
            'sub_total_kelurahan_c8'=>$this->integer()
        ],$tableOptions);

        $this->createTable('{{%penilaian_kelurahan_c9}}',[
            'id'=>$this->primaryKey(),
            'id_penilaian_kemasyarakatan_kelurahan'=>$this->integer(),
            '_1'=>$this->integer(1)->notNull(),
            '_2'=>$this->integer(1)->notNull(),
            '_3'=>$this->integer(1)->notNull(),
            'sub_total_kelurahan_c9'=>$this->integer()
        ],$tableOptions);


        $this->createIndex('idx-penilaian_kelurahan','{{%penilaian_kelurahan}}',['id','id_kelurahan']);

        $this->addForeignKey('fk-penilaian_id_kelurahan','{{%penilaian_kelurahan}}','id_kelurahan','{{%kelurahan}}','id_kelurahan','RESTRICT','CASCADE');
        $this->addForeignKey('fk-penilaian_wilayah_id_penilaian_kelurahan','{{%penilaian_wilayah_kelurahan}}','id_penilaian_kelurahan','{{%penilaian_kelurahan}}','id','RESTRICT','CASCADE');
        $this->addForeignKey('fk-penilaian_pemerintahan_id_penilaian_kelurahan','{{%penilaian_pemerintahan_kelurahan}}','id_penilaian_kelurahan','{{%penilaian_kelurahan}}','id','RESTRICT','CASCADE');
        $this->addForeignKey('fk-penilaian_masyarakat_id_penilaian_kelurahan','{{%penilaian_masyarakat_kelurahan}}','id_penilaian_kelurahan','{{%penilaian_kelurahan}}','id','RESTRICT','CASCADE');
        $this->addForeignKey('fk_a1_penilaiankelurahan-a1_id','penilaian_kelurahan_a1','id_penilaian_wilayah_kelurahan','penilaian_wilayah_kelurahan','id','RESTRICT','CASCADE');
        $this->addForeignKey('fk_a1_penilaiankelurahan-a2_id','penilaian_kelurahan_a2','id_penilaian_wilayah_kelurahan','penilaian_wilayah_kelurahan','id','RESTRICT','CASCADE');
        $this->addForeignKey('fk_a1_penilaiankelurahan-a3_id','penilaian_kelurahan_a3','id_penilaian_wilayah_kelurahan','penilaian_wilayah_kelurahan','id','RESTRICT','CASCADE');
        $this->addForeignKey('fk_a1_penilaiankelurahan-a4_id','penilaian_kelurahan_a4','id_penilaian_wilayah_kelurahan','penilaian_wilayah_kelurahan','id','RESTRICT','CASCADE');
        $this->addForeignKey('fk_a1_penilaiankelurahan-a5_id','penilaian_kelurahan_a5','id_penilaian_wilayah_kelurahan','penilaian_wilayah_kelurahan','id','RESTRICT','CASCADE');
        $this->addForeignKey('fk_a1_penilaiankelurahan-b1_id','penilaian_kelurahan_b1','id_penilaian_pemerintahan_kelurahan','penilaian_pemerintahan_kelurahan','id','RESTRICT','CASCADE');
        $this->addForeignKey('fk_a1_penilaiankelurahan-b2_id','penilaian_kelurahan_b2','id_penilaian_pemerintahan_kelurahan','penilaian_pemerintahan_kelurahan','id','RESTRICT','CASCADE');
        $this->addForeignKey('fk_a1_penilaiankelurahan-b3_id','penilaian_kelurahan_b3','id_penilaian_pemerintahan_kelurahan','penilaian_pemerintahan_kelurahan','id','RESTRICT','CASCADE');
        $this->addForeignKey('fk_a1_penilaiankelurahan-b4_id','penilaian_kelurahan_b4','id_penilaian_pemerintahan_kelurahan','penilaian_pemerintahan_kelurahan','id','RESTRICT','CASCADE');
        $this->addForeignKey('fk_a1_penilaiankelurahan-b5_id','penilaian_kelurahan_b5','id_penilaian_pemerintahan_kelurahan','penilaian_pemerintahan_kelurahan','id','RESTRICT','CASCADE');
        $this->addForeignKey('fk_a1_penilaiankelurahan-c1_id','penilaian_kelurahan_c1','id_penilaian_kemasyarakatan_kelurahan','penilaian_masyarakat_kelurahan','id','RESTRICT','CASCADE');
        $this->addForeignKey('fk_a1_penilaiankelurahan-c2_id','penilaian_kelurahan_c2','id_penilaian_kemasyarakatan_kelurahan','penilaian_masyarakat_kelurahan','id','RESTRICT','CASCADE');
        $this->addForeignKey('fk_a1_penilaiankelurahan-c3_id','penilaian_kelurahan_c3','id_penilaian_kemasyarakatan_kelurahan','penilaian_masyarakat_kelurahan','id','RESTRICT','CASCADE');
        $this->addForeignKey('fk_a1_penilaiankelurahan-c4_id','penilaian_kelurahan_c4','id_penilaian_kemasyarakatan_kelurahan','penilaian_masyarakat_kelurahan','id','RESTRICT','CASCADE');
        $this->addForeignKey('fk_a1_penilaiankelurahan-c5_id','penilaian_kelurahan_c5','id_penilaian_kemasyarakatan_kelurahan','penilaian_masyarakat_kelurahan','id','RESTRICT','CASCADE');
        $this->addForeignKey('fk_a1_penilaiankelurahan-c6_id','penilaian_kelurahan_c6','id_penilaian_kemasyarakatan_kelurahan','penilaian_masyarakat_kelurahan','id','RESTRICT','CASCADE');
        $this->addForeignKey('fk_a1_penilaiankelurahan-c7_id','penilaian_kelurahan_c7','id_penilaian_kemasyarakatan_kelurahan','penilaian_masyarakat_kelurahan','id','RESTRICT','CASCADE');
        $this->addForeignKey('fk_a1_penilaiankelurahan-c8_id','penilaian_kelurahan_c8','id_penilaian_kemasyarakatan_kelurahan','penilaian_masyarakat_kelurahan','id','RESTRICT','CASCADE');
        $this->addForeignKey('fk_a1_penilaiankelurahan-c9_id','penilaian_kelurahan_c9','id_penilaian_kemasyarakatan_kelurahan','penilaian_masyarakat_kelurahan','id','RESTRICT','CASCADE');
        $this->addForeignKey('fk_penilaian_penilai_kelurahan','penilaian_kelurahan','penilai','user','id','SET NULL','CASCADE');


    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m180708_175406_create_tabel_jawaban_kelurahan cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180708_175406_create_tabel_jawaban_kelurahan cannot be reverted.\n";

        return false;
    }
    */
}
