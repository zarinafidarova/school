<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUpdatedAtToStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::table('students', function (Blueprint $table) {
        $table->timestamp('updated_at')->nullable();
    });
}

public function down()
{
    Schema::table('students', function (Blueprint $table) {
        $table->dropColumn('updated_at');
    });
}

}
