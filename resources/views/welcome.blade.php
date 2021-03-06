@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1>{{ __('textos.lastEntries') }}</h1>
                @foreach($entries as $entry)
                    <div class="card mt-4">
                        <div class="card-header">
                            {{$entry->id}}. {{$entry->title}}
                        </div>
                        <div class="card-body">
                            <p>{{$entry->content}}</p>
                        </div>
                        <div class="card-footer">
                            {{ __('textos.author') }} <a href="{{url('@'.$entry->user->username)}}">{{$entry->user->name}}</a>
                        </div>
                    </div>
                @endforeach
                <div class="mt-4">
                    {{$entries->links()}}
                </div>
            </div>
        </div>
    </div>
@endsection
