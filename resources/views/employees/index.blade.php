@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">Employee List</div>
    <div class="card-body">
        @can('create-employee')
            <a href="{{ route('employees.create') }}" class="btn btn-success btn-sm my-2"><i class="bi bi-plus-circle"></i> Add New Employee</a>
        @endcan
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th scope="col">S#</th>
                    <th scope="col">Name</th>
                    <th scope="col">NIP</th>
                    <th scope="col">Position</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($employees as $employee)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $employee->name }}</td>
                        <td>{{ $employee->nip }}</td>
                        <td>{{ $employee->position }}</td>
                        <td>
                            <form action="{{ route('employees.destroy', $employee->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <a href="{{ route('employees.show', $employee->id) }}" class="btn btn-warning btn-sm"><i class="bi bi-eye"></i> Show</a>
                                @can('edit-employee')
                                    <a href="{{ route('employees.edit', $employee->id) }}" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i> Edit</a>
                                @endcan
                                @can('delete-employee')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Do you want to delete this employee?');"><i class="bi bi-trash"></i> Delete</button>
                                @endcan
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4">
                            <span class="text-danger">
                                <strong>No Employee Found!</strong>
                            </span>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        {{ $employees->links() }}
    </div>
</div>
@endsection
