@extends('admin.layouts.master')
@section('title','Lawxblog - Kateqoriya Bölməsi')
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
                                        <h4 class="widget-title">Kateqoriya Redaktəsi</h4>

                                        <a href="{{ route('admin.category') }}">
                                            <button type="button" class="btn pull-right rounded mw-md btn-info">Geri
                                                Qayıt
                                            </button>
                                        </a>
                                    </header>
                                    <hr class="widget-separator">
                                    <div class="widget-body">

                                        <form enctype="multipart/form-data"
                                              action="{{ route('admin.category.update', ['id' => $entry->id]) }}" method="POST"
                                              class="form-horizontal">
                                            {{ csrf_field() }}

                                            <div class="alert alert-{{ session('mesaj_tip') }} alert-block">
                                                <button type="button" class="close" data-dismiss="alert">×</button>
                                                <strong>@dump($errors->first())</strong>
                                            </div>
                                            <div class="m-b-lg nav-tabs-horizontal">


                                                <div class="tab-content p-md">
                                                    <x-input type="text" id="sira" title="sira:" :value="$entry->sira" name="sira"/>
                                                    <x-input type="text" id="title" title="title:" :value="$entry->title" name="title"/>
                                                    <x-input type="text"  id="description" title="description:" :value="$entry->description" name="description"/>

                                                    <div class="form-group">
                                                        <label for="exampleTextInput1" class="col-sm-1 control-label">Şəkil:</label>
                                                        <div class="col-sm-5">
                                                            <input type="file" name="img" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="form-group">
                                                            <label for="exampleTextInput2"
                                                                   class="col-sm-1 control-label">Şəkil</label>
                                                            <div class="col-sm-11">
                                                                <img src="/images/category/{{ $entry->img }}" alt="{{ $entry->title }}" class="img-thumbnail" style="
                                                                     max-width: 20rem !important;
                                                                     max-height: 7rem !important;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-sm-10">
                                                            <button type="submit"
                                                                    class="btn center-block btn-success">Redaktə Et
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

@endsection