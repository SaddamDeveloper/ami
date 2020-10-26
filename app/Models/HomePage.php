<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomePage extends Model
{
    protected $table='homepage';
    protected $fillable = [
    'mobile',
    'email',
    'address',
    'about',
    'fb_id',
    'tw_id',
    'yt_id'];

    protected $primaryKey = 'id';
}
