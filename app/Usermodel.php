<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Usermodel extends Model 
{
	use  Sortable;
	
    protected $table      = 'details';
    protected $primaryKey = 'id';

    protected $fillable = [
        'name', 'address', 'phone', 'state', 'country'
    ];

    protected $sortable = ['name','address','phone','state', 'country'];
    
}
