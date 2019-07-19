<?php  $flag = App()->getLocale();?>

<div class="container-fluid">
   

<h3 class="hidden-480" style="font-family: 'Khmer OS Muol Light'; "><i class="fa fa-university" aria-hidden="true"></i>{{$flag=='kh'?$data['YourInstitute']->name_kh:$data['YourInstitute']->name_en}}</h3>
        <div class="row">
                        
            {{-- បញ្ចីសិស្ស --}}
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
            {{-- All Books សៀវភៅទាំងអស់ --}}
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

    {{-- បញ្ជើវគ្គខ្លី​សង្ខេប --}}
            <div class="col-md-3" style="padding-top:20px;">
                    <a href="{{route('projects.shortcourse')}}" class="easy-link-menu">
                            <div class="dash-card card-yellow text-xs-center">
                            <div class="card-block">       
                                    <?php $sum=0; ?>
                                    @foreach ($data['TotalShortCourse'] as $item)
                                        <?php $sum=$sum+$item->ShortCourse_count; ?>
                                    @endforeach

                                <h6 class="card-title" style="padding:5px;">      
                                        <i class="fa fa-briefcase" aria-hidden="true"></i> បញ្ជីវគ្គខ្លី         
                                </h6>
                                <p class="card-text" style="padding:5px;">                               
                                    ចំនួនវគ្គសរុប៖​  {{$data['TotalShortCourse']->count()}} វគ្គ 
                                </p> 
                                <p class="card-text" style="color:yellow;">
                                        សិស្ស​សរុប៖  {{ $sum }} នាក់                                              
                                </p>
                                    
                            </div>
                        </div>
                    </a>
            </div>

    {{-- បញ្ជីវគ្គវែងសង្ខេប --}}
                    <div class="col-md-3" style="padding-top:20px;">
                            <a href="{{route('projects.longcourse')}}" class="easy-link-menu">
                                    <div class="dash-card card-yellow text-xs-center">
                                    <div class="card-block">       
                                            <?php $sum=0; ?>
                                            @foreach ($data['TotalLongCourse'] as $item)
                                                <?php $sum=$sum+$item->LongCourse_count; ?>
                                            @endforeach

                                        <h6 class="card-title" style="padding:5px;">      
                                                <i class="fa fa-briefcase" aria-hidden="true"></i> បញ្ជីវគ្គ​វែង         
                                        </h6>
                                        <p class="card-text" style="padding:5px;">                               
                                            ចំនួនវគ្គសរុប៖​  {{$data['TotalLongCourse']->count()}} វគ្គ 
                                        </p> 
                                        <p class="card-text" style="color:yellow;">
                                                សិស្ស​សរុប៖  {{ $sum }} នាក់                                              
                                        </p>
                                    
                                    </div>
                                </div>
                            </a>
                    </div>

    {{-- របាយការណ៍ --}}
    <div class="col-md-3" style="padding-top:20px;">
            <a href="{{route('projects.longcourse')}}" class="easy-link-menu">
                    <div class="dash-card card-red text-xs-center">
                    <div class="card-block">       
                            <?php $sum=0; ?>
                            @foreach ($data['TotalLongCourse'] as $item)
                                <?php $sum=$sum+$item->LongCourse_count; ?>
                            @endforeach

                        <h6 class="card-title" style="padding:5px;">      
                                <i class="menu-icon fa fa-bar-chart"></i> របាយការណ៍        
                        </h6>
                        <p class="card-text" style="padding:5px;">                               
                            ចំនួនវគ្គសរុប៖​  {{$data['TotalLongCourse']->count()}} វគ្គ 
                        </p> 
                        <p class="card-text" style="color:yellow;">
                                សិស្ស​សរុប៖  {{ $sum }} នាក់                                              
                        </p>
                    
                    </div>
                </div>
            </a>
    </div>

    {{-- Quiz --}}

    <div class="col-md-3" style="padding-top:20px;">
            <a href="{{route('projects.longcourse')}}" class="easy-link-menu">
                    <div class="dash-card card-red text-xs-center">
                    <div class="card-block">       
                            <?php $sum=0; ?>
                            @foreach ($data['TotalLongCourse'] as $item)
                                <?php $sum=$sum+$item->LongCourse_count; ?>
                            @endforeach

                        <h6 class="card-title" style="padding:5px;">      
                                <i class="menu-icon fa fa-bar-chart"></i> របាយការណ៍        
                        </h6>
                        <p class="card-text" style="padding:5px;">                               
                            ចំនួនវគ្គសរុប៖​  {{$data['TotalLongCourse']->count()}} វគ្គ 
                        </p> 
                        <p class="card-text" style="color:yellow;">
                                សិស្ស​សរុប៖  {{ $sum }} នាក់                                              
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

                

            

        

                       
    </div>

       
