<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PatientModel;
use CodeIgniter\Files\File;

class PatientController extends BaseController
{
    protected $helpers = ['form'];

    public function index()
    {
        $data['title'] = "Patients";
        $patient = model(PatientModel::class);

        $patientList = $patient->getPatient();
        $data = ['title' => 'Patients', 'patientList' => $patientList];

        return view('patient/index', $data);
    }

    public function addPatient()
    {
        // request validation
        if ($this->request->is('get')) {
            $data['title'] = 'Add Patient';

            return view('patient/register', $data);
        }

        if (!$this->request->is('post')) {
            return redirect()->back()->withInput();
        }

        // data validation
        $rules = [
            'name' => 'required|max_length[200]|min_length[5]',
            'gender' => 'required',
            'ic_no' => 'required|max_length[12]|min_length[12]|numeric',
            'phone_number' => 'required|max_length[15]|min_length[10]|numeric',
            'address' => 'required',
            'avatar' => [
                'label' => 'avatar',
                'rules' => [
                    'uploaded[avatar]',
                    'is_image[avatar]',
                    'mime_in[avatar,image/jpg,image/jpeg,image/png]',
                    'max_size[avatar,200]',
                    // 'max_dims[avatar,1024,768]',
                ],
            ]
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput();
        }

        // get img
        $img = $this->request->getFile('avatar');

        if (!$img->hasMoved()) {
            // store img
            $filepath = WRITEPATH . 'uploads/' . $img->store('avatar/');
            $fileInfo = new File($filepath);

            $data = $this->request->getPost();
            $data['avatar'] = $fileInfo->getPathname();

            // save data
            $patient = model(PatientModel::class);
            $patient->save($data);

            return redirect()->to('patient');
        }
    }

    public function viewPatient($id = null)
    {
        $patient = model(PatientModel::class);

        $patient_data = $patient->getPatient($id);
        $data = ['title' => 'Patient Details', 'patient' => $patient_data, 'id' => $id];

        return view('patient/view', $data);
    }
}
