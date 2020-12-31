<?php

use Carbon\Carbon;
use Domain\User\Models\God;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Hash;

class AddUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        God::create([
            'first_name' => 'James',
            'last_name' => 'Sessford',
            'email' => 'hello@jamessessford.com',
            'password' => Hash::make('testtest12'),
            'email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'current_team_id' => 1,
        ]);
    }
}
