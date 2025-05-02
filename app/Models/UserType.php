<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserType extends Model
{
    protected $table = 'userType'; // or 'user_types' if using Laravel naming conventions
    protected $primaryKey = 'userType_id';
    public $timestamps = true;

    protected $fillable = [
        'userType_name',
    ];

    public function users()
    {
        return $this->hasMany(User::class); 
        
    }
}
