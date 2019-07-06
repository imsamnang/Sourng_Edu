<h4 class="header large lighter blue"><i class="fa fa-calculator" aria-hidden="true"></i>&nbsp;{{ $panel }} {{ __('info-smsemail.AddForm') }}</h4>
<div class="alert alert-warning">
    <button type="button" class="close" data-dismiss="alert">
        <i class="ace-icon fa fa-times"></i>
    </button>
    <strong>{{ __('info-smsemail.Warning') }}</strong>
    {{ __('info-smsemail.infos') }}
    <br>
</div>
{!! Form::open(['route' => $base_route.'.student-guardian.send', 'id' => 'fee_add_form']) !!}

<div class="form-group">
    <table id="sample-table-1" class="table table-striped table-bordered table-hover">
        <thead>
        <tr>
            <th>&nbsp;</th>
            <th>{{ __('info-smsemail.FeeHead') }}</th>
            <th>{{ __('info-smsemail.DueDate') }}</th>
            <th>{{ __('info-smsemail.Amount') }}</th>
            <th>
                <button type="button" class="btn btn-xs btn-primary pull-right" id="load-fee-html">
                    <i class="fa fa-plus" aria-hidden="true"></i> {{ __('info-smsemail.InsertRows') }}
                </button>
            </th>
        </tr>
        </thead>

        <tbody id="fee_wrapper">

            @if (isset($data['row']))

                @foreach($data['product_attribute_array'] as $attribute)

                    @include($view_path.'.includes.fee_tr_edit', ['attribute_groups' => $data['attribute_groups'],'attribute' => $attribute])

                @endforeach

            @endif

        </tbody>

    </table>
</div>


<div class="clearfix form-actions">
    <div class="col-md-12 align-right">
        <button class="btn" type="reset">
            <i class="icon-undo bigger-110"></i>
            {{ __('info-smsemail.Reset') }}
        </button>
        &nbsp; &nbsp; &nbsp;
        <button class="btn btn-success" type="submit" id="fee-add-btn">
            <i class="icon-ok bigger-110"></i>
            {{ __('info-smsemail.AddFee') }}
        </button>
    </div>
</div>
<div class="hr-double hr-18"></div>
