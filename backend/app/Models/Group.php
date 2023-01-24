<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $guarded = [
        'id'
    ];
    public function users()
    {
        return $this->belongsToMany(User::class, 'books', 'group_id', 'user_id');
    }
    public function attachUser($user_id)
    {
        if (!($this->users->contains($user_id))) {
            $this->users()->attach(($user_id), (array('group_id' => $this->id, 'created_at' => now(), 'updated_at' => now())));
            return true;
        }
        return false;
    }
    public function detachUser($user_id)
    {
        return $this->users()->wherePivot('user_id', '=', $user_id)->detach();
    }
}
