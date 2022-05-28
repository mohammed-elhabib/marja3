
    @foreach($posts as $post)

            <div class="d-flex">
                <div class="d-flex align-items-center m-2 ">
                    <div style="    padding: 8px;">
                        <h6 style="text-align: center;">50</h6>
                        <span style="font-size: 12px;">Vote</span>
                    </div>
                    <div style="    padding: 8px;">
                        <h6  style="text-align: center;">50</h6>
                        <span style="font-size: 12px;">View</span>
                    </div>
                    <div style="    padding: 8px;">
                        <h6  style="text-align: center;">50</h6>
                        <span style="font-size: 12px;"> Ansoer</span>
                    </div>
                </div>
                <div class="d-flex align-items-center">
                    <h6> <a href="/post/{{$post->id}}/view">{{$post->title}}<span class="fas fa-caret-right ms-2"></span></a></h6>
                </div>
            </div>
            <hr class="my-3" />
  @endforeach



