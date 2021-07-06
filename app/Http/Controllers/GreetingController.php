<?php 

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class GreetingController extends Controller {

    public function collectVisitorData(Request $request) {
        return view('collectData');
    }

	public function salaryConverter(Request $request) {
        $salario = $request->input('salary');
        
        return view('greeting')->with('hourSalary', $this->convertSalaryToHour($salario));
    }

    private function convertSalaryToHour(Int $salary) {
        return round($salary/220);
    }

}

?>