<?php

namespace App\Policies;


use App\Models\Producto;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class ProductoPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Producto $producto)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->id == 1; //prueba para que solo este usuario pueda crear registros de productos
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, producto $producto)
    {

        //
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, producto $producto)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, producto $producto)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, producto $producto)
    {
        //
    }
}