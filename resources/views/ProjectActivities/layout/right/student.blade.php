<div class="container-fluid">
  <div class="row">
    <div class="col-md-3" style="padding-top:20px;">
      <a href="{{ route('project-book') }}" class="easy-link-menu">
        <div class="dash-card card-green text-xs-center">
          <div class="card-block">
            <h4 class="card-title">
            <i class="ace-icon fa fa-book"></i>
            </h4>
            <p class="card-text"> សៀវភៅ</p>
          </div>
        </div>
      </a>
    </div>
    {{-- វគ្គខ្លី --}}
    <div class="col-md-3" style="padding-top:20px;">
      <a href="{{ route('student-course') }}" class="easy-link-menu">
        <div class="dash-card card-yellow text-xs-center">
          <div class="card-block">
            <h4 class="card-title">
            <i class="ace-icon fa fa-book"></i>
            </h4>
            <p class="card-text"> វគ្គខ្លី</p>
          </div>
        </div>
      </a>
    </div>
    {{-- វគ្គវែង --}}
    <div class="col-md-3" style="padding-top:20px;">
      <a href="{{ route('student-course') }}" class="easy-link-menu">
        <div class="dash-card card-yellow text-xs-center">
          <div class="card-block">
            <h4 class="card-title">
            <i class="ace-icon fa fa-book"></i>
            </h4>
            <p class="card-text"> វគ្គវែង</p>
          </div>
        </div>
      </a>
    </div>
    <div class="col-md-3" style="padding-top:20px;">
      <a href="{{ route('login') }}" class="easy-link-menu">
        <div class="dash-card card-red text-xs-center">
          <div class="card-block">
            <h4 class="card-title">
            <i class="menu-icon fa fa-bar-chart"></i>
            </h4>
            <p class="card-text">របាយការណ៍</p>
          </div>
        </div>
      </a>
    </div>
  </div>
