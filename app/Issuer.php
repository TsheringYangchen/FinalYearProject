<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Issuer extends Model
{
    
    protected $fillable = ['Issuername','cid','designation','pno','email','password','confirm_password'];
}
