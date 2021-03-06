@extends('admin.layouts.app')

@section('content')

@component('admin.components.contentheader')
    @slot('title')
        Pedidos para produção
    @endslot
    @slot('small')
        Listagem de Pedidos para produção
    @endslot
    @slot('link')
        Pedidos para produção
    @endslot
@endcomponent

<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header with-border">
                    <a target="_blank" href="{{route('order-timeline')}}" class="btn btn-sm bg-green"><i class="fa fa-align-left"></i> Timeline dos pedidos</a>
                    <a  href="javascript:void(0);" class="btn btn-sm bg-gray" onclick="funcionRefreshDatatable();"><i class="fa fa-refresh"></i></a>
                </div>
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-12">
                            @include('admin.messages.messages_register')
                        </div>

                        <div class="col-md-12">
                            <table class="table table-bordered table-condensed table-hover table-striped" id="datatable-orders-production" style="width: 100%;">
                                <thead>
                                <tr>
                                    <th class="hidden-xs col-md-1 text-center">CÓDIGO</th>
                                    <th class="hidden-xs col-md-1 text-center">AÇÃO</th>
                                    <th class="col-md-3 text-center">NOME DO CLIENTE</th>
                                    <th class="col-md-2 text-center">USUÁRIO</th>
                                    <th class="col-md-1 text-center">ORIGEM</th>
                                    <th class="col-md-1 text-center">TOTAL</th>
                                    <th class="col-md-2 text-center">DATA</th>
                                    <th class="hidden-xs col-md-1 text-center">STATUS</th>
                                </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>




@endsection
@push('scripts')
    <script>
        var table =  $('#datatable-orders-production').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{{route('datatable-orders-production')}}',
            columns: [
                {data: 'id', name: 'id', className: 'text-center'},
                {data: 'action', name: 'action', orderable: false, searchable: false, className: 'text-center'},
                {data: 'name', name: 'name'},
                {data: 'user', name: 'user'},
                {data: 'origin', name: 'origin'},
                {data: 'total', name: 'total', className: 'text-right'},
                {data: 'created_at', name: 'created_at', className: 'text-center'},
                {data: 'status', name: 'status', className: 'text-center'},
            ],
            order: [ [0, 'desc'] ],
            lengthMenu: [[8,10, 20, 30, -1], [8, 10, 20, 30, "Todos"]],
            language: {
                        "sEmptyTable": "Nenhum registro encontrado",
                        "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
                        "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
                        "sInfoFiltered": "(Filtrados de _MAX_ registros)",
                        "sInfoPostFix": "",
                        "sInfoThousands": ".",
                        "sLengthMenu": "_MENU_ resultados por página",
                        "sLoadingRecords": "Carregando...",
                        "sProcessing": "Processando...",
                        "sZeroRecords": "Nenhum registro encontrado",
                        "sSearch": "Pesquisar",
                        "oPaginate": {
                        "sNext": "Próximo",
                            "sPrevious": "Anterior",
                            "sFirst": "Primeiro",
                            "sLast": "Último"
                    },
                        "oAria": {
                        "sSortAscending": ": Ordenar colunas de forma ascendente",
                            "sSortDescending": ": Ordenar colunas de forma descendente"
                    }
                }
        });
    </script>
@endpush
