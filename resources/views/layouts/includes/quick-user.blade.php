<div id="kt_quick_user" class="offcanvas offcanvas-right p-10">
    <!--begin::Header-->
    <div class="offcanvas-header d-flex align-items-center justify-content-between pb-5">
        <h3 class="font-weight-bold m-0">My Profile 
        <small class="text-muted font-size-sm ml-2">15 messages</small></h3>
        <a href="#" class="btn btn-xs btn-icon btn-light btn-hover-primary" id="kt_quick_user_close">
            <i class="ki ki-close icon-xs text-muted"></i>
        </a>
    </div>

    <div class="offcanvas-content pr-5 mr-n5">
        <!--begin::Header-->
        <div class="d-flex align-items-center mt-5">
            <div class="symbol symbol-100 mr-5">
                <div class="symbol-label" style="background-image:url('/{{Auth::user()->photo}}')"></div>
                <i class="symbol-badge bg-success"></i>
            </div>
            <div class="d-flex flex-column">
                <a href="{{route('common.profile')}}" class="font-weight-bold font-size-h5 text-dark-75 text-hover-primary">{{Auth::user()->name}}</a>
                <div class="text-muted mt-1">{{Auth::user()->phone}}</div>
                <div class="navi mt-1">
                    <a href="{{route('common.profile')}}" class="navi-item">
                        <span class="navi-link p-0 pb-2">
                            <span class="navi-icon mr-1">
                                <span class="svg-icon svg-icon-lg svg-icon-primary">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <path d="M21,12.0829584 C20.6747915,12.0283988 20.3407122,12 20,12 C16.6862915,12 14,14.6862915 14,18 C14,18.3407122 14.0283988,18.6747915 14.0829584,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,8 C3,6.8954305 3.8954305,6 5,6 L19,6 C20.1045695,6 21,6.8954305 21,8 L21,12.0829584 Z M18.1444251,7.83964668 L12,11.1481833 L5.85557487,7.83964668 C5.4908718,7.6432681 5.03602525,7.77972206 4.83964668,8.14442513 C4.6432681,8.5091282 4.77972206,8.96397475 5.14442513,9.16035332 L11.6444251,12.6603533 C11.8664074,12.7798822 12.1335926,12.7798822 12.3555749,12.6603533 L18.8555749,9.16035332 C19.2202779,8.96397475 19.3567319,8.5091282 19.1603533,8.14442513 C18.9639747,7.77972206 18.5091282,7.6432681 18.1444251,7.83964668 Z" fill="#000000" />
                                            <circle fill="#000000" opacity="0.3" cx="19.5" cy="17.5" r="2.5" />
                                        </g>
                                    </svg>
                                </span>
                            </span>
                            <span class="navi-text text-muted text-hover-primary">{{Auth::user()->email}}</span>
                        </span>
                    </a>
                </div>
            </div>
        </div>
      
        <div class="separator separator-dashed mt-8 mb-5"></div>
      
        <div class="navi navi-spacer-x-0 p-0">
            <a href="custom/apps/user/profile-1/personal-information.html" class="navi-item">
                <div class="navi-link">
                    <div class="symbol symbol-40 bg-light mr-3">
                        <div class="symbol-label">
                            <span class="fas fa-user-plus text-success"></span>
                        </div>
                    </div>
                    <div class="navi-text">
                        <div class="font-weight-bold">My Account</div>
                        <div class="text-muted">Profile info 
                        <span class="label label-light-danger label-inline font-weight-bold">update</span></div>
                    </div>
                </div>
            </a>

            <a href="custom/apps/userprofile-1/overview.html" class="navi-item">
                <div class="navi-link">
                    <div class="symbol symbol-40 bg-light mr-3">
                        <div class="symbol-label">
                            <span class="fas fa-lock-open text-danger"></span>
                        </div>
                    </div>
                    <div class="navi-text">
                        <div class="font-weight-bold">Change Password</div>
                        <div class="text-muted">After change, site will logout</div>
                    </div>
                </div>
            </a>
           
            <span class="navi-item mt-2">
                <span class="navi-link">
                    <a href="#" onclick="$('#logout-form').submit();" class="btn btn-sm btn-light-danger font-weight-bolder py-3 px-6"><i class="fas fa-sign-out-alt"></i> Sign Out</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf </form>
                </span>
            </span>
          
            
        </div>
     
        <div class="separator separator-dashed my-7"></div>
    
        
        <div class="pt-5">
            <h5 class="mb-7">Recent Notifications</h5>

            
            <div class="bg-gray-100 d-flex align-items-center p-5 rounded gutter-b">
                <div class="d-flex flex-center position-relative ml-4 mr-6 ml-lg-6 mr-lg-10">
                    <span class="svg-icon svg-icon-4x svg-icon-primary position-absolute opacity-15">
                        <svg xmlns="http://www.w3.org/2000/svg" width="70px" height="70px" viewBox="0 0 70 70" fill="none">
                            <g stroke="none" stroke-width="1" fill-rule="evenodd">
                                <path d="M28 4.04145C32.3316 1.54059 37.6684 1.54059 42 4.04145L58.3109 13.4585C62.6425 15.9594 65.3109 20.5812 65.3109 25.5829V44.4171C65.3109 49.4188 62.6425 54.0406 58.3109 56.5415L42 65.9585C37.6684 68.4594 32.3316 68.4594 28 65.9585L11.6891 56.5415C7.3575 54.0406 4.68911 49.4188 4.68911 44.4171V25.5829C4.68911 20.5812 7.3575 15.9594 11.6891 13.4585L28 4.04145Z" fill="#000000" />
                            </g>
                        </svg>
                    </span>
                    <span class="fas fa-sign-out-alt text-primary position-absolute"></span>
                </div>
           
                <div class="ml-1">
                    <h3 class="text-dark-75 font-weight-bolder font-size-lg">Important Notice</h3>
                    <p class="m-0 text-dark-50 font-weight-bold">Lorem Ipsum is simply dummy text of the printing and industry.</p>
                </div>
           
            </div>
            <!--end::Item-->
        </div>
        <!--end::Notifications-->
    </div>

</div>