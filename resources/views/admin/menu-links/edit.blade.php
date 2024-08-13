@extends('layouts.admin')
@section('content')
<div class="col-12 p-3">
    <div class="col-12 col-lg-12 p-0 ">
        <form id="validate-form" class="row" enctype="multipart/form-data" method="POST" action="{{route('admin.menu-links.update',$menuLink)}}">
            @csrf
            @method("PUT")
            <input type="hidden" name="menu_id" value="{{$menuLink->menu_id}}">
            <div class="col-12 col-lg-8 p-0 main-box">
                <div class="col-12 px-0">
                    <div class="col-12 px-3 py-3">
                        <span class="fas fa-info-circle"></span> ویرایش لینک منو
                    </div>
                    <div class="col-12 divider" style="min-height: 2px;"></div>
                </div>
                <div class="col-12 p-3 row">
              


                    <div class="col-12 col-lg-6 p-2">
                        <div class="col-12">
                            نوع
                        </div>
                        <div class="col-12 pt-3">
                            <select class="form-control select2-select" name="type" id="type">
                                <option value="CUSTOM_LINK" @if($menuLink->type=="CUSTOM_LINK") selected @endif>لینک سفارشی</option>
                                <option value="PAGE" @if($menuLink->type=="PAGE") selected @endif>صفحه</option>
                                <option value="CATEGORY" @if($menuLink->type=="CATEGORY") selected @endif>دسته‌بندی</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 p-2">
                        <div class="col-12">
                            مقدار
                        </div>
                        <div class="col-12 pt-3">
                            <select class="form-control select2-select" name="type_id" id="type_id">
                                
                            </select>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 p-2">
                        <div class="col-12">
                            عنوان لینک
                        </div>
                        <div class="col-12 pt-3">
                            <input type="text" name="title" required maxlength="190" class="form-control" value="{{$menuLink->title}}" id="title">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 p-2">
                        <div class="col-12">
                            لینک
                        </div>
                        <div class="col-12 pt-3">
                            <input type="url" name="url" required class="form-control" value="{{$menuLink->url}}" id="url">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 p-2">
                        <div class="col-12">
                            آیکون
                        </div>
                        <div class="col-12 pt-3">
                            <input type="text" name="icon" class="form-control" value="{{$menuLink->icon}}">
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
@section('scripts')
<script type="module">
function updateTypeIdList() {
    var type = $('#type').val();
    $.ajax({
        method: "POST",
        url: "{{route('admin.menu-links.get-type')}}",
        data: { type: type, _token: "<?php echo csrf_token(); ?>" }
    }).done(function(response) {
        $('#type_id').empty();
        /*$('#type_id').append($("<option></option>").attr({ "value": '', 'selected': '' }).text('از لیست انتخاب کنید'));*/
        console.log(response);
        for (var i = 0; i < response.length; i++){

            var selected="";
            if("{{$menuLink->type_id}}"==response[i].id && "{{$menuLink->type}}"==type)
                selected="selected";
            else
                selected="";
            
            $('#type_id').append($("<option value='"+response[i].id+"' data-title='"+response[i].title+"' data-url='"+response[i].url+"' "+selected+">"+response[i].title+"</option>"));

        }
    });
}
$('#type').change(function() {
    updateTypeIdList();
});
updateTypeIdList();
$('#type_id').on('change',function(){
    $('#url').val($('option:selected', this).attr('data-url'));
    $('#title').val($('option:selected', this).attr('data-title'));
});
</script>
@endsection