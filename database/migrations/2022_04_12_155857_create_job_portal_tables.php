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
        Schema::create('locations', function (Blueprint $table) {
            $table->id()->comment('The Primary Key for location table');
            $table->string('street', 255);
            $table->string('city', 50);
            $table->string('province', 50);
            $table->string('country');
            $table->string('postalCode', 15);
            $table->timestamps();
        });


        Schema::create('candidates', function (Blueprint $table) {
            $table->id();
            $table->string('firstName', 100);
            $table->string('lastName', 100);
            $table->string('phone', 20);
            $table->binary('cv')->nullable();
            $table->boolean('accountStatus')->default(true); //active ot notActive
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('companyName', 255);
            $table->string('phone', 20);
            $table->string('email')->unique();
            $table->bigInteger('location_id')->unsigned();
            $table->string('websiteURL');
            $table->foreign('location_id')->references('id')->on('locations')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('jobTypes', function (Blueprint $table) {
            $table->id();
            $table->string('typeName', 255);
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('representatives', function (Blueprint $table) {
            $table->id();
            $table->string('firstName', 100);
            $table->string('lastName', 100);
            $table->string('phone', 20);
            $table->bigInteger('user_id')->unsigned();
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
        });

        Schema::create('jobPosts', function (Blueprint $table) {
            $table->id();
            $table->string('title', 255);
            $table->text('description');
            $table->bigInteger('jobType_id')->unsigned();
            $table->bigInteger('company_id')->unsigned();
            $table->bigInteger('location_id')->unsigned();
            $table->bigInteger('posted_by_id')->unsigned();
            $table->boolean('publishStatus')->default(false);
            $table->date('postedDate');
            $table->integer('status');
            $table->unsignedInteger('no_of_vacancy');
            $table->unsignedBigInteger('salary');
            $table->timestamps();
            $table->foreign('company_id')->references('id')->on('companies');
            $table->foreign('location_id')->references('id')->on('locations');
            $table->foreign('posted_by_id')->references('id')->on('representatives');
            $table->foreign('jobType_id')->references('id')->on('jobTypes');
        });

        Schema::create('applicationDetailes', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('candidate_id')->unsigned();
            $table->bigInteger('jobPost_id')->unsigned();
            $table->date('appliedDate');
            $table->boolean('status')->default(false);
            $table->foreign('candidate_id')->references('id')->on('candidates');
            $table->foreign('jobPost_id')->references('id')->on('jobPosts');
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
        Schema::dropIfExists('applicationDetailes');
        Schema::dropIfExists('representetives');
        Schema::dropIfExists('jobTypes');
        Schema::dropIfExists('companies');
        Schema::dropIfExists('candidates');
        Schema::dropIfExists('locations');
        Schema::dropIfExists('jobPosts');
    }
};
