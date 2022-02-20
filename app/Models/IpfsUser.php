<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IpfsUser extends Model
{
    use HasFactory;

    public function user() {
        return $this->hasOne('App\Models\User', 'id', 'id_user');
    }

    public function ipfsresource() {
        return $this->hasOne('App\Models\IpfsResources', 'id', 'id_ipfsresource');
    }
}
