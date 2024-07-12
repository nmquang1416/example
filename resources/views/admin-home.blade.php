@extends("layout.master.master-admin")

@section("title", "admin-home")

@section("body")
<div class="col-12 d-flex justify-content-center ">
    <button onclick="window.location = '{{url("/insert")}}'" class="btn btn-outline-primary mr-2 ml-2">Add</button>
    <button onclick="window.location = '{{url("/read")}}'" class="btn btn-outline-primary mr-2 ml-2">Read</button>
    <button onclick="window.location = '{{url("/deleteORM")}}'" class="btn btn-outline-primary mr-2 ml-2">Delete</button>
    <button onclick="window.location = '{{url("/updateORM")}}'" class="btn btn-outline-primary mr-2 ml-2">Update</button>
</div>
@endsection
