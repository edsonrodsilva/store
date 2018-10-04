@extends('admin.layouts.timeline')

@section('content')

    <!-- row -->
    <div class="row">
        <div class="col-md-12">
            <!-- The time line -->
            <ul class="timeline">
                <!-- timeline time label -->
                <li class="time-label">
                  <span class="bg-red">
                    {{date('d-m-Y')}}
                  </span>
                </li>
                <!-- /.timeline-label -->
                <!-- timeline item -->

                @foreach($timelines as $timeline)
                <li>
                    <i class="{{iconOrder($timeline->status_id)}} {{bgColor($timeline->status_id)}}"></i>

                    <div class="timeline-item">
                        <span class="time"><i class="fa fa-clock-o"></i> {{date_br($timeline->created_at)}}</span>

                        <h3 class="timeline-header">Atendente: <strong>{{$timeline->user_name}}</strong> | Cliente: <strong>{{$timeline->customer_name}}</strong></h3>

                        <div class="timeline-body">
                            <h5>Status: <strong>{{$timeline->status->status}}</strong></h5>
                            <span class="time-line-code {{bgColor($timeline->status_id)}}">#COD{{$timeline->order_id}}</span>
                        </div>
                        <div class="timeline-footer">
                            <a target="_blank" href="{{route('order-timeline-show', [base64_encode($timeline->order_id)])}}" class="btn btn-flat btn-xs {{bgColor($timeline->status_id)}}">Detalhes</a>
                        </div>
                    </div>
                </li>
                @endforeach

                <!-- END timeline item -->


                <li>
                    <i class="fa fa-clock-o bg-gray"></i>
                </li>
            </ul>
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->


@endsection
@push('scripts')
@endpush
