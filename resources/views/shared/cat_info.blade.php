<div class="card">
    <div class="px-3 pt-4 pb-2">
        <div class="d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center">
                <img style="width:50px" class="me-2 avatar-sm rounded-circle"
                     src="https://api.dicebear.com/6.x/fun-emoji/svg?seed=Mario" alt="Mario Avatar">
                <div>
                    <h5 class="card-title mb-0"><a href="#"> Mario
                        </a></h5>
                </div>
            </div>
            <div>
                <form method="POST" action={{ route('catins.destroy',$catinsInfo->id)}}>
                    @csrf
                @method('delete')
                    <a class="mx-2" href="{{route('catins.edit',$catinsInfo->id)}}">Edit</a>
                    <a href="{{route('catins.show',$catinsInfo->id)}}">View</a>
                <button class="ms-1 btn btn-danger btn-sm" >X</button>
                </form>

            </div>
        </div>
    </div>
    <div class="card-body">
        @if($editing??false)
            <div class="row">
                <form action="{{ route('catins.update',$catinsInfo->id) }}" method="post">
                    @csrf
                    @method('put')
                    <div class="mb-3">
                        <textarea name="content" class="form-control" id="content" rows="3">{{$catinsInfo->content}}</textarea>
                        @error('content')
                        <span class="d-block fs-6 text-danger mt-3"> {{ "Your message is invalid :( pls enter more than 5 and less than 240 chars" }}</span>
                        @enderror
                    </div>
                    <div class="">
                        <button type="submit" class="btn btn-dark"> Update </button>
                    </div>
                </form>
            </div>
        @else
            <p class="fs-6 fw-light text-muted">
                {{$catinsInfo->content}}
            </p>
        @endif
        <div class="d-flex justify-content-between">
            <div>
                <a href="#" class="fw-light nav-link fs-6"> <span class="fas fa-heart me-1">
                                        </span> 100 </a>
            </div>
            <div>
                                    <span class="fs-6 fw-light text-muted"> <span class="fas fa-clock"> </span>
                                        {{$catinsInfo->created_at}} </span>
            </div>
        </div>
        <div>
            <div class="mb-3">
                <textarea class="fs-6 form-control" rows="1"></textarea>
            </div>
            <div>
                <button class="btn btn-primary btn-sm"> Post Comment </button>
            </div>

            <hr>
            <div class="d-flex align-items-start">
                <img style="width:35px" class="me-2 avatar-sm rounded-circle"
                     src="https://api.dicebear.com/6.x/fun-emoji/svg?seed=Luigi"
                     alt="Luigi Avatar">
                <div class="w-100">
                    <div class="d-flex justify-content-between">
                        <h6 class="">Luigi
                        </h6>
                        <small class="fs-6 fw-light text-muted"> 3 hour
                            ago</small>
                    </div>
                    <p class="fs-6 mt-3 fw-light">
                        and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and
                        Evil)
                        by
                        Cicero, written in 45 BC. This book is a treatise on the theory of ethics,
                        very
                        popular during the Renaissan
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>