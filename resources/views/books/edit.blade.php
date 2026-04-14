@extends('layout')

@section('content')
    <main class="app-main">
        <div class="container-fluid">
            <h3>تعديل بيانات الكتاب: {{ $book->title }}</h3>
            <form action="{{ route('books.update', $book->id) }}" method="POST">
                @csrf
                @method('PUT') <div class="card-body">
                    <div class="mb-3">
                        <label>عنوان الكتاب</label>
                        <input type="text" name="title" value="{{ $book->title }}" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label>المؤلف</label>
                        <input type="text" name="author" value="{{ $book->author }}" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label>سنة النشر</label>
                        <input type="number" name="year_published" value="{{ $book->year_published }}" class="form-control" required>
                    </div>
                </div>
                <button type="submit" class="btn btn-success">تحديث البيانات</button>
            </form>
        </div>
    </main>
@endsection
