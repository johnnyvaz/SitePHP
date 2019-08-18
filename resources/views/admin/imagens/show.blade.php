@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Imagen {{ $imagen->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/imagens') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/imagens/' . $imagen->id . '/edit') }}" title="Edit Imagen"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('admin/imagens' . '/' . $imagen->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Imagen" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $imagen->id }}</td>
                                    </tr>
                                    <tr><th> Nome </th>
                                    <td> {{ $imagen->nome }} </td></tr>
                                    <tr><th> Arquivo </th>
                                    <td><img src="{{ url("storage/$imagen->arquivo") }}" alt="{{ 'storage/'.$imagen->arquivo }}" width=50% height=50%></td>
                                    </tr>
                                    <tr><th> Ativo </th>
                                    <td> {{ $imagen->ativo }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
