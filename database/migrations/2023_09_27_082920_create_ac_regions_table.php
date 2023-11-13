<?php

use App\Models\Setups\Location\Region;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
	    Schema::dropIfExists('ac_region');
	    Schema::create('ac_region', function (Blueprint $table) {
		    $table->uuid('id')->primary()->unique()->nullable(false);
		    $table->string('name')->nullable(false);
		    $table->string('slug')->nullable(false);
		    $table->string('capital')->nullable(false);
		    $table->boolean('active')->default(false);
		    $table->uuid('created_by')->nullable(true);
		    $table->uuid('updated_by')->nullable(true);
		    $table->softDeletesTz();
		    $table->timestampsTz();
	    });
	
	    Region::create(['name'=>'Ashanti','slug'=>'ashanti','capital'=>'Kumasi']);
	    Region::create(['name'=>'Brong-Ahafo','slug'=>'brong-ahafo','capital'=>'Sunyani']);
	    Region::create(['name'=>'Central','slug'=>'central','capital'=>'Cape Coast']);
	    Region::create(['name'=>'Eastern','slug'=>'eastern','capital'=>'Koforidua']);
	    Region::create(['name'=>'Greater Accra','slug'=>'greater-accra','capital'=>'Accra']);
	    Region::create(['name'=>'Northern','slug'=>'northern','capital'=>'Tamale']);
	    Region::create(['name'=>'Upper East','slug'=>'upper-east','capital'=>'Bolgatanga']);
	    Region::create(['name'=>'Upper West','slug'=>'upper-west','capital'=>'Wa']);
	    Region::create(['name'=>'Volta','slug'=>'volta','capital'=>'Ho']);
	    Region::create(['name'=>'Western','slug'=>'western','capital'=>'Sekondi-Takoradi']);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ac_region');
    }
};
