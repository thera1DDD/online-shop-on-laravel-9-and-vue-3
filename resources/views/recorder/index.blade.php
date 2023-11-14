@extends('layouts/main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Регистраторы</h1>
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
                            <a href="{{route('recorder.create')}}" class="btn-btn primary">Добавить</a>
                        </div>
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Наименование</th>
                                        <th>Цена</th>
                                        <th>Старая Цена</th>
                                        <th>Количество</th>
                                        <th>Каналы</th>
                                        <th>Категория</th>
                                        <th>Описание</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($recorders as $recorder)
                                    <tr>
                                        <td>{{ $recorder->id }}</td>
                                        <td><a href="{{route('recorder.show', $recorder ->id)}}">{{$recorder->title}}</a></td>
                                        <td>{{$recorder->price}}</td>
                                        <td>{{$recorder->old_price}}</td>
                                        <td>{{$recorder->count}}</td>
                                        <td>{{$recorder->channel->title}}</td>
                                        <td>{{$recorder->category->title}}</td>
                                        <td>{{$recorder->description}}</td>
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
