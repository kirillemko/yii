<?php

use yii\db\Migration;

/**
 * Class m180906_175037_rrr
 */
class m180906_175037_rrr extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function Up()
    {
        $this->createTable(
            'users',
            [
                'id' => $this->primaryKey(),
                'login' => $this->string(),
                'pass' => $this->string(),
            ]
        );
    }

    /**
     * {@inheritdoc}
     */
    public function Down()
    {
        $this->dropTable('users');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180906_175037_rrr cannot be reverted.\n";

        return false;
    }
    */
}
