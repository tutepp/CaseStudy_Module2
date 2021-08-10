<?php
require_once "../app/models/SimModel.php";
require_once "../app/models/Sim.php";



class SimController
{
    protected $SimModel;
    protected $CenterModel;
    protected $OrderModel;

    public function __construct()
    {
        $this->SimModel = new SimModel();
//        $this->CenterModel = new CenterModel();
//        $this->OrderModel = new OrderModel();
    }

    public function index()
    {
        //view
        include_once "../app/views/homepage.php";
    }

    public function displayAllSim()
    {
        //model
        $sim = $this->SimModel->getAllSim();
        //view
        include_once "../app/views/SimList.php";
    }

    public function addSim()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            include '../app/views/AddSim.php';
        } else {
            $PhoneNumber = $_POST['PhoneNumber'];
            $Network = $_POST['Network'];
            $Price = $_POST['Price'];
            $Center = $_POST['Center'];
            $Type = $_POST['Type'];
            $sim = new Sim ($PhoneNumber,$Network,$Price,$Center,$Type);
            $this->SimModel->creatDataSim($sim);
            header("location: http://localhost/Module2/Case/run/public/?url=SimController/displayAllSim");
            include '../app/views/AddSim.php';

        }
    }
    public function deleteSim($id)
    {
        $this->SimModel->deleteSim($id);
        $this->displayAllSim();
        header("http://localhost/Module2/Case/public/?url=SimController/displayAllTest");
    }
    public function updateSim($id)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $sim = $this->SimModel->get($id);
            include '../app/views/updateSim.php';
            var_dump($sim);
        } else {
            $sim = new Sim ($_POST['PhoneNumber'], $_POST['Network'], $_POST['Price'], $_POST['Center'], $_POST['Type']);
            $this->SimModel->updateSim($id, $sim);
            header("location: http://localhost/Module2/Case/run/public/?url=SimController/displayAllSim");
        }
    }
    public function searchSim()
    {
        $_SERVER['REQUEST_METHOD']= 'POST';
        $option = $_POST['option'];
        $value = $_POST['value'];
        $sim = $this->SimModel->searchSim($option, $value);
        include '../app/views/searchSim.php';
    }
    public function searchSimTuQuy()
    {
        $sim = $this->SimModel->searchSimTuQuy();
        include '../app/views/searchSimTuQuy.php';
    }
    public function searchSimLocPhat()
    {
        $sim = $this->SimModel->searchSimLocPhat();
        include '../app/views/searchSimTuQuy.php';
    }

    public function displayAllTest()
    {
        //model
        $sim = $this->SimModel->getAllSim();
        //view
        include_once "../app/views/Manager.php";
    }
    public function addSimTest()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            include '../app/views/testForm.php';
        } else {
            $PhoneNumber = $_POST['PhoneNumber'];
            $Network = $_POST['Network'];
            $Price = $_POST['Price'];
            $Center = $_POST['Center'];
            $Type = $_POST['Type'];
            $sim = new Sim ($PhoneNumber,$Network,$Price,$Center,$Type);
            $this->SimModel->creatDataSim($sim);
            header("http://localhost/Module2/Case/public/?url=SimController/displayAllTest");
            include '../app/views/testForm.php';

        }
    }

}
