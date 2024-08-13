@extends('layouts.admin')
@section('content')
<div class="col-12 p-3">
    <div class="col-12 col-lg-12 p-0 ">
        <form id="validate-form" class="row" enctype="multipart/form-data" method="POST" action="{{route('admin.article-comments.store')}}">
            @csrf
            <div class="col-12 col-lg-8 p-0 main-box">
                <div class="col-12 px-0">
                    <div class="col-12 px-3 py-3">
                        <span class="fas fa-info-circle"></span> افزودن جدید
                    </div>
                    <div class="col-12 divider" style="min-height: 2px;"></div>
                </div>
                <div class="col-12 p-3 row">
                    <div class="col-12 col-lg-12 p-2">
                        <div class="col-12">
                            محتوا
                        </div>
                        <div class="col-12 pt-3">
                            <textarea name="content" class="form-control" style="min-height:150px">{{old('content')}}</textarea>
                        </div>
                    </div>
                    <div class="col-12 p-2">
                        <div class="col-12">
                            بررسی شده
                        </div>
                        <div class="col-12 pt-3">
                            <select class="form-control" name="reviewed">
                                <option @if(old('reviewed')=="0" ) selected @endif value="0">خیر</option>
                                <option @if(old('reviewed')=="1" ) selected @endif value="1">بله</option>
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