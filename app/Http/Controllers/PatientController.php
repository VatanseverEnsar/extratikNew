<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function index()
    {
        $path = public_path() . "/patient.json";
        $json = json_decode(file_get_contents($path), true);

        $filteredPatients = array_map(function ($patient) {
            return [
                'Id' => $patient['Id'],
                'IdCard' => $patient['IdCard'],
                'Gender' => $patient['Gender'],
                'Name' => $patient['Name'],
                'Surname' => $patient['Surname'],
                'DateOfBirth' => $patient['DateOfBirth'],
                'Address' => $patient['Address'],
                'ContactNumber1' => $patient['ContactNumber1'],
                'ContactNumber2' => $patient['ContactNumber2'],
            ];
        }, $json);

        return view('patients.index', ['patients' => $filteredPatients]);
    }

    public function getPatients()
    {
        $path = public_path() . "/patient.json"; // Adjust the path if necessary
        $json = json_decode(file_get_contents($path), true);
        return response()->json($json);
    }

    public function patientDetail($id)
    {
        $path = public_path() . "/patient.json";
        $json = json_decode(file_get_contents($path), true);

        $patient = collect($json)->firstWhere('Id', $id);

        if (!$patient) {
            abort(404);
        }

        return view('patients.patient-detail', compact('patient'));
    }


}
