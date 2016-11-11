<?php

use yii\db\Schema;
use yii\db\Migration;

class m160728_08181344555_Mass extends Migration {

    public function safeUp() {
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        else {
            $tableOptions = null;
        }
        
        $connection = Yii::$app->db;

        try {
            $this->createTable('{{%organization}}', [
                'id' => Schema::TYPE_PK . "",
                'name' => Schema::TYPE_STRING . "(200) NOT NULL",
                'active' => Schema::TYPE_BOOLEAN,
                ], $tableOptions);
        } catch (Exception $e) {
            echo 'Catch Exception ' . $e->getMessage() . ' ';
        }
    }

    public function safeDown() {
        $connection = Yii::$app->db;
        
        try {
            $this->dropTable('{{%organization}}');
        } catch (Exception $e) {
            echo 'Catch Exception ' . $e->getMessage() . ' ';
        }
    }

}
