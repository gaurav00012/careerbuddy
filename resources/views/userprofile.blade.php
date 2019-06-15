@extends('common.app')
@section('content')
<link rel="stylesheet" href="{{ URL::asset('css/career/dashboard.css') }}" />


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.0/js/bootstrap.min.js"></script>

<div class="container-fluid" id="user_profile">
  <div class="row">
    <section>
        <div class="wizard">
            <div class="wizard-inner">
                <div class="connecting-line"></div>
                <ul class="nav nav-tabs" role="tablist">

                    <li role="presentation" class="active">
                        <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Step 1">
                            <span class="round-tab">

                                <i class="glyphicon glyphicon-folder-open"></i>

                            </span>
                        </a>
                         <p class="text-center">Personal Detail</p>
                    </li>

                    <li role="presentation" class="disabled">
                        <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Step 2">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-pencil"></i>
                            </span>
                        </a>
                        <p class="text-center">Education Detail</p>
                    </li>
                    <li role="presentation" class="disabled">
                        <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Step 3">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-picture"></i>
                            </span>
                        </a>
                        <p class="text-center">Family Detail</p>
                    </li>

                    <li role="presentation" class="disabled">
                        <a href="#complete" data-toggle="tab" aria-controls="complete" role="tab" title="Complete">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-ok"></i>
                            </span>
                        </a>
                        <p class="text-center">Academic Detail</p>
                    </li>
                </ul>
            </div>

            <form role="form">
                <div class="tab-content">
                    <div class="tab-pane active" role="tabpanel" id="step1">
                        <div class="container-fluid">
