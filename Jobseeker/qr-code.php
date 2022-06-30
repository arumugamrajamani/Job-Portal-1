<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/e5ed048aee.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/qr-code.css">
    <title>QR-Code</title>
</head>
<body>
   

      <div class="table col-auto ">
        <section class="type p-1">
            <div class="bg-color-header text-center">
                <div class="table-responsive" id="no-more-tables">
                    <table class="table basic-table table-headers table table-hover">
                        <thead class="thead text-dark text-center" id="title-sub">
                            <tr>
                                <th>Profile Picture</th>
                                <th>Jobseeker Name</th>
                                <th>Contact Number</th>
                                <th>Email Address</th>
                                <th>Date Applied</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody class="tbody bg-light text-dark" id="body-h">
                            <tr class="tr">
                                <td data-title="profile picture"><img src="image/male.png" class="image" alt="" data-bs-toggle="modal" data-bs-target="#profile"></td>
                                <td data-title="job seeker name">Bryan D. Ubalde</td>
                                <td data-title="contact number">09*********</td>
                                <td data-title="email address">bryanubalde01@gmail.com</td>
                                <td data-title="date applied">April 19, 2022</td>
                                <td data-title="action">              
                                <button class="edit btn-success" type="button" id="btn-info" data-bs-toggle="modal" data-bs-target="#qr-code" title="Edit Details"><i class="fa-solid fa-pen-to-square"></i></button>                                  
                                <button class="btn btn-danger" type="button" id="btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal" title="Delete"><i class="bi bi-trash3"></i></button></td>
                            </tr>
                            <tr class="tr">
                                <td data-title="profile picture"><img src="image/female.png" class="image" alt="" data-bs-toggle="modal" data-bs-target="#profile"></td>
                                <td data-title="job seeker name">Kimberly ann S. Flores</td>
                                <td data-title="contact number">09*********</td>
                                <td data-title="email address">kimberlyannflores32@gmail.com</td>
                                <td data-title="date applied">May 05, 2022</td>
                                <td data-title="action">
                                <button class="edit btn-success" type="button" id="btn-info" data-bs-toggle="modal" data-bs-target="#modal-editdetails" title="Edit Details"><i class="fa-solid fa-pen-to-square"></i></button>                                  
                                <button class="btn btn-danger" type="button" id="btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal" title="Delete"><i class="bi bi-trash3"></i></button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div> 

    <div class="modal fade" id="qr-code" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
     
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Please scan this <b class="text-white" >QR CODE </b> for<br> more information about me.</h5>
              <a href="#" data-bs-dismiss="modal" aria-label="Close"><img src="image/close.png" class="close-button" alt="" srcset=""></a>
            </div>
            <div id="dialog1" class="triangle_down"></div>
            <div class="qr modal-body">
              <img class="qrcolor" src="image/Qr-Code.png" alt="">
            </div>
          </div>
        </div>
      </div>
</body>
</html>