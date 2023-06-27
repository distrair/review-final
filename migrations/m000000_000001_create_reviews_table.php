<?php
use yii\db\Migration;
 
class m000000_000001_create_reviews_table extends Migration
{
    public function up()
    {
        $this->createTable('reviews', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'email' => $this->string()->notNull(),
            'message' => $this->text()->notNull(),
            'created_at' => $this->integer()->notNull(),
        ]);
    }
 
    public function down()
    {
        $this->dropTable('reviews');
    }
}