@extends("layouts.master")
@section('content')
    <div class="card mb-3">
        <div class="bg-holder d-none d-lg-block bg-card"
            style="background-image:url(../../assets/img/icons/spot-illustrations/corner-4.png);">
        </div>
        <!--/.bg-holder-->

        <div class="card-body position-relative">
            <div class="row">
                <div class="col-lg-8">
                    <h3>Frequently Asked Questions</h3>
                    <p class="mb-0">Below you'll find answers to the questions we get <br
                            class='d-none.d-sm-block' /> asked the most about to join with Falcon</p>
                </div>
            </div>
        </div>
    </div>
    <div class="card mb-3">
        <div class="card-body">
            <div class="col-md-12" id="post-data">
                @include('post.list.data-post')
            </div>
        </div>
        <div class="card-footer d-flex align-items-center bg-light">
            <h5 class="d-inline-block me-3 mb-0 fs--1">Was this information helpful?</h5>
            <button class="btn btn-falcon-default btn-sm">Yes</button>
            <button class="btn btn-falcon-default btn-sm ms-2">No</button>
        </div>
    </div>

@endsection
@section('js')


@endsection
