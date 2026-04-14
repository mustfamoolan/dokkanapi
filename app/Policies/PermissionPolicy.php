<?php

namespace App\Policies;

use App\Models\User;
use Spatie\Permission\Models\Permission;

class PermissionPolicy extends BasePolicy
{
    public function viewAny(User $user): bool
    {
        // For simplicity, we use roles permissions to cover permissions too
        return $user->hasPermissionTo('view_roles');
    }

    public function view(User $user, Permission $model): bool
    {
        return $user->hasPermissionTo('view_roles');
    }

    public function create(User $user): bool
    {
        return $user->hasPermissionTo('create_roles');
    }

    public function update(User $user, Permission $model): bool
    {
        return $user->hasPermissionTo('edit_roles');
    }

    public function delete(User $user, Permission $model): bool
    {
        return $user->hasPermissionTo('delete_roles');
    }
}
