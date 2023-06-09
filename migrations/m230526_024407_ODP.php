<?php

use yii\db\Migration;

/**
 * Class m230526_024407_ODP
 */
class m230526_024407_ODP extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%ODP}}', [
            'id' => $this->primarykey(),
            'code_odp'=>$this->integer()->notNull(),
            'nama_odp'=>$this->string(20)->notNull(),
            'titik_x'=>$this->string(2)->notNull(),
            'titik_y'=>$this->string(2)->notNull(),
            'max_user'=>$this->integer()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m230526_024407_ODP cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230526_024407_ODP cannot be reverted.\n";

        return false;
    }
    */
}
