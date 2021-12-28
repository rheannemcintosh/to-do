<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Epic extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'epics';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    ];

    /**
     * Get the epic's started at value.
     *
     * @param  string  $value
     * @return string
     */
    public function getStartedAtAttribute($value)
    {
        if ($value == '1970-01-01') {
            return 'Started!';
        } else {
            return $value;
        }
    }
}
