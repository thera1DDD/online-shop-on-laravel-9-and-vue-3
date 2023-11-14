@extends('layouts/main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Редактировать Кабель</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <a href="{{route('cable.create')}}" class="btn btn primary">Добавить</a>
                        </div>

                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Наименование</th>
                                    <th>Описание</th>
                                    <th>Цена</th>
                                    <th>Старая цена</th>
                                    <th>Тип</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($cables as $cable)
                                    <tr>
                                        <td>{{$cable->id}}</td>
                                        <td><a href="{{route('cable.show', $cable->id)}}">{{$cable->title}}</a></td>
                                        <td>{{$cable->description}}</td>
                                        <td>{{$cable->price}}</td>
                                        <td>{{$cable->old_price}}</td>
                                        <td>{{$cable->type}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
