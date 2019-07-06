        @extends('layouts.master')

        @section('css')
        <!-- page specific plugin styles -->
        <link rel="stylesheet" href="{{ asset('assets/font-awesome/4.5.0/css/font-awesome.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.custom.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datepicker3.min.css') }}" />
        
        @endsection

        @section('content')
        <div class="row" style="margin-top: 15px; margin-right: 15px; margin-left: 15px;">
          <b><h4>Add New Books</h4></b>
          @if($message = Session::get('success'))
          <div class="alert alert-success">
            <p>{{ $message }}</p>
          </div>
          @endif
          <div class="col-md-3">
            <!-- PAGE CONTENT BEGINS -->
            {!! Form::open(['route' => 'add-newbook.save','.store', 'method' => 'POST', 'class' => 'form-horizontal',
            'id' => 'validation-form', "enctype" => "multipart/form-data"]) !!}
            {{csrf_field()}}

            <div class="form-group">
              {!! Form::label('member', 'Members' , ['class' => 'col-sm-4 control-label']) !!}
              <div class="col-sm-8">
                {!! Form::text('member', null, ["placeholder" => "", "class" => "form-control border-form input-mask-registration","required"]) !!}
                @include('includes.form_fields_validation_message', ['name' => 'member'])
              </div>
            </div>

            <div class="form-group">
              {!! Form::label('title', __('staff_frm_doc_Title'), ['class' => 'col-sm-4 control-label']) !!}
              <div class="col-sm-8">
                {!! Form::text('title', null, ["placeholder" => "", "class" => "form-control border-form","required"]) !!}
                @include('includes.form_fields_validation_message', ['name' => 'title'])
              </div>
            </div>

            <div class="form-group">
              {!! Form::label('document_file', __('staff_frm_doc_Select_File'), ['class' => 'col-sm-4 control-label']) !!}
              <div class="col-sm-8">
                {!! Form::file('document_file', null, ["placeholder" => "", "class" => "form-control border-form","required"]) !!}
                @include('includes.form_fields_validation_message', ['name' => 'document_file'])
              </div>
            </div>

            <div class="form-group">
              {!! Form::label('description', __('Staff_frm_doc_Description'), ['class' => 'col-sm-4 control-label']) !!}
              <div class="col-sm-8">
                {!! Form::textarea('description', null, ["placeholder" => "", "class" => "form-control border-form", "rows"=>"6"]) !!}
                @include('includes.form_fields_validation_message', ['name' => 'description'])
              </div>
            </div>

           
              <div class="col-md-12 align-right">
                <a href="{{ route('project-book') }}" class="btn btn-info btn-xs" style="border-radius: 0px;">BACK</a>
                <button class="btn btn-primary btn-xs" type="submit" style="border-radius: 0px;">
                  <i class="icon-ok bigger-110"></i>
                  @lang('staff_frm_doc_Upload')
                </button>
              
            </div>
            <div class="hr hr-24"></div>

            {!! Form::close() !!}
          </div>
          <div class="col-md-9">
            {{-- Start form Search --}}
            <div class="row">
              <div class="col-md-4" style="margin-bottom: 15px;">
                <form action="#" method="get" class="form-inline">
                  <div class="form-group">
                    <input type="text" name="s" placeholder="Keyword: Title or Description" value="{{ isset($s) ? $s : '' }}">
                  </div>
                  <div class="form-group">
                    <button class="btn btn-success btn-sm" type="submit"style="padding: 5px; border-radius: 3px;">Search Book</button>
                  </div>
                </form>
              </div>
              {{-- <div class="col-md-8" style="background-color: green; border-radius: 5px;"><h4 style="text-align: left;">List All Books</h4></div> --}}
            </div>
            {{-- End form Search --}}

            <div class="row clearfix">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                  <div class="body">
                    <div class="table-responsive">
                      <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                        <thead>
                          <tr>
                            <th width="auto">ID</th>
                            <th width="auto">Member</th>
                            <th width="auto">Title</th>
                            <th width="auto">Description</th>
                            <th width="auto">File</th>
                            <th width="110px;">Action</th>
                          </tr>
                        </thead>
{{--                         <tfoot>
                          <tr>
                            <th>ID</th>
                            <th>Member</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>File</th>
                            <th>Action</th>
                          </tr>
                        </tfoot> --}}
                        <tbody>
                          @foreach ($AddNewbook as $key=> $post)
                          <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$post->member_type}}</td>
                            {{-- <td>{{$post->title}}</td> --}}
                            <td>{{ $post->title }}</td>
                            <td>{{$post->description}}</td>

                            {{-- <td><a href="{{ route('staff.view', ['id' => $post->member_id]) }}"> {{  ViewHelper::getStaffById( $post->member_id ) }}</a></td> --}}
                            <td><a href="{{ asset('documents'.DIRECTORY_SEPARATOR.'staff'.DIRECTORY_SEPARATOR.ViewHelper::getStaffById( $post->member_id ).'/'.$post->file) }}" target="_blank">
                                    <i class="ace-icon fa fa-download bigger-120"></i> &nbsp;{{ $post->file }}
                                </a>
                            </td>

                            <td>
                                <a href="{{ route('edit-book.edit',$post->id) }}" class="btn btn-primary btn-xs" style="border-radius: 5px;">Edit</a>

                                <button type="button" class="btn btn-xs btn-danger" onclick="deletePost({{$post->id}})" style="border-radius: 5px;">Delete</button>

                                <form id="delete-form-{{$post->id}}" action="{{ route('delete-book.destroy',$post->id) }}"
                                  method="POST" style="display: none">
                                  @csrf
                                  @method('DELETE')
                                </form>
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                      <div class="col-md-12 align-left">
                        {{ $AddNewbook->onEachSide(1)->appends(['s' => $s])->links() }}
                      </div>
                      <div class="hr hr-24"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>    
        @endsection

        @section('js')
        @include('includes.scripts.jquery_validation_scripts')
        <script type="text/javascript">
          function deletePost(id){
            const swalWithBootstrapButtons = swal.mixin({
              confirmButtonClass: 'btn btn-success',
              cancelButtonClass: 'btn btn-danger',
              buttonsStyling: false,
            })
            swalWithBootstrapButtons({
              title: 'Are you sure?',
              text: "You won't be able to revert this!",
              type: 'warning',
              showCancelButton: true,
              confirmButtonText: 'Yes, delete it!',
              cancelButtonText: 'No, cancel!',
              reverseButtons: true
            }).then((result) => {
              if (result.value) {
                event.preventDefault();
                document.getElementById('delete-form-'+id).submit();
              } else if (
                // Read more about handling dismissals
                result.dismiss === swal.DismissReason.cancel
                ) {
                swalWithBootstrapButtons(
                  'Cancelled',
                  'Your Data is safe :)',
                  'error'
                  )
              }
            })
          }
        </script>
        <!-- inline scripts related to this page -->
        <script type="text/javascript">
          /*Change Field Value on Capital Letter When Keyup*/
          $(function() {
            $('.upper').keyup(function() {
              this.value = this.value.toUpperCase();
            });
          });
          /*end capital function*/
          /*copy permanent address on temporary address*/
          function CopyAddress(f) {
            if(f.permanent_address_copier.checked == true) {
              f.temp_address.value = f.address.value;
              f.temp_state.value = f.state.value;
              f.temp_country.value = f.country.value;
            }
          }
        </script>
        {{-- <script type="text/javascript">
            $(document).ready(function(){
                $('.delete_form').on('submit', function())
                {


                    if(confirm("Are you sure you want to delete it?"))
                    {
                        return true;
                    }
                    else
                    {
                        return false;
                    }
                }})
              </script> --}}


              @include('includes.scripts.inputMask_script')
              @include('includes.scripts.datepicker_script')

              @endsection

