@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <div class="float-start">
                    Book Information
                </div>
                <div class="float-end">
                    <a href="{{ route('books.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <label for="title" class="col-md-4 col-form-label text-md-end text-start"><strong>Title:</strong></label>
                    <div class="col-md-6" style="line-height: 35px;">
                        {{ $book->title }}
                    </div>
                </div>
                <div class="row">
                    <label for="author" class="col-md-4 col-form-label text-md-end text-start"><strong>Author:</strong></label>
                    <div class="col-md-6" style="line-height: 35px;">
                        {{ $book->author }}
                    </div>
                </div>
                <div class="row">
                    <label for="description" class="col-md-4 col-form-label text-md-end text-start"><strong>Description:</strong></label>
                    <div class="col-md-6" style="line-height: 35px;">
                        {{ $book->description }}
                    </div>
                </div>
                <div class="row">
                    <label for="category" class="col-md-4 col-form-label text-md-end text-start"><strong>Category:</strong></label>
                    <div class="col-md-6" style="line-height: 35px;">
                        {{ $book->category }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
