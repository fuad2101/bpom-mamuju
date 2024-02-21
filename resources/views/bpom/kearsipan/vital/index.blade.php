@extends('layouts.bpom')

@section('content')
<div class="row">
    <div class="col">
        <h1 class="h2 ml-3">Arsip Vital</h1>
    </div>
    <div class="col">
        <a href="/vital/create" class="btn btn-primary">Tambah</a>
    </div>
</div>
<div
    class="table-responsive"
>
    <table
        class="table table-primary"
    >
        <thead>
            <tr>
                <th scope="col">Column 1</th>
                <th scope="col">Column 2</th>
                <th scope="col">Column 3</th>
            </tr>
        </thead>
        <tbody>
            <tr class="">
                <td scope="row">R1C1</td>
                <td>R1C2</td>
                <td>R1C3</td>
            </tr>
            <tr class="">
                <td scope="row">Item</td>
                <td>Item</td>
                <td>Item</td>
            </tr>
        </tbody>
    </table>
</div>


@endsection
