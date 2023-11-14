@extends('layouts/main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">IP Камеры</h1>
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
                            <a href="{{route('camera.create')}}" class="btn-btn primary">Добавить</a>
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
                                        <th>MP</th>
                                        <th>Категория</th>
                                        <th>Описание</th>
                                        <th>Фото</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($cameras as $camera)
                                    <tr>
                                        <td>{{ $camera->id }}</td>
                                        <td><a href="{{route('camera.show', $camera->id)}}">{{$camera->title}}</a></td>
                                        <td>{{$camera->price}}</td>
                                        <td>{{$camera->old_price}}</td>
                                        <td>{{$camera->count}}</td>
                                        <td>{{$camera->megapixel->title}}</td>
                                        <td>{{$camera->category->title}}</td>
                                        <td>{{$camera->description}}</td>
                                        <td><img src="{{$camera->imageUrl}}" style="width: 200px" ></td>
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
