<?php

namespace Norotaro\Guardian\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateNorotaroGuardianClients extends Migration
{
    public function up()
    {
        Schema::create('norotaro_guardian_clients', function ($table) {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->string('shortname');
            $table->string('description')->nullable();
            $table->boolean('active')->default(false);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('norotaro_guardian_clients');
    }
}
