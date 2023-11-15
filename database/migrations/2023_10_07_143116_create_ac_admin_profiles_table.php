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
			Schema::dropIfExists('ac_admin_profile');
			Schema::create('ac_admin_profile', function (Blueprint $table) {
				$table->uuid('id')->primary()->unique()->nullable(false);
				$table->uuid('user_id')->nullable(false);
				$table->string('first_name')->nullable(false);
				$table->string('last_name')->nullable(false);
				$table->string('other_name')->nullable(true);
				$table->string('phone')->nullable(false);
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
			Schema::dropIfExists('ac_admin_profile');
		}
	};
