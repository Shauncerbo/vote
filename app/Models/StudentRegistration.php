<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentRegistration extends Model
{
    protected $table = 'student_registrations'; 
    protected $primaryKey = 'student_id';
    public $timestamps = true;
  
    protected $fillable = [
        'student_id',
        'FirstName',
        'MiddleName',
        'LastName',
        'Sex',
        'email',
        'contactNumber',
        'department_id',
        'is_registered',
    ];

    protected $casts = [
        'is_registered' => 'boolean'
    ];

    public function scopeVoters($query)
    {
        return $query->where('is_registered', false)
                    ->orWhereNull('is_registered');
    }

    public function getFullNameAttribute()
    {
       
        $fullName = $this->FirstName . ' ' . $this->MiddleName . ' ' . $this->LastName;

        
        return $fullName ?: 'N/A'; 
    }

    public function department()
    {
        return $this->belongsTo(Department::class, 'department_id', 'department_id');
    }

    
    
}
