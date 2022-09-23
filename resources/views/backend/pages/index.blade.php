@extends('dashboard')

@section('content')

@foreach ($articles as $item)

{{ $item->nom }}
{{ $item->description }}

@can('view-webMaster', $item)
<button>edit
</button>
<button> delete</button>
@endcan
    <br>
    <hr>

@endforeach


@endsection
