@extends('backend.app')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    <div class="panel-actions">
                        <a href="#" class="fa fa-caret-down"></a>
                    </div>

                    <h2 class="panel-title">Kategori Ekle</h2>
                </header>
                <div class="panel-body">
                    <form class="form-horizontal form-bordered" method="post" id="form">
                        @csrf
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="inputDefault">Başlık</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="inputDefault" name="title">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="textareaAutosize">Açıklama</label>
                            <div class="col-md-6">
                                <textarea class="form-control" rows="3" id="textareaAutosize" name="description" data-plugin-textarea-autosize></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-3">
                                <button class="btn btn-primary">Ekle</button>
                            </div>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </div>
@endsection
@section('js')
    <script src="/js/jquery.form.min.js"></script>
    <script src="/js/sweetalert2.min.js"></script>
    <script>
        $(document).ready(function () {
            $('form').ajaxForm({
                success:function (response) {
                    swal(
                        response.baslik,
                        response.icerik,
                        response.durum
                    )
                }
            });
        });
    </script>
@endsection
@section('css')
    <link rel="stylesheet" href="/css/sweetalert2.min.css" />
@endsection