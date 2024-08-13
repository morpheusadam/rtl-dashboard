@extends('layouts.admin')
@section('content')
<div class="col-12 p-3">
		<!-- breadcrumb -->
		<x-bread-crumb :breads="[
			['url' => url('/admin') , 'title' => 'داشبورد' , 'isactive' => false],
			['url' => route('admin.users.index') , 'title' => 'کاربران' , 'isactive' => false],
			['url' => '#' , 'title' =>  'افزودن کاربر', 'isactive' => true],
		]">
		</x-bread-crumb>
	<!-- /breadcrumb -->
	<div class="col-12 col-lg-12 p-0 ">
	 
		
		<form id="validate-form" class="row" enctype="multipart/form-data" method="POST" action="{{route('admin.users.store')}}">
		@csrf

		<div class="col-12 col-lg-8 p-0 main-box">
			<div class="col-12 px-0">
				<div class="col-12 px-3 py-3">
				 	<span class="fas fa-info-circle"></span>	افزودن جدید
				</div>
				<div class="col-12 divider" style="min-height: 2px;"></div>
			</div>
			<div class="col-12 p-3 row">
				
			
			<div class="col-12 col-lg-6 p-2">
				<div class="col-12">
					نام
				</div>
				<div class="col-12 pt-3">
					<input type="text" name="name" required minlength="3"  maxlength="190" class="form-control" value="{{old('name')}}" >
				</div>
			</div>
			
			<div class="col-12 col-lg-6 p-2">
				<div class="col-12">
					ایمیل
				</div>
				<div class="col-12 pt-3">
					<input type="email" name="email"  class="form-control"  value="{{old('email')}}" >
				</div>
			</div>
			<div class="col-12 col-lg-6 p-2">
				<div class="col-12">
					رمز عبور
				</div>
				<div class="col-12 pt-3">
					<input type="password" name="password"  class="form-control" required minlength="8" >
				</div>
			</div>
			
			<div class="col-12 col-lg-6 p-2">
				<div class="col-12">
					تصویر پروفایل
				</div>
				<div class="col-12 pt-3">
					<input type="file" name="avatar"  class="form-control"  accept="image/*" >
				</div>
				<div class="col-12 p-0">
					
				</div>
			</div>

			<div class="col-12 col-lg-6 p-2">
				<div class="col-12">
					تلفن
				</div>
				<div class="col-12 pt-3">
					<input type="text" name="phone"   maxlength="190" class="form-control"  value="{{old('phone')}}" >
				</div>
			</div>
			@if(auth()->user()->can('user-roles-update'))
			<div class="col-12 col-lg-6 p-2">
				<div class="col-12">
					نقش
				</div>
				<div class="col-12 pt-3">
					<select class="form-control select2-select" name="roles[]" multiple required>
						@foreach($roles as $role)
							<option value="{{$role->id}}">{{$role->display_name}}</option>
						@endforeach
					</select>
				</div>
			</div>
			@endif
			<div class="col-12 col-lg-6 p-2">
				<div class="col-12">
					بیوگرافی
				</div>
				<div class="col-12 pt-3">
					<textarea  name="bio" maxlength="5000" class="form-control" style="min-height:150px">{{old('bio')}}</textarea>
				</div>
			</div>
			<div class="col-12 col-lg-6 p-2">
				<div class="col-12">
					مسدود شده
				</div>
				<div class="col-12 pt-3">
					<select class="form-control" name="blocked">
						<option @if(old('blocked')=="0") selected @endif value="0">خیر</option>
						<option @if(old('blocked')=="1") selected @endif value="1">بله</option>
					</select>
				</div>
			</div>
			</div>
 
		</div>
		 
		<div class="col-12 p-3">
			<button class="btn btn-success" id="submitEvaluation">ذخیره</button>
		</div> 
		</form>
	</div>
</div>
@endsection