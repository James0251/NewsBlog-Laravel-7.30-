@extends('admin.main.index')

@section('content')
    <!-- ============================================================== -->
    <!-- basic form  -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 col-10" style="left: 50px">
            <div class="section-block" id="basicform">
                <h3 class="section-title">Создание новой категории</h3>
                <p>Use custom button styles for actions in forms, dialogs, and more with support for multiple sizes,
                    states, and more.</p>
            </div>
            <div class="card">
                <h5 class="card-header">Basic Form</h5>
                <div class="card-body">
                    <form action="{{ route('categories.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf

                        {{-- Тут подключаем форму создания/редактирования категорий --}}
                        @include('admin.blog.categories.form.create-edit-form')

                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end basic form  -->
    <!-- ============================================================== -->
@endsection
