@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="header mb-4 border-bottom rounded">
            <h1 class="h3">Create Bounty</h1>
        </div>

        <div class="row align-item-start">
            <div class="col col-md-4">
                <div class="card">
                    <div class="card-header text-center">
                        <h5 class="card-title">Bounty Detail</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('bounty.store') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Bounty Name</label>
                                <input type="text" name="name" id="name" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="category" class="form-label">Bounty Category</label>
                                <input type="text" name="category" id="category" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="price" class="form-label">Price</label>
                                <input type="decimal" name="price" id="price" class="form-control">
                            </div>
                            <button type="submit" class="btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col col-md-8 g-4">
                <div class="row row-cols-1 row-cols-2 mb-3 g-4">
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <div class="card-header text-center">
                                <h5 class="card-title">Latest Transaction</h5>
                            </div>
                            <div class="card body">
                                <table class="table table-hover table-borderless">
                                    <thead>
                                        <tr>
                                            <th scope="col">Name</th>
                                            <th scope="col">Category</th>
                                            <th scope="col">Price</th>
                                        </tr>
                                    </thead>
                                    @foreach ($bounties as $bounty)
                                    <tbody class="table-group devider">
                                        <td>{{ $bounty->name }}</td>
                                        <td>{{ $bounty->category }}</td>
                                        <td>{{ $bounty->price }}</td>
                                    </tbody>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection