@extends('layouts.main')
@section('content')
    <div>
        <a>Arrays [4,5,2,5,7,9,8,10,2,4,13]</a>

        <div>
            data array genap
        </div>

        <?php
        $data = [4,5,2,3,5,7,9,8,10,2,13];
        $count = 0;
        foreach ($data as $d) {
            
            if  (fmod($d, 2) == 0){
                $count++;
            }    
          }
          echo $count;
        ?>


    </div>
@endsection