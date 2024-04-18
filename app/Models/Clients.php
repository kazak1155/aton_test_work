<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'surname',
        'name',
        'secondName',
        'birthday',
        'birthday',
        'inn',
        'user_id',
        'status',
    ];

    public function userHead() {

        return $this->belongsTo(User::class, 'user_id','id');
    }
}
