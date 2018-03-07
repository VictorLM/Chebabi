<?php

$evento = array (
  'subject' => '['.$request->tipo.'] '.$request->titulo,
  'body' => 
  array (
    'contentType' => 'HTML',
    'content' => $request->descricao,
  ),
  'start' => 
  array (
    'dateTime' => $request->iniciodata.'T'.$request->iniciohora.':00',
    'timeZone' => 'E. South America Standard Time',
  ),
  'end' => 
  array (
    'dateTime' => $request->terminodata.'T'.$request->terminohora.':00',
    'timeZone' => 'E. South America Standard Time',
  ),
  'location' => 
  array (
    'displayName' => $request->local,
  ),
  'attendees' => 
  array (

    0 => 
      array (
      'emailAddress' => 
      array (
        'address' => Auth::user()->email,
        'name' => Auth::user()->name,
      ),
      'type' => 'required',
    ),

  ),
);

if(count($request->envolvidos)>0){

  $i = count($request->envolvidos);
  $contador = 0;

  do{
    
    $evento['attendees'][] =
          
    array (
        'emailAddress' => 
        array (
            'address' => $user[$contador]->email,
            'name' => $user[$contador]->name
        ),
        'type' => 'required',
    );

    $i--;
    $contador++;

  }while($i < count($request->envolvidos) && $i > 0);

}