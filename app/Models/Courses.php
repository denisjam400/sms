<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\instructor as Instructor;

class Courses extends Model
{
    use HasFactory;
    
    /**
     * The Instructor that belong to the Courses
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function Instructor(): BelongsTo
    {
        return $this->belongsTo(Instructor::class);
    }
}
