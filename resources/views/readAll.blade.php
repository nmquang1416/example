@extends("layout.master.master-admin")

@section("title", "insertPage")

@section("body")
    <div class="container m-auto">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Name</th>
                <th scope="col">Age</th>
                <th scope="col">Address</th>
            </tr>
            </thead>
            <tbody>
            @foreach($readAll as $readAll)
                <tr>
                    <th scope="row">{{$readAll->id}}</th>
                    <td>{{$readAll->name}}</td>
                    <td>{{$readAll->age}}</td>
                    <td>{{$readAll->address}}</td>
                </tr>
            @endforeach
        </table>
        <button onclick="window.location = '{{url("/")}}'" class="btn btn-outline-primary">Return</button>
    </div>
@endsection
