<h4> Share yours cats! </h4>
<div class="row">
    <form action="{{ route('catins.make') }}" method="post">
        @csrf
    <div class="mb-3">
        <textarea name="content" class="form-control" id="content" rows="3"></textarea>
        @error('content')
        <span class="d-block fs-6 text-danger mt-3"> {{ "Your message is invalid :( pls enter more than 5 and less than 240 chars" }}</span>
        @enderror
    </div>
    <div class="">
        <button type="submit" class="btn btn-dark"> Share </button>
    </div>
    </form>
</div>
