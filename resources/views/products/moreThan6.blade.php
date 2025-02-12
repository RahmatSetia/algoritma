    @extends('layouts.main')
@section('content')
    <div>
        <a>Arrays [4,5,2 3,5,7,9,8,10,2,,13]</a>

        <div>
            data array lebih dari 6
        </div>

        <?php
        $data = [4,5,2,3,5,7,9,8,10,2,13];
        
        foreach ($data as $d) {
            if  ($d > 6){
                echo "$d ";
            }   
          }
        ?>


    </div>
@endsection