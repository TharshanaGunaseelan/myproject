<?php

namespace Database\Seeders;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class VillageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('villages')->insert([
            'villagename' => 'Vankalai North',
            'villagenumber' =>'MN-97',
            'male' => 0,
            'female' => 0,
            'population' => 0,
            'family' => 0,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')



        ]);

        DB::table('villages')->insert([
            'villagename' => 'Vankalai West',
            'villagenumber' => 'MN-98',
            'male' => 0,
            'female' => 0,
            'population' => 0,
            'family' => 0,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('villages')->insert([
            'villagename' => 'Vankalai East',
            'villagenumber' => 'MN-99',
            'male' => 0,
            'female' => 0,
            'population' => 0,
            'family' => 0,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('villages')->insert([
            'villagename' => 'Thomaspuri',
            'villagenumber' => 'MN-100',
            'male' => 0,
            'female' => 0,
            'population' => 0,
            'family' => 0,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('villages')->insert([
            'villagename' => 'Naruvilikulam',
            'villagenumber' => 'MN-101',
            'male' => 0,
            'female' => 0,
            'population' => 0,
            'family' => 0,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('villages')->insert([
            'villagename' => 'Vanchiyankulam',
            'villagenumber' => 'MN-102',
            'male' => 0,
            'female' => 0,
            'population' => 0,
            'family' => 0,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('villages')->insert([
            'villagename' => 'Umanagari',
            'villagenumber' => 'MN-103',
            'male' => 0,
            'female' => 0,
            'population' => 0,
            'family' => 0,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('villages')->insert([
            'villagename' => 'Achchankulam',
            'villagenumber' => 'MN-104',
            'male' => 0,
            'female' => 0,
            'population' => 0,
            'family' => 0,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('villages')->insert([
            'villagename' => 'Rasamadu',
            'villagenumber' => 'MN-105',
            'male' => 0,
            'female' => 0,
            'population' => 0,
            'family' => 0,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('villages')->insert([
            'villagename' => 'Moddaikadai',
            'villagenumber' => 'MN-106',
            'male' => 0,
            'female' => 0,
            'population' => 0,
            'family' => 0,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('villages')->insert([
            'villagename' => 'Nanattan',
            'villagenumber' => 'MN-107',
            'male' => 0,
            'female' => 0,
            'population' => 0,
            'family' => 0,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('villages')->insert([
            'villagename' => 'Pallankoddai',
            'villagenumber' => 'MN-108',
            'male' => 0,
            'female' => 0,
            'population' => 0,
            'family' => 0,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('villages')->insert([
            'villagename' => 'Valkaipettankandal',
            'villagenumber' => 'MN-109',
            'male' => 0,
            'female' => 0,
            'population' => 0,
            'family' => 0,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('villages')->insert([
            'villagename' => 'Periyakaddaikadu',
            'villagenumber' => 'MN-110',
            'male' => 0,
            'female' => 0,
            'population' => 0,
            'family' => 0,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('villages')->insert([
            'villagename' => 'Illagadipitty',
            'villagenumber' => 'MN-111',
            'male' => 0,
            'female' => 0,
            'population' => 0,
            'family' => 0,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('villages')->insert([
            'villagename' => 'Illanthanmoddai',
            'villagenumber' => 'MN-112',
            'male' => 0,
            'female' => 0,
            'population' => 0,
            'family' => 0,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('villages')->insert([
            'villagename' => 'Puthirakandan',
            'villagenumber' => 'MN-113',
            'male' => 0,
            'female' => 0,
            'population' => 0,
            'family' => 0,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('villages')->insert([
            'villagename' => 'Razoolputhuveli',
            'villagenumber' => 'MN-114',
            'male' => 0,
            'female' => 0,
            'population' => 0,
            'family' => 0,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('villages')->insert([
            'villagename' => 'Kanchithalvu',
            'villagenumber' => 'MN-115',
            'male' => 0,
            'female' => 0,
            'population' => 0,
            'family' => 0,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('villages')->insert([
            'villagename' => 'Arthikully',
            'villagenumber' => 'MN-116',
            'male' => 0,
            'female' => 0,
            'population' => 0,
            'family' => 0,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('villages')->insert([
            'villagename' => 'Chemmmantivu',
            'villagenumber' => 'MN-117',
            'male' => 0,
            'female' => 0,
            'population' => 0,
            'family' => 0,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('villages')->insert([
            'villagename' => 'Murunkan',
            'villagenumber' => 'MN-118',
            'male' => 0,
            'female' => 0,
            'population' => 0,
            'family' => 0,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('villages')->insert([
            'villagename' => 'Chundikuly',
            'villagenumber' => 'MN-119',
            'male' => 0,
            'female' => 0,
            'population' => 0,
            'family' => 0,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('villages')->insert([
            'villagename' => 'Sirukandal',
            'villagenumber' => 'MN-120',
            'male' => 0,
            'female' => 0,
            'population' => 0,
            'family' => 0,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('villages')->insert([
            'villagename' => 'Pontivukandal',
            'villagenumber' => 'MN-121',
            'male' => 0,
            'female' => 0,
            'population' => 0,
            'family' => 0,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('villages')->insert([
            'villagename' => 'Kalomoddaipuliyankulam',
            'villagenumber' => 'MN-122',
            'male' => 0,
            'female' => 0,
            'population' => 0,
            'family' => 0,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('villages')->insert([
            'villagename' => 'Parikarikandal',
            'villagenumber' => 'MN-123',
            'male' => 0,
            'female' => 0,
            'population' => 0,
            'family' => 0,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('villages')->insert([
            'villagename' => 'Katkadanthakulam',
            'villagenumber' => 'MN-124',
            'male' => 0,
            'female' => 0,
            'population' => 0,
            'family' => 0,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('villages')->insert([
            'villagename' => 'Iraddaikulam',
            'villagenumber' => 'MN-125',
            'male' => 0,
            'female' => 0,
            'population' => 0,
            'family' => 0,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('villages')->insert([
            'villagename' => 'C.K.Adampan',
            'villagenumber' => 'MN-126',
            'male' => 0,
            'female' => 0,
            'population' => 0,
            'family' => 0,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('villages')->insert([
            'villagename' => 'Issaimalaithalvu',
            'villagenumber' => 'MN-127',
            'male' => 0,
            'female' => 0,
            'population' => 0,
            'family' => 0,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
