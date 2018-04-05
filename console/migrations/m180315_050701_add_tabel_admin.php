<?php

use yii\db\Migration;

/**
 * Class m180315_050701_add_tabel_admin
 */
class m180315_050701_add_tabel_admin extends Migration
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

        /*
         * Create table admin
         */
        $this->createTable('{{%admin}}', [
            'id' => $this->primaryKey(),
            'username' => $this->string()->notNull()->unique(),
            'auth_key' => $this->string(32)->notNull(),
            'password_hash' => $this->string()->notNull(),
            'password_reset_token' => $this->string()->unique(),
            'email' => $this->string()->notNull()->unique(),
            'status' => $this->smallInteger()->notNull()->defaultValue(10),
            'nama'=>$this->string(),
            'nip'=>$this->string(),
            'avatar'=>$this->string(),
            'jabatan'=>$this->string(),
            'created_at' => $this->dateTime()->notNull(),
            'updated_at' => $this->dateTime()->notNull(),
        ], $tableOptions);

        $this->execute('INSERT INTO `admin` (`id`, `username`, `email`, `nama`, `password_hash`, `password_reset_token`, `auth_key`, `avatar`, `status`, `created_at`, `updated_at`,`nip`,`jabatan`) VALUES
(1, \'root\', \'root@sipedes.com\', \'Super Admin\', \'$2y$13$tyy5A3UZe0ipSoaWDrbpXOfBE8bph0sawnVHrGu6RFfgD7Nihq9he\', NULL, \'Pwys0TRico7Ha4YSyX2fmjABrFskscxh\', \'profile.jpg\',  10, \'2018-02-08 09:48:14\', \'2018-02-08 09:48:14\',\'1405103544341\',\'Super Admin\');');

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m180315_050701_add_tabel_admin cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180315_050701_add_tabel_admin cannot be reverted.\n";

        return false;
    }
    */
}
