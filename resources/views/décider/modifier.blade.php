@extends('layouts')

@section('style')
   <style>
    /**{
        margin:0;
        padding: 0;
        box-sizing:border-box;
        font-family: 'Poppins', sans-serif; 
    }*/
    body{
      
        /*background: linear-gradient(to right, #141e30, #243b55);*/
        margin-bottom:30px;
    }
    .display{
        display: flex;
    }
    .wrappe{
         
        max-width: 450px;
        width: 100%;
        padding: 0px 10px;
        box-shadow:1px 1px 2px rgba(0,0,0,0.125)  
    }
    .wrappe .form{
        width: 90%;
        justify-content: column;
      
    }
    .wrappe .form .input_field{
        margin-bottom:15px;
        display:flex;
       /* align-items:center; */
       
      
    }
    .wrappe .form .input_field label{
        width: 200px;
         white-space: wrap;
        font-size:17px;
        margin-right:10px;
        color:#333;
        text-shadow:4px 4px 4px rgba(0,0,0, .2);
    }
    .wrappe .form .input_field input,
    .wrappe .form .input_field .textarea {
        width:100%;
        outline:none;
        flex-direction: column; 
        border:1px solid #d5dbd9;
        font-size:15px;
        padding:8px 10px;
        border-radius:3px;
        transition:all 0.3s ease;
        border-radius:50px;
        box-shadow:4px 4px 20px rgba(0,0,0,.1);
    }
    .wrappe .form .input_field .textarea{
        resize:none;
        height:125px;
    }

    .wrappe .form .input_field .custom_sel{
        position: relative;
        width: 100%;
        height: 37px;
    }
    .wrappe .form .input_field .custom_sel .select{
        border:1px solid #d5dbd9;
        -webkit-appearance:none;
        background:#ffff;
        font-size:15px;
        appearance: none;
        width: 100%;
        height: 100%;
        padding:1px 10px;
        border-radius:3px;
        border-radius:50px;
        box-shadow:4px 4px 60px rgba(0,0,0,.2);
        outline:none;
        transition:all 0.3s ease;

    }
    .wrappe .form .input_field .custom_sel .select option{
        font-size:15px;
    }
    .wrappe .form .input_field .custom_sel:before{
        content:"";
        position:absolute;
      
        
        top:18px;
        right:10px;
        border:8px solid;
        border-radius:50px;
        border-color:#d5dbd9 transparent transparent transparent;
        pointer-events:none;
    }
    .wrappe h2{
        color:#333;
        align-items:center;
        margin-left:50px;
        text-shadow:2px 2px 4px rgba(0,0,0, .2);
    }
    /*.wrappe .hr{
        margin-left:50px;
        background:#ffff;
    }*/
    .wrappe .input_terms label{
       font-size:17px;
       box-shadow:4px 4px 60px rgba(0,0,0,.2);
       text-shadow:2px 2px 4px rgba(0,0,0,.2);
       color:#333;
       margin-left:40px ;
       text-shadow:2px 2px 4px rgba(0,0,0, .2);

    }
    .wrappe .form .input_field .textarea{
        margin-top:5px;
        height:60px;
    }
    .wrappe .form .input_field .input:focus,
    .wrappe .form .input_field .textarea:focus,
    .wrappe .form .input_field .select:focus
    {
        border:1px solid #fec107;
    }
    .wrappe .input_terms .radio{
      cursor: pointer;
      width: 15px;
      height: 15px;
      border:1px solid #ffff;
      
     
    }
    .heading{
        color: #11FFBD;
        text-align:center;
        font-size:30px;
      
    }
    .alert{
        color:#333;
        font-size:20px;
        width: 50%;
        margin-left:350px ;

    }
    .btn{
        width: 25%;
        height: 50px;
        border:1 solid #ffff;
        border-radius:10px;
        background-color:#11FFBD;
         margin-left:500px;
          margin-top:10px ;
          color:#fff;
        
    }
    .btn:hover{
        background:#333;
        color:#fff;
        display:block;
    }
  

    
       
        


   




   </style>

@endsection
@section('title','Modification de l état civil')

