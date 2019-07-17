<?php  $flag = App()->getLocale();?>

<div class="container">
<h3 style="font-family: 'Khmer OS Muol Light'; "><i class="fa fa-university" aria-hidden="true"></i>{{$flag=='kh'?$data['YourInstitute']->name_kh:$data['YourInstitute']->name_en}}</h3>
    <div class="row">
                        
        <div class="col-md-3" style="padding-top:20px;">
            <a href="{{route('student-list')}}" class="easy-link-menu">
                <div class="dash-card card-sky text-xs-center">
                    <div class="card-block">                           
                        <h6 class="card-title" style="padding:5px;">      
                                <i class="ace-icon fa fa-users"></i> បញ្ជីសិស្ស             
                        </h6>
                        <p class="card-text" style="padding:5px;">                               
                                ( <i class="fa fa-male" aria-hidden="true"></i> {{$data['allStudents']-$data['allStudentsF']}} នាក់ | <i class="fa fa-female" aria-hidden="true"></i> {{$data['allStudentsF']}} នាក់)
                        </p> 
                        <p class="card-text" style="color:yellow;">
                                សរុប៖ {{$data['allStudents']}} នាក់                              
                        </p>
                                              
                    </div>
                </div>
            </a>
        </div>

        {{-- Staff --}}
        <div class="col-md-3" style="padding-top:20px;">
                <a href="{{route('staff-list')}}" class="easy-link-menu">
                    <div class="dash-card card-sky text-xs-center">
                        <div class="card-block">                           
                            <h6 class="card-title" style="padding:5px;">      
                                    <i class="ace-icon fa fa-users"></i> បញ្ជីបុគ្គលិក          
                            </h6>
                            <p class="card-text" style="padding:5px;">                               
                                    ( <i class="fa fa-male" aria-hidden="true"></i> {{$data['allStaffs']-$data['allStaffsF']}} នាក់ | <i class="fa fa-female" aria-hidden="true"></i> {{$data['allStaffsF']}} នាក់)
                            </p> 
                            <p class="card-text" style="color:yellow;">
                                     សរុប៖ {{$data['allStaffs']}} នាក់                                                 
                            </p>
                                                  
                        </div>
                    </div>
                </a>
        </div>
        {{-- All Books --}}
        <div class="col-md-3" style="padding-top:20px;">
                <a href="{{route('book-list')}}" class="easy-link-menu">
                        <div class="dash-card card-green text-xs-center">
                        <div class="card-block">                           
                            <h6 class="card-title" style="padding:5px;">      
                                    <i class="ace-icon fa fa-book"></i> បញ្ជីសៀវភៅ         
                            </h6>
                            <p class="card-text" style="padding:5px;">                               
                                   <i class="fa fa-briefcase" aria-hidden="true"></i> {{$data['book_categories']}} ប្រភេទ | <i class="fa fa-folder-open" aria-hidden="true"></i> {{$data['book_masters']}} មុខ
                            </p> 
                            <p class="card-text" style="color:yellow;">
                                    សរុប៖  {{ $data['allBooks']}} ក្បាល                                              
                            </p>
                                          
                        </div>
                    </div>
                </a>
        </div>


                <div class="col-md-3" style="padding-top:20px;">
                    <a href="{{ route('staff-register') }}" class="easy-link-menu">
                        <div class="dash-card card-sky text-xs-center">
                            <div class="card-block">
                                <h4 class="card-title" style="padding:5px;">
                                        <i class="fa fa-user-plus" aria-hidden="true"></i>
                                </h4>
                                <p class="card-text" style="padding:5px;">ចុះឈ្មោះគ្រូ​</p>
                            </div>
                        </div>
                    </a>
                </div>

            

                <div class="col-md-3" style="padding-top:20px;">
                        <a href="{{ route('project-book') }}" class="easy-link-menu">
                            <div class="dash-card card-green text-xs-center">
                                <div class="card-block">
                                    <h4 class="card-title" style="padding:5px;">
                                        <i class="ace-icon fa fa-book"></i> សៀវភៅ 
                                    </h4>
                                    <p class="card-text" style="padding:5px;">                               
                                            ( <i class="fa fa-male" aria-hidden="true"></i> {{$data['allStaffs']-$data['allStaffsF']}} នាក់ | <i class="fa fa-female" aria-hidden="true"></i> {{$data['allStaffsF']}} នាក់)
                                    </p>
                                    <p class="card-text" style="padding:5px;">
                                            <p class="card-text" style="color:yellow;">
                                                    សរុប៖  {{ $data['allBooks']}} ក្បាល                                                 
                                            </p> 
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>

        {{-- វគ្គខ្លី --}}
        <div class="col-md-3" style="padding-top:20px;">
                <a href="{{ route('projects.shortcourse')}}" class="easy-link-menu">
                    <div class="dash-card card-yellow text-xs-center">
                        <div class="card-block" style="padding:5px;">
                            <h4 class="card-title">
                            
                            </h4>
                            <p class="card-text" style="padding:5px;"><i class="ace-icon fa fa-book"></i> វគ្គខ្លី</p>
                        </div>
                    </div>
                </a>
        </div>

        {{-- វគ្គវែង --}}
        <div class="col-md-3" style="padding-top:20px;">
            <a href="{{ route('projects.longcourse') }}" class="easy-link-menu">
                <div class="dash-card card-yellow text-xs-center">
                    <div class="card-block">
                        <h4 class="card-title">
                        
                        </h4>
                        <p class="card-text"><i class="ace-icon fa fa-book"></i> វគ្គវែង</p>
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
