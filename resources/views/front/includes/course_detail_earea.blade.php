<!--================ Start Course Details Area =================-->
<section class="course_details_area section_gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 course_details_left">
                <h3 class="title2">{{$data['subject']->title}}</h3>
                <div class="main_image">
                    <img class="img-fluid" src="{{asset('images/book/'.$data['subject']->image.'')}}" alt="">
                </div>
                {{-- Objectives --}}
                <div class="content_wrapper">
                    {{-- Objectives --}}
                    <h4 class="title">Objectives</h4>
                    <div class="content">
                        {!! $data['subject']->objective !!}
                    </div>

                    {{-- Eligibility --}}
                        {{-- <h4 class="title">Eligibility</h4>
                        <div class="content">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore
                            magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                            ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.
                            <br>
                            <br>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore
                            magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                            ut aliquip ex ea
                            commodoconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum. Lorem ipsum dolor sit
                            amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                            dolore magna aliqua. Ut enim
                            ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                            commodo consequat. Duis aute
                            irure dolor in reprehenderit in voluptate velit esse cillum.
                        </div> --}}
                    {{-- End Eligibility --}}

                    {{-- Course Outline --}}
                    <h4 class="title">Course Outline <span style="color:green;">{{$data['course_outline']->count()}}</span></h4>
                    <div class="content">
                        @if ($data['course_outline']->count()>0)
                        <ul class="course_list">
                                @foreach ($data['course_outline'] as $item)
                                <li class="justify-content-between d-flex">
                                        <p>{{$item->title}}</p>
                                        <a class="primary-btn text-uppercase" href="{{url('courseoutline/'.$item->slug.'/detail')}}">View Details</a>
                                    </li>
                                @endforeach                           
    
                            </ul>
                        @else
                            <h4>No Course Outline</h4>
                        @endif
                        
                    </div>
                    {{-- End Course Outline --}}

                </div>

            </div>

            {{-- right-contents --}}
            <div class="col-lg-4 right-contents">
                <ul>
                    @php
                        $staff = App\Models\Staff::where('id', $data['subject']->staff_id)->get();                            
                    @endphp
                    @foreach ($staff as $staff)
                    <li>
                        <a class="justify-content-between d-flex" href="#">
                            <p>{{__('front_Trainer_Name')}}</p>
                            <span class="or">{{$staff->first_name}} </span>
                        </a>
                    </li>
                    @endforeach
                    <li>
                        <a class="justify-content-between d-flex" href="#">
                            <p>{{__('front_Subject_Fee')}} </p>
                            @if ($data['subject']->subject_fee==0.00)
                                <span>Free</span>
                            @else
                                <span>${{$data['subject']->subject_fee}}</span>
                            @endif
                            
                        </a>
                    </li>
                    <li>
                        <a class="justify-content-between d-flex" href="#">
                            <p><i class="fas fa-clock"></i> Credit Hours </p>
                            <span>{{$data['subject']->credit_hour}} ម៉ោង​/Hours</span>
                        </a>
                    </li>
                    <li>
                        <a class="justify-content-between d-flex" href="#">
                            <p><i class="fas fa-book"></i> Class Type </p>
                            <span>{{$data['subject']->class_type}}</span>
                        </a>
                    </li>
                    <li>
                        <a class="justify-content-between d-flex" href="#">
                            <p><i class="fas fa-book-reader"></i> Readers in : {{ now()->year }}</p>
                            <span>{{$data['subject']->view_count}} នាក់​</span>
                        </a>
                    </li>

                    <li>
                            <a class="justify-content-between d-flex" href="#">                               
                                
                                <?php 
                                // // echo (now())->format('m/d/Y H:i'); 
                                // $month = (now())->format('m/Y') ;
                                // // echo $month;
    
                                // $date = new \Carbon\Carbon('1 months');
                                // $firstOfQuarter = $date->firstOfQuarter();
                                // $lastOfQuarter = $date->lastOfQuarter();
                                // // echo $lastOfQuarter;

                                //the month number without any leading zeros
                                $month = date("n"); 
                                //Calculate the year quarter.
                                $yearQuarter = ceil($month / 3);
 
                                //Print it out
                                echo "We are currently in Q$yearQuarter of " . date("Y");


    
                                
                                ?>
                            </a>
                        </li>

                </ul>

                <!-- Authentication Links -->
                @guest
                    <div class="button-group-area mt-40">
                        <a href="{{ route('login') }}" class="genric-btn success radius text-uppercase enroll rounded-0">Login the course</a>
                        <a href="{{ route('register') }}" class="genric-btn primary radius text-uppercase enroll rounded-0">Enroll the course</a>
                        {{-- <a href="#" class="genric-btn success radius text-uppercase enroll rounded-0">Success</a> --}}
                           
                    </div>
                   
                    @if (Route::has('register'))
                        {{-- <li class="nav-item">
                            <a style="margin-top: 15px;" class="btn btn-success navbar-btn" href="{{ route('register') }}">{{ __('front_Guest_Register') }}</a>
                        </li> --}}
                    @endif

                @else
                    <a href="{{ route('admin') }}" class="genric-btn success radius text-uppercase enroll rounded-0">Enroll the course</a>
                    {{-- <a href="{{ route('admin') }}" class="genric-btn primary radius text-uppercase enroll rounded-0">Enroll the course</a> --}}
                    
                @endguest



                {{-- Reviews --}}
                    <h4 class="title">Reviews</h4>
                    <div class="content">
                        <div class="review-top row pt-40">
                            <div class="col-lg-12">
                                {{-- <h6 class="mb-15">Provide Your Rating</h6> --}}
                                {{-- @php
                                    // $QuizResult = App\Models\Quiz\QuizResults::where('id', $data['subject']->staff_id)->get();
                                    $QuizResult = App\Models\Quiz\QuizResults::all();                            
                                @endphp

                                @foreach ($QuizResult as $QResult)
                                    @php
                                    //the month number without any leading zeros
                                    $month = date("n", strtotime($QResult->result_date));
                                    //Calculate the year quarter.
                                    $yearQuarter = ceil($month / 3);
    
                                    //Print it out
                                    echo "We are currently in Q$yearQuarter of " . date("Y");
                                    @endphp
                                    
                                    <p>{{$QResult->user_name}}-{{$QResult->user_name}}</p>                                    
                                @endforeach --}}



                                {{-- 
                                    <div class="d-flex flex-row reviews justify-content-between">
                                    <span>Quality</span>
                                    <div class="star">
                                        <i class="ti-star checked"></i>
                                        <i class="ti-star checked"></i>
                                        <i class="ti-star checked"></i>
                                        <i class="ti-star"></i>
                                        <i class="ti-star"></i>
                                    </div>
                                    <span>Outstanding</span>
                                </div>
                                <div class="d-flex flex-row reviews justify-content-between">
                                    <span>Puncuality</span>
                                    <div class="star">
                                        <i class="ti-star checked"></i>
                                        <i class="ti-star checked"></i>
                                        <i class="ti-star checked"></i>
                                        <i class="ti-star"></i>
                                        <i class="ti-star"></i>
                                    </div>
                                    <span>Outstanding</span>
                                </div>
                                <div class="d-flex flex-row reviews justify-content-between">
                                    <span>Quality</span>
                                    <div class="star">
                                        <i class="ti-star checked"></i>
                                        <i class="ti-star checked"></i>
                                        <i class="ti-star checked"></i>
                                        <i class="ti-star"></i>
                                        <i class="ti-star"></i>
                                    </div>
                                    <span>Outstanding</span>
                                </div> --}}



                            </div>
                        </div>
                        {{-- <div class="feedeback">
                            <h6>Your Feedback</h6>
                            <textarea name="feedback" class="form-control" cols="10" rows="10"></textarea>
                            <div class="mt-10 text-right">
                                <a href="#" class="primary-btn2 text-right rounded-0 text-white">Submit</a>
                            </div>
                        </div>
                        <div class="comments-area mb-30">
                            <div class="comment-list">
                                <div class="single-comment single-reviews justify-content-between d-flex">
                                    <div class="user justify-content-between d-flex">
                                        <div class="thumb">
                                            <img src="img/blog/c1.jpg" alt="">
                                        </div>
                                        <div class="desc">
                                            <h5><a href="#">Emilly Blunt</a>
                                                <div class="star">
                                                    <span class="ti-star checked"></span>
                                                    <span class="ti-star checked"></span>
                                                    <span class="ti-star checked"></span>
                                                    <span class="ti-star"></span>
                                                    <span class="ti-star"></span>
                                                </div>
                                            </h5>
                                            <p class="comment">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                eiusmod tempor incididunt ut labore et dolore.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="comment-list">
                                <div class="single-comment single-reviews justify-content-between d-flex">
                                    <div class="user justify-content-between d-flex">
                                        <div class="thumb">
                                            <img src="img/blog/c2.jpg" alt="">
                                        </div>
                                        <div class="desc">
                                            <h5><a href="#">Elsie Cunningham</a>
                                                <div class="star">
                                                    <span class="ti-star checked"></span>
                                                    <span class="ti-star checked"></span>
                                                    <span class="ti-star checked"></span>
                                                    <span class="ti-star"></span>
                                                    <span class="ti-star"></span>
                                                </div>
                                            </h5>
                                            <p class="comment">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                eiusmod tempor incididunt ut labore et dolore.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="comment-list">
                                <div class="single-comment single-reviews justify-content-between d-flex">
                                    <div class="user justify-content-between d-flex">
                                        <div class="thumb">
                                            <img src="img/blog/c3.jpg" alt="">
                                        </div>
                                        <div class="desc">
                                            <h5><a href="#">Maria Luna</a>
                                                <div class="star">
                                                    <span class="ti-star checked"></span>
                                                    <span class="ti-star checked"></span>
                                                    <span class="ti-star checked"></span>
                                                    <span class="ti-star"></span>
                                                    <span class="ti-star"></span>
                                                </div>
                                            </h5>
                                            <p class="comment">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                eiusmod tempor incididunt ut labore et dolore.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                {{-- End Reviews --}}

            </div>

            {{-- End right-contents --}}
        </div>
    </div>
</section>
<!--================ End Course Details Area =================-->