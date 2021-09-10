<style type="text/css">
    .accordion .fa{
        margin-top: 3px;
    }
    .accordion .card, .accordion .card:first-of-type{
        background-color: transparent;
        border-top: 1px solid rgba(0,0,0,0.125);
        border-left: none;
        border-right: none;
        border-radius: 0;
    }

    .accordion .card-header{
        padding-left: 0;
        padding-right: 0;
        padding-bottom: 5px;
        padding-top: 5px;
        background-color: transparent;
    }

    .accordion .btn {
        padding-left: 0;
        padding-right: 0;
        color: black;
    }

    [aria-expanded="true"] .fa-chevron-down, 
    [aria-expanded="false"] .fa-chevron-up {
        display:none;
    }
</style>

<div id="accordion-{{ $accordion_id }}" class="accordion">
    @foreach($card as $key => $data)
    <div class="card">
        <div class="card-header" id="heading-{{ $accordion_id }}-{{ $key }}">
            <button class="btn btn-block text-left collapsed" data-toggle="collapse" data-target="#collapse-{{ $accordion_id }}-{{ $key }}" aria-expanded="false" aria-controls="collapse-{{ $accordion_id }}-{{ $key }}">
                <div class="form-inline">
                <div class="col-11 p-0 pl-2">{!! $data['title'] !!}</div>
                <div class="col-1 p-0">
                    <i class="fa fa-chevron-down pull-right"></i>
                    <i class="fa fa-chevron-up pull-right"></i>
                </div>
                </div>
            </button>
        </div>
        <div id="collapse-{{ $accordion_id }}-{{ $key }}" class="collapse" aria-labelledby="heading-{{ $accordion_id }}-{{ $key }}" data-parent="#accordion-{{ $accordion_id }}">
            <div class="card-body">
            {!! $data['content'] !!}
            </div>
        </div>
    </div>
    @endforeach
</div>