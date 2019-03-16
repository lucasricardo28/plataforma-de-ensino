<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Student.
 *
 * @package namespace App\Entities;
 */
class Student extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name','email','date_born'];

    public function courses(){
        return $this->belongsToMany(Course::class, 'student_courses','student_id');
    }

}
