<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<img src="<?= base_url('assets/img/2.jpg'); ?>" class="logo" />
<h6 class="display-5 text-center mt-2 mb-0">Laporan Tahunan Stok Frozen Food</h6>
<p class="text-center display-6 mt-0"><?= ' Tahun ' . $tahun; ?></p>
<hr class="mt-0" />
<table class="table table-sm table-bordered table-striped mt-3">
    <thead>
        <tr>
            <th scope="col">No.</th>
            <th scope="col">Kode Frozen Food</th>
            <th scope="col">Nama Frozen Food</th>
            <th scope="col">Merk Frozen Food</th>
            <th scope="col" class="text-center">Stok Frozen Food</th>
            <th scope="col" class="text-center">Qty Penjualan</th>
            <th scope="col" class="text-center">Qty Pengadaan</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $i = 1;
        if ($data->num_rows() > 0) {
            foreach ($data->result() as $dt) {
                $penjualan = ($dt->qty_penjualan_new != '') ? $dt->qty_penjualan_new : 0;
                $pembelian = ($dt->qty_pembelian_new != '') ? $dt->qty_pembelian_new : 0;

                echo '<tr>';
                echo '<td>' . $i++ . '</td>';
                echo '<td>' . $dt->kode_barang . '</td>';
                echo '<td>' . $dt->nama_barang . '</td>';
                echo '<td>' . $dt->brand . '</td>';
                echo '<td class="text-center">' . (($dt->stok + $penjualan) - $pembelian) . '</td>';
                echo '<td class="text-center">' . (($dt->qty_penjualan != '') ? $dt->qty_penjualan : 0) . '</td>';
                echo '<td class="text-center">' . (($dt->qty_pembelian != '') ? $dt->qty_pembelian : 0) . '</td>';
                echo '</tr>';
            }
        } else {
            echo '<tr>';
            echo '<td colspan="7" class="text-center">Belum Ada Data Stok Tahunans</td>';
            echo '</tr>';
        }
        ?>
    </tbody>
</table>
