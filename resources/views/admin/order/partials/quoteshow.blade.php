{{ csrf_field() }}
<input type="hidden"  name="type" value="{{$quote->type}}"/>
<div class="row">
    <div class="box box-info">
        <div class="box-header"><legend>Dados do cliente</legend></div>
        <table class="table table-responsive table-striped table-condensed table-hover table-bordered" style="width: 100%;">
            <thead>
            <tr>
                <th class="col-md-1 text-left">CÓDIGO</th>
                <th class="col-md-6 text-left">NOME DO CLIENTE</th>
                <th class="col-md-5 text-left">E-MAIL DO CLIENTE</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td class="col-md-1 text-center">@if(isset($quote))#COD{{$quote->id}}@endif</td>
                <td class="col-md-6 text-left">@if(isset($quote))<input type="text" class="form-control"  name="name" value="{{$quote->name}}"/> @endif</td>
                <td class="col-md-5 text-left">@if(isset($quote))<input type="email" class="form-control" name="email" value="{{$quote->email}}"/>@endif</td>
            </tr>
            </tbody>
        </table>

        <table class="table table-responsive table-striped table-condensed table-hover table-bordered" style="width: 100%;">
            <thead>
            <tr>
                <th class="col-md-2 text-left">TELEFONE</th>
                <th class="col-md-6 text-left">DETALHES</th>
                <th class="col-md-2 text-left">DATA</th>
                <th class="col-md-2 text-left">STATUS</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td class="col-md-2 text-center">@if(isset($quote))<input type="text" class="form-control"  name="phone" value="{{$quote->phone}}"/>@endif</td>
                <td class="col-md-6 text-left">@if(isset($quote))<input type="text" class="form-control"  name="about" value="{{$quote->about}}"/>@endif</td>
                <td class="col-md-2 text-left">@if(isset($quote)){{format_date($quote->created_at)}}@endif</td>
                <td class="col-md-2 text-left">{{$quote->status->status}}</td>
            </tr>
            </tbody>
        </table>

        <table class="table table-responsive table-striped table-condensed table-hover table-bordered" style="width: 100%;">
            <thead>
            <tr>
                <th class="col-md-12 text-left">OBESERVAÇÕES DO ORÇAMENTO</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td class="col-md-12 text-left">@if(isset($quote))<input type="text" class="form-control"  name="description" value="{{$quote->description}}"/> @endif</td>
            </tr>
            </tbody>
        </table>
    </div>
</div>

<div class="row text-center" style="position: relative;">
    <div class="box">
        <div class="box-header"><legend class="text-left">Itens do orçamento</legend></div>
        <table class="table table-responsive table-striped table-condensed table-hover table-bordered" style="width: 100%;">
            <thead>
            <tr>
                <th class="col-md-1 text-center">ID</th>
                <th class="col-md-8 text-center">NOME DO PRODUTO</th>
                <th class="col-md-1 text-center">PREÇO</th>
                <th class="col-md-1 text-center">QTDE</th>
                <th class="col-md-1 text-center">SUBTOTAL</th>
            </tr>
            </thead>
            <tbody>
            @foreach($items as $item)
                <tr>
                    <td class="col-md-1 text-center">{{$item->id}}</td>
                    <td class="col-md-8 text-left">{{$item->product_name}}</td>
                    <td class="col-md-1 text-right">{{money_br($item->price)}}</td>
                    <td class="col-md-1 text-center">{{$item->qty}}</td>
                    <td class="col-md-1 text-right">{{money_br($item->subtotal)}}</td>
                </tr>
            @endforeach
            </tbody>

            <tfoot>
            <tr>
                <th class="col-md-1 text-right"></th>
                <th class="col-md-8 text-center"></th>
                <th class="col-md-1 text-center"></th>
                <th class="col-md-1 text-center">TOTAL R$:</th>
                <th class="col-md-1 text-right">{{money_br($quote->total - $quote->discount)}}</th>
            </tr>
            </tfoot>
        </table>
    </div>
</div>