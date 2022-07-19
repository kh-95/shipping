<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('fullname');
            $table->string('email')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->timestamp('phone_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->string('phone')->unique()->nullable();
            $table->string('country_code')->nullable();
            $table->string('whatsapp')->nullable();
            $table->boolean('is_password_changed')->default(false)->comment('check if user changed password for first time');
            $table->boolean('is_login_code')->default(false)->comment('send verification code every time login');
            $table->boolean('is_active')->default(false)->comment('check phone is verified');
            $table->date('ban_from')->nullable();
            $table->date('ban_to')->nullable();
            $table->string('reset_code')->nullable();
            $table->string('verified_code')->nullable();
            $table->enum('register_status', ['pending', 'inprogress', 'completed'])->default('pending');
            $table->enum('user_type', [ 'admin','client']);
            $table->enum('gender', ['male', 'female'])->nullable();
            $table->float('rate_avg', 5, 2)->default(0);
            $table->date('date_of_birth')->nullable();
            $table->date('date_of_birth_hijri')->nullable();
            $table->boolean('is_date_hijri')->default(false)->comment('1 if user want to show hijri date');
            $table->char("user_locale", 3)->default('ar');
            $table->string("login_id")->nullable();
            $table->string("login_code")->nullable();
            $table->string('reset_token',100)->nullable();
            $table->boolean('is_notification_enabled')->default(true)->comment('check if notication is active');
            $table->boolean('is_red_notifications')->default(false)->comment('check if notications bell is clicked');
            $table->rememberToken();
            $table->softDeletes();
            $table->timestamps();
            $table->index(['created_at']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
