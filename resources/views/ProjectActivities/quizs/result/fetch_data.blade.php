	@foreach ($data as $key => $row)
	<tr>
		<td>{{++$key}}</td>
		<td>{{$row->subject_id}}</td>
		<td>{{$row->user_name}}</td>
		<td>{{$row->marks_scored}}</td>
		<td>{{$row->test_type_id}}</td>
		<td>{{$row->result_date}}</td>
	</tr>
@endforeach