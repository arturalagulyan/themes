@php
    use App\Enums\Theme;
@endphp
@extends('layout.default')
@section('title') Main @endsection
@section('content')
    <div class="card text-center">
        <div class="card-body">
            <form method="POST" action="{{ route('choose') }}">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="theme">Choose Theme</label>
                    <select class="form-control" id="theme" name="theme">
                        @foreach(Theme::cases() as $case)
                            <option value="{{ $case->value }}" @if($case->value === $theme) selected @endif>{{ $case->name }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary {{ "$theme-button" }}">Submit</button>
            </form>
        </div>
    </div>
@endsection
