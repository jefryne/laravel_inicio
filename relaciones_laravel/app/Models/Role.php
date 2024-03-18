<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongToMany;

class Role extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function users(): BelongToMany
    {
        return $this->belongsToMany(Role::class)->whithPivot('added_by');
    }
}
