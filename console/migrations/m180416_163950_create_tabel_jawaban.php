<?php

use yii\db\Migration;

/**
 * Class m180416_163950_create_tabel_jawaban
 */
class m180416_163950_create_tabel_jawaban extends Migration
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

	    //create table penilaian desa
        $this->createTable('{{%penilaian_desa}}',[
            'id'=>$this->primaryKey(),
            'id_desa'=>$this->string(15),
            'tahun_penilaian'=>$this->string(4),
            'penilai'=>$this->integer(),
            'created_at'=>$this->dateTime(),
            'updated_at'=>$this->dateTime()
        ],$tableOptions);


	    //create tabel penilaian wilayah
        $this->createTable('{{%penilaian_wilayah_desa}}',[
            'id'=>$this->primaryKey(),
            'id_penilaian_desa'=>$this->integer(),
            'a1'=>$this->integer(),
            'a2'=>$this->integer(),
            'a3'=>$this->integer(),
            'a4'=>$this->integer(),
            'a5'=>$this->integer(),
            'sub_total_wilayah'=>$this->integer()
        ],$tableOptions);

	    //create tabel penilaian pemerintahan
        $this->createTable('{{%penilaian_pemerintahan_desa}}',[
            'id'=>$this->primaryKey(),
            'id_penilaian_desa'=>$this->integer(),
            'b1'=>$this->integer(),
            'b2'=>$this->integer(),
            'b3'=>$this->integer(),
            'b4'=>$this->integer(),
            'b5'=>$this->integer(),
            'sub_total_pemerintahan'=>$this->integer()
        ],$tableOptions);

        //create tabel penilaian masyarakat
        $this->createTable('{{%penilaian_masyarakat_desa}}',[
            'id'=>$this->primaryKey(),
            'id_penilaian_desa'=>$this->integer(),
            'c1'=>$this->integer(),
            'c2'=>$this->integer(),
            'c3'=>$this->integer(),
            'c4'=>$this->integer(),
            'c5'=>$this->integer(),
            'c6'=>$this->integer(),
            'c7'=>$this->integer(),
            'c8'=>$this->integer(),
            'c9'=>$this->integer(),
            'sub_total_masyarakat'=>$this->integer()
        ],$tableOptions);

	    //create tabel jawaban

	    //A1
	    $this->createTable('{{%penilaian_desa_a1}}',[
	    	'id'=>$this->primaryKey(),
		    'id_desa'=>$this->integer(),
		    'nama'=>$this->string()->notNull(),
		    'kode'=>$this->string()->notNull(),
		    'topologi'=>$this->string()->notNull(),
		    'orbitasi'=>$this->string()->notNull(),
		    'kondisi_1'=>$this->string()->notNull(),
		    'kondisi_2'=>$this->string()->notNull(),
		    ],$tableOptions);

	    //A2
	    $this->createTable('{{%penilaian_desa_a2}}',[
	    	'id'=>$this->primaryKey(),
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
	    $this->createTable('{{%penilaian_desa_a3}}',[
	    	'id'=>$this->primaryKey(),
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
		    '_31'=>$this->integer(1)->notNull(),
            'sub_total_desa_a3'=>$this->integer()
	    ],$tableOptions);

	    //tabel pertanyaan desa a4
        $this->createTable("{{%penilaian_desa_a4}}",[
            'id'=>$this->primaryKey(),
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
            'sub_total_desa_a4'=>$this->integer()
        ],$tableOptions);

        //tabel pertanyaan desa a5
        $this->createTable('{{%penilaian_desa_a5}}',[
            'id'=>$this->primaryKey(),
            '_1'=>$this->integer(1)->notNull(),
            '_2'=>$this->integer(1)->notNull(),
            '_3'=>$this->integer(1)->notNull(),
            '_4'=>$this->integer(1)->notNull(),
            '_5'=>$this->integer(1)->notNull(),
            'sub_total_desa_a5'=>$this->integer()
        ],$tableOptions);

        //tabel pertanyaan desa b1
        $this->createTable('{{%penilaian_desa_b1}}',[
            'id'=>$this->primaryKey(),
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
            '_31'=>$this->integer(1)->notNull(),
            '_32'=>$this->integer(1)->notNull(),
            '_33'=>$this->integer(1)->notNull(),
            '_34'=>$this->integer(1)->notNull(),
            '_35'=>$this->integer(1)->notNull(),
            '_36'=>$this->integer(1)->notNull(),
            '_37'=>$this->integer(1)->notNull(),
            '_38'=>$this->integer(1)->notNull(),
            '_39'=>$this->integer(1)->notNull(),
            '_40'=>$this->integer(1)->notNull(),
            '_41'=>$this->integer(1)->notNull(),
            '_42'=>$this->integer(1)->notNull(),
            '_43'=>$this->integer(1)->notNull(),
            '_44'=>$this->integer(1)->notNull(),
            '_45'=>$this->integer(1)->notNull(),
            '_46'=>$this->integer(1)->notNull(),
            '_47'=>$this->integer(1)->notNull(),
            '_48'=>$this->integer(1)->notNull(),
            '_49'=>$this->integer(1)->notNull(),
            '_50'=>$this->integer(1)->notNull(),
            '_51'=>$this->integer(1)->notNull(),
            '_52'=>$this->integer(1)->notNull(),
            '_53'=>$this->integer(1)->notNull(),
            '_54'=>$this->integer(1)->notNull(),
            '_55'=>$this->integer(1)->notNull(),
            '_56'=>$this->integer(1)->notNull(),
            '_57'=>$this->integer(1)->notNull(),
            '_58'=>$this->integer(1)->notNull(),
            '_59'=>$this->integer(1)->notNull(),
            '_60'=>$this->integer(1)->notNull(),
            '_61'=>$this->integer(1)->notNull(),
            '_62'=>$this->integer(1)->notNull(),
            '_63'=>$this->integer(1)->notNull(),
            '_64'=>$this->integer(1)->notNull(),
            '_65'=>$this->integer(1)->notNull(),
            '_66'=>$this->integer(1)->notNull(),
            '_67'=>$this->integer(1)->notNull(),
            '_68'=>$this->integer(1)->notNull(),
            '_69'=>$this->integer(1)->notNull(),
            '_70'=>$this->integer(1)->notNull(),
            '_71'=>$this->integer(1)->notNull(),
            '_72'=>$this->integer(1)->notNull(),
            'sub_total_desa_b1'=>$this->integer()
        ],$tableOptions);

        $this->createTable('{{%penilaian_desa_b2}}',[
            'id'=>$this->primaryKey(),
            '_1'=>$this->integer(1)->notNull(),
            '_2'=>$this->integer(1)->notNull(),
            '_3'=>$this->integer(1)->notNull(),
            '_4'=>$this->integer(1)->notNull(),
            '_5'=>$this->integer(1)->notNull(),
            '_6'=>$this->integer(1)->notNull(),
            '_7'=>$this->integer(1)->notNull(),
            '_8'=>$this->integer(1)->notNull(),
            '_9'=>$this->integer(1)->notNull(),
            'sub_total_desa_b2'=>$this->integer()
        ],$tableOptions);

        $this->createTable('{{%penilaian_desa_b3}}',[
            'id'=>$this->primaryKey(),
            '_1'=>$this->integer(1)->notNull(),
            '_2'=>$this->integer(1)->notNull(),
            '_3'=>$this->integer(1)->notNull(),
            '_4'=>$this->integer(1)->notNull(),
            '_5'=>$this->integer(1)->notNull(),
            '_6'=>$this->integer(1)->notNull(),
            'sub_total_desa_b3'=>$this->integer(),
        ],$tableOptions);

        $this->createTable('{{%penilaian_desa_b4}}',[
            'id'=>$this->primaryKey(),
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
            'sub_total_desa_b4'=>$this->integer()
        ],$tableOptions);

        $this->createTable('{{%penilaian_desa_b5}}',[
            'id'=>$this->primaryKey(),
            '_1'=>$this->integer(1)->notNull(),
            '_2'=>$this->integer(1)->notNull(),
            '_3'=>$this->integer(1)->notNull(),
            '_4'=>$this->integer(1)->notNull(),
            '_5'=>$this->integer(1)->notNull(),
            'sub_total_desa_b5'=>$this->integer()

        ],$tableOptions);

        $this->createTable('{{%penilaian_desa_c1}}',[
            'id'=>$this->primaryKey(),
            '_1'=>$this->integer(1)->notNull(),
            '_2'=>$this->integer(1)->notNull(),
            '_3'=>$this->integer(1)->notNull(),
            '_4'=>$this->integer(1)->notNull(),
            '_5'=>$this->integer(1)->notNull(),
            'sub_total_desa_c1'=>$this->integer()
        ],$tableOptions);

        $this->createTable('{{%penilaian_desa_c2}}',[
            'id'=>$this->primaryKey(),
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
            'sub_total_desa_c2'=>$this->integer()
        ],$tableOptions);

        $this->createTable('{{%penilaian_desa_c3}}',[
            'id'=>$this->primaryKey(),
            '_1'=>$this->integer(1)->notNull(),
            '_2'=>$this->integer(1)->notNull(),
            '_3'=>$this->integer(1)->notNull(),
            '_4'=>$this->integer(1)->notNull(),
            'sub_total_desa_c3'=>$this->integer()
        ],$tableOptions);

        $this->createTable('{{%penilaian_desa_c4}}',[
            'id'=>$this->primaryKey(),
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
            'sub_total_desa_c4'=>$this->integer(),
        ],$tableOptions);

        $this->createTable('{{%penilaian_desa_c5}}',[
            'id'=>$this->primaryKey(),
            '_1'=>$this->integer(1)->notNull(),
            '_2'=>$this->integer(1)->notNull(),
            '_3'=>$this->integer(1)->notNull(),
            '_4'=>$this->integer(1)->notNull(),
            '_5'=>$this->integer(1)->notNull(),
            '_6'=>$this->integer(1)->notNull(),
            '_7'=>$this->integer(1)->notNull(),
            'sub_total_desa_c5'=>$this->integer()
        ],$tableOptions);

        $this->createTable('{{%penilaian_desa_c6}}',[
            'id'=>$this->primaryKey(),
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
            'sub_total_desa_c6'=>$this->integer()
        ],$tableOptions);

        $this->createTable('{{%penilaian_desa_c7}}',[
            'id'=>$this->primaryKey(),
            '_1'=>$this->integer(1)->notNull(),
            '_2'=>$this->string(10)->notNull(),
            '_3'=>$this->integer(1)->notNull(),
            '_4'=>$this->integer(1)->notNull(),
            'sub_total_desa_c7'=>$this->integer()
        ],$tableOptions);

        $this->createTable('{{%penilaian_desa_c8}}',[
            'id'=>$this->primaryKey(),
            '_1'=>$this->integer(1)->notNull(),
            '_2'=>$this->integer(1)->notNull(),
            'sub_total_desa_c8'=>$this->integer()
        ],$tableOptions);

        $this->createTable('{{%penilaian_desa_c9}}',[
            'id'=>$this->primaryKey(),
            '_1'=>$this->integer(1)->notNull(),
            '_2'=>$this->integer(1)->notNull(),
            '_3'=>$this->integer(1)->notNull(),
            'sub_total_desa_c9'=>$this->integer()
        ],$tableOptions);


        $this->createIndex('idx-penilaian_desa','{{%penilaian_desa}}',['id','id_desa']);

        $this->addForeignKey('fk-penilaian_id_desa','{{%penilaian_desa}}','id_desa','{{%desa}}','id_desa','RESTRICT','CASCADE');
        $this->addForeignKey('fk-penilaian_wilayah_id_penilaian','{{%penilaian_wilayah_desa}}','id_penilaian_desa','{{%penilaian_desa}}','id','RESTRICT','CASCADE');
        $this->addForeignKey('fk-penilaian_pemerintahan_id_penilaian','{{%penilaian_pemerintahan_desa}}','id_penilaian_desa','{{%penilaian_desa}}','id','RESTRICT','CASCADE');
        $this->addForeignKey('fk-penilaian_masyarakat_id_penilaian','{{%penilaian_masyarakat_desa}}','id_penilaian_desa','{{%penilaian_desa}}','id','RESTRICT','CASCADE');

       $this->addForeignKey('fk_a1_penilaian-a1_id','penilaian_wilayah_desa','a1','penilaian_desa_a1','id','RESTRICT','CASCADE');
       $this->addForeignKey('fk_a1_penilaian-a2_id','penilaian_wilayah_desa','a2','penilaian_desa_a2','id','RESTRICT','CASCADE');
       $this->addForeignKey('fk_a1_penilaian-a3_id','penilaian_wilayah_desa','a3','penilaian_desa_a3','id','RESTRICT','CASCADE');
       $this->addForeignKey('fk_a1_penilaian-a4_id','penilaian_wilayah_desa','a4','penilaian_desa_a4','id','RESTRICT','CASCADE');
       $this->addForeignKey('fk_a1_penilaian-a5_id','penilaian_wilayah_desa','a5','penilaian_desa_a5','id','RESTRICT','CASCADE');
       $this->addForeignKey('fk_a1_penilaian-b1_id','penilaian_pemerintahan_desa','b1','penilaian_desa_b1','id','RESTRICT','CASCADE');
       $this->addForeignKey('fk_a1_penilaian-b2_id','penilaian_pemerintahan_desa','b2','penilaian_desa_b2','id','RESTRICT','CASCADE');
       $this->addForeignKey('fk_a1_penilaian-b3_id','penilaian_pemerintahan_desa','b3','penilaian_desa_b3','id','RESTRICT','CASCADE');
       $this->addForeignKey('fk_a1_penilaian-b4_id','penilaian_pemerintahan_desa','b4','penilaian_desa_b4','id','RESTRICT','CASCADE');
       $this->addForeignKey('fk_a1_penilaian-b5_id','penilaian_pemerintahan_desa','b5','penilaian_desa_b5','id','RESTRICT','CASCADE');
       $this->addForeignKey('fk_a1_penilaian-c1_id','penilaian_masyarakat_desa','c1','penilaian_desa_c1','id','RESTRICT','CASCADE');
       $this->addForeignKey('fk_a1_penilaian-c2_id','penilaian_masyarakat_desa','c2','penilaian_desa_c2','id','RESTRICT','CASCADE');
       $this->addForeignKey('fk_a1_penilaian-c3_id','penilaian_masyarakat_desa','c3','penilaian_desa_c3','id','RESTRICT','CASCADE');
       $this->addForeignKey('fk_a1_penilaian-c4_id','penilaian_masyarakat_desa','c4','penilaian_desa_c4','id','RESTRICT','CASCADE');
       $this->addForeignKey('fk_a1_penilaian-c5_id','penilaian_masyarakat_desa','c5','penilaian_desa_c5','id','RESTRICT','CASCADE');
       $this->addForeignKey('fk_a1_penilaian-c6_id','penilaian_masyarakat_desa','c6','penilaian_desa_c6','id','RESTRICT','CASCADE');
       $this->addForeignKey('fk_a1_penilaian-c7_id','penilaian_masyarakat_desa','c7','penilaian_desa_c7','id','RESTRICT','CASCADE');
       $this->addForeignKey('fk_a1_penilaian-c8_id','penilaian_masyarakat_desa','c8','penilaian_desa_c8','id','RESTRICT','CASCADE');
       $this->addForeignKey('fk_a1_penilaian-c9_id','penilaian_masyarakat_desa','c9','penilaian_desa_c9','id','RESTRICT','CASCADE');



    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m180416_163950_create_tabel_jawaban cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180416_163950_create_tabel_jawaban cannot be reverted.\n";

        return false;
    }
    */
}
