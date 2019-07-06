@extends('projectactivities.layout.master')
<?php  $flag = app()->getLocale();?>
@section('menu-panel')
@include('projectactivities.layout.menu.menu_admin')
@endsection

@section('css')
    
@endsection
@section('content')
  
<div class="card table-bordered" style="margin-top: 15px; margin-left: 15px; margin-right: 15px; padding-left: 30px; padding-right: 30px; padding-bottom: 30px; padding-top: 5px; border-color: #79b0ce;">
        <b><hr></b>
        <h4 style="color: white; font-family: Khmer OS Battambang;
         background-color: #438eb9; padding: 10px;">បញ្ជីឈ្មោះសិស្សរៀនវគ្គខ្លី</h4>
        <b><hr></b>
        <div class="card-body">
          <fieldset>
            <table>
            <tbody><tr>
            <td style="width: 160px;"><strong>លេខកូដវគ្គ</strong></td>
            <td style="width: 240px; font-size: 14px; color: red;">
            
                      <select style="width: 100%" name="cbo_course_cod" required="" disabled="">                         
                          <option value="0">សូមជ្រើសរើស </option>
                          @foreach ($faculty as $rows){
                            @if ($flag=='kh')
                            <option value="{{ $rows->id }}"
                              {{ $rows->id==$data['faculty_selected']->id ?'selected':''}}
                              >( {{ $rows->id}} ) {{ $rows->faculty_kh}}
                            </option>
                            @else
                            <option value="{{ $rows->id }}"
                              {{ $rows->id==$data['faculty_selected']->id ?'selected':''}}
                              >( {{ $rows->id}} ) {{ $rows->faculty}}
                            </option>                                  
                            @endif

                            
                          @endforeach
                      </select>
            </td>
            <td style="width: 160px;"><strong>  ឈ្មោះវគ្គ</strong></td>
            <td style="width: 240px; font-size: 14px; color: red;">
              <label value="{{ $shortcourse_detail->course_name }}">{{ $shortcourse_detail->course_name }}</label>
             </td>
            </tr>

            <tr>
            <td style="width: 160px;"><strong>មូលនិធិជារួម</strong></td>
            <td colspan="3" style="font-size: 14px; color: red;">
            
            <select style="width: 100%" name="cbo_fund_overall" disabled="">                         
                          @foreach ($overal_fund as $rows)
                           @if ($flag=='kh')
                            <option value="{{ $rows->id }}"
                              {{ $rows->id==$shortcourse_detail->overal_fund ?'selected':''}}
                              >( {{ $rows->id}} ) {{ $rows->title_kh}}
                            </option>
                            @else
                            <option value="{{ $rows->id }}"
                              {{ $rows->id==$shortcourse_detail->overal_fund ?'selected':''}}
                              >( {{ $rows->id}} ) {{ $rows->title_en}}
                            </option>
                            @endif


                          @endforeach
                        </select>

             </td>
            </tr>

            <tr>
            <td style="width: 160px;"><strong>ចំនួនម៉ោងបណ្តុះបណ្តាលសរុប</strong></td>
            <td style="width: 240px; font-size: 14px; color: red;">
              <label value="{{ $shortcourse_detail->course_name }}">{{ $shortcourse_detail->total_training_hour }}</label>
            </td>

            <td style="width: 160px;"> </td>
            <td style="width: 240px;"> </td>
            </tr>

            <tr>
            <td style="width: 160px;"><strong>ឈ្មោះគ្រូ (1):</strong></td>
            <td colspan="3" style="font-size: 14px; color: red;">
            សន សុផល (tel: 012 628 151 | dob: 1970-06-15) </td>
            </tr>

            <tr>
            <td style="width: 160px;"><strong>បែបបទនៃការបណ្តុះបណ្តាល</strong></td>
            <td colspan="3" style="font-size: 14px; color: red;">
            
              <select style="width: 100%" required="" name="cbo_modality" disabled="">                      
                          @foreach ($modality as $rows)
                            @if ($flag=='kh')
                            <option value="{{ $rows->id }}"
                              {{ $rows->id==$shortcourse_detail->modality ?'selected':''}}
                              >( {{ $rows->id}} ) {{ $rows->modality_kh}}
                            </option>
                            @else
                            <option value="{{ $rows->id }}"
                              {{ $rows->id==$shortcourse_detail->overal_fund ?'selected':''}}
                              >( {{ $rows->id}} ) {{ $rows->modality_en}}
                            </option>
                            @endif
                          @endforeach
                        </select>
            </td>
            </tr>

            <tr>
            <td style="width: 160px;"><strong>ទីតាំងបណ្តុះបណ្តាល </strong></td>
            <td colspan="3" style="font-size: 14px; color: red;">
                      <select style="width: 100%" name="cbo_province" disabled="">
                          @foreach ($provinces as $rows)
                              @if ($flag=='kh')
                                <option value="{{ $rows->id }}"
                                  {{ $rows->id==$shortcourse_detail->province ?'selected':''}}
                                  >( {{ $rows->id}} ) {{ $rows->name_kh}}
                                </option>
                                @else
                                <option value="{{ $rows->id }}"
                                  {{ $rows->id==$shortcourse_detail->province ?'selected':''}}
                                  >( {{ $rows->id}} ) {{ $rows->name_en}}
                                </option>
                                @endif
                          @endforeach
                      </select>
            </td>
            
            </tr>

            <tr>
            <td style="width: 160px;"><strong>កាលបរិច្ឆេទ&#8203;ចាប់ផ្តើម:</strong></td>
            <td style="width: 240px; font-size: 14px; color: red;">
              <label value="{{ $shortcourse_detail->start_date }}">{{ $shortcourse_detail->start_date }}</label>
            </td>
            <td style="width: 160px;"><strong>កាលបរិច្ឆេទបញ្ចប់:</strong></td>
            <td style="width: 240px; font-size: 14px; color: red;">
                <label value="{{ $shortcourse_detail->end_date }}">{{ $shortcourse_detail->end_date }}</label>
            </td>
            </tr>
            </tbody></table>
            </fieldset>

            <br><br>
            <hr>

            <fieldset>
              <div class="row">
                <div class="col-xs-12">
                  {{-- @include('projectactivities.courses.shortcourse.includes.data_table_header') --}}
                  <!-- div.table-responsive -->
                  <div class="table-responsive">
                    {!! Form::open() !!}
                    <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                      <thead>
                        <tr>
                          <th class="center">
                            <label class="pos-rel">
                              <input type="checkbox" class="ace" />
                              <span class="lbl"></span>
                            </label>
                          </th>
                          <th>{{ __('shortcoure_id') }}</th>
                          <th>ឈ្មោះសិស្ស</th>
                          <th>ភេទ</th>
                          <th>ថ្ងៃខែឆ្នាំកំណើត</th>
                          <th>ប្រភពមូលនិធិ</th>
              {{--             <th class="hidden-480">@lang('lc_MainSubject')</th>
              <th class="hidden-480">@lang('lc_ProgramType')</th>   --}}                  
              <th class="hidden-480">បានបញ្ចប់ ?</th>
              <th class="hidden-480">មាន​ការងារធ្វើ ?</th>
              <th class="hidden-480">{{ __('shortcoure_Action') }}</th>
              </tr>
              </thead>
              <tbody>
                @if (isset($data['ListCourse']) && $data['ListCourse']->count() > 0)
                @php($i=1)
                @foreach($data['ListCourse'] as $row)
                <tr>
                  <td class="center first-child">
                    <label>
                      <input type="checkbox" name="chkIds[]" value="{{ $row->id }}" class="ace" />
                      <span class="lbl"></span>
                    </label>
                  </td>
                  <td>{{ $i }}</td>
                  {{-- <td class="action-buttons"><a href="{{ $row->id }}">{{ $row->batch_group }} <span style="color:red;">(11 នាក់)</span></a></td> --}}
                  <td class="hidden-480"><a href="#">{{ $row->faculty->faculty_kh }} </a> </td>
                  <td class="hidden-480"><a href="#"> {{ $row->course_name }}</a></td>
                  <td class="hidden-480"><a href="#"> {{ $row->total_training_hour }}</a></td>
                  <td class="hidden-480"><a href="#"> {{ $row->overalFund->title_kh }}</a></td>
                  <td class="hidden-480 ">
                    <div class="btn-group">
                                    {{-- <button data-toggle="dropdown" class="btn btn-primary btn-minier dropdown-toggle {{ $row->status == 'active'?"btn-info":"btn-warning" }}" >
                                        {{ $row->status == 'active'?"Active":"In Active" }}
                                        <span class="ace-icon fa fa-caret-down icon-on-right"></span>
                                      </button> --}}                         
                                      @if ($row->status == 'active')
                                      <a href="#" title="Active"><i class="fa fa-check success" aria-hidden="true"></i></a>
                                      @else
                                      <a href="#" title="In-Active"><i class="fa fa-remove" aria-hidden="true"></i></a>
                                      @endif
                                    </div>
                                  </td>                      
                                  <td>
                                    <div class="hidden-sm hidden-xs action-buttons">
                                    <a href="{{route('projects.shortcourse_detail')}}">បញ្ជីឈ្មោះសិស្ស <span style="color:red;">(11 នាក់)</span></a> |
                                      <a href="#"> ធ្វើបច្ចុប្បន្នភាព</a>
              
                                      <a href="{{ $row->id }}" class="btn btn-primary btn-minier btn-primary">
                                        <i class="ace-icon fa fa-eye bigger-130"></i>
                                      </a>
              
                                      <a href="{{ route('edit-shortcourse.edit',$row->id) }}" class="btn btn-primary btn-minier btn-success">
                                        <i class="ace-icon fa fa-pencil bigger-130"></i>
                                      </a>
              
                                       {{-- <a href="{{ route('delete-shortcourse.destroy',$row->id) }}" class="btn btn-primary btn-minier btn-danger bootbox-confirm" >
                                          <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                        </a>  --}}
              
                                        <form id="delete-form-{{$row->id}}" action="{{ route('delete-shortcourse.destroy',$row->id) }}"
                                          method="POST" style="display: none">
                                          @csrf
                                          @method('DELETE')
                                        </form>
              
                                        <button type="button" class="btn btn-xs btn-danger" onclick="deletePost({{$row->id}})" 
                                          style="padding-left: 5px; padding-right: 5px; padding-top: 0px; padding-bottom: 0px;">
                                          <i class="ace-icon fa fa-trash-o bigger-130"></i></button>
              
                                        <form id="delete-form-{{$row->id}}" action="{{ route('delete-shortcourse.destroy',$row->id) }}"
                                          method="POST" style="display: none">
                                          @csrf
                                          @method('DELETE')
                                        </form>
              
              
                                      </div>
                                      <div class="hidden-md hidden-lg">
                                        <div class="inline pos-rel">
                                          <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                            <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                          </button>
                                          <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                            <li>
                                              <a href="{{ $row->id }}" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                <span class="blue">
                                                  <i class="ace-icon fa fa-eye bigger-120"></i>
                                                </span>
                                              </a>
                                            </li>
                                            <li>
                                              <a href="{{ route('edit-shortcourse.edit',$row->id) }}" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                <span class="blue">
                                                  <i class="ace-icon fa fa-pencil bigger-120"></i>
                                                </span>
                                              </a>
                                          {{--     <a href="{{ route('edit-shortcourse.edit',$row->id) }}" class="btn btn-primary btn-minier btn-success">
                                                <i class="ace-icon fa fa-pencil bigger-130"></i>
                                              </a> --}}
                                            </li>
                                            <li>
                                              <form id="delete-form-{{$row->id}}" action="{{ route('delete-shortcourse.destroy',$row->id) }}"
                                                method="POST" style="display: none">
                                                @csrf
                                                @method('DELETE')
                                              </form>
              
                                              <button type="button" class="btn btn-xs btn-danger" onclick="deletePost({{$row->id}})"><i class="ace-icon fa fa-trash-o bigger-130"></i></button>
              
                                              <form id="delete-form-{{$row->id}}" action="{{ route('delete-shortcourse.destroy',$row->id) }}"
                                                method="POST" style="display: none">
                                                @csrf
                                                @method('DELETE')
                                              </form>
                                            </li>
                                          </ul>
                                        </div>
                                      </div>
                                    </td>
                                  </tr>
                                  @php($i++)
                                  @endforeach
                                  @else
                                  <tr>
                                    <td colspan="11">No data found.</td>
                                  </tr>
                                  @endif
                                </tbody>
                              </table>
                              {!! Form::close() !!}
                            </div>
                          </div>
                        </div>
                      </div>
              
            </fieldset>

            

        </div>
      </div>
@endsection
@section('js')
    
@endsection
