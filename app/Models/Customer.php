<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model 
{
    use HasFactory;
    protected $table = 'customers';

    public $timestamps = false;
    protected $fillable=[
        'name',
        'type',
        'email',
        'address',
        'city',
        'state',
        'postal_code'
    ];
    // public function invoice(){
    //    return $this->belongsTo(Invoice::class);
    // }
}
