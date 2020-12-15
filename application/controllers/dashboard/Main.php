<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Main extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('main_model');
        if ($this->session->userdata('masuk') != TRUE) {
            $url = base_url();
            // redirect($url);
            echo '<script language="javascript">alert("Anda tidak boleh masuk Panel Administrator, silahkan login terlebih dahulu .."); document.location="' . $url . '";</script>';
        }
    }

    public function index()
    {
        $data = array(
            'data_grafik_01' => $this->main_model->get_grafik_01(),
            'data_grafik_02' => $this->main_model->get_grafik_02(),
            'data_grafik_03' => $this->main_model->get_grafik_03(),
            'data_grafik_04' => $this->main_model->get_grafik_04(),
            'data_grafik_05' => $this->main_model->get_grafik_05(),
            'data_grafik_06' => $this->main_model->get_grafik_06(),
            'data_grafik_07' => $this->main_model->get_grafik_07(),
            'data_grafik_08' => $this->main_model->get_grafik_08(),
            'data_grafik_09' => $this->main_model->get_grafik_09(),
            'data_grafik_10' => $this->main_model->get_grafik_10(),
            'data_grafik_11' => $this->main_model->get_grafik_11(),
            'data_grafik_12' => $this->main_model->get_grafik_12(),
        );
        $row['totalbukutamu'] = $this->main_model->row_bukutamu();
        $this->load->view('dashboard/kelengkapan/header');
        $this->load->view('dashboard/main_dashboard', $row);
        $this->load->view('dashboard/kelengkapan/footer', $data);
        $this->session->unset_userdata('inputNama', '');
        $this->session->unset_userdata('inputEmail', '');
        $this->session->unset_userdata('inputTelp', '');
        $this->session->unset_userdata('inputAlamat', '');
        $this->session->unset_userdata('selectJeniskelamin', '');
        $this->session->unset_userdata('inputJammasuk', '');
        $this->session->unset_userdata('inputKeperluan', '');
    }

    // Awal Buku Tamu
    public function viewbukutamu()
    {
        $data = array(
            'data_grafik_01' => $this->main_model->get_grafik_01(),
            'data_grafik_02' => $this->main_model->get_grafik_02(),
            'data_grafik_03' => $this->main_model->get_grafik_03(),
            'data_grafik_04' => $this->main_model->get_grafik_04(),
            'data_grafik_05' => $this->main_model->get_grafik_05(),
            'data_grafik_06' => $this->main_model->get_grafik_06(),
            'data_grafik_07' => $this->main_model->get_grafik_07(),
            'data_grafik_08' => $this->main_model->get_grafik_08(),
            'data_grafik_09' => $this->main_model->get_grafik_09(),
            'data_grafik_10' => $this->main_model->get_grafik_10(),
            'data_grafik_11' => $this->main_model->get_grafik_11(),
            'data_grafik_12' => $this->main_model->get_grafik_12(),
            'data_bukutamu' => $this->main_model->get_all_bukutamu(),
        );
        $this->load->view('dashboard/kelengkapan/header');
        $this->load->view('dashboard/v_bukutamu', $data);
        $this->load->view('dashboard/kelengkapan/footer', $data);
        $this->session->unset_userdata('inputNama', '');
        $this->session->unset_userdata('inputEmail', '');
        $this->session->unset_userdata('inputTelp', '');
        $this->session->unset_userdata('inputAlamat', '');
        $this->session->unset_userdata('selectJeniskelamin', '');
        $this->session->unset_userdata('inputJammasuk', '');
        $this->session->unset_userdata('inputKeperluan', '');
    }

    public function viewgrafik()
    {
        $data = array(
            'data_grafik_01' => $this->main_model->get_grafik_01(),
            'data_grafik_02' => $this->main_model->get_grafik_02(),
            'data_grafik_03' => $this->main_model->get_grafik_03(),
            'data_grafik_04' => $this->main_model->get_grafik_04(),
            'data_grafik_05' => $this->main_model->get_grafik_05(),
            'data_grafik_06' => $this->main_model->get_grafik_06(),
            'data_grafik_07' => $this->main_model->get_grafik_07(),
            'data_grafik_08' => $this->main_model->get_grafik_08(),
            'data_grafik_09' => $this->main_model->get_grafik_09(),
            'data_grafik_10' => $this->main_model->get_grafik_10(),
            'data_grafik_11' => $this->main_model->get_grafik_11(),
            'data_grafik_12' => $this->main_model->get_grafik_12(),
        );
        $this->load->view('dashboard/kelengkapan/header');
        $this->load->view('dashboard/v_grafik');
        $this->load->view('dashboard/kelengkapan/footer', $data);
        $this->session->unset_userdata('inputNama', '');
        $this->session->unset_userdata('inputEmail', '');
        $this->session->unset_userdata('inputTelp', '');
        $this->session->unset_userdata('inputAlamat', '');
        $this->session->unset_userdata('selectJeniskelamin', '');
        $this->session->unset_userdata('inputJammasuk', '');
        $this->session->unset_userdata('inputKeperluan', '');
    }

    public function addbukutamu()
    {
        $data = array(
            'data_grafik_01' => $this->main_model->get_grafik_01(),
            'data_grafik_02' => $this->main_model->get_grafik_02(),
            'data_grafik_03' => $this->main_model->get_grafik_03(),
            'data_grafik_04' => $this->main_model->get_grafik_04(),
            'data_grafik_05' => $this->main_model->get_grafik_05(),
            'data_grafik_06' => $this->main_model->get_grafik_06(),
            'data_grafik_07' => $this->main_model->get_grafik_07(),
            'data_grafik_08' => $this->main_model->get_grafik_08(),
            'data_grafik_09' => $this->main_model->get_grafik_09(),
            'data_grafik_10' => $this->main_model->get_grafik_10(),
            'data_grafik_11' => $this->main_model->get_grafik_11(),
            'data_grafik_12' => $this->main_model->get_grafik_12(),
        );
        $this->load->view('dashboard/kelengkapan/header');
        $this->load->view('dashboard/add_bukutamu');
        $this->load->view('dashboard/kelengkapan/footer', $data);
    }

    public function savebukutamu()
    {
        $this->form_validation->set_rules('inputNama', 'input Nama Lengkap', 'required');
        $this->form_validation->set_rules('inputEmail', 'input Email', 'valid_email|required');
        $this->form_validation->set_rules('inputTelp', 'input Telepon', 'required');
        $this->form_validation->set_rules('inputAlamat', 'input Telepon', 'required');
        $this->form_validation->set_rules('selectJeniskelamin', 'Pilih Jenis Kelamin', 'required');
        $this->form_validation->set_rules('inputJammasuk', 'input Jam Masuk', 'required');
        $this->form_validation->set_rules('inputKeperluan', 'input Keperluan', 'required');
        $this->form_validation->set_rules('image', 'Image', 'required');

        if ($this->form_validation->run() == FALSE) {
            $inputNama = $this->input->post('inputNama');
            $inputEmail = $this->input->post('inputEmail');
            $inputTelp = $this->input->post('inputTelp');
            $inputAlamat = $this->input->post('inputAlamat');
            $selectJeniskelamin = $this->input->post('selectJeniskelamin');
            $inputJammasuk = $this->input->post('inputJammasuk');
            $inputKeperluan = $this->input->post('inputKeperluan');
            $this->session->set_userdata('inputNama', $inputNama);
            $this->session->set_userdata('inputEmail', $inputEmail);
            $this->session->set_userdata('inputTelp', $inputTelp);
            $this->session->set_userdata('inputAlamat', $inputAlamat);
            $this->session->set_userdata('selectJeniskelamin', $selectJeniskelamin);
            $this->session->set_userdata('inputJammasuk', $inputJammasuk);
            $this->session->set_userdata('inputKeperluan', $inputKeperluan);
            echo json_encode("Data tidak bisa di simpan, terdapat kesalahan !!!");
        } else {
            //get user inputs
            $inputNama = $this->input->post('inputNama');
            $inputEmail = $this->input->post('inputEmail');
            $inputTelp = $this->input->post('inputTelp');
            $inputAlamat = $this->input->post('inputAlamat');
            $selectJeniskelamin = $this->input->post('selectJeniskelamin');
            $inputJammasuk = $this->input->post('inputJammasuk');
            $inputKeperluan = $this->input->post('inputKeperluan');
            $image = $this->input->post('image');
            $image = str_replace('data:image/jpeg;base64,', '', $image);
            $image = base64_decode($image);
            $filename = 'image_' . time() . '.png';
            file_put_contents(FCPATH . '/uploads/' . $filename, $image);
            date_default_timezone_set("Asia/Jakarta");
            $tanggal = date("Y-m-d");

            $cekdata = $this->main_model->select_bukutamu($inputNama, $inputJammasuk, $tanggal);
            if ($cekdata->num_rows() == 0) {
                $bukutamu['nama'] = $inputNama;
                $bukutamu['email'] = $inputEmail;
                $bukutamu['telp'] = $inputTelp;
                $bukutamu['alamat'] = $inputAlamat;
                $bukutamu['jenis_kelamin'] = $selectJeniskelamin;
                $bukutamu['jam_masuk'] = $inputJammasuk . ":00";
                $bukutamu['jam_keluar'] = "00:00:00";
                $bukutamu['tanggal'] = $tanggal;
                $bukutamu['image'] = $filename;
                $bukutamu['keperluan'] = $inputKeperluan;
                $success = $this->main_model->insert_bukutamu($bukutamu);
                if ($success) {
                    $this->session->unset_userdata('inputNama', $inputNama);
                    $this->session->unset_userdata('inputEmail', $inputEmail);
                    $this->session->unset_userdata('inputTelp', $inputTelp);
                    $this->session->unset_userdata('inputAlamat', $inputAlamat);
                    $this->session->unset_userdata('selectJeniskelamin', $selectJeniskelamin);
                    $this->session->unset_userdata('inputJammasuk', $inputJammasuk);
                    $this->session->unset_userdata('inputKeperluan', $inputKeperluan);
                    echo json_encode("Data berhasil disimpan !!!");
                } else {
                    $this->session->set_userdata('inputNama', $inputNama);
                    $this->session->set_userdata('inputEmail', $inputEmail);
                    $this->session->set_userdata('inputTelp', $inputTelp);
                    $this->session->set_userdata('inputAlamat', $inputAlamat);
                    $this->session->set_userdata('selectJeniskelamin', $selectJeniskelamin);
                    $this->session->set_userdata('inputJammasuk', $inputJammasuk);
                    $this->session->set_userdata('inputKeperluan', $inputKeperluan);
                    echo json_encode("Data gagal disimpan, cek lagi data anda !!!");
                }
            } else {
                $this->session->set_userdata('inputNama', $inputNama);
                $this->session->set_userdata('inputEmail', $inputEmail);
                $this->session->set_userdata('inputTelp', $inputTelp);
                $this->session->set_userdata('inputAlamat', $inputAlamat);
                $this->session->set_userdata('selectJeniskelamin', $selectJeniskelamin);
                $this->session->set_userdata('inputJammasuk', $inputJammasuk);
                $this->session->set_userdata('inputKeperluan', $inputKeperluan);
                echo json_encode("Data gagal disimpan, cek lagi data anda kemungkinan data anda sudah ada !!!");
            }
        }
    }

    public function editbukutamu()
    {
        $id_bukutamu = $this->uri->segment(2);
        $data = array(
            'data_bukutamu' => $this->main_model->ubah_bukutamu($id_bukutamu),
            'data_grafik_01' => $this->main_model->get_grafik_01(),
            'data_grafik_02' => $this->main_model->get_grafik_02(),
            'data_grafik_03' => $this->main_model->get_grafik_03(),
            'data_grafik_04' => $this->main_model->get_grafik_04(),
            'data_grafik_05' => $this->main_model->get_grafik_05(),
            'data_grafik_06' => $this->main_model->get_grafik_06(),
            'data_grafik_07' => $this->main_model->get_grafik_07(),
            'data_grafik_08' => $this->main_model->get_grafik_08(),
            'data_grafik_09' => $this->main_model->get_grafik_09(),
            'data_grafik_10' => $this->main_model->get_grafik_10(),
            'data_grafik_11' => $this->main_model->get_grafik_11(),
            'data_grafik_12' => $this->main_model->get_grafik_12(),
        );
        $this->load->view('dashboard/kelengkapan/header');
        $this->load->view('dashboard/edit_bukutamu', $data);
        $this->load->view('dashboard/kelengkapan/footer', $data);
    }

    public function updatebukutamu()
    {
        $this->form_validation->set_rules('inputNama', 'input Nama Lengkap', 'required');
        $this->form_validation->set_rules('inputEmail', 'input Email', 'valid_email|required');
        $this->form_validation->set_rules('inputTelp', 'input Telepon', 'required');
        $this->form_validation->set_rules('inputAlamat', 'input Telepon', 'required');
        $this->form_validation->set_rules('selectJeniskelamin', 'Pilih Jenis Kelamin', 'required');
        $this->form_validation->set_rules('inputJammasuk', 'input Jam Masuk', 'required');
        $this->form_validation->set_rules('inputJamkeluar', 'input Jam keluar', 'required');
        $this->form_validation->set_rules('inputKeperluan', 'input Keperluan', 'required');

        if ($this->form_validation->run() == FALSE) {
            $id = $this->input->post('bukutamu_id');
            echo '<script language="javascript">alert("Data tidak bisa di simpan, terdapat kesalahan !!!"); document.location="editbukutamu/' . $id . '";</script>';
        } else {
            //get user inputs
            $id = $this->input->post('bukutamu_id');
            $inputNama = $this->input->post('inputNama');
            $inputEmail = $this->input->post('inputEmail');
            $inputTelp = $this->input->post('inputTelp');
            $inputAlamat = $this->input->post('inputAlamat');
            $selectJeniskelamin = $this->input->post('selectJeniskelamin');
            $inputJammasuk = $this->input->post('inputJammasuk');
            $inputJamkeluar = $this->input->post('inputJamkeluar');
            $inputKeperluan = $this->input->post('inputKeperluan');
            date_default_timezone_set("Asia/Jakarta");
            $tanggal = date("Y-m-d");

            $cekdata = $this->main_model->select_bukutamu($inputNama, $inputJammasuk, $tanggal);
            if ($cekdata->num_rows() <= 0) {
                $bukutamu['nama'] = $inputNama;
                $bukutamu['email'] = $inputEmail;
                $bukutamu['telp'] = $inputTelp;
                $bukutamu['alamat'] = $inputAlamat;
                $bukutamu['jenis_kelamin'] = $selectJeniskelamin;
                $bukutamu['jam_masuk'] = $inputJammasuk;
                $bukutamu['jam_keluar'] = $inputJamkeluar;
                $bukutamu['tanggal'] = $tanggal;
                $bukutamu['keperluan'] = $inputKeperluan;
                $success = $this->main_model->update_bukutamu($bukutamu, $id);
                if ($success) {
                    echo '<script language="javascript">alert("Data berhasil disimpan !!!"); document.location="databukutamu";</script>';
                } else {
                    echo '<script language="javascript">alert("Data gagal disimpan, cek lagi data anda !!!"); document.location="editbukutamu/' . $id . '";</script>';
                }
            } else {
                echo '<script language="javascript">alert("Data gagal disimpan, cek lagi data anda kemungkinan data anda sudah ada !!!"); document.location="editbukutamu/' . $id . '"</script>';
            }
        }
    }

    public function editjamkeluar()
    {
        $id_bukutamu = $this->uri->segment(2);
        date_default_timezone_set("Asia/Jakarta");
        $waktu = date("H:i:00");
        $bukutamu['jam_keluar'] = $waktu;
        $success = $this->main_model->update_jamkeluar($bukutamu, $id_bukutamu);
        if ($success) {
            echo '<script language="javascript">alert("Jam keluar berhasil di Ubah !!!"); document.location="../databukutamu";</script>';
        } else {
            echo '<script language="javascript">alert("Jam keluar gagal di Ubah !!!"); document.location="../databukutamu";</script>';
        }
    }

    public function deletebukutamu()
    {
        $id_bukutamu = $this->uri->segment(2);
        $this->main_model->hapus_bukutamu($id_bukutamu);
        echo '<script language="javascript">alert("Data Berhasil di hapus !!!"); document.location="../databukutamu";</script>';
    }

    function lihatbukutamu()
    {
        $bulan = $this->input->post('bulan');
        // echo $bulan;
        $cekdata = $this->main_model->get_cek_bulan($bulan);
        if ($cekdata > 0) {
            $data = array(
                'data_bukutamu' => $this->main_model->get_cetak($bulan),
                'data_grafik_01' => $this->main_model->get_grafik_01(),
                'data_grafik_02' => $this->main_model->get_grafik_02(),
                'data_grafik_03' => $this->main_model->get_grafik_03(),
                'data_grafik_04' => $this->main_model->get_grafik_04(),
                'data_grafik_05' => $this->main_model->get_grafik_05(),
                'data_grafik_06' => $this->main_model->get_grafik_06(),
                'data_grafik_07' => $this->main_model->get_grafik_07(),
                'data_grafik_08' => $this->main_model->get_grafik_08(),
                'data_grafik_09' => $this->main_model->get_grafik_09(),
                'data_grafik_10' => $this->main_model->get_grafik_10(),
                'data_grafik_11' => $this->main_model->get_grafik_11(),
                'data_grafik_12' => $this->main_model->get_grafik_12(),
            );
            $this->load->view('dashboard/kelengkapan/header');
            $this->load->view("dashboard/lihatbukutamu", $data);
            $this->load->view('dashboard/kelengkapan/footer', $data);
        } else {
            echo '<script language="javascript">alert("Data yang di cari tidak tersedia"); document.location="databukutamu";</script>';
        }
    }

    function cetakbukutamu()
    {
        $bulan = $this->uri->segment(2);
        // echo $bulan;
        $data = array(
            'data_bukutamu' => $this->main_model->get_cetak($bulan),
        );
        
        $this->load->view("dashboard/cetakbukutamu", $data);
    }

    function cetak()
    {
        // echo $bulan
        $id_bukutamu = $this->uri->segment(2);
        $data = array(
            'data_bukutamu' => $this->main_model->ubah_bukutamu($id_bukutamu),
            'data_grafik_01' => $this->main_model->get_grafik_01(),
            'data_grafik_02' => $this->main_model->get_grafik_02(),
            'data_grafik_03' => $this->main_model->get_grafik_03(),
            'data_grafik_04' => $this->main_model->get_grafik_04(),
            'data_grafik_05' => $this->main_model->get_grafik_05(),
            'data_grafik_06' => $this->main_model->get_grafik_06(),
            'data_grafik_07' => $this->main_model->get_grafik_07(),
            'data_grafik_08' => $this->main_model->get_grafik_08(),
            'data_grafik_09' => $this->main_model->get_grafik_09(),
            'data_grafik_10' => $this->main_model->get_grafik_10(),
            'data_grafik_11' => $this->main_model->get_grafik_11(),
            'data_grafik_12' => $this->main_model->get_grafik_12(),
        );
        
        $this->load->view("dashboard/cetak", $data);
        
    }

    function printPDF()
    {
        $bulan = $this->uri->segment(2);
        $data = array(
            'data_bukutamu' => $this->main_model->get_cetak($bulan),
        );
        $mpdf = new \Mpdf\Mpdf();
        $data = $this->load->view("dashboard/pdf", $data, TRUE);

        $mpdf->WriteHTML($data);
        $mpdf->Output();
    }

    function exportbukutamu()
    {
        $bulan = $this->uri->segment(2);
        // echo $bulan;
        $data = array(
            'data_bukutamu' => $this->main_model->get_cetak($bulan),
        );
        $this->load->view("dashboard/exportbukutamu", $data);
    }
    // akhir Buku Tamu
}
