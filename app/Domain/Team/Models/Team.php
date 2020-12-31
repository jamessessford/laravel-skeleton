<?php

namespace Domain\Team\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Jetstream\Team as JetstreamTeam;

final class Team extends JetstreamTeam
{
    use SoftDeletes;

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'personal_team' => 'boolean',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * Remove the given user from the team.
     *
     * @param  \Domain\User\Models\User  $user
     * @return void
     */
    public function removeTeamUser($user)
    {
        if ($user->current_team_id === $this->id) {
            $user->forceFill([
                'current_team_id' => null,
            ])->save();
        }

        $this->users()->detach($user);
    }
}
