<style>
 *{
    list-style: none;
    margin: 0;
    padding: 0; 
    box-sizing: border-box;
 }
.actives{
         font-family: 'Poppins', sans-serif;
         list-style: none;
         text-decoration:none; 
         margin: 0;
         padding: 0;
         box-sizing:border-box;
       
       }
      body{
       /* background: linear-gradient(to right, #d3cce3, #e9e4f0);*/
        width:100%;
        height: 100vh;
      }
    
    nav{
      display:flex;
      align-items:center;
      justify-content: center;
      background:#fff;
      width: 100%;
      margin-left:50px ;
      border-radius:50px;
      padding-right:2%;
      padding-left: 2%;
      margin-top:30px;
      box-shadow:0 5px 15px 5px rgba(0,0,0,0.1);
    }
    nav ul li{
      list-style:none;
      display: inline-block;
      padding: 13px 10px;
      margin:10px;
      position: relative;
      z-index:2;
      cursor: pointer;
      transition:color 0.5s;
    }
    nav ul li a{
      font-size:18px;
       font-weight:500;
       color:#777;
       text-decoration:none;
       
    }
    .actives{
        background:#3d5654;
        width: 100%;
        height: 100%;
        padding: 15px 35px;
        color:white;
        border-radius:30px;
    }
    nav ul li::after{
      content:'';
      background:#3d5654;
      width: 100%;
      height: 100%;
      border-radius:30px;
      position:absolute;
      top:100%;
      left:50%;
      transform:translate(-50%, -50%);
      z-index:-1;
      opacity: 0;
      transition:top 0.5s, opacity 0.5s;
    

    }
    nav ul li a:hover 
    {
      color:#c99c33;
    }
    nav ul li:hover::after
    {
      top:50%;
      color:white;
     
      opacity: 1;
    }
    </style>