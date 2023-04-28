<?php

namespace App\Http\Controllers;

use App\Models\Employee_Detail;
use Illuminate\Http\Request;

class EmployeeDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request['search'] ?? '';
        if($search != ''){
         
            $emps = Employee_detail::where('username','LIKE',"%$search%")->Orwhere('email','LIKE',"%$search%")->paginate(10);
        }else{
            $emps = Employee_Detail::paginate(10);
        }
      //  $emps = Employee_Detail::get();
      //  $emps = Employee_Detail::paginate(2);
      $data = compact('emps','search');
        return view('employee_data.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('employee_data.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $request->validate([
            'username' => 'required',
             'email' => 'required|email',
              'gender' => 'required',
               'phone' => 'required',
                  
         ]);

         $data = new Employee_Detail;
         $data->username = $request->username;
         $data->email = $request->email;
         $data->phone = $request->phone;
         $data->gender= $request->gender;
         $data->save();

        return redirect('/emp_data')->with('success','Submitted Successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Employee_Detail $employee_Detail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee_Detail $employee_Detail)
    {
        
        return view('employee_data.edit')->with(compact('employee_Detail'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Employee_Detail $employee_Detail)
    {
       
        $request->validate([
            'username' => 'required',
             'email' => 'required|email',
              'gender' => 'required',
               'phone' => 'required',
                  
         ]);

        // $data = Employee_Detail::find($id);
        $employee_Detail->username = $request->username;
        $employee_Detail->email = $request->email;
        $employee_Detail->phone = $request->phone;
        $employee_Detail->gender= $request->gender;
        $employee_Detail->update();

        return redirect('/emp_data')->with('success','Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee_Detail $employee_Detail)
    {
        
       // $user=User::find(1);
        $employee_Detail->delete(); //returns true/false
        return redirect('/emp_data')->with('success','Updated Successfully!');
    }
}
