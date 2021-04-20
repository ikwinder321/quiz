@extends('masterfront')
 @section('title', 'Laravel Questionaire')
 @section('content')


 <div class="container main">
 <div class="row"><div class="col-md-12">

 <?php 
 if($cont[0]->introtext){
    echo $cont[0]->introtext;
 } 
 ?>

</div>
 </div>
 </div>
 @endsection