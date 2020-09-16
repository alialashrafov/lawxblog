@extends('admin.layouts.master')

@section('title','Lawxblog - Postlar Bölməsi')


@section('content')
    <main id="app-main" class="app-main in">
        <div class="wrap">
            <section class="app-content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="widget">
                            <div class="col-md-12">
                                <div class="widget">
                                    <header class="widget-header">
                                        <h4 class="widget-title">Yeni Xəbər</h4>

                                        <a href="{{ route('admin.news') }}">
                                            <button type="button" class="btn pull-right rounded mw-md btn-info">Geri
                                                Qayıt
                                            </button>
                                        </a>
                                    </header>
                                    <hr class="widget-separator">
                                    <div class="widget-body">

                                        <form enctype="multipart/form-data"
                                              action="{{ route('admin.news.create') }}" method="POST"
                                              class="form-horizontal">
                                            {{ csrf_field() }}

                                            <div class="alert alert-{{ session('mesaj_tip') }} alert-block">
                                                <button type="button" class="close" data-dismiss="alert">×</button>
                                                <strong>@dump($errors->first())</strong>
                                            </div>
                                            <div class="m-b-lg nav-tabs-horizontal">


                                                <div class="tab-content p-md">
                                                    <x-input type="text" id="title" title="title:" value="title" name="title"/>
                                                    <x-input type="text" id="tesvir" title="təsvir:" value="qısa təsvir" name="short_description"/>
                                                    <x-input type="text" id="author" title="Müəllif:" value="author" name="author"/>
                                                    <x-input type="text"  id="video" title="Video:" value="" name="video"/>
                                                    <x-input type="file" id="audio"  title="Audio:" value="" name="audio"/>
                                                    <div class="form-group">
                                                        <div class="form-group">
                                                            <label for="exampleTextInput2"
                                                                   class="col-sm-1 control-label">Description</label>
                                                            <div class="col-sm-11">
                                                                <textarea name="description" id="description" cols="30" rows="10">Your Article</textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                        <div class="form-group">
                                                            <label id="audiolabel" class="radio-inline">Audio</label>
                                                            <input type="radio" name="type" id="inlineRadio1" value="audio">
                                                            <label id="videolabel" class="radio-inline">Video</label>
                                                            <input type="radio" name="type" id="inlineRadio2" value="video">
                                                            <label id="simplelabel" class="radio-inline">Simple</label>
                                                            <input type="radio" name="type" id="inlineRadio3" value="simple">
                                                        </div>
                                                        <div class="form-group">
                                                            <label id="sliderlabel" class="radio-inline">Slider</label>
                                                            <input type="checkbox" name="slider" id="inlineRadio4" value="1">
                                                        </div>

                                                    <div class="form-group">
                                                        <label for="exampleTextInput1" class="col-sm-1 control-label">Şəkil:</label>
                                                        <div class="col-sm-5">
                                                            <input type="file" name="img" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-sm-10">
                                                            <button type="submit"
                                                                    class="btn center-block btn-success">Yarat
                                                            </button>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div><!-- .widget-body -->
                        </div><!-- .widget -->
                    </div><!-- END column -->
                </div><!-- .row -->
            </section><!-- #dash-content -->
        </div><!-- .wrap -->
        <!-- APP FOOTER -->
        <div class="wrap p-t-0">
            <footer class="app-footer">
                <div class="clearfix">
                    <div class="copyright pull-left">Copyright LawxBlog 2020 ©</div>
                </div>
            </footer>
        </div>
        <!-- /#app-footer -->
    </main>
@endsection

@section('footer')

    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset("vendor/laravel-filemanager/js/stand-alone-button.js") }}"></script>
    <script>
        CKEDITOR.replace('description', {

            filebrowserUploadUrl: "{{route('ckeditor.upload', ['_token' => csrf_token() ])}}",

            filebrowserUploadMethod: 'form'

        });
        $('#lfm').filemanager('image');
    </script>
    <script>
        $("#inlineRadio1").click(function () {
            document.getElementById('video').style.visibility = 'hidden';
            document.getElementById('video5').style.visibility = 'hidden';
            document.getElementById('video6').style.visibility = 'hidden';
            document.getElementById('video7').style.visibility = 'hidden';
            document.getElementById('audio').style.visibility = 'visible';
            document.getElementById('audio5').style.visibility = 'visible';
            document.getElementById('audio6').style.visibility = 'visible';
            document.getElementById('audio7').style.visibility = 'visible';
        });
        $("#inlineRadio2").click(function () {
            document.getElementById('audio').style.visibility = 'hidden';
            document.getElementById('audio5').style.visibility = 'hidden';
            document.getElementById('audio6').style.visibility = 'hidden';
            document.getElementById('audio7').style.visibility = 'hidden';
            document.getElementById('video').style.visibility = 'visible';
            document.getElementById('video5').style.visibility = 'visible';
            document.getElementById('video6').style.visibility = 'visible';
            document.getElementById('video7').style.visibility = 'visible';
        });
        $("#inlineRadio3").click(function () {
            document.getElementById('video').style.visibility = 'hidden';
            document.getElementById('video5').style.visibility = 'hidden';
            document.getElementById('video6').style.visibility = 'hidden';
            document.getElementById('video7').style.visibility = 'hidden';
            document.getElementById('audio').style.visibility = 'hidden';
            document.getElementById('audio5').style.visibility = 'hidden';
            document.getElementById('audio6').style.visibility = 'hidden';
            document.getElementById('audio7').style.visibility = 'hidden';
        });



    </script>
@endsection
