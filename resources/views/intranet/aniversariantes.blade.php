@extends('intranet.templates.template')

@section('content')

<div class="container">
  <h2><a href="{{url('/intranet')}}"><i class="glyphicon glyphicon-arrow-left"></i></a> Aniversariantes do mês de {{$mes}}</h2>          
  <table class="table table-striped table-bordered">
    <thead>
      <tr>
        <th>Nome</th>
        <th>Aniversário</th>
      </tr>
    </thead>
    <tbody>
    @foreach($users as $user)
        <tr @if(Carbon\Carbon::parse($user->nascimento)->format('d/m') 
             == Carbon\Carbon::parse(Carbon\Carbon::today())->format('d/m')) style="font-weight:bold" @endif>
            <td>{{$user->name}}</td>
            <td>
                {{Carbon\Carbon::parse($user->nascimento)->format('d/m')}} 
                @if(Carbon\Carbon::parse($user->nascimento)->format('d/m') 
                == Carbon\Carbon::parse(Carbon\Carbon::today())->format('d/m')) 
                <i class="glyphicon glyphicon-gift"></i> Hoje!
                @endif
            </td>
        </tr>
    @endforeach
    </tbody>
  </table>

  {!! $users->links() !!}
  
</div>

@endsection


