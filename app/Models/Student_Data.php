<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Student_Data extends Model
{
    use HasFactory;

    public function student_data(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * The Guardian that belong to the Student
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function Guardian(): BelongsToMany
    {
        return $this->belongsToMany(Guardian::class, 'guardian_student_table', 'student_id', 'guardian_id');
    }

       /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'nationality',
        'state',
        'age',
        'address',
        'Phone_Number',
        'Phone_Number_2',
        'date_of_birth',
        'gender',
    ];
}
