@extends('layouts.app')

@section('content')
<div class="container">
    <div class="header mb-4 border-bottom rounded">
        <h1 class="h3">Transaction </h1>
    </div>
    <div class="row row-cols-1 row-cols-2 g-3">
        <div class="col col-md-4 g-4">
            <form action="{{ route('wallet.store')}}" method="POST">
                @csrf
                <input type="text" name="txhash" id="txhash" placeholder="TxHash" class="mb-4">
                <input type="text" name="amount" id="amount" placeholder="Amount" class="mb-4">
                <button type="submit">Submit</button>
            </form>
        </div>
        <div class="col col-lg-4 g-4">
            <table class="mb-3 table table-hover table-borderless">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">TxHash</th>
                        <th scope="col">Amount</th>
                    </tr>
                </thead>
                @foreach ($transactions as $transaction)
                    <tbody class="table-group devider">
                        <td>{{ $transaction->id }}</td>
                       <td><a href="" target="_blank">{{ $transaction->txhash }}</a></td>
                       <td>{{ $transaction->amount }}</td>
                    </tbody>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection