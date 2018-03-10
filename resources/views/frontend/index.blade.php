@extends('frontend.app')
@section('content')
    <!-- begin search-banner -->
    <div class="search-banner has-bg">
        <!-- begin bg-cover -->
        <div class="bg-cover">
            <img src="/frontend/assets/img/cover.jpg" alt="" />
        </div>
        <!-- end bg-cover -->
        <!-- begin container -->
        <div class="container">
            <h1>1,293 Post for discussion</h1>
            <div class="input-group m-b-20">
                <input type="text" class="form-control input-lg" placeholder="Search the forums" />
                <span class="input-group-btn">
                    <button type="submit" class="btn btn-lg"><i class="fa fa-search"></i></button>
                </span>
            </div>
            <h5>Browse by Popular Categories</h5>
            <ul class="popular-tags">
                <li><a href="#"><i class="fa fa-circle text-danger"></i> CSS</a></li>
                <li><a href="#"><i class="fa fa-circle text-primary"></i> Bootstrap</a></li>
                <li><a href="#"><i class="fa fa-circle text-warning"></i> Javascript</a></li>
                <li><a href="#"><i class="fa fa-circle"></i> jQuery</a></li>
                <li><a href="#"><i class="fa fa-circle text-success"></i> Android</a></li>
                <li><a href="#"><i class="fa fa-circle text-muted"></i> iOS</a></li>
                <li><a href="#"><i class="fa fa-circle text-purple"></i> Template</a></li>
            </ul>
        </div>
        <!-- end container -->
    </div>
    <!-- end search-banner -->

    <!-- begin content -->
    <div class="content">
        <!-- begin container -->
        <div class="container">
            <!-- begin panel-forum -->
            @foreach($categories as $category)
            <div class="panel panel-forum">
                <!-- begin panel-heading -->
                <div class="panel-heading">
                    <h4 class="panel-title">{{ $category->title }}</h4>
                </div>
                <!-- end panel-heading -->
                <!-- begin forum-list -->
                @if($category->children()->count() > 0)
                <ul class="forum-list">
                    @foreach($category->children as $subcategory)
                    <li>
                        <!-- begin media -->
                        <div class="media">
                            <img src="/frontend/assets/img/icon-gold-note.png" alt="" />
                        </div>
                        <!-- end media -->
                        <!-- begin info-container -->
                        <div class="info-container">
                            <div class="info">
                                <h4 class="title"><a href="#">{{ $subcategory->title }}</a></h4>
                                <p class="desc">{{ $subcategory->description }}</p>
                            </div>
                            <div class="total-count">
                                <span class="total-post">{{ $subcategory->topics }}</span> <span class="divider">/</span> <span class="total-comment">{{ $subcategory->replies }}</span>
                            </div>
                            <div class="latest-post">
                                <h4 class="title"><a href="#">Migrate from jQuery 1.8.x to jQuery 2.0.x</a></h4>
                                <p class="time">Yesterday 10:49pm <a href="#" class="user">admin</a></p>
                            </div>
                        </div>
                        <!-- end info-container -->
                    </li>
                    @endforeach
                </ul>
                @endif
                <!-- end forum-list -->
            </div>
            @endforeach
            <!-- end panel-forum -->
        </div>
        <!-- end container -->
    </div>
    <!-- end content -->
@endsection

@section('css')

@endsection

@section('js')

@endsection