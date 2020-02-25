<?php

use Illuminate\Database\Seeder;

class StateCityCountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $citiesTable = Config::get('location.cities_table');
        $statesTable = Config::get('location.states_table');

        DB::table($citiesTable)
            ->orderBy('id')
            ->chunk(100, function ($cities) use ($citiesTable, $statesTable) {
                foreach ($cities as $city) {
                    $state = DB::table($statesTable)->where('id', $city->state_id)->first();
                    if ($state) {
                        $countryId = $state->country_id;
                        DB::table($citiesTable)->where('id', $city->id)->update([
                            'country_id' => $countryId,
                        ]);
                    }
                }
            });
    }
}
