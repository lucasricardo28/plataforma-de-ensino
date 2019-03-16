<?php

namespace App\Http\Controllers;

use App\Entities\Course;
use App\Entities\Student;
use Illuminate\Http\Request;

use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\StudentCourseCreateRequest;
use App\Http\Requests\StudentCourseUpdateRequest;
use App\Repositories\StudentCourseRepository;
use App\Validators\StudentCourseValidator;

/**
 * Class StudentCoursesController.
 *
 * @package namespace App\Http\Controllers;
 */
class StudentCoursesController extends Controller
{
    /**
     * @var StudentCourseRepository
     */
    protected $repository;

    /**
     * @var StudentCourseValidator
     */
    protected $validator;

    /**
     * StudentCoursesController constructor.
     *
     * @param StudentCourseRepository $repository
     * @param StudentCourseValidator $validator
     */
    public function __construct(StudentCourseRepository $repository, StudentCourseValidator $validator)
    {
        $this->repository = $repository;
        $this->validator  = $validator;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->repository->pushCriteria(app('Prettus\Repository\Criteria\RequestCriteria'));
        $studentCourses = $this->repository->all();

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $studentCourses,
            ]);
        }

        return view('studentCourses.index', compact('studentCourses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StudentCourseCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(StudentCourseCreateRequest $request)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            $studentCourse = $this->repository->create($request->all());

            $response = [
                'message' => 'Estudante vinculado criado.',
                'data'    => $studentCourse->toArray(),
            ];

            if ($request->wantsJson()) {

                return response()->json($response);
            }

            return redirect()->route('studentCourses.index')->with('message', $response['message']);
        } catch (ValidatorException $e) {
            if ($request->wantsJson()) {
                return response()->json([
                    'error'   => true,
                    'message' => $e->getMessageBag()
                ]);
            }

            return redirect()->back()->withErrors($e->getMessageBag())->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $studentCourse = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $studentCourse,
            ]);
        }

        return view('studentCourses.show', compact('studentCourse'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $studentCourse = $this->repository->find($id);

        return view('studentCourses.edit', compact('studentCourse'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  StudentCourseUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(StudentCourseUpdateRequest $request, $id)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $studentCourse = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'Estudante vinculado atulizado.',
                'data'    => $studentCourse->toArray(),
            ];

            if ($request->wantsJson()) {

                return response()->json($response);
            }

            return redirect()->route('studentCourses.index')->with('message', $response['message']);
        } catch (ValidatorException $e) {

            if ($request->wantsJson()) {

                return response()->json([
                    'error'   => true,
                    'message' => $e->getMessageBag()
                ]);
            }

            return redirect()->back()->withErrors($e->getMessageBag())->withInput();
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleted = $this->repository->delete($id);

        if (request()->wantsJson()) {

            return response()->json([
                'message' => 'StudentCourse deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'Estudante vinculado removido.');
    }

    public function create(){
        $students = collect([''=>'Selecione']);
        $arrayStudents = Student::all();
        foreach ($arrayStudents as $item){
            $students->put($item->id,$item->name);
        }

        $courses = Course::all();
        return view('studentCourses._create',compact('students','courses'));
    }
}
