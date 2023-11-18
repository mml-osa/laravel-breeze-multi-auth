<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
	/**
	 * Run the migrations.
	 */
	public function up(): void
	{
		Schema::dropIfExists('ac_university');
		Schema::create('ac_university', function (Blueprint $table) {
			$table->uuid('id')->primary()->unique()->nullable(false);
//			$table->uuid('university_id')->unique()->nullable(true);
			$table->string('name')->nullable(false);
			$table->uuid('category_id')->nullable(false);
			$table->foreign('category_id')->references('id')->on('ac_university_category')->cascadeOnDelete()->cascadeOnUpdate();
			$table->string('address')->nullable(false);
			$table->uuid('city_id')->nullable(false);
			$table->foreign('city_id')->references('id')->on('ac_city_town')->cascadeOnUpdate();
			$table->uuid('region_id')->nullable(false);
			$table->foreign('region_id')->references('id')->on('ac_region_new')->cascadeOnUpdate();
			$table->string('phone')->unique()->nullable(true);
			$table->string('phone_2')->unique()->nullable(true);
			$table->boolean('active')->default(true);
			$table->uuid('created_by')->nullable(false);
			$table->uuid('updated_by')->nullable(true);
			$table->softDeletesTz();
			$table->timestampsTz();
		});
	}
	
	/**
	 * Reverse the migrations.
	 */
	public function down(): void
	{
		Schema::dropIfExists('ac_university');
	}
};
