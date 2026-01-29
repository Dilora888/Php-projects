<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add new book</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h2>Add new book</h2>

    {{-- Ошибки валидации --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="add-books_form-wrapper">
        <form name="add-new-book" id="add-new-book" method="POST" action="{{ url('/store') }}">
            @csrf

            <div class="form-section mb-3">
                <label for="title">Title</label>
                <input
                    type="text"
                    id="title"
                    name="title"
                    class="form-control"
                    value="{{ old('title') }}"
                    required
                >
            </div>

            <div class="form-section mb-3">
                <label for="author">Author</label>
                <input
                    type="text"
                    id="author"
                    name="author"
                    class="form-control"
                    value="{{ old('author') }}"
                    required
                >
            </div>

            <div class="form-section mb-3">
                <label for="genre">Choose genre</label>
                <select name="genre" id="genre" class="form-control" required>
                    <option value="">-- Select genre --</option>
                    <option value="fantasy">Fantasy</option>
                    <option value="sci-fi">Sci-Fi</option>
                    <option value="mystery">Mystery</option>
                    <option value="drama">Drama</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>

</body>
</html>
