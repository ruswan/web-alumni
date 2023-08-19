<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->foreignId('graduation_id')->nullable()->constrained()->onDelete('set null');
            $table->foreignId('major_id')->nullable()->constrained()->onDelete('set null');
            $table->foreignId('consulate_id')->nullable()->constrained()->onDelete('set null');
            $table->text('address')->nullable();
            $table->string('phone_number', 20)->nullable();
            $table->year('entry_year')->nullable();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->removeColumn([
                'graduation_id',
                'major_id',
                'consulate_id',
                'address',
                'phone_number',
                'entry_year',
            ]);
        });
    }
};
