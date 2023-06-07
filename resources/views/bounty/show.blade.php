@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 g-4">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">{{ $bounty->name }}</h5>
                    </div>
                    <div class="card-body">
                        <p>Category: {{ $bounty->category}}</p>
                        <p>Price :{{ $bounty->price}}</p>
                    </div>
                    <div class="card-footer">
                        <button>Buy</button>
                    </div>
                </div>
            </div>
            <div class="col-md-8 g-4">
                <div class="row">
                    <h5 class="header">Recomendation</h5>
                    <div class="col-sm-3">
                        content here
                    </div>
                    <div class="col-sm-3">
                        content here
                    </div>
                    <div class="col-sm-3">
                        content here
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection