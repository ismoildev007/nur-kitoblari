@extends('layouts.admin')

@section('content')
    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data" novalidate class="needs-validation" onsubmit="updateEditorContent()">
        @csrf

        <main class="nxl-container">
            <div class="nxl-content">
                <div class="page-header">
                    <div class="page-header-left d-flex align-items-center">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Создать продукт</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Главная</a></li>
                            <li class="breadcrumb-item">Продукты</li>
                        </ul>
                    </div>
                    <div class="page-header-right ms-auto">
                        <button type="submit" class="btn btn-primary">Создать</button>
                    </div>
                </div>

                @if ($errors->any())
                    <div class="alert alert-danger m-3">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="main-content">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="card stretch">
                                <div class="card-header">
                                    <h5 class="card-title">Детали продукта</h5>
                                </div>
                                <div class="card-body p-4">
                                    <div class="tab-content pt-3">
                                        <div class="tab-pane fade show active" id="uzContent">
                                            <div class="form-group pb-3">
                                                <label for="name">Название :</label>
                                                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
                                            </div>
                                            <div class="form-group pb-3">
                                                <label for="price">Price :</label>
                                                <input type="number" class="form-control" id="price" name="price" value="{{ old('price') }}" required>
                                            </div>

                                            <div class="form-group pb-3">
                                                <label for="content_uz">Содержимое :</label>
                                                <div id="editor" style="height:400px;"></div>
                                                <input type="hidden" id="text" name="content">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card stretch">
                                <div class="card-header">
                                    <h5 class="card-title">Изображение продукта</h5>
                                </div>
                                <div class="card-body px-4">
                                    <div class="form-group pb-3">
                                        <label for="image">Изображение:</label>
                                        <input type="file" class="form-control" id="image" name="image">
                                    </div>
                                    <h5 class="card-title mt-4">Category</h5>
                                    <div class="form-group pb-3">
                                        <select name="category_id" id="" class="form-control max-select">
                                            <option value="">Category</option>
                                            @foreach($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </form>

    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

    <script>
        var editor = new Quill('#editor', { theme: 'snow' });

        function updateEditorContent() {
            document.getElementById('text').value = editor.root.innerHTML;
        }

        document.querySelector('form').addEventListener('submit', function(event){
            updateEditorContent();
        });
    </script>
@endsection
