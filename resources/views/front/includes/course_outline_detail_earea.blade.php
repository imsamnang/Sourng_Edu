<!--================ Start Course Details Area =================-->
<section class="course_details_area section_gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 course_details_left">
                <h3 class="title2">{{$data['CourseOutline']->title}}</h3>
                <div class="main_image videoWrapper">
                    {{-- <img class="img-fluid" src="{{asset('images/book/'.$data['CourseOutline']->image.'')}}" alt=""> --}}
                    @if ($data['CourseOutline']->video_type=='yt')
                    <iframe class="videoWrapper" width="100%" height="350" src="https://www.youtube.com/embed/{{$data['CourseOutline']->video}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        {{-- <iframe width="560" height="315" src="https://www.youtube.com/embed/{{$data['CourseOutline']->video}}?controls=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> --}}
                    @endif
                    
                </div>
                {{-- Objectives --}}
                <div class="content_wrapper">                  

                    {{-- Course Outline --}}
                    {{-- <h4 class="title">Course Outline <span style="color:green;">{{$data['CourseOutline']->count()}}</span></h4> --}}
                    

                    {{-- {{ $data['CourseOutline']->detail }} --}}
                    {!! $data['CourseOutline']->detail !!}

                    {{-- End Course Outline --}}


                    

                </div>

            </div>

            {{-- right-contents --}}

           {{-- @include('front.includes.right_conent') --}}

            {{-- End right-contents --}}
        </div>
    </div>
</section>
<!--================ End Course Details Area =================-->