<?php namespace App\Controllers;

use App\Models\StudentModel;
use CodeIgniter\Controller;

class StudentController extends Controller
{
    public function index()
    {
        $model = new StudentModel();
        $data['students'] = $model->findAll();
        return view('students/index', $data);
    }

    public function create()
    {
        return view('students/create');
    }

    public function store()
    {
        $model = new StudentModel();
        $model->save([
            'name'   => $this->request->getPost('name'),
            'email'  => $this->request->getPost('email'),
            'course' => $this->request->getPost('course'),
        ]);
        return redirect()->to('/students');
    }

    public function delete($id = null)
    {
        $model = new StudentModel();
        $model->delete($id);
        return redirect()->to('/students');
    }
}