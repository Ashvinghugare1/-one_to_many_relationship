<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Listing extends Model
{
    use HasFactory;

    protected $fillable = ['beds',
    'bath',
    'area',
    'city',
    'code',
    'streat',];


    public function owner(): BelongTo {
        return $this->belongsTo(User::class, 'by_user_id');
    }
}
