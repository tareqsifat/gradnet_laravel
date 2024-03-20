@extends('admin.layout.index')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">DataTable with minimal features & hover style</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table id="example2" class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>email</th>
                    <th>approved?</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $key => $user)

                @endforeach
                <tr>
                    <td>{{ $key+1 }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>4</td>
                    <td>X</td>
                </tr>
                <tr>
                    <td>Trident</td>
                    <td>Internet Explorer 5.0</td>
                    <td>Win 95+</td>
                    <td>5</td>
                    <td>C</td>
                </tr>

            </tbody>
            <tfoot>
                <tr>
                    <th>Rendering engine</th>
                    <th>Browser</th>
                    <th>Platform(s)</th>
                    <th>Engine version</th>
                    <th>CSS grade</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <!-- /.card-body -->
</div>

@endsection
