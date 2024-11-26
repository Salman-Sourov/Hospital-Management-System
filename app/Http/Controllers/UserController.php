<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\blog;
use App\Models\User;
use App\Models\Doctor;
use App\Models\gallery;
use App\Models\service;
use App\Models\appoinment;
use App\Models\Department;
use App\Models\Patientinfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function ShowDoctor()
    {
      
        $dept = Department::orderBy('dept_name', 'asc')->get();
       
        $doct =  Doctor::join('departments','doctors.department_id', '=', 'departments.id')
       
        ->select('doctors.*', 'departments.dept_name',)
        ->orderBy('name', 'asc')
        ->paginate(12);

        //$doct= json_decode(json_encode($doct), true);
        return view('frontend.doctors')->with('doctors', $doct)->with('departments', $dept);

        //return $doct;
        
       
    }



    public function dept_doc($id)
    {
        $dept = Department::orderBy('dept_name', 'asc')->get();

        $data=Doctor::join('departments','doctors.department_id', '=', 'departments.id')
        ->select('doctors.*', 'departments.dept_name',)
        ->where('department_id',$id)
        ->get();

         
       // return $data;
        return view('frontend.deptDoctor')->with('doctors',$data)->with('departments', $dept);
        ;


    }




    public function doctorProfile($id)
    {
          $data=Doctor::join('departments','doctors.department_id', '=', 'departments.id')
          ->select('doctors.*', 'departments.dept_name',)
        ->where('doctors.id',$id)
        ->get();
         //return $data;
        return view('frontend.singleDoctor')->with('doctors',$data);
        

    }
    public function departmentDetails($id)
    {
          $dept = Department::where('departments.id',$id)->get();
          $alldept = Department::get();
          $data=Doctor::join('departments','doctors.department_id', '=', 'departments.id')
          ->select('doctors.*', 'departments.dept_name',)
        
        ->where('departments.id',$id)
        ->get();

        return view('frontend.departmentDetails')->with('depts',$data)->with('departments', $dept)->with('alldepartments', $alldept);
        
        

    }
    public function pdfLoader()
    {
         
          $data=appoinment::join('departments','departments.id', '=', 'appoinments.department_id')
          ->join('doctors','doctors.id', '=', 'appoinments.doctor_id')
          ->select('appoinments.*','departments.dept_name','doctors.name' )
          ->latest('appoinments.created_at')->first();

       return view('frontend.pdf')->with('infos',$data);
        
        //return  $data;

    }




    public function ShowService()
    {
      
        $data = service::orderBy('title', 'asc')->paginate(12);
       

        //$doct= json_decode(json_encode($doct), true);
        return view('frontend.service')->with('services',$data);

        
        
       
    }




    public function ShowBlogs()
    {
      
        $data = blog::latest()->paginate(4);
       
       
        //$doct= json_decode(json_encode($doct), true);
       return view('frontend.blogs')->with('blogs',$data);

        
        
       
    }
    public function blogDetails($id)
    {
      
        $data = blog::where('blogs.id',$id)
        ->get();
       
      
        //$doct= json_decode(json_encode($doct), true);
       return view('frontend.blog_details')->with('blogs',$data);

        
        
       
    }


    public function ShowPhotos()
    {
      
        $data = gallery::latest()->paginate(12);
       

        //$doct= json_decode(json_encode($doct), true);
        return view('frontend.photos')->with('photos',$data);

        
        
       
    }
    public function pdfDownload()
    {
         
          $data=appoinment::join('departments','departments.id', '=', 'appoinments.department_id')
          ->join('doctors','doctors.id', '=', 'appoinments.doctor_id')
          ->select('appoinments.*','departments.dept_name','doctors.name')
          ->latest('appoinments.created_at')->first();
          
          $path = base_path('logo.png');
          $type = pathinfo($path, PATHINFO_EXTENSION);
          $dat = file_get_contents($path);
          $pic = 'data:image/' .$type. ';base64,' . base64_encode($dat);

          
          $pdf = PDF::setOptions(['isHTML5ParserEnabled' => true, 'isRemoteEnabled' => true])->loadView('frontend.downloadpdf', compact('data','pic'));

       return  $pdf->download('appoinment.pdf');
        
        //return  $data;

    }


    public function patientInfo()
    {
        $data = Patientinfo::orderBy('description', 'asc')->paginate(15);
        
        return  view('frontend.patient_info')->with('infos',$data);

    }



    public function formData($id)
    {
        $data=Doctor::join('departments','doctors.department_id', '=', 'departments.id')
        ->select('doctors.*', 'departments.dept_name',)
        ->where('doctors.id',$id)
        ->get();

   
        return  view('frontend.appoinmentForm')->with('doctors',$data);

    }


}
