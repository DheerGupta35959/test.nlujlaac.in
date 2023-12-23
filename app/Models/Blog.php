<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
   public $timestamps = false;
   protected $guarded = []; 
    
    protected $table = 'blog';

    protected $fillable = [
        'Title',
        'ShortDescription',
        'Content',
        'IsArchived',
        'IsDeleted',
        'HasAttachment',
        'AuthorName',
        'CommentStatus',
        'CreatedOn',
        'CreatedBy',
        'UpdatedBy',
        'UpdatedOn'
    ];

    protected $primaryKey = 'Id';
}
