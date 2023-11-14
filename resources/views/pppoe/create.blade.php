@extends('layouts/main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Добавить PPPoe Коммутатор</h1>
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
                <form action="{{route('pppoe.store')}}" method="post" enctype="multipart/form-data"  >
                    @csrf
                    <div class="form-group">
                        <input type="text" name="title" class="form-control" placeholder="Наименование" >
                    </div>
                    <div class="form-group">
                        <input type="text" name="description" class="form-control" placeholder="Описание" >
                    </div>
                    <div class="form-group">
                        <input type="text" name="price" class="form-control" placeholder="Цена" >
                    </div>
                    <div class="form-group">
                        <input type="text" name="old_price" class="form-control" placeholder="Старая цена" >
                    </div>
                    <div class="form-group">
                        <input type="text" name="count" class="form-control" placeholder="Количество" >
                    </div>
                    <div class="form-group">
                        <input type="text" name="capacity" class="form-control" placeholder="Пропусная способность" >
                    </div>
                    <div class="form-group">
                        <input type="text" name="port" class="form-control" placeholder="Порты" >
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="custom-file">
                                <input name="preview_image" type="file" class="custom-file-input" id="exampleInputFile">
                                <label class="custom-file-label" for="exampleInputFile">Фото продукта</label>
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text">Загрузка</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Добавить" >
                    </div>
                </form>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
