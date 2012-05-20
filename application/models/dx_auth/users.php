<?php

class Users extends CI_Model {

    function Users() {
        //parent::Model();
        parent::__construct();

        // Other stuff
        $this->_prefix = $this->config->item('DX_table_prefix');
        $this->_table = $this->_prefix . $this->config->item('DX_users_table');
        $this->_roles_table = $this->_prefix . $this->config->item('DX_roles_table');
    }

    // General function

    function get_all($offset = 0, $row_count = 0) {
        $users_table = $this->_table;
        $roles_table = $this->_roles_table;

        $this->db->select("$users_table.*", FALSE);
        $this->db->select("$roles_table.name AS role_name", FALSE);
        $this->db->join($roles_table, "$roles_table.id = $users_table.role_id");
        $this->db->order_by("$users_table.id", "ASC");

        if ($offset >= 0 AND $row_count > 0) {
            $query = $this->db->get($this->_table, $row_count, $offset);
        } else {
            $query = $this->db->get($this->_table);
        }

        return $query;
    }

    function dt_ajax_get_all() {
        $users_table = $this->_table;
        $roles_table = $this->_roles_table;
        $edit = "<a href=" . site_url('auth/change_user_info/$1') . " title='Edit'><i class='icon-edit'> </i></a>";
        $lock = "<a  id='del_id_$1' href='#' onclick='lockUser($1)' title='Lock' ><i class='icon-lock'> </i></a>";
        $this->load->helper("formater");
        $this->datatables->select("$users_table.username as username,$users_table.email,$roles_table.name AS role_name,$users_table.banned as is_locked,$users_table.last_ip,$users_table.last_login as user_last_login,$users_table.created as user_created,$users_table.id as user_id", FALSE);
        $this->datatables->from($this->_table);
        $this->datatables->join($roles_table, "$roles_table.id = $users_table.role_id");
        $this->datatables->edit_column('user_id', $edit . $lock, 'user_id');
        $this->datatables->edit_column('is_locked', '$1', "lock_to_YN(is_locked)");
        $this->datatables->edit_column('user_last_login', '$1', "formatdate(user_last_login)");
        $this->datatables->edit_column('user_created', '$1', "formatdate(user_created)");
        return $this->datatables->generate();
    }

    function get_user_by_id($user_id) {
        $this->db->where('id', $user_id);
        return $this->db->get($this->_table);
    }

    function get_user_by_username($username) {
        $this->db->where('username', $username);
        return $this->db->get($this->_table);
    }

    function get_user_by_email($email) {
        $this->db->where('email', $email);
        return $this->db->get($this->_table);
    }

    function get_login($login) {
        $this->db->where('username', $login);
        $this->db->or_where('email', $login);
        return $this->db->get($this->_table);
    }

    function check_ban($user_id) {
        $this->db->select('1', FALSE);
        $this->db->where('id', $user_id);
        $this->db->where('banned', '1');
        return $this->db->get($this->_table);
    }

    function check_username($username) {
        $this->db->select('1', FALSE);
        $this->db->where('LOWER(username)=', strtolower($username));
        return $this->db->get($this->_table);
    }

    function check_email($email) {
        $this->db->select('1', FALSE);
        $this->db->where('LOWER(email)=', strtolower($email));
        return $this->db->get($this->_table);
    }

    function ban_user($user_id, $reason = NULL) {
        $data = array(
            'banned' => 1,
            'ban_reason' => $reason
        );
        return $this->set_user($user_id, $data);
    }

    function unban_user($user_id) {
        $data = array(
            'banned' => 0,
            'ban_reason' => NULL
        );
        return $this->set_user($user_id, $data);
    }

    function set_role($user_id, $role_id) {
        $data = array(
            'role_id' => $role_id
        );
        return $this->set_user($user_id, $data);
    }

    // User table function

    function create_user($data) {
        $data['created'] = date('Y-m-d H:i:s', time());
        return $this->db->insert($this->_table, $data);
    }

    function get_user_field($user_id, $fields) {
        $this->db->select($fields);
        $this->db->where('id', $user_id);
        return $this->db->get($this->_table);
    }

    function set_user($user_id, $data) {
        $this->db->where('id', $user_id);
        return $this->db->update($this->_table, $data);
    }

    function delete_user($user_id) {
        $this->db->where('id', $user_id);
        $this->db->delete($this->_table);
        return $this->db->affected_rows() > 0;
    }

    // Forgot password function

    function newpass($user_id, $pass, $key) {
        $data = array(
            'newpass' => $pass,
            'newpass_key' => $key,
            'newpass_time' => date('Y-m-d h:i:s', time() + $this->config->item('DX_forgot_password_expire'))
        );
        return $this->set_user($user_id, $data);
    }

    function activate_newpass($user_id, $key) {
        $this->db->set('password', 'newpass', FALSE);
        $this->db->set('newpass', NULL);
        $this->db->set('newpass_key', NULL);
        $this->db->set('newpass_time', NULL);
        $this->db->where('id', $user_id);
        $this->db->where('newpass_key', $key);

        return $this->db->update($this->_table);
    }

    function clear_newpass($user_id) {
        $data = array(
            'newpass' => NULL,
            'newpass_key' => NULL,
            'newpass_time' => NULL
        );
        return $this->set_user($user_id, $data);
    }

    // Change password function

    function change_password($user_id, $new_pass) {
        $this->db->set('password', $new_pass);
        $this->db->where('id', $user_id);
        return $this->db->update($this->_table);
    }

}

?>