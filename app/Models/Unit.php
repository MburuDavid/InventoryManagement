<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    use HasFactory;

    public $fillable = ['unit_name', 'unit_measure'];

    public $timestamps = false;

    /**
     * Get the asset that is associated with the Unit
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    */
    public function asset(): BelongsTo
    {
        return $this->belongsTo(Asset::class);
    }
}
