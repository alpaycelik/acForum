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
            <h1>Twitter Bootstrap</h1>
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
                <!-- begin col-9 -->
                <div class="col-md-9">
                    <!-- begin pagination -->
                    <div class="text-right">
                        <ul class="pagination m-t-0 m-b-15">
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li class="text"><span>...</span></li>
                            <li><a href="#">322</a></li>
                            <li class="right"><a href="#"><i class="fa fa-chevron-right"></i></a></li>
                        </ul>
                    </div>
                    <!-- end pagination -->
                    <!-- begin panel-forum -->
                    <div class="panel panel-forum">
                        <!-- begin forum-list -->
                        <ul class="forum-list forum-topic-list">
                            @if($topics->count() > 0)
                            @foreach($topics as $topic)
                            <li>
                                <!-- begin media -->
                                <div class="media">
                                    <img src="/frontend/assets/img/user-1.jpg" alt="" />
                                </div>
                                <!-- end media -->
                                <!-- begin info-container -->
                                <div class="info-container">
                                    <div class="info">
                                        <h4 class="title"><a href="#">{{ $topic->title }}</a></h4>
                                        <ul class="info-start-end">
                                            <li>Gönderen: <a href="#">{{ $topic->user->name }}</a></li>
                                            <li>Son Cevap: <a href="#">{{ $topic->last_user->name }}</a></li>
                                        </ul>
                                    </div>
                                    <div class="date-replies">
                                        <div class="time">
                                            {{ $topic->created_at->diffForHumans() }}
                                        </div>
                                        <div class="replies">
                                            <div class="total">{{ $topic->replies }}</div>
                                            <div class="text">CEVAP</div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end info-container -->
                            </li>
                            @endforeach
                            @else
                                <div class="alert alert-danger" role="alert">Bu foruma henüz konu eklenmemiş. Belki ilk sen ekleyebilirsin</div>
                            @endif
                        </ul>
                        <!-- end forum-list -->
                    </div>
                    <!-- end panel-forum -->

                    <!-- begin pagination -->
                    <div class="text-right">
                        <ul class="pagination m-t-0">
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li class="text"><span>...</span></li>
                            <li><a href="#">322</a></li>
                            <li class="right"><a href="#"><i class="fa fa-chevron-right"></i></a></li>
                        </ul>
                    </div>
                    <!-- end pagination -->
                </div>
                <!-- end col-9 -->
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