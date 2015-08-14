@extends('app')

{{-- The next section only serves to 
    let know master blade that the shops 
    menu option needs to be highligted--}}
@section('config_active')
    active
@stop

@section('main')

<div class="container container-fluid">
    <div class="row col-xs-12">
        <h1> All shops </h1>

    </div>
    <div class="row col-xs-12">
    @if ($trans_types->count())
        <table class="table table-striped table-ordered">
            <thead>
                <tr>
                    <th>Shop Name</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($trans_types as $trans_type)
                <tr>
                    <td> {{ $trans_type->description }}  </td>
                    
                    <td>
                        {{ Form::open(array('method'=>'DELETE', 'route'=>array('transtype.destroy', $trans_type->id))) }}
                        {{ Form::submit('Delete', array('class'=>'btn btn-danger form-control', 'onclick'=>"if(!confirm('Are you sure to delete this item?')){return false;};")) }}
                        {{ Form::close() }}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    </div>
        {{ $shops->links() }}  {{-- code at the left is for breadcrumbes --}}
    @else
        There are no shops
    @endif
    
@stop {{-- End of section main --}}