<?php

namespace Norotaro\Guardian\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateNorotaroGuardianCodes extends Migration
{
    public function up()
    {
        Schema::create('norotaro_guardian_codes', function ($table) {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('client_id')->unsigned();
            $table->string('value', 64);
            $table->boolean('active')->default(false);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('norotaro_guardian_codes');
    }
}
