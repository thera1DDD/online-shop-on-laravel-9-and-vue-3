@extends('layouts/main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Редактировать Заказ</h1>
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
                <form action="{{route('order.update',$order->id)}}" method="post">
                    @method('patch')
                    @csrf
                    <div class="form-group">
                        <input type="text" value="{{ $order->username ?? old('title') }}" name="username" class="form-control" placeholder="Клиент">
                    </div>
                    <div class="form-group">
                        <input type="text" value="{{ $order->phone_number ?? old('phone_number') }}" name="phone_number" class="form-control" placeholder="Номер телефона">
                    </div>
                    <div class="form-group">
                        <input type="text" value="{{ $order->product_name ?? old('product_name') }}" name="product_name" class="form-control" placeholder="Название">
                    </div>
                    <div class="form-group">
                        <input type="text" value="{{ $order->price ?? old('price') }}" name="price" class="form-control" placeholder="Цена">
                    </div>
                    <div class="form-group">
                        <input type="text" value="{{ $order->quantity ?? old('quantity') }}" name="quantity" class="form-control" placeholder="Количество">
                    </div>
                    <div class="form-group">
                        <input type="text" value="{{ $order->total ?? old('total') }}" name="total" class="form-control" placeholder="Итог">
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
