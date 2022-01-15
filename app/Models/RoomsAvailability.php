<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RoomsAvailability extends Model
{
   /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'rooms_availability';

    protected $fillable = ['id'];

    protected $appends = ['year_month'];

    public $timestamps = false;

    public function getYearMonthAttribute(){

    	$month = str_pad($this->attributes['month'], 2, '0', STR_PAD_LEFT); 
    	
    	return $this->attributes['year'].'-'.$month;
    }
}
