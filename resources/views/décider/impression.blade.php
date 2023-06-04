@extends('layouts')

@section('title','Impréssion')
@section('style')

<style>
.image{
   margin-top:20px;
   display:block;
}
    .img-fluid{
         margin-top:90px;
         font-size:1.3rem;
          width: 10%;
          padding: 10px;
    }
   .container{
     position: absolute;
     top:0;
     left:0;
     right:0;
     bottom:0;
     z-index: 1;
   
     
   }
   .card{
    position: absolute;
    margin-top:30%;
    width: 100%;
    border-collapse:collapse;
     border-spacing:0;
     text-align:center;
     z-index: 2;
     border-radius:12px 12px 0 0;
     overflow: hidden;
     box-shadow:0 12px 5px rgba(32,32,32,.2);
   }
   .thead{
     background-color:#9bc5c3;
     color:#fafafa;
   }
   

</style>
@endsection
@section('content')
   
<div class="container">
 <div class="card">
  <div class="card-header bg-white text-info">
     Liste des Décider
  </div>
    <div class="class-body">
    <table class="table">
    <tr class="thead">
      <th>#</th>
      <th>Anner</th>
      <th>Numéro</th>
      <th>Nom</th>
      <th>prénom</th>
     
      <th>Date de Naissance</th>
      <th>Gender</th>
      <th>Lieu de Décider</th>
      <th>Date de Décider</th>
      <th>Nom de Pére</th>
      <th>Nom de Mére</th>
      <th>Action</th>
      
      
    </tr>
   @foreach($déciders as $décider)
      <tr>
        <td>{{ $décider->id }}</td>
        <td>{{ $décider->anner }}</td>
        <td>{{ $décider->numéro }}</td>
        <td>{{ $décider->Nom }}</td>
        <td>{{ $décider->Prénom }}</td>
        <td>{{ $décider->dateNaissance }}</td>
        <td>{{ $décider->gender}}</td>
        <td>{{ $décider->lieuDécider}}</td>
        <td>{{ $décider->dateDécider }}</td>
        <td>{{ $décider->NomPére }}</td>
        <td>{{ $décider->NomMére }}</td>
        <td>
          <a href="{{route('modifier-décider',$décider->id )}}" class="btn btn-info ">Modifier</a>
          <a  onclick = "return confirm('Es-tu sur de vouloir le supprimer')"  href="{{ route('delete-décider',$décider->id) }}" class="btn btn-danger">Supprimer</a>
         </td>
      </tr>
   @endforeach
   

</div>
    </div>
    </form> 
 </div>
@endsection