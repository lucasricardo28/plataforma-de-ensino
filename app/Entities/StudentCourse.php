<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class StudentCourse.
 *
 * @package namespace App\Entities;
 */
class StudentCourse extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['student_id','course_id'];

    public function student(){
        return $this->belongsTo(Student::class, 'student_id');
    }

}
