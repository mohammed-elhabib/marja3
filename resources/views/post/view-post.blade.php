@extends('layouts.master')
@section('content')
    <div class="post">
        <div class="card mb-3">
            <div class="card-body ">
                <div class="d-flex justify-content-between">

                    <div class="d-flex post-header">
                        <div class="user-block d-flex flex-column ">

                            <div class="avatar avatar-2xl  mb-1">
                                <div class="avatar-name rounded-circle"><span>{{substr( $post->editor->name,0,2)}}</span></div>
                            </div>
                            <div>
                                <div>
                                    <h6 style="text-align: center"><a href="#">{{ $post->editor->name }}</a></h6>
                                </div>
                                <div>
                                    <p class="fs--2 mb-1"><a class="text-700" href="#">GamaDev</a></p>
                                </div>

                            </div>
                        </div>
                        <div class="">
                            <div class="mt-4 ">
                                <label class="form-label post_title"
                                    for="exampleFormControlInput1">{{ $post->title }}</label>
                            </div>
                            <div class="post-status">
                                <span>
                                    <span class="post-status-lable">Asked</span>
                                    <span class="post-status-value"> 9 years, 9 months ago</span>

                                </span>
                                <span>
                                    <span class="post-status-lable"> Modified</span>
                                    <span class="post-status-value"> 12 days ago</span>

                                </span>
                                <span>
                                    <span class="post-status-lable"> Viewed</span>
                                    <span class="post-status-value"> {{$post->view}} times</span>

                                </span>
                            </div>
                            <div class="row justify-content-between">
                                <ul>

                                    @foreach ($post->tags as $tag)
                                        <li class="tag"><a
                                                href="/tag/{{ $tag->id }}">{{ $tag->name }}</a></li>
                                    @endforeach


                                </ul>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </div>
        <div class="card ">

            <div class="card-body bg-light">
                <div class="row justify-content-center">

                    <div class="mb-3 d-flex p-0">

                        <div class=" post-rate d-flex flex-column ">
                            <i class="fa-solid fa-caret-up" style="    font-size: 45px;"></i>

                            <span class=" "> {{$post->vote}} </span>

                            <i class="   fa-solid fa-caret-down" style="    font-size: 45px;"></i>


                        </div>
                        <div class=" ProseMirror " style="    width: 90%;
                        " for="content">
                            {!! $post->body !!}
                        </div>
                    </div>


                </div>
            </div>
            <div class="card-footer">
                <div class="row justify-content-between">
                    <label class="form-label" for="organizerMultiple">Files </label>
                    <ul style="list-style-type: none;">

                        @foreach ($post->attachments as $attach)
                            <li class="attachment">
                                <a class="d-flex" target="_blank" href="{{$attach->url() }}"> <img class="attachment-img  align-self-center"
                                        src="{{ asset('img/icons/cloud-upload.svg') }}" />
                                    <span class=" align-self-center"> {{ $attach->name }}</span> </a>
                            </li>
                        @endforeach

                    </ul>
                </div>
            </div>
        </div>
        <div class="card mb-3">

        </div>
    </div>
@endsection
@section('css')
    <style>
        .post-status-lable {
            color: rgb(106, 115, 124);
            font-size: 13px;
        }

        .post-status-value {
            color: rgb(35, 38, 41);
            font-size: 13px;
            font-weight: 600;

        }

        .post-header {
            align-items: center;

        }

        a:visited {
            color: var(--falcon-btn-falcon-default-color);
        }

        .post .post_title {
            font-size: 25px;
            color: rgb(35, 38, 41);
        }

        .tag {
            display: inline;
            font-size: 12px;
            border: 1px solid #2c7be5;
            padding: 1px 10px;
            border-radius: 5px;
            margin: 0px 2px;

        }

        .user-name {
            font-size: 12px;
            font-weight: 600
        }

        .user-role {
            font-size: 12px;
            font-weight: 600;
            color: #2c7be5;
        }

        .user-block {
            border: 2px dashed #2c7be5;
            padding: 2px;
            border-radius: 8px;
            width: 100px;
            justify-content: center;
            align-items: center;
            margin-right: 10px;

        }

        .post-rate {
            justify-content: start;
            align-items: center;
            font-size: 30px;
            width: 120px;
        }

        .attachment {
            border: 1px dashed gray;
            margin: 4px;
        }

        .attachment a {
            cursor: pointer;
        }

        .attachment-img {
            width: 40px;
            height: 40px;
            margin: 0px 8px;

        }

    </style>
@endsection
@section('js')
@endsection
