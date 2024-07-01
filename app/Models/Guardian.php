<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Guardian extends Model
{
    use HasFactory;

    /**
     * The student that belong to the guardian
     */
    public function student(): BelongsToMany
    {
        return $this->belongsToMany(Student::class);
    }
}
