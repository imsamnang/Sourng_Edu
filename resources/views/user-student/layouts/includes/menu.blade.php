
<div id="sidebar" class="sidebar h-sidebar navbar-collapse collapse ace-save-state hidden-print">
    <script type="text/javascript">
        try{ace.settings.loadState('sidebar')}catch(e){}
    </script>

    <ul class="nav nav-list">
        {{-- Dashboard --}}
        <li class="{!! request()->is('user-student')?'active':'' !!}">
            <a href="{{ route('user-student') }}" >
                <i class="menu-icon fa fa-tachometer"></i>
                <span class="menu-text"> {{__('m_dashboard')}} </span>
            </a>
        </li>

        {{-- Profile --}}
        <li class="{!! request()->is('user-student/profile')?'active':'' !!}">
            <a href="{{ route('user-student.profile') }}" >
                <i class="menu-icon fa fa-user"></i>
                <span class="menu-text"> {{__('stu_frm_detail_Profile')}} </span>
            </a>
        </li>

        {{-- Account --}}
        <li class="{!! request()->is('user-student/fees*')?'active open':'' !!}  hover">
            <a href="{{ route('user-student.fees') }}" >
                <i class="menu-icon fa fa-calculator" aria-hidden="true"></i>
                <span class="menu-text">{{__('stu_frm_detail_Fees')}}</span>
            </a>
        </li>

        {{-- Library --}}
        <li class="{!! request()->is('user-student/library*')?'active':'' !!} hover">
            <a href="{{ route('user-student.library') }}" >
                <i class="menu-icon fa fa-book" aria-hidden="true"></i>
                <span class="menu-text">{{__('lang_Library')}}</span>
            </a>
            <b class="arrow"></b>
        </li>

        {{-- Attendence --}}
        <li class="{!! request()->is('user-student/attendance*')?'active':'' !!} hover">
            <a href="{{ route('user-student.attendance') }}">
                <i class="menu-icon fa fa-calendar" aria-hidden="true"></i>
                <span class="menu-text"> {{__('lang_Attendance')}}</span>
            </a>
            <b class="arrow"></b>
        </li>

        {{-- Examination --}}
        <li class="{!! request()->is('user-student/exams*')?'active':'' !!} hover">
            <a href="{{ route('user-student.exams') }}">
                <i class="menu-icon fa fa-line-chart"  aria-hidden="true"></i>
                <span class="menu-text"> {{__('m_Examination')}}</span>
            </a>
            <b class="arrow"></b>
        </li>

        {{-- Hostel --}}
        <li class="{!! request()->is('user-student/hostel*')?'active':'' !!} hover">
            <a href="{{ route('user-student.hostel') }}">
                <i class="menu-icon  fa fa-bed" aria-hidden="true"></i>
                <span class="menu-text"> {{__('m_Hostels')}} </span>
            </a>
            <b class="arrow"></b>
        </li>

        {{-- Transport --}}
        <li class="{!! request()->is('user-student/transport*')?'active':'' !!} hover">
            <a href="{{ route('user-student.transport') }}">
                <i class="menu-icon  fa fa-bus" aria-hidden="true"></i>
                <span class="menu-text"> {{__('m_Transport')}} </span>
            </a>
            <b class="arrow"></b>
        </li>

        {{-- Subject --}}
        <li class="{!! request()->is('user-student/subject*')?'active':'' !!} hover">
            <a href="{{ route('user-student.subject') }}">
                <i class="menu-icon  fa fa-list-alt" aria-hidden="true"></i>
                <span class="menu-text"> {{__('Faculty.Course')}} </span>
            </a>
            <b class="arrow"></b>
        </li>

        {{-- Notice --}}
        <li class="{!! request()->is('user-student/notice*')?'active':'' !!} hover">
            <a href="{{ route('user-student.notice') }}">
                <i class="menu-icon  fa fa-bullhorn" aria-hidden="true"></i>
                <span class="menu-text"> {{__('info-notice.Notice')}} </span>
            </a>
            <b class="arrow"></b>
        </li>

        {{-- HomeWork --}}
        {{-- <li class="{!! request()->is('user-student/notice*')?'active':'' !!} hover">
            <a href="{{ route('user-student.notice') }}">
                <i class="menu-icon  fa fa-tasks" aria-hidden="true"></i>
                <span class="menu-text"> HomeWork </span>
            </a>
            <b class="arrow"></b>
        </li> --}}

        {{-- Download --}}
        <li class="{!! request()->is('user-student/download*')?'active':'' !!} hover">
            <a href="{{ route('user-student.download') }}">
                <i class="menu-icon  fa fa-download" aria-hidden="true"></i>
                <span class="menu-text"> {{__('download.Download')}} </span>
            </a>
            <b class="arrow"></b>
        </li>

        {{-- Assignment --}}
        <li class="{!! request()->is('user-student/assignment*')?'active':'' !!} hover">
            <a href="{{ route('user-student.assignment') }}">
                <i class="menu-icon  fa fa-tasks" aria-hidden="true"></i>
                <span class="menu-text"> {{__('m_Assignment')}} </span>
            </a>
            <b class="arrow"></b>
        </li>

    </ul><!-- /.nav-list -->
</div>
