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
			Schema::dropIfExists('admins');
			Schema::create('admins', function (Blueprint $table) {
				$table->uuid('id')->primary()->unique()->nullable(false);
				$table->string('username')->nullable();
				$table->string('email')->unique()->nullable(false);
				$table->timestamp('email_verified_at')->nullable();
				$table->string('password')->nullable(false);
				$table->rememberToken();
				$table->boolean('is_admin')->default(true);
				$table->uuid('admin_role_id')->nullable(false);
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
			Schema::dropIfExists('admins');
		}
	};
