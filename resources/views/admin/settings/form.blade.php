@extends('admin.layouts.master')

@section('title','Resurs - Ayarlar Bölməsi')

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
                                        <h4 class="widget-title">Sayt Parametrləri</h4>

                                    </header>
                                    <hr class="widget-separator">
                                    <div class="widget-body">

                                        <form enctype="multipart/form-data" action="{{ route('admin.settings.updateform', ['id' => $entry->id]) }}"

                                              method="POST"
                                              class="form-horizontal">
                                            {{ csrf_field() }}

                                            <div class="alert alert-{{ session('mesaj_tip') }} alert-block">
                                                <button type="button" class="close" data-dismiss="alert">×</button>
                                                <strong>@dump($errors->first())</strong>
                                            </div>
                                            <div class="m-b-lg nav-tabs-horizontal">


                                                <div class="tab-content p-md">
                                                    <x-input type="text" id="facebook" title="facebook:" :value="$entry->facebook" name="facebook"/>
                                                    <x-input type="text" id="twitter" title="twitter:" :value="$entry->twitter" name="twitter"/>
                                                    <x-input type="text" id="youtube" title="youtube:" :value="$entry->youtube" name="youtube"/>
                                                    <x-input type="text"  id="google" title="google:" :value="$entry->google" name="google"/>
                                                    <x-input type="text" id="address"  title="address:" :value="$entry->address" name="address"/>
                                                    <x-input type="text" id="email"  title="email:" :value="$entry->email" name="email"/>
                                                    <x-input type="text" id="phone"  title="phone:" :value="$entry->phone" name="phone"/>
                                                    <div class="form-group">
                                                        <div class="form-group">
                                                            <label for="exampleTextInput2"
                                                                   class="col-sm-1 control-label">Description</label>
                                                            <div class="col-sm-11">
                                                                <textarea name="description" id="description" cols="30" rows="10">{{ $entry->description }}</textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleTextInput1" class="col-sm-1 control-label">Şəkil:</label>
                                                        <div class="col-sm-5">
                                                            <input type="file" name="logo" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="form-group">
                                                            <label for="exampleTextInput2"
                                                                   class="col-sm-1 control-label">Şəkil</label>
                                                            <div class="col-sm-11">
                                                                <img src="/logo/{{ $entry->logo }}" alt="logo" class="img-thumbnail" style="
                                                                     max-width: 20rem !important;
                                                                     max-height: 7rem !important;">
                                                            </div>
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



@endsection