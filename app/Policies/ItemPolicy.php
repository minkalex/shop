<?php

namespace App\Policies;

use App\Models\Item;
use App\Models\Order;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ItemPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  User  $user
     * @return bool
     */
    public function viewAny(User $user): bool
    {
        return $user->type === 'employee';
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  User  $user
     * @param  Item  $item
     * @return bool
     */
    public function view(User $user, Item $item): bool
    {
        return Order::find($item->order_id)->customer_id === $user->id || $user->type === 'employee';
    }

    /**
     * Determine whether the user can create models.
     *
     * @return bool
     */
    public function create(): bool
    {
        return true;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  User  $user
     * @param  Item  $item
     * @return bool
     */
    public function update(User $user, Item $item): bool
    {
        return Order::find($item->order_id)->customer_id === $user->id || $user->type === 'employee';
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  User  $user
     * @param  Item  $item
     * @return bool
     */
    public function delete(User $user, Item $item): bool
    {
        return Order::find($item->order_id)->customer_id === $user->id || $user->type === 'employee';
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  User  $user
     * @param  Item  $item
     * @return bool
     */
    public function restore(User $user, Item $item): bool
    {
        return Order::find($item->order_id)->customer_id === $user->id || $user->type === 'employee';
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  User  $user
     * @param  Item  $item
     * @return bool
     */
    public function forceDelete(User $user, Item $item): bool
    {
        return Order::find($item->order_id)->customer_id === $user->id || $user->type === 'employee';
    }
}
