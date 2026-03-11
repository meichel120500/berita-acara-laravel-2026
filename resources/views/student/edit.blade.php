@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">{{ $errors->first() }}</div>
                    @endif
                    <h5 class="card-title">{{ $title ?? '' }}</h5>
                    <form action="{{ route('student.update',$student->id) }}"
                        method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row mb-3">
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name *</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        placeholder="Enter Your Name" required value="{{ $student->name }}">
                                </div>
                                <div class="mb-3">
                                    <label for="phone" class="form-label">Phone *</label>
                                    <input type="text" class="form-control" id="phone" name="phone"
                                        placeholder="Enter Your Phone" required value="{{ $student->phone }}">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Image</label>
                                    <input type="file" class="form-control" name="image">
                                    <img src="{{ asset('uploads/students/'.$student->image) }}" alt="" width="100">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email *</label>
                                    <input type="email" class="form-control" id="email" name="email"
                                        placeholder="Enter Your Email" required value="{{ $student->email }}">
                                </div>
                                <div class="mb-3">
                                    <label for="gender" class="form-label">Gender *</label>
                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input" name="gender" id="male" value="1" 
                                         {{ $student->gender == 1 ? 'checked': '' }}>
                                        <label for="male" class="form-check-label">Male</label>
                                    </div>
                                   <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input" name="gender" id="female" value="0"
                                        {{ $student->gender == 0 ? 'checked': '' }}>
                                        <label for="female" class="form-check-label">Female</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="address" class="form-label">Address</label>
                                    <textarea class="form-control" id="address" name="address" 
                                        placeholder="Enter Your Address">{{ $student->address }}</textarea>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                        <a href="{{ url()->previous() }}" class="btn btn-secondary">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
