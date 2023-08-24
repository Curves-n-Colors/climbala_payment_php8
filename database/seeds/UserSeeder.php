<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	'name'				=> 'Super Admin',
			'email'				=> 'info@thundercodes.com',
			'email_verified_at'	=> NULL,
            'uuid'               => Str::uuid()->toString(),
			'password'			=> '$2y$10$GLc5272vT/VALWDnmG44/umzZciWGHS5z/JOm/7W6o494ZUApR7vC', //123456789
            'master_password'   => '$2y$10$GLc5272vT/VALWDnmG44/umzZciWGHS5z/JOm/7W6o494ZUApR7vC', //123456789
			'remember_token'	=> NULL,
            'is_super' => 10,
            'is_active'    => 10,
			'created_at'		=> now()->toDateTimeString(),
			'updated_at'		=> now()->toDateTimeString(),
        ]);
        DB::table('users')->insert([
            'name'                => 'Kora Tours',
            'email'                => 'info@koratour.com',
            'email_verified_at'    => NULL,
            'uuid'               => Str::uuid()->toString(),
            'password'            => '$2y$10$VqYEp/iwqXRlKxuqiIdUBOpVCgE6W4YdCmD1Wt4sMhxoTmpKS0yVC', //Kora123
            'master_password'   => '$2y$10$VqYEp/iwqXRlKxuqiIdUBOpVCgE6W4YdCmD1Wt4sMhxoTmpKS0yVC', //Kora123
            'remember_token'    => NULL,
            'is_active'    => 10,
            'created_at'        => now()->toDateTimeString(),
            'updated_at'        => now()->toDateTimeString(),
        ]);
    }
}
