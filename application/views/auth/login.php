<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Login</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <style>
        body{ 
   border: 2px solid #f6f7f8;
  padding: 100px; 
}

.shine {
  background: #f6f7f8;
  background-image: linear-gradient(to right, #f6f7f8 0%, #edeef1 20%, #f6f7f8 40%, #f6f7f8 100%);
  background-repeat: no-repeat;
  background-size: 800px 104px; 
  display: inline-block;
  position: relative; 
  
  -webkit-animation-duration: 1s;
  -webkit-animation-fill-mode: forwards; 
  -webkit-animation-iteration-count: infinite;
  -webkit-animation-name: placeholderShimmer;
  -webkit-animation-timing-function: linear;
  }
@-webkit-keyframes placeholderShimmer {
  0% {
    background-position: -468px 0;
  }
  
  100% {
    background-position: 468px 0; 
  }
}


    </style>
</head>
<body>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4 mt-5 justify-content-center">
            <div class="card" id="content">
                <div class="card-body"></div>
            </div>
        </div>
    </div>
    
</body>
<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
<script>
  $(document).ready(() => {
      $('#content').addClass('shine')
      $.ajax({
        url: 'https://reqres.in/api/users?page=2',
      }).done(data => {
        data.data.map(item => {
            $('#content').append(`<p>${item.email}</p>`).removeClass('shine')
        })
      })
    })
</script>
</html>