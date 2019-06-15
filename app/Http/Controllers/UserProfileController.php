<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Userprofile;
use Auth;
use Carbon\Carbon;
use Image;
use DB;
use App\User as User;

class UserProfileController extends Controller
{
   
public function __construct()
{
    $this->middleware('auth');
   // $this->middleware('blogadmin');

}
public function index()
    {
        $user = Auth::user();
        $userEmail = $user->email;
      
        return view('userprofile');
    }

    public function userprofile_getdata(){
        $user = Auth::user();
        $userEmail = $user->email;

      
        
        $user_master = DB::select("SELECT `first_name`,`last_name`, `email_id`, `phone_no`, `date_of_birth`, `gender`, `time_zone` FROM user_master where email_id = '$userEmail'");
         //$user_master;
        return view('userprofile')->with(compact('user_master'));
    }
    public function updateUserprofile(Request $request){
        $user = Auth::user();
         $user = new User;
        $userEmail = $user->email;

        $first_name = $request->first_name;
        $last_name = $request->last_name;
        $email_id = $request->email_id;
        $phone_no = $request->phone_no;
        $date_of_birth = $request->date_of_birth;
        $gender = $request->gender;
        $time_zone = $request->time_zone;
        // $hidenId = $request->hidenId;
        // $user->email = $request->email_id;
        // $user->save();
        
        DB::update("UPDATE user_master SET first_name ='$first_name',last_name ='$last_name',email_id ='$email_id',phone_no ='$phone_no',date_of_birth ='$date_of_birth',gender ='$gender',time_zone ='$time_zone' where email_id = '$userEmail'");
        return "Updated";
      
    }
    public function changePassword(Request $request){

        $user = Auth::user();
        $userEmail = $user->email;
        $this->validate($request, [
           
            'password' => 'required|confirmed|max:8|min:6',
        ]);
        
        $password = $request->password;
        DB::update("UPDATE user_master SET password ='$password' where email_id = '$userEmail'");
        return "change password";
    }

// user profile education section
    public function education(Request $request){
        // dd($request->all());
        $user = Auth::user();
        $user_code =$user->name;
        
        $today = Carbon::now();
        $school = $request->school;
        $board = $request->board;
        $class_name  = $request->class_name;
        $year_passing = $request->year_passing;
        $father_name = $request->father_name;
        $father_profession = $request->father_profession;
        $mother_name = $request->mother_name;
        $mother_profession = $request->mother_profession;
        $current_subject1= $request->current_subject1;
        $current_marks1 = $request->current_marks1;
        $current_subject2 = $request->current_subject2;
        $current_marks2 = $request->current_marks2;
        $current_subject3 = $request->current_subject3;
        $current_marks3 = $request->current_marks3;
        $current_subject4 = $request->current_subject4;
        $current_marks4 = $request->current_marks4;
        $current_subject5 = $request->current_subject5;
        $current_marks5 = $request->current_marks5;
        $current_subject6 = $request->current_subject6;
        $current_marks6 = $request->current_marks6;
        $previous_subject1 = $request->previous_subject1;
        $previous_marks1 = $request->previous_marks1;
        $previous_subject2 = $request->previous_subject2;
        $previous_marks2 = $request->previous_marks2;
        $previous_subject3 = $request->previous_subject3;
        $previous_marks3 = $request->previous_marks3;
        $previous_subject4 = $request->previous_subject4;
        $previous_marks4 = $request->previous_marks4;
        $previous_subject5 = $request->previous_subject5;
        $previous_marks5 = $request->previous_marks5;
        $previous_subject6 = $request->previous_subject6;
        $previous_marks6 = $request->previous_marks6;
        $current_img = $request->current_img;
        
        $previous_img = $request->previous_img;
       $current_img = time().'.' . explode('/', explode(':', substr($current_img, 0, strpos($current_img, ';')))[0])[0];
       return $current_img;
       $current_img->move(public_path('images/current_year_marksheet/'), $current_img);
       return $current_img;
        $insert = DB::insert("INSERT INTO `user_profile`(`school`, `board`, `class_name`, `year_passing`, `father_name`, `father_profession`, `mother_name`, `mother_profession` ,`date`, `current_subject1`, `current_marks1`, `current_subject2`, `current_marks2`, `current_subject3`, `current_marks3`, `current_subject4` ,`current_marks4`, `current_subject5`, `current_marks5`, `current_subject6`, `current_marks6`, `previous_subject1`, `previous_marks1`, `previous_subject2` ,`previous_marks2`, `previous_subject3`, `previous_marks3`, `previous_subject4`, `previous_marks4`, `previous_subject5`, `previous_marks5`, `previous_subject6` ,`previous_marks6`,`current_img`,`previous_img`) VALUES ('$school','$board','$class_name','$year_passing','$father_name','$father_profession','$mother_name','$mother_profession','$today','$current_subject1','$current_marks1','$current_subject2','$current_marks2','$current_subject3','$current_marks3','$current_subject4','$current_marks4','$current_subject5','$current_marks5','$current_subject6','$current_marks6','$previous_subject1','$previous_marks1','$previous_subject2','$previous_marks2','$previous_subject3','$previous_marks3','$previous_subject4','$previous_marks4','$previous_subject5','$previous_marks5','$previous_subject6','$previous_marks6','$current_img','$previous_img')");
         return 'done';
    }

}
