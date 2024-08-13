@extends('layouts.admin')
@section('content')
<div class="col-12 py-3">
	<div class="container">
		<div class="p-3 main-box mx-auto" style="width:600px;max-width: 100%;">
			<div class="d-flex align-items-center justify-content-center py-4">
			 	<div class="col-12 d-flex justify-content-center align-items-center mx-auto " style="width:100%">
			 		<div class="col-12 p-0 text-center">
				 		<img src="{{auth()->user()->getUserAvatar()}}" style="width:120px;max-width: 100%;border-radius: 50%;" class="d-inline-block">
				 		<div class="col-12 font-3 text-center py-2">
				 			{{auth()->user()->name}}
				 		</div>
			 		</div>
			 		
			 	</div>
			 	
			</div>
			<div class="col-12 p-0">
				<table class="table table-bordered table-striped rounded table-hover">
					<tbody>
						<tr>
							<td>ایمیل</td>
							<td>{{auth()->user()->email}}</td>
						</tr>
						<tr>
							<td>تلفن</td>
							<td>
								@if(auth()->user()->phone==null)
									وجود ندارد
								@else
									{{auth()->user()->phone}}
								@endif
							</td>
						</tr>
						<tr>
							<td>نوع حساب</td>
							<td>{{auth()->user()->power}}</td>
						</tr>
						<tr>
							<td>فعال</td>
							<td>
								@if(!auth()->user()->blocked)
									<span class="fas fa-check-circle text-success"></span>
								@else
									<span class="fas fa-times-circle text-danger"></span>
								@endif

						</td>
						<tr>
							<td>بیوگرافی</td>
							<td>
								{{auth()->user()->bio}}
							</td>
						</tr>
						
						<tr>
							<td>کنترل</td>
							<td><a href="{{route('admin.profile.edit')}}" class="rounded-0 btn btn-success btn-sm border"><span class="fal fa-wrench"></span> ویرایش</a></td>
						</tr>

						
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
@endsection