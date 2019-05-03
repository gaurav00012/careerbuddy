@extends('common.app')
@section('content')
<div class="container-fluid">
   <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
         <div class="logo-pro">
            <a href="index.html"><img class="main-logo" src="{{asset('img/logo.png')}}" alt="" /></a>
         </div>
      </div>
   </div>
</div>
<div class="header-advance-area">
   <div class="header-top-area">
      <div class="container-fluid">
         <div class="row">
            <div class="">
               <div class="header-top-wraper">
                  <div class="row">
                     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="header-right-info">
                           <ul class="nav navbar-nav mai-top-nav header-right-menu">
                              <li class="nav-item dropdown">
                                 <a href="#" data-toggle="dropdown" role="button"
                                    aria-expanded="false" class="nav-link dropdown-toggle"><i
                                    class="fa fa-envelope-o"
                                    aria-hidden="true"></i></span></a>
                                 <div role="menu"
                                    class="author-message-top dropdown-menu animated zoomIn">
                                    <div class="message-single-top">
                                       <h1>Message</h1>
                                    </div>
                                    <ul class="message-menu">
                                       <li>
                                          <a href="#">
                                             <div class="message-img">
                                                <img src="img/contact/1.jpg" alt="">
                                             </div>
                                             <div class="message-content">
                                                <span class="message-date">16 Sept</span>
                                                <h2>Advanda Cro</h2>
                                                <p>Please done this project as soon possible.
                                                </p>
                                             </div>
                                          </a>
                                       </li>
                                    </ul>
                                    <div class="message-view">
                                       <a href="#">View All Messages</a>
                                    </div>
                                 </div>
                              </li>
                              <li class="nav-item">
                                 <a href="#" data-toggle="dropdown" role="button"
                                    aria-expanded="false" class="nav-link dropdown-toggle">
                                 <img src="{{asset('img/product/pro4.jpg')}}" alt="" />
                                 <span class="admin-name">Anderson</span>
                                 <i class="fa fa-angle-down edu-icon edu-down-arrow"></i>
                                 </a>
                                 <ul role="menu"
                                    class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                    <li class="profile_userId"><a href="javascript:void(0);">User
                                       ID: 98456</a>
                                    </li>
                                    <li><a href="#"><span><i class="fa fa-unlock-alt"
                                       aria-hidden="true"></i></span>Change
                                       Password</a>
                                    </li>
                                    <li><a href="#"><span><i class="fa fa-sign-out"
                                       aria-hidden="true"></i></span>Log Out</a>
                                    </li>
                                 </ul>
                              </li>
                              <!-- <li class="nav-item upgrade_btn">
                                 <a href="javascript:void(0);">Upgrade</a>
                                 </li> -->
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- Mobile Menu start -->
   <div class="mobile-menu-area">
      <div class="container">
         <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
               <div class="mobile-menu">
                  <nav id="dropdown">
                     <ul class="mobile-menu-nav">
                        <li>
                           <a data-toggle="collapse" data-target="#Charts" href="#">Home <span
                              class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                           <ul class="collapse dropdown-header-top">
                              <li><a href="index.html">Dashboard v.1</a></li>
                              <li><a href="index-1.html">Dashboard v.2</a></li>
                              <li><a href="index-3.html">Dashboard v.3</a></li>
                              <li><a href="analytics.html">Analytics</a></li>
                              <li><a href="widgets.html">Widgets</a></li>
                           </ul>
                        </li>
                        <li><a href="events.html">Event</a></li>
                        <li>
                           <a data-toggle="collapse" data-target="#demoevent" href="#">Professors <span
                              class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                           <ul id="demoevent" class="collapse dropdown-header-top">
                              <li><a href="all-professors.html">All Professors</a>
                              </li>
                              <li><a href="add-professor.html">Add Professor</a>
                              </li>
                              <li><a href="edit-professor.html">Edit Professor</a>
                              </li>
                              <li><a href="professor-profile.html">Professor Profile</a>
                              </li>
                           </ul>
                        </li>
                        <li>
                           <a data-toggle="collapse" data-target="#demopro" href="#">Students <span
                              class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                           <ul id="demopro" class="collapse dropdown-header-top">
                              <li><a href="all-students.html">All Students</a>
                              </li>
                              <li><a href="add-student.html">Add Student</a>
                              </li>
                              <li><a href="edit-student.html">Edit Student</a>
                              </li>
                              <li><a href="student-profile.html">Student Profile</a>
                              </li>
                           </ul>
                        </li>
                        <li>
                           <a data-toggle="collapse" data-target="#democrou" href="#">Courses <span
                              class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                           <ul id="democrou" class="collapse dropdown-header-top">
                              <li><a href="all-courses.html">All Courses</a>
                              </li>
                              <li><a href="add-course.html">Add Course</a>
                              </li>
                              <li><a href="edit-course.html">Edit Course</a>
                              </li>
                              <li><a href="course-profile.html">Courses Info</a>
                              </li>
                              <li><a href="course-payment.html">Courses Payment</a>
                              </li>
                           </ul>
                        </li>
                        <li>
                           <a data-toggle="collapse" data-target="#demolibra" href="#">Library <span
                              class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                           <ul id="demolibra" class="collapse dropdown-header-top">
                              <li><a href="library-assets.html">Library Assets</a>
                              </li>
                              <li><a href="add-library-assets.html">Add Library Asset</a>
                              </li>
                              <li><a href="edit-library-assets.html">Edit Library Asset</a>
                              </li>
                           </ul>
                        </li>
                        <li>
                           <a data-toggle="collapse" data-target="#demodepart" href="#">Departments
                           <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                           <ul id="demodepart" class="collapse dropdown-header-top">
                              <li><a href="departments.html">Departments List</a>
                              </li>
                              <li><a href="add-department.html">Add Departments</a>
                              </li>
                              <li><a href="edit-department.html">Edit Departments</a>
                              </li>
                           </ul>
                        </li>
                        <li>
                           <a data-toggle="collapse" data-target="#demo" href="#">Mailbox <span
                              class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                           <ul id="demo" class="collapse dropdown-header-top">
                              <li><a href="mailbox.html">Inbox</a>
                              </li>
                              <li><a href="mailbox-view.html">View Mail</a>
                              </li>
                              <li><a href="mailbox-compose.html">Compose Mail</a>
                              </li>
                           </ul>
                        </li>
                        <li>
                           <a data-toggle="collapse" data-target="#Miscellaneousmob" href="#">Interface
                           <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                           <ul id="Miscellaneousmob" class="collapse dropdown-header-top">
                              <li><a href="google-map.html">Google Map</a>
                              </li>
                              <li><a href="data-maps.html">Data Maps</a>
                              </li>
                              <li><a href="pdf-viewer.html">Pdf Viewer</a>
                              </li>
                              <li><a href="x-editable.html">X-Editable</a>
                              </li>
                              <li><a href="code-editor.html">Code Editor</a>
                              </li>
                              <li><a href="tree-view.html">Tree View</a>
                              </li>
                              <li><a href="preloader.html">Preloader</a>
                              </li>
                              <li><a href="images-cropper.html">Images Cropper</a>
                              </li>
                           </ul>
                        </li>
                        <li>
                           <a data-toggle="collapse" data-target="#Chartsmob" href="#">Charts <span
                              class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                           <ul id="Chartsmob" class="collapse dropdown-header-top">
                              <li><a href="bar-charts.html">Bar Charts</a>
                              </li>
                              <li><a href="line-charts.html">Line Charts</a>
                              </li>
                              <li><a href="area-charts.html">Area Charts</a>
                              </li>
                              <li><a href="rounded-chart.html">Rounded Charts</a>
                              </li>
                              <li><a href="c3.html">C3 Charts</a>
                              </li>
                              <li><a href="sparkline.html">Sparkline Charts</a>
                              </li>
                              <li><a href="peity.html">Peity Charts</a>
                              </li>
                           </ul>
                        </li>
                        <li>
                           <a data-toggle="collapse" data-target="#Tablesmob" href="#">Tables <span
                              class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                           <ul id="Tablesmob" class="collapse dropdown-header-top">
                              <li><a href="static-table.html">Static Table</a>
                              </li>
                              <li><a href="data-table.html">Data Table</a>
                              </li>
                           </ul>
                        </li>
                        <li>
                           <a data-toggle="collapse" data-target="#formsmob" href="#">Forms <span
                              class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                           <ul id="formsmob" class="collapse dropdown-header-top">
                              <li><a href="basic-form-element.html">Basic Form Elements</a>
                              </li>
                              <li><a href="advance-form-element.html">Advanced Form Elements</a>
                              </li>
                              <li><a href="password-meter.html">Password Meter</a>
                              </li>
                              <li><a href="multi-upload.html">Multi Upload</a>
                              </li>
                              <li><a href="tinymc.html">Text Editor</a>
                              </li>
                              <li><a href="dual-list-box.html">Dual List Box</a>
                              </li>
                           </ul>
                        </li>
                        <li>
                           <a data-toggle="collapse" data-target="#Appviewsmob" href="#">App views
                           <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                           <ul id="Appviewsmob" class="collapse dropdown-header-top">
                              <li><a href="basic-form-element.html">Basic Form Elements</a>
                              </li>
                              <li><a href="advance-form-element.html">Advanced Form Elements</a>
                              </li>
                              <li><a href="password-meter.html">Password Meter</a>
                              </li>
                              <li><a href="multi-upload.html">Multi Upload</a>
                              </li>
                              <li><a href="tinymc.html">Text Editor</a>
                              </li>
                              <li><a href="dual-list-box.html">Dual List Box</a>
                              </li>
                           </ul>
                        </li>
                        <li>
                           <a data-toggle="collapse" data-target="#Pagemob" href="#">Pages <span
                              class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                           <ul id="Pagemob" class="collapse dropdown-header-top">
                              <li><a href="login.html">Login</a>
                              </li>
                              <li><a href="register.html">Register</a>
                              </li>
                              <li><a href="lock.html">Lock</a>
                              </li>
                              <li><a href="password-recovery.html">Password Recovery</a>
                              </li>
                              <li><a href="404.html">404 Page</a></li>
                              <li><a href="500.html">500 Page</a></li>
                           </ul>
                        </li>
                     </ul>
                  </nav>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- Mobile Menu end -->
   <div class="breadcome-area">
      <div class="container-fluid">
         <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
               <div class="breadcome-list">
                  <div class="row">
                     <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="breadcome-heading">
                           Career Assesments
                        </div>
                     </div>
                     <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <ul class="breadcome-menu">
                           <!--  <li>Assessments
                              </li> -->
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- Body -->
<main class="main">
   <div class = "container">
   <table class="table table-bordered">
    <thead>
      <tr>
        <th>Sno</th>
        <th>Test Area</th>
        <th>Test Name</th>
        <th>Assessment Category</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
     
     
      
    </tbody>
  </table>
</div>
   


</main>
<script></script>
<script src="{{ asset('js/careerassessment.js')}}"></script>
@endsection