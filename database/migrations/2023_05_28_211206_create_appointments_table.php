<?php





use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppointmentsTable extends Migration
{
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();  
            $table->string('name');
            $table->string('téléphone');
            $table->string('prenom');
            $table->string('cin');
            $table->string('email');
            $table->date('appointment_day');
            $table->time('appointment_hour');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('appointments');
    }
}
