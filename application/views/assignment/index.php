<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">List of Assignments</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('assignment/add'); ?>" class="btn btn-success btn-sm">Add Assignment</a> 
                </div>
            </div>
            <div class="box-body">
                <table id="assignmentTable" class="table table-striped">
                <thead>
                    <tr>
						<th>ID#</th>
						<th>Class</th>
						<th>File</th>
						<th>Description</th>
						<th>Title</th>
						<th>Date Uploaded</th>
						<th>Status</th>
						<th>Actions</th>
                    </tr>
                </thead>
                    <?php foreach($assignments as $a){ ?>
                    <tr>
						<td><?php echo $a['assignID']; ?></td>
						<td><?php echo $a['subjectCode']; ?></td>
						<td><a href="../uploads/assignments/<?php echo $a['assignFile']; ?>" target="_blank" class='btn btn-success' download>
                        Download
                        </a></td>
						<td><?php echo $a['assignDesc']; ?></td>
						<td><?php echo $a['assignTitle']; ?></td>
						<td><?php echo $a['dateUploaded']; ?></td>
						<td><?php echo $a['status']; ?></td>
						<td>
                            <a href="<?php echo site_url('assignment/remove/'.$a['assignID']); ?>" class="btn btn-danger btn-xs" onclick='return confirm("Delete Record?");'><span class="fa fa-trash"></span> Delete</a>
                            <?php if($a['status'] == 'Archived'): ?>
                                <a href="<?php echo site_url('assignment/restore/'.$a['assignID']); ?>" class="btn btn-success btn-xs" onclick='return confirm("Restore Record?");'><span class="fa fa-check"></span> Restore</a>
                            <?php endif;?>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
