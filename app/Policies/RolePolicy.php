<?php

namespace App\Policies;

use App\Models\User;
use Spatie\Permission\Models\Role;

class RolePolicy extends BasePolicy
{
    public function viewAny(User $user): bool
    {
        return $user->hasPermissionTo('view_roles');
    }

    public function view(User $user, Role $model): bool
    {
        return $user->hasPermissionTo('view_roles');
    }

    public function create(User $user): bool
    {
        return $user->hasPermissionTo('create_roles');
    }

    public function update(User $user, Role $model): bool
    {
        return $user->hasPermissionTo('edit_roles');
    }

    public function delete(User $user, Role $model): bool
    {
        return $user->hasPermissionTo('delete_roles');
    }
}
