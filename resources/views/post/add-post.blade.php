@extends('layouts.master')
@section('content')
    <form action="{{ route('post-store') }}" id="postForm" method="post">
        @csrf
        <div class="card mb-3">
            <div class="card-body d-flex justify-content-between">
                <div><a class="btn btn-falcon-default btn-sm" href="../../app/email/inbox.html" data-bs-toggle="tooltip"
                        data-bs-placement="top" title="Back to inbox"><span class="fas fa-arrow-left"></span></a><span
                        class="mx-1 mx-sm-2 text-300">|</span>

                </div>
                <div class="d-flex">
                    <input class="btn btn-falcon-default btn-sm ms-2" type="submit" value="Save" />

                </div>
            </div>
        </div>
        <div class="card">

            <div class="card-body bg-light">
                <div class="row justify-content-center">
                    <div class="mb-3">
                        <label class="form-label" for="exampleFormControlInput1">Title</label>
                        <input class="form-control" id="exampleFormControlInput1" name="title" placeholder="title" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="content">Body</label>
                        <editor>
                        </editor>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="organizerMultiple">Tags</label>
                        <select class="form-select js-choice" id="organizerMultiple" multiple name="tags[]">
                        </select>
                    </div>

                </div>
            </div>

        </div>
    </form>

    <div class="card">

        <div class="card-body bg-light">
            <div class="mb-3">
                <label class="form-label" for="organizerMultiple">Files</label>
                <form method="post" action="{{ route('attachment-store') }}" enctype="multipart/form-data"
                    class="dropzone" id="myFrom">
                    @csrf
                </form>
            </div>
        </div>
    </div>
@endsection
@section('css')
    <style>
        .dropzone {
            width: 100%;
            background: white;
            border-radius: 5px;
            border: 2px dashed rgb(0, 135, 247);
            border-image: none;
            margin-left: auto;
            margin-right: auto;
        }

    </style>
@endsection
@section('js')
    <script>
        attachemnts = [];

        $(document).ready(function() {
            //  var elements = document.s('.js-choice');
            //     elements.forEach(function(item) {
            $('form#postForm').submit(function() {
                console.log(attachemnts);

                attachemnts.forEach(attach => {
                    $(this).append(' <input type="hidden" name="attachemnt[]" value="'+attach.id+'">')
                });
                return true;
            });
            var choices = new Choices($('.js-choice')[0], {
                removeItemButton: true,
                placeholder: true,
                addItems: true

            });
            choices.setChoices(async () => {
                try {
                    const items = await axios.get('/tag/list');
                    return items.data;
                } catch (err) {
                    console.error(err);
                }
            });
            // });
            Dropzone.autoDiscover = false;


            console.log(Dropzone.options);

            let myDropzone = new Dropzone("#myFrom", {
                maxFilesize: 12,
                renameFile: function(file) {
                    var dt = new Date();
                    var time = dt.getTime();
                    return time + file.name;
                },
                addRemoveLinks: true,
                timeout: 50000,
                removedfile: function(file) {
                    var name = file.upload.filename;
                    $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                        },
                        type: 'POST',
                        url: '{{ url('image/delete') }}',
                        data: {
                            filename: name
                        },
                        success: function(data) {
                            console.log("File has been successfully removed!!");
                        },
                        error: function(e) {
                            console.log(e);
                        }
                    });
                    var fileRef;
                    return (fileRef = file.previewElement) != null ?
                        fileRef.parentNode.removeChild(file.previewElement) : void 0;
                },

                success: function(file, response) {
                    attachemnts.push(response);
                },
                error: function(file, response) {
                    console.log(response, file);

                    return false;
                }
            });

        });
    </script>
@endsection
