@extends('layouts.app')
@section('content')
<div style="min-height: 95vh; 
    overflow-x: hidden;" class="col-12">
	<div class="container  mt-5 pt-5 pt-md-0 mt-md-0" style="">
		<div class="row col-12 pt-6 px-0" style="padding-top: 20px;">
			<div class="row col-12 align-items-center" style="min-height: 80vh;margin: 0% 0px;">
				<div class="row align-items-center py-5 main-nafez-box-styles" style=";border-radius: 12px">
					<div class="col text-center py-5">
						<span class="fal fa-exclamation-triangle font-12 pb-4" style="color: var(--bg-color-4)"></span>
						<h4 class="text-center">خطایی در پردازش درخواست شما رخ داده است</h4>
					
						<h6 class="text-center">نگران نباشید. تیم ما در حال حاضر در حال حل مشکل است <br> می‌توانید صفحه را مجدداً بارگذاری کنید</h6>
										<div class="col-12 text-center px-2" dir="ltr" style="padding-top: 8px;">
						<a href="{{url()->current()}}" class="d-inline-block ">
						<span class="btn btn-primary cairo px-5" style=" padding: 5px 10px 9px;cursor: pointer;border:none;border-radius: 90px;">  بارگذاری مجدد صفحه </span>
						</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection