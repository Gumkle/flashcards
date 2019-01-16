<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStarredReposTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'starred_repos';

    /**
     * Run the migrations.
     * @table starred_repos
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('user_id')->unsigned();
            $table->integer('repository_id')->unsigned();

            $table->index(["user_id"], 'fk_users_has_repositories_users1_idx');

            $table->index(["repository_id"], 'fk_users_has_repositories_repositories1_idx');


            $table->foreign('user_id', 'fk_users_has_repositories_users1_idx')
                ->references('id')->on('users')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('repository_id', 'fk_users_has_repositories_repositories1_idx')
                ->references('id')->on('repositories')
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
