@extends('layout')
@section('content')

<div class="card mt-6 shadow-sm">
    <div class="card-header bg-primary text-white">
        <h4 class="mb-0">Student Details</h4>
    </div>
    <div class="card-body">
        <div class="text-center">
            <h5 class="card-title text-secondary">Name: <span class="font-weight-bold text-dark">{{ $students->name }}</span></h5>
            <p class="card-text text-secondary">
                <strong>Address:</strong> <span class="text-dark">{{ $students->address }}</span>
            </p>
            <p class="card-text text-secondary">
                <strong>Mobile:</strong> <span class="text-dark">{{ $students->mobile }}</span>
            </p>
        </div>
        <hr />
        <div class="text-center mt-3">
            <a href="{{ url('/students') }}" class="btn btn-secondary btn-sm">
                <i class="fa fa-arrow-left"></i> Back to List
            </a>
            </form>
        </div>
    </div>
</div>

@endsection
