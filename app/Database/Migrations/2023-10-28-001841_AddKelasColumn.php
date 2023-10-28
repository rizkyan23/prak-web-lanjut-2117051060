<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddKelasColumn extends Migration
{
    public function up()
    {
        $this->forge->addColumn('kelas',[
            'angkatan' => [
                'type'          => 'VARCHAR',
                'constraint'    => 10,
                'null'          => true,
            ],
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('kelas', ['angkatan']);
    }
}
