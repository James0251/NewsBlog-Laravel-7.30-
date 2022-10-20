@extends('admin.main.index')

@section('content')
    <!-- ============================================================== -->
    <!-- basic form  -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 col-10" style="left: 50px">
            <div class="section-block" id="basicform">
                <h3 class="section-title">Создание новой категории</h3>
                <p>Use custom button styles for actions in forms, dialogs, and more with support for multiple sizes, states, and more.</p>
            </div>
            <div class="card">
                <h5 class="card-header">Basic Form</h5>
                <div class="card-body">
                    <form action="{{ route('categories.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="inputText3" class="col-form-label">Название категории</label>
                            <input id="inputText3" type="text" class="form-control" name="title" autofocus>
                        </div>
                        <div class="form-group">
                            <label for="inputText3" class="col-form-label">Slug</label>
                            <input id="inputText3" type="text" class="form-control" name="slug">
                        </div>

                        <div class="custom-file mb-3">
                            <input type="file" name="image" class="custom-file-input" id="customFile">
                            <label class="custom-file-label" for="customFile">Загрузить фото категории</label>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Описание категории</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" name="content" rows="3"></textarea>
                        </div>

                        <div class="col-sm-12 pl-0">
                            <button class="btn btn-primary" type="submit">
                                <span>Создать категорию</span>
                            </button>
                            <a class="btn btn-secondary d-inline-block float-md-right text-white font-weight-bold" href="{{ route('categories.index') }}">
                                <span>Назад</span>
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end basic form  -->
    <!-- ============================================================== -->
@endsection

