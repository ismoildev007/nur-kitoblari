@extends('layouts.admin')

@section('content')
    <form action="{{ route('contacts.update', $contact->id) }}" method="POST" novalidate class="needs-validation">
        @csrf
        @method('PUT')

        <main class="nxl-container">
            <div class="nxl-content">
                <div class="page-header">
                    <div class="page-header-left d-flex align-items-center">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Редактировать Контакт</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Главная</a></li>
                            <li class="breadcrumb-item">Контакты</li>
                        </ul>
                    </div>
                    <div class="page-header-right ms-auto">
                        <button type="submit" class="btn btn-primary">Сохранить изменения</button>
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
                                    <h5 class="card-title">Контактная информация</h5>
                                </div>
                                <div class="card-body p-4">

                                    <div class="pt-3">
                                        <div class="tab-pane fade show active">
                                            <div class="form-group pb-3">
                                                <label for="address">Адрес :</label>
                                                <textarea class="form-control" id="address" name="address" rows="2">{{ old('address', $contact->address) }}</textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group pb-3">
                                        <label for="email">Email:</label>
                                        <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $contact->email) }}" required>
                                    </div>

                                    <div class="form-group pb-3">
                                        <label for="phone">Телефон :</label>
                                        <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone', $contact->phone) }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card stretch">
                                <div class="card-header">
                                    <h5 class="card-title">Социальные сети</h5>
                                </div>
                                <div class="card-body p-4">
                                    <div class="form-group pb-3">
                                        <label for="facebook">Facebook:</label>
                                        <input type="text" class="form-control" id="facebook" name="facebook" value="{{ old('facebook', $contact->facebook) }}">
                                    </div>

                                    <div class="form-group pb-3">
                                        <label for="instagram">Instagram:</label>
                                        <input type="text" class="form-control" id="instagram" name="instagram" value="{{ old('instagram', $contact->instagram) }}">
                                    </div>

                                    <div class="form-group pb-3">
                                        <label for="telegram">Telegram:</label>
                                        <input type="text" class="form-control" id="telegram" name="telegram" value="{{ old('telegram', $contact->telegram) }}">
                                    </div>

                                    <div class="form-group pb-3">
                                        <label for="youtube">YouTube:</label>
                                        <input type="text" class="form-control" id="youtube" name="youtube" value="{{ old('youtube', $contact->youtube) }}">
                                    </div>
                                    <div class="form-group pb-3">
                                        <label for="linkedin">Linkedin:</label>
                                        <input type="text" class="form-control" id="linkedin" name="linkedin" value="{{ old('linkedin', $contact->linkedin) }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </form>
@endsection