<section class="content">
                  <div class="row">
                  <div class="col-md-6" id="userprofile_sec1">
          @foreach($user_master as $user_master)
            <div class="box">
                      <div class="box-header">
                        <!-- <i class="fa fa-wrench"></i> -->
                                <h3 class="box-title">Profile</h3>
                      </div><!-- /.box-header -->
                      <form role="form" method="post" action="" id="frmUserProfile" novalidate="novalidate" class="bv-form">
                      <div class="box-body">
                        <div class="form-group has-feedback"> 
          
            <!-- <h1 class="text-center">@{{getUserprofileData.first_name}}</h1> -->
          
                    <label for="txtNewPassword1">Full Name</label>
                    <input type="text" class="form-control" id="first_name"  placeholder="First Name" value="{{$user_master->first_name}}">
                    </div>
                    <div class="form-group has-feedback">
                    <label for="txtNewPassword1">Username</label>
                    <input type="text" class="form-control" id="last_name" value="{{$user_master->last_name}}">
                   </div>
                  <div class="form-group has-feedback">
                  <label class="control-label">Email Id</label>
                  <input type="text" class="form-control" id="email_id" value="{{$user_master->email_id}}" >
                </div>
               <div class="form-group has-feedback">
                  <label class="control-label">Mobile</label>
                  <input type="tel" class="form-control" maxlength="10" id="phone_no" value="{{$user_master->phone_no}}">
                
               </div>
                <div class="form-group has-feedback">
                  <label class="control-label">Date Of Birth</label>
                  <input name="dob" id="dob" type="text" class="form-control" value="{{$user_master->date_of_birth}}">
               </div>
                <div class="form-group has-feedback" style="margin-top: 20px">
                  <label>Gender</label><br>
                  <select class="form-control" id="gender" name="gender" data-bv-field="gender">
                  <option value="{{$user_master->gender}}">{{$user_master->gender}}</option>
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>  
                  </select>
                </div>
                <div class="form-group has-feedback">
                  <label for="timezone">Time Zone</label>
                  <select class="form-control" id="timezone" name="timezone" data-bv-field="timezone">
                    <option value="{{$user_master->time_zone}}">{{$user_master->time_zone}}</option>
                    <option value="5.5">(GMT +5:30) Bombay, Calcutta, Madras, New Delhi</option>
                    <option value="-12.0">(GMT -12:00) Eniwetok, Kwajalein</option>
                        <option value="-11.0">(GMT -11:00) Midway Island, Samoa</option>
                        <option value="-10.0">(GMT -10:00) Hawaii</option>
                        <option value="-9.0">(GMT -9:00) Alaska</option>
                        <option value="-8.0">(GMT -8:00) Pacific Time (US &amp; Canada)</option>
                        <option value="-7.0">(GMT -7:00) Mountain Time (US &amp; Canada)</option>
                        <option value="-6.0">(GMT -6:00) Central Time (US &amp; Canada), Mexico City</option>
                        <option value="-5.0">(GMT -5:00) Eastern Time (US &amp; Canada), Bogota, Lima</option>
                        <option value="-4.0">(GMT -4:00) Atlantic Time (Canada), Caracas, La Paz</option>
                        <option value="-3.5">(GMT -3:30) Newfoundland</option>
                        <option value="-3.0">(GMT -3:00) Brazil, Buenos Aires, Georgetown</option>
                        <option value="-2.0">(GMT -2:00) Mid-Atlantic</option>
                        <option value="-1.0">(GMT -1:00 hour) Azores, Cape Verde Islands</option>
                        <option value="0.0">(GMT) Western Europe Time, London, Lisbon, Casablanca</option>
                        <option value="1.0">(GMT +1:00 hour) Brussels, Copenhagen, Madrid, Paris</option>
                        <option value="2.0">(GMT +2:00) Kaliningrad, South Africa</option>
                        <option value="3.0">(GMT +3:00) Baghdad, Riyadh, Moscow, St. Petersburg</option>
                        <option value="3.5">(GMT +3:30) Tehran</option>
                        <option value="4.0">(GMT +4:00) Abu Dhabi, Muscat, Baku, Tbilisi</option>
                        <option value="4.5">(GMT +4:30) Kabul</option>
                        <option value="5.0">(GMT +5:00) Ekaterinburg, Islamabad, Karachi, Tashkent</option>
                        
                        <option value="5.75">(GMT +5:45) Kathmandu</option>
                        <option value="6.0">(GMT +6:00) Almaty, Dhaka, Colombo</option>
                        <option value="7.0">(GMT +7:00) Bangkok, Hanoi, Jakarta</option>
                        <option value="8.0">(GMT +8:00) Beijing, Perth, Singapore, Hong Kong</option>
                        <option value="9.0">(GMT +9:00) Tokyo, Seoul, Osaka, Sapporo, Yakutsk</option>
                        <option value="9.5">(GMT +9:30) Adelaide, Darwin</option>
                        <option value="10.0">(GMT +10:00) Eastern Australia, Guam, Vladivostok</option>
                        <option value="11.0">(GMT +11:00) Magadan, Solomon Islands, New Caledonia</option>
                        <option value="12.0">(GMT +12:00) Auckland, Wellington, Fiji, Kamchatka</option>
                  </select>
                  </div>
                
                                <div class="alert alert-success alert-dismissable" id="divMessage" style="display:none">
                                    <i class="fa fa-check"></i>
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                    <b><span id="spanMessageTitle"></span></b> <span id="spanMessage"></span>
                                </div>
                
                      </div><!-- /.box-body -->
                      <div class="box-footer">
                                <button type="button" class="btn btn-primary" id="btnUpdateProfile" name="btnUpdateProfile" @click="update">Update Profile</button>
                            </div>
                            <input type="hidden" name="btnUpdateProfile" value=""></form>
                    </div>
          
                  </div>
          @endforeach
                  <div class="col-md-6" id="userprofile_sec2">
                    <div class="box">
                      <div class="box-header">
                        <!-- <i class="fa fa-user"></i> -->
                                <h3 class="box-title">Image</h3>
                      </div><!-- /.box-header -->
                      <form role="form" method="post" action="" enctype="multipart/form-data" id="form2">
                      <div class="box-body">
                        <div id="userpic" class="userpic" style="background-image: url('../images/profile/profile.png?x=96062047?')">
                   <div class="js-preview userpic__preview"></div>
                   <div class="btn btn-success js-fileapi-wrapper">
                      <div class="js-browse">
                         <span class="btn-txt">Choose</span>
                         <input name="filedata" type="file" accept="image/*">
                      </div>
                      <div class="js-upload" style="display: none;">
                         <div class="progress progress-success">
                          <div class="js-progress bar"></div>
                         </div>
                         <span class="btn-txt">Uploading</span>
                      </div>
                   </div>
                </div>
                      </div><!-- /.box-body -->
                      <div class="box-footer">
                  <button type="button" id="btnRemovePhoto" name="btnRemovePhoto" class="btn btn-danger"><i class="fa fa-close"></i> Remove</button><br><br>
                      </div>
                            </form>
                    </div>
                    
                    
                    <div class="box">
                      <div class="box-header">
                        <!-- <i class="fa fa-key"></i> -->
                                <h3 class="box-title">Change Password</h3>
                      </div><!-- /.box-header -->
                      <form role="form" method="post" action="" id="frmChangePassword" novalidate="novalidate" class="bv-form">
                      <div class="box-body">
                                <div class="form-group has-feedback">
                                    <label for="txtNewPassword1">New Password</label>
                                    <input type="password" class="form-control" id="txtNewPassword1" name="txtNewPassword1"  placeholder="New Password">
                                    <p v-if="errors.password">@{{ errors.password[0] }}</p>
                                </div>
                                <div class="form-group has-feedback">
                                    <label for="txtNewPassword2">Retype New Password</label>
                                    <input type="password" class="form-control" id="txtNewPassword2" placeholder="Retype New Password">
                                   
                               </div>
                                <div class="alert alert-success alert-dismissable" id="divMessage" style="display:none">
                                    <i class="fa fa-check"></i>
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                    <b><span id="spanMessageTitle"></span></b> <span id="spanMessage"></span>
                                </div>
                      </div><!-- /.box-body -->
                      <div class="box-footer">
                       <button type="button" class="btn btn-primary" id="btnChangePassword" name="btnChangePassword" @click="changePassword">Change Password</button>
                      </div>
                            <input type="hidden" name="btnChangePassword" value=""></form>
                    </div>
                  </div>
                  </div>
                </section>
