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
     Liste des naissances
  </div>
    <div class="class-body">
    <table class="table">
    <tr class="thead">
      <th>#</th>
      <th>Numéro de<br>
        dessin</th>
      <th>Anner</th>
      <th>Nom</th>
      <th>prénom</th>
      <th>Date de Naissance</th>
      <th>Lieu de Naissance</th>
      <th>Gender</th>
      <th>Action</th>
      
      
    </tr>
   @foreach($déclaration as $déclarations)
      <tr>
          <td>{{ $déclarations->id }}</td>
        <td>{{ $déclarations->number }}</td>
        <td>{{ $déclarations->déclaration }}</td>
        <td>{{ $déclarations->Nom }}</td>
        <td>{{ $déclarations->Prénom }}</td>
        <td>{{ $déclarations->dateNaissance }}</td>
        <td>{{ $déclarations->lieuNaissance }}</td>
        <td>{{ $déclarations->gender }}</td>
        <td>
          <a href="{{ route('modifier-naissance',$déclarations->id)}}" class="btn btn-info">Modifier</a>
          <a  onclick="return confirm('Es-tu sur de vouloir le supprimer')"  href="{{route('delete-naissance',$déclarations->id) }}" class="btn btn-danger">Supprimer</a>
         </td>
      </tr>
   @endforeach
   
  </table>
  {{$déclaration->links()}}
</div>

    </div>
  
 </div>
 
@endsection
