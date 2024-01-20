<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AwsCustomer extends Model
{
    use HasFactory;

    protected $fillable = ['subscription_id', 'email', 'customer_id', 'user_id', 'expiry_date'];
}
