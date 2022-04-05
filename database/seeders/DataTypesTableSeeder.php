<?php

namespace Joy\VoyagerBreadCurrency\Database\Seeders;

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\DataType;

class DataTypesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        $dataType = $this->dataType('slug', 'currencies');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'currencies',
                'display_name_singular' => __('joy-voyager-bread-currency::seeders.data_types.currency.singular'),
                'display_name_plural'   => __('joy-voyager-bread-currency::seeders.data_types.currency.plural'),
                'icon'                  => 'voyager-bread voyager-bread-currency voyager-dollar',
                'model_name'            => 'Joy\\VoyagerBreadCurrency\\Models\\Currency',
                // 'policy_name'           => 'Joy\\VoyagerBreadCurrency\\Policies\\CurrencyPolicy',
                // 'controller'            => 'Joy\\VoyagerBreadCurrency\\Http\\Controllers\\VoyagerBreadCurrencyController',
                'generate_permissions'  => 1,
                'description'           => '',
            ])->save();
        }
    }

    /**
     * [dataType description].
     *
     * @param [type] $field [description]
     * @param [type] $for   [description]
     *
     * @return [type] [description]
     */
    protected function dataType($field, $for)
    {
        return DataType::firstOrNew([$field => $for]);
    }
}
