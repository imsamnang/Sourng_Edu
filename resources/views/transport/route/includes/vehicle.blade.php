<div class="form-group">
    <table id="sample-table-1" class="table table-striped table-bordered table-hover">
        <thead>
        <tr>
            <th>{{ __('Transport.Number|Model') }}</th>
            <th>{{ __('Transport.Type') }}</th>
            <th></th>
        </tr>
        </thead>

        <tbody id="vehicle_wrapper">

        @if (isset($data['html']))

            {!! $data['html'] !!}

        @endif

        </tbody>

    </table>
</div>