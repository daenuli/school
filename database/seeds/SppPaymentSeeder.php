<?php

use Illuminate\Database\Seeder;
use App\Models\Student;
use App\Models\SppPayment;
use App\User;
use Faker\Factory as Faker;
use Carbon\Carbon;

class SppPaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SppPayment::truncate();
        $faker = Faker::create('id_ID');

        $student = Student::all();
        $user = User::pluck('id');

        foreach ($student as $key => $v) {
            for ($i=1; $i <= rand(4, 12); $i++) {
                $amount = $v->spp->total / 4;
                $loop = rand(0, 1) ? 4 : rand(1, 3);
                for ($j=1; $j <= $loop; $j++) {
                    $digit = (strlen($i))?"0".$i:$i;
                    $tgl = date('Y').'-'.$digit.'-'.date('d');
                    $data[] = [
                        'student_id' => $v->id,
                        'total' => $amount,
                        'pay_month' => $tgl,
                        'user_id' => $faker->randomElement($user),
                        'created_at' => $tgl
                    ];
                }
            }
        }
        SppPayment::insert($data);
    }
}
