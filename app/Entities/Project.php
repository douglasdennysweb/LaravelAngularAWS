<?php

namespace AngularLaravel\Entities;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [ 'owner_id', 'client_id', 'name', 'description', 'progress', 'status', 'due_date' ];

    public function clients()
    {
        return $this->belongsTo(Client::class);
    }

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
