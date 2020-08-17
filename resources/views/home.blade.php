@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('textos.myEntries') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if($entries->isEmpty())
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <i>{{__('textos.emptyEntries')}}</i>
                            </div>
                        </div>
                    @else
                            <ul>
                            @foreach($entries as $entry)
                                <li><a href="{{$entry->getUrl()}}">{{$entry->title}}</a></li>
                            @endforeach
                        </ul>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
