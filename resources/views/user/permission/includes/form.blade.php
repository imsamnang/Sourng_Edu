<h4 class="header large lighter blue"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp;{{ $panel }}</h4>

<div class="form-group">
    {!! Form::label('name', 'Group', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-4">
        {!! Form::text('group', null, ["placeholder" => "", "class" => "form-control border-form",  "required"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'name'])
    </div>

    {!! Form::label('display_name', 'Name', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-4">
        {!! Form::text('name', null, ["placeholder" => "", "class" => "form-control border-form", "required"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'display_name'])
    </div>
</div>

<div class="form-group">
    {!! Form::label('name', 'Display Name', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-4">
        {!! Form::text('display_name', null, ["placeholder" => "", "class" => "form-control border-form",  "required"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'name'])
    </div>

    {!! Form::label('display_name', 'Description', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-4">
        {!! Form::text('description', null, ["placeholder" => "", "class" => "form-control border-form", "required"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'display_name'])
    </div>
</div>


{{-- permission table list --}}
{{-- <div class="form-group">
  {!! Form::label('permission', 'Permissions', ['class' => 'col-sm-2 control-label']) !!}
  <div class="col-sm-10">
    <table id="permission-table" class="table table-striped table-bordered table-hover">
      <thead>
        <tr>
          <th width="20%">Group</th>
          <th class="center">
            <label class="pos-rel">
              <input type="checkbox" class="ace" />
              <span class="lbl"></span>
            </label>
          </th>
          <th>Access</th>
        </tr>
      </thead>
      <tbody>
        @if($data['permission'] && $data['permission']->count() > 0)
        @foreach($data['permission'] as $key => $permission)
          <tr>
            <td><strong>{{$permission[0]->group}}</strong></td>
            <td class="center first-child">
              <label>
                <input type="checkbox" name="chkIds[]" value="1" class="ace group" />
                <span class="lbl"></span>
              </label>
            </td>
            <td>
              @foreach($permission as $access)
                <label>
                  @if (!isset($data['role_permission']))
                    {!! Form::checkbox('permission[]', $access->id, false, ['class' => 'ace']) !!}
                  @else
                    {!! Form::checkbox('permission[]', $access->id, array_key_exists($access->id, $data['role_permission']), ['class' => 'ace']) !!}
                  @endif
                  <span class="lbl"> {{ $access->display_name}} </span>
                </label>
              @endforeach
            </td>
          </tr>
        @endforeach
        @else
          <tr><td colspan="7">No data found.</td></tr>
        @endif
      </tbody>
    </table>
    <div class="control-group">
    </div>
  </div>
</div> --}}

