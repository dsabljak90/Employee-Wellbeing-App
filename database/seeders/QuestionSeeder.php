<?php

namespace Database\Seeders;

use App\Models\Question;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $questions = json_decode(file_get_contents(storage_path('questions.json')));
        foreach ($questions as $question)
        DB::table('questions')->insert([
            'text'=>$question
        ]);
    }    
} 