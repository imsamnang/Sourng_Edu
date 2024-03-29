<!-- 'name', 'email', 'password', 'profile_image', 'email', 'contact_number', 'address','user_type', -->
<div class="tabbable">
    <ul class="nav nav-tabs padding-12 tab-color-blue background-blue" id="myTab4">
        <li class="active">
            <a data-toggle="tab" href="#registrationinfo">@lang('stu_General_Information')</a>
        </li>
        <li>
            <a data-toggle="tab" href="#academicInfo">@lang('stu_Academic_Info')</a>
        </li>
        <li class="">
            <a data-toggle="tab" href="#profileimage">@lang('stu_Profile_Images')</a>
        </li>
    </ul>

    <div class="tab-content">
        <div id="registrationinfo" class="tab-pane active">
            @include('student-register.registration.includes.forms.generalinfo')
            {{-- @include('student-health.registration.includes.forms.parent') --}}
        </div>

        <div id="academicInfo" class="tab-pane">
            {{-- @include('student-health.registration.includes.forms.academicinfo') --}}
        </div>

        <div id="profileimage" class="tab-pane">
            {{-- @include('student-health.registration.includes.forms.profileimage') --}}
        </div>
    </div>



    <div class="space-4"></div>



    <div class="hr hr-24"></div>
</div>