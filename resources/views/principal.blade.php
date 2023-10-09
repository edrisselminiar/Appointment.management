<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

@include('header')
<div class="">
    <!-- Assuming 'Header' is a Blade component -->
   <section class="">
       <div class="imgslider">
        {{-- <div class="buton5"> --}}

       
           <div class="butt" data-aos="fade-right">
               <p>Bienvenue à notre clinique, pour prendre rendez-vous, cliquez ici</p>

               <!-- Use Blade's if-else syntax to conditionally render the links -->
               
             
                   {{-- <a href="/UserLogin" class="btn btn-outline-primary m-1">prendre rendez-vous</a> --}}
                   @if (Route::has('login'))
                   <li class="">
                       @auth
                       <a href="{{ url('/appointmentsA') }}" class="btn btn-outline-primary m-1">
                                    prendre rendez-vous     
                                    {{-- Dashboard --}}
                        </a>
                   </li>
                   @else
                   <li class="">
                       <a href="{{ route('login') }}"   class="btn btn-outline-primary m-1">
                                    prendre rendez-vous  
                                    {{-- LogIn --}}
                        </a>
                   </li>
                   {{-- @if (Route::has('register'))
                   <li>
                       <a href="{{ route('register') }}" type="button" class="btn btn-success">Register</a>
                   </li> --}}
                   {{-- @endif --}}
                   @endauth
                   @endif
              
           </div>
           <img src="{{ asset('Img/414f6d548cd8e7420ec2.svg') }}" alt="img2" data-aos="fade-up"/>
       </div> 
      </div>

       <div class="imgdontist">
           <img src="{{ asset('Img/7.jpg') }}" alt="" data-aos="fade-up"/>
       </div>
   </section>


</div>


@include('footer')














































<style>


    /* pransipal */
    /* imgslider */
    
    .imgslider {
      /* background-image: url(../ressources/Img/); */
      width: 84%;
      height: 500px;
      margin-left: 8%;
      box-shadow: rgba(100, 100, 111, 0.2) 0px 10px 29px 0px;
      display: flex;
      margin-top: 60px;
    
    
    }
    
    .butt {
      width: 30%;
      height: 100%;
      margin-top: 17%;
      margin-left: 8%;
      /* z-index: -5; */
    }
    /* .buton5{
      z-index: -5;

    } */
    
    .butt p {
      color: #0081C9;
      font-size: 20px;
    }
    
    .imgslider img {
      width: 70%;
      height: 100%;
      z-index: -4;
    }  
    
    /* ipad */
     @media (max-width:900px) {
    
      .butt p,
      .butt button {
        font-size: 13px;
      }
    
      .imgslider {
    
        width: 100%;
        height: 300px;
        margin-left: 0%;
    
        display: flex;
        margin-top: 60px;
    
      }
    
      .butt {
        width: 40%;
        height: 100%;
        margin-top: 8%;
        height: 60%;
        padding: 5%;
        background-color: rgb(255, 255, 255);
      } 
    
      .butt p {
        font-size: 15px;
      }
    
      .imgslider img {
        width: 40%;
        margin-top: 0%;
      }
    
    
    }
    
    /* phon */
     @media (max-width:450px) {
    
      .butt p,
      .butt button {
        font-size: 12px;
      }
    
      .imgslider {
    
        width: 100%;
        height: 250px;
        margin-left: 0%;
    
        display: flex;
        margin-top: 70px;
    
      }
    
      .butt {
        width: 40%;
        height: 100%;
        margin-top: 8%;
        margin-left: 3%;
        height: 60%;
        padding: 5%;
        background-color: rgb(255, 255, 255);
      }
    
      .butt button {
        font-size: 9px;
      }
    
      .imgslider img {
        width: 50%;
        margin-top: 0%;
    
      }
    
    } 
    
    /* imgdontist */
    /* imgdontist*/
    .imgdontist {
      width: 100%;
      position: relative;
      top: -150px;
      z-index: -5;
    }
    
    .imgdontist img {
      width: 100%;
    }
    
    /* ipad */
     @media (max-width:900px) {
      .imgdontist {
        width: 100%;
        position: relative;
        top: -70px;
        z-index: -5;
      }
    
      .imgdontist img {
        width: 100%;
        height: 300px;
      }
    
    } 
    
    /* phon */
     @media (max-width:450px) {
      .imgdontist {
        width: 100%;
        position: relative;
        top: -60px;
        z-index: -5;
      } 
    
     .imgdontist img {
        width: 100%;
        height: 200px;
      }
    }  
    
    
    </style>




    
</body>
</html>




