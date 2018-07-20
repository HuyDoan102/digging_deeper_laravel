<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Faker;

class createAcount extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:account';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a account';
    protected $faker;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $faker = Faker\Factory::create();
        DB::table('users')->truncate(); 
        foreach (range(1, 20) as $index) {
            DB::table('users')->insert([
                "name" => $faker->name,
                "email" => $faker->unique()->safeemail(),
                "password" => bcrypt("123123123"),
                "remember_token" => str_random(10),
                "created_at" => date("Y:m:d H:i:s"),
                "updated_at" => date("Y:m:d H:i:s")
            ]);
        }

    }
}
