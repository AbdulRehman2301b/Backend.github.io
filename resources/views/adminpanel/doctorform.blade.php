<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"/>
    </head>

    <style>
        #image {
           background-image: url('images/bg_2.jpg');
           background-repeat: no-repeat;
           overflow: hidden;
       }

       #image {
           background-image: image('images/bg_2.jpg');
           background-size:100% 100%; 
       }

   </style>

   <body id="image"><br>
   <div class="maindiv">
    @if(session()->has('success'))
<div class="alert alert-success container" style="color: green;font-size:1rem;text-align:center;justify-content:center">
<p><b>{{session()->get('success')}}</b></p>
</div>
@endif  
       <form action="/insertdoctor" method="POST" style="margin-left: -40rem;">
           @csrf
           <section class="vh-80 bg-image">
               <div class="mask d-flex align-items-center h-100 gradient-custom-3">
                   <div class="container h-80">
                       <div class=" d-flex justify-content-center align-items-center h-100">

                           <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                               <div class="card" style="border-radius: 15px;margin-top: 1rem;">
                                   <div class="card-body p-5">
                                       <h2 class="text-uppercase text-center mb-4">REGISTER DOCTORS</h2>
                 <form action="/inserted" method="POST" class="col-lg-12 ">
                   @csrf
                <div class="row">
                <input type="text" placeholder="Doctor Name" name="doctorname" class="col-lg-5 m-2 form-control">
                <input type="text" class="col-lg-5 m-2 form-control" name="doctoremail" placeholder="Doctor Email">
                </div>


                <div class="row">
                <input type="text" class="col-lg-5 m-2 form-control" name="doctorspeciality" placeholder="Doctor Specialist">
                <input type="number" class="col-lg-5 m-2 form-control" name="doctorcontact" placeholder="Doctor-Contact">
                </div>

                <div class="row">
                <input type="text" class="col-lg-5 m-2 form-control" name="doctoraddress" placeholder="Doctor Address" required>
                <input type="password" class="col-lg-5 m-2 form-control" name="doctorpassword" placeholder="Doctor Password" required>
                </div>
                <a href="/loginpage">already registered</a>
                <br><br>
                   <div class="d-flex justify-content-center">
                     <button type="submit"
                       class="btn btn-outline-primary btn-block btn-lg gradient-custom-4 text-body my-2" style="width:200px;margin-right:10px;">Submit</button>
                   </div>
                 </form>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>
   </section>
   </form>
   <br><br><br><br><br><br>
   <br>
</div>


        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
