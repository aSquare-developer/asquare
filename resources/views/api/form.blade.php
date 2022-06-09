@extends('master')

@section('title', config('app.name') . ' - ' . 'API Create/Update Page')

@section('content')


    <div class="container">
      <div class="py-3 text-center">
        <h2>Creating/Updating data</h2>
      </div>

      <div class="pb-3 text-center">
        <a class="btn btn-primary" href="{{ route('tasks.index') }}" role="button">Back</a>
      </div>

      @include('includes.messages')

      <div class="row">
        <div class="col">

          {!! Form::open(array('route' => 'tasks.store', 'method' => 'POST')) !!}
              <div class="row">
                <div class="col-md-6 mb-3">
                  {{ Form::label('street', 'Street') }}
                  {{ Form::text('street', '', ['class' => 'form-control', 'placeholder' => 'Address...']) }}
                </div>
                <div class="col-md-6 mb-3">
                  {{ Form::label('house_number', 'House Number') }}
                  {{ Form::text('house_number', '', ['class' => 'form-control', 'placeholder' => 'House number...']) }}
                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-3">
                  {{ Form::label('appartment_number', 'Appartament number') }}
                  {{ Form::text('appartment_number', '', ['class' => 'form-control', 'placeholder' => 'Appartament number...']) }}
                </div>
                <div class="col-md-6 mb-3">
                  {{ Form::label('doorcode', 'Doorcode') }}
                  {{ Form::text('doorcode', '', ['class' => 'form-control', 'placeholder' => 'Doorcode number...']) }}
                </div>
              </div>

              <div class="row">
                <div class="col">
                  {{ Form::label('description', 'Description') }}
                  {{ Form::textarea('description', '', ['class' => 'form-control', 'rows' => '3', 'placeholder' => 'Information...']) }}
                </div>
              </div>

              <hr class="mb-4 mt-4">

              {{ Form::submit('Save', ['class' => 'btn btn-primary btn-lg btn-block']) }}

          {!! Form::close() !!}

        </div>
      </div>
    </div>

@endsection
