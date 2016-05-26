<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class DataModel extends CI_Model
{
  public 
  	$pconfig = false;
  	
  public function __construct()
  {
		parent::__construct();
		$languages = array(
			'spanish' => '_es',
			'english' => '_en',
		);
		$this->langdb = $languages[$this->config->item('language')];
  }

  public function LoadProjectConfig()
  {
    if($this->pconfig) return;
    $id = $this->config->item('project-id', 'app') ;
    $db = $this->config->item('db-global', 'app') ;
    if(!$id) return;
    $sql = "select data from {$db}project where id_project = '{$id}'";
    $row = $this->db->query($sql)->row();
    if(!$row || !$row->data) return;
    $this->pconfig = json_decode($row->data);
  }
  
  public function ProjectConfig( $key = '' )
  {
    $ret = '';
    $this->LoadProjectConfig();
    if(!$this->pconfig || !count($this->pconfig)) return $ret;
    foreach($this->pconfig as $item)
    {
      if(isset($item->key) && $item->key == $key)
      {
        $ret = $item->value;
        break;
      }
    }
    return $ret;
  }

  public function Products( $id = 0 )
  {

    $products = array(
          array('id'=>0,'title'=>'Vestido azul', 'price'=>'30.00€', 'sale'=>'20.00€','picture'=>layout('img/photos/home-seleccionado-1.png')),
          array('id'=>0,'title'=>'Vestido verde', 'price'=>'10.00€', 'picture'=>layout('img/photos/home-seleccionado-2.png')),
          array('id'=>0,'title'=>'Vestido gris', 'price'=>'40.00€', 'picture'=>layout('img/photos/home-seleccionado-3.png')),
          array('id'=>0,'title'=>'Vestido azul', 'price'=>'70.00€', 'picture'=>layout('img/photos/home-seleccionado-1.png')),
          array('id'=>0,'title'=>'Vestido azul', 'price'=>'60.00€', 'picture'=>layout('img/photos/home-seleccionado-2.png')),
          array('id'=>0,'title'=>'Vestido azul', 'price'=>'30.00€', 'picture'=>layout('img/photos/home-seleccionado-3.png')),
        );

    return json_decode(json_encode($products), FALSE);;
  }  

  public function lang_link($lang) {
    return 'url/'.$lang;
  }

}