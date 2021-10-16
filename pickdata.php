<?php 
$title='Jemput Paket';
require_once'include/header.php';
?>
<?php 
require_once'include/navbar.php';
?>
<!-- Start Page here -->
    <div class="container-sm justify-content-md-center">
        <div class="row">
            <div class="col">
                <div class="card xs justify-content-md-center">

                    <div class="card-header">
                        <h6>Input Data paket Di Jemput</h6>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <div class="form-group" id="input-once">
                                    <label for="seller-name">Seller</label>
                                    <input type="text" name="seller-name" class="form-control shadow" placeholder="Nama Penjual">
                                </div>
                            </div>
                        </div>
                        <div class="row" id="add-form-field">
                            <div class="col-md-6">
                                <div class="form-group" id="addable_form">
                                    <label for="receiver-name">Name</label>
                                    <input type="text" name="receiver-named" class="form-control shadow" required placeholder="Nama Penerima">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group" id="price_holder">
                                    <label for="price">Price</label>
                                    <input type="number" name="price" class="form-control shadow" required placeholder="Harga Paket">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group" id="button-remove-field">
                                    <br>
                                    <button type="button" class="remove-btn btn-danger">Hapus</button>
                                </div>
                            </div>
                        </div>
                        <div class="paste-form-field"></div>
                    </div>

                    <div class="card-footer">
                        <div class="row g-2 ">
                            <div class="col-md-2 offset-md-8">
                                <div class="submit_data" id="button-save-data">
                                    <button type="button" class="remove-btn btn-success" value="Submit" id="save_button">Save Data</button>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="add_form_field" id="button-add-field">
                                    <button type="submit" class="remove-btn btn-primary" id="add_new_field">Add data</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- end page here -->
<?php
require_once'include/footer.php';
?>          