<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Entities\StudentCourse;

/**
 * Class StudentCourseTransformer.
 *
 * @package namespace App\Transformers;
 */
class StudentCourseTransformer extends TransformerAbstract
{
    /**
     * Transform the StudentCourse entity.
     *
     * @param \App\Entities\StudentCourse $model
     *
     * @return array
     */
    public function transform(StudentCourse $model)
    {
        return [
            'id'         => (int) $model->id,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
