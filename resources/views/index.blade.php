@extends('common.app')

@section('content')
<link rel="stylesheet" href="{{ URL::asset('css/career/dashboard.css') }}" />
<div class="container-fluid">

        <!-- Body -->
        <main class="main_body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-7">
                        <div class="m-bt-20">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="status-box">
                                        <div class="">
                                            <div class="status_header">
                                                <p class="dash-s-icon">
                                                    <span class="fa fa-file-text-o"></span>
                                                    My Tests
                                                </p>
                                            </div>
                                            <div class="status_body">
                                                <div class="right-fixed-box">
                                                    <p class="dashboard-squre-title">Next: Interest Assessment</p>
                                                    <p class="remaining_text">15/16 Remaining</p>
                                                    <div class="progress progress-xs">
                                                        <div class="progress-bar test" role="progressbar"
                                                            data-transitiongoal="6.25" aria-valuenow="6"
                                                            style="width: 6%;">
                                                        </div>
                                                    </div>
                                                    <div class="btn-row text-center">
                                                        <button type="button"
                                                            class="btn btn-custon-rounded-three btn-xs btn_upgrade">Upgrade</button>
                                                        <button type="button"
                                                            class="btn btn-custon-rounded-three btn-xs btn_view">View
                                                            Result</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="status-box">
                                        <div class="">
                                            <div class="status_header profile">
                                                <p class="dash-s-icon">
                                                    <span class="fa fa-user"></span>
                                                    My Profile
                                                </p>
                                            </div>
                                            <div class="status_body">
                                                <div class="right-fixed-box">
                                                    <p class="dashboard-squre-title">Current: Education Details</p>
                                                    <p class="remaining_text">25% Completed</p>
                                                    <div class="progress progress-xs">
                                                        <div class="progress-bar" role="progressbar"
                                                            data-transitiongoal="6.25" aria-valuenow="6"
                                                            style="width: 25%;">
                                                        </div>
                                                    </div>
                                                    <div class="btn-row text-center">
                                                        <button type="button"
                                                            class="btn btn-custon-rounded-three btn-xs btn_view">Complete
                                                            Profile</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="c_title">
                           <h2>Blog Feed</h2>
                           <p style="display: block;float: left;width: 100%;margin-bottom: 0;color: #666;">Well-researched articles written by our experts</p>
                           <div class="clearfix"></div>
                       </div>
                       <div class="row">
                           <div class="col-md-6">
                                <div class="post-box">
                                    <div class="social-avastar">
                                        <div class="row">
                                            <div class="col-md-3">
                                             <img src="../img/profile/1.jpg">   
                                            </div>
                                            <div class="col-md-9">
                                               <div class="media-body"><h4><a style="color:#484848;" target="_blank" href="https://www.mindler.com/blog/author/sakshi-srivastava/" class="pull-left">Sakshi Srivastava</a><br><small class="text-muted"> Wed, Apr 17, 2019 12:31 AM</small></h4></div> 
                                            </div>
                                        </div><br>
                                        <h3><a onclick="ga(&quot;send&quot;,&quot;event&quot;,&quot;BlogFeed&quot;,&quot;Title-Link&quot;,&quot;i-chose-humanities-over-science-in-class-11th.-no-regrets!&quot;)" target="_blank" href="">I Chose Humanities Over Science in Class 11th. No Regrets!</a></h3>
                                    </div>
                                    <div class="box-img">
                                        <a href=""><img src="../img/profile/2.png"></a>
                                    </div>
                                    <p>“Medicine, law, business, engineering- these are noble pursuits and necessary to sustain life but po...</p>
                                    <p style="margin-bottom: 10px;"><a href="">Read More</a><a href=""><i class="fa fa-facebook"> Share</i></a></p>
                                </div>
                           </div>
                              <div class="col-md-6">
                                <div class="post-box">
                                    <div class="social-avastar">
                                        <div class="row">
                                            <div class="col-md-3">
                                             <img src="../img/profile/1.jpg">   
                                            </div>
                                            <div class="col-md-9">
                                               <div class="media-body"><h4><a style="color:#484848;" target="_blank" href="https://www.mindler.com/blog/author/sakshi-srivastava/" class="pull-left">Sakshi Srivastava</a><br><small class="text-muted"> Wed, Apr 17, 2019 12:31 AM</small></h4></div> 
                                            </div>
                                        </div><br>
                                        <h3><a onclick="ga(&quot;send&quot;,&quot;event&quot;,&quot;BlogFeed&quot;,&quot;Title-Link&quot;,&quot;i-chose-humanities-over-science-in-class-11th.-no-regrets!&quot;)" target="_blank" href="">I Chose Humanities Over Science in Class 11th. No Regrets!</a></h3>
                                    </div>
                                    <div class="box-img">
                                        <a href=""><img src="../img/profile/3.png"></a>
                                    </div>
                                    <p>“Medicine, law, business, engineering- these are noble pursuits and necessary to sustain life but po...</p>
                                    <p style="margin-bottom: 10px;"><a href="">Read More</a><a href=""><i class="fa fa-facebook"> Share</i></a></p>
                                </div>
                           </div>
                              
                       </div><br>
                       <div class="row">
                           <div class="col-md-6">
                                <div class="post-box">
                                    <div class="social-avastar">
                                        <div class="row">
                                            <div class="col-md-3">
                                             <img src="../img/profile/1.jpg">   
                                            </div>
                                            <div class="col-md-9">
                                               <div class="media-body"><h4><a style="color:#484848;" target="_blank" href="https://www.mindler.com/blog/author/sakshi-srivastava/" class="pull-left">Sakshi Srivastava</a><br><small class="text-muted"> Wed, Apr 17, 2019 12:31 AM</small></h4></div> 
                                            </div>
                                        </div><br>
                                        <h3><a onclick="ga(&quot;send&quot;,&quot;event&quot;,&quot;BlogFeed&quot;,&quot;Title-Link&quot;,&quot;i-chose-humanities-over-science-in-class-11th.-no-regrets!&quot;)" target="_blank" href="">I Chose Humanities Over Science in Class 11th. No Regrets!</a></h3>
                                    </div>
                                    <div class="box-img">
                                        <a href=""><img src="../img/profile/4.png"></a>
                                    </div>
                                    <p>“Medicine, law, business, engineering- these are noble pursuits and necessary to sustain life but po...</p>
                                    <p style="margin-bottom: 10px;"><a href="">Read More</a><a href=""><i class="fa fa-facebook"> Share</i></a></p>
                                </div>
                           </div>
                              <div class="col-md-6">
                                <div class="post-box">
                                    <div class="social-avastar">
                                        <div class="row">
                                            <div class="col-md-3">
                                             <img src="../img/profile/1.jpg">   
                                            </div>
                                            <div class="col-md-9">
                                               <div class="media-body"><h4><a style="color:#484848;" target="_blank" href="https://www.mindler.com/blog/author/sakshi-srivastava/" class="pull-left">Sakshi Srivastava</a><br><small class="text-muted"> Wed, Apr 17, 2019 12:31 AM</small></h4></div> 
                                            </div>
                                        </div><br>
                                        <h3><a onclick="ga(&quot;send&quot;,&quot;event&quot;,&quot;BlogFeed&quot;,&quot;Title-Link&quot;,&quot;i-chose-humanities-over-science-in-class-11th.-no-regrets!&quot;)" target="_blank" href="">I Chose Humanities Over Science in Class 11th. No Regrets!</a></h3>
                                    </div>
                                    <div class="box-img">
                                        <a href=""><img src="../img/profile/5.png"></a>
                                    </div>
                                    <p>“Medicine, law, business, engineering- these are noble pursuits and necessary to sustain life but po...</p>
                                    <p style="margin-bottom: 10px;"><a href="">Read More</a><a href=""><i class="fa fa-facebook"> Share</i></a></p>
                                </div>
                           </div>
                       </div>
                    </div>

                     
                    <div class="col-md-5">
                        <div class="c_title">
                           <h2>Career Library</h2>
                           <div class="clearfix">
                               
                           </div>
                        </div>
                        <div class="c_panel ">
                            <div class="c_content" style="padding:15px">
                                <div class="row">
                                   <div class="col-md-12" style="text-align:left;margin-bottom:10px;">
                                   <small style="font-size:13px">In-depth information on hundreds of career options</small>
                                   </div>
                                   <div class="col-md-9" style="padding-right:0"> 
                                   <input required="" class="form-control inpt-sm m-b ui-autocomplete-input" id="dashboard-career" name="search" placeholder="Search for careers, colleges and more" type="text" autocomplete="off">
                                   </div>
                                   <div class="col-md-3 mobile-mt-5">
                                   <a id="go-career" target="_blank" onclick="ga('send', 'event', 'Career Library', 'Search', 'Career library box');" class="btn btn-sm btn-primary btn-block" style="">Search</a>
                                   </div>
                                </div>
                            </div>
               <!--/.c_content-->
                        </div>
                        <div class="recent-activity">
                            <div class="c_title margin-top-20">
                               <h2>Recent Activities</h2>
                               <div class="clearfix"></div>
                            </div>
                            <div class="c_panel recent-activity">
                                <div class="c_content scroller" style="max-height: 862px; margin-bottom: 25px; overflow: hidden; outline: currentcolor none medium;" tabindex="5001">
                                    <ul class="timeline-2 ">
                                       <li>
                                           <p class="timeline-time"><span>12:50 PM</span> <span>20 Day ago</span></p>
                                           <i class="timeline-icon rounded hidden-xs"></i>
                                           <div class="timeline-label">
                                              <h4><i class="fa fa-briefcase"></i>Orientation Style Result Available</h4>
                                              <div class="row">
                                                 <div class="col-md-12">
                                                    <p><a href="https://www.mindler.com/assess/mytest/1">Congratulations on completing the orientation style assessment. It is an indication of your work style and natural way of approaching situations. Click here to view your result. </a></p>
                                                 </div>
                                              </div>
                                           </div>
                                        </li><li>
                                           <p class="timeline-time"><span>12:49 PM</span> <span>20 Day ago</span></p>
                                           <i class="timeline-icon rounded hidden-xs"></i>
                                           <div class="timeline-label">
                                              <h4><i class="fa fa-briefcase"></i>Welcome to Mindler</h4>
                                              <div class="row">
                                                 <div class="col-md-12">
                                                    <p>Congratulations on signing up! Your career journey begins now.</p>
                                                 </div>
                                              </div>
                                           </div>
                                        </li>
                                    </ul>
                                </div>
                  <!--/.c_content-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        @endsection