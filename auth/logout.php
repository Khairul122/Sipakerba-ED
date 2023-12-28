<?php
session_start();
session_destroy();
echo "<script>alert('Berhasil logout dari PT JASA RAHARJA!'); window.location='../index.php';</script>";