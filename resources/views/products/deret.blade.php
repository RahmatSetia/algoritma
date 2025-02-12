@extends('layouts.main')
@section('content')
    <div class="card">
    <h1>Deret Fibbonaci 15</h1>
    </div>

    <?php 
        function Fibonacci($number){ 
        if ($number != 0 && $number !=1) 
            return (Fibonacci($number-1) + Fibonacci($number-2)); 
        else if ($number == 1) 
            return 1; 
        else 
            return 0;
        } 

        $number = 15; 
        for ($counter = 0; $counter < $number; $counter++){ 
        echo Fibonacci($counter),' '; 
        } 
    ?>

@endsection