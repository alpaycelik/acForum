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
                    <th class="text-left">Açıklama</th>
                    <th class="text-left">İşlem</th>
                </tr>
                </thead>
                <tbody>
                @foreach($categories as $category)
                <tr>
                    <td data-title="Ad" class="text-left">{{ $category->title }}</td>
                    <td data-title="Açıklama" class="text-left">{{ $category->description }}</td>
                    <td data-title="İşlem" class="text-left">
                        <a class="btn btn-success btn-xs" role="button" href="{{ route('admin.category.edit', ['slug' => $category->slug]) }}">Düzenle</a>
                        <a class="btn btn-danger btn-xs" role="button">Sil</a>
                    </td>
                </tr>
               @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection