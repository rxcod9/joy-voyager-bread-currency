<?php

namespace Joy\VoyagerBreadCurrency\Database\Seeders;

use Joy\VoyagerBreadCurrency\Models\Currency;
use Illuminate\Database\Seeder;

class DummyCurrenciesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $count = 20;
        Currency::factory()
            ->count($count)
            ->state(function (array $attributes) use ($count) {
                return [
                    'name' => 'Currency ' . time()
                        . ' ' . rand(1, $count)
                        . ' ' . rand(1, $count)
                        . ' ' . rand(1, $count),
                    'description' => 'Currency Description ' . time()
                        . ' ' . rand(1, $count)
                        . ' ' . rand(1, $count)
                        . ' ' . rand(1, $count)
                ];
            })
            ->create();
    }
}
