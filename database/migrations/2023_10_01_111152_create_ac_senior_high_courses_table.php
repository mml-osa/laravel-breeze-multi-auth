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
			Schema::dropIfExists('ac_senior_high_course');
			Schema::create('ac_senior_high_course', function (Blueprint $table) {
				$table->uuid('id')->primary()->unique()->nullable(false);
				$table->string('name')->nullable(false);
				$table->string('slug')->nullable(false);
				$table->text('description')->nullable(true);
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
			Schema::dropIfExists('ac_senior_high_course');
		}
	};
