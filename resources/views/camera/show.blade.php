@extends('layouts/main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Редактировать Камеру</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Главная</li>
                    </ol>
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
                        <div class="card-header d-flex p-3">
                            <div class="mr-3">
                                <a href="{{route('camera.edit',$camera->id)}}" class="btn btn-primary">Редактировать</a>
                            </div>
                            <form action="{{route('camera.delete',$camera->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <input type="submit" value="Удалить" class="btn btn-danger">
                            </form>
                        </div>
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <tbody>
                                    <tr>
                                        <td>ID</td>
                                        <td>{{$camera->id}}</td>
                                    </tr>
                                    <tr>
                                        <td>Наименование</td>
                                        <td>{{$camera->title}}</td>
                                    </tr>
                                    <tr>
                                        <td>Цена</td>
                                        <td>{{$camera->price}}</td>
                                    </tr>
                                    <tr>
                                        <td>Количество</td>
                                        <td>{{$camera->count}}</td>
                                    </tr>
                                    <tr>
                                        <td>Описание</td>
                                        <td>{{$camera->description}}</td>
                                    </tr>
                                    <tr>
                                        <td>MP</td>
                                        <td>{{$camera->megapixel->title}}</td>
                                    </tr>
                                    <tr>
                                        <td>Категория</td>
                                        <td>{{$camera->category->title}}</td>
                                    </tr>
                                    <tr>
                                        <td>Фото</td>
                                        <td> <img src="{{$camera->imageUrl}}" style="width: 200px"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
@endsection
