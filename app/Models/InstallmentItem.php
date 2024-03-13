<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class InstallmentItem extends Model
{
    use HasFactory;

    protected $tables = 'installment_items';
    protected $guarded = [];

    public function property(): BelongsTo
    {
        return $this->belongsTo(Property::class);
    }

    public function installmentUser(): HasOne
    {
        return $this->hasOne(InstallmentUser::class);
    }
}
