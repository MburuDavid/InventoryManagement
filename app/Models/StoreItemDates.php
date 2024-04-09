<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class StoreItemDates extends Model
{
    use HasFactory;

    protected $fillable = ['asset_id','delivery_date','issue_date','return_date', 'issued_to', 'issue_amount', 'returned_by', 'remarks'];
    protected $guarded = ['id'];

    public function fixedAsset():BelongsTo
    {
        return $this->belongsTo(FixedAsset::class);
    }

    public function liquidAsset():BelongsTo
    {
        return $this->belongsTo(LiquidAsset::class);
    }

    public function unit(): BelongsTo
    {
        return $this->belongsTo(Unit::class);
    }

    public $timestamps = false;
}
