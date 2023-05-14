<?php

use App\Models\Subject;
use Illuminate\Database\Seeder;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Subject::create(['description' => 'Dúvida']);
        Subject::create(['description' => 'Elogio']);
        Subject::create(['description' => 'Reclamação']);
    }
}
