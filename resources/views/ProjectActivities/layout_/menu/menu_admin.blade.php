
<div id="sidebar" class="sidebar h-sidebar navbar-collapse collapse ace-save-state hidden-print">
    <script type="text/javascript">
        try{ace.settings.loadState('sidebar')}catch(e){}
    </script>

    <ul class="nav nav-list">
        {{-- Dashboard --}}
        <li class="{!! request()->is('/')?'active':'' !!}">
            <a href="{{ route('home') }}" >
                <i class="menu-icon fa fa-tachometer"></i>
                <span class="menu-text"> @lang('m_dashboard') </span>
                <b class="arrow fa fa-angle-down"></b>
            </a>
        </li>
        <li class="{!! request()->is('/')?'active':'' !!}">
                <a href="{{ route('student-list') }}" >
                    <i class="menu-icon fa fa-users"></i>
                    <span class="menu-text">
                         @lang('m_StudentList') 
                                             
                    </span>
                    <b class="arrow fa fa-angle-down"></b>
                </a>
         </li>
         <li class="{!! request()->is('/')?'active':'' !!}">
            <a href="{{ route('staff-list') }}" >
                <i class="menu-icon fa fa-users"></i>
                <span class="menu-text">
                    @lang('m_StaffList') 
                                     
                </span>
                <b class="arrow fa fa-angle-down"></b>
            </a>
        </li>

        <li class="{!! request()->is('/')?'active':'' !!}">
            <a href="{{ route('projects.shortcourse') }}" >
                <i class="menu-icon fa fa-book"></i>
                <span class="menu-text">
                    @lang('S_Course')                    
                </span>
                <b class="arrow fa fa-angle-down"></b>
            </a>
        </li>

        <li class="{!! request()->is('/')?'active':'' !!}">
                <a href="{{ route('projects.longcourse') }}" >
                    <i class="menu-icon fa fa-book"></i>
                    <span class="menu-text">
                        @lang('m_LongCourse')                                            
                    </span>
                    <b class="arrow fa fa-angle-down"></b>
                </a>
        </li>

        <li class="{!! request()->is('account/fees*')?'active open':'' !!} hover">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-book"></i>
                @lang('Manage Quizs')
                <b class="arrow fa fa-angle-r"></b>
            </a>
            <b class="arrow"></b>
            <ul class="submenu">
                <li class="{!! request()->is('account/fees')?'active':'' !!}  hover">
                    <a href="#">
                        <i class="menu-icon fa fa-caret-right"></i>
                        @lang('Topics')
                    </a>
                    <b class="arrow"></b>
                </li>
                <li class="{!! request()->is('account/fees')?'active':'' !!}  hover">
                    <a href="#">
                        <i class="menu-icon fa fa-caret-right"></i>
                        @lang('Subjects')
                    </a>
                    <b class="arrow"></b>
                </li>
                <li class="{!! request()->is('account/fees/collection')?'active':'' !!} hover">
                    <a href="#" accesskey="R">
                        <i class="menu-icon fa fa-caret-right"></i>
                        @lang('Questions')
                    </a>

                    <b class="arrow"></b>
                </li>
                <li class="{!! request()->is('account/fees/balance')?'active':'' !!}  hover">
                    <a href="#">
                        <i class="menu-icon fa fa-caret-right"></i>
                        @lang('Questions Options')
                    </a>

                    <b class="arrow"></b>
                </li>
                <li class="{!! request()->is('account/fees/master/add')?'active':'' !!} hover">
                    <a href="#">
                        <i class="menu-icon fa fa-caret-right"></i>
                        @lang('My Result')
                    </a>
                    <b class="arrow"></b>
                </li>
                <li class="{!! request()->is('account/fees/head')?'active':'' !!}  hover">
                    {{-- <a href="#"> --}}
                        <i class="menu-icon fa fa-caret-right"></i>
                        @lang('New Quiz')
                    </a>
                    <b class="arrow"></b>
                </li>
                <li class="{!! request()->is('exam')?'active':'' !!}  hover">
                    <a href="{{ route('quiz.subject.index') }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        @lang('Create New Quiz')
                    </a>
                    <b class="arrow"></b>
                </li>                
            </ul>
        </li>

   

    </ul><!-- /.nav-list -->
</div>