</div>



    <div class="container-fluid">
        <hr>
        <div class="row justify-content-center">
            {{-- Login User --}}
            <div class="col-md-5">
                <div class="card">
                       
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
    
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data['users'] as $user)

                                @if ($user->isOnline())
                                <tr>
                                       <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>
                                            @if ($user->isOnline())
                                                <li class="text-success">
                                                    Online
                                                </li>
                                            @else
                                                <li class="text-muted">
                                                    Offline
                                                </li>
                                            @endif
                                        </td>
                                    </tr>
                               
                                @endif

                                    {{-- <tr>


                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>
                                            @if ($user->isOnline())
                                                <li class="text-success">
                                                    Online
                                                </li>
                                            @else
                                                <li class="text-muted">
                                                    Offline
                                                </li>
                                            @endif
                                        </td>
                                    </tr> --}}
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

{{-- All Short Courses --}}            
{{-- ពត៌មានវគ្គខ្លី --}}
        <div class="col-md-5">
                    <div class="widget-box transparent">
                        <div class="widget-header widget-header-flat">
                            <h4 class="widget-title lighter" style="font-family: 'Khmer OS Battambang';">
                                <i class="ace-icon fa fa-briefcase orange"></i>
                                ពត៌មានវគ្គខ្លី
                            </h4>
    
                            <div class="widget-toolbar">
                                <a href="#" data-action="collapse">
                                    <i class="ace-icon fa fa-chevron-up"></i>
                                </a>
                            </div>
                        </div>
    
                        <div class="widget-body" style="display: block;">
                            <div class="widget-main no-padding">
                                <table class="table table-bordered table-striped">
                                    <thead class="thin-border-bottom">
                                        <tr>
                                            <th width="60">
                                                <i class="ace-icon fa fa-caret-right blue"></i>ល.រ
                                            </th>
    
                                            <th>
                                                <i class="ace-icon fa fa-caret-right blue"></i>ឈ្មោះវគ្គ
                                            </th>
    
                                            <th class="hidden-480">
                                                <i class="ace-icon fa fa-caret-right blue"></i>ចំនួនសិស្ស
                                            </th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                            <?php $i=0; $sum_SC=0; ?>
                                            @foreach ($data['TotalShortCourse'] as $item)
                                            <tr>
                                                <td>{{$i=$i+1}}</td>
                                                    <td>{{ $item->course_short_id }}-{{ $item->course_name }}</td>
                                                    <td style="text-align: center;">
                                                        {{ $item->ShortCourse_count }}
                                                        <?php $sum_SC=$sum_SC+$item->ShortCourse_count; ?>
                                            
                                                    </td>
                                            </tr>
                                            @endforeach
                                            <tr style="background-color:tomato; font-size:18px;">
                                                <td>
                                                </td>
                                                <td>វគ្គសរុប ៖ {{$i}} សិស្សសរុប ៖ </td>
                                                <td style="text-align: center;">
                                                    {{$sum_SC}}
                                                </td>
                                            </tr>
                                        </tbody>
    
                                    {{-- <tbody>
                                        <tr>
                                            <td>internet.com</td>    
                                            <td>
                                                <small>
                                                    <s class="red">$29.99</s>
                                                </small>
                                                    <b class="green">$19.99</b>
                                            </td>
    
                                            <td class="hidden-480">
                                                <span class="label label-info arrowed-right arrowed-in">on sale</span>
                                            </td>
                                        </tr>



    
                                        <tr>
                                            <td>online.com</td>
    
                                            <td>
                                                <b class="blue">$16.45</b>
                                            </td>
    
                                            <td class="hidden-480">
                                                <span class="label label-success arrowed-in arrowed-in-right">approved</span>
                                            </td>
                                        </tr>
    
                                        <tr>
                                            <td>newnet.com</td>
    
                                            <td>
                                                <b class="blue">$15.00</b>
                                            </td>
    
                                            <td class="hidden-480">
                                                <span class="label label-danger arrowed">pending</span>
                                            </td>
                                        </tr>
    
                                        <tr>
                                            <td>web.com</td>
    
                                            <td>
                                                <small>
                                                    <s class="red">$24.99</s>
                                                </small>
                                                <b class="green">$19.95</b>
                                            </td>
    
                                            <td class="hidden-480">
                                                <span class="label arrowed">
                                                    <s>out of stock</s>
                                                </span>
                                            </td>
                                        </tr>
    
                                        <tr>
                                            <td>domain.com</td>
    
                                            <td>
                                                <b class="blue">$12.00</b>
                                            </td>
    
                                            <td class="hidden-480">
                                                <span class="label label-warning arrowed arrowed-right">SOLD</span>
                                            </td>
                                        </tr>
                                    </tbody> --}}
                                
                                </table>
                            </div><!-- /.widget-main -->
                        </div><!-- /.widget-body -->
                    </div><!-- /.widget-box -->
                </div>



        </div>
    </div>