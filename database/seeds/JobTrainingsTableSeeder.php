<?php

use Illuminate\Database\Seeder;

class JobTrainingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('job_trainings')->insert(['job_id' => 1, 'training_id' => 1, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')]);
        DB::table('job_trainings')->insert(['job_id' => 1, 'training_id' => 2, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')]);
        DB::table('job_trainings')->insert(['job_id' => 1, 'training_id' => 3, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')]);
        DB::table('job_trainings')->insert(['job_id' => 2, 'training_id' => 1, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')]);
        DB::table('job_trainings')->insert(['job_id' => 3, 'training_id' => 4, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')]);
        DB::table('job_trainings')->insert(['job_id' => 3, 'training_id' => 5, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')]);
    }
}
