<?php

use Domain\Membership\Models\Membership;
use Illuminate\Database\Migrations\Migration;

class AddTeamMembers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Membership::create([
                'user_id' => 1,
                'team_id' => 1,
                'role' => 'admin',
            ]);
    }
}
