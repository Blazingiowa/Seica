@extends('templates.base')
@section('title')科目一覧@endsection
@section('main')
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

            @if(isset($message))
                @if(!$message)
                    <div class="alert alert-danger" role="alert">
                        <h4 class="alert-heading">失敗...</h4>
                        <p>エラーが発生しました...</p>
                    </div>
                @endif
            @endif

            <div class="page-header">
                <h2 class="pageheader-title">科目一覧</h2>
                <p class="pageheader-text">登録されている科目の一覧です</p>
                <div class="page-breadcrumb">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{asset('/master')}}" class="breadcrumb-link">ホーム</a></li>
                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">授業科目</a></li>
                            <li class="breadcrumb-item active" aria-current="page">科目一覧</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="dashboard-short-list">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 co-12">
                <section class="card card-fluid">
                    <h5 class="card-header drag-handle"> 授業科目 </h5>
                    <ul class="sortable-lists list-group list-group-flush list-group-bordered" id="items">
                        @if(isset($subjects))
                            @foreach($subjects as $subject)
                                <li class="list-group-item align-items-center drag-handle">
                                    <span class="drag-indicator"></span>
                                    <div> {{$subject->subject}} </div>
                                    <div class="btn-group ml-auto">
                                        <button class="btn btn-sm btn-outline-light">編集</button>
                                        <button class="btn btn-sm btn-outline-light">
                                            <i class="far fa-trash-alt"></i>
                                        </button>
                                    </div>
                                </li>
                            @endforeach
                        @endif
                    </ul>
                </section>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 co-12">
                <section class="card card-fluid">
                    <h5 class="card-header drag-handle">Shortable List </h5>
                    <ul class="sortable-lists list-group list-group-flush list-group-bordered" id="item-2">
                        <li class="list-group-item align-items-center drag-handle">
                            <span class="drag-indicator"></span>
                            <div> Item one </div>
                            <div class="btn-group ml-auto">
                                <button class="btn btn-sm btn-outline-light">Edit</button>
                                <button class="btn btn-sm btn-outline-light">
                                    <i class="far fa-trash-alt"></i>
                                </button>
                            </div>
                        </li>
                        <li class="list-group-item align-items-center drag-handle">
                            <span class="drag-indicator"></span>
                            <div> Item two </div>
                            <div class="btn-group ml-auto">
                                <button class="btn btn-sm btn-outline-light">Edit</button>
                                <button class="btn btn-sm btn-outline-light">
                                    <i class="far fa-trash-alt"></i>
                                </button>
                            </div>
                        </li>
                        <li class="list-group-item align-items-center drag-handle">
                            <span class="drag-indicator"></span>
                            <div> Item three </div>
                            <div class="btn-group ml-auto">
                                <button class="btn btn-sm btn-outline-light">Edit</button>
                                <button class="btn btn-sm btn-outline-light">
                                    <i class="far fa-trash-alt"></i>
                                </button>
                            </div>
                        </li>
                        <li class="list-group-item align-items-center drag-handle">
                            <span class="drag-indicator"></span>
                            <div>Item four </div>
                            <div class="btn-group ml-auto">
                                <button class="btn btn-sm btn-outline-light">Edit</button>
                                <button class="btn btn-sm btn-outline-light">
                                    <i class="far fa-trash-alt"></i>
                                </button>
                            </div>
                        </li>
                        <li class="list-group-item align-items-center drag-handle">
                            <span class="drag-indicator"></span>
                            <div> Item five </div>
                            <div class="btn-group ml-auto">
                                <button class="btn btn-sm btn-outline-light">Edit</button>
                                <button class="btn btn-sm btn-outline-light">
                                    <i class="far fa-trash-alt"></i>
                                </button>
                            </div>
                        </li>
                    </ul>
                </section>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{asset('assets/vendor/shortable-nestable/Sortable.min.js')}}"></script>
    <script src="{{asset('assets/vendor/shortable-nestable/sort-nest.js')}}"></script>
    <script src="{{asset('assets/vendor/shortable-nestable/jquery.nestable.js')}}"></script>
@endsection
