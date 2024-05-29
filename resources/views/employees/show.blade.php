@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <div class="float-start">
                    Employee Information
                </div>
                <div class="float-end">
                    <a href="{{ route('employees.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <label for="title" class="col-md-4 col-form-label text-md-end text-start"><strong>Name:</strong></label>
                    <div class="col-md-6" style="line-height: 35px;">
                        {{ $employee->name }}
                    </div>
                </div>
                <div class="row">
                    <label for="author" class="col-md-4 col-form-label text-md-end text-start"><strong>NIP:</strong></label>
                    <div class="col-md-6" style="line-height: 35px;">
                        {{ $employee->nip }}
                    </div>
                </div>
                <div class="row">
                    <label for="position" class="col-md-4 col-form-label text-md-end text-start"><strong>Position:</strong></label>
                    <div class="col-md-6" style="line-height: 35px;">
                        {{ $employee->position }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
