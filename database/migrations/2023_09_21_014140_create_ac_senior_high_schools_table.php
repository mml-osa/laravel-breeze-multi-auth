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
		Schema::dropIfExists('ac_senior_high_school');
		Schema::create('ac_senior_high_school', function (Blueprint $table) {
			$table->uuid('id')->primary()->unique()->nullable(false);
			$table->string('name')->nullable(false);
			$table->uuid('category_id')->nullable(false);
			$table->foreign('category_id')->references('id')->on('ac_senior_high_category')->cascadeOnDelete()->cascadeOnUpdate();
			$table->string('address')->nullable(false);
			$table->uuid('city_id')->nullable(false);
			$table->foreign('city_id')->references('id')->on('ac_city_town')->cascadeOnUpdate();
			$table->uuid('region_id')->nullable(false);
			$table->foreign('region_id')->references('id')->on('ac_region_new')->cascadeOnUpdate();
			$table->string('email')->unique()->nullable(true);
			$table->string('phone')->unique()->nullable(true);
			$table->string('contact_name')->nullable(true);
			$table->string('contact_email')->nullable(true);
			$table->string('contact_phone')->nullable(true);
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
		Schema::dropIfExists('ac_senior_high_school');
	}
};
