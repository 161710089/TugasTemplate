<?php

use Illuminate\Database\Seeder;

class DataTabel extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $a=[
['NIS'=>'12','nama'=>'asep','tempat_lahir'=>'bandung','tanggal_lahir'=>'1995-11-09','alamat'=>'leuwidulang','citacita'=>'pilot','hobi'=>'main catur','gambar'=>'asep.jpg',],
['NIS'=>'13','nama'=>'udin','tempat_lahir'=>'bandung','tanggal_lahir'=>'1994-12-01','alamat'=>'leuwidulang','citacita'=>'masinis','hobi'=>'main bola','gambar'=>'udin.jpg',],
['NIS'=>'14','nama'=>'neng','tempat_lahir'=>'bandung','tanggal_lahir'=>'1991-01-01','alamat'=>'leuwidulang','citacita'=>'pilot','hobi'=>'main voli','gambar'=>'neng.jpg',]

        ];

        DB::table('Data_tabels')->insert($a);
            }
}
