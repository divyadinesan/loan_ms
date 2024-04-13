<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_controller extends CI_Controller {
public function index()
	{
		$this->load->view('User/index');
	}
	public function registration()
	{
		$this->load->view('Admin/registration');
	}

    public function login()
    {
    	$this->load->view('Admin/login');
    }

    public function register_insert()
    {
    	$name=$this->input->post('Name');
    	$email=$this->input->post('Email');
    	$password=$this->input->post('Password');
    	$arrdata=array('Admin_Name'=>$name,'Admin_Email'=>$email,'Admin_Password'=>$password);
    	$this->load->model('Admin_model');
    	$execute=$this->Admin_model->register_insert_model($arrdata);
    	if($execute==1)
    	{
          echo "<script>alert('registered successfully')</script>";
          $this->login();
    	}
    	else
    	{
    		echo "<script>alert('Try Again!!')</script>";
    		$this->register();
    	}
    }
     public function login_insert()
     {
       $email=$this->input->post('Email');
    	$password=$this->input->post('Password'); 
    	$arrdata=array('Admin_Email'=>$email,'Admin_Password'=>$password);
    	$this->load->model('Admin_model');
    	 $count=$this->Admin_model->login_check_model($arrdata);
    	if($count>0)
    	{
          echo "<script>alert('Login successfully')</script>";
          $this->session->set_userdata('Admin_email',$email);
          $this->Change_password();
    	}
    	else
    	{
    		echo "<script>alert('Try Again!!')</script>";
    		$this->login();
    	}

     }

	public function add_loan()
	{
		if($this->session->has_userdata('Admin_email'))
		{
			
		$this->load->view('Admin/add_loan');
		}
		else
		{
			$this->login();
		}
	}
  public function manage_loan()
  {
    if($this->session->has_userdata('Admin_email'))
    {
      $this->load->model('Admin_model');
      $arrdata['loan']=$this->Admin_model->loan_fetch_model();
       $this->load->view('Admin/manage_loan',$arrdata);
    }
    else
    {
      $this->login();
    }
  }
  public function loan_delete($loan_id)
  {
     $this->load->model('Admin_model');
      $execute=$this->Admin_model->loan_delete($loan_id);
      if($execute==1)
      {
        echo "<script>alert('deleted')</script>";
          $this->manage_loan();
      }
      else
      {
        echo "<script>alert('Try Again!')</script>";
          $this->manage_loan();
      }
  }
  public function loan_fetch($loan_id)
  {
     if($this->session->has_userdata('Admin_email'))
    {
      $this->load->model('Admin_model');
      $arrdata['loan']=$this->Admin_model->loan_fetch_id_model($loan_id);
       $this->load->view('Admin/loan_fetch',$arrdata);
    }
    else
    {
      $this->login();
    }
  }
  public function loan_update($loan_id)
  {
      $loan_name=$this->input->post('loan_name');
      $image=$_FILES['loan_image']['name'];
      if($image!="")
      {
      $time = Time();
      $images = explode('.',$image);
      $Add_photos =$time.'.'.end($images);
      $config['upload_path']= './Asset/Admin/loan_image/';
      $config['allowed_types']= 'jpg|png|jpeg';
      $config['file_name'] = $Add_photos;
      $this->load->library('upload', $config);
      $this->upload->initialize($config);
      if($this->upload->do_upload('loan_image'))
      {
        $arrdata=array('loan_name'=>$loan_name,'loan_image'=>$Add_photos);
        $this->load->model('Admin_model');
        $execute=$this->Admin_model->loan_update_model($arrdata,$loan_id);
        if($execute==1)
        {
           echo "<script>alert('Successfully Updated')</script>";
           $this->manage_loan();
        }
         else
        {
         echo "<script>alert('Try Again!!')</script>";
           $this->manage_loan();
         }
      }
      else
      {
        echo "<script>alert('Invalid photo')</script>";
          $this->manage_loan();
      }
      }
      else
      {
       $arrdata=array('loan_name'=>$loan_name);
        $this->load->model('Admin_model');
        $execute=$this->Admin_model->loan_update_model($arrdata,$loan_id);
        if($execute==1)
        {
           echo "<script>alert('Successfully Updated')</script>";
           $this->manage_loan();
        }
         else
        {
         echo "<script>alert('Try Again!!')</script>";
           $this->manage_loan();
         }
      } 
                    // $image2=$_FILES['loan_image']['name'];
                    // $time2 = Time();
                    // $images2 = explode('.',$image2);
                    // $photo2 =$time2.'.'.end($images2);
                    // $config2['upload_path']= './Asset/Admin/loan_image/';
                    // $config2['allowed_types']= 'jpg|png|jpeg|pdf';
                    // $config2['file_name'] = $photo2;
                    // $this->load->library('upload', $config2);
                    // $this->upload->initialize($config2);
                    // if( $this->upload->do_upload('loan_image'))
                    // {
                    //    $arrdata=array('loan_name'=>$loan_name,'loan_image'=>$photo2);
                    //    $this->load->model('Admin_model');
                    //    $execute=$this->Admin_model->loan_update_model($arrdata,$loan_id);
                    //    if($execute==1)
                    //    {
                    //        echo "<script>alert('Successfully Updated')</script>";
                    //        $this->manage_loan();
                    //    }
                    //     else
                    //     {
                    //      echo "<script>alert('Try Again!!')</script>";
                    //       $this->manage_loan();
                    //     }
                    // }
                    // else
                    // {
                    // echo "<script>alert('Invalid Image')</script>";
                    // $this->manage_loan();
                    // }
  }
  public function manage_loan_category()
  {
     if($this->session->has_userdata('Admin_email'))
    {
      $this->load->model('Admin_model');
      $arrdata['loan']=$this->Admin_model->loan_category_fetch_model();
       $this->load->view('Admin/manage_loan_category',$arrdata);
    }
    else
    {
      $this->login();
    }
  }
  public function loan_cat_fetch($lc_category_id)
  {
    if($this->session->has_userdata('Admin_email'))
    {
      $this->load->model('Admin_model');
      $arrdata['loan_cat']=$this->Admin_model->loan_cat_fetch_model($lc_category_id);
       $this->load->view('Admin/loan_cat_update',$arrdata);
    }
    else
    {
      $this->login();
    }
  }
  public function loan_cat_update($lc_category_id)
  {
    //$loan_id=$this->input->post('loan_id');
      $loan_category_name=$this->input->post('loan_category_name');
      $interest=$this->input->post('interest');
      $loan_limit=$this->input->post('loan_limit');
      $tenure=$this->input->post('tenure');
      $arrdata=array('lc_category_name'=>$loan_category_name,'lc_interest'=>$interest,'lc_limit'=>$loan_limit,'lc_tenure'=>$tenure);
      $this->load->model('Admin_model');
      $execute=$this->Admin_model->loan_cat_update_model($arrdata,$lc_category_id);
      if($execute==1)
      {
          echo "<script>alert('Success')</script>";
          $this->manage_loan_category();
      }
      else
      {
        echo "<script>alert('Try Again!!')</script>";
        $this->manage_loan_category();
      }
  }
  public function loan_cat_delete($lc_category_id)
    {
      $this->load->model('Admin_model');
      $execute=$this->Admin_model->loan_cat_delete($lc_category_id);
      if($execute==1)
      {
        echo "<script>alert('deleted')</script>";
          $this->manage_loan_category();
      }
      else
      {
        echo "<script>alert('Try Again!')</script>";
          $this->manage_loan_category();
      }
    }
  
  public function loan_insert()
  {                 $loan_name=$this->input->post('loan_name');
                    $image2=$_FILES['loan_image']['name'];
                    $time2 = Time();
                    $images2 = explode('.',$image2);
                    $photo2 =$time2.'.'.end($images2);
                    $config2['upload_path']= './Asset/Admin/loan_image/';
                    $config2['allowed_types']= 'jpg|png|jpeg|pdf';
                    $config2['file_name'] = $photo2;
                    $this->load->library('upload', $config2);
                    $this->upload->initialize($config2);
                    if( $this->upload->do_upload('loan_image'))
                    {
                       $arrdata=array('loan_name'=>$loan_name,'loan_image'=>$photo2);
                       $this->load->model('Admin_model');
                       $execute=$this->Admin_model->loan_insert_model($arrdata);
                       if($execute==1)
                       {
                           echo "<script>alert('Successfully Added')</script>";
                           $this->add_loan();
                       }
                        else
                        {
                         echo "<script>alert('Try Again!!')</script>";
                          $this->add_loan();
                        }
                    }
                    else
                    {
                    echo "<script>alert('Invalid Image')</script>";
                    $this->add_loan();
                    }
  }

	public function Change_password()
    {
    	if($this->session->has_userdata('Admin_email'))
		{

			$this->load->model('Admin_model');
			$Arrdata['admin']=$this->Admin_model->Admin_fetch_model();
			$this->load->view('Admin/Change_password',$Arrdata);
		}
		else
		{
			$this->login();
		}

    	
    }

    public function update_password()
    {
    	$password=$this->input->post('new_Password');
        $arrdata=array('Admin_Password'=>$password);
    	$this->load->model('Admin_model');
    	$execute=$this->Admin_model->admin_update_model($arrdata);
    	if($execute==1)
    	{
          echo "<script>alert('password successfully updated')</script>";
          $this->login();
    	}
    	else
    	{
    		echo "<script>alert('Try Again!!')</script>";
    		$this->Change_password();
    	}

    }

public function Verify_User_Request()
	{
		$this->load->model('Admin_model');
		$arrdata['verify_request']=$this->Admin_model->verify_user_request_model();
		$this->load->view('Admin/Verify_User_Request',$arrdata);
	}

public function user_details()
	{
		$this->load->model('Admin_model');
		$arrdata['user_details']=$this->Admin_model->user_details_model();
		$this->load->view('Admin/User_Details',$arrdata);
	}


public function Logout()
    {
        $this->session->sess_destroy();
      return redirect('user_controller/index');
    }

    public function user_approve($loan_id)
    {
    	$update=array('Loan_status'=>'Approved');
    	$this->load->model('Admin_model');
		$execute=$this->Admin_model->user_loan_request_model($loan_id,$update);
		if($execute)
		{
			echo "<script>alert('Loan Approved')</script>";
          $this->Verify_User_Request();
		}
		else
		{
			echo "<script>alert('TRY AGAIN..!')</script>";
          $this->Verify_User_Request();
		}
    }

    public function user_reject($loan_id)
    {
    	$update=array('Loan_status'=>'Rejected');
    	$this->load->model('Admin_model');
		$execute=$this->Admin_model->user_loan_request_model($loan_id,$update);
		if($execute)
		{
			echo "<script>alert('Loan Rejected')</script>";
          $this->Verify_User_Request();
		}
		else
		{
			echo "<script>alert('TRY AGAIN..!')</script>";
          $this->Verify_User_Request();
		}
    }
     public function user_request()
    {
    	$this->load->model('Admin_model');
		$arrdata['user_request']=$this->Admin_model->user_request_model();
		$this->load->view('Admin/User_Request',$arrdata);
    }
  public function upload_documents()
	{
		$this->load->model('Admin_model');
		$arrdata['documents']=$this->Admin_model->upload_documents_model();
		$this->load->view('Admin/upload_documents',$arrdata);
	}
 
 public function user_document_approve($loan_id)
    {
    	$update=array('document_status'=>'Approved');
    	$this->load->model('Admin_model');
		$execute=$this->Admin_model->user_loan_document_model($loan_id,$update);
		if($execute)
		{
			echo "<script>alert('Loan Approved')</script>";
          $this->upload_documents();
		}
		else
		{
			echo "<script>alert('TRY AGAIN..!')</script>";
          $this->upload_documents();
		}
    }

    public function user_document_reject($loan_id)
    {
    	$update=array('document_status'=>'Rejected');
    	$this->load->model('Admin_model');
		$execute=$this->Admin_model->user_loan_document_model($loan_id,$update);
		if($execute)
		{
			echo "<script>alert('Loan Rejected')</script>";
          $this->upload_documents();
		}
		else
		{
			echo "<script>alert('TRY AGAIN..!')</script>";
          $this->upload_documents();
		}
    }
    public function add_loan_category()
  {
    if($this->session->has_userdata('Admin_email'))
    {
      $this->load->model('Admin_model');
      $arrdata['loan']=$this->Admin_model->loan_fetch_model();
    $this->load->view('Admin/add_loan_category',$arrdata);
    }
    else
    {
      $this->login();
    }
  }
    public function loan_category_insert()
    {
      $loan_id=$this->input->post('loan_id');
      $loan_category_name=$this->input->post('loan_category_name');
      $interest=$this->input->post('interest');
      $loan_limit=$this->input->post('loan_limit');
      $tenure=$this->input->post('tenure');
      $arrdata=array('lc_loan_id'=>$loan_id,'lc_category_name'=>$loan_category_name,'lc_interest'=>$interest,'lc_limit'=>$loan_limit,'lc_tenure'=>$tenure);
      $this->load->model('Admin_model');
      $execute=$this->Admin_model->loan_category_insert($arrdata);
      if($execute==1)
      {
          echo "<script>alert('Success')</script>";
          $this->add_loan_category();
      }
      else
      {
        echo "<script>alert('Try Again!!')</script>";
        $this->add_loan_category();
      }
    }



}