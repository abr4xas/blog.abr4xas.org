@extends('layouts.amp')

@push('title')
Home
@endpush
@push('meta')
    <link rel="canonical" href="{{ route('main') }}">
@endpush
@section('content')
<home></home>

@endsection