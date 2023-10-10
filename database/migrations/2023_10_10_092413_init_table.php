<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('type');
            $table->string('headquarter');
            $table->text('about');
            $table->timestamps();
        });

        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('companies_id');
            $table->string('title');
            $table->string('contract');
            $table->text('more');
            $table->string('location');
            $table->timestamps();

            $table->foreign('companies_id')->references('id')->on('companies');
        });

        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('job_id');
            $table->bigInteger('mailsent');
            $table->timestamps();

            $table->foreign('users_id')->references('id')->on('users');
            $table->foreign('jobs_id')->references('id')->on('jobs');
        });

        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string('rolename');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('companies');
        Schema::dropIfExists('jobs');
        Schema::dropIfExists('applications');
    }
};