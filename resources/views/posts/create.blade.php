@extends('main')

@section('title', '| Create New Post')

@section('stylesheet')

    {!! Html::style('css/parsley.css') !!}

@endsection

@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Create New Post</h1>
            <hr>
            
            {!! Form::open(array('route' => 'posts.store', 'data-parsley-validate' => '')) !!}
                {{ Form::label('title', 'Title: ') }}
                {{ Form::text('title', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}

                {{ Form::label('slug', 'Slug: ') }}
                {{ Form::text('slug', null, array('class' => 'form-control', 'required' => '', 'minlength' => '5', 'maxlength' => '255')) }}

                {{ Form::label('body', 'Post Body: ') }}
                {{ Form::textarea('body', null, array('class' => 'form-control body-text', 'required' => '')) }}

                {{ Form::submit('Create Post', array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top: 20px')) }}
                {{ Html::linkRoute('posts.index', 'Back To All Posts', [], ['class' => 'btn btn-default btn-m btn-block']) }}
            {!! Form::close() !!}
            
        </div> {{-- End of Row --}}
    </div>

@endsection

@section('scripts')

    {!! Html::script('js/parsley.min.js') !!}

@endsection