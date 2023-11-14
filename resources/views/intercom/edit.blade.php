@extends('layouts/main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Редактировать домофон</h1>
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
                <form action="{{route('intercom.update',$intercom->id)}}" method="post">
                    @csrf
                    @method('patch')
                    <div class="form-group">
                        <input type="text" value="{{$intercom->title }}" name="title" class="form-control" placeholder="Наименование" >
                    </div>
                    <div class="form-group">
                        <input type="text" value="{{$intercom->description }}" name="description" class="form-control" placeholder="Описание" >
                    </div>
                    <div class="form-group">
                        <input type="text" value="{{$intercom->price }}" name="price" class="form-control" placeholder="Цена" >
                    </div>
                    <div class="form-group">
                        <input type="text" value="{{$intercom->old_price }}" name="old_price" class="form-control" placeholder="Старая цена" >
                    </div>
                    <div class="form-group">
                        <input type="text" value="{{$intercom->resolution }}" name="resolution" class="form-control" placeholder="Разрешение экрана" >
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Редактировать" >
                    </div>
                </form>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
