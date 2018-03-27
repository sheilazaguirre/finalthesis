<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">List of Class</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('theclass/add'); ?>" class="btn btn-success btn-sm">Add Class</a> 
                </div>
            </div>
            <div class="box-body">
                <table id="classTable" class="table table-striped">
                <thead>
                    <tr>
						<th>ID#</th>
						<th>Subject Code</th>
						<th>Faculty Name</th>
						<th>Timeslot</th>
						<th>Venue Code</th>
						<th>Academic Year</th>
						<th>Semester</th>
						<th>Status</th>
						<th>Actions</th>
                    </tr>
                </thead>
                    <?php foreach($theclasses as $c){ ?>
                    <tr>
						<td><?php echo $c['classID']; ?></td>
						<td><?php echo $c['subjectCode']; ?></td>
						<td><?php echo $c['userLN']; ?>, <?php echo $c['userFN']; ?></td>
						<td><?php echo $c['dayOfWeek']; ?> <?php echo $c['startTime']; ?> - <?php echo $c['endTime']; ?></td>
						<td><?php echo $c['venueCode']; ?></td>
						<td><?php echo $c['academicYear']; ?></td>
						<td><?php echo $c['semester']; ?> Semester</td>
						<td><?php echo $c['status']; ?></td>
						<td>
                            <a href="<?php echo site_url('theclass/edit/'.$c['classID']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('theclass/remove/'.$c['classID']); ?>" class="btn btn-danger btn-xs" onclick='return confirm("Delete Record?");'><span class="fa fa-trash"></span> Delete</a>
                            <?php if($c['status'] == 'Archived'): ?>
                                <a href="<?php echo site_url('theclass/restore/'.$c['classID']); ?>" class="btn btn-success btn-xs" onclick='return confirm("Restore Record?");'><span class="fa fa-check"></span> Restore</a>
                            <?php endif;?>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
