<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\blog;
use App\Models\User;
use App\Models\Doctor;
use App\Models\Poster;
use App\Models\gallery;
use App\Models\service;
use App\Models\appoinment;
use App\Models\Department;
use App\Models\MrdMain;
use App\Models\MrdService;
use App\Models\Patientinfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;

class AdminController extends Controller
{
    public function addDepartment(Request $request)
    {
        $request->validate([
            'dept_name' => 'required',
            
        ]);

        $value = new Department();

        $value->dept_name = $request->dept_name;
        $value->description = $request->description;
        
         $result = $value->save();
         return back()->with('success', 'you have registered successfully');
        
      

    }
    public function addDoctor(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $value = new Doctor();

        $value->name = $request->name;
        $value->department_id = $request->dept_id;
        $value->designation = $request->designation;
        $value->qualification = $request->qualification;
        $value->visiting_time = $request->visit_time;
        $value->institution = $request->institution;

        if ($request->hasFile('images')) {
            $file = $request->file('images');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;

            // Resize the image
            $image = Image::make($file)->resize(500, 500, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });

            // Save the resized image to the specified location
            $image->save('uploads/doctor/' . $filename);

            $value->images = $filename;
        }
        $result = $value->save();
        return back()->with('success', 'Doctor was registered successfully');
        
      

    }




    public function appoinment(Request $request)
    {
        $value = new appoinment();

        $value->patient_name = $request->patient_name;
        $value->phone_number = $request->phone_number;
        $value->visit_date = date('Y-m-d H:i:s', strtotime($request->visit_date));
        $value->department_id = $request->dept_id;
        $value->doctor_id = $request->parent_id;
        $value->date_of_birth = $request->date_of_birth;
        $value->gender = $request->flexRadioDefault;
        $value->messege = $request->messege;
        $value->visit_type = $request->visit_type;
        
         $result = $value->save();
         
         if($result)
         {
         return redirect('/')->with('success', 'you have Appointed successfully');
         }
         else{
            return back()->with('fail', 'Something Wrong Try again later');
         }
        
      

    }



    public function addContent(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            
            'content' => 'required',
           

        ]);

        $value = new gallery();

        $value->title = $request->title;
        $value->description = $request->description;
       
       
        if($request->hasfile('content'))
        {
            $file=$request->file('content');
            $ext = $file->getClientOriginalExtension();
            $filename= time().'.'.$ext;
            $file->move('uploads/content/', $filename);
            $value->content = $filename;

                }
         $result = $value->save();
         
         return back()->with('success', 'you have registered successfully');
        
      

    }

    public function deptForAddDoctor()
    {
        $dept=array();
        $dept = Department::all();
        return view('admin.doctors', ['departments' => $dept]);
        
      

    }

    public function department()
    {
        $dept=array();
        $dept = Department::all();
        $data = Poster::latest()->first();
        return view('frontend.index')->with('departments',$dept)->with('poster',$data);
    
        
      

    }
    
    
    public function Showdoc()
    {
        $dept=array();
        $dept = Department::all();
        $data = Poster::latest()->first();
        return view('frontend.mobileapp')->with('departments',$dept)->with('poster',$data);
    
        
      

    }

   public function addAdmin(Request $request)
    {
        $request->validate([

            'email' => 'required|email|',
            'password' => 'required',
        ]);

        $value = new User();


        $value->name = $request->name;
        $value->email = $request->email;
        
        $value->role_as = 1;
        $value->password = Hash::make($request->password);
        $userCount = User::where('email', $value->email);
        if ($userCount->count()) {
            return back()->with('fail', 'This email is already exist');
        } else {

            $result = $value->save();
        }

        if ($result) {
            return back()->with('success', 'you have registered successfully');
        } else {
            return back()->with('fail', 'Something wrong');
        }
    }
    
    
    public function addPatientinfo(Request $request)
    {
        $request->validate([
            'description' => 'required',
           
        ]);

        $value = new Patientinfo();

        $value->description = $request->description;
        $value->rate = $request->rate;
       
         $result = $value->save();
         return back()->with('success', 'you have registered successfully');
        
      

    }


    public function addService(Request $request)
    {

        $value = new service();

        $value->title = $request->title;

        if ($request->hasFile('logo')) {
            $file = $request->file('logo');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;

            // Resize the image
            $image = Image::make($file)->resize(1000, 1000, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });

            // Save the resized image to the specified location
            $image->save('uploads/content/' . $filename);

            $value->logo = $filename;
        }
         $result = $value->save();
         return back()->with('success', 'you have registered successfully');
        
      

    }


      public function parents($id)
    {
        $data = DB::table('doctors')->where('department_id', $id)->select('id','name')->get();
        
        return json_encode($data);
    }



    
    public function doctorlist()
    {

        $dept=array();
        $dept = Department::all();

          $data=Doctor::join('departments','doctors.department_id', '=', 'departments.id')
          ->select('doctors.*','departments.dept_name',)
          ->get();

        return view('admin.doctors')->with('doctors',$data)->with('departments',$dept);;
        
        

    }



    public function allInfo()
    {

        
        $dept = Department::count();
        $doc = Doctor::count();
        $app = appoinment::count();

      

        return view('dashboard')->with('departments',$dept)->with('doctors',$doc)->with('appoinment',$app);
        
        

    }
    public function Poster(Request $request)
    {
        $value = new Poster();

        
        if($request->hasfile('image'))
        {
            $file=$request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename=time().'.'.$ext;
            $file->move('uploads/content/', $filename);
            $value->image = $filename;
          

        }
         $result = $value->save();
      
         return back()->with('success', 'you have registered successfully');
        
        
        
        

    }


    public function allPoster()
    {
       
        $data = Poster::orderBy('created_at', 'desc')->get();
        
        
        return view('admin.addPoster')->with('poster',$data);
        

    }



    public function allAdmin()
    {

        
        $data = User::all();
        
      

        return view('admin.addAdmin')->with('admin',$data);
        
        

    }
    
    public function allPatientInfo ()
    {

        
        $data = Patientinfo::all();
        
      

        return view('admin.addPatientinfo')->with('info',$data);
        
        

    }


    public function allService ()
    {

        
        $data = service::all();
        
      

        return view('admin.addService')->with('service',$data);
        
        

    }

    
    public function allDepartment ()
    {

        
        $data = Department::all();
        
      

        return view('admin.department')->with('dept',$data);
        
        

    }

    public function allContent ()
    {

        
        $data = gallery::all();
        
      

        return view('admin.content')->with('content',$data);
        
        

    }


    public function allBlog ()
    {

        
        $data = blog::all();
        
      

        return view('admin.addBlog')->with('blogs',$data);
        
        

    }



    public function allAppoinment ()
    {

        $data=appoinment::join('departments','departments.id', '=', 'appoinments.department_id')
          ->join('doctors','doctors.id', '=', 'appoinments.doctor_id')
          ->select('appoinments.*','departments.dept_name','doctors.name')
          ->orderBy('appoinments.created_at','desc')
          ->paginate(10);
     
        return view('admin.appoinment')->with('apps',$data);
        
        

    }

    public function docAppoinment($id)
    {

        $data=appoinment::join('departments','departments.id', '=', 'appoinments.department_id')
          ->join('doctors','doctors.id', '=', 'appoinments.doctor_id')
          
          ->select('appoinments.*','departments.dept_name','doctors.name' )
          ->where('appoinments.doctor_id', $id)
        
          ->orderBy('appoinments.created_at','desc')
          ->paginate(10);
     
        return view('admin.appoinment')->with('apps',$data);
        
        

    }



    public function searchBydate(Request $request)
    {

     

        $date = $request->visit_date;
        $data =appoinment::join('departments','departments.id', '=', 'appoinments.department_id')
          ->join('doctors','doctors.id', '=', 'appoinments.doctor_id')
          ->select('appoinments.*','departments.dept_name','doctors.name' )
          ->where('visit_date', $date)
           ->orderBy('appoinments.created_at','desc')
          ->paginate(10);

      
        
          return view('admin.appoinment')->with('apps',$data);
        
      

    }

    
    

    
    
    

    
    public function addBlog(Request $request)
    {
       return $request->image;
        $value = new blog();  

        $value->title = $request->name;
        $value->description = $request->blog;

        if($request->hasfile('image'))
        {
            $file=$request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename=time().'.'.$ext;
            $file->move('uploads/content/', $filename);
            $value->image = $filename;
          

        }
    
        
         $result = $value->save();
         return back()->with('success', 'you have registered successfully');
        
        

    }


    public function blogDelete($id)
    {
        $data = blog::find($id);
        $data->delete();
        return back()->with('success', 'you have deleted successfully');
        
      

    }

    public function infoDelete($id)
    {
        $data = Patientinfo::find($id);
        $data->delete();
        return back()->with('success', 'you have deleted successfully'); 

    }
    public function posterDelete($id)
    {
        $data = Poster::find($id);
        $data->delete();
        return back()->with('success', 'you have deleted successfully'); 

    }

    public function doctorDelete($id)
    {
        $data = Doctor::find($id);
        $data->delete();
        return back()->with('success', 'you have deleted successfully'); 

    }


    public function departmentDelete($id)
    {
        $data = Department::find($id);
        $data->delete();
        return back()->with('success', 'you have deleted successfully'); 

    }

    public function photoDelete($id)
    {
        $data = gallery::find($id);
        $data->delete();
        return back()->with('success', 'you have deleted successfully'); 

    }


    public function serviceDelete($id)
    {
        $data = service::find($id);
        $data->delete();
        return back()->with('success', 'you have deleted successfully'); 

    }


    public function appoinmentDelete($id)
    {
        $data = appoinment::find($id);
        $data->delete();
        return back()->with('success', 'you have deleted successfully'); 

    }

    public function editBlog($id)
    {
        $data = blog::find($id);
       
       
         return view('admin.editBlog',['data'=>$data]);

    }

    
    public function editBlogfinal(Request $request)
    {     
       
        $value =  blog::find($request->id);  

        $value->title = $request->name;
        $value->description = $request->blog;

        if($request->hasfile('image'))
        {
            $file=$request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename=time().'.'.$ext;
            $file->move('uploads/content/', $filename);
            $value->image = $filename;
          

        }
    
        
         $result = $value->save();
         return redirect('ad_blog');
        
        

    }


    public function editDoctor($id)
    {
        $dept = Department::all();

          $data=Doctor::join('departments','doctors.department_id', '=', 'departments.id')
          ->select('doctors.*','departments.dept_name',)
          ->find($id);
       
       
         return view('admin.editDoctor',['data'=>$data])->with('departments',$dept);

    }

    
    public function editDoctorfinal(Request $request)
    {   
        
        $value =  Doctor::find($request->id);  

        $value->name = $request->name;
        $value->department_id = $request->dept_id;
        $value->designation = $request->designation;
        $value->qualification = $request->qualification;
        $value->visiting_time = $request->visit_time;
        $value->institution = $request->institution;
     
        
        if($request->hasfile('image'))
        {
            $file=$request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename= time().'.'.$ext;
            $file->move('uploads/doctor/', $filename);
            $value->images = $filename;

                }

            
             $result = $value->save();
      
         
             return redirect('ad_doctor');
        

    }
    
    
    public function docs($doctID)
    {
        $data = DB::table('doctors')->where('id', $doctID)->select('id','name','off_day')->get();
       
        
        return $data;
    }


    public function allAbout()
    {
       
        $data = About::orderBy('id', 'desc')->get();
        
        
        return view('admin.addAbout')->with('about',$data);
        

    }

    public function aboutAdd(Request $request)
    {
        DB::select(DB::raw("TRUNCATE TABLE abouts"));
        $about= new About();
        $about->content= $request->content;
        $parsedUrl = parse_url($request->video_link);
        $final_link='';
        if (isset($parsedUrl['query'])) {
            parse_str($parsedUrl['query'], $queryParams);
            if (isset($queryParams['v'])) {
                $final_link='https://www.youtube.com/embed/' . $queryParams['v'].'?autoplay=1&loop=1&mute=1';
            }
        }
        $about->video_link= $final_link;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;

            // Resize the image
            $image = Image::make($file)->resize(1000, 1000, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });

            // Save the resized image to the specified location
            $image->save('uploads/content/' . $filename);

            $about->image = $filename;
        }

        $about->save();

        return back()->with('success', 'About Page Contents are saved successfully'); 


    }


    public function mrd()
    {
       
        $data = MrdService::orderBy('id', 'desc')->get();
        
        
        return view('admin.mrd')->with('services',$data);
        

    }

    public function mrdAdd(Request $request)
    {
        $mrd= new MrdService();
        $mrd->name= $request->name;
        $mrd->fee= $request->fee;
        $mrd->save();

        return back()->with('success', 'About Page Contents are saved successfully'); 


    }

    public function mrdDelete($id)
    {
       
        if(MrdService::find($id)->delete())
        {
            return back()->with('success', 'Removed!'); 
        }
        else
        {
            return back()->with('error', 'Unsuccessful'); 
        }
    }

    public function mrdMain()
    {
       
        $data = MrdMain::orderBy('id', 'desc')->get();
        
        
        return view('admin.mrd_content')->with('contents',$data);
        

    }


    public function mrdMainAdd(Request $request)
    {
        DB::select(DB::raw("TRUNCATE table mrd_mains"));
        $mrd= new MrdMain();
        $mrd->bc_form= $request->bc_form;
        $mrd->dc_form= $request->dc_form;
        $mrd->content= $request->content;
        $mrd->save();

        return back()->with('success', 'About Page Contents are saved successfully'); 

    }


    public function resizeImages(Request $request)
    {
        // Hard-coded directory
        $directory = base_path('uploads/doctor');
        $width = 500;
        $height = 500;

        if (!File::isDirectory($directory)) {
            return response()->json(['error' => "The directory {$directory} does not exist."], 400);
        }

        $files = File::files($directory);
        $imageExtensions = ['jpg', 'jpeg', 'png', 'gif', 'JPG'];

        foreach ($files as $file) {
            if (in_array($file->getExtension(), $imageExtensions)) {
                $image = Image::make($file->getRealPath());
                $image->resize($width, $height, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                });
                $image->save($file->getRealPath());
            }
        }



        $directory = base_path('uploads/content');
        $width = 1900;
        $height = 1900;

        if (!File::isDirectory($directory)) {
            return response()->json(['error' => "The directory {$directory} does not exist."], 400);
        }

        $files = File::files($directory);
        $imageExtensions = ['jpg', 'jpeg', 'png', 'gif', 'JPG'];

        foreach ($files as $file) {
            if (in_array($file->getExtension(), $imageExtensions)) {
                $image = Image::make($file->getRealPath());
                $image->resize($width, $height, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                });
                $image->save($file->getRealPath());
            }
        }

        echo "all good!!"; die;
    }


}
