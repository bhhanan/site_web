<style>
 *{
    list-style: none;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    
 }

.wrapper{
    margin: 0 10px;
    
}
.wrapper_inner{
    position: relative;
    max-width:1250px;
    width: 100%;
    height: 700px;
    margin: 30px auto;
    border-radius:25px;
    display: flex;

}
.vertical_wrap{
    position: relative;
    height: 100%;
}
.vertical_bar{
    width: 250px;
    background:#3d5654;
    height: 100%;
    border-top-left-radius:25px;
    border-bottom-left-radius:25px;
    position: relative;
   
   
    
}
.vertical_bar .menu{
    padding-left:25px;
   
}
.vertical_bar .menu li a{
    display: block;
    text-decoration:none;
    padding:20px;
    text-transform:uppercase;
    color:#fff;
    letter-spacing:2px;
    border-top-left-radius:25px;
    border-bottom-left-radius:25px;
    margin-bottom:15px ;

}
.vertical_bar .menu li a .icon{
   color:#c99c33;
   width: 25px;
   display: inline-block;
}
.vertical_bar .menu li a:hover,
.vertical_bar .menu li a.active{
    background:#fff;
    color:#3d5654;
  

}
.vertical_bar .social{
    width: 100%;
    display:flex;
     margin-right:30px ;
    position: absolute;
    bottom:50px;

}
.vertical_bar .social li a{
    width: 50px;
    height: 50px;
    color: #fff;
    border:1px solid #fff;
    display:inline-block;
    border-radius:50%;
    text-align:center;
    font-size:30px;
     padding: 8px;
    line-height:50px;
    margin: 5px;
}
.vertical_bar .social li a:hover{
    background:#fff;
    color:#c99c33;
}
.main_container{
   width: calc(100% - 250px);
   margin-left: 300px;
   margin-top: -60%;
}
.main_container .top_bar{
   height: 60px;
   background:#425c5a;
   margin-top:10%;
   border-top-right-radius:25px;
   padding: 15px 25px;
   display: flex;
   align-items: center;
}
.main_container .hamburger{
    color:#fff;
    font-size:24px;
    cursor: pointer;
    margin-right:25px;
    display:none;
    
}
.main_container .logo{
    font-size:24px;
    font-weight:700;
    text-transform:uppercase;
    color:#c99c33;
}
.main_container .logo span{
    color:#fff;
}
.main_container .content{
    padding: 25px;
    height: calc(100% - 60px);
    overflow:auto;
}
.main_container .content .item{
    background:#425c5a;/*e3f2f1*/
    padding: 50px;
    margin-bottom:25px;
}
.main_container .content .item h1{
    color:#c99c33;
}
.main_container .content .item p{
    color:#fff;
}
.main_container .content .item h6{
    color:#fff;
}
@media (max-width:768px){
    .main_container .hamburger{
     display:inline-block;
    
}
.main_container{
    width: 100%;
}
.main_container .top_bar{
    border-top-left-radius:25px;
}
.vertical_wrap{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    visibility: hidden;
}
.vertical_bar{
    position: absolute;
    top: 0;
    left: -100%;
    transition:left 0.2s linear;
}
.vertical_bar .backdrop{
    position: absolute;
    top: 0;
    left: 0;
    border-radius:25px;
    width: 100%;
    height: 100%;
    background:rgba(0,0,0,0.5);

}
.wrapper.active .vertical_wrap{
    visibility: visible;
}
.wrapper.active .vertical_bar{
    left: 0;
    transition:left 0.2s linear;
}
}
 

    </style>
