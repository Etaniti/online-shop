<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Storage;

class ProductVariant extends Model
{
    use HasFactory;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [
        'id', 'created_at', 'updated_at',
    ];

    /**
     * Get the link for product variant photo.
     *
     * @param string $photo
     * @return string
     */
    public function getImageLink(string $photo): string
    {
        return Storage::url($photo);
    }

    /**
     * Get the product that owns the product variant.
     *
     * @return BelongsTo
     */
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    /**
     * Get the product variant feature instances that belong to the product variant.
     *
     * @return HasMany
     */
    public function productVariantFeatures(): HasMany
    {
        return $this->hasMany(ProductVariantFeature::class);
    }
}

