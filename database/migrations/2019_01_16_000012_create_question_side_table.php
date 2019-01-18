<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionSideTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'question_side';

    /**
     * Run the migrations.
     * @table question_side
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->mediumText('content');
            $table->integer('flashcard_id')->unsigned();
            $table->timestamps();

            $table->index(["flashcard_id"], 'fk_question_side_flashcards1_idx');


            $table->foreign('flashcard_id', 'fk_question_side_flashcards1_idx')
                ->references('id')->on('respositories')
                ->onDelete('no action')
                ->onUpdate('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists($this->set_schema_table);
     }
}
