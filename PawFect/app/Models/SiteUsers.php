<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteUsers extends Model
{
    use HasFactory;
    protected $fillable = ['Username','FullName','password','DateOfBirth','PostalCode','City', 'PhoneNumber','email','Passport'];

}