@section('content')
 <h1 class="heading">Modifier<h1>
    <hr>
    @if(session('success'))
    <div class="alert alert-info mt-4 " >
        {{session('success')}}
    </div>
    @endif
    <form action="{{route('store.décider')}}" method="post">
        @csrf
     <div class="display">  
      <div class="wrappe">
        <h2>les information personnel</h2>
    <hr width="350" class="hr">

    <div class="form">
        
             <div class="input_field">
                   <label>Anner:</label>
                   <input type="number" class="input" name="anner" value="{{$déciders->anner}}"/> 
             </div>
               <div class="input_field">
                   <label>Numéro de <br>
                    dessin:</label>
                    <input type="number" class="input" name="numéro" value="{{$déciders->numéro}}"/> 
              </div>

              <div class="input_field">
                    <label>Nom:</label>
                    <input type="text" class="input" name="Nom" value="{{$déciders->Nom}}"/> 
                </div>
                    <div class="input_field">
                       <label>Prénom:</label>
                      <input type="text" class="input" name="Prénom" value="{{$déciders->Prénom}}"/> 
                   </div>  
                    <div class="input_field">
                       <label>Date de <br>
                        Naissance:</label>
                        <input type="date" class="input" name="dateNaissance" value="{{$déciders->dateNaissance}}"/> 
                    </div>  
                    <div class="input_field">
                       <label>Nationalité :</label>
                        <input type="text" class="input" name="national" value="{{$déciders->national}}"/> 
                    </div>  
      
               <div class="input_field">
                     <label>Lieu de <br>
                        naissanse :</label>
                      <textarea type="textarea" class="textarea" name="lieuNaissance"  value="{{$déciders->lieuNaissance}}"> </textarea>
                </div> 
             
                <div class="input_field">
             <label>Profession:</label>
             <div class="custom_sel">
                <select class="select" id="" name="">
                    <option value="">MARCHAND</option>
                    <option value="">FELAH</option>
                    <option value="">SANS</option>
                    <option value="">PROFESSEUR</option>
                    <option value="">MÉDECIN</option>
                    <option value="">AVOCAT</option>
                </select>
                </div>
        </div> 
        <div class="input_field">
                       <label>date de <br>
                       Décider:</label>
                        <input type="date" class="input" name="dateDécider"  value="{{$déciders->dateDécider}}"/> 
                    </div> 
                    <div class="input_field">
                       <label>Lieu de <br>
                       Décider :</label>
                        <input type="text" class="input" name="lieuDécider"  value="{{$déciders->lieuDécider}}"/> 
                    </div>   
        <div class="input_terms">
                    <label>Gender:</label>
                     <Label>Femme</Label>
                     <input type="radio" name="gender" value="femme" class="radio" /> 
                     <Label>Homme</Label>
                     <input type="radio" name="gender" value="femme" class="radio" /> 
                </div>
    </div>
    <hr width="350" class="hr">
    </div>
    <div class="wrappe">
        <h2>les information de Pére</h2>
    <hr width="350" class="hr">
    <div class="form">
              <div class="input_field">
                    <label>Nom:</label>
                    <input type="text" class="input" name="NomPére"  value="{{$déciders->NomPére}}"/> 
                </div>
                    <div class="input_field">
                       <label>Prénom:</label>
                      <input type="text" class="input" name="prénom"  value="{{$déciders->prénom}}"/> 
                   </div>  
                   <div class="input_field">
                     <label>Lieu de 
                        <br>naissanse :</label>
                      <textarea type="textarea" class="textarea" name="lieu"  value="{{$déciders->lieu}}"> </textarea>
                </div> 
                    <div class="input_field">
                       <label>Nationalité :</label>
                        <input type="texr" class="input" name="nation"  value="{{$déciders->nation}}"/> 
                    </div>  
          

                    <div class="input_field">
                       <label>date de <br>
                         Naissance :</label>
                        <input type="date" class="input" name="date"  value="{{$déciders->date}}"/> 
                    </div>  
               
    
            
    </div>
    <hr width="350" class="hr">
    </div>
    <div class="wrappe">
        <h2>les information de Mére</h2>
    <hr width="350" class="hr">
    <div class="form">
              <div class="input_field">
                    <label>Nom:</label>
                    <input type="text" class="input" name="NomMére"  value="{{$déciders->NomMére}}"/> 
                </div>
                    <div class="input_field">
                       <label>Prénom:</label>
                      <input type="text" class="input" name=""/> 
                   </div>  
                   <div class="input_field">
                     <label>Lieu de <br>
                        Naissanse :</label>
                      <textarea type="textarea" class="textarea" name=""> </textarea>
                </div> 
                    <div class="input_field">
                       <label>Date de <br>
                        Naissance:</label>
                        <input type="date" class="input" name=""/> 
                    </div>  
                   
    </div>
    <hr width="350" class="hr">
    </div>
</div>
  <button class="btn">Edit</button>
</form>  
@endsection