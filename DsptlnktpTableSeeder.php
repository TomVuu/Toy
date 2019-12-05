<?php
use App\Dsptlnktp;
use Illuminate\Database\Seeder;

class DsptlnktpTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    
    public function run()
    {
        $type = new Dsptlnktp();
        $type->type = "Complaint - Due Process";
        $type->save();


    }
}
