<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tasks';

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'due_date',
        'started',
        'completed',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'task',
        'description',
        'editing_flag',
        'epic_flag',
        'large_task_flag',
        'cancelled_flag',
        'priority',
        'category',
        'sub_category',
        'sub_sub_category',
        'due_date',
        'started',
        'completed',
    ];
}
