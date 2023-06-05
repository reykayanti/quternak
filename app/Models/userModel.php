<?php

namespace App\Models;

use CodeIgniter\Model;

class userModel extends Model
{
    protected $table            = 'users';
    protected $primaryKey       = 'id';
    protected $allowedFields = [
        'id',
        'email',
        'username',
        'fullname',
        'password_hash'
    ];
    protected $usernameExcludes = ['admin'];

}
