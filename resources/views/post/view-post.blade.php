@extends('layouts.master')
@section('content')
    <div class="card mb-3">
        <div class="card-body d-flex justify-content-between">
            <!--   <div><a class="btn btn-falcon-default btn-sm" href="../../app/email/inbox.html" data-bs-toggle="tooltip" data-bs-placement="top" title="Back to inbox"><span class="fas fa-arrow-left"></span></a><span class="mx-1 mx-sm-2 text-300">|</span>
                   <button class="btn btn-falcon-default btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Archive"><span class="fas fa-archive"></span></button>
                    <button class="btn btn-falcon-default btn-sm ms-1 ms-sm-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="fas fa-trash-alt"></span></button>
                    <button class="btn btn-falcon-default btn-sm ms-1 ms-sm-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Mark as unread"><span class="fas fa-envelope"></span></button>
                    <button class="btn btn-falcon-default btn-sm ms-1 ms-sm-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Snooze"><span class="fas fa-clock"></span></button>
                    <button class="btn btn-falcon-default btn-sm ms-1 ms-sm-2 d-none d-sm-inline-block" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Print"><span class="fas fa-print"></span></button>

                  </div>
                  <div class="d-flex">
                    <div class="d-none d-md-block"><small>2 of 354</small>
                      <button class="btn btn-falcon-default btn-sm ms-2" type="button"><span class="fas fa-chevron-left"></span></button>
                      <button class="btn btn-falcon-default btn-sm ms-2" type="button"><span class="fas fa-chevron-right"></span></button>
                    </div>
                    <div class="dropdown font-sans-serif">
                      <button class="btn btn-falcon-default text-600 btn-sm dropdown-toggle dropdown-caret-none ms-2" type="button" id="email-settings" data-bs-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span class="fas fa-cog"></span></button>
                      <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="email-settings"><a class="dropdown-item" href="#!">Configure inbox</a>
                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#!">Settings</a><a class="dropdown-item" href="#!">Themes</a>
                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#!">Send feedback</a><a class="dropdown-item" href="#!">Help</a>
                      </div>
                    </div>
                  </div>-->
        </div>
    </div>
    <div class="card">

        <div class="card-body bg-light">
            <div class="row justify-content-center">
                <div class="mb-3">
                    <label class="form-label" for="exampleFormControlInput1">{{ $post->title }}</label>

                </div>
                <div class="mb-3">
                    <div class="form-label" for="content">
                        {!! $post->body !!}
                    </div>
                </div>


            </div>
        </div>
        <div class="card-footer">
            <div class="row justify-content-between">
                <ul>

                    @foreach ($post->attachments as $attach)
                        <li>{{ $attach->name }} <--> {{ $attach->id }}</li>
                    @endforeach

                </ul>
            </div>
        </div>
    </div>
    <div class="card mb-3">

    </div>
@endsection
@section('css')
@endsection
