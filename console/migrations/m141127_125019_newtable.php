<?php

use yii\db\Schema;
use yii\db\Migration;

class m141127_125019_newtable extends Migration
{

    public function up()
    {




        $this->createTable('{{%kyrorts}}', [
            'id' => Schema::TYPE_PK,
            'nazva' => Schema::TYPE_STRING . ' NOT NULL',
            'strana' => Schema::TYPE_STRING . '(32) NOT NULL',
            'opisanie' => Schema::TYPE_STRING . ' NOT NULL',
            'photo' => Schema::TYPE_STRING .  ' NOT NULL',

        ]);

        $this->createTable('{{%users}}', [
            'user_id' => Schema::TYPE_PK,
            'username' => Schema::TYPE_STRING . ' (100)NOT NULL',
            'password' => Schema::TYPE_STRING . '(50) NOT NULL',

        ]);

    }

    public function down()
    {
        $this->dropTable('{{%users}}');
        $this->dropTable('{{%kyrorts}}');
    }
}
