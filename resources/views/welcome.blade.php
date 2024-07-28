@extends('layout.base')

@section('css')
    <style>
        canvas {
            width: 100% !important;
            aspect-ratio: 1/1;
        }
    </style>
@endsection

@section('content')
    @include('includes.sidebar')

    <div class="wrap-content">

        @include('includes.appbar')

        <br /><br /><br />

        <div class="d-grid-4">
            <div class="dashboard-card">
                <table width="100%">
                    <tr>
                        <td>
                            <span class="h1">{{ $categories }}</span>
                            <small>Catégories</small>
                        </td>
                        <td class="text-right">
                            <a href="{{ route('categories.index') }}" class="button primary">
                                <i class="fas fa-arrow-right-long"></i>
                            </a>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="dashboard-card">
                <table width="100%">
                    <tr>
                        <td>
                            <span class="h1">{{ $products }}</span>
                            <small>Produits</small>
                        </td>
                        <td class="text-right">
                            <a href="{{ route('categories.index') }}" class="button success">
                                <i class="fas fa-arrow-right-long"></i>
                            </a>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="dashboard-card">
                <table width="100%">
                    <tr>
                        <td>
                            <span class="h1">{{ 0 }}</span>
                            <small>Ventes</small>
                        </td>
                        <td class="text-right">
                            <a href="#!" class="button error">
                                <i class="fas fa-arrow-right-long"></i>
                            </a>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="dashboard-card">
                <table width="100%">
                    <tr>
                        <td>
                            <span class="h1">{{ 0 }}</span>
                            <small>F CFA</small>
                        </td>
                        <td class="text-right">
                            <a href="#!" class="button warning">
                                <i class="fas fa-arrow-right-long"></i>
                            </a>
                        </td>
                    </tr>
                </table>
            </div>
        </div>

        <div class="d-grid-6">
            <div>
                {!! $product_chart_by_category->container() !!}
            </div>
        </div>

    </div>
@endsection

@section('js')
    <script src="{{ URL::asset('assets/chart/chart.min.js') }}" charset="utf-8"></script>
    {!! $product_chart_by_category->script() !!}
@endsection
