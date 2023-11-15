<?php

use App\Models\Setups\Location\CityTown;
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
		Schema::dropIfExists('ac_city_town');
		Schema::create('ac_city_town', function (Blueprint $table) {
			$table->uuid('id')->primary()->unique()->nullable(false);
			$table->string('name')->nullable(false);
			$table->string('slug')->nullable(false);
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
		
		CityTown::create(['name' => 'Accra', 'slug' => 'accra', 'active' => true, 'region_id' => $greater_accra]);
		CityTown::create(['name' => 'Kumasi', 'slug' => 'kumasi', 'active' => true, 'region_id' => $ashanti]);
		CityTown::create(['name' => 'Tamale', 'slug' => 'tamale', 'active' => true, 'region_id' => $northern]);
		CityTown::create(['name' => 'Sekondi-Takoradi', 'slug' => 'sekondi-takoradi', 'active' => true, 'region_id' => $western]);
		CityTown::create(['name' => 'Ashaiman', 'slug' => 'ashaiman', 'active' => true, 'region_id' => $greater_accra]);
		CityTown::create(['name' => 'Sunyani', 'slug' => 'sunyani', 'active' => true, 'region_id' => $brong_ahafo]);
		CityTown::create(['name' => 'Cape Coast', 'slug' => 'cape-coast', 'active' => true, 'region_id' => $central]);
		CityTown::create(['name' => 'Obuasi', 'slug' => 'obuasi', 'active' => true, 'region_id' => $ashanti]);
		CityTown::create(['name' => 'Teshie', 'slug' => 'teshie', 'active' => true, 'region_id' => $greater_accra]);
		CityTown::create(['name' => 'Tema', 'slug' => 'tema', 'active' => true, 'region_id' => $greater_accra]);
		CityTown::create(['name' => 'Madina', 'slug' => 'madina', 'active' => true, 'region_id' => $greater_accra]);
		CityTown::create(['name' => 'Koforidua', 'slug' => 'koforidua', 'active' => true, 'region_id' => $eastern]);
		CityTown::create(['name' => 'Wa', 'slug' => 'wa', 'active' => true, 'region_id' => $upper_west]);
		CityTown::create(['name' => 'Techiman', 'slug' => 'cape-coast', 'active' => true, 'region_id' => $brong_ahafo]);
		CityTown::create(['name' => 'Ho', 'slug' => 'ho', 'active' => true, 'region_id' => $volta]);
		CityTown::create(['name' => 'Nungua', 'slug' => 'nungua', 'active' => true, 'region_id' => $greater_accra]);
		CityTown::create(['name' => 'Lashibi', 'slug' => 'lashibi', 'active' => true, 'region_id' => $greater_accra]);
		CityTown::create(['name' => 'Dome', 'slug' => 'dome', 'active' => true, 'region_id' => $greater_accra]);
		CityTown::create(['name' => 'Tema New Town', 'slug' => 'tema-new-town', 'active' => true, 'region_id' => $greater_accra]);
		CityTown::create(['name' => 'Gbawe', 'slug' => 'gbawe', 'active' => true, 'region_id' => $greater_accra]);
		CityTown::create(['name' => 'Oduponkpehe', 'slug' => 'oduponkpehe', 'active' => true, 'region_id' => $central]);
		CityTown::create(['name' => 'Ejura', 'slug' => 'ejura', 'active' => true, 'region_id' => $ashanti]);
		CityTown::create(['name' => 'Taifa', 'slug' => 'taifa', 'active' => true, 'region_id' => $greater_accra]);
		CityTown::create(['name' => 'Bawku', 'slug' => 'bawku', 'active' => true, 'region_id' => $upper_east]);
		CityTown::create(['name' => 'Aflao', 'slug' => 'aflao', 'active' => true, 'region_id' => $volta]);
		CityTown::create(['name' => 'Agona Swedru', 'slug' => 'agona-swedru', 'active' => true, 'region_id' => $central]);
		CityTown::create(['name' => 'Bolgatanga', 'slug' => 'bolgatanga', 'active' => true, 'region_id' => $upper_east]);
		CityTown::create(['name' => 'Tafo', 'slug' => 'tafo', 'active' => true, 'region_id' => $ashanti]);
		CityTown::create(['name' => 'Berekum', 'slug' => 'berekum', 'active' => true, 'region_id' => $brong_ahafo]);
		CityTown::create(['name' => 'Nkawkaw', 'slug' => 'nkawkaw', 'active' => true, 'region_id' => $eastern]);
		CityTown::create(['name' => 'Akim Oda', 'slug' => 'akim-oda', 'active' => true, 'region_id' => $eastern]);
		CityTown::create(['name' => 'Winneba', 'slug' => 'winneba', 'active' => true, 'region_id' => $central]);
		CityTown::create(['name' => 'Hohoe', 'slug' => 'hohoe', 'active' => true, 'region_id' => $volta]);
		CityTown::create(['name' => 'Yendi', 'slug' => 'yendi', 'active' => true, 'region_id' => $northern]);
		CityTown::create(['name' => 'Suhum', 'slug' => 'suhum', 'active' => true, 'region_id' => $eastern]);
		CityTown::create(['name' => 'Kintampo', 'slug' => 'kintampo', 'active' => true, 'region_id' => $brong_ahafo]);
		CityTown::create(['name' => 'Adenta East', 'slug' => 'adenta-east', 'active' => true, 'region_id' => $greater_accra]);
		CityTown::create(['name' => 'Nsawam', 'slug' => 'nsawam', 'active' => true, 'region_id' => $eastern]);
		CityTown::create(['name' => 'Mampong', 'slug' => 'mampong', 'active' => true, 'region_id' => $ashanti]);
		CityTown::create(['name' => 'Konongo', 'slug' => 'konongo', 'active' => true, 'region_id' => $ashanti]);
		CityTown::create(['name' => 'Asamankese', 'slug' => 'asamankese', 'active' => true, 'region_id' => $eastern]);
		CityTown::create(['name' => 'Wenchi', 'slug' => 'wenchi', 'active' => true, 'region_id' => $brong_ahafo]);
		CityTown::create(['name' => 'Savelugu', 'slug' => 'savelugu', 'active' => true, 'region_id' => $northern]);
		CityTown::create(['name' => 'Agogo', 'slug' => 'agogo', 'active' => true, 'region_id' => $ashanti]);
		CityTown::create(['name' => 'Anloga', 'slug' => 'anloga', 'active' => true, 'region_id' => $volta]);
		CityTown::create(['name' => 'Prestea', 'slug' => 'prestea', 'active' => true, 'region_id' => $western]);
		CityTown::create(['name' => 'Effiakuma', 'slug' => 'effiakuma', 'active' => true, 'region_id' => $western]);
		CityTown::create(['name' => 'Tarkwa', 'slug' => 'tarkwa', 'active' => true, 'region_id' => $western]);
		CityTown::create(['name' => 'Elmina', 'slug' => 'elmina', 'active' => true, 'region_id' => $central]);
		CityTown::create(['name' => 'Dunkwa-on-Offin', 'slug' => 'dunkwa-on-offin', 'active' => true, 'region_id' => $central]);
		CityTown::create(['name' => 'Begoro', 'slug' => 'begoro', 'active' => true, 'region_id' => $eastern]);
		CityTown::create(['name' => 'Kpandu', 'slug' => 'kpandu', 'active' => true, 'region_id' => $volta]);
		CityTown::create(['name' => 'Kintampo', 'slug' => 'kintampo', 'active' => true, 'region_id' => $brong_ahafo]);
		CityTown::create(['name' => 'Navrongo', 'slug' => 'navrongo', 'active' => true, 'region_id' => $upper_east]);
		CityTown::create(['name' => 'Axim', 'slug' => 'axim', 'active' => true, 'region_id' => $western]);
		CityTown::create(['name' => 'Apam', 'slug' => 'apam', 'active' => true, 'region_id' => $central]);
		CityTown::create(['name' => 'Salaga', 'slug' => 'salaga', 'active' => true, 'region_id' => $northern]);
		CityTown::create(['name' => 'Saltpond', 'slug' => 'saltpond', 'active' => true, 'region_id' => $central]);
		CityTown::create(['name' => 'Akwatia', 'slug' => 'akwatia', 'active' => true, 'region_id' => $eastern]);
		CityTown::create(['name' => 'Shama', 'slug' => 'shama', 'active' => true, 'region_id' => $western]);
		CityTown::create(['name' => 'Keta', 'slug' => 'keta', 'active' => true, 'region_id' => $volta]);
		CityTown::create(['name' => 'Nyakrom', 'slug' => 'nyakrom', 'active' => true, 'region_id' => $central]);
		CityTown::create(['name' => 'Bibiani', 'slug' => 'bibiani', 'active' => true, 'region_id' => $western]);
		CityTown::create(['name' => 'Somanya', 'slug' => 'somanya', 'active' => true, 'region_id' => $eastern]);
		CityTown::create(['name' => 'Foso', 'slug' => 'foso', 'active' => true, 'region_id' => $central]);
		CityTown::create(['name' => 'Nyankpala', 'slug' => 'nyankpala', 'active' => true, 'region_id' => $northern]);
		CityTown::create(['name' => 'Aburi', 'slug' => 'aburi', 'active' => true, 'region_id' => $eastern]);
		CityTown::create(['name' => 'Mumford', 'slug' => 'mumford', 'active' => true, 'region_id' => $central]);
		CityTown::create(['name' => 'Bechem', 'slug' => 'bechem', 'active' => true, 'region_id' => $brong_ahafo]);
		CityTown::create(['name' => 'Duayaw Nkwanta', 'slug' => 'duayaw-nkwanta', 'active' => true, 'region_id' => $brong_ahafo]);
		CityTown::create(['name' => 'Kade', 'slug' => 'kade', 'active' => true, 'region_id' => $eastern]);
		CityTown::create(['name' => 'Anomabu', 'slug' => 'anomabu', 'active' => true, 'region_id' => $central]);
		CityTown::create(['name' => 'Akropong', 'slug' => 'akropong', 'active' => true, 'region_id' => $eastern]);
		CityTown::create(['name' => 'Kete-Krachi', 'slug' => 'kete-krachi', 'active' => true, 'region_id' => $volta]);
		CityTown::create(['name' => 'Kibi', 'slug' => 'kibi', 'active' => true, 'region_id' => $eastern]);
		CityTown::create(['name' => 'Kpandae', 'slug' => 'kpandae', 'active' => true, 'region_id' => $northern]);
		CityTown::create(['name' => 'Mpraeso', 'slug' => 'mpraeso', 'active' => true, 'region_id' => $eastern]);
		CityTown::create(['name' => 'Akim Swedru', 'slug' => 'akim-swedru', 'active' => true, 'region_id' => $eastern]);
		CityTown::create(['name' => 'Aboso', 'slug' => 'aboso', 'active' => true, 'region_id' => $western]);
		CityTown::create(['name' => 'Bekwai', 'slug' => 'bekwai', 'active' => true, 'region_id' => $ashanti]);
		CityTown::create(['name' => 'Drobo', 'slug' => 'drobo', 'active' => true, 'region_id' => $brong_ahafo]);
		CityTown::create(['name' => 'Banda Ahenkro', 'slug' => 'banda-ahenkro', 'active' => true, 'region_id' => $brong_ahafo]);
		CityTown::create(['name' => 'Dodowa', 'slug' => 'dodowa', 'active' => true, 'region_id' => $greater_accra]);
		CityTown::create(['name' => 'Larteh Akuapim', 'slug' => 'larteh-akuapim', 'active' => true, 'region_id' => $eastern]);
		CityTown::create(['name' => 'Asankragwa', 'slug' => 'asankragwa', 'active' => true, 'region_id' => $western]);
		CityTown::create(['name' => 'Abetifi', 'slug' => 'abetifi', 'active' => true, 'region_id' => $eastern]);
		CityTown::create(['name' => 'Kwabeng', 'slug' => 'kwabeng', 'active' => true, 'region_id' => $eastern]);
		CityTown::create(['name' => 'Kibi', 'slug' => 'kibi', 'active' => true, 'region_id' => $eastern]);
		CityTown::create(['name' => 'Kade', 'slug' => 'kade', 'active' => true, 'region_id' => $eastern]);
		CityTown::create(['name' => 'Akim Oda', 'slug' => 'akim-oda', 'active' => true, 'region_id' => $eastern]);
		CityTown::create(['name' => 'Akim Swedru', 'slug' => 'akim-swedru', 'active' => true, 'region_id' => $eastern]);
		CityTown::create(['name' => 'Akropong', 'slug' => 'akropong', 'active' => true, 'region_id' => $eastern]);
		CityTown::create(['name' => 'Akwatia', 'slug' => 'akwatia', 'active' => true, 'region_id' => $eastern]);
		CityTown::create(['name' => 'Anum', 'slug' => 'anum', 'active' => true, 'region_id' => $eastern]);
		CityTown::create(['name' => 'Asamankese', 'slug' => 'asamankese', 'active' => true, 'region_id' => $eastern]);
		CityTown::create(['name' => 'Begoro', 'slug' => 'begoro', 'active' => true, 'region_id' => $eastern]);
		CityTown::create(['name' => 'Kibi', 'slug' => 'kibi', 'active' => true, 'region_id' => $eastern]);
		CityTown::create(['name' => 'Koforidua', 'slug' => 'koforidua', 'active' => true, 'region_id' => $eastern]);
		CityTown::create(['name' => 'Kwabeng', 'slug' => 'kwabeng', 'active' => true, 'region_id' => $eastern]);
		CityTown::create(['name' => 'Mpraeso', 'slug' => 'mpraeso', 'active' => true, 'region_id' => $eastern]);
		CityTown::create(['name' => 'Nkawkaw', 'slug' => 'nkawkaw', 'active' => true, 'region_id' => $eastern]);
		CityTown::create(['name' => 'Nsawam', 'slug' => 'nsawam', 'active' => true, 'region_id' => $eastern]);
		CityTown::create(['name' => 'Oda', 'slug' => 'oda', 'active' => true, 'region_id' => $eastern]);
		CityTown::create(['name' => 'Somanya', 'slug' => 'somanya', 'active' => true, 'region_id' => $eastern]);
		CityTown::create(['name' => 'Suhum', 'slug' => 'suhum', 'active' => true, 'region_id' => $eastern]);
		CityTown::create(['name' => 'Tafo', 'slug' => 'tafo', 'active' => true, 'region_id' => $eastern]);
		CityTown::create(['name' => 'Anum', 'slug' => 'anum', 'active' => true, 'region_id' => $eastern]);
		CityTown::create(['name' => 'Asamankese', 'slug' => 'asamankese', 'active' => true, 'region_id' => $eastern]);
		CityTown::create(['name' => 'Begoro', 'slug' => 'begoro', 'active' => true, 'region_id' => $eastern]);
	}
	
	/**
	 * Reverse the migrations.
	 */
	public function down(): void
	{
		Schema::dropIfExists('ac_city_town');
	}
};
