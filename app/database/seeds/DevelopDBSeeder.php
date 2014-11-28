<?php

class DevelopDBSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->command->info('Create test user neocarlitos@gmail.com');
		User::create( [ 
				'email' => 'neocarlitos@gmail.com',
				'name' => 'Neo',
				'password' => Hash::make('123456')
		] );

		$this->command->info('Create test CellExTaskType');
		$taskType = new TaskType(new CellExTaskType());
		$taskType->save();

		$this->command->info('Create test Task: CellEx with image: 110803_a1_ch00.png');
		$cellExTask = TaskType::where('name', '=', 'CellEx')->first();
		Task::create( [ 
				'task_type' => $cellExTask->id,
				'data' => 'img/110803_a1_ch00.png'
		] );
	}
}