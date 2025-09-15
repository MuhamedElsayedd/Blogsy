@extends('theme.master')
@section('title','Edit Blog')

@section('content')
@include('theme.partials.hero',['title' => $blog -> title])

<!-- ================ contact section start ================= -->
<section class="section-margin--small section-margin">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="{{ route('blogs.update',[ 'blog' => $blog ]) }}" class="form-contact contact_form" action="contact_process.php" method="post"
                    novalidate="novalidate" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    @if (session('blogUpdateStatus'))
                    <div class="alert alert-success">
                        {{ session('blogUpdateStatus') }}
                    </div>
                    @endif

                    <div class="form-group">
                        <input class="form-control border" name="title" type="text"
                            placeholder="Enter your blog title" value="{{ $blog ->title }}">
                        <x-input-error :messages="$errors->get('title')" class="mt-2" />
                    </div>

                    <div class="form-group">
                        <input class="form-control border" name="image" type="file" accept="image/*">
                        <x-input-error :messages="$errors->get('image')" class="mt-2" />
                    </div>

                    <div class="form-group">
                        <select class="form-control border" name="category_id" type="text"
                            placeholder="Enter your Blog title" value="{{old('category_id')}}">
                            <option value="">Select Category</option>
                            @if($categories)
                            @foreach($categories as $category)
                            <option value="{{ $category->id }}" @if($category->id == $blog ->category_id)
                                selected @endif>{{ $category->name }}</option>
                            @endforeach
                            @endif
                        </select>
                        <x-input-error :messages="$errors->get('category_id')" class="mt-2" />
                    </div>

                    <div class="form-group">
                        <textarea class="w-100 border" name="description" type="text" placeholder=" Enter your Blog title" rows="5">
                        {{$blog -> description}}
                        </textarea>
                        <x-input-error :messages="$errors->get('description')" class="mt-2" />
                    </div>


                    <div class="form-group text-center text-md-right mt-3">
                        <button type="submit" class="button button--active button-contactForm">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- ================ contact section end ================= -->
@endsection