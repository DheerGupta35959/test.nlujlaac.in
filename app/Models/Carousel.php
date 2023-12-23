<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Carousel extends Model
{
   public $timestamps = false;
   protected $guarded = []; 
    
    protected $table = 'carousels';

    protected $fillable = [
        'Name',
        'Photo',
        'IsActive',
        'IsDeleted',
        'CreatedOn',
        'UpdatedBy',
        'UpdatedOn'        
    ];

    protected $primaryKey = 'Id';
}
