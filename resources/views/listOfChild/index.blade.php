@extends('main')

@section('main')
    <div class="container table-responsive ">
        <div class="row">
            <div class=" col-md-12 col-sm-12">
                <div class="table-responsive">
                    <h1 class=" title-list text-center">Кенже тайпасынын балдарынын тизмеси</h1>
                    <table class="list-workers">
                        <tr>
                            <th>Ф.И.О</th>
                            <th>Туулган куну</th>
                            <th>ОМС</th>
                            <th>Куболук номери</th>
                            <th>Ата эненелердин телефон номери</th>

                        </tr>
                        @foreach($smallUsers as $smallUser)
                            <tr>
                                <td>{{ $smallUser->last_name . ' ' . $smallUser->first_name . ' ' . $smallUser->middle_name }}</td>
                                <td>{{ $smallUser->birth_date }}</td>
                                <td>{{ $smallUser->OMC }}</td>
                                <td>{{ $smallUser->passport_number }}</td>
                                <td>{{ $smallUser->parent_phone_number }}</td>

                            </tr>
                        @endforeach
                    </table>

                    <h1 class=" title-list text-center">Ортонку тайпасынын балдарынын тизмеси</h1>
                    <table class="list-workers">
                        <tr class="white-bg">
                            <th>Ф.И.О</th>
                            <th>Туулган куну</th>
                            <th>ОМС</th>
                            <th>Куболук номери</th>
                            <th>Ата эненелердин телефон номери</th>

                        </tr>
                        @foreach($middleUsers as $smallUser)
                            <tr>
                                <td>{{ $smallUser->last_name . ' ' . $smallUser->first_name . ' ' . $smallUser->middle_name }}</td>
                                <td>{{ $smallUser->birth_date }}</td>
                                <td>{{ $smallUser->OMC }}</td>
                                <td>{{ $smallUser->passport_number }}</td>
                                <td>{{ $smallUser->parent_phone_number }}</td>

                            </tr>
                        @endforeach

                    </table>

                    <h1 class=" title-list text-center">Чон тайпанын балдарынын тизмеси</h1>
                    <table class="list-workers">
                        <tr>
                            <th>Ф.И.О</th>
                            <th>Туулган куну</th>
                            <th>ОМС</th>
                            <th>Куболук номери</th>
                            <th>Ата эненелердин телефон номери</th>

                        </tr>
                        @foreach($bigUsers as $smallUser)
                            <tr>
                                <td>{{ $smallUser->last_name . ' ' . $smallUser->first_name . ' ' . $smallUser->middle_name }}</td>
                                <td>{{ $smallUser->birth_date }}</td>
                                <td>{{ $smallUser->OMC }}</td>
                                <td>{{ $smallUser->passport_number }}</td>
                                <td>{{ $smallUser->parent_phone_number }}</td>

                            </tr>
                        @endforeach

                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
