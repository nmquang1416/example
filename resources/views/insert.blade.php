
@extends("layout.master.master-admin")

@section("title", "insertPage")

@section("body")
<div class="container m-auto">
    <form action="{{url("insertORM")}}" method="post" class="col-8 m-auto form-horizontal">
        @csrf
        <label for="name">name</label>
        <input type="text" name="name" id="name" class="form-control">

        <label for="age">age</label>
        <input type="number" name="age" id="age" class="form-control">

        <label for="address">address</label>
        <input type="text" name="address" id="address" class="form-control">

        <button class="btn btn-outline-primary mt-4">submit</button>
    </form>
</div>
@endsection
