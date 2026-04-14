@extends('layout')

@section('content')
    <main class="app-main">
        <div class="app-content-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6"><h3 class="mb-0">قائمة الكتب</h3></div>
                    <div class="col-sm-6 text-end">
                        <a href="{{ route('books.create') }}" class="btn btn-primary">إضافة كتاب جديد</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="app-content">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>العنوان</th>
                                <th>المؤلف</th>
                                <th>السنة</th>
                                <th>العمليات</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($books as $book)
                                <tr>
                                    <td>{{ $book->title }}</td>
                                    <td>{{ $book->author }}</td>
                                    <td>{{ $book->year_published }}</td>
                                    <td>

                                        <a href="{{ route('books.edit', $book->id) }}" class="btn btn-warning btn-sm">تعديل</a>
                                        <form action="{{ route('books.destroy', $book->id) }}" method="POST">
                                            @csrf @method('DELETE')
                                            <button class="btn btn-danger btn-sm">حذف</button>
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
    </main>
@endsection
