@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach ($bounties as $bounty)
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $bounty->name }}</h5>
                        <p class="card-text">{{ $bounty->category }}</p>
                        <a href="{{ route('bounty.show', [$bounty->id]) }}" class="btn btn-primary">{{ $bounty->price }}</a>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">{{ $bounty->created_at}}</small>
                        <small class="text-muted">By: {{ $bounty->User->name }}</small>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection