@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">
                            Biodata
                        </h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-stripped">
                            <tbody>
                                <tr>
                                    <th style="width: 150px; padding-left: 20px;">Nama Lengkap</th>
                                    <td>: Adam Raga</td>
                                </tr>
                                <tr>
                                    <th style="width: 150px; padding-left: 20px;">NIM</th>
                                    <td>: A11.2024.15598</td>
                                </tr>
                                <tr>
                                    <th style="width: 150px; padding-left: 20px;">Kelas</th>
                                    <td>: A11.43UG1</td>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
