<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class InstallmentPayment extends Model
{
    use HasFactory;

    protected $tables = 'installment_payments';
    protected $guarded = [];

    public function transaction(): BelongsTo
    {
        return $this->belongsTo(Transaction::class);
    }

    public function installmentUser(): BelongsTo
    {
        return $this->belongsTo(InstallmentUser::class);
    }
}
