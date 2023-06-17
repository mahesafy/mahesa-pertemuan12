<!DOCTYPE html>
<html>
<head>
    <title>Tugas Pertemuan 12</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
    rel="stylesheet">   
    <style>
        .material-iconss {
  font-family: 'Material Icons';
  font-weight: normal;
  font-style: normal;
  font-size: 20px;  /* Preferred icon size */
  display: flex;
  margin: 10px;
  line-height: 0;
  text-transform: none;
  letter-spacing:none;
  word-wrap:inherit;
  white-space: nowrap;
  direction: ltr;
  -webkit-filter: invert(100%);
    filter: invert(100%);
  /* Support for all WebKit browsers. */
  -webkit-font-smoothing: antialiased;
  /* Support for Safari and Chrome. */
  text-rendering: optimizeLegibility;

  /* Support for Firefox. */
  -moz-osx-font-smoothing: grayscale;

  /* Support for IE. */
  font-feature-settings: 'liga';
}
.material-icons {
  font-family: 'Material Icons';
  font-weight: normal;
  font-style: normal;
  font-size: 20px;  /* Preferred icon size */
  display: flex;
  margin: 10px;
  line-height: 0;
  text-transform: none;
  letter-spacing:none;
  word-wrap:inherit;
  white-space: nowrap;
  direction: ltr;
  
  /* Support for all WebKit browsers. */
  -webkit-font-smoothing: antialiased;
  /* Support for Safari and Chrome. */
  text-rendering: optimizeLegibility;

  /* Support for Firefox. */
  -moz-osx-font-smoothing: grayscale;

  /* Support for IE. */
  font-feature-settings: 'liga';
}
.add {
  font-family: 'Material Icons';
  font-weight: normal;
  font-style: normal;
  font-size: 20px;  /* Preferred icon size */
  display: flex;
  margin: 10px 0px 10px 60px;
  line-height: 0;
  text-transform: none;
  letter-spacing:none;
  word-wrap:inherit;
  white-space: nowrap;
  direction: ltr;
  
  /* Support for all WebKit browsers. */
  -webkit-font-smoothing: antialiased;
  /* Support for Safari and Chrome. */
  text-rendering: optimizeLegibility;

  /* Support for Firefox. */
  -moz-osx-font-smoothing: grayscale;

  /* Support for IE. */
  font-feature-settings: 'liga';
}
.delete {
  font-family: 'Material Icons';
  font-weight: normal;
  font-style: normal;
  font-size: 20px;  /* Preferred icon size */
  display: flex;
  margin: 10px 0px 10px 14px;
  line-height: 0;
  text-transform: none;
  letter-spacing:none;
  word-wrap:inherit;
  white-space: nowrap;
  direction: ltr;
  
  /* Support for all WebKit browsers. */
  -webkit-font-smoothing: antialiased;
  /* Support for Safari and Chrome. */
  text-rendering: optimizeLegibility;

  /* Support for Firefox. */
  -moz-osx-font-smoothing: grayscale;

  /* Support for IE. */
  font-feature-settings: 'liga';
}
.logout {
  font-family: 'Material Icons';
  font-weight: normal;
  font-style: normal;
  font-size: 20px;  /* Preferred icon size */
  display: flex;
  margin: 10px 0px 10px 15px;
  line-height: 0;
  text-transform: none;
  letter-spacing:none;
  word-wrap:inherit;
  white-space: nowrap;
  direction: ltr;
  
  /* Support for all WebKit browsers. */
  -webkit-font-smoothing: antialiased;
  /* Support for Safari and Chrome. */
  text-rendering: optimizeLegibility;

  /* Support for Firefox. */
  -moz-osx-font-smoothing: grayscale;

  /* Support for IE. */
  font-feature-settings: 'liga';
}
</style>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
<script>

    function show(id){
        $(".modal-body #nama").text("Loading");
            $(".modal-body #kelas").text("Loading");
        
        $.ajax({url: "/students/"+id, success: function(result){
            let nama = result.split("*")
            $(".modal-body #nama").text(nama[0]);
            $(".modal-body #kelas").text(nama[1]);
        }});
        $('#exampleModal').modal("show");
    }
    </script>
</head>
<body>
    
<div class="container">
    @yield('content')
</div>
    
</body>
</html>