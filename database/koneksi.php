<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'Griffith111';
$dbname = 'siaksmp';
$koneksi = new mysqli($dbhost,$dbuser,$dbpass,$dbname);
if( $koneksi->connect_error )
{
 die( 'Oops!! Koneksi Gagal : '. $koneksi->connect_error );
}
