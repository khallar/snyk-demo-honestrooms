<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRoomAmenities extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        try {
            DB::beginTransaction();

            $amenitiesType = new \App\Models\AmenitiesType();
            $amenitiesType->name = 'Room Amenities';
            $amenitiesType->description = 'Amenities of the room';
            $amenitiesType->save();

            $amenitiesTypeLang = new \App\Models\AmenitiesTypeLang();
            $amenitiesTypeLang->amenities_type_id = $amenitiesType->id;
            $amenitiesTypeLang->name = 'Indicá las comodidades de la habitación';
            $amenitiesTypeLang->lang_code = 'es';
            $amenitiesTypeLang->save();

            $amenitiesList = array(
                'Cama single',
                'Cama doble',
                'Mesa de luz',
                'Escritorio',
                'Silla',
                'Placares disponibles',
                'Ventilador',
                'Aire acondicionado',
                'Calefacción',
                'Ventana'
            );

            foreach ($amenitiesList as $amenityName) {
                $amenities = new \App\Models\Amenities();
                $amenities->name = $amenityName;
                $amenities->type_id = $amenitiesType->id;
                $amenities->save();
            }

            DB::commit();
        } catch (Exception $e) {
            DB::rollback();
            throw $e;
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        try {
            DB::beginTransaction();

            $amenitiesTypeId = \App\Models\AmenitiesType::where('name', 'Room Amenities')->first()->id;

            $amenitiesList = array(
                'Cama single',
                'Cama doble',
                'Mesa de luz',
                'Escritorio',
                'Silla',
                'Placares disponibles',
                'Ventilador',
                'Aire acondicionado',
                'Calefacción',
                'Ventana'
            );

            foreach ($amenitiesList as $amenityName) {
                \App\Models\Amenities::where('name', $amenityName)->where('type_id', $amenitiesTypeId)->delete();
            }

            \App\Models\AmenitiesTypeLang::where('name', 'Comodidades de la habitación')
                ->where('amenities_type_id', $amenitiesTypeId)->delete();

            \App\Models\AmenitiesType::where('name', 'Room Amenities')->delete();

            DB::commit();
        } catch (Exception $e) {
            DB::rollback();
            throw $e;
        }
    }
}
