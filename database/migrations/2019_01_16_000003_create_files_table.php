<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilesTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'files';

    /**
     * Run the migrations.
     * @table files
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('filename');
            $table->text('path');
            $table->text('filelink');
            $table->integer('file_type_id')->unsigned();
            $table->timestamps();

            $table->index(["file_type_id"], 'fk_files_file_types1_idx');


            $table->foreign('file_type_id', 'fk_files_file_types1_idx')
                ->references('id')->on('file_types')
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
