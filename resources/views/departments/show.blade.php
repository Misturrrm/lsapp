@extends('layouts.app')

@section
 @if (count($catalogues) > 0 )
        @foreach ($catalogues as $catalogue)
            @if (count($departments) > 0 )
                @foreach($departments as $department)
            <h3 align = 'left'>Major Requirements</h3>
                @endforeach
            @endif
    
    
        @endforeach
    @else
    <h3> No information </h3>
@endif
@endsection