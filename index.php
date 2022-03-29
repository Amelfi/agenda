<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <Style>
        @import url('css/bootstrap.min.css');
        @import url('css/fontello.css');
        @import url('css/bootstrap-datepicker.css');
        @import url('css/style.css');
    </Style>

    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
   <script>
        $(function(){
            $('.datepicker').datepicker({
                format: "mm-yyyy",
                startView: 1,
                minViewMode: 1
            });

        });
</script>

</head>
<body>
    <div class="container">
        <h3><i class="icon-calendar"></i> Calendar Events</h3>
        <div class="row">
            <!-- Formulario para seleccionar la fecha -->
            <div class="col-md-4">
                <form action="" method="post">
                    <div class="input-group">
                        <input type="text" class="form-control datepicker">
                    
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary btn-sm">
                                    <i class="icon-search"></i>
                            </button>
                        </div>

                    </div>
                </form>    
            </div>
            
            <!-- Fecha seleccionada -->
            <div class="col">
                <div class="float-right">
                    <h3>03-2021</h3>
                </div>
            </div>
        <!-- Formulario para seleccionar la fecha -->
        <!-- Calendario -->
            <table class="table">
                <thead>
                    <tr>
                        <th>Sunday</th>
                        <th>Monday</th>
                        <th>Tuesday</th>
                        <th>Wednesday</th>
                        <th>Thursday</th>
                        <th>Friday</th>
                        <th>Saturday</th>
                    </tr>
                </thead>
                <tr>
                    <td> <a href="#">1</a> 
                        
                        <small >
                            <span class= "badge badge-dark float-right">2 events</span>
                            <ul>
                                <li><a href="#"> <i class="icon-pencil"></i> Education </a></li>
                               <li><a href="#"><i class="icon-cog"></i> Repair</a></li> 
                            </ul>
                        </small>
                    </td>
                    <td>2</td>
                    <td>3</td>
                    <td>4</td>
                    <td>5</td>
                    <td>6</td>
                    <td>7</td>


        
                </tr>
            </table>

            

        <!-- Calendario -->
        </div>
    </div>
</body>
</html>