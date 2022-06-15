@extends('main')

@section('main')
    <div class="contact">
        <div class="container">
            <h3 class="w3ls-title">Регистрация</h3>
            <div class="contact-w3lsrow" style="padding: 20px">
                @if(isset($message))
                    <div class="text-danger">{{ $message }}</div>
                @endif
                <form action="{{ route('register.post') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="lastName">Фамилиясы</label>
                        <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Айтбаев" value="{{ old('lastName') }}">
                        @error('lastName')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="firstName">Аты</label>
                        <input type="text" class="form-control" id="firstName" name="firstName" placeholder="Кадырбай" value="{{ old('firstName') }}">
                        @error('firstName')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="middleName">Отчествосу</label>
                        <input type="text" class="form-control" id="middleName" name="middleName" placeholder="Нурланбекович" value="{{ old('middleName') }}">
                        @error('middleName')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="birthDate">Туулган куну</label>
                        <input type="date" class="form-control" id="birthDate" name="birthDate" value="{{ old('birthDate') }}">
                        @error('birthDate')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="omc">ОМС</label>
                        <input type="text" class="form-control" id="omc" name="omc" placeholder="КР-Х 4089424" value="{{ old('omc') }}">
                        @error('omc')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="passportNumber">Куболук номери</label>
                        <input type="text" class="form-control" id="passportNumber" name="passportNumber" placeholder="10208201651770" value="{{ old('passportNumber') }}">
                        @error('passportNumber')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="phoneNumber">Ата эненелердин телефон номери</label>
                        <input type="text" class="form-control" id="phoneNumber" name="phoneNumber" placeholder="0777070293" value="{{ old('phoneNumber') }}">
                        @error('phoneNumber')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-control" style="margin-bottom: 30px">
                        <label for="type">Тайпаны танданыз</label>
                        <select name="type" id="type">
                            <option value=""></option>
                            <option value="1">Кенже</option>
                            <option value="2">Орто</option>
                            <option value="3">Чон</option>
                        </select>
                        @error('type')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-success">Сакта</button>
                </form>
            </div>
        </div>
    </div>
@endsection
