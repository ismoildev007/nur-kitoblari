@extends('layouts.admin')
@section('title', 'Список контактов')

@section('content')
    <main class="nxl-container">
        <div class="nxl-content">
            <!-- Page Header -->
            <div class="page-header">
                <div class="page-header-left d-flex align-items-center">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Список контактов</h5>
                    </div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admins.dashboard') }}">Главная</a></li>
                        <li class="breadcrumb-item">Контакты</li>
                    </ul>
                </div>
            </div>

            <!-- Main Content -->
            <div class="main-content p-3">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card stretch stretch-full">
                            <div class="card-body p-0">
                                <div class="px-2 py-3">
                                    <div class="d-flex justify-content-between">
                                        <h4 class="bold">Контакты</h4>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-hover" id="contactList">
                                        <thead>
                                        <tr>
                                            <th>№</th>
                                            <th>Адрес</th>
                                            <th>Email</th>
                                            <th>Телефон</th>
                                            <th>Facebook</th>
                                            <th>Instagram</th>
                                            <th>Telegram</th>
                                            <th>YouTube</th>
                                            <th>linkedin</th>
                                            <th class="text-end">Действия</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($contacts as $contact)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $contact->address }}</td>
                                                <td>{{ $contact->email }}</td>
                                                <td>{{ $contact->phone }}</td>
                                                <td>
                                                    <a href="{{ $contact->facebook }}" target="_blank">{{ $contact->facebook ? 'Facebook' : '-' }}</a>
                                                </td>
                                                <td>
                                                    <a href="{{ $contact->instagram }}" target="_blank">{{ $contact->instagram ? 'Instagram' : '-' }}</a>
                                                </td>
                                                <td>
                                                    <a href="{{ $contact->telegram }}" target="_blank">{{ $contact->telegram ? 'Telegram' : '-' }}</a>
                                                </td>
                                                <td>
                                                    <a href="{{ $contact->youtube }}" target="_blank">{{ $contact->youtube ? 'YouTube' : '-' }}</a>
                                                </td>
                                                <td>
                                                    <a href="{{ $contact->linkedin }}" target="_blank">{{ $contact->linkedin ? 'linkedin' : '-' }}</a>
                                                </td>
                                                <td>
                                                    <div class="hstack gap-2 justify-content-end">
                                                        <a href="{{ route('contacts.show', $contact->id) }}" class="avatar-text avatar-md d-none">
                                                            <i class="feather feather-eye"></i>
                                                        </a>
                                                        <a href="{{ route('contacts.edit', $contact->id) }}" class="avatar-text avatar-md">
                                                            <i class="feather feather-edit-3"></i>
                                                        </a>
                                                        <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST" style="display: none;">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="avatar-text avatar-md" onclick="return confirm('Are you sure?')">
                                                                <i class="feather feather-trash-2"></i>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
