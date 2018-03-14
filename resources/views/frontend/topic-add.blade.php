@extends('frontend.app')
@section('content')
    <!-- begin page-title -->
    <div class="page-title has-bg">
        <!-- begin bg-cover -->
        <div class="bg-cover">
            <img src="/frontend/assets/img/cover3.jpg" alt="" />
        </div>
        <!-- end bg-cover -->
        <!-- begin container -->
        <div class="container">
            <!-- begin breadcrumb -->
            <ul class="breadcrumb">
                <li><a href="index.html">Forum</a></li>
                <li class="active">&nbsp;</li>
            </ul>
            <!-- end breadcrumb -->
            <h1>Konu Ekle</h1>
        </div>
        <!-- end container -->
    </div>
    <!-- end page-title -->
    <!-- begin content -->
    <div class="content">
        <!-- begin container -->
        <div class="container">
            <!-- begin row -->
            <div class="row">
                <div class="col-md-9">
                    <form id="form" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="title">Başlık</label>
                            <input type="text" class="form-control" name="title" id="title" placeholder="Başlık yazınız">
                        </div>
                        <input type="hidden" name="category_id" value="{{ $id }}">
                        <div class="form-group">
                            <label for="post">İçerik</label>
                            <textarea class="form-control" name="post" id="post"></textarea>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary btn-block" id="kaydet"><i class="fa fa-paper-plane"></i> Konu Ekle</button>
                        </div>
                    </form>
                </div>
                <!-- begin col-3 -->
                @include('frontend.forum-side-bar')
                <!-- end col-3 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end content -->
@endsection
@section('js')
    <script src="//cdn.ckeditor.com/4.8.0/basic/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('post');
    </script>
    <script src="/js/sweetalert2.min.js"></script>
    <script>
        $(function() {
            $('#kaydet').click(function () {
                var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                $.ajax({
                    url: '/konu/ekle',
                    type: 'post',
                    data: {
                        '_token': CSRF_TOKEN
                    },
                    success:function (response) {
                        document.getElementById('form').reset(); // clear form input
                        swal(
                            response.baslik,
                            response.icerik,
                            response.durum
                        )
                    }
                });
            });
        });
    </script>
@endsection
@section('css')
    <link rel="stylesheet" href="/css/sweetalert2.min.css" />
@endsection
