<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {


public function register_insert_model($arrdata)
	{
		return $this->db->insert('user',$arrdata);
	}
public function login_check_model($arrdata)
	{
		$this->db->where($arrdata);
		return $this->db->count_all_results('user');
	}
	public function loan_cat_fetch_model($loan_id)
	{
		$this->db->select('*');
		$this->db->from('loan_category');
		$this->db->where('lc_loan_id',$loan_id);
		return $this->db->get()->result();
	}

public function loan_apply_model($arrdata)
	{
		return $this->db->insert('loan_application',$arrdata);
	}
	public function category_fetch_model($category_id)
	{
		$this->db->select('*');
		$this->db->from('loan_category');
		$this->db->where('lc_category_id',$category_id);
		return $this->db->get()->result();
	}

	 public function loan_status_fetch_model()
	{
		$email=$this->session->userdata('email');
		$this->db->select('*');
		$this->db->from('loan_application');
		$this->db->where('Email',$email);
		$this->db->join('loan_category','loan_category.lc_category_id=loan_application.category_id');
		return $this->db->get()->result();
	}

	public function user_fetch_model()
	{
		$email=$this->session->userdata('email');
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('User_Email',$email);
		return $this->db->get()->result();
	}
	public function loan_fetch_model()
	{
		$this->db->select('*');
		$this->db->from('loan');
		
		return $this->db->get()->result();
	}

	public function user_update_model($arrdata)
{
    $email=$this->session->userdata('email');
    $this->db->where('User_Email',$email);
	return $this->db->update('user',$arrdata);
}
public function cancel_loan_model($loan_id)
{
	$this->db->where('loan_id',$loan_id);
	return $this->db->delete('loan_application');
}

public function loan_request_model($loan_id)
{
	$this->db->select('*');
		$this->db->from('loan_application');
		$this->db->join('loan_category','loan_category.lc_category_id=loan_application.category_id');
		$this->db->where('loan_id',$loan_id);
		return $this->db->get()->result();
}

public function upload_document_insert_model($arrdata)
{
	return $this->db->insert('upload_document',$arrdata);
}
public function document_approve_fetch_model($approved,$loan_id)
{
	$this->db->where('loan_id',$loan_id);
	return $this->db->update('loan_application',$approved);
}

public function document_status_model()
{
	$email=$this->session->userdata('email');
	$this->db->select('*');
		$this->db->from('upload_document');
		 $this->db->join('user','upload_document.user_id=user.User_id');
		 $this->db->where('upload_document.User_Email',$email);
		return $this->db->get()->result();
}

}