<?php

use Domain\Team\Models\Team;
use Illuminate\Database\Migrations\Migration;

class AddTeams extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Team::create([
                'name' => 'James\' Team',
                'user_id' => 1,
                'personal_team' => true,
            ]);

        Team::create([
                'name' => 'Everyone else',
                'user_id' => 1,
                'personal_team' => false,
            ]);
    }
}
