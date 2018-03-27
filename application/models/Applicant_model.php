<?php

 
class Applicant_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get applicant by apid
     */
    function get_applicant($apid)
    {
        return $this->db->get_where('applicant',array('apid'=>$apid))->row_array();
    }

    function get_user($params = array())
    {
        return $this->db->get_where('applicant', array('apid' => $params['apid']))->row_array();
    }

    function get_mo($apid)
    {
        $this->db->join('course', 'courseID');
        $this->db->where('apid =', $apid);
        $this->db->where('applicant.status =', 'Active');
        return $this->db->get('applicant')->result_array();
    }

        
    /*
     * Get all applicant
     */
    function get_all_applicant()
    {
        $query = $this->db->query(
            "SELECT a.apid, a.apfn, a.apmn, a.apln, c.courseCode, a.age, a.gender, a.civstat, a.nationality, a.datesubmitted, a.datemodified, a.studentstat, a.status from applicant a
            INNER JOIN course c ON a.courseID = c.courseID
            WHERE a.status != 'Closed'"
        );
        return $query->result_array();
    }

    function get_all_applicant2()
    {
        $this->db->join('course', 'courseID');
        $this->db->order_by('apid', 'asc');
        $this->db->where('studentstat !=', 'Approved');
        $this->db->where('applicant.status =', 'Active');
        return $this->db->get('applicant')->result_array();
    }
        
    /*
     * function to add new applicant
     */
    function add_applicant($params)
    {
        $this->db->insert('applicant',$params);
        return $this->db->insert_id();
    }

    function add_user($params)
    {
        $this->db->insert('users', $params);
        return $this->db->insert_id();

    }

    function approve_applicant($apid, $params1)
    {
        $this->db->where('apid', $apid);
        return $this->db->update('applicant',$params1);
    }

    /*
     * function to update applicant
     */
    function update_applicant($apid,$params)
    {
        $this->db->where('apid',$apid);
        return $this->db->update('applicant',$params);

    }

    /*
     * function to delete applicant
     */
    function archive_applicant($apid)
    {
        $this->db->where('apid',$apid);
        return $this->db->update('applicant',$params);

    }

<<<<<<< HEAD
    function emailapplicant($apid,$params)
=======
    function restore_applicant($apid)
>>>>>>> 115049c16f2d81364fe077df08f48a4c2660de5f
    {
        $this->db->where('apid',$apid);
        return $this->db->update('applicant',$params);
    }

    function valemail($params)
    {
        $email = $params['email'];
        $query = $this->db->query("SELECT userEmail from users where userEmail = '$email'");
        if ($query->num_rows() > 0)
        {
            return 1;
        }
        else 
        {
            $query2 = $this->db->query("SELECT email from applicant where email = '$email'");
            if ($query2->num_rows() > 0)
            {
              return 3;
              //Exist in applicant   
            }
            else {
                //Nothing exist
                return 2;
            }
        }
    }
}


