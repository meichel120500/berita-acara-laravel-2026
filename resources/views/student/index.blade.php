@extends('layouts.app');
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $title ?? '' }}</h5>
                    <div class="mb-3" align="right">
                        <a href="{{ route('student.create') }}" class="btn btn-primary btn-sm">Create New Student</a>
                    </div>
                    <table class="table table-bordered table-striped">
                        <thead>
                            <th>No</th>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Gender</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            @foreach ($students as $student)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $student->name }}</td>
                                    <td>
                                        <img src="{{ asset('storage/' . $student->image) }}" width="50" height="50">
                                    </td>
                                    <td>{{ $student->email }}</td>
                                    <td>{{ $student->phone }}</td>
                                    <td>{{ $student->gender == 1 ? 'Male' : 'Female' }}</td>
                                    <td>
                                        <a href="{{ route('student.edit', $student->id) }}"
                                            class="btn btn-primary btn-sm">Edit</a>
                                        <form id="delete-from-{{ $role->id }}"
                                            action="{{ route('student.destroy', $student->id) }}"method="post"
                                            class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm delete-btn"> Delete</button>
                                        </form>

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