</div>
                        <ul class="list-inline pull-right">
                            <li><button type="button" class="btn btn-primary next-step">Next</button></li>
                        </ul>
                    </div>
                  
                    <div class="tab-pane" role="tabpanel" id="step2">
                       <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                  <label>School</label>
                                  <input type="text" name="School" class="form-control" id="school" placeholder="Sarvodaya Bal Vidyalay">
                                  <label>Board</label>
                                  <input type="text" name="board" id="board" class="form-control" placeholder="CBSE">
                                </div>
                              
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                               <label>Class</label>
                              <input type="text" name="class" id="class_name" class="form-control" placeholder="8">
                              <label>Year of Graduation</label>
                              <input type="text" name="years" id="year_passing" class="form-control" placeholder="2009">
                              </div>
                            </div>
                       </div>
                        <ul class="list-inline pull-right">
                            <li><button type="button" class="btn btn-default prev-step">Previous</button></li>
                            <li><button type="button" class="btn btn-primary next-step">Next</button></li>
                        </ul>
                    </div>
                    
                    <div class="tab-pane" role="tabpanel" id="step3">
                        <div class="col-md-6">
                                <div class="form-group">
                                  <label>Father's (or Guardian's) Name</label>
                                  <input type="text" name="father" id="father_name" class="form-control" placeholder="ABC">
                                  <label>Father's (or Guardian's) Profession</label>
                                  <input type="text" name="fprofession" id="father_profession" class="form-control" placeholder="No Profession">
                                </div>
                              
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                               <label>Mother's (or Guardian's) Name</label>
                              <input type="text" name="mother" id="mother_name" class="form-control" placeholder="DEF">
                              <label>Mother's (or Guardian's) Profession</label>
                              <input type="text" name="mprofession" id="mother_profession" class="form-control" placeholder="No Profession">
                              </div>
                            </div>
                        <ul class="list-inline pull-right">
                            <li><button type="button" class="btn btn-default prev-step">Previous</button></li>
                            <!-- <li><button type="button" class="btn btn-default next-step">Skip</button></li> -->
                            <li><button type="button" class="btn btn-primary btn-info-full next-step">Next</button></li>
                        </ul>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="complete">
                        <!-- <h3>Complete</h3>
                        <p>You have successfully completed all steps.</p> -->
                        <div class="row">
                           <div class="col-md-6">
                            <p class="text-center"><strong class="font-size-14">Current Year Academic Scores</strong><br>Please enter your scores below</p>
                               <div class="row">
                                   <div class="col-md-7">
                                     <label>Subject</label>
                                     <input  id="current_subject1" type="text" class="form-control">
                                     <input  id="current_subject2" type="text" class="form-control">
                                     <input  id="current_subject3" type="text" class="form-control">
                                     <input  id="current_subject4" type="text" class="form-control">
                                     <input  id="current_subject5" type="text" class="form-control">
                                     <input  id="current_subject6" type="text" class="form-control">
                                   </div>
                                   <div class="col-md-5">
                                     <label>CGPA / %age</label>
                                     <input  id="current_marks1" type="text" class="form-control">
                                     <input  id="current_marks2" type="text" class="form-control">
                                     <input  id="current_marks3" type="text" class="form-control">
                                     <input  id="current_marks4" type="text" class="form-control">
                                     <input  id="current_marks5" type="text" class="form-control">
                                     <input  id="current_marks6" type="text" class="form-control">
                                   </div>
                               </div>
                               <div><strong><p class="text-center">-or-</p></strong></div>
                               <div><p class="text-center">Upload your marksheet</p></div>
                               <div class="file">
                                  <input type="file" name="current_img" id="current_img">
                                  <small>(upload png/jpeg, max 2MB)</small>
                               </div>
                               
                           </div>
                           <div class="col-md-6">
                            <p class="text-center"><strong class="font-size-14">Last Year Academic Scores</strong><br>Please enter your scores below</p>
                              <div class="row">
                                  <div class="col-md-7">
                                    <label>Subject</label>
                                    <input   id="previous_subject1" type="text" class="form-control">
                                    <input   id="previous_subject2" type="text" class="form-control">
                                    <input   id="previous_subject3" type="text" class="form-control">
                                    <input   id="previous_subject4" type="text" class="form-control">
                                    <input   id="previous_subject5" type="text" class="form-control">
                                    <input   id="previous_subject6" type="text" class="form-control">
                                  </div>
                                  <div class="col-md-5">
                                    <label>CGPA / %age</label>
                                    <input   id="previous_marks1" type="text" class="form-control">
                                    <input   id="previous_marks2" type="text" class="form-control">
                                    <input   id="previous_marks3" type="text" class="form-control">
                                    <input   id="previous_marks4" type="text" class="form-control">
                                    <input   id="previous_marks5" type="text" class="form-control">
                                    <input   id="previous_marks6" type="text" class="form-control">

                                  </div>
                              </div>
                              <div><strong><p class="text-center">-or-</p></strong></div>
                               <div><p class="text-center">Upload your marksheet</p></div>
                               <div class="file">
                                  <input type="file" name="previous_img" id="previous_img">
                                  <small>(upload png/jpeg, max 2MB)</small>
                               </div>
                          <ul class="list-inline pull-right">
                            <li><button type="button" class="btn btn-default prev-step">Previous</button></li>
                            <!-- <li><button type="button" class="btn btn-default next-step">Skip</button></li> -->
                            <li><button type="button" class="btn btn-primary btn-info-full next-step" @click="education()">Submit</button></li>
                        </ul>
                           </div>

                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </form>
        </div>
    </section>
   </div>
</div>
<script type="text/javascript">
  $(document).ready(function () {
    //Initialize tooltips
    $('.nav-tabs > li a[title]').tooltip();
    
    //Wizard
    $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {

        var $target = $(e.target);
    
        if ($target.parent().hasClass('disabled')) {
            return false;
        }
    });

    $(".next-step").click(function (e) {

        var $active = $('.wizard .nav-tabs li.active');
        $active.next().removeClass('disabled');
        nextTab($active);

    });
    $(".prev-step").click(function (e) {

        var $active = $('.wizard .nav-tabs li.active');
        prevTab($active);

    });
});

function nextTab(elem) {
    $(elem).next().find('a[data-toggle="tab"]').click();
}
function prevTab(elem) {
    $(elem).prev().find('a[data-toggle="tab"]').click();
}
</script>
@endsection