<div class="row">
    <div class="col-xs-12">
    @include('includes.data_table_header')
    <!-- div.table-responsive -->
        <div class="table-responsive">
					{!! Form::open(['route' => $base_route.'.bulk-action', 'id' => 'bulk_action_form']) !!}
					<table id="dynamic-table" class="table table-striped table-bordered table-hover">
						<thead>
							<tr>
									<th class="center">
											<label class="pos-rel">
													<input type="checkbox" class="ace" />
													<span class="lbl"></span>
											</label>
									</th>
									<th>@lang('book_tbl_S_N')</th>
									<th>@lang('book_tbl_Category')</th>
									<th>@lang('book_tbl_Image')</th>
									<th>@lang('book_tbl_Name')</th>
									<th>@lang('book_tbl_Author')</th>
									<th>@lang('book_tbl_Publisher')</th>
									<th>@lang('book_tbl_Total')</th>
									<th>@lang('book_tbl_Available')</th>
									<th>@lang('book_tbl_Issued')</th>
									<th>@lang('book_tbl_Status')</th>
									<th>Action</th>
							</tr>
						</thead>
						<tbody>
							@if (isset($data['books']) && $data['books']->count() > 0)
								@php($i=1)
								@foreach($data['books'] as $books)
									<tr>
											<td class="center first-child">
													<label>
															<input type="checkbox" name="chkIds[]" value="{{ $books->id }}" class="ace" />
															<span class="lbl"></span>
													</label>
											</td>
											<td>{{ $i }}</td>
											<td>
													<a href="{{ route('library.book') }}?categories={{$books->categories}}">
															{{ ViewHelper::getBookCategoryById( $books->categories) }}
													</a>
											</td>
											<td>
													@if($books->image)
															<a href="{{ route($base_route.'.view', ['id' => $books->id]) }}">
																	<img src="{{ asset('images'.DIRECTORY_SEPARATOR.'book'.DIRECTORY_SEPARATOR.$books->image) }}"
																				class="img-responsive" width="40px">
															</a>
													@endif
											</td>
											<td>
												<a href="{{ route($base_route.'.view', ['id' => $books->id]) }}">
													{{ $books->title }}
												</a>
											</td>
											<td>
													<a href="{{ route('library.book') }}?author={{$books->author}}">
															{{ $books->author }}
													</a>
											</td>
											<td>
												<a href="{{ route('library.book') }}?publisher={{$books->publisher}}">
													{{ $books->publisher }}
												</a>
											</td>
											<td>{{ $books->bookCollection()->count() }} </td>
											<td>{{ $books->bookCollection()->where('book_status','=',1)->count() }} </td>
											<td>{{ $books->bookCollection()->where('book_status','=',2)->count() }} </td>
											<td class="hidden-480 ">
													<div class="btn-group">
															<button data-toggle="dropdown" class="btn btn-primary btn-minier dropdown-toggle {{ $books->status == 'active'?"btn-info":"btn-warning" }}" >
																	{{ $books->status == 'active'?"Active":"In Active" }}
																	<span class="ace-icon fa fa-caret-down icon-on-right"></span>
															</button>

															<ul class="dropdown-menu">
																	<li>
																			<a href="{{ route($base_route.'.active', ['id' => $books->id]) }}" title="Active"><i class="fa fa-check" aria-hidden="true"></i></a>
																	</li>

																	<li>
																			<a href="{{ route($base_route.'.in-active', ['id' => $books->id]) }}" title="In-Active"><i class="fa fa-remove" aria-hidden="true"></i></a>
																	</li>
															</ul>
													</div>
											</td>
											<td>
												<div class="hidden-sm hidden-xs action-buttons">
													<a href="{{ route($base_route.'.view', ['id' => $books->id]) }}" class="btn btn-primary btn-minier btn-primary">
														<i class="ace-icon fa fa-eye bigger-130"></i>
													</a>
													<a href="{{ route($base_route.'.edit', ['id' => $books->id]) }}" class="btn btn-primary btn-minier btn-success">
														<i class="ace-icon fa fa-pencil bigger-130"></i>
													</a>
													<a href="{{ route($base_route.'.delete', ['id' => $books->id]) }}" class="btn btn-primary btn-minier btn-danger bootbox-confirm" >
														<i class="ace-icon fa fa-trash-o bigger-130"></i>
													</a>
												</div>
												<div class="hidden-md hidden-lg">
														<div class="inline pos-rel">
																<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
																		<i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
																</button>
																<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
																		<li>
																				<a href="{{ route($base_route.'.view', ['id' => $books->id]) }}" class="tooltip-success" data-rel="tooltip" title="Edit">
																						<span class="blue">
																								<i class="ace-icon fa fa-eye bigger-120"></i>
																						</span>
																				</a>
																		</li>
																		<li>
																				<a href="{{ route($base_route.'.edit', ['id' => $books->id]) }}" class="tooltip-success" data-rel="tooltip" title="Edit">
																						<span class="green">
																								<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																						</span>
																				</a>
																		</li>

																		<li>
																				<a href="{{ route($base_route.'.delete', ['id' => $books->id]) }}" class="tooltip-error bootbox-confirm" data-rel="tooltip" title="Delete">
																					<span class="red ">
																							<i class="ace-icon fa fa-trash-o bigger-120"></i>
																					</span>
																				</a>
																		</li>
																</ul>
														</div>
												</div>
												{!! Form::open() !!}
													
												{!! Form::close() !!}
											</td>
									</tr>
								@php($i++)
								@endforeach
							@else
								<tr>
									<td colspan="12">No {{ $panel }} data found.</td>
									</td>
								</tr>
							@endif
						</tbody>
					</table>
        </div>
        {!! Form::close() !!}
    </div>
</div>


