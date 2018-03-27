<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">List of Auditlogs</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('auditlog/add'); ?>" class="btn btn-success btn-sm">Add AuditLog</a> 
                </div>
            </div>
            <div class="box-body">
                <table id="auditTable" class="table table-striped">
                <thead>
                    <tr>
						<th>ID#</th>
						<th>Name</th>
						<th>Descripton</th>
						<th>Timestamp</th>
						<th>Status</th>
                    </tr>
                </thead>
                    <?php foreach($auditlogs as $a){ ?>
                    <tr>
						<td><?php echo $a['auditID']; ?></td>
						<td><?php echo $a['userFN']; ?> <?php echo $a['userLN']; ?></td>
						<td><?php echo $a['auditDesc']; ?></td>
						<td><?php echo $a['timestamp']; ?></td>
						<td><?php echo $a['status']; ?></td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
