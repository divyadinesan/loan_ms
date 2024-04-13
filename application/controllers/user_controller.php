<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user_controller extends CI_Controller {

public function index()
	{
		$this->load->view('User/index');
	}

public function user_register()
	{
		$this->load->view('User/user_registration');
	}

public function register_insert()
    {
    	$name=$this->input->post('name');
    	$email=$this->input->post('email');
    	$phone_number=$this->input->post('phone');
    	$address=$this->input->post('address');
    	$password=$this->input->post('password');
    	$arrdata=array('User_Name'=>$name,'User_Email'=>$email,'User_Phone_number'=>$phone_number,'User_Address'=>$address,'User_Password'=>$password	
);
    	$this->load->model('User_model');
    	$execute=$this->User_model->register_insert_model($arrdata);
    	if($execute==1)
    	{
          echo "<script>alert('registered successfully')</script>";
          $this->login();
    	}
    	else
    	{
    		echo "<script>alert('Try Again!!')</script>";
    		$this->user_register();
    	}
    }
    public function login()
    {
        $this->load->view('User/login');
    }

  public function login_insert()
     {
        $email=$this->input->post('email');
        $password=$this->input->post('password');
     	$arrdata=array('User_Email'=>$email,'User_Password'=>$password);
    	$this->load->model('User_model');
      	 $count=$this->User_model->login_check_model($arrdata);
      	if($count>0)
      	{
            echo "<script>alert('Login successfully')</script>";
            $this->session->set_userdata('email',$email);
          $this->loan();
      	}
      	else
      	{
      		echo "<script>alert('Try Again!!')</script>";
      		$this->index();
      	}

       }
public function loan()
    {
        if($this->session->has_userdata('email'))
        {
            $this->load->model('User_model');
            $arrdata['loan']=$this->User_model->loan_fetch_model();
            $this->load->view('User/loan',$arrdata);
        }
        else
        {
            $this->index();
        }
    }
    public function loan_category($loan_id)
    {
         if($this->session->has_userdata('email'))
        {
            $this->load->model('User_model');
            $arrdata['loan_cat']=$this->User_model->loan_cat_fetch_model($loan_id);
            $this->load->view('User/loan_category',$arrdata);
        }
        else
        {
            $this->index();
        }
    }

public function user_home($category_id)
    {
        if($this->session->has_userdata('email'))
        {
            $this->load->model('User_model');
            $arrdata['user']=$this->User_model->user_fetch_model();
            $arrdata['category']=$this->User_model->category_fetch_model($category_id);
            $this->load->view('User/home',$arrdata);
        }
        else
        {
            $this->index();
        }
    }

       


 public function loan_apply()
 {
    $category_id=$this->input->post('category_id');
    $Name=$this->input->post('name');
     
    $Email=$this->input->post('email');
     
    $Phone=$this->input->post('phone');
     
    $Address=$this->input->post('address');
     
    $Age=$this->input->post('age');
     
    //$Date_Of_Birth=$this->input->post('dob');
     
    $Monthly_income=$this->input->post('monthly_income');
     
    $Loan_amount=$this->input->post('loan_amount');
     
    // $Purpose=$this->input->post('purpose');
     
    // $tenure=$this->input->post('tenure');
    //  $interest=$this->input->post('interest');
     
     $arrdata=array('category_id'=>$category_id,'Name'=> $Name,'Email'=>$Email,'Phone_number'=>$Phone,'Address'=>$Address,'Age'=>$Age,'Monthly_income'=>$Monthly_income,'Loan_amount'=>$Loan_amount,'Loan_status'=>'Pending','document_status'=>'Pending');
     $this->load->model('User_model');
     $execute=$this->User_model->loan_apply_model($arrdata); 
     if($execute==1)
        {
          echo "<script>alert('Success')</script>";
          $this->loan_status();
        }
        else
        {
            echo "<script>alert('Try Again!!')</script>";
            $this->user_home();
        }
    }   
 
public function loan_status()
{  
    if($this->session->has_userdata('email'))
     {
        $this->load->model('User_model');
        $arrdata['loan']=$this->User_model->loan_status_fetch_model();
        $this->load->view('User/Loan_status',$arrdata);
     }
     else
        {
            $this->index();
        }
    }

public function user_approve()
{
    if($this->session->has_userdata('email'))
     {
    $this->load->view('User/Loan_status');
     }
     else
    {
        $this->index();
    }
}

public function about()
    {
        $this->load->view('User/about');
    }
public function contact()
    {
        $this->load->view('User/contact');
    }
  public function my_profile()
    {
        if($this->session->has_userdata('email'))
        {
            $this->load->model('User_model');
            $arrdata['user']=$this->User_model->user_fetch_model();
            $this->load->view('User/my_profile',$arrdata);
        }
        else
        {
            $this->index();
        }
    } 
   public function update_password()
    {
        $name=$this->input->post('name');
        $phone_number=$this->input->post('phone');
        $address=$this->input->post('address');
        $password=$this->input->post('password');
        
        $arrdata=array('User_Name'=>$name,'User_Phone_number'=>$phone_number,'User_Address'=>$address,'User_Password'=>$password);

        $this->load->model('User_model');
        $execute=$this->User_model->user_update_model($arrdata);
        if($execute==1)
        {
          echo "<script>alert('successfully updated')</script>";
          $this->my_profile();
        }
        else
        {
            echo "<script>alert('Try Again!!')</script>";
            $this->my_profile();
        }

    } 
    public function Logout()
    {
         $this->session->sess_destroy();
      return redirect('user_controller/index');
    }


    public function cancel_loan($loan_id)
    {
        $this->load->model('User_model');
        $delete=$this->User_model->cancel_loan_model($loan_id);
        if($delete)
        {
           echo "<script>alert('successfully Canceled')</script>";
          $this->loan_status();
        }
        else
        {
            echo "<script>alert('Try Again..!')</script>";
          $this->loan_status();

        }

    }

  public function upload_documents($loan_id)
        {
             $this->load->model('User_model');
             $arrdata['users']=$this->User_model->user_fetch_model();
               $arrdata['loan']=$this->User_model->loan_request_model($loan_id);
            $this->load->view('user/upload_Documents',$arrdata);
        }

   public function upload_documents_insert()
    {
    $Name=$this->input->post('name');
     
    $User_Id=$this->input->post('user_id');
    
    $Email=$this->input->post('email');

    $Phone=$this->input->post('phone');
     
    $Address=$this->input->post('address');
     
    $Monthly_Income=$this->input->post('monthly_income');
     
    $Loan_Amount=$this->input->post('loan_amount');
     
    $Purpose=$this->input->post('purpose');
     
    $Aadhar=$this->input->post('aadhar');
     
    $Salary_Slip=$this->input->post('salary_slip');
     
    $Asset_Document=$this->input->post('asset_document');
    $loan_id=$this->input->post('loan_id');
     
$image=$_FILES['aadhar']['name'];
$time = Time();
$images = explode('.',$image);
$photo =$time.'.'.end($images);
$config['upload_path']= './Asset/User/Aadhar/';
$config['allowed_types']= 'jpg|png|jpeg|pdf';
$config['file_name'] = $photo;
$this->load->library('upload', $config);
$this->upload->initialize($config);
if( $this->upload->do_upload('aadhar'))
{

        $image1=$_FILES['salary_slip']['name'];
        $time1 = Time();
        $images1 = explode('.',$image1);
        $photo1 =$time1.'.'.end($images1);
        $config1['upload_path']= './Asset/User/salary_slip/';
        $config1['allowed_types']= 'jpg|png|jpeg|pdf';
        $config1['file_name'] = $photo1;
        $this->load->library('upload', $config1);
        $this->upload->initialize($config1);
        if( $this->upload->do_upload('salary_slip'))
        {

                 $image2=$_FILES['asset_document']['name'];
                    $time2 = Time();
                    $images2 = explode('.',$image2);
                    $photo2 =$time.'.'.end($images2);
                    $config2['upload_path']= './Asset/User/asset_document/';
                    $config2['allowed_types']= 'jpg|png|jpeg|pdf';
                    $config2['file_name'] = $photo2;
                    $this->load->library('upload', $config2);
                    $this->upload->initialize($config2);
                    if( $this->upload->do_upload('asset_document'))
                    {
                        $arrdata=array('user_id'=>$User_Id,'loan_id'=>$loan_id,'User_Email'=>$Email,'monthly_income'=>$Monthly_Income,'loan_ammount'=>$Loan_Amount,'Aadhar'=>$photo,'salary_slip'=>$photo1,'asset_document'=>$photo2,'document_status'=>'Pending');
                        $this->load->model('User_model');
                        $exe=$this->User_model->upload_document_insert_model($arrdata);
                        if($exe==1)
                        {
                            $approved=array('document_status'=>'Documents Uploaded');
                             $this->load->model('User_model');
                            $execute1=$this->User_model->document_approve_fetch_model($approved,$loan_id);
                            if($execute1)
                            {
                        echo "<script>alert('Document Uploaded')</script>";
                        $this->document_status();
                        }
                        else
                        {
                        echo "<script>alert('try again')</script>";
                        $this->loan_status();
                        }
                            }
                            else
                            {
                               echo "<script>alert('try again')</script>";
                         $this->loan_status(); 
                            }
                    }
                    else
                    {
                    echo "<script>alert('Invalid Image')</script>";
                    $this->loan_status();
                    }
        }
        else
        {
        echo "<script>alert('Invalid Image')</script>";
        $this->loan_status();
        }
}
else
{
echo "<script>alert('Invalid Image')</script>";
$this->loan_status();
}
    }

public function document_status()
{
    $this->load->model('User_model');
        $arrdata['ds']=$this->User_model->document_status_model();
    $this->load->view('user/document_status',$arrdata);
}

public function services()
    {
        $this->load->view('User/services');
    }




}