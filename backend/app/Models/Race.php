<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Race extends Model
{
    public $timestamps = false;
    protected $fillable = [
        "name",
        "location",
        "date",
        "type",
    ];

    public function teams(): HasMany {
        return $this->hasMany(Team::class, "race_id", "id");
    }
}
