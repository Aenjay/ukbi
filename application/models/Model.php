<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model extends CI_Model
{

    function CheckAllowAccess($kode_menu='', $access='')
    {
        $this->db->select('this.users_level_id');
        $this->db->from('users_access this');
        $this->db->join('users_menu um', 'um.id = this.users_menu_id', 'left');
        $this->db->where('this.users_level_id', $this->model->GetSes("level"));
        $this->db->where('um.kode_menu', $kode_menu);
        $this->db->where('this.access', $access);
        $this->db->where('this.is_deleted', 0);
        $this->db->where('um.is_deleted', 0);
        $data = $this->db->get();
        if ($data->num_rows() > 0) {
            return true;
        }else{
            return false;
        }
    }

    function CheckAllowAccessShow($kode_menu='')
    {
        $this->db->select('this.users_level_id');
        $this->db->from('users_access this');
        $this->db->join('users_menu um', 'um.id = this.users_menu_id', 'left');
        $this->db->where('this.users_level_id', $this->model->GetSes("level"));
        $this->db->where('um.kode_menu', $kode_menu);
        $this->db->where('this.access', "show");
        $this->db->where('this.is_deleted', 0);
        $this->db->where('um.is_deleted', 0);
        $data = $this->db->get();
        if ($data->num_rows() > 0) {
            return true;
        }else{
            redirect('dashboard');
        }
    }

    function listPermissions()
    {
        return array(
            'create','list','detail','edit','delete'
        );
    }

    function listDayOfWeek()
    {
        return array(
            'Sunday', 'Monday', 'TuesDay', 'Wednesday', 'Thursday', 'Friday', 'Saturday'
        );
    }

    function GetListDate($startDate, $endDate)
    {
        $this->db->query("
        SELECT * FROM 
        (SELECT ADDDATE('1970-01-01',t4.i*10000 + t3.i*1000 + t2.i*100 + t1.i*10 + t0.i) selected_date FROM
         (SELECT 0 i UNION SELECT 1 UNION SELECT 2 UNION SELECT 3 UNION SELECT 4 UNION SELECT 5 UNION SELECT 6 UNION SELECT 7 UNION SELECT 8 UNION SELECT 9) t0,
         (SELECT 0 i UNION SELECT 1 UNION SELECT 2 UNION SELECT 3 UNION SELECT 4 UNION SELECT 5 UNION SELECT 6 UNION SELECT 7 UNION SELECT 8 UNION SELECT 9) t1,
         (SELECT 0 i UNION SELECT 1 UNION SELECT 2 UNION SELECT 3 UNION SELECT 4 UNION SELECT 5 UNION SELECT 6 UNION SELECT 7 UNION SELECT 8 UNION SELECT 9) t2,
         (SELECT 0 i UNION SELECT 1 UNION SELECT 2 UNION SELECT 3 UNION SELECT 4 UNION SELECT 5 UNION SELECT 6 UNION SELECT 7 UNION SELECT 8 UNION SELECT 9) t3,
         (SELECT 0 i UNION SELECT 1 UNION SELECT 2 UNION SELECT 3 UNION SELECT 4 UNION SELECT 5 UNION SELECT 6 UNION SELECT 7 UNION SELECT 8 UNION SELECT 9) t4) v
        WHERE selected_date BETWEEN '$startDate' AND '$endDate'
        ")->result();
    }

    function GetListDateLeave($startDate, $endDate)
    {
        return $this->db->query("
        SELECT * FROM 
        (SELECT ADDDATE('1970-01-01',t4.i*10000 + t3.i*1000 + t2.i*100 + t1.i*10 + t0.i) selected_date FROM
         (SELECT 0 i UNION SELECT 1 UNION SELECT 2 UNION SELECT 3 UNION SELECT 4 UNION SELECT 5 UNION SELECT 6 UNION SELECT 7 UNION SELECT 8 UNION SELECT 9) t0,
         (SELECT 0 i UNION SELECT 1 UNION SELECT 2 UNION SELECT 3 UNION SELECT 4 UNION SELECT 5 UNION SELECT 6 UNION SELECT 7 UNION SELECT 8 UNION SELECT 9) t1,
         (SELECT 0 i UNION SELECT 1 UNION SELECT 2 UNION SELECT 3 UNION SELECT 4 UNION SELECT 5 UNION SELECT 6 UNION SELECT 7 UNION SELECT 8 UNION SELECT 9) t2,
         (SELECT 0 i UNION SELECT 1 UNION SELECT 2 UNION SELECT 3 UNION SELECT 4 UNION SELECT 5 UNION SELECT 6 UNION SELECT 7 UNION SELECT 8 UNION SELECT 9) t3,
         (SELECT 0 i UNION SELECT 1 UNION SELECT 2 UNION SELECT 3 UNION SELECT 4 UNION SELECT 5 UNION SELECT 6 UNION SELECT 7 UNION SELECT 8 UNION SELECT 9) t4) v
        WHERE 
        selected_date BETWEEN '$startDate' 
        AND '$endDate' 
        AND DAYOFWEEK(DATE(selected_date)) NOT IN (
            SELECT (holDay + 1) from ref_public_holiday where system = '".version_backend."' and companyId = '".$this->model->GetSes('companyId')."'
        )
        AND selected_date NOT IN (
            SELECT holDate from ref_holiday where system = '".version_backend."' and companyId = '".$this->model->GetSes('companyId')."'
        )
        ");
    }

    public function GetSelect($select, $table, $where = '')
    {
        $this->db->select($select);
        $this->db->from($table);
        if ($where != null) {
            $this->db->where($where);
        }
        return $this->db->get();
    }

    function BaseFieldBy()
    {
        if ($this->GetSes('id') == null) {
            return null;
        } else {
            return $this->GetSes('id');
        }
    }

    public function where($field = '', $value = '')
    {
        if ($value != null) {
            return $this->db->where($field, $value);
        }
    }

    public function like($field, $value)
    {
        if ($value != null) {
            return $this->db->like($field, $value);
        }
    }

    public function post_fk($value = '')
    {

        if ($value == null) {
            return null;
        } else {
            return $value;
        }
    }

    public function IsDelete($table, $where)
    {
        $data = array(
            'is_deleted' => 1,
            'deleted_by' => $this->BaseFieldBy(),
            'deleted_date' => $this->model->DateTime(),
        );
        return $this->db->update($table, $data, $where);
    }

    function CreateLog($module, $description)
    {
        date_default_timezone_set('Asia/Jakarta');
        $date = date('Y-m-d H:i:s');
        $module = $this->select_data($module);
        $description = $this->select_data($description);
        $user_id = $this->model->GetSes("id");
        $level_id = $this->model->GetSes("level");
        $data_insert = array(
            'users_id' => $user_id,
            'users_level_id' => $level_id,
            'created_date' => $date,
            'module' => $module,
            'description' => $description,
        );
        $this->db->insert('users_log', $data_insert);
    }

    public function CreateCaptcha()
    {
        $this->load->library('antispam');
        $vals = array(
            'img_path' => './captcha/',
            'img_url' => base_url() . 'captcha/',
            // 'font_path' => './font/timesbd.ttf',
            'img_width' => '150',
            'img_height' => 30,
            'expiration' => 100
        );
        $cap = $this->antispam->get_antispam_image($vals);
        if ($this->session->userdata("captchaTime") != null) {
            if (file_exists('./captcha/' . $this->session->userdata('captchaTime') . ".jpg") == 1) {
                unlink("./captcha/" . $this->session->userdata("captchaTime") . ".jpg");
            }
        }
        $expiration = time() - 100;
        $this->db->delete('captcha', "time = '" . $this->session->userdata("captchaTime") . "'");
        $this->session->unset_userdata('captchaCode');
        $this->session->unset_userdata('captchaTime');
        $this->session->set_userdata('captchaCode', $cap['word']);
        $this->session->set_userdata('captchaTime', $cap['time']);
        $this->db->insert('captcha', array('time' => $cap['time'], 'word' => $cap['word']));
        return $cap['image'];
    }

    public function penyebut($nilai = '')
    {
        $nilai = abs($nilai);
        $huruf = array("", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas");
        $temp = "";
        if ($nilai < 12) {
            $temp = " " . $huruf[$nilai];
        } else if ($nilai < 20) {
            $temp = $this->penyebut($nilai - 10) . " belas";
        } else if ($nilai < 100) {
            $temp = $this->penyebut($nilai / 10) . " puluh" . $this->penyebut($nilai % 10);
        } else if ($nilai < 200) {
            $temp = " seratus" . $this->penyebut($nilai - 100);
        } else if ($nilai < 1000) {
            $temp = $this->penyebut($nilai / 100) . " ratus" . $this->penyebut($nilai % 100);
        } else if ($nilai < 2000) {
            $temp = " seribu" . $this->penyebut($nilai - 1000);
        } else if ($nilai < 1000000) {
            $temp = $this->penyebut($nilai / 1000) . " ribu" . $this->penyebut($nilai % 1000);
        } else if ($nilai < 1000000000) {
            $temp = $this->penyebut($nilai / 1000000) . " juta" . $this->penyebut($nilai % 1000000);
        } else if ($nilai < 1000000000000) {
            $temp = $this->penyebut($nilai / 1000000000) . " milyar" . $this->penyebut(fmod($nilai, 1000000000));
        } else if ($nilai < 1000000000000000) {
            $temp = $this->penyebut($nilai / 1000000000000) . " trilyun" . $this->penyebut(fmod($nilai, 1000000000000));
        }
        return $temp;
    }

    public function terbilang($nilai)
    {
        if ($nilai < 0) {
            $hasil = "minus " . trim($this->penyebut($nilai));
        } else {
            $hasil = trim($this->penyebut($nilai));
        }
        return $hasil;
    }

    public function GenerateString($length)
    {
        $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        return substr(str_shuffle($chars), 0, $length);
    }

    public function GenerateKodeStrip()
    {
        $chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        $string = substr(str_shuffle($chars), 0, 12);
        $string1 = substr($string, 0, 4) . "-";
        $string2 = substr($string, 4, 4) . "-";
        $string3 = substr($string, 8, 4);
        return $string1 . $string2 . $string3;
    }

    public function substrwords($text, $maxchar, $end = '...')
    {
        if (strlen($text) > $maxchar || $text == '') {
            $words = preg_split('/\s/', $text);
            $output = '';
            $i      = 0;
            while (1) {
                $length = strlen($output) + strlen($words[$i]);
                if ($length > $maxchar) {
                    break;
                } else {
                    $output .= " " . $words[$i];
                    ++$i;
                }
            }
            $output .= $end;
        } else {
            $output = $text;
        }
        return $output;
    }

    public function getkodeunik($table, $atribut, $initial, $jumlah_0)
    {
        $q = $this->db->query("SELECT MAX(RIGHT($atribut, $jumlah_0)) AS idmax FROM v_kode where m = '$table'");
        if ($q->num_rows() > 0) {
            foreach ($q->result() as $k) {
                $kode = ((int) $k->idmax) + 1;
            }
        } else {
            $kode = "1";
        }
        $bikin_kode = str_pad($kode, $jumlah_0, "0", STR_PAD_LEFT);
        $kode_jadi = "$initial$bikin_kode";
        return $kode_jadi;
    }

    function GetNoPendaftaran($jenis_peserta_id, $tujuan_tes_id, $jadwal_ujian_id)
    {
        date_default_timezone_set('Asia/Jakarta');
        $jenis_peserta = $this->model->GetSelect("kode", "ref_jenis_peserta", "id = '$jenis_peserta_id'")->row()->kode;
        $tujuan_tes = $this->model->GetSelect("kode", "ref_tujuan_tes", "id = '$tujuan_tes_id'")->row()->kode;
        $tanggal_ujian = $this->model->GetSelect("tanggal", "jadwal_ujian", "id = '$jadwal_ujian_id'")->row()->tanggal;
        $tanggal = str_replace('-', '', $tanggal_ujian);
        $q = $this->db->query("SELECT MAX(RIGHT(nopendaftaran, 4)) AS idmax FROM peserta where nopendaftaran LIKE '%$tanggal%' and jenis_peserta_id = '$jenis_peserta_id' and tujuan_tes_id = '$tujuan_tes_id' and jadwal_ujian_id = '$jadwal_ujian_id'");
        if($q->num_rows()>0){
            foreach($q->result() as $k){
                $kode = ((int)$k->idmax)+1;
            }
        }else{
            $kode = "1";
        }
        $bikin_kode = str_pad($kode, 4, "0", STR_PAD_LEFT);
        $kode_jadi = "$jenis_peserta-$tujuan_tes-$tanggal-$bikin_kode";
        return $kode_jadi;
    }

    function getkodeuniktransaksi($table, $atribut, $initial, $jumlah_0, $tgl)
    {
        date_default_timezone_set('Asia/Jakarta');
        $tanggal = str_replace('-', '', $tgl);
        $q = $this->db->query("SELECT MAX(RIGHT($atribut, $jumlah_0)) AS idmax FROM v_kode where $atribut LIKE '%$tanggal%' and m = '$table'");
        if ($q->num_rows() > 0) {
            foreach ($q->result() as $k) {
                $kode = ((int) $k->idmax) + 1;
            }
        } else {
            $kode = "1";
        }
        $bikin_kode = str_pad($kode, $jumlah_0, "0", STR_PAD_LEFT);
        $kode_jadi = "$initial$tanggal$bikin_kode";
        return $kode_jadi;
    }

    public function Date()
    {
        date_default_timezone_set('Asia/Jakarta');
        return $tanggal = date('Y-m-d');
    }

    public function DateTime()
    {
        date_default_timezone_set('Asia/Jakarta');
        return $tanggal = date("Y-m-d H:i:s");
    }

    public function ConvertNol($value = '')
    {
        if ($value == 0) {
            $value = "";
        }
        return $value;
    }

    public function ConvertNull($value = '')
    {
        if ($value == 0 or $value == "0000-00-00" or $value == "0000-00-00 00:00:00") {
            $value = "";
        }
        return $value;
    }

    public function NullTanggal($value = '')
    {
        if ($value == "0000-00-00") {
            $value = "";
        }
        return $value;
    }

    function GetMenu($kode_menu)
    {
        $this->db->select('*');
        $this->db->from('users_menu');
        $this->db->where('kode_menu', $kode_menu);
        return $this->db->get()->row();
    }

    public function CheckAuthorize()
    {
        if (empty($this->GetSes('key')) or empty($this->GetSes('id')) or empty($this->GetSes('level'))) {
            if ($this->input->get_request_header("auth_key")) {
                http_response_code(401);
                echo json_encode(array('error' => 401, 'message'=> "You don't have an auth key"));
                exit();
            }else{
                redirect('login');
            }
        }else{
            // $id = $this->GetSes("id");
            // $level_name = $this->GetSes("level_name");
            // if ($level_name == "Guru Pendidik" or $level_name == "Pegawai Kependidikan") {
            //     $check_pegawai = $this->model->GetSelect("id", "pegawai", "is_deleted = '0' and id = '$id'");   
            //     if ($check_pegawai->num_rows() == 0) {
            //         if ($this->input->get_request_header("auth_key")) {
            //             http_response_code(401);
            //             echo json_encode(array('error' => 401, 'message'=> "You don't have an auth key"));
            //             exit();
            //         }else{
            //             redirect('login');
            //         }
            //     }
            // }else if ($this->GetSes("level_name") == "Siswa") {
            //     $this->db->select('kg.id');
            //     $this->db->from('kelas_group kg');
            //     $this->db->join('siswa s', 's.id = kg.siswa_id', 'left');
            //     $this->db->join('kelas k', 'k.id = kg.kelas_id', 'left');
            //     $this->db->join('tingkat t', 't.id = k.tingkat_id', 'left');
            //     $this->db->where('s.is_deleted', 0);
            //     $this->db->where('k.is_deleted', 0);
            //     $this->db->where('t.is_deleted', 0);
            //     $this->db->where('kg.id', $this->GetSes("kelas_group_id"));
            //     $check_siswa = $this->db->get();
            //     if ($check_siswa->num_rows() == 0) {
            //         if ($this->input->get_request_header("auth_key")) {
            //             http_response_code(401);
            //             echo json_encode(array('error' => 401, 'message'=> "You don't have an auth key"));
            //             exit();
            //         }else{
            //             redirect('login');
            //         }
            //     }
            // }else{
            //     $check_users = $this->model->GetSelect("id", "users", "id = '$id' and is_deleted = '0' and status = 'Aktif'");
            //     if ($check_users->num_rows() == 0) {
            //         if ($this->input->get_request_header("auth_key")) {
            //             http_response_code(401);
            //             echo json_encode(array('error' => 401, 'message'=> "You don't have an auth key"));
            //             exit();
            //         }else{
            //             redirect('login');
            //         }
            //     }
            // }
        }
    }

    public function Auth($id)
    {
        if ($this->model->GetSes("is_user") == 1) {
            $this->db->select('this.*, r.name as role_name, rd.name as department_name, rjt.name as job_title_name');
            $this->db->from('rbac_user this');
            $this->db->join('roles r', 'r.id = this.userType', 'left');
            $this->db->join('ref_department rd', 'rd.id = this.departmentId', 'left');
            $this->db->join('ref_job_title rjt', 'rjt.id = this.positionId', 'left');
            $this->db->where('this.id', input($id));
            $this->db->where('this.system', version_backend);
            $data = $this->db->get()->row();
        }else{
            $this->db->select('this.*, r.name as role_name, rd.name as department_name, jt.name as job_title_name, rc.description as country_name, rr.name as religion_name');
            $this->db->from('employee_master this');
            $this->db->join('ref_department rd', 'rd.id = this.department', 'left');
            $this->db->join('ref_job_title jt', 'jt.id = this.jobTitle', 'left');
            $this->db->join('roles r', 'r.id = this.roleId', 'left');
            $this->db->join('ref_country rc', 'rc.countryCode = this.countryCode', 'left');
            $this->db->join('ref_religions rr', 'rr.id = this.religion', 'left');
            $this->db->where('this.id', input($id));
            $this->db->where('this.system', version_backend);
            $data = $this->db->get()->row();
        }
        return $data;
    }

    public function GetMenuRole($rel='')
    {
        $this->db->select('um.*, ua.access');
        $this->db->from('users_access ua');
        $this->db->join('users_menu um', 'um.id = ua.users_menu_id', 'left');
        $this->db->where('ua.users_level_id', $this->GetSes("level"));
        $this->model->where("um.rel", $rel);
        if (empty($rel)) {
            $this->db->where('um.rel', 0);
        }
        $this->db->where('um.is_deleted', 0);
        $this->db->where('ua.access', 'show');
        $this->db->order_by('um.sequence', 'asc');
        return $data = $this->db->get();
    }

    public function check_is_ajax()
    {
        if (!$this->input->is_ajax_request()) {
            show_404();
        }
    }

    public function check_is_submit($atribut)
    {
        if (!isset($_POST[$atribut])) {
            redirect('dashboard');
        }
    }

    public function input_data($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        return $data;
    }

    public function select_data($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    public function post($atribut)
    {
        $value = addslashes($this->input_data($this->input->post($atribut)));
        return ($value != '') ? $value : null;
    }

    public function get($atribut)
    {
        return addslashes($this->input_data($this->input->get($atribut)));
    }

    public function change_null($d)
    {
        if (is_array($d)) {
            foreach ($d as $k => $v) {
                $d[$k] = $this->change_null($v);
            }
        } else if (is_string($d)) {
            return utf8_encode($d);
        }
        return $d;
    }

    // function ConvertRp($angka){
    //     $result = number_format($angka,0,'.',',');
    //     return $result;
    // }
    // 
    function ConvertStatusApproval($status, $badge=false){
        if ($status == "W") {
            return ($badge == true) ? '<span class="badge bg-primary">Waiting</span>' : 'Waiting';
        }else if ($status == "P") {
            return ($badge == true) ? '<span class="badge bg-info">Pending</span>' : 'Pending';
        }else if ($status == "A") {
            return ($badge == true) ? '<span class="badge bg-success">Approved</span>' : 'Approved';
        }else{
            return ($badge == true) ? '<span class="badge bg-danger">Reject</span>' : 'Reject';
        }
    }

    function ConvertReportType($status, $badge=false){
        if ($status == "W") {
            return ($badge == true) ? '<span class="badge bg-primary">Waiting</span>' : 'Weekly';
        }else if ($status == "D") {
            return ($badge == true) ? '<span class="badge bg-info">Daily</span>' : 'Daily';
        }else if ($status == "M") {
            return ($badge == true) ? '<span class="badge bg-success">Approved</span>' : 'Monthly';
        }
    }

    function ConvertRp($angka)
    {
        return strrev(implode(',', str_split(strrev(strval($angka)), 3)));
    }

    function GetBulanIndo()
    {
        $result = array(
            "01" => "Januari",
            "02" => "Februari",
            "03" => "Maret",
            "04" => "April",
            "05" => "Mei",
            "06" => "Juni",
            "07" => "Juli",
            "08" => "Agustus",
            "09" => "September",
            "10" => "Oktober",
            "11" => "November",
            "12" => "Desember"
        );
        return $result;
    }

    public function GetSes($session)
    {
        return $this->session->userdata("ukbi_auth_" . $session);
    }

    function GlobalTahunAjaran()
    {
        $this->db->select('id, nama_tahun_ajaran');
        $this->db->from('tahun_ajaran');
        $this->db->where('is_active', 1);
        $this->db->where('is_deleted', 0);
        return $this->db->get();
    }

    function LokalTahunAjaran()
    {
        $this->db->select('this.id, nama_sekolah, tahun_ajaran_id_active');
        $this->db->from('sekolah this');
        $this->db->join('tahun_ajaran t', 't.id = this.tahun_ajaran_id_active', 'left');
        $this->db->where('this.id', $this->GetSes("manage_sekolah_id"));
        return $this->db->get();
    }

    public function GetKeteranganNilai($nilai, $kkm)
    {
        if ($nilai > 100) {
            $keterangan = "Amat Baik";
        } elseif ($nilai >= 90) {
            $keterangan = "Amat Baik";
        } elseif ($nilai > $kkm and $nilai < 90) {
            $keterangan = "Baik";
        } elseif ($nilai == $kkm) {
            $keterangan = "Cukup";
        } else {
            $keterangan = 'Kurang Baik';
        }
        return $keterangan;
    }

    public function GetKeteranganNilaiKetuntasan($nilai, $kkm)
    {
        if ($nilai >= $kkm) {
            $ketuntasan = "Ya";
        } else {
            $ketuntasan = 'Tidak';
        }
        return $ketuntasan;
    }

    public function GetKeteranganNilaiWarna($nilai, $kkm)
    {
        $warna = "";
        if ($nilai > 100) {
            $warna = "#c4ffe6";
        } elseif ($nilai >= 90) {
            $warna = "#c4ffe6";
        } elseif ($nilai > $kkm and $nilai < 90) {
            $warna = "#cbecff";
        } elseif ($nilai == $kkm) {
            $warna = "#efe2a6";
        } else {
            $warna = "#ffdbdb";
        }
        return $warna;
    }

    function GetTuntas($nilai=0, $kkm) {
        if ($nilai < $kkm) {
            return "Tidak Tuntas";
        }else{
            return "Tuntas";
        }
    }

    function GetTuntasWarna($nilai=0, $kkm) {
        if ($nilai < $kkm) {
            return "<span style='color:red'>Tidak Tuntas</span>";
        }else{
            return "<span style='color:green'>Tuntas</span>";
        }
    }

    function GetTuntasBackground($nilai=0, $kkm) {
        if ($nilai < $kkm) {
            return "#ffdbdb";
        }else{
            return "#c4ffe6";
        }
    }

    function GetNilaiWarna($nilai=0, $kkm) {
        if ($nilai < $kkm) {
            return "<span style='color:red'>$nilai</span>";
        }else{
            return "<span style='color:green'>$nilai</span>";
        }
    }
}
/* End of file Model.php */
/* Location: ./application/models/Model.php */