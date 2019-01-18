<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgreementsUsersTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'agreements_users';

    /**
     * Run the migrations.
     * @table agreements_users
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('agreement_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->timestamps();

            $table->index(["user_id"], 'fk_agreements_has_users_users1_idx');

            $table->index(["agreement_id"], 'fk_agreements_has_users_agreements1_idx');


            $table->foreign('agreement_id', 'fk_agreements_has_users_agreements1_idx')
                ->references('id')->on('agreements')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('user_id', 'fk_agreements_has_users_users1_idx')
                ->references('id')->on('users')
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
