@extends('layout')
@section('content')

<div class="card">
  <div class="card-header">Edit Batch</div>
  <div class="card-body">

      <form action="{{ url('batches/' . $batches->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" value="{{ $batches->id }}" />

        <label>Batch Name</label></br>
        <input type="text" name="name" id="name" value="{{ $batches->name }}" class="form-control"></br>

        <label>Course Name</label></br>
        <select name="course_id" id="course_id" class="form-control">
            <option value="">{{ $batches->course->name }}</option>
            @foreach($courses as $id => $name)
                <option value="{{ $id }}" {{ $batches->course_id == $id ? 'selected' : '' }}>
                    {{ $name }}
                </option>
            @endforeach
        </select></br>

        <label>Start Date</label></br>
        <input type="date" name="start_date" id="start_date" value="{{ $batches->start_date }}" class="form-control"></br>

        <input type="submit" value="Update" class="btn btn-success"></br>
      </form>

  </div>
</div>

@stop
