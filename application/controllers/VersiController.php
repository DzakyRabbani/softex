<?php
defined('BASEPATH') or exit('No direct script access allowed');

class VersiController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Versi');
        if (@$_SESSION['login'] == false) {
            redirect('logout', 'refresh');
        }
    }

    public function index()
    {
        if (@$_SESSION['login'] == true) {

            $data['title']  = "Versi";

            $data['versi'] = $this->M_Versi->getTable()->result();
            $this->load->view('template/navbar', $data);
            $this->load->view('template/sidebar');
            $this->load->view('template/header', $data);
            $this->load->view('pages/versi/index', $data);
            $this->load->view('template/footer');
        } else {
            $this->load->view('login/index');
        }
    }

    public function view($id)
    {
        $data['edit']      = true;
        $data['data']      = $this->M_Versi->getTableWhere($id)->row_array();
        $data['title']     = "Versi";
        $data['pagetitle'] = "Versi";
        $this->load->view('template/navbar');
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/header', $data);
        $this->load->view("pages/versi/create", $data);
        $this->load->view('template/footer');
    }

    public function create()
    {
        $data['edit']      = false;
        $data['title']     = "Versi";
        $data['pagetitle'] = "Versi";
        $this->load->view('template/navbar');
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/header', $data);
        $this->load->view("pages/versi/create", $data);
        $this->load->view('template/footer');
    }

    public function datatables()
    {
        @$search     = $_POST['search']['value'];
        @$limit      = $_POST['length'];

        @$start = $_POST['start'];
        @$order_index = $_POST['order'][0]['column'];
        @$order_field = $_POST['columns'][$order_index]['data'];
        @$order_ascdesc = $_POST['order'][0]['dir'];

        $sql_total  = $this->M_Versi->count_all();
        $sql_filter = $this->M_Versi->count_filter($search);
        $sql_data   = $this->M_Versi->filter($search, $limit, $start, $order_field, $order_ascdesc);
        @$draw = $_POST['draw'];
        if ($draw == null) {
            $draw = 0;
        }
        $callback = [
            'draw' => $draw,
            'recordsTotal' => $sql_total,
            'recordsFiltered' => $sql_filter,
            'data' => $sql_data
        ];
        header('Content-Type: application/json');
        echo json_encode($callback);
    }

    public function delete($id)
    {
        $response = [];
        $cek = $this->M_Versi->deleteTable($id);
        if ($cek) {
            $response = ['stat' => true];
        } else {
            $response = ['stat' => false];
        }

        echo json_encode($response);
    }

    public function update($id)
    {
        $cek = $this->M_Versi->updateTable($id);
        if ($cek) {
            $response = ['stat' => true];
        } else {
            $response = ['stat' => false];
        }
        echo json_encode($response);
    }

    public function insert()
    {
        $cek = $this->M_Versi->insertTable();
        if ($cek) {
            $response = ['stat' => true];
        } else {
            $response = ['stat' => false];
        }
        echo json_encode($response);
    }
}

/* End of file VersiController.php */
/* Location: ./application/controllers/VersiController.php */
