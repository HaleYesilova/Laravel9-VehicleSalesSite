<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id()->autoincrement();
            $table->string('title',50);
            $table->string('keywords',20)->nullable();
            $table->string('description',20)->nullable();
            $table->string('company',20)->nullable();
            $table->string('address',20)->nullable();
            $table->string('phone',20)->nullable();
            $table->string('fax',20)->nullable();
            $table->string('email',75)->nullable();
            $table->string('smtpserver',75)->nullable();
            $table->string('smtpemail',75 )->nullable();
            $table->string('smtppassword',15)->nullable();
            $table->string('smtpport',20)->nullable()->default(0);
            $table->string('facebook',100)->nullable();
            $table->string('instagram',100)->nullable();
            $table->string('twitter',100)->nullable();
            $table->string('youtube',100)->nullable();
            $table->string('aboutus')->nullable();
            $table->string('contact')->nullable();
            $table->string('references')->nullable();
            $table->string('icon',50)->nullable();
            $table->string('status',5)->nullable()->default('False');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settings');
    }
};
