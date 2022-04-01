<?php include "db.php" ?>
<?php 
   

    $query="SELECT * FROM categories";
    $rscategories=$con->query($query)or die(mysqli->error());
    $categories=[];
    while($row=$rscategories->fetch_object())
    {
        $categories[]=$row;
    }

    $rscategories->free();



    $pattern="/[0-9]{2}-[0-9]{4}/";
    if(isset($_GET['month']) && preg_match($pattern, $_GET['month']))
    {
        $montarry= explode("-", $_GET['month']);
       $month=$montarry[0];
       $year= $montarry[1];
    }else {

        $month= date('m');
        $year= date('Y'); 
    }

    
    $firstday= strtotime($year  ."-". $month . '-1');

    $monthname= date('F', $firstday);
    $firstweekday= date('w', $firstday);
    $monthdays= cal_days_in_month(CAL_GREGORIAN, $month, $year);

    $lastday= strtotime($year ."-". $month ."-". $monthdays);

    $from=date('Y-m-d', $firstday);
    $to=date('Y-m-d', $lastday);

   

     if($month==1)
     {
         $prevmonth= 12;
         $prevyear= $year-1;
     }
     else{
         $prevmonth= $month-1;
         $prevyear=$year;
     }
     if($month==12)
     {
         $nextmonth=1;
         $nextyear=$year+1;
     }
     else
     {
         $nextmonth=$month+1;
         $nextyear=$year;
     }

    $prevmonthday=cal_days_in_month(CAL_GREGORIAN, $prevmonth, $prevyear);
    $starweekday=$prevmonthday-$firstweekday +1;
    $weekcount=1;
    $daycount=1;
    $nextday=1;

    $eventQuery="SELECT DATE_FORMAT(date, '%d%m%Y') as datearray, events.name, categories.name as category, icon, date 
    FROM events, categories 
    WHERE categories.id=cat 
    -- and
    -- date between '$from' and '$to' 
    ORDER BY date";
    $Rsevent=$con->query($eventQuery);

    $events=[];

    while($row1=$Rsevent->fetch_object())
    {
        $events[$row1->datearray][]=$row1;
    }
?>

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
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
   <script>
        $(function(){
            $('.datepicker').datepicker({
                format: "mm-yyyy",
                startView: 1,
                minViewMode: 1
            });

            $('.btn-dark').on('click', function()
            {
            $('#NewEventModal .input-date').val($(this).data('date'));
            $('#NewEventModal').modal();
            });
       

        });

     
</script>

</head>
<body>
    <pre>
        <?php print_r ($events); ?>
    </pre>
    <div class="container">
        <h3><i class="icon-calendar"></i> Calendar Events</h3>
        <div class="row">
            <!-- Formulario para seleccionar la fecha -->
            <div class="col-md-4">
                <form action="index.php" method="get">
                    <div class="input-group">
                        <input name="month" type="text" class="form-control datepicker">
                    
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
                    <h3> <?=" $monthname $year" ?> </h3>
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
                    <?php
                        while($firstweekday > 0)
                        {echo '<td class="text-muted">' . $starweekday++ .'</td>';
                            $firstweekday--;
                            $weekcount++;

                        }

                        while($daycount <= $monthdays)
                        {
                            echo '<td> <buttom data-date="'.$year .'-'. $month . '-' . $daycount .'" class="btn btn-sm btn-dark">'. $daycount++ .'</buttom> 
                                
                            <small>
                                <ul> 
                                    <li> </li>

                                </ul>   
                           </small>     
                            </td>';
                            $weekcount++;

                            if($weekcount > 7){
                                echo '<tr></tr>';
                                $weekcount = 1;
                            }
                        }
                        
                        while($weekcount>1 && $weekcount <= 7)
                        {
                            echo '<td class="text-muted">'.$nextday++.'</td>';
                            $weekcount++;

                        }
                    ?>
                   


        
                </tr>
            </table>

            

        <!-- Calendario -->
        </div>
    </div>

   <?php include "Modals.php" ?>
   
</body>
</html>