<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\StudentCourseRepository;
use App\Entities\StudentCourse;
use App\Validators\StudentCourseValidator;

/**
 * Class StudentCourseRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class StudentCourseRepositoryEloquent extends BaseRepository implements StudentCourseRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return StudentCourse::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return StudentCourseValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
