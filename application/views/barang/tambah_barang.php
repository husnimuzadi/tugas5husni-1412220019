<div class="card border border-primary">
    <div class="card-header bg-primary text-white">
        <?php echo isset($barang) ? 'Edit Barang' : 'Tambah Barang'; ?>
    </div>
    <div class="card-body">
        <form action="<?php echo isset($barang) ? site_url('barang/edit_barang/' . $barang['id']) : site_url('barang/tambah_barang'); ?>" method="post">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="Kode_Barang">Kode Barang</label>
                        <input type="text" class="form-control" id="Kode_Barang" name="Kode_Barang" value="<?php echo isset($barang) ? $barang['Kode_Barang'] : set_value('Kode_Barang'); ?>">
                        <?php echo form_error('Kode_Barang', '<small class="text-danger">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="Nama_Barang">Nama Barang</label>
                        <input type="text" class="form-control" id="Nama_Barang" name="Nama_Barang" value="<?php echo isset($barang) ? $barang['Nama_Barang'] : set_value('Nama_Barang'); ?>">
                        <?php echo form_error('Nama_Barang', '<small class="text-danger">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="Kategori_Barang">Kategori Barang</label>
                        <input type="text" class="form-control" id="Kategori_Barang" name="Kategori_Barang" value="<?php echo isset($barang) ? $barang['Kategori_Barang'] : set_value('Kategori_Barang'); ?>">
                        <?php echo form_error('Kategori_Barang', '<small class="text-danger">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="Deskripsi_Barang">Deskripsi Barang</label>
                        <textarea class="form-control" id="Deskripsi_Barang" name="Deskripsi_Barang" rows="3"><?php echo isset($barang) ? $barang['Deskripsi_Barang'] : set_value('Deskripsi_Barang'); ?></textarea>
                        <?php echo form_error('Deskripsi_Barang', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="Harga_Jual">Harga Jual</label>
                        <input type="text" class="form-control" id="Harga_Jual" name="Harga_Jual" value="<?php echo isset($barang) ? $barang['Harga_Jual'] : set_value('Harga_Jual'); ?>">
                        <?php echo form_error('Harga_Jual', '<small class="text-danger">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="Stok_Barang">Stok Barang</label>
                        <input type="text" class="form-control" id="Stok_Barang" name="Stok_Barang" value="<?php echo isset($barang) ? $barang['Stok_Barang'] : set_value('Stok_Barang'); ?>">
                        <?php echo form_error('Stok_Barang', '<small class="text-danger">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="Supplier_Barang">Supplier Barang</label>
                        <input type="text" class="form-control" id="Supplier_Barang" name="Supplier_Barang" value="<?php echo isset($barang) ? $barang['Supplier_Barang'] : set_value('Supplier_Barang'); ?>">
                        <?php echo form_error('Supplier_Barang', '<small class="text-danger">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="Tanggal_Masuk">Tanggal Masuk</label>
                        <input type="date" class="form-control" id="Tanggal_Masuk" name="Tanggal_Masuk" value="<?php echo isset($barang) ? $barang['Tanggal_Masuk'] : set_value('Tanggal_Masuk'); ?>">
                        <?php echo form_error('Tanggal_Masuk', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block mt-3"><?php echo isset($barang) ? 'Update' : 'Simpan'; ?> </button>
                <a href="<?php echo site_url('barang/data_barang'); ?>" class="btn btn-danger mt-3">Batal</a>
            </div>
        </form>
    </div>
</div>
