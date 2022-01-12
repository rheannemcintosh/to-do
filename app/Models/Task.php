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
        'started_at',
        'completed_at',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'task',
        'description',
        'epic_id',
        'complete',
        'priority',
        'category_id',
        'sub_category_id',
        'due_date',
        'started_at',
        'completed_at',
        'never_ending_flag',
        'cancelled_flag',
        'example_flag',
    ];

    /**
     * Get the details for each experience.
     */
    public function category()
    {
        return $this->hasOne(Category::class, 'id', 'category_id');
    }

    /**
     * Get the details for each experience.
     */
    public function subCategory()
    {
        return $this->hasOne(Category::class, 'id', 'sub_category_id');
    }

    public function epic(){
        return $this->belongsTo(Epic::class);
    }
}
