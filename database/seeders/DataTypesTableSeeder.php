<?php

namespace Joy\VoyagerBreadGroup\Database\Seeders;

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\DataType;

class DataTypesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        $dataType = $this->dataType('slug', 'groups');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'groups',
                'display_name_singular' => __('joy-voyager-bread-group::seeders.data_types.group.singular'),
                'display_name_plural'   => __('joy-voyager-bread-group::seeders.data_types.group.plural'),
                'icon'                  => 'voyager-bread',
                'model_name'            => 'Joy\\VoyagerBreadGroup\\Models\\Group',
                // 'policy_name'           => 'Joy\\VoyagerBreadGroup\\Policies\\GroupPolicy',
                // 'controller'            => 'Joy\\VoyagerBreadGroup\\Http\\Controllers\\VoyagerBreadGroupController',
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
