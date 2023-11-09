<?php

namespace App\Policies;

use App\Models\Station;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class StationPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->hasPermissionTo('Senarai balai');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Station $station): bool
    {
        return $user->hasPermissionTo('Lihat balai');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->hasPermissionTo('Tambah balai');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Station $station): bool
    {
        return $user->hasPermissionTo('Kemaskini balai');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Station $station): bool
    {
        return $user->hasPermissionTo('Padam balai');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Station $station): bool
    {
        //abort for now
        abort(404);
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Station $station): bool
    {
        //abort for now
        abort(404);
    }
}