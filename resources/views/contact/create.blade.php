@extends('loogin')

@section('title','Enter l authenification')


@section('styles')
  <style>
    *{
        margin: 0;
        padding: 0;
        outline:none;
    }
    body{
        background: linear-gradient(to right, #3e5151, #decba4);
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items:center;
    }
    .container{
       position: relative;

       
    }
    form{
       background:rgba(255,255,255,.3);
       padding: 3rem;
       height:380px;
       width: 50%;
       left:50px;
       border-radius:20px;
       box-shadow:20px 20px 40px -6px rgba(0,0,0,.2);
       text-align:center;
       border-left:1px solid rgba(255,255,255,.3);
       border-top:1px solid rgba(255,255,255,.3);
       backdrop-filter:blur(10px);
       -webkit-backdrop-filter: blur(10px);
       -moz-backdrop-filter: blur(10px);
        margin-left:300px;
    }
    h1{
        color:white;
        font-weight:500;
        
        opacity:.7;
        font-size:2rem;
        text-align:center;
        margin-bottom:30px;
        text-shadow:2px 2px 6px rgba(0,0,0);
    }
    .form-control{
        background:transparent;
        border:none;
        border-left:2px solid rgba(255,255,255,.3);
        border-top:2px solid rgba(255,255,255,.3);
        padding: 1rem;
        width: 80%;
        margin-top: 20px;
        border-radius:50px;
        backdrop-filter: blur(5px);
        -webkit-backdrop-filter: blur(5px);
        -moz-backdrop-filter: blur(5px);
        box-shadow:4px 4px 60px rgba(0,0,0,.2);
        text-shadow:2px 2px 4px rgba(0,0,0, .2);
        margin-bottom:2em;

    }
    .btn{
        cursor: pointer;
        background:#243B55;
        color:white;
        width:180px;
        border: 1px solid #243B55;
        height: 40px;
        font-size:1rem;
        border-radius:40px
    }
    ::placeholder {
        color: white;
    }
    .image{
        align-items: center;
        justify-content: center;
        margin-right: 40px;
        margin-top: -7%;
    }
    .img-fluid{
        width: 20%;
         font-size:1.3rem; 

    }
    p{
     
        color: #3e5151;
    }
    h2{
        color: #3e5151;
        font-size: 20px;
    }
  
  </style>


@endsection



@section('contentes')
<div class="container">
    <h1>Enter authenification</h1>
   <form action= "{{ route('register')}}" method="post"> 
    {!! csrf_field() !!}
          <div class="image">
            <img src="image/logo.jpg" class="img-fluid" alt="">
            <h2> Royaume du maroc</h2>
             <p>Ministère de l'intérieur</p>
         </div>
     <input type="text" placeholder="Enter name" name="name" id="name" class="form-control">



     <input type="password"  placeholder="Enter Password" name="password" id="password" class="form-control">
    
     <input type="submit" value="Entrer" class="btn">


</form>
 </div>
@endsection