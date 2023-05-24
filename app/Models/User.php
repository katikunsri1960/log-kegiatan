<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Role;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'role_id',
        'email',
        'password',
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
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function role()
    {
        return $this->belongsTo(Role::class, 'role_id', 'id');
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class, 'role_users', 'user_id', 'role_id')
            ->withPivot('fakprod_id');
    }

    public function fakprodi()
    {
        //check if user has role fakultas
        if ($this->role->id == 3) {
            //hasone through fakultas through role_users
            return $this->hasOneThrough(Fakultas::class, RoleUser::class, 'user_id', 'id', 'id', 'fakprod_id');
        }

        //check if user has role prodi
        if ($this->role->id == 4) {
            //hasone through program_studi through role_users
            return $this->hasOneThrough(ProgramStudi::class, RoleUser::class, 'user_id', 'id', 'id', 'fakprod_id');
        }

    }


}
