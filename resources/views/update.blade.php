@extends("layout.master.master-admin")

@section("title", "insertPage")

@section("body")
    <div class="container m-auto">
        <form action="{{url("updateORM")}}" method="post" class="col-8 m-auto form-horizontal">
            @csrf
            <label for="id">enter id you want delete</label>
            <input type="number" name="id" id="id" class="form-control">

            <button class="btn btn-outline-primary mt-4">submit</button>
        </form>
{{--        <button onclick="window.location = '{{url("/")}}'" class="btn btn-outline-primary">Return</button>--}}

    </div>
@endsection
