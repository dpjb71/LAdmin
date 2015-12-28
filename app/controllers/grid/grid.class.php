<?php
namespace Detroit\Controllers;

class Grid extends \Phoenix\MVC\TPartialController {

    protected $stmt = NULL;
    protected $cmd = NULL;
    protected $cols = array();
    protected $dataGrid = NULL;
    protected $cn = NULL;
    protected $pager = NULL;
    protected $onclick = NULL;
    protected $anchor = NULL;
    protected $pageCount = 0;
    protected $index = 1;

    public function setPageCount($value) {
        $this->pageCount = $value;
    }

    public function setAnchor($value) {
        $this->anchor = $value;
    }
    
    public function setOnclick($value) {
        $this->onclick = $value;
    }
    
    public function init() {
//        \Phoenix\Log\TLog::debug('Je passe par la !');
        $this->index = $this->request->getQueryArguments('pagenum');
        $this->pageCount = ($this->pageCount) ? $this->pageCount :  $this->request->getQueryArguments('pagecount');

        $this->cmd = $this->model->getSchema('amarokdb');
    }

    public function getData() {
        $id = $this->getViewName();
        $this->data = \Phoenix\Data\UI\TDataGrid::getGridData($id, $this->cmd, $this->pageCount);
        $this->response->setData('grid', $this->data);
    }
    
}
