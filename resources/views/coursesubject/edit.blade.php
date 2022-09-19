@extends('templates.base')
@section('style')
    <style>
        .card .card-body label {
            color: #fff0f4
        }
    </style>
@endsection
@section('title')
    科目編集
@endsection
@section('main')
    <div class="row">
        <div class="col-xl-10">
            <div class="page-section" id="overview">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <h2>科目編集</h2>
                        <p class="lead">対象授業の科目編集を行います</p>
                        <ul class="list-unstyled arrow">
                            <li>今年度の授業科目を編集してください</li>
                        </ul>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="section-block" id="basicform">
                        <h3 class="section-title">新規科目編集</h3>
                    </div>
                    <div class="card" style="background-color: #887f7a;">
                        <div class="card-body">
                            {{ Form::open(['url'=>'/course/edit/'.$subject->id,'files'=>true])}}
                            {{ Form::token() }}
                            <div class="form-group">
                                <label for="inputText3" class="col-form-label">科目名</label>
                                {{ Form::text('subject',$subject->subject,['class'=>'form-control','id'=>'inputText3','placeholder'=>'Java']) }}
                            </div>

                            <div class="form-group">
                                <label for="inputEmail">担当者</label>
                                <select class="form-control mb-3" name="manager">
                                    @foreach($users as $usr)
                                        <option>{{$usr->name}}</option>
                                    @endforeach
                                </select>


                                <label for="inputEmail">科目画像</label>
                                <div class="custom-file mb-3">
                                    {{Form::file('subject_file',['class'=>'custom-file-input','id'=>'customFile'])}}
                                    <label class="custom-file-label" for="customFile" style="color: #203744;">画像を選択してください</label>
                                </div>

                                <label class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" name="semester" checked="" class="custom-control-input"
                                           value="0"><span class="custom-control-label">前期</span>
                                </label>
                                <label class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" name="semester" class="custom-control-input" value="1"><span
                                        class="custom-control-label">後期</span>
                                </label>

                                <div class="form-group" style="margin-top: 20px;">
                                    <button type="submit" class="btn btn-primary">更新</button>
                                </div>
                            </div>
                            {{Form::close()}}
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="col-xl-2 col-lg-2 col-md-6 col-sm-12 col-12">
            <div class="sidebar-nav-fixed">
                <ul class="list-unstyled">
                    <li><a href="#overview" class="active">科目更新</a></li>
                </ul>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        // gsap.to("h3,h2", { rotate: 360, duration: 1 });
    </script>
@endsection
