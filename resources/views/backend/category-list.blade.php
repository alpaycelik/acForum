@extends('backend.app')
@section('content')
    <section class="panel">
        <header class="panel-heading">
            <div class="panel-actions">
                <a href="#" class="fa fa-caret-down"></a>
            </div>
            <h2 class="panel-title">Kategoriler <a class="btn btn-primary btn-xs ml-lg" role="button" href="{{ route('admin.category.add.get') }}">Ekle</a></h2>
        </header>
        <div class="panel-body">
            <table class="table table-no-more table-bordered table-striped mb-none">
                <thead>
                <tr>
                    <th class="text-left">Ad</th>
                    <th class="hidden-xs hidden-sm">Açıklama</th>
                    <th class="text-left">İşlem</th>
                </tr>
                </thead>
                <tbody>
                @foreach($categories as $category)
                <tr id="category-{{ $category->id }}">
                    <td data-title="Ad" class="text-left">{{ $category->title }}</td>
                    <td data-title="Açıklama" class="hidden-xs hidden-sm">{{ $category->description }}</td>
                    <td data-title="İşlem" class="text-left">
                        <a class="btn btn-success btn-xs" role="button" href="{{ route('admin.category.edit', ['slug' => $category->slug]) }}">Düzenle</a>
                        <a class="btn btn-danger btn-xs" role="button" href="#" onclick="sil('{{ $category->id }}')">Sil</a>
                    </td>
                </tr>
               @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection
@section('js')
    <script src="/js/sweetalert2.min.js"></script>
    <script>
         function sil(id){
            swal({
                title: 'Silmek istediğinizden emin misiniz?',
                text: 'Sidiğinizde geri dönüşümü olmayacaktır',
                type: 'warning',
                showCancelButton: true,
                cancelButtonText: 'İptal',
                confirmButtonColor: '#f44336',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Evet, Sil'
            }).then(function () {
                var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                $.ajax({
                    type: "post",
                    url: '/admin/category/delete',
                    data: {
                        'id': id,
                        '_token': CSRF_TOKEN
                    },
                    success: function(response){
                        if(response.durum == 'success'){
                            $("#category-"+id).slideUp();
                        }
                        else{
                        swal(
                            response.baslik,
                            response.icerik,
                            response.durum
                        );
                        }
                    }
                })
            })
        }
    </script>
@endsection
@section('css')
    <link rel="stylesheet" href="/css/sweetalert2.min.css" />
@endsection