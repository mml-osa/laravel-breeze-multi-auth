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
			Schema::dropIfExists('ac_student_academic');
			Schema::create('ac_student_academic', function (Blueprint $table) {
				$table->uuid('id')->primary()->unique()->nullable(false);
				$table->uuid('user_id')->nullable(false);
				$table->foreign('user_id')->references('id')->on('students')->cascadeOnUpdate()->cascadeOnDelete();
				$table->uuid('shs_id')->nullable(false);
				$table->foreign('shs_id')->references('id')->on('ac_senior_high_school')->cascadeOnUpdate()->cascadeOnDelete();
				$table->uuid('shs_course_id')->nullable(false);
				$table->foreign('shs_course_id')->references('id')->on('ac_senior_high_course')->cascadeOnUpdate()->cascadeOnDelete();
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
			Schema::dropIfExists('ac_student_academic');
		}
	};
