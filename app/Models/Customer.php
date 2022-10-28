<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Customer extends Model
{
    use Notifiable, HasApiTokens, HasFactory, SoftDeletes;
    /**
     * These are the follow attributes that can be fillable by the customer
     *
     * @var fillable - This is an array of the data that the customer will be inputting.
     * @author Ibrahim Ahmad <210029073@aston.ac.uk>
     */
    protected $fillable = [
        'customer_first_name',
        'customer_last_name',
        'customer_address_line_1',
        'customer_address_line_2',
        'customer_postcode',
        'username',
        'password',
    ];

    /**
     * We want to protect the following attributes of the customer
     * as we do not want these details to be public
     * @author Ibrahim Ahmad <210029073@aston.ac.uk>
     */
    protected $hidden = [
        'password'
    ];

    /**
     * The table that we will be working with.
     * @author Ibrahim Ahmad <210029073@aston.ac.uk>
     */
    protected $table = 'customers';

    /**
     * The primary key for the customer table
     * @author Ibrahim Ahmad <210029073@aston.ac.uk>
     */
    protected $primaryKey = 'customer_id';

}
