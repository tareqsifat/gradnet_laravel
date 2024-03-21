@extends('admin.layout.index')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Users list</h3>
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
                    <tr>
                        <td>{{ $key+1 }}</td>
                        <td>{{ $user->first_name . ' ' . $user->last_name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            @if($user->is_approved == 0)
                                <a href="{{ route('approve-user', $user->id) }}" class="btn btn-primary">approve</a>
                            @else
                                <button disabled class="btn btn-secondary">Approved</button>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>

@endsection
