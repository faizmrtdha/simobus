<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Value extends CI_Controller
{
    public function sensor()
    {
        if (isset($_GET['lat'], $_GET['lng'], $_GET['speed'], $_GET['orang'], $_GET['ppm'], $_GET['bus'])) {
            $lat = $this->input->get('lat');
            $lng = $this->input->get('lng');
            $speed = $this->input->get('speed');
            $penumpang = $this->input->get('orang');
            $ppm = $this->input->get('ppm');
            $bus = $this->input->get('bus');

            $datasensor = array(
                'locationLatitude' => $lat,
                'locationLongitude' => $lng,
                'speed' => $speed,
                'jumlahPenumpang' => $penumpang,
                'ppm' => $ppm
            );
            $datalokpen = array(
                'locationLatitude' => $lat,
                'locationLongitude' => $lng,
                'jumlahPenumpang' => $penumpang
            );

            $datalok = array(
                'locationLatitude' => $lat,
                'locationLongitude' => $lng,
                'speed' => $speed
            );

            $a = $this->Ambil_model->cekPenumpang($bus)[0]['jumlahPenumpang'];
            $b = $this->Ambil_model->lat($bus)[0]['locationLatitude'];
            $c = $this->Ambil_model->lng($bus)[0]['locationLongitude'];

            if ($a != $penumpang || $a == "") {
                print_r("Jumlah Penumpang Terakhir : " . $a);
                echo "<br>";
                $this->Ambil_model->savelokpen($datalokpen, $bus);
                $response = ["status" => "Success !!!"];
                echo json_encode($response);
            } else {
                print_r("Jumlah Penumpang Terakhir : " . $a);
                echo "<br>";
                $response = ["status" => "Data sama sebelumnya !!!"];
                echo json_encode($response);
            }
            if ($this->Ambil_model->save($datasensor, $bus)) {
                echo "Berhasil";
            } else {
                echo "Gagal";
            }
        } else {
            echo "Tidak ada data yang dikirimkan";
        }

        if (isset($_GET['lat'], $_GET['lng'], $_GET['speed'], $_GET['bus'])) {
            $lat = $this->input->get('lat');
            $lng = $this->input->get('lng');
            $speed = $this->input->get('speed');
            $bus = $this->input->get('bus');

            $datalok = array(
                'locationLatitude' => $lat,
                'locationLongitude' => $lng,
                'speed' => $speed
            );

            $b = $this->Ambil_model->lat($bus)[0]['locationLatitude'];
            $c = $this->Ambil_model->lng($bus)[0]['locationLongitude'];

            if ($b != $lat && $c != $lng) {
                $this->Ambil_model->savelok($datalok, $bus);
                $response = ["status" => "Success !!!"];
                echo json_encode($response);
            } else {
                $response = ["status" => "Data sama sebelumnya !!!"];
                echo json_encode($response);
            }
        }
    }
}
