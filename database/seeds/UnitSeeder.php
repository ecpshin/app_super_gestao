<?php

use Illuminate\Database\Seeder;
use App\Models\Unit;

class UnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Unit::create(['unit_name' => 'km', 'description' => 'kilômetro']);
        Unit::create(['unit_name' => 'cm', 'description' => 'centimetro']);
        Unit::create(['unit_name' => 'mm', 'description' => 'milimetro']);
        Unit::create(['unit_name' => 'kg', 'description' => 'kilograma']);
        Unit::create(['unit_name' => 'cg', 'description' => 'centigrama']);
        Unit::create(['unit_name' => 'mg', 'description' => 'miligrama']);
        Unit::create(['unit_name' => 'l', 'description' => 'litro']);
        Unit::create(['unit_name' => 'cl', 'description' => 'centilitro']);
        Unit::create(['unit_name' => 'ml', 'description' => 'mililitro']);        
    }
}
