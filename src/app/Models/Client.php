<?php

namespace Gomee\Business\Models;
use Gomee\Models\Model;
class Client extends Model
{
    public $table = 'clients';
    public $fillable = ['name', 'email', 'phone_number', 'avatar', 'job'];

    
    
}
