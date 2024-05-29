@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <div class="float-start">
                    Edit Employee
                </div>
                <div class="float-end">
                    <a href="{{ route('employees.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('employees.update', $employee->id) }}" method="post">
                    @csrf
                    @method("PUT")
                    <div class="mb-3 row">
                        <label for="name" class="col-md-4 col-form-label text-md-end text-start">Name</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ $employee->name }}">
                            @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nip" class="col-md-4 col-form-label text-md-end text-start">NIP</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control @error('nip') is-invalid @enderror" id="nip" name="nip" value="{{ $employee->nip }}">
                            @if ($errors->has('nip'))
                                <span class="text-danger">{{ $errors->first('nip') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="position" class="col-md-4 col-form-label text-md-end text-start">Position</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control @error('position') is-invalid @enderror" id="position" name="position" value="{{ $employee->position }}">
                            @if ($errors->has('position'))
                                <span class="text-danger">{{ $errors->first('position') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <input type="submit" class="col-md-3 offset-md-5 btn btn-primary" value="Update">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
