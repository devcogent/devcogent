<?php $__env->startSection('breadcrumb'); ?>
    <?php echo $__env->make('admin.partials.crumb',[
    'crumbs'=>[
            route('admin.dashboard')=>__('default.dashboard'),
            route('admin.student.sessions')=>__('default.courses'),
            '#'=>isset($pageTitle)?$pageTitle:''
        ]], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="card">
            <div class="card-header">
                <h4><?php echo e(__lang('setup-course')); ?></h4>
                <div class="card-header-action">
                    
                </div>
            </div>
    <div class="card-body">
        <form id="sessionform" class="form-horizontal" role="form" method="post" action="<?php echo e($action); ?>">
          <?php echo csrf_field(); ?>
            <!-- Smart Wizard -->
            <p><?php echo __lang('fill-each-section'); ?> </p>
            <div id="course_wizard" class="form_wizard wizard_horizontal">
                <ul class="wizard_steps">
                    <li>
                        <a href="#step-1">
                            <span class="step_no">1</span>
                            <span class="step_descr">
                                              <?php echo e(__lang('info')); ?><br/>
                                              <small><?php echo e(__lang('basic-course-data')); ?></small>
                                          </span>
                        </a>
                    </li>
                    
                    <li>
                        <a href="#step-3">
                            <span class="step_no">2</span>
                            <span class="step_descr">
                                              <?php echo e(__lang('scheduling')); ?><br />
                                              <small><?php echo e(__lang('start-end-dates')); ?></small>
                                          </span>
                        </a>
                    </li>
                    
                </ul>
                <div id="step-1">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <div>
                                    <label for="password1" class="control-label"><span class="required">*</span><?php echo e(__lang('course-name')); ?></label>
                                </div>
                                <div>
                                    <?php echo e(formElement($form->get('session_name'))); ?>

                                    <p class="help-block text-danger"><?php echo e(formElementErrors($form->get('session_name'))); ?></p>
                                </div>
                            </div>
                        </div>

                    </div>


                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <div >
                                    <label for="password1" class="control-label"><span class="required">*</span><?php echo e(__lang('short-description')); ?></label>
                                </div>
                                <div >
                                    <?php echo e(formElement($form->get('short_description'))); ?>

                                    <p class="help-block"><?php echo e(formElementErrors($form->get('short_description'))); ?></p>
                                    <div>
                                        <span class="chars-remaining"></span> <?php echo e(__lang('characters-remaining')); ?>

                                        (<span class="chars-max"></span> <?php echo e(strtolower(__lang('maximum'))); ?>)
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <div>
                                    <label for="password1" class="control-label"><?php echo e(__lang('course-description')); ?></label>
                                </div>
                                <div>
                                    <?php echo e(formElement($form->get('description'))); ?>

                                    <p class="help-block text-danger"><?php echo e(formElementErrors($form->get('description'))); ?></p>
                                </div>
                            </div>
                        </div>


                    </div>


                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <div>
                                    <label for="password1" class="control-label"><?php echo e(__lang('introduction')); ?></label>
                                </div>
                                <div>
                                    <?php echo e(formElement($form->get('introduction'))); ?>

                                    <p class="help-block text-danger"><?php echo e(formElementErrors($form->get('introduction'))); ?></p>
                                </div>
                            </div>
                        </div>


                    </div>


                    



                </div>
                <div id="step-2" class="container">


                    <div class="row">
                        <div class="col-md-6">
                            
                        </div>
                        <div class="col-md-6">
                            
                        </div>

                    </div>
                    

                    

                    <div class="row">


                       
                        

                    </div>

                    <div class="row">


                        
                        

                    </div>


                    <div class="row">



                        
                        

                    </div>

                    <div class="row">
                        
                    </div>

                </div>
                <div id="step-3">
                    <div class="row">

                        <div class="col-md-5">
                            <div class="form-group">
                                <div >
                                    <label for="password1" class="control-label"><?php echo e(__lang('course-start-date')); ?> (<?php echo e(__lang('optional')); ?>)</label>
                                </div>
                                <div id="datepicker1" class="input-group date" > 
                                    <input class="form-control" type="text" id="session_date" name="session_date"  value="<?php if(isset($session_date)): ?> <?php echo e($session_date); ?>

                                        
                                    <?php endif; ?>" readonly/> 
                                    <span class="input-group-addon"> 
                                        <i class="glyphicon glyphicon-calendar"></i> 
                                    </span> 
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-md-2">
                        </div>


                        <div class="col-md-5">
                            <div class="form-group">
                                <div >
                                    <label for="password1" class="control-label"><?php echo e(__lang('course-end-date')); ?> (<?php echo e(__lang('optional')); ?>)</label>
                                </div>
                                <div id="datepicker2" class="input-group date" > 
                                    <input class="form-control" type="text" id="session_end_date" name="session_end_date" value="<?php if(isset($session_end_date)): ?> <?php echo e($session_end_date); ?>

                                        
                                    <?php endif; ?>" readonly/> 
                                    <span class="input-group-addon"> 
                                        <i class="glyphicon glyphicon-calendar"></i> 
                                    </span> 
                                </div>
                                
                            </div>
                        </div>

                       




                    </div>

                    <div class="row">



                        

                         <div class="col-md-5">
                            <div class="form-group">
                                <div >
                                    <label for="password1" class="control-label"><?php echo e(__lang('status')); ?></label>
                                </div>
                                <div >
                                    <?php echo e(formElement($form->get('session_status'))); ?>

                                    <p class="help-block text-danger"><?php echo e(formElementErrors($form->get('session_status'))); ?></p>
                                </div>
                            </div>
                        </div>





                    </div>



                </div>
                

            </div>
            <!-- End SmartWizard Content -->


                </form>


        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>
    <script type="text/javascript" src="<?php echo e(basePath() . '/client/vendor/ckeditor/ckeditor.js'); ?>"></script>
    <script  type="text/javascript" src="<?php echo e(basePath().'/client/vendor/datatables/media/js/jquery.dataTables.min.js'); ?>"></script>
    <script  type="text/javascript" src="<?php echo e(basePath().'/client/vendor/stupidtable/stupidtable.min.js'); ?>"></script>

    <!-- FastClick -->
    <script src="<?php echo e(basePath()); ?>/client/themes/cpanel/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?php echo e(basePath()); ?>/client/themes/cpanel/vendors/nprogress/nprogress.js"></script>
    <!-- jQuery Smart Wizard -->
    <script src="<?php echo e(basePath()); ?>/client/themes/cpanel/vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js"></script>
   

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">   
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> 
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> 
     <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script> 
     <script> 
     $(function () { 
 
            $("#datepicker1").datepicker({  
                 startDate: new Date(),
                 format: 'yyyy-mm-dd'
             });
             
             $("#datepicker2").datepicker({  
                 startDate: new Date(),
                 format: 'yyyy-mm-dd'
             });
             
     }); 
     </script> 
    


<script>
        $('#course_wizard').smartWizard({
            enableAllSteps: true,
            enableFinishButton: true,
            labelNext:'<?php echo e(__lang('Next')); ?>', // label for Next button
            labelPrevious:'<?php echo e(__lang('Previous')); ?>', // label for Previous button
            labelFinish:'<?php echo e(__lang('Submit')); ?>'  // label for Finish button
        });
        CKEDITOR.on('instanceReady', function() {
            $('#course_wizard').smartWizard('fixHeight');
        });
    </script>


    <script type="text/javascript" src="<?php echo e(basePath()); ?>/client/vendor/pickadate/picker.js"></script>
    <script type="text/javascript" src="<?php echo e(basePath()); ?>/client/vendor/pickadate/picker.date.js"></script>
    <script type="text/javascript" src="<?php echo e(basePath()); ?>/client/vendor/pickadate/picker.time.js"></script>
    <script type="text/javascript" src="<?php echo e(basePath()); ?>/client/vendor/pickadate/legacy.js"></script>
    <script type="text/javascript"><!--
        function sortTable() {
            console.log('table sorted');

            $("#selectedTable").stupidtable();
            var $th_to_sort = $("#selectedTable").find("thead th").eq(1);
            $th_to_sort.stupidsort();
            $th_to_sort.stupidsort('asc');
        }


        var table;
        function initializeTable(){
                var dtOptions = {

                "ordering": true,
                columnDefs: [{
                    orderable: false,
                    targets: "no-sort"
                },
                    {
                        "targets": [ 2 ],
                        "visible": false
                    }
                ]

            };

            if ( !$.fn.dataTable.isDataTable( '#datatable' ) ) {
                table = $('#datatable').DataTable(dtOptions);
            }
            $('.dataTables_filter input').attr("placeholder", "Class or Group name");
            showList();
             jQuery(function(){
              /* $('.date').pickadate({
                    format: 'yyyy-mm-dd'
                });

                table.$('.date').pickadate({
                    format: 'yyyy-mm-dd'
                });

                table.$('.time').pickatime({
                    interval: 15
                });*/
            });

            $("#select_all").change(function(){  //"select all" change
                var status = this.checked; // "select all" checked status
                table.$('.cbox').each(function(){ //iterate all listed checkbox items
                    this.checked = status; //change ".checkbox" checked status
                });
                initializeTable(table);
                showList();

            });



            function showList(){
                $('#selectedlist').text('');
                table.$('.cbox').each(function(){ //iterate all listed checkbox items
                    if(this.checked){
                        var id = $(this).val();
                        //$('#selectedlist').prepend('<li>'+table.$('#lesson_name_'+id).text()+' (position : '+table.$('input[name=sort_order_'+id+']').val()+')</li>');
                        $('#selectedlist').append('<tr class="sort_row" data-id="'+id+'"><td>'+table.$('#lesson_name_'+id).text()+'</td><td class="sort_cell">'+table.$('input[name=sort_order_'+id+']').val()+'</td><td>'+table.$('input[name=lesson_date_'+id+']').val()+'</td></tr>');
                    } //change ".checkbox" checked status
                });

                sortTable();
            }


            table.$('input').change(function(){ //".checkbox" change

                showList();
            });

            table.$('.cbox').change(function(){ //".checkbox" change
                //uncheck "select all", if one of the listed checkbox item is unchecked
                if(this.checked == false){ //if this item is unchecked
                    $("#select_all")[0].checked = false; //change "select all" checked status to false
                }

                //check "select all" if all checkbox items are checked
                if (table.$('.cbox:checked').length == table.$('.cbox').length ){
                    $("#select_all")[0].checked = true; //change "select all" checked status to true
                }
                showList();
            });
        }


        initializeTable();

        //--></script>


    <script type="text/javascript">

        CKEDITOR.replace('description', {
            filebrowserBrowseUrl: '<?php echo e(basePath()); ?>/admin/filemanager',
            filebrowserImageBrowseUrl: '<?php echo e(basePath()); ?>/admin/filemanager',
            filebrowserFlashBrowseUrl: '<?php echo e(basePath()); ?>/admin/filemanager'
        });

        CKEDITOR.replace('introduction', {
            filebrowserBrowseUrl: '<?php echo e(basePath()); ?>/admin/filemanager',
            filebrowserImageBrowseUrl: '<?php echo e(basePath()); ?>/admin/filemanager',
            filebrowserFlashBrowseUrl: '<?php echo e(basePath()); ?>/admin/filemanager'
        });

    </script>


    <script>


        function image_upload(field, thumb) {
            console.log('image upload');
            $('#dialog').remove();

            $('#content').prepend('<div id="dialog" style="padding: 3px 0px 0px 0px;"><iframe src="<?php echo e(basePath()); ?>/admin/filemanager?&token=true&field=' + encodeURIComponent(field) + '" style="padding:0; margin: 0; display: block; width: 100%; height: 100%;" frameborder="no" scrolling="auto"></iframe></div>');

            $('#dialog').dialog({
                title: '<?php echo e(addslashes(__lang('Image Manager'))); ?>',
                close: function (event, ui) {
                    if ($('#' + field).attr('value')) {
                        $.ajax({
                            url: '<?php echo e(basePath()); ?>/admin/filemanager/image?&image=' + encodeURIComponent($('#' + field).val()),
                            dataType: 'text',
                            success: function(data) {
                                $('#' + thumb).replaceWith('<img src="' + data + '" alt="" id="' + thumb + '" />');
                            }
                        });
                    }
                },
                bgiframe: false,
                width: 800,
                height: 570,
                resizable: true,
                modal: false,
                position: "center"
            });
        };

        $(function(){

       //     $('textarea[name=short_description]').maxlength({max: 300,feedbackText:'{r} <?php echo e(__lang('characters-remaining')); ?> ({m} <?php echo e(__lang('maximum')); ?>)'});
            $('textarea[name=short_description]').maxLength();
            $('#sessionform').submit(function(e){
                e.preventDefault();
                table.destroy();
                $(this).unbind('submit');
                $(this).submit();
            });

            $('#addClassForm').submit(function(e){
                $('#addClassBtn').text('<?php echo e(__lang('saving')); ?>...');
                e.preventDefault();
                $.post( $(this).attr('action'),$(this).serialize(), function( data ) {
                    table.destroy();
                    $( "#classes" ).prepend( data );
                    $('#addClassBtn').text('<?php echo e(__lang('Save Changes')); ?>');
                    $('#addClassModal').modal('hide');
                    $('#addClassForm').find("input[type=text], textarea").val("");
                    jQuery('.date').pickadate({
                        format: 'yyyy-mm-dd'
                    });

                    jQuery('.time').pickatime({
                        interval: 15
                    });

                    //table= $('#datatable').DataTable(dtOptions);
                    initializeTable();
                });
            })

            $("#selectedTable tbody").sortable({ opacity:0.6, update: function() {

                    var counter = 1;
                    //console.log(order);

                    $('.sort_row').each(function(){
                        $(this).find('.sort_cell').text(counter);
                        //update field
                        var id = $(this).attr('data-id');
                        $('input[name=sort_order_'+id+']').val(counter);
                        counter++;
                    }) }});

        });

        $('div.actionBar a.buttonNext,div.actionBar a.buttonPrevious').on('click',function(){
            $([document.documentElement, document.body]).animate({
                scrollTop: $("#course_wizard").offset().top
            }, 200);
        });
    </script>
    <style>
        #selectedTable tr{
            cursor: grabbing;
        }
    </style>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('header'); ?>
     <link rel="stylesheet" href="<?php echo e(basePath().'/client/vendor/pickadate/themes/default.date.css'); ?>">
    <link rel="stylesheet" href="<?php echo e(basePath().'/client/vendor/pickadate/themes/default.time.css'); ?>">
    <link rel="stylesheet" href="<?php echo e(basePath().'/client/vendor/pickadate/themes/default.css'); ?>">
    <link rel="stylesheet" href="<?php echo e(basePath().'/client/vendor/datatables/media/css/jquery.dataTables.min.css'); ?>">

     <link href="<?php echo e(asset('client/css/wizard.css')); ?>" rel="stylesheet">
     <style>
         span.required{
             color: red;
             font-weight: bold;
         }
     </style>
     <script  type="text/javascript" src="<?php echo e(asset('client/vendor/limit-characters-maxlength/jquery.maxlength.min.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\lms\Resources\views/admin/session/addcourse.blade.php ENDPATH**/ ?>