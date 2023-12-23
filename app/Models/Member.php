<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
   public $timestamps = false;
   protected $guarded = []; 
    
    protected $table = 'member';

    protected $fillable = [
        'Name',
        'Position',
        'ShortNote',
        'Photo',
        'IsCurrentMember',
        'IsArchive',
        'IsDeleted',
        'CreatedOn',
        'UpdatedBy',
        'UpdatedOn'        
    ];

    protected $primaryKey = 'Id';
}
