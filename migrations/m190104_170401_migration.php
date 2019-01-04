<?php

use yii\db\Migration;

/**
 * Class m190104_170401_migration
 */
class m190104_170401_migration extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function up()
    {
	{
	$tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('Ads', [
        'ad_id' => $this->primaryKey(),
        'ad_name' => $this->string(64)->notNull(),
        'ad_url' => $this->string(256)->notNull(),
		'ad_imageurl' => $this->string(256)->notNull(),
        ], $tableOptions);

		$this->createTable('Count', [
        'number' => $this->primaryKey(),
        'ad_name' => $this->string(64)->notNull(),
        'username' => $this->string(64)->notNull(),
        ], $tableOptions);

		$this->createTable('Users', [
        'id' => $this->primaryKey(),
        'username' => $this->string(64)->unique(),
        'password' => $this->string(64)->notNull(),
        ], $tableOptions);

    }
	}
    
     

    
    

    /**
     * {@inheritdoc}
     */
    public function down()
    {
        
        $this->dropTable('{{Ads}}');
		$this->dropTable('{{Count}}');
		$this->dropTable('{{Users}}');
        

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190104_170401_migration cannot be reverted.\n";

        return false;
    }
    */
}
