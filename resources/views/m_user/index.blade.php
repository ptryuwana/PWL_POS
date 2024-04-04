@extends('./layouts.app')

@section('subtitle', 'M_User')
@section('content_header_title', 'PWL-POS')
@section('content_header_subtitle', 'CRUD User')


@section('content')
    <div class="card card-secondary">
        <div class="card-header">
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="float-left">
                        <h5>CRUD User</h5>
                    </div>
                    <div class="float-right">
                        <a class="btn btn-success fileinput-button" href="{{ route('m_user.create') }}"><i class="fas fa-plus"></i> Input User</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body">
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
        
            <table class="table table-bordered">
                <tr>
                    <th class="text-center">User ID</th>
                    <th class="text-center">Level ID</th>
                    <th class="text-center">Username</th>
                    <th class="text-center">Nama</th>
                    <th class="text-center">Password</th>
                    <th class="text-center">Action</th>
                </tr>
        
                @foreach ($useri as $m_user)
                    <tr>
                        <td>{{ $m_user->user_id }}</td>
                        <td>{{ $m_user->level_id }}</td>
                        <td>{{ $m_user->username }}</td>
                        <td>{{ $m_user->nama }}</td>
                        <td>{{ $m_user->password }}</td>
                    
                        <td class="text-center">
                            <form action="{{ route('m_user.destroy', $m_user->user_id) }}" method="POST">
                                <a class="btn btn-info btn-sm" href="{{ route('m_user.show', $m_user->user_id) }}">Show</a>
                                <a class="btn btn-primary btn-sm" href="{{ route('m_user.edit', $m_user->user_id) }}">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakkin ingin menghapus data ini?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection