<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

        {{-- link bootstrap --}}
        <link rel="stylesheet" href="/bootstrap-5.0.2-dist/css/bootstrap.css">
    </head>
    <body class="">


{{-- apointment prendre-rendez-vous --}}
@include('header')
<div class="m-5">
<h1>Create Appointment</h1>

<form action="{{ route('appointmentsA.store') }}" method="POST">
    @csrf

    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" 
        class="form-control" 
        value="{{ $appointment->name }}" required readonly>
    </div>
  
    <div class="form-group">
        <label for="prenom">prenom</label>
        <input type="text" name="prenom" id="prenom"
        value="{{ $appointment->prenom }}" 
        class="form-control" required readonly>
    </div>

    <div class="form-group">
        <label for="téléphone">téléphone</label>
        <input type="text" name="téléphone" id="téléphone" 
        value="{{ $appointment->téléphone }}" 
        class="form-control" required readonly>
    </div>

    <div class="form-group">
        <label for="cin">National Number</label>
        <input type="text" name="cin" id="cin" class="form-control" 
        value="{{ $appointment->cin }}" 
        required readonly>
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" id="email"
        value="{{ $appointment->email }}" 
         class="form-control" required readonly>
    </div>
 
    <div class="form-group">
        <label for="appointment_day">Appointment Date</label>
        <input type="date" name="appointment_day" id="appointment_day" class="form-control" required    >
    </div>

  

    <div class="form-group">
        <label for="appointment_hour">Appointment Time</label>
        <input type="time" name="appointment_hour" id="appointment_hour" class="form-control" required readonly>
        @php
        $workingHours = array(
            '09:00', '09:30', '10:00', '10:30', '11:00', '11:30', '12:00', '12:30',
            '13:00', '13:30', '14:00', '14:30', '15:00', '15:30', '16:00', '16:30'
        );
        foreach ($workingHours as $hour) {
                        echo '<button  type="button" name="appointment_hour" id="appointment_hour" class="hour btn btn-outline-primary" data-hour="' . $hour . '">' . $hour . '</button>';
                    }


        @endphp
    
    
    </div> 

{{-- 
    <div class="form-group">
        <label for="appointment_hour">Appointment Time</label>
        <div id="appointment_hours">
            @php
                $today = date('Y-m-d');
                $nextFiveDays = date('Y-m-d', strtotime('+5 days'));
                $currentDateTime = strtotime($today);
                $endDateTime = strtotime($nextFiveDays);
    
                while ($currentDateTime <= $endDateTime) {
                    $currentDate = date('Y-m-d', $currentDateTime);
                    $workingHours = getWorkingHoursForDate($currentDate);
    
                    echo '<div class="appointment_day">';
                    // echo '<h3 name="appointment_day" id="appointment_day">' . date('l, F j', $currentDateTime) . '</h3>';
                    echo '<div class="hours" >';
                    foreach ($workingHours as $hour) {
                        echo '<button  type="button" name="appointment_hour" id="appointment_hour" class="hour btn btn-primary" data-hour="' . $hour . '">' . $hour . '</button>';
                    }
                    echo '</div>';
                    echo '</div>';
    
                    $currentDateTime = strtotime('+1 day', $currentDateTime);
                }
    
                function getWorkingHoursForDate($date)
                {
                    
                    $workingHours = array(
                        '09:00', '09:30', '10:00', '10:30', '11:00', '11:30', '12:00', '12:30',
                        '13:00', '13:30', '14:00', '14:30', '15:00', '15:30', '16:00', '16:30'
                    );
    
                    return $workingHours;
                }
            @endphp
        </div>
    </div> --}}

    <button type="submit" class="btn btn-outline-primary">Create</button>

</form>
</div>
@include('footer')
{{-- <script>
    var hours = document.getElementsByClassName('hour');
    for (var i = 0; i < hours.length; i++) {
        hours[i].addEventListener('click', function() {
        
            document.getElementById('appointment_hour').value = this.getAttribute('data-hour');
        });
    }
</script> --}}
{{-- <script>
    var hours = document.getElementsByClassName('hour');
    for (var i = 0; i < hours.length; i++) {
        hours[i].addEventListener('click', function() {
            document.getElementById('appointment_hour').value = this.getAttribute('data-hour');
            this.classList.toggle('selected');
        });
    }
</script> --}}
<script>
    var hours = document.getElementsByClassName('hour');
    for (var i = 0; i < hours.length; i++) {
        hours[i].addEventListener('click', function() {
            var currentSelection = document.querySelector('.selected');
            if (currentSelection) {
                currentSelection.classList.remove('selected');
            }
            this.classList.add('selected');
            document.getElementById('appointment_hour').value = this.getAttribute('data-hour');
        });
    }
</script>

<style>
    .selected {
    background-color: green;
    color: white;
}
</style>
{{-- link bootstrap      --}}
<script src="/bootstrap-5.0.2-dist/js/bootstrap.js"></script>

    </body>
   
</html>
