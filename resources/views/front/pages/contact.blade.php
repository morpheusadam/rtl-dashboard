@extends('layouts.app',['page_title'=>"تماس با ما"])
@section('content')
<div class="col-12 p-0 pt-6 bg-light">



    <section class="section-frame overflow-hidden">
      <div class="wrapper bg-soft-primary">
        <div class="container py-12 py-md-10 text-center">
          <div class="row">
            <div class="col-md-7 col-lg-6 col-xl-5 mx-auto">
              <h1 class="display-1 mb-3 text-center">تماس با ما</h1>
              <p class="lead px-lg-5 px-xxl-8 mb-1 text-center">ما از تماس شما خوشحال می‌شویم و به زودی به سوالات شما پاسخ خواهیم داد.</p>
            </div>
            <!-- /column -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container -->
      </div>
      <!-- /.wrapper -->
    </section>



    <section class="wrapper bg-light">
              <div class="container py-14 py-md-16">
                <div class="row">
                  <div class="col-xl-8 mx-auto">
                     
                    {{-- <div class="col-12 py-4">
                        {!!$settings['contact_page']!!}
                    </div> --}}
                    <div class="row m-0">

                      <div class="col-lg-12">

                         <form class="" method="POST" action="{{route('contact-post')}}" id="contact-form">
                          <input type="hidden" name="recaptcha" id="recaptcha">
                          @csrf
                          <div class="messages"></div>
                          <div class="row gx-4">
                            <div class="col-md-6">
                              <div class="form-floating mb-4">
                                <input id="form_name" type="text" name="name" class="form-control" placeholder="محمد" required>
                                <label for="form_name">نام کامل *</label>
                               
                              </div>
                            </div>
                            <!-- /column -->
                            <div class="col-md-6">
                              <div class="form-floating mb-4">
                                <input id="form_lastname" type="text" name="phone" class="form-control" placeholder="علی" required>
                                <label for="form_lastname">شماره موبایل *</label>
                              </div>
                            </div>
                            <!-- /column -->
                            <div class="col-md-12">
                              <div class="form-floating mb-4">
                                <input id="form_email" type="email" name="email" class="form-control" placeholder="ahmed@gmail.com" required>
                                <label for="form_email">ایمیل *</label>
                               
                              </div>
                            </div>

                            <div class="col-12">
                              <div class="form-floating mb-4">
                                <textarea id="form_message" name="message" class="form-control" placeholder="محتوای پیام شما" style="height: 150px" required></textarea>
                                <label for="form_message">پیام شما *</label>
                               
                              </div>
                            </div>

                            <!-- /column -->
                            <div class="col-12">
                              <input type="submit" class="btn btn-primary rounded-pill btn-send mb-3" value="ارسال پیام">
                              <p class="text-muted"><strong>*</strong> این فیلدها الزامی هستند. @if(env('APP_ENV')=="local") (لطفا Google ReCaptcha را در فایل .env فعال کنید)@endif</p>
                            </div>
                            <!-- /column -->
                          </div>
                          <!-- /.row -->
                        </form>
                        <!-- /form -->
                      </div>
                      <!--/column -->
                      <div class="col-lg-4">
                        @if($settings['address']!=null)
                        <div class="d-flex flex-row">
                          <div>
                            <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="fal fa-map-marker-alt"></i> </div>
                          </div>
                          <div>
                            <h5 class="mb-1">آدرس</h5>
                            <address>{{$settings['address']}}</address>
                          </div>
                        </div>
                        @endif
                        @if($settings['phone']!=null)
                        <div class="d-flex flex-row">
                          <div>
                            <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="fal fa-phone"></i> </div>
                          </div>
                          <div>
                            <h5 class="mb-1">تلفن</h5>
                            <p>{{$settings['phone']}} <br />{{$settings['phone2']}}</p>
                          </div>
                        </div>
                        @endif
                        @if($settings['contact_email']!=null)
                        <div class="d-flex flex-row">
                          <div>
                            <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="fal fa-envelope-open"></i> </div>
                          </div>
                          <div>
                            <h5 class="mb-1">ایمیل تماس</h5>
                            <p class="mb-0"><a href="mailto:{{$settings['contact_email']}}" class="text-body">{{$settings['contact_email']}}</a></p>
                          </div>
                        </div>
                        @endif
                      </div>
                      <!--/column -->
                    </div>
                    <!--/.row -->
                  </div>
                  <!-- /column -->
                </div>
                <!-- /.row -->
              </div>
              <!-- /.container -->
            </section>


 
</div>
@endsection
@section('scripts')
<script src="https://www.google.com/recaptcha/api.js?render={{ env("RECAPTCHA_SITE_KEY") }}"></script>
<script>
grecaptcha.ready(function() {
  document.getElementById('contact-form').addEventListener("submit", function(event) {
    event.preventDefault();
    grecaptcha.execute('{{ env("RECAPTCHA_SITE_KEY") }}', {action: 'contact'}).then(function(token) {
        console.log(token);
       document.getElementById("recaptcha").value= token; 
       document.getElementById('contact-form').submit();
    });
  }, false);
});
</script>
@endsection