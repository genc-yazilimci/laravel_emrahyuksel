@extends('backend.layout')
@section('content')
    <section class="content-header">

        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Settings</h3>
            </div>
            <div class="box-body">
                <form action="{{route('settings.Update',['id' => $settings->id])}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Açıklama</label>
                        <div class="row">
                            <div class="col-xs-12">
                                <input class="form-control" readonly type="text"
                                       value="{{$settings->settings_description}}">
                            </div>
                        </div>
                    </div>

                    @if($settings->settings_type=="file")
                        <div class="form-group">
                            <label>Resim Seç</label>
                            <div class="row">
                                <div class="col-xs-12">
                                    <input class="form-control" name="settings_value" required type="file">
                                </div>
                            </div>
                        </div>
                    @endif


                    <div class="form-group">
                        <label>İçerik</label>
                        <div class="row">
                            <div class="col-xs-12">

                                @if($settings->settings_type=="text")
                                    <input class="form-control" type="text" name="settings_value" required
                                           value="{{$settings->settings_value}}">
                                @endif

                                @if($settings->settings_type=="textarea")
                                    <textarea class="form-control"
                                              name="settings_value">{{$settings->settings_value}}</textarea>
                                @endif

                                @if($settings->settings_type=="ckeditor")
                                    <textarea class="form-control" id="editor1"
                                              name="settings_value">{{$settings->settings_value}}</textarea>
                                @endif

                                    @if($settings->settings_type=="file")
                                        <img width="100" src="/images/settings/{{$settings->settings_value}}" alt="">
                                    @endif

                                    <script>
                                        CKEDITOR.replace('editor1');
                                    </script>

                            </div>
                        </div>

                        @if($settings->settings_type=="file")
                            <input type="hidden" name="old_file" value="{{$settings->settings_value}}">
                        @endif

                        <div align="right" class="box-footer">
                            <button type="submit" class="btn btn-success">Düzenle</button>
                        </div>
                    </div>


                </form>
            </div>
        </div>
    </section>


@endsection
@section('css')@endsection
@section('js')@endsection