<?php include "Header.php"; //$this->load->view('Footer');           ?>


<div class="content-wrapper">

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><?php echo $title; ?></h1>
                </div>
            </div>
        </div>
    </section>

	<!-- Main content target="_blank"  -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">

                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h3 class="card-title">View <?php echo $title; ?></h3>
                            
                        </div>

                        <div class="card-body" id="Response"></div>

                    </div>

                </div>
            </div>
        </div>
    </section>

</div> <!-- content-wrapper-->

<script>
    var url = url;
    var base_url = "<?php echo base_url(); ?>";
</script>
<script src="<?php echo base_url(); ?>assets/admin/customjs/Bookdata.js"></script>





<?php include "Footer.php"; //$this->load->view('Footer');  ?>
  