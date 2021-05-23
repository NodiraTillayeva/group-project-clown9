<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteUsers extends Model
{
    /*public function user()
    {
        return $this->belongsTo(User::class);
    }*/
    use HasFactory;
    protected $fillable = ['Username','FullName','Password','DateOfBirth','PostalCode','City', 'PhoneNumber','email','Passport'];

}
