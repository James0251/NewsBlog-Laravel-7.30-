@extends('admin.layouts.main')

@section('content')

<div class="dashboard-wrapper">
    <div class="container-fluid dashboard-content">
        <div class="row">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="section-block" id="image-card">
                        <h3 class="section-title">Card Images</h3>
                        <p>Cards include a few options for working with images. Choose from appending “image caps” at either end of a card, overlaying images with card content, or simply embedding the image in a card.</p>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title">Card title</h3>
                            <h6 class="card-subtitle text-muted mb-3">Lorem ipusm dolro sit amet</h6>
                            <img class="img-fluid mb-4" src="{{ asset('admin/images/card-img.jpg') }}" alt="Card image cap">
                            <p class="card-text">Ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae Integer quis ipsum.</p>
                            <div class="d-flex justify-content-left">
                                <a href="{{ route('categories.index') }}" class="btn btn-primary">Назад</a>
                                <a href="{{ route('categories.edit', ['category' => $category->id]) }}" class="btn btn-success">Редактировать</a>
                                <form action="{{ route('categories.destroy', ['category' => $category->id]) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger float-md-right">Удалить</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
