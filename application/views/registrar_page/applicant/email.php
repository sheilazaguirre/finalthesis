<div class="row">
    <div class="col-md-12">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Send Email Applicant</h3>
            </div>
            <?php echo form_open('reg_applicant/email/'.$applicant['apid']); ?>
            <div class="box-body">
                <div class="row clearfix">
                    <div class="col-md-6">
                        <label for="courseID" class="control-label"><span class="text-danger">*</span>Course</label>
                        <div class="form-group">
                            <select name="courseID" class="form-control" readonly>
                                <option value="">Select Course...</option>
                                <?php
                                $course_values = array(
                                    '1'=>'Bachelor of Science in Computer Science',
                                    '2'=>'Bachelor of Secondary Education - Major in Mathematics',
                                    '3'=>'Bachelor of Elementary Education',
                                    '3'=>'Bachelor of Secondary Education - Major in Filipino',
                                    '5'=>'Bachelor of Science in Business Administration - Major in Management',
                                    '6'=>'Bachelor of Secondary Education - Science & Health',
                                );

                                foreach($course_values as $value => $display_text)
                                {
                                    $selected = ($value == $applicant['courseID']) ? ' selected="selected"' : "";

                                    echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
                                }
                                ?>
                            </select>
                            <span class="text-danger"><?php echo form_error('courseID');?></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="apfn" class="control-label"><span class="text-danger">*</span>Applicant Name</label>
                        <div class="form-group">
                            <input type="text" name="apfn" value="<?php echo ($applicant['apfn']); ?> <?php echo ($applicant['apmn']) ; ?> <?php echo ($applicant['apln']) ; ?>" class="form-control" id="apfn" readonly/>
                            <span class="text-danger"><?php echo form_error('apfn');?></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="email" class="control-label"><span class="text-danger">*</span>Email Address</label>
                        <div class="form-group">
                            <input type="text" name="email" value="<?php echo ($this->input->post('email') ? $this->input->post('email') : $applicant['email']); ?>" class="form-control" id="email" readonly/>
                            <span class="text-danger"><?php echo form_error('email');?></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="mobile" class="control-label"><span class="text-danger">*</span>Mobile No</label>
                        <div class="form-group">
                            <input type="text" name="mobile" value="<?php echo ($this->input->post('mobile') ? $this->input->post('mobile') : $applicant['mobile']); ?>" data-inputmask='"mask": "(0999)999-9999"' class="form-control" id="mobile" data-mask readonly/>
                            <span class="text-danger"><?php echo form_error('mobile');?></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="schedule" class="control-label"><span class="text-danger">*</span>Applicant Schedule</label>
                        <div class="form-group">
                            <select name="schedule" class="form-control">
                                <option value="">Select Applicant Schedule...</option>
                                <?php
                                $schedule_values = array(
                                    'Monday 1:00 - 2:00 PM'=>'Monday 1:00 - 2:00 PM',
                                    'Wednesday 1:00 - 2:00 PM'=>'Wendesday 1:00 - 2:00 PM',
                                    'Friday 1:00 - 2:00 PM'=>'Friday 1:00 - 2:00 PM',
                                );

                                foreach($schedule_values as $value => $display_text)
                                {
                                    $selected = ($value == $this->input->post('schedule')) ? ' selected="selected"' : "";

                                    echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
                                }
                                ?>
                            </select>
                            <span class="text-danger"><?php echo form_error('schedule');?></span>
                        </div>
                    </div>

                    <div class="col-md-6" hidden>
                        <label for="datemodified" class="control-label">Datemodified</label>
                        <div class="form-group">
                            <input type="text" name="datemodified" value="<?php echo ($this->input->post('datemodified') ? $this->input->post('datemodified') : $applicant['datemodified']); ?>" class="has-datetimepicker form-control" id="datemodified"/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-footer">
                <button type="submit" class="btn btn-success">
                    <i class="fa fa-envelope"></i> Send Email
                </button>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>
