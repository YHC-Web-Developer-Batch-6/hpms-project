<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class InstallmentUser extends Model
{
    use HasFactory;

    protected $tables = 'installment_users';
    protected $guarded = [];

    public function installmentPayment(): HasMany
    {
        return $this->hasMany(InstallmentPayment::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function installmentItem(): BelongsTo
    {
        return $this->belongsTo(InstallmentItem::class);
    }
}
