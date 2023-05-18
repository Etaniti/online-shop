<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Attribute extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    ];

    /**
     * Get the abstract products that belong to the attribute.
     *
     * @return BelongsToMany
     */
    public function abstractProducts(): BelongsToMany
    {
        return $this->belongsToMany(Attribute::class);
    }
}
