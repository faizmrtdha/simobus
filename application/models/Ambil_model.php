<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ambil_model extends CI_Model
{
    function save($datasensor, $bus)
    {
        $this->db->where('id', $bus);
        if ($bus == '1') {
            $this->db->update('bus', $datasensor);
            $this->db->insert('sensor', $datasensor);
            return TRUE;
        } else if ($bus == '2') {
            $this->db->update('bus', $datasensor);
            $this->db->insert('sensor2', $datasensor);
            return TRUE;
        } else if ($bus == '3') {
            $this->db->update('bus', $datasensor);
            $this->db->insert('sensor3', $datasensor);
            return TRUE;
        } else if ($bus == '4') {
            $this->db->update('bus', $datasensor);
            $this->db->insert('sensor4', $datasensor);
            return TRUE;
        } else if ($bus == '5') {
            $this->db->update('bus', $datasensor);
            $this->db->insert('sensor5', $datasensor);
            return TRUE;
        } else if ($bus == '6') {
            $this->db->update('bus', $datasensor);
            $this->db->insert('sensor6', $datasensor);
            return TRUE;
        }
    }

    function cekPenumpang($bus)
    {
        $this->db->select("jumlahPenumpang");
        if ($bus == 1) {
            $this->db->from("lokpen1");
        } else if ($bus == 2) {
            $this->db->from("lokpen2");
        } else if ($bus == 3) {
            $this->db->from("lokpen3");
        } else if ($bus == 4) {
            $this->db->from("lokpen4");
        } else if ($bus == 5) {
            $this->db->from("lokpen5");
        } else if ($bus == 6) {
            $this->db->from("lokpen6");
        }
        $this->db->order_by("id", "desc");
        $query = $this->db->get();
        return $query->result_array();
    }

    function lat($bus)
    {
        $this->db->select("locationLatitude");
        if ($bus == 1) {
            $this->db->from("lokasi");
        } else if ($bus == 2) {
            $this->db->from("sensor2");
        } else if ($bus == 3) {
            $this->db->from("sensor3");
        } else if ($bus == 4) {
            $this->db->from("sensor4");
        } else if ($bus == 5) {
            $this->db->from("sensor5");
        } else if ($bus == 6) {
            $this->db->from("sensor6");
        }
        $this->db->order_by("id", "desc");
        $query = $this->db->get();
        return $query->result_array();
    }

    function lng($bus)
    {
        $this->db->select("locationLongitude");
        if ($bus == 1) {
            $this->db->from("lokasi");
        } else if ($bus == 2) {
            $this->db->from("sensor2");
        } else if ($bus == 3) {
            $this->db->from("sensor3");
        } else if ($bus == 4) {
            $this->db->from("sensor4");
        } else if ($bus == 5) {
            $this->db->from("sensor5");
        } else if ($bus == 6) {
            $this->db->from("sensor6");
        }
        $this->db->order_by("id", "desc");
        $query = $this->db->get();
        return $query->result_array();
    }

    function savelokpen($datalokpen, $bus)
    {
        $this->db->where('id', $bus);
        if ($bus == '1') {
            $this->db->insert('lokpen1', $datalokpen);
            return TRUE;
        } else if ($bus == '2') {
            $this->db->insert('lokpen2', $datalokpen);
            return TRUE;
        } else if ($bus == '3') {
            $this->db->insert('lokpen3', $datalokpen);
            return TRUE;
        } else if ($bus == '4') {
            $this->db->insert('lokpen4', $datalokpen);
            return TRUE;
        } else if ($bus == '5') {
            $this->db->insert('lokpen5', $datalokpen);
            return TRUE;
        } else if ($bus == '6') {
            $this->db->insert('lokpen6', $datalokpen);
            return TRUE;
        }
    }

    function savelok($datalok, $bus)
    {
        $this->db->where('id', $bus);
        if ($bus == '1') {
            $this->db->insert('lokasi', $datalok);
            return TRUE;
        } else if ($bus == '2') {
            $this->db->insert('lokasi2', $datalok);
            return TRUE;
        } else if ($bus == '3') {
            $this->db->insert('lokasi3', $datalok);
            return TRUE;
        } else if ($bus == '4') {
            $this->db->insert('lokasi4', $datalok);
            return TRUE;
        } else if ($bus == '5') {
            $this->db->insert('lokasi5', $datalok);
            return TRUE;
        } else if ($bus == '6') {
            $this->db->insert('lokasi6', $datalok);
            return TRUE;
        }
    }
}
