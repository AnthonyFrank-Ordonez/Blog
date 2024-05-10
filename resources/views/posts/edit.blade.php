@extends('main')

@section('title', '| Edit Blog Post')
    
@section('content')
    <div class="row">
        {!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'PUT']) !!}

        <div class="col-md-8">
            <div class="form-group">
                {{ Form::label('title', 'Title: ') }}
                {{ Form::text('title', null, ['class' => 'form-control input-lg']) }}
            </div>

            <div class="form-group">
                {{ Form::label('slug', 'Slug: ')}}
                {{ Form::text('slug', null, array('class' => 'form-control', 'required' => '', 'minlength' => '5', 'maxlength' => '255')) }}
            </div>
            
            <div class="form-group">
                {{ Form::label('body', 'Post Body:') }}
                {{ Form::textarea('body', null, ['class' => 'form-control body-text']) }}
            </div>
        </div>

        <div class="col-md-4">
            <div class="well">
                <dl class="dl-horizontal">
                    <dt>Created At:</dt>
                    <dd>{{ date('M j, Y h:i a', strtotime($post->created_at)) }}</dd>
                </dl>

                <dl class="dl-horizontal">
                    <dt>Last Updated:</dt>
                    <dd>{{ date('M j, Y h:i a', strtotime($post->updated_at)) }}</dd>
                </dl>
                <hr>
                <div class="row">
                    <div class="col-sm-6">
                        {!! Html::linkRoute('posts.show', 'Cancel', array($post->id), array('class' => 'btn btn-danger btn-block')) !!}
                    </div>
                    <div class="col-sm-6">
                        {{ Form::submit('Save Changes', ['class' => 'btn btn-success btn-block']) }}
                    </div>
                </div>

            </div>
        </div>

        {!! Form::close() !!}
    </div> {{-- End of .row (form) --}}

@endsection