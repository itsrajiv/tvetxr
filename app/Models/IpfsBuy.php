<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IpfsBuy extends Model
{
    use HasFactory;

    public function user() {
        return $this->hasOne('App\Models\User', 'id', 'id_user');
    }

    public function ipfsuser() {
        return $this->hasOne('App\Models\IpfsUser', 'id', 'id_ipfs_user');
    }
    
    public function course() {
        return $this->hasOne('App\Models\Course', 'id', 'id_courses');
    }
}
