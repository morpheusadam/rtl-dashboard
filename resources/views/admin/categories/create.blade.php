@extends('layouts.admin')
@section('content')
<div class="col-12 p-3">
	<div class="col-12 col-lg-12 p-0 ">
	 
		
		<form id="validate-form" class="row" enctype="multipart/form-data" method="POST" action="{{route('admin.categories.store')}}">
		@csrf
		<input type="hidden" name="temp_file_selector" id="temp_file_selector" value="{{uniqid()}}">
		<div class="col-12 col-lg-8 p-0 main-box">
			<div class="col-12 px-0">
				<div class="col-12 px-3 py-3">
				 	<span class="fas fa-info-circle"></span> افزودن جدید
				</div>
				<div class="col-12 divider" style="min-height: 2px;"></div>
			</div>
			<div class="col-12 p-3 row">
				
			
			<div class="col-12 col-lg-6 p-2">
				<div class="col-12">
					لینک
				</div>
				<div class="col-12 pt-3">
					<input type="text" name="slug" required  maxlength="190" class="form-control" value="{{old('slug')}}" >
				</div>
			</div>
			<div class="col-12 col-lg-6 p-2">
				<div class="col-12">
					عنوان
				</div>
				<div class="col-12 pt-3">
					<input type="text" name="title" required   maxlength="190" class="form-control" value="{{old('title')}}" >
				</div>
			</div>

			<div class="col-12 p-2">
				<div class="col-12">
					لوگو
				</div>
				<div class="col-12 pt-3">
					<input type="file" name="image"    class="form-control" accept="image/*">
				</div>
				<div class="col-12 pt-3">

				</div>
			</div>

			<div class="col-12  p-2">
				<div class="col-12">
					توضیحات
				</div>
				<div class="col-12 pt-3">
					<textarea name="description" class="editor with-file-explorer" >{{old('description')}}</textarea>
				</div>
			</div>

			<div class="col-12 col-lg-12 p-2">
				<div class="col-12">
					توضیحات متا
				</div>
				<div class="col-12 pt-3">
					<textarea name="meta_description" class="form-control" style="min-height:150px">{{old('meta_description')}}</textarea>
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