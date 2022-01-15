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
        'description',
        'complete',
        'never_ending_flag',
        'example',
        'started_at',
        'completed_at',
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'started_at',
        'completed_at'
    ];

    /**
     * Get the epic's started at value.
     *
     * @param  string  $value
     * @return string
     */
//    public function getStartedAtAttribute($value)
//    {
//        if ($value == '1970-01-01') {
//            return 'Started!';
//        } else {
//            return $value;
//        }
//    }

    /**
     * Get the epic's started at value.
     *
     * @param  string  $value
     * @return string
     */
//    public function getCompletedAtAttribute($value)
//    {
//        if ($value) {
//            return $value;
//        } else {
//            return 'Ongoing!';
//        }
//    }

    /**
     * Get the details for each experience.
     */
    public function tasks()
    {
        return $this->hasMany(Task::class);
    }
}
