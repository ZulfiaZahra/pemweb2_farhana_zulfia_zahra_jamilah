<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Migration_Mahasiswa extends CI_Migration {
    public function up() {
        $this->dbforge->add_field(array(
            'nidn' => array(
                'type' => 'VARCHAR',
                'constraint' => 10,
//                'unsigned' => TRUE,
//                'auto_increment' => TRUE
            ),
			'nama' => array(
				'type' => 'VARCHAR',
				'constraint' => '45'
			),
			'gender' => array(
                'type' => 'CHAR',
                'constraint' => '1',
            ),
			'tgl_lahir' => array(
				'type' => 'DATE',
			),
			'tmp_lahir' => array(
				'type' => 'VARCHAR',
				'constraint' => '30'
			),
			'ipk' => array(
				'type' => 'DOUBLE'
			),
			'prodi_kode' => array(
				'type' => 'VARCHAR',
				'constraint' => '2'
			)
        ));
        $this->dbforge->add_key('nidn', TRUE);
        $this->dbforge->create_table('mahasiswa');
		$this->db->query('ALTER TABLE `mahasiswa` ADD FOREIGN KEY(`prodi_kode`) REFERENCES `prodi`(`kode`);');
    }
    public function down() {
        $this->dbforge->drop_table('mahasiswa');
    }
}
