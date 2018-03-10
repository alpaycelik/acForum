@extends('backend.app')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <section class="panel">
                <header class="panel-heading">
                    <div class="panel-actions">
                        <a href="#" class="fa fa-caret-down"></a>
                    </div>

                    <h2 class="panel-title">Kategori Listesi</h2>
                    <p class="panel-subtitle">Kategorileri sürükle</p>
                </header>
                <div class="panel-body">
                    <div class="col-md-12">
                        <div class="dd" id="nestable">
                            <ol class="dd-list">
                                @foreach($categories as $category)
                                <li class="dd-item" data-id="{{ $category->id }}">
                                    <div class="dd-handle">{{ $category->title }}</div>
                                        @if($category->children()->count() > 0)
                                        <ol class="dd-list">
                                            @foreach($category->children as $subcategory)
                                            <li class="dd-item" data-id="{{ $subcategory->id }}">
                                                <div class="dd-handle">{{ $subcategory->title }}</div>
                                            </li>
                                            @endforeach
                                        </ol>
                                        @endif
                                </li>
                                @endforeach
                            </ol>
                        </div>
                        <div class="form-group mt-md">
                            <div class="col-md-12 col-md-offset-6">
                                <button class="btn btn-primary" id="save">Düzenle</button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
@section('js')
    <script src="/js/sweetalert2.min.js"></script>
    <!-- Specific Page Vendor -->
    <script src="/backend/assets/vendor/jquery-nestable/jquery.nestable.js"></script>
    <!-- Examples -->
    <script src="/backend/assets/javascripts/ui-elements/examples.nestable.js"></script>
    <script type="text/javascript">
        $(function() {
            $('#save').click(function() {
                var tmp = JSON.stringify($('.dd').nestable('serialize'));
                var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                $.ajax({
                    type: "post",
                    url: '/admin/category/sort',
                    //data: 'categories=' + tmp,

                    data: {
                        'categories': tmp,
                        '_token': CSRF_TOKEN
                    },
                    success: function (response) {
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