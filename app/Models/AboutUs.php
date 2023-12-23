<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class AboutUs extends Model
{
   public $timestamps = false;
   protected $guarded = []; 
    
    protected $table = 'aboutus';

    protected $fillable = [
        'Data',
        'CreatedOn',
        'CreatedBy',
        'UpdatedBy',
        'UpdatedOn'
    ];

    protected $primaryKey = 'Id';
}
