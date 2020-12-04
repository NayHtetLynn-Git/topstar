@extends('layouts.app')

@section('content')
    <div class="container">

        <hr class="solid">

        <div class="body_container">
            @if(count($shops)>0)
                <div class="table-responsive">
                    <table class="table table-bordered table-hover style-table">
                        <thead>
                        <tr>
                            <th>Shop Name</th>
                            <th>Owner Name</th>
                            <th>Phone</th>
                            <th>Address</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($shops as $shop)
                            <tr>
                                <td>
                                    {{$shop->shop_name}}
                                </td>
                                <td>
                                    {{$shop->owner_name}}
                                </td>
                                <td>
                                    {{$shop->phone}}
                                </td>
                                <td>
                                    {{$shop->address}}
                                </td>
{{--                                <td>--}}
{{--                                    <div align="center">--}}
{{--                                        <i class="fa fa-edit align-content-start" style="margin: 5px;"--}}
{{--                                           onclick="location.href='{{route('township.edit',$township->id)}}'"></i>--}}

{{--                                        <i class="fa fa-trash align-content-between" style="margin: 5px;"--}}
{{--                                           onclick="location.href='{{route('township.delete',$township->id)}}'"></i>--}}
{{--                                    </div>--}}

{{--                                </td>--}}
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div align="center">
                    <p>Total = {{count($shops)}}</p>
                </div>
            @endif
        </div>
    </div>
@endsection
