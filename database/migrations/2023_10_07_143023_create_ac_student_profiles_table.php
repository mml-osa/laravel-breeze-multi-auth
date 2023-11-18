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
			Schema::dropIfExists('ac_student_profile');
			Schema::create('ac_student_profile', function (Blueprint $table) {
				$table->uuid('id')->primary()->unique()->nullable(false);
				$table->uuid('user_id')->nullable(false);
				$table->foreign('user_id')->references('id')->on('students')->cascadeOnUpdate()->cascadeOnDelete();
				$table->string('first_name')->nullable(false);
				$table->string('last_name')->nullable(false);
				$table->string('other_name')->nullable(true);
				$table->uuid('gender_id')->nullable(true);
				$table->foreign('gender_id')->references('id')->on('ac_gender')->cascadeOnUpdate();
				$table->uuid('nationality_id')->nullable(false);
				$table->string('residential_address')->nullable(false);
				$table->string('gps_code')->nullable(true);
				$table->string('phone')->nullable(false);
				$table->string('phone_2')->nullable(true);
				$table->uuid('city_id')->nullable(false);
				$table->uuid('region_id')->nullable(false);
				$table->uuid('created_by')->nullable(true);
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
			Schema::dropIfExists('ac_student_profile');
		}
	};
