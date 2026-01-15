<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Team extends Model
{
        public $timestamps = false;
        protected $fillable = [
            "name",
            "country",
        ];

        public function races(): BelongsTo{
            return $this->belongsTo(Race::class);
        }
}
