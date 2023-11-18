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
			Schema::dropIfExists('students');
			Schema::create('students', function (Blueprint $table) {
				$table->uuid('id')->primary()->unique()->nullable(false);
				$table->string('username');
				$table->string('email')->unique();
				$table->timestamp('email_verified_at')->nullable();
				$table->string('password');
				$table->rememberToken();
				$table->boolean('is_student')->default(false);
				$table->string('account')->nullable(false);
				$table->boolean('setup')->default(false);
				$table->boolean('active')->default(false);
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
			Schema::dropIfExists('students');
		}
	};
