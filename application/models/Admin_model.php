<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

	public function register_insert_model($arrdata)
	{
		return $this->db->insert('admin',$arrdata);
	}
	public function loan_category_insert($arrdata)
	{
		return $this->db->insert('loan_category',$arrdata);
	}
	public function loan_insert_model($arrdata)
	{
		return $this->db->insert('loan',$arrdata);
	}
	public function login_check_model($arrdata)
	{
		$this->db->where($arrdata);
		return $this->db->count_all_results('admin');
	}
	// public function loan_fetch_model()
	// {

	// 	$this->db->select('*');
	// 	$this->db->from('loan');
		
	// 	return $this->db->get()->result();
	// }
	public function Admin_fetch_model()
	{
		$email=$this->session->userdata('Admin_email');
		$this->db->select('*');
		$this->db->from('admin');
		$this->db->where('Admin_Email',$email);
		return $this->db->get()->result();
	}
	public function loan_fetch_model()
	{

		$this->db->select('*');
		$this->db->from('loan');
		
		return $this->db->get()->result();
	}
	public function loan_category_fetch_model()
	{
		$this->db->select('*');
		$this->db->from('loan_category');
		
		return $this->db->get()->result();
	}
	public function admin_update_model($arrdata)
	{
	    $email=$this->session->userdata('Admin_email');
	    $this->db->where('Admin_Email',$email);
		return $this->db->update('admin',$arrdata);
	}
	public function verify_user_request_model()
	{
		$this->db->select('*');
		$this->db->from('loan_application');
		$this->db->join('loan_category','loan_category.lc_category_id=loan_application.category_id');
		$this->db->where('Loan_status','Pending');
		return $this->db->get()->result();
	}
	public function user_details_model()
	{
		$this->db->select('*');
		$this->db->from('user');
		return $this->db->get()->result();
	}

	public function user_loan_request_model($loan_id,$update)
	{
		$this->db->where('loan_id',$loan_id);
		return $this->db->update('loan_application',$update);
	}

public function user_request_model()
{
	$this->db->select('*');
		$this->db->from('loan_application');
		$this->db->join('loan_category','loan_category.lc_category_id=loan_application.category_id');
		return $this->db->get()->result();
}

public function upload_documents_model()
{
	$this->db->select('*');
		$this->db->from('upload_document');
		$this->db->join('loan_application','loan_application.loan_id=upload_document.loan_id');
			$this->db->join('loan_category','loan_category.lc_category_id=loan_application.category_id');
		 $this->db->join('user','upload_document.user_id=user.User_id');
		 $this->db->where('upload_document.document_status','Pending');

		return $this->db->get()->result();
}

public function user_loan_document_model($loan_id,$update)
{
	 $this->db->where('loan_id',$loan_id);
	return $this->db->update('upload_document',$update);
}
public function loan_cat_delete($lc_category_id)
{
	 $this->db->where('lc_category_id',$lc_category_id);
	return $this->db->delete('loan_category');
}
public function loan_delete($loan_id)
{
	 $this->db->where('loan_id',$loan_id);
	return $this->db->delete('loan');
}
public function loan_fetch_id_model($loan_id)
{
	$this->db->select('*');
		$this->db->from('loan');
		$this->db->where('loan_id',$loan_id);
		return $this->db->get()->result();
}
public function loan_cat_fetch_model($lc_category_id)
{
	$this->db->select('*');
		$this->db->from('loan_category');
		$this->db->where('lc_category_id',$lc_category_id);
		return $this->db->get()->result();
}
public function loan_cat_update_model($arrdata,$lc_category_id)
{
	$this->db->where('lc_category_id',$lc_category_id);
	return $this->db->update('loan_category',$arrdata);
}
public function loan_update_model($arrdata,$loan_id)
{
	$this->db->where('loan_id',$loan_id);
	return $this->db->update('loan',$arrdata);
}

}