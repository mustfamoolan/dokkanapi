<?php
 
namespace App\Models;
 
use Filament\Models\Contracts\FilamentUser;
use Filament\Panel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable implements FilamentUser
{
    use HasFactory, Notifiable, HasRoles;

    public function canAccessPanel(Panel $panel): bool
    {
        if ($this->status !== 'active') {
            return false;
        }

        return $this->hasRole('Super Admin') || $this->hasPermissionTo('access_admin');
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'phone',
        'employee_id',
        'password',
        'status',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'password' => 'hashed',
        ];
    }

    /**
     * Auto-generate employee_id starting with 'a' on creation
     */
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($user) {
            if (!$user->employee_id) {
                $lastUser = static::orderBy('id', 'desc')->first();
                $lastId = $lastUser ? (int) substr($lastUser->employee_id, 1) : 0;
                $user->employee_id = 'a' . ($lastId + 1);
            }
        });
    }
}
