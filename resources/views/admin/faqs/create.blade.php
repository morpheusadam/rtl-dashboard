@extends('layouts.admin')
@section('content')
<div class="col-12 p-3">
    <div class="col-12 col-lg-12 p-0 ">
        <form id="validate-form" class="row" enctype="multipart/form-data" method="POST" action="{{route('admin.faqs.store')}}">
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
                            سوال
                        </div>
                        <div class="col-12 pt-3">
                            <input type="text" name="question" required maxlength="190" class="form-control" value="{{old('question',$faq??"")}}">
                        </div>
                    </div>
                    <div class="col-12 col-lg-12 p-2">
                        <div class="col-12">
                            جواب
                        </div>
                        <div class="col-12 pt-3">
                            <textarea name="answer" class="form-control" style="min-height:150px">{{old('answer',$faq??"")}}</textarea>
                        </div>
                    </div>
                    <div class="col-12 p-2">
                        <div class="col-12">
                            ویژه
                        </div>
                        <div class="col-12 pt-3">
                            <select class="form-control" name="is_featured">
                                <option @if(old('is_featured',$faq??"")=="0" ) selected @endif value="0">خیر</option>
                                <option @if(old('is_featured',$faq??"")=="1" ) selected @endif value="1">بله</option>
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