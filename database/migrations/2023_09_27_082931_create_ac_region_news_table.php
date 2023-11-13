<?php

use App\Models\Setups\Location\RegionNew;
use App\Models\Setups\Location\Region;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
	/**
	 * Run the migrations.
	 */
	public function up(): void
	{
		Schema::dropIfExists('ac_region_new');
		Schema::create('ac_region_new', function (Blueprint $table) {
			$table->uuid('id')->primary()->unique()->nullable(false);
			$table->uuid('region_id')->nullable(false);
			$table->string('name')->nullable(false);
			$table->string('slug')->nullable(false);
			$table->string('capital')->nullable(false);
			$table->boolean('active')->default(false);
			$table->uuid('created_by')->nullable(true);
			$table->uuid('updated_by')->nullable(true);
			$table->softDeletesTz();
			$table->timestampsTz();
		});
		
		$ashanti = Region::where('name', 'Ashanti')->first()->id;
		$brong_ahafo = Region::where('name', 'Brong-Ahafo')->first()->id;
		$central = Region::where('name', 'Central')->first()->id;
		$eastern = Region::where('name', 'Eastern')->first()->id;
		$greater_accra = Region::where('name', 'Greater Accra')->first()->id;
		$northern = Region::where('name', 'Northern')->first()->id;
		$upper_east = Region::where('name', 'Upper East')->first()->id;
		$upper_west = Region::where('name', 'Upper West')->first()->id;
		$volta = Region::where('name', 'Volta')->first()->id;
		$western = Region::where('name', 'Western')->first()->id;
		
		RegionNew::create(['region_id' => $ashanti, 'name' => 'Ashanti', 'slug' => 'ashanti', 'capital' => 'Kumasi']);
		RegionNew::create(['region_id' => $brong_ahafo, 'name' => 'Bono', 'slug' => 'bono', 'capital' => 'Sunyani']);
		RegionNew::create(['region_id' => $brong_ahafo, 'name' => 'Bono-East', 'slug' => 'bono-east', 'capital' => 'Techiman']);
		RegionNew::create(['region_id' => $brong_ahafo, 'name' => 'Ahafo', 'slug' => 'ahafo', 'capital' => 'Goaso']);
		RegionNew::create(['region_id' => $central, 'name' => 'Central', 'slug' => 'central', 'capital' => 'Cape Coast']);
		RegionNew::create(['region_id' => $eastern, 'name' => 'Eastern', 'slug' => 'eastern', 'capital' => 'Koforidua']);
		RegionNew::create(['region_id' => $greater_accra, 'name' => 'Greater Accra', 'slug' => 'greater-accra', 'capital' => 'Accra']);
		RegionNew::create(['region_id' => $northern, 'name' => 'Northern', 'slug' => 'northern', 'capital' => 'Tamale']);
		RegionNew::create(['region_id' => $northern, 'name' => 'Savannah', 'slug' => 'savannah', 'capital' => 'Damongo']);
		RegionNew::create(['region_id' => $northern, 'name' => 'North East', 'slug' => 'north-east', 'capital' => 'Nalerigu']);
		RegionNew::create(['region_id' => $upper_east, 'name' => 'Upper West', 'slug' => 'upper-east', 'capital' => 'Bolgatanga']);
		RegionNew::create(['region_id' => $upper_west, 'name' => 'Upper West', 'slug' => 'upper-west', 'capital' => 'Wa']);
		RegionNew::create(['region_id' => $volta, 'name' => 'Volta', 'slug' => 'volta', 'capital' => 'Ho']);
		RegionNew::create(['region_id' => $volta, 'name' => 'Oti', 'slug' => 'oti', 'capital' => 'Dambai']);
		RegionNew::create(['region_id' => $western, 'name' => 'Western', 'slug' => 'western', 'capital' => 'Takoradi']);
		RegionNew::create(['region_id' => $western, 'name' => 'Western North', 'slug' => 'western-north', 'capital' => 'Wiawso']);
		
	}
	
	/**
	 * Reverse the migrations.
	 */
	public function down(): void
	{
		Schema::dropIfExists('ac_region_new');
	}
};
