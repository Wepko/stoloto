<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'last_name',
        'first_name',
        'email',
        'password',
        'location',
        'phone',
        'money',
        'is_admin'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'token_reset_password'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getName() {
        if ($this->first_name && $this->last_name) {
            return "{$this->first_name} {$this->last_name}";
        }
        return null;
    }

    public function money() {
        return $this->money;
    }

    public function getEmail() {
        return $this->email;
    }

    public function isAdmin() {
        return $this->is_admin;
    }

    public function getId() {
        return $this->id;
    }

    public function getLogin() {
        return $this->email;
    }
    
    public function getLPass() {
        return $this->password;
    }

}
