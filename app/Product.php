<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Validation\ValidatesRequests;

class Product extends Model
{
    use ValidatesRequests;

    protected $fillable = [
        'article_id',
        'photo',
        'name',
        'description',
        'quantity',
        'price',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function article()
    {
        return $this->belongsTo(Article::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productSales()
    {
        return $this->hasMany(ProductSale::class);
    }
}
