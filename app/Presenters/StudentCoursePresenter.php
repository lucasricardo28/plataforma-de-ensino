<?php

namespace App\Presenters;

use App\Transformers\StudentCourseTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class StudentCoursePresenter.
 *
 * @package namespace App\Presenters;
 */
class StudentCoursePresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new StudentCourseTransformer();
    }
}
