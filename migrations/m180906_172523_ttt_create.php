<?php

use yii\db\Migration;

/**
 * Class m180906_172523_ttt_create
 */
class m180906_172523_ttt_create extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable(
            'ttt',
            [
                'id' => $this->primaryKey(),
                'category_id' => $this->integer(),
                'producer_id' => $this->integer(),
                'amount' => $this->float(),
                'asdfdsd' => $this->integer(),
                'xcvxc' => $this->integer(),
            ]
        );

    }


    public function safeDown()
    {
        $this->dropTable('ttt');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180906_172523_ttt_create cannot be reverted.\n";

        return false;
    }
    */
}
