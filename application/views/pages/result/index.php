<script src="<?php echo base_url('assets/plugins/datepicker/js/bootstrap-datepicker.js'); ?>"></script>
<link href="<?php echo base_url('assets/plugins/datepicker/css/datepicker.css') ?>" rel="stylesheet">

<div class="main-content">
      <section class="section">
          <div class="section-header">
            <div class="section-header-breadcrumb">
            </div>
          </div>
      </section>
 	<div class="section-body">
 	<?= $this->session->flashdata('message'); ?>
  	    <div class="card mt-2">
                <div class="card-header" style="background:	#228B22;">
                <h4 style="color: Black;">Table Pencarian</h4>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-striped table-md" id= "softex">
<div class="row">
    <div class="col-lg-12 col-md-5">
        <div class="card animated fadeInDown">
        <form method="post" id="form1" action="<?php echo base_url("ResultController/laporan");?>">   
        <div class="form-body">   
                <div class="row ">
                        <div class="col-md-8">
                        <div class="form-group form-inline">
                                <label>Start</label>
                                <input  type="text" class="form-control"  name="date_start" id="date_start" data-date-format="d MM yyyy" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group form-inline">
                                <label>End</label>
                                <input  type="text"  class="form-control"  name="date_end" id="date_end" data-date-format="d MM yyyy" class="form-control">
                            </div>
                        </div>>
                        <div class="col-md-8">
                            <button class="btn btn-default" type="submit"><i class="fas fa-search">cari</i></button>
                        </div>
                      
                                        <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Device_number</th>
                                                    <th>No_hp</th>
                                                    <th>Survey</th>
                                                    <th>Submit_time</th>
                                                    <th>Backup_time</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                        <?php 
                                                $no = 1;
                                                foreach($result as $row): ?>
                                                <tr>
                                                    <td><?= $no++; ?></td>
                                                    <td><?= $row->device_number; ?></td>
                                                    <td><?= $row->no_hp; ?></td>
                                                    <td><?= $row->survey; ?></td>
                                                    <td><?= $row->submit_time; ?></td>
                                                    <td><?= $row->backup_time; ?></td>
                                                </tr>
                                                <?php endforeach ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                      </div>
                  </div>
                </row>
            </div>
        </div>
    </div>
<script>
    $(function () {
        $('#date_start').datepicker({
            autoclose: true
        });
    });
    
    $(function () {
        $('#date_end').datepicker({
            autoclose: true
        });
    });
   
</script>   