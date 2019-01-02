@if ($errors)
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger">
            <div class="container">
                {{$error}}
            </div>
        </div>
    @endforeach
@endif

@if (session('success'))
    <div class="alert alert-success">
        <div class="container">
            {{session('success')}}
        </div>
    </div>
@endif

@if (session('thief'))
    <div class="alert alert-danger">
        <div class="container">
            {{session('thief')}}
        </div>
    </div>
@endif