</div>
<hr>
<div class="container">
  <div>
    <div id="user-profile-1" class="user-profile row">
      <div class="col-xs-12 col-sm-3 center">
        <div>
          <span class="profile-picture">
            <img id="avatar" class="editable img-responsive editable-click editable-empty" alt="Alex's Avatar" src="{{ asset('images/user/'.auth()->user()->profile_image) }}">
          </span>
          <div class="space-4"></div>
          <div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
            <div class="inline position-relative">
              <a href="#" class="user-title-label dropdown-toggle" data-toggle="dropdown">
                <i class="ace-icon fa fa-circle light-green"></i>
                &nbsp;
                <span class="white">{{auth()->user()->name}}</span>
              </a>
              <ul class="align-left dropdown-menu dropdown-caret dropdown-lighter">
                <li class="dropdown-header"> Change Status </li>
                <li>
                  <a href="#">
                    <i class="ace-icon fa fa-circle green"></i>&nbsp;
                    <span class="green">Available</span>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="ace-icon fa fa-circle red"></i>&nbsp;
                    <span class="red">Busy</span>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="ace-icon fa fa-circle grey"></i>&nbsp;
                    <span class="grey">Invisible</span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="space-6"></div>
        <div class="profile-contact-info">
          <div class="profile-contact-links align-left">
            <a href="#" class="btn btn-link">
              <i class="ace-icon fa fa-plus-circle bigger-120 green"></i>
              Add as a friend
            </a>
            <a href="#" class="btn btn-link">
              <i class="ace-icon fa fa-envelope bigger-120 pink"></i>
              {{auth()->user()->contact_number}}
            </a>
            <a href="#" class="btn btn-link">
              <i class="ace-icon fa fa-globe bigger-125 blue"></i>
              {{auth()->user()->email}}
            </a>
          </div>
          <div class="space-6"></div>
          <div class="profile-social-links align-center">
            <a href="#" class="tooltip-info" title="" data-original-title="Visit my Facebook">
              <i class="middle ace-icon fa fa-facebook-square fa-2x blue"></i>
            </a>
            <a href="#" class="tooltip-info" title="" data-original-title="Visit my Twitter">
              <i class="middle ace-icon fa fa-twitter-square fa-2x light-blue"></i>
            </a>
            <a href="#" class="tooltip-error" title="" data-original-title="Visit my Pinterest">
              <i class="middle ace-icon fa fa-pinterest-square fa-2x red"></i>
            </a>
          </div>
        </div>
        <div class="hr hr12 dotted"></div>
        <div class="clearfix">
          <div class="grid2">
            <span class="bigger-175 blue">{{$data['allStudents']}}</span>
            <br>
            Students
          </div>
          <div class="grid2">
            <span class="bigger-175 blue">{{$data['TotalShortCourse']->count()}}</span>
            <br>
            Short Courses
          </div>
        </div>
        <div class="hr hr16 dotted"></div>
      </div>
      <div class="col-xs-12 col-sm-9">
        <div class="center">
          <span class="btn btn-app btn-sm btn-light no-hover">
            <span class="line-height-1 bigger-170 blue"> 1,411 </span>
            <br>
            <span class="line-height-1 smaller-90"> Views </span>
          </span>
          <span class="btn btn-app btn-sm btn-yellow no-hover">
            <span class="line-height-1 bigger-170"> {{$data['allStudents']}} </span>
            <br>
            <span class="line-height-1 smaller-90"> សិស្ស​ </span>
          </span>
          <span class="btn btn-app btn-sm btn-pink no-hover">
            <span class="line-height-1 bigger-170"> {{$data['TotalShortCourse']->count()}} </span>
            <br>
            <span class="line-height-1 smaller-90"> វគ្គខ្លី </span>
          </span>
          <span class="btn btn-app btn-sm btn-grey no-hover">
            <span class="line-height-1 bigger-170"> 23 </span>
            <br>
            <span class="line-height-1 smaller-90"> Reviews </span>
          </span>
          <span class="btn btn-app btn-sm btn-success no-hover">
            <span class="line-height-1 bigger-170"> 7 </span>
            <br>
            <span class="line-height-1 smaller-90"> Albums </span>
          </span>
          <span class="btn btn-app btn-sm btn-primary no-hover">
            <span class="line-height-1 bigger-170"> 55 </span>
            <br>
            <span class="line-height-1 smaller-90"> Contacts </span>
          </span>
        </div>
        <div class="space-12"></div>
        <div class="profile-user-info profile-user-info-striped">
          <div class="profile-info-row">
            <div class="profile-info-name"> Full Name </div>
            <div class="profile-info-value">
              <span class="editable editable-click" id="username">{{auth()->user()->name}}</span>
            </div>
          </div>
          <div class="profile-info-row">
            <div class="profile-info-name"> Location </div>
            <div class="profile-info-value">
              <i class="fa fa-map-marker light-orange bigger-110"></i>
              <span class="editable editable-click" id="country">{{auth()->user()->address}}</span>
              {{-- <span class="editable editable-click" id="city">Amsterdam</span> --}}
            </div>
          </div>
          <div class="profile-info-row">
            <div class="profile-info-name"> Age </div>
            <div class="profile-info-value">
              <span class="editable editable-click" id="age">30</span>
            </div>
          </div>
          <div class="profile-info-row">
            <div class="profile-info-name"> Joined </div>
            <div class="profile-info-value">
              <span class="editable editable-click" id="signup">{{auth()->user()->created_at}}</span>
            </div>
          </div>
          <div class="profile-info-row">
            <div class="profile-info-name"> Last Online </div>
            <div class="profile-info-value">
              <span class="editable editable-click" id="login">{{auth()->user()->last_login_at}}</span>
            </div>
          </div>
          <div class="profile-info-row">
            <div class="profile-info-name"> About Me </div>
            <div class="profile-info-value">
              <span class="editable editable-click" id="about">ជាសិស្សនៅ {{$data['YourInstitute']->name_kh}}</span>
            </div>
          </div>
        </div>
        <div class="space-6"></div>
        <div class="col-md-3" style="padding-top:20px;">
          <a href="{{route('front')}}" class="easy-link-menu">
            <div class="dash-card card-yellow text-xs-center">
              <div class="card-block">
                <h6 class="card-title">
                <i class="ace-icon fa fa-users"></i>
                </h6>
                <p class="card-text"> តេស្តមុនរៀន</p>
              </div>
            </div>
          </a>
        </div>
        <div class="col-md-3" style="padding-top:20px;">
          <a href="{{ route('front') }}" class="easy-link-menu">
            <div class="dash-card card-green text-xs-center">
              <div class="card-block">
                <h4 class="card-title">
                <i class="ace-icon fa fa-user-secret"></i>
                </h4>
                <p class="card-text"> តេស្តក្រោយរៀន</p>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>