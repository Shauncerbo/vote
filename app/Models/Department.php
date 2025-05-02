<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $primaryKey = 'department_id';
    
    protected $fillable = [
        
        'department_name',
        'department_id'
    ];

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function elections()
    {
        return $this->hasMany(Election::class);
    }
}
