@extends('admin.layouts.master')

@section('content')

@component('admin.components.navbar')
@slot('title',"Dashboard")
@endcomponent

<div class="container" >

  <div class="card mt-2">
    <div class="card-header">
      Hello
    </div>
    <div class="card-body">

<?php

$x = "10.01 abc";

// $x = intval($x);
$x = doubleval($x);

$y = "130";

$sum = $x + $y;

// Debugbar::info($x, $sum);

// echo $sum;


//////////

for ($i = 1; $i <= 10; $i++){

    if ($i == 4){
        break;
    }

    echo "$i <br/>";

}


// $array = ['a','b','c'];



$array = [
    [
        'name'=>'hello',
        'age'=>12,
    ],
    [
        'name'=>'ab',
        'age'=>43,
    ],
    [
        'name'=>'def',
        'age'=>32,
    ]
];

Debugbar::info($array);

// echo 'berapa:' . count($array);

// var_dump($array);

$array[0]['age'] = 20;

foreach($array as $key=>$val){

    echo "$key. " . $val['name'] . " - " . $val['age'] . " <br/>";

    // echo ` {$val['name']} `;

}

function sayName($name = "World"){
    echo "hello $name <br/>";
}

sayName("Hello");

function sum($x, $y) : float {

    return $x + $y;

}

echo sum(10,5);

?>


    </div>
  </div>

</div>


@endsection
