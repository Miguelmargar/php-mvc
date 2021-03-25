<?php

    class User {
        private $db;

        public function __construct() {
            $this->db = new Database;
        }

        // find user by email
        public function findUserByEmail($email) {
            $this->db->query('SELECT * FROM users WHERE email = :email');
            $this->db->bind(':email', $email);

            $row = $this->db->single();

            // Check row
            return $this->db->rowCount() > 0;
        }
    }