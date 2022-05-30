<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Kyslik\ColumnSortable\Sortable;

class Order extends Model
{
    use HasFactory, Sortable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'customer_id',
        'responsible_id',
        'amount',
        'discount',
        'discount_type',
        'payment_type',
        'status',
        'comment',
    ];

    public $sortable = [
        'id',
        'amount',
        'discount',
        'discount_type',
        'payment_type',
        'status',
        'created_at',
    ];

    /**
     * Get the items for the order.
     */
    public function items(): HasMany
    {
        return $this->hasMany(Item::class)->orderBy('id');
    }

    /**
     * The users that belong to the order.
     *
     * @return BelongsToMany
     */
    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }
}
