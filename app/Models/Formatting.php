<?php

namespace App\Models;

use Illuminate\Database\Eloquent\{Factories\HasFactory, Model, Relations\BelongsTo, Relations\HasOne};

class Formatting extends Model
{
    use HasFactory;
    protected $guarded = [];


    public function types(): HasOne
    {
        return $this->hasOne(Type::class);
    }

}
