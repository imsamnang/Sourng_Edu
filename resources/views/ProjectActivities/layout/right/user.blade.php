<?php  $flag = App()->getLocale();?>
<div class="container-fluid">

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

                      
    </div>
</div>
