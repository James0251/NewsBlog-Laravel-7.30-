{{-- Название --}}
<div class="form-group">
    <label for="inputText3" class="col-form-label">Название категории</label>
    <input id="inputText3" type="text"
           class="form-control @error('title') is-invalid @enderror"
           name="title"

           {{-- Если редактируем, отображается старое значение --}}
           @if(Route::currentRouteName() === 'categories.edit')
               value="{{ old('title', $category->title) ?: '' }}"
           @endif
           autofocus>

    @error('title')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

{{-- Slug --}}
<div class="form-group">
    <label for="inputText3" class="col-form-label">Slug</label>
    <input id="inputText3" type="text"
           class="form-control @error('slug') is-invalid @enderror"

           {{-- Если редактируем, отображается старое значение --}}
           @if(Route::currentRouteName() === 'categories.edit')
               value="{{ old('slug', $category->slug) ?: '' }}"
           @endif
           name="slug">

    @error('slug')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

{{-- Фото --}}
<div class="custom-file mb-3">
    <input type="file" name="image" class="custom-file-input" id="customFile">
    <label class="custom-file-label" for="customFile">Загрузить фото категории</label>
</div>

{{-- Описание --}}
<div class="form-group">
    <label for="exampleFormControlTextarea1">Описание категории</label>
    <textarea class="form-control"
              id="exampleFormControlTextarea1"
              name="content"
              rows="3">

        {{-- Если редактируем, отображается старое значение --}}
        @if(Route::currentRouteName() === 'categories.edit')
            {{ old('content', $category->content) ?: '' }}
        @endif
    </textarea>
</div>

{{-- Кнопки --}}
<div class="col-sm-12 pl-0">
    <button class="btn btn-primary" type="submit">
        @if(Route::currentRouteName() === 'categories.edit')
            <span>Редактировать категорию</span>
        @else
            <span>Создать категорию</span>
        @endif
    </button>
    {{-- Назад --}}
    <a class="btn btn-secondary d-inline-block float-md-right text-white font-weight-bold" href="{{ route('categories.index') }}">
        <span>Назад</span>
    </a>
</div>
