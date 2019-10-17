<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Validation\ValidatesRequests;

class ProductSale extends Model
{
    use ValidatesRequests;

    protected $fillable = [
        'product_id',
        'sale_id',
        'quantity',
        'price',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function productSale()
    {
        return $this->belongsTo(ProductSale::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function sale()
    {
        return $this->belongsTo(Sale::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }


}
