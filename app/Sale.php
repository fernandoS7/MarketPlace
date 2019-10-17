<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Validation\ValidatesRequests;

class Sale extends Model
{
    use ValidatesRequests;

    protected $fillable = [
        'user_id',
        'total_amount',
        'description',
        'date',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function productSales()
    {
        return $this->hasMany(ProductSale::class);
    }
}
