@extends('master')

@section('title', config('app.name') . ' - ' . 'API Home Page')

@section('content')

<div class="container">
  <div class="py-3 text-center">
    <h2>List of data</h2>
  </div>

  <div class="pb-3 text-center">
    <a class="btn btn-primary" href="{{ route('tasks.create') }}" role="button">Create</a>
    <a class="btn btn-primary" href="{{ route('data.json') }}" role="button">JSON</a>
  </div>

  @include('includes.messages')

<table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Street</th>
          <th scope="col">House number</th>
          <th scope="col">Appartament number</th>
          <th scope="col">Doorcode</th>
          <th scope="col">Information</th>
        </tr>
      </thead>
      <tbody>

          @foreach($tasks as $task)
          <tr>
            <th scope="row">{{ $task->id }}</th>
            <td>{{ $task->street }}</td>
            <td>{{ $task->house_number }}</td>
            <td>{{ $task->appartment_number }}</td>
            <td>{{ $task->doorcode }}</td>
            <td>{{ $task->description }}</td>
          </tr>
          @endforeach

      </tbody>
    </table>
  </div>

@endsection